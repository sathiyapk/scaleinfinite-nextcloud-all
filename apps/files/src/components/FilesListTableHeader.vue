<!--
  - SPDX-FileCopyrightText: 2023 Nextcloud GmbH and Nextcloud contributors
  - SPDX-License-Identifier: AGPL-3.0-or-later
-->
<template>
	<tr class="files-list__row-head">
		<th class="files-list__column files-list__row-checkbox"
			@keyup.esc.exact="resetSelection">
			<NcCheckboxRadioSwitch v-bind="selectAllBind" @update:checked="onToggleAll" />
		</th>

		<!-- Columns display -->

		<!-- Link to file -->
		<th class="files-list__column files-list__row-name files-list__column--sortable"
			:aria-sort="ariaSortForMode('basename')">
			<!-- Icon or preview -->
			<span class="files-list__row-icon" />

			<!-- Name -->
			<FilesListTableHeaderButton :name="t('files', 'Name')" mode="basename" />
		</th>

		<!-- Actions -->
		<th class="files-list__row-actions" />

		<!-- Size -->
		<th v-if="isSizeAvailable"
			class="files-list__column files-list__row-size"
			:class="{ 'files-list__column--sortable': isSizeAvailable }"
			:aria-sort="ariaSortForMode('size')">
			<FilesListTableHeaderButton :name="t('files', 'Size')" mode="size" />
		</th>

		<!-- Mtime -->
		<th v-if="isMtimeAvailable"
			class="files-list__column files-list__row-mtime"
			:class="{ 'files-list__column--sortable': isMtimeAvailable }"
			:aria-sort="ariaSortForMode('mtime')">
			<FilesListTableHeaderButton :name="t('files', 'Modified')" mode="mtime" />
		</th>
        <th>
		<NcButton v-if="filesListWidth >= 512 && enableGridView"
				:aria-label="gridViewButtonLabel"
				:title="gridViewButtonLabel"
				class="files-list__header-grid-button"
				type="tertiary"
				@click="toggleGridView">
				<!-- <template #icon>
					<ListViewIcon v-if="userConfig.grid_view" />
					<ViewGridIcon v-else />
				</template> -->
				<template #icon>
					<template v-if="userConfig.grid_view">
						<!-- <ListViewIcon /> -->
						<i class='bx bx-list-ul'></i>
						
					</template>
					<template v-else>
						<!-- <ViewGridIcon /> -->
						<i class='bx bx-grid-alt'></i>
					</template>
				</template>
				
			</NcButton>
		</th>
		<!-- Custom views columns -->
		<th v-for="column in columns"
			:key="column.id"
			:class="classForColumn(column)"
			:aria-sort="ariaSortForMode(column.id)">
			<FilesListTableHeaderButton v-if="!!column.sort" :name="column.title" :mode="column.id" />
			<span v-else>
				{{ column.title }}
			</span>
		</th>
	</tr>
</template>

<script lang="ts">
import type { Node } from '@nextcloud/files'
import type { PropType } from 'vue'
import type { FileSource } from '../types.ts'

import { translate as t } from '@nextcloud/l10n'
import { defineComponent } from 'vue'
import NcButton from '@nextcloud/vue/dist/Components/NcButton.js'
import NcCheckboxRadioSwitch from '@nextcloud/vue/dist/Components/NcCheckboxRadioSwitch.js'
import FilesListTableHeaderButton from './FilesListTableHeaderButton.vue'

import { useNavigation } from '../composables/useNavigation'
import { useFilesStore } from '../store/files.ts'
import { useSelectionStore } from '../store/selection.ts'
import filesSortingMixin from '../mixins/filesSorting.ts'
import logger from '../logger.js'
import ViewGridIcon from 'vue-material-design-icons/ViewGrid.vue'
import { loadState } from '@nextcloud/initial-state'
import { useUserConfigStore } from '../store/userconfig.ts'
import filesListWidthMixin from '../mixins/filesListWidth.ts'



export default defineComponent({
	name: 'FilesListTableHeader',

	components: {
		FilesListTableHeaderButton,
		NcCheckboxRadioSwitch,
		NcButton,
	},

	mixins: [
		filesSortingMixin,
	],

	props: {
		isMtimeAvailable: {
			type: Boolean,
			default: false,
		},
		isSizeAvailable: {
			type: Boolean,
			default: false,
		},
		nodes: {
			type: Array as PropType<Node[]>,
			required: true,
		},
		filesListWidth: {
			type: Number,
			default: 0,
		},
	},

	setup() {
		const filesStore = useFilesStore()
		const selectionStore = useSelectionStore()
		const { currentView } = useNavigation()
		const enableGridView = (loadState('core', 'config', [])['enable_non-accessible_features'] ?? true)
		const userConfigStore = useUserConfigStore()

		return {
			filesStore,
			selectionStore,

			currentView,
			enableGridView,
			userConfigStore,
		}
	},

	computed: {
		columns() {
			// Hide columns if the list is too small
			if (this.filesListWidth < 512) {
				return []
			}
			return this.currentView?.columns || []
		},

		dir() {
			// Remove any trailing slash but leave root slash
			return (this.$route?.query?.dir || '/').replace(/^(.+)\/$/, '$1')
		},

		selectAllBind() {
			const label = t('files', 'Toggle selection for all files and folders')
			return {
				'aria-label': label,
				checked: this.isAllSelected,
				indeterminate: this.isSomeSelected,
				title: label,
			}
		},

		selectedNodes() {
			return this.selectionStore.selected
		},

		isAllSelected() {
			return this.selectedNodes.length === this.nodes.length
		},

		isNoneSelected() {
			return this.selectedNodes.length === 0
		},

		isSomeSelected() {
			return !this.isAllSelected && !this.isNoneSelected
		},
		gridViewButtonLabel() {
			return this.userConfig.grid_view
				? t('files', 'Switch to list view')
				: t('files', 'Switch to grid view')
		},
		userConfig(): UserConfig {
			return this.userConfigStore.userConfig
		},
	},

	methods: {
		ariaSortForMode(mode: string): ARIAMixin['ariaSort'] {
			if (this.sortingMode === mode) {
				return this.isAscSorting ? 'ascending' : 'descending'
			}
			return null
		},

		classForColumn(column) {
			return {
				'files-list__column': true,
				'files-list__column--sortable': !!column.sort,
				'files-list__row-column-custom': true,
				[`files-list__row-${this.currentView?.id}-${column.id}`]: true,
			}
		},

		onToggleAll(selected) {
			if (selected) {
				const selection = this.nodes.map(node => node.source).filter(Boolean) as FileSource[]
				logger.debug('Added all nodes to selection', { selection })
				this.selectionStore.setLastIndex(null)
				this.selectionStore.set(selection)
			} else {
				logger.debug('Cleared selection')
				this.selectionStore.reset()
			}
		},
toggleGridView() {
			this.userConfigStore.update('grid_view', !this.userConfig.grid_view)
		},
		resetSelection() {
			this.selectionStore.reset()
		},

		t,
	},
})
</script>

<style scoped lang="scss">
.files-list__column {
	user-select: none;
	// Make sure the cell colors don't apply to column headers
	color: var(--color-text-maxcontrast) !important;

	&--sortable {
		cursor: pointer;
	}
}

</style>
