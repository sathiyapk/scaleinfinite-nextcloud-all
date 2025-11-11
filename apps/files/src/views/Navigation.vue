<!-- SPDX-FileCopyrightText: 2023 Nextcloud GmbH -->
<!-- SPDX-License-Identifier: AGPL-3.0-or-later -->

<template>	
	<NcAppNavigation data-cy-files-navigation :aria-label="t('files', 'Files')">
		<template #default>
			<div class="app-logo">
				<!-- Left logo -->
				<span class="app-brand-logo demo" style="left:-20px; position:relative;">
					<img
						:src="baseUrl + '/themes/cloudfloat/core/img/s2-logo.png'"
						class="img-fluid"
						alt="Cloud Float"
					/>
				</span>

				<!-- Center logo -->
				<span class="app-brand-text demo menu-text fw-bolder ms-2 text-capitalize">
					<img
						:src="baseUrl + '/themes/cloudfloat/core/img/storage.png'"
						class="img-fluid"
						alt="Cloud Float"
						style="width:150px; height:auto; left:-60px; position:relative; text-align:center;"
					/>
				</span>

				<!-- Navigation toggle -->
				<div class="app-navigation-toggle-wrapper-new">
					<button
						aria-label="Close navigation"
						type="button"
						class="app-navigation-toggle"
						style="background:none; border:none;">
						<i class="bx bx-chevron-left bx-sm align-middle"></i>
					</button>
				</div>
			</div>

			<!-- Navigation list -->
			<NcAppNavigationList class="files-navigation__list" :aria-label="t('files', 'Views')">
				<FilesNavigationItem :views="viewMap" />
			</NcAppNavigationList>

			<!-- Settings modal -->
			<SettingsModal
				:open="settingsOpened"
				data-cy-files-navigation-settings
				@close="onSettingsClose"
			/>
		</template>

		<!-- Footer -->
		<template #footer>
			<ul class="app-navigation-entry__settings">
				<!-- Deleted files -->
				<NcAppNavigationItem
					:name="t('files', 'Deleted files')"
					@click.prevent.stop="redirectToTrashbin">
					<svg slot="icon" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
						<path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6Z"/>
					</svg>
				</NcAppNavigationItem>

				<!-- External Storage Config -->
				<NcAppNavigationItem
					:name="t('files', 'External Storage Settings')"
					@click.prevent.stop="redirectToStorageSettings">
					<IconCog slot="icon" :size="24" />
				</NcAppNavigationItem>

				<!-- User storage usage statistics -->
				<NavigationQuota />

				<!-- Files settings -->
				<NcAppNavigationItem
					:name="t('files', 'Files settings')"
					data-cy-files-navigation-settings-button
					@click.prevent.stop="openSettings">
					<IconCog slot="icon" :size="24" />
				</NcAppNavigationItem>
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
import IconCog from 'vue-material-design-icons/CogOutline.vue'
import NcAppNavigation from '@nextcloud/vue/components/NcAppNavigation'
import NcAppNavigationItem from '@nextcloud/vue/components/NcAppNavigationItem'
import NcAppNavigationList from '@nextcloud/vue/components/NcAppNavigationList'
import NavigationQuota from '../components/NavigationQuota.vue'
import SettingsModal from './Settings.vue'
import FilesNavigationItem from '../components/FilesNavigationItem.vue'
import { useNavigation } from '../composables/useNavigation'
import { useFiltersStore } from '../store/filters.ts'
import { useViewConfigStore } from '../store/viewConfig.ts'
import logger from '../logger.ts'

const collator = Intl.Collator([getLanguage(), getCanonicalLocale()], { numeric: true, usage: 'sort' })

export default defineComponent({
	name: 'Navigation',

	components: {
		IconCog,
		FilesNavigationItem,
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
		return { currentView, t, views, filtersStore, viewConfigStore }
	},

	data() {
		return {
			settingsOpened: false,
			baseUrl: window.location.origin, // ✅ Automatically sets correct hostname
		}
	},

	computed: {
		currentViewId() {
			return this.$route?.params?.view || 'files'
		},
		viewMap(): Record<string, View[]> {
			return this.views.reduce((map, view) => {
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

	methods: {
		openSettings() {
			this.settingsOpened = true
		},
		onSettingsClose() {
			this.settingsOpened = false
		},
		redirectToStorageSettings() {
			window.location.href = `${this.baseUrl}/index.php/settings/user/externalstorages`
		},
		redirectToTrashbin() {
			window.location.href = `${this.baseUrl}/index.php/apps/files/trashbin`
		},
		showView(view: View) {
			window.OCA?.Files?.Sidebar?.close?.()
			getNavigation().setActive(view)
			emit('files:navigation:changed', view)
		},
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
:deep(.app-navigation__body.app-navigation__body--no-list) {
  overflow-y: auto !important;
  max-height: 100%; /* or a fixed height like 80vh if needed */
}
:deep(.app-navigation__body .material-design-icon.chevron-down-icon svg) {
  color: #02075d !important; /* your desired color */
  fill: #02075d !important;
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
.material-design-icon.chevron-down-icon {
  color: #ccc !important;
}
</style>
