<!--
  - SPDX-FileCopyrightText: 2023 Nextcloud GmbH and Nextcloud contributors
  - SPDX-License-Identifier: AGPL-3.0-or-later
-->
<template>	
	<NcAppNavigation data-cy-files-navigation
		:aria-label="t('files', 'Files')">
	<template #default>
		<div class="app-logo ">
			<span class="app-brand-logo demo " style="left: -20px;   position: relative;">
				  <img :src="baseUrl + '/themes/cloudfloat/core/img/s2-logo.png'" class="img-fluid" alt="Cloud Float">				  
				</span>
			<span class="app-brand-text demo  menu-text fw-bolder ms-2 text-capitalize ">
				  <img :src="baseUrl + '/themes/cloudfloat/core/img/storage.png'"class="img-fluid" alt="Cloud Float" style="width: 150px;  height: auto;  left: -60px;  position: relative;  text-align: center; ">
				</span>
			<div  class="app-navigation-toggle-wrapper-new">
				<button aria-label="Close navigation" type="button"  class="app-navigation-toggle" style="background: none;
 			 border: none;">
				<i class="bx bx-chevron-left bx-sm align-middle"></i>
			   </button>
			</div>
		</div>			
			<!-- <NcAppNavigationList class="files-navigation__list"
				:aria-label="t('files', 'Views')">
				<FilesNavigationItem :views="viewMap" />
			</NcAppNavigationList>	 -->
			<div class="nav-scroll-section">
        <NcAppNavigationList class="files-navigation__list" :aria-label="t('files', 'Views')">
          <FilesNavigationItem :views="viewMap" />
        </NcAppNavigationList>
      </div>

		<!-- Settings modal-->
		<SettingsModal :open="settingsOpened"
			data-cy-files-navigation-settings
			@close="onSettingsClose" />
	</template>
		

		<!-- Non-scrollable navigation bottom elements -->
		<template #footer>
			<ul class="app-navigation-entry__settings">
		
				<NcAppNavigationItem :name="t('files', 'External Storage Settings')"
				@click.prevent.stop="redirectToStorageSettings">
				<IconCog slot="icon" :size="20" />
				</NcAppNavigationItem>
				<!-- User storage usage statistics -->
				<NavigationQuota /> 
				<!-- Files settings modal toggle-->
				
			</ul>
		</template>
	</NcAppNavigation>

</template>

<script lang="ts">
import type { View } from '@nextcloud/files'
import type { ViewConfig } from '../types.ts'

import { emit, subscribe } from '@nextcloud/event-bus'
import { getNavigation } from '@nextcloud/files'
import { t, getCanonicalLocale, getLanguage } from '@nextcloud/l10n'
import { defineComponent } from 'vue'
import IconDelete from 'vue-material-design-icons/Delete.vue'
import IconCog from 'vue-material-design-icons/CogOutline.vue'
import NcAppNavigation from '@nextcloud/vue/components/NcAppNavigation'
import NcAppNavigationItem from '@nextcloud/vue/components/NcAppNavigationItem'
import NcAppNavigationList from '@nextcloud/vue/components/NcAppNavigationList'
import NavigationQuota from '../components/NavigationQuota.vue'
import SettingsModal from './Settings.vue'
import FilesNavigationItem from '../components/FilesNavigationItem.vue'
import FilesNavigationSearch from '../components/FilesNavigationSearch.vue'

import { useNavigation } from '../composables/useNavigation'
import { useFiltersStore } from '../store/filters.ts'
import { useViewConfigStore } from '../store/viewConfig.ts'
import logger from '../logger.ts'

const collator = Intl.Collator(
	[getLanguage(), getCanonicalLocale()],
	{
		numeric: true,
		usage: 'sort',
	},
)

export default defineComponent({
	name: 'Navigation',

	components: {
		IconCog,
		FilesNavigationItem,
		FilesNavigationSearch,

		NavigationQuota,
		NcAppNavigation,
		NcAppNavigationItem,
		NcAppNavigationList,
		SettingsModal,
	},

	setup() {
		const filtersStore = useFiltersStore()
		const viewConfigStore = useViewConfigStore()
		const { currentView, views } = useNavigation()

		return {
			currentView,
			t,
			views,

			filtersStore,
			viewConfigStore,
		}
	},

	data() {
		return {
			settingsOpened: false,
			baseUrl: window.location.origin, // ✅ Automatically sets correct hostname
		}
	},

	computed: {
		/**
		 * The current view ID from the route params
		 */
		currentViewId() {
			return this.$route?.params?.view || 'files'
		},

		/**
		 * Map of parent ids to views
		 */
		viewMap(): Record<string, View[]> {
			return this.views
				.reduce((map, view) => {
					map[view.parent!] = [...(map[view.parent!] || []), view]
					map[view.parent!].sort((a, b) => {
						if (typeof a.order === 'number' || typeof b.order === 'number') {
							return (a.order ?? 0) - (b.order ?? 0)
						}
						return collator.compare(a.name, b.name)
					})
					return map
				}, {} as Record<string, View[]>)
		},
	},

	watch: {
		currentViewId(newView, oldView) {
			if (this.currentViewId !== this.currentView?.id) {
				// This is guaranteed to be a view because `currentViewId` falls back to the default 'files' view
				const view = this.views.find(({ id }) => id === this.currentViewId)!
				// The new view as active
				this.showView(view)
				logger.debug(`Navigation changed from ${oldView} to ${newView}`, { to: view })
			}
		},
	},

	created() {
		subscribe('files:folder-tree:initialized', this.loadExpandedViews)
		subscribe('files:folder-tree:expanded', this.loadExpandedViews)
	},

	beforeMount() {
		// This is guaranteed to be a view because `currentViewId` falls back to the default 'files' view
		const view = this.views.find(({ id }) => id === this.currentViewId)!
		this.showView(view)
		logger.debug('Navigation mounted. Showing requested view', { view })
	},

	methods: {
		async loadExpandedViews() {
			const viewsToLoad: View[] = (Object.entries(this.viewConfigStore.viewConfigs) as Array<[string, ViewConfig]>)
				.filter(([, config]) => config.expanded === true)
				.map(([viewId]) => this.views.find(view => view.id === viewId))
				// eslint-disable-next-line no-use-before-define
				.filter(Boolean as unknown as ((u: unknown) => u is View))
				.filter((view) => view.loadChildViews && !view.loaded)
			for (const view of viewsToLoad) {
				await view.loadChildViews(view)
			}
		},

		/**
		 * Set the view as active on the navigation and handle internal state
		 * @param view View to set active
		 */
		showView(view: View) {
			// Closing any opened sidebar
			window.OCA?.Files?.Sidebar?.close?.()
			getNavigation().setActive(view)
			emit('files:navigation:changed', view)
		},

		/**
		 * Open the settings modal
		 */
		openSettings() {
			this.settingsOpened = true
		},

		/**
		 * Close the settings modal
		 */
		onSettingsClose() {
			this.settingsOpened = false
		},
		redirectToStorageSettings() {	
	window.location.href = `${baseUrl}/index.php/settings/user/externalstorages`;
		},
	// redirectToTrashbin() {	
	// window.location.href = `${baseUrl}/index.php/apps/files/trashbin`;
	// },
	},
})
</script>

<style scoped lang="scss">
// Navigation Icon size
:deep(.files-navigation__list .app-navigation-entry__icon svg),
:deep(.files-navigation__list .icon-vue svg),
:deep(.files-navigation__list .material-design-icon__svg),
:deep(.app-navigation-entry__settings .app-navigation-entry__icon svg),
:deep(.app-navigation-entry__settings .material-design-icon__svg) {
  width: 24px;
  height: 24px;
  min-width: 24px;
  min-height: 24px; 
}

:deep(.app-navigation-entry__icon) {
  display: flex;
  align-items: center;
  justify-content: center;
}

// ✅ Vertical spacing between each menu item
:deep(.files-navigation__list ul),
:deep(.app-navigation-entry__settings) {
  display: flex;
  flex-direction: column;
  gap: 10px; /* adjust as needed */
}
/*:deep(.app-navigation__body.app-navigation__body--no-list) {
  overflow-y: auto !important;
  max-height: 70vh; 
}*/
:deep(.app-navigation__body .material-design-icon.chevron-down-icon svg) {
  color: #02075d !important; /* your desired color */
  fill: #02075d !important;
}
/* Fixed logo section */


/* Scrollable middle section */
.nav-scroll-section {
  flex: 1;
  overflow-y: auto;
  overflow-x: hidden;
  max-height: calc(100vh - 200px); /* adjust height as needed */
}

/* Ensure navigation list fills available width */
.nav-scroll-section .files-navigation__list {
  display: block;
}

/* (Optional) Smooth scroll and thin scrollbar */
.nav-scroll-section {
  scrollbar-width: thin;
  scrollbar-color: #555 #000;
}
//Hide pinned for class for Deteled Files menu item
:deep(.app-navigation-entry--pinned) {
  margin-top: 0 !important;
}

//End
.app-navigation {
	:deep(.app-navigation-entry.active .button-vue.icon-collapse:not(:hover)) {
		color: var(--color-primary-element-text);
	}

	> ul.app-navigation__list {
		// Use flex gap value for more elegant spacing
		padding-bottom: var(--default-grid-baseline, 4px);
	}
}

.app-navigation-entry__settings {
	height: auto !important;
	overflow: hidden !important;
	padding-top: 0 !important;
	// Prevent shrinking or growing
	flex: 0 0 auto;
}

.files-navigation {
	&__list {
		height: 100%; // Fill all available space for sticky views
	}

	:deep(.app-navigation__content > ul.app-navigation__list) {
		will-change: scroll-position;
	}
}
</style>
