<!--
 - SPDX-FileCopyrightText: 2022 Nextcloud GmbH and Nextcloud contributors
 - SPDX-License-Identifier: AGPL-3.0-or-later
 -->
<template>
	<div id="app-dashboard">
		
		<!-- <ul class="statuses">
			<li v-for="status in sortedRegisteredStatus"
				:id="'status-' + status"
				:key="status">
				<div :ref="'status-' + status" />
			</li>
		</ul> -->
		<div class="container-xxl flex-grow-1 container-p-y">
			
<div class="card   my-6 border-0">
                  <div class="card-body row  pb-6 g-6">
                    <div class="col-12 col-lg-8 card-separator">
                      <h5 class="mb-2">{{ greeting.text }},<span class="h4"> {{ displayName }} </span></h5>
                      <div class="col-12 col-lg-5">
                        <p>Your progress this week is Awesome. let's keep it up and get a lot of points reward !</p>
                      </div>
                      <div class="d-flex justify-content-between flex-wrap gap-4 me-12">
                        <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
                          <div class="avatar avatar-lg">
                            <div class="avatar-initial bg-label-primary rounded">
                              <div class="text-primary">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Laptop">
                                    <path id="Vector" opacity="0.2" d="M5.9375 26.125V10.6875C5.9375 10.0576 6.18772 9.45352 6.63312 9.00812C7.07852 8.56272 7.68261 8.3125 8.3125 8.3125H29.6875C30.3174 8.3125 30.9215 8.56272 31.3669 9.00812C31.8123 9.45352 32.0625 10.0576 32.0625 10.6875V26.125H5.9375Z" fill="currentColor" />
                                    <path
                                      id="Vector_2"
                                      d="M5.9375 26.125V10.6875C5.9375 10.0576 6.18772 9.45352 6.63312 9.00812C7.07852 8.56272 7.68261 8.3125 8.3125 8.3125H29.6875C30.3174 8.3125 30.9215 8.56272 31.3669 9.00812C31.8123 9.45352 32.0625 10.0576 32.0625 10.6875V26.125M21.375 13.0625H16.625M3.5625 26.125H34.4375V28.5C34.4375 29.1299 34.1873 29.734 33.7419 30.1794C33.2965 30.6248 32.6924 30.875 32.0625 30.875H5.9375C5.30761 30.875 4.70352 30.6248 4.25812 30.1794C3.81272 29.734 3.5625 29.1299 3.5625 28.5V26.125Z"
                                      stroke="currentColor"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </g>
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="content-right">
                            <p class="mb-0 fw-medium">Hours Spent</p>
                            <h4 class="text-primary mb-0">34h</h4>
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-4">
                          <div class="avatar avatar-lg">
                            <div class="avatar-initial bg-label-info rounded">
                              <div class="text-info">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Lightbulb">
                                    <path
                                      id="Vector"
                                      opacity="0.2"
                                      d="M11.6822 24.7891C10.2684 23.6898 9.12342 22.2832 8.33388 20.6759C7.54435 19.0685 7.13099 17.3025 7.12513 15.5117C7.09544 9.06954 12.2759 3.71095 18.7181 3.56251C21.2113 3.50341 23.6599 4.23078 25.7166 5.64147C27.7732 7.05217 29.3335 9.07457 30.1761 11.4219C31.0188 13.7691 31.101 16.3221 30.4112 18.7188C29.7214 21.1154 28.2945 23.2341 26.3329 24.7742C25.8996 25.1092 25.5486 25.5388 25.3068 26.0301C25.065 26.5215 24.9387 27.0617 24.9376 27.6094V28.5C24.9376 28.815 24.8125 29.117 24.5898 29.3397C24.3671 29.5624 24.0651 29.6875 23.7501 29.6875H14.2501C13.9352 29.6875 13.6331 29.5624 13.4104 29.3397C13.1877 29.117 13.0626 28.815 13.0626 28.5V27.6094C13.0589 27.0658 12.9329 26.5301 12.6939 26.0418C12.4549 25.5536 12.1091 25.1255 11.6822 24.7891Z"
                                      fill="currentColor" />
                                    <path
                                      id="Union"
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M25.1509 6.46609C23.2675 5.17419 21.0251 4.50807 18.7418 4.5622L18.7411 4.56221C18.4983 4.56781 18.2574 4.58151 18.0187 4.60305L18.6951 2.56275C21.398 2.49881 24.0526 3.28743 26.2822 4.8168C28.512 6.34629 30.2037 8.53899 31.1173 11.0839C32.031 13.6289 32.1201 16.3969 31.3722 18.9954C30.6243 21.5938 29.0772 23.8909 26.9505 25.5607L26.9445 25.5654L26.9445 25.5654C26.6318 25.8071 26.3785 26.1171 26.204 26.4717C26.0295 26.8263 25.9384 27.2161 25.9376 27.6113V28.5C25.9376 29.0801 25.7072 29.6365 25.2969 30.0468C24.8867 30.457 24.3303 30.6875 23.7501 30.6875H14.2501C13.67 30.6875 13.1136 30.457 12.7033 30.0468C12.2931 29.6365 12.0626 29.0801 12.0626 28.5V27.6131C12.0595 27.2206 11.9683 26.8339 11.7957 26.4815C11.6232 26.1289 11.3737 25.8196 11.0656 25.5764L11.7414 23.5378C11.9208 23.6976 12.1057 23.8517 12.296 23.9996L11.6821 24.7891L12.301 24.0035C12.8459 24.4328 13.2871 24.9792 13.5921 25.6022C13.8971 26.2252 14.0579 26.9089 14.0626 27.6025L14.0627 27.6094L14.0626 28.5C14.0626 28.5497 14.0824 28.5974 14.1175 28.6326C14.1527 28.6677 14.2004 28.6875 14.2501 28.6875H23.7501C23.7999 28.6875 23.8475 28.6677 23.8827 28.6326C23.9179 28.5974 23.9376 28.5497 23.9376 28.5V27.6094L23.9376 27.6074C23.939 26.9073 24.1004 26.2167 24.4096 25.5885C24.7181 24.9616 25.1657 24.4133 25.7181 23.9855C27.5131 22.5752 28.8188 20.6359 29.4502 18.4422C30.082 16.2473 30.0067 13.9093 29.235 11.7597C28.4633 9.61009 27.0344 7.75799 25.1509 6.46609ZM11.7414 23.5378L11.7414 23.5378L18.0187 4.60305L18.018 4.6031L18.6944 2.56276C11.7043 2.72418 6.09331 8.53234 6.12513 15.5156C6.13159 17.458 6.57998 19.3733 7.43632 21.1167C8.29225 22.8593 9.53332 24.3843 11.0656 25.5764L11.7414 23.5378ZM11.7414 23.5378C10.7009 22.6109 9.84781 21.4898 9.23145 20.235C8.50882 18.7638 8.13049 17.1475 8.12512 15.5084L8.12512 15.5071C8.09905 9.84987 12.4637 5.10456 18.018 4.6031L11.7414 23.5378ZM12.0627 34.4375C12.0627 33.8852 12.5104 33.4375 13.0627 33.4375H24.9377C25.49 33.4375 25.9377 33.8852 25.9377 34.4375C25.9377 34.9898 25.49 35.4375 24.9377 35.4375H13.0627C12.5104 35.4375 12.0627 34.9898 12.0627 34.4375ZM20.3697 7.44532C19.8252 7.35302 19.3089 7.71961 19.2166 8.26412C19.1243 8.80864 19.4909 9.32489 20.0354 9.41719C21.2827 9.62862 22.4336 10.222 23.3292 11.1154C24.2249 12.0087 24.8212 13.1581 25.0358 14.4048C25.1295 14.9491 25.6467 15.3144 26.191 15.2207C26.7353 15.127 27.1005 14.6098 27.0068 14.0655C26.722 12.4107 25.9305 10.8851 24.7417 9.69934C23.5528 8.51353 22.0252 7.72596 20.3697 7.44532Z"
                                      fill="currentColor" />
                                  </g>
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="content-right">
                            <p class="mb-0 fw-medium">Test Results</p>
                            <h4 class="text-info mb-0">82%</h4>
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-4">
                          <div class="avatar avatar-lg">
                            <div class="avatar-initial bg-label-warning rounded">
                              <div class="text-warning">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Check">
                                    <path
                                      id="Vector"
                                      opacity="0.2"
                                      d="M8.08984 29.9102C6.72422 28.5445 7.62969 25.6797 6.93203 24.0023C6.23438 22.325 3.5625 20.8555 3.5625 19C3.5625 17.1445 6.20469 15.7344 6.93203 13.9977C7.65938 12.2609 6.72422 9.45547 8.08984 8.08984C9.45547 6.72422 12.3203 7.62969 13.9977 6.93203C15.675 6.23438 17.1445 3.5625 19 3.5625C20.8555 3.5625 22.2656 6.20469 24.0023 6.93203C25.7391 7.65938 28.5445 6.72422 29.9102 8.08984C31.2758 9.45547 30.3703 12.3203 31.068 13.9977C31.7656 15.675 34.4375 17.1445 34.4375 19C34.4375 20.8555 31.7953 22.2656 31.068 24.0023C30.3406 25.7391 31.2758 28.5445 29.9102 29.9102C28.5445 31.2758 25.6797 30.3703 24.0023 31.068C22.325 31.7656 20.8555 34.4375 19 34.4375C17.1445 34.4375 15.7344 31.7953 13.9977 31.068C12.2609 30.3406 9.45547 31.2758 8.08984 29.9102Z"
                                      fill="currentColor" />
                                    <path
                                      id="Vector_2"
                                      d="M25.5312 15.4375L16.818 23.75L12.4687 19.5937M8.08984 29.9102C6.72422 28.5445 7.62969 25.6797 6.93203 24.0023C6.23437 22.325 3.5625 20.8555 3.5625 19C3.5625 17.1445 6.20469 15.7344 6.93203 13.9977C7.65937 12.2609 6.72422 9.45547 8.08984 8.08984C9.45547 6.72422 12.3203 7.62969 13.9977 6.93203C15.675 6.23437 17.1445 3.5625 19 3.5625C20.8555 3.5625 22.2656 6.20469 24.0023 6.93203C25.7391 7.65937 28.5445 6.72422 29.9102 8.08984C31.2758 9.45547 30.3703 12.3203 31.068 13.9977C31.7656 15.675 34.4375 17.1445 34.4375 19C34.4375 20.8555 31.7953 22.2656 31.068 24.0023C30.3406 25.7391 31.2758 28.5445 29.9102 29.9102C28.5445 31.2758 25.6797 30.3703 24.0023 31.068C22.325 31.7656 20.8555 34.4375 19 34.4375C17.1445 34.4375 15.7344 31.7953 13.9977 31.068C12.2609 30.3406 9.45547 31.2758 8.08984 29.9102Z"
                                      stroke="currentColor"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </g>
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="content-right">
                            <p class="mb-0 fw-medium">Course Completed</p>
                            <h4 class="text-warning mb-0">14</h4>
                          </div>
                        </div>
                      </div> 
                    </div>
                    <div class="col-12 col-lg-4 ps-md-4 ps-lg-6">
                      <div class="d-flex justify-content-end align-items-end">
                        <div class="d-flex align-items-end gap-4 pb-3">
                          <div class="avatar avatar-lg">
                            <div class="avatar-initial bg-label-warning rounded">
                              <div class="text-warning">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="Check">
                                    <path
                                      id="Vector"
                                      opacity="0.2"
                                      d="M8.08984 29.9102C6.72422 28.5445 7.62969 25.6797 6.93203 24.0023C6.23438 22.325 3.5625 20.8555 3.5625 19C3.5625 17.1445 6.20469 15.7344 6.93203 13.9977C7.65938 12.2609 6.72422 9.45547 8.08984 8.08984C9.45547 6.72422 12.3203 7.62969 13.9977 6.93203C15.675 6.23438 17.1445 3.5625 19 3.5625C20.8555 3.5625 22.2656 6.20469 24.0023 6.93203C25.7391 7.65938 28.5445 6.72422 29.9102 8.08984C31.2758 9.45547 30.3703 12.3203 31.068 13.9977C31.7656 15.675 34.4375 17.1445 34.4375 19C34.4375 20.8555 31.7953 22.2656 31.068 24.0023C30.3406 25.7391 31.2758 28.5445 29.9102 29.9102C28.5445 31.2758 25.6797 30.3703 24.0023 31.068C22.325 31.7656 20.8555 34.4375 19 34.4375C17.1445 34.4375 15.7344 31.7953 13.9977 31.068C12.2609 30.3406 9.45547 31.2758 8.08984 29.9102Z"
                                      fill="currentColor" />
                                    <path
                                      id="Vector_2"
                                      d="M25.5312 15.4375L16.818 23.75L12.4687 19.5937M8.08984 29.9102C6.72422 28.5445 7.62969 25.6797 6.93203 24.0023C6.23437 22.325 3.5625 20.8555 3.5625 19C3.5625 17.1445 6.20469 15.7344 6.93203 13.9977C7.65937 12.2609 6.72422 9.45547 8.08984 8.08984C9.45547 6.72422 12.3203 7.62969 13.9977 6.93203C15.675 6.23437 17.1445 3.5625 19 3.5625C20.8555 3.5625 22.2656 6.20469 24.0023 6.93203C25.7391 7.65937 28.5445 6.72422 29.9102 8.08984C31.2758 9.45547 30.3703 12.3203 31.068 13.9977C31.7656 15.675 34.4375 17.1445 34.4375 19C34.4375 20.8555 31.7953 22.2656 31.068 24.0023C30.3406 25.7391 31.2758 28.5445 29.9102 29.9102C28.5445 31.2758 25.6797 30.3703 24.0023 31.068C22.325 31.7656 20.8555 34.4375 19 34.4375C17.1445 34.4375 15.7344 31.7953 13.9977 31.068C12.2609 30.3406 9.45547 31.2758 8.08984 29.9102Z"
                                      stroke="currentColor"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </g>
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="content-right">
                            <p class="mb-0 fw-medium">Course Completed</p>
                            <h4 class="text-warning mb-0">14</h4>
                          </div>
                        </div>
                       <img src="https://cloud.fltt.fr/apps/dashboard/img/man-with-laptop.png" height="175" class="scaleX-n1-rtl" alt="View Badge User" />
                        <div id="leadsReportChart"></div>
                      </div>
                    </div>
                  </div>
                </div>
				</div>
<div class="container-xxl flex-grow-1">


<FileAppWidget />
<CloudfloatWidget />
</div>
		<Draggable v-model="layout"
			class="panels"
			v-bind="{swapThreshold: 0.30, delay: 500, delayOnTouchOnly: true, touchStartThreshold: 3}"
			handle=".panel--header"
			@end="saveLayout">
			<template v-for="panelId in layout">
				<div v-if="isApiWidgetV2(panels[panelId].id)"
					:key="`${panels[panelId].id}-v2`"
					class="panel">
					<div class="panel--header">
						<h2>
							<img v-if="apiWidgets[panels[panelId].id].icon_url"
								:alt="apiWidgets[panels[panelId].id].title + ' icon'"
								:src="apiWidgets[panels[panelId].id].icon_url"
								aria-hidden="true">
							<span v-else
								:aria-labelledby="`panel-${panels[panelId].id}--header--icon--description`"
								aria-hidden="true"
								:class="apiWidgets[panels[panelId].id].icon_class"
								role="img" />
							{{ apiWidgets[panels[panelId].id].title }}
						</h2>
						<span :id="`panel-${panels[panelId].id}--header--icon--description`" class="hidden-visually">
							{{ t('dashboard', '"{title} icon"', { title: apiWidgets[panels[panelId].id].title }) }}
						</span>
					</div>
					<div class="panel--content">
						<ApiDashboardWidget :widget="apiWidgets[panels[panelId].id]"
							:data="apiWidgetItems[panels[panelId].id]"
							:loading="loadingItems" />
					</div>
				</div>
				<div v-else :key="panels[panelId].id" class="panel">
					<div class="panel--header">
						<h2>
							<span :aria-labelledby="`panel-${panels[panelId].id}--header--icon--description`"
								aria-hidden="true"
								:class="panels[panelId].iconClass"
								role="img" />
							{{ panels[panelId].title }}
						</h2>
						<span :id="`panel-${panels[panelId].id}--header--icon--description`" class="hidden-visually"> {{ t('dashboard', '"{title} icon"', { title: panels[panelId].title }) }} </span>
					</div>
					<div class="panel--content" :class="{ loading: !panels[panelId].mounted }">
						<div :ref="panels[panelId].id" :data-id="panels[panelId].id" />
					</div>
				</div>
			</template>
		</Draggable>

		<div class="footer">
			<NcButton @click="showModal">
				<template #icon>
					<Pencil :size="20" />
				</template>
				{{ t('dashboard', 'Customize') }}
			</NcButton>
		</div>

		<NcModal v-if="modal" size="large" @close="closeModal">
			<div class="modal__content">
				<h2>{{ t('dashboard', 'Edit widgets') }}</h2>
				<ol class="panels">
					<li v-for="status in sortedAllStatuses" :key="status" :class="'panel-' + status">
						<input :id="'status-checkbox-' + status"
							type="checkbox"
							class="checkbox"
							:checked="isStatusActive(status)"
							@input="updateStatusCheckbox(status, $event.target.checked)">
						<label :for="'status-checkbox-' + status">
							<NcUserStatusIcon v-if="status === 'status'" status="online" aria-hidden="true" />
							<span v-else :class="statusInfo[status].icon" aria-hidden="true" />
							{{ statusInfo[status].text }}
						</label>
					</li>
				</ol>
				<Draggable v-model="layout"
					class="panels"
					tag="ol"
					v-bind="{swapThreshold: 0.30, delay: 500, delayOnTouchOnly: true, touchStartThreshold: 3}"
					handle=".draggable"
					@end="saveLayout">
					<li v-for="panel in sortedPanels" :key="panel.id" :class="'panel-' + panel.id">
						<input :id="'panel-checkbox-' + panel.id"
							type="checkbox"
							class="checkbox"
							:checked="isActive(panel)"
							@input="updateCheckbox(panel, $event.target.checked)">
						<label :for="'panel-checkbox-' + panel.id" :class="{ draggable: isActive(panel) }">
							<img v-if="panel.iconUrl"
								:alt="panel.title + ' icon'"
								:src="panel.iconUrl"
								aria-hidden="true">
							<span v-else :class="panel.iconClass" aria-hidden="true" />
							{{ panel.title }}
						</label>
					</li>
				</Draggable>

				<a v-if="isAdmin && appStoreEnabled" :href="appStoreUrl" class="button">{{ t('dashboard', 'Get more widgets from the App Store') }}</a>

				<div v-if="statuses.weather && isStatusActive('weather')">
					<h2>{{ t('dashboard', 'Weather service') }}</h2>
					<p>
						{{ t('dashboard', 'For your privacy, the weather data is requested by your Nextcloud server on your behalf so the weather service receives no personal information.') }}
					</p>
					<p class="credits--end">
						<a href="https://api.met.no/doc/TermsOfService" target="_blank" rel="noopener">{{ t('dashboard', 'Weather data from Met.no') }}</a>,
						<a href="https://wiki.osmfoundation.org/wiki/Privacy_Policy" target="_blank" rel="noopener">{{ t('dashboard', 'geocoding with Nominatim') }}</a>,
						<a href="https://www.opentopodata.org/#public-api" target="_blank" rel="noopener">{{ t('dashboard', 'elevation data from OpenTopoData') }}</a>.
					</p>
				</div>
			</div>
		</NcModal>
	</div>
</template>

<script>
import { generateUrl, generateOcsUrl } from '@nextcloud/router'
import { getCurrentUser } from '@nextcloud/auth'
import { loadState } from '@nextcloud/initial-state'
import axios from '@nextcloud/axios'
import NcButton from '@nextcloud/vue/dist/Components/NcButton.js'
import Draggable from 'vuedraggable'
import NcModal from '@nextcloud/vue/dist/Components/NcModal.js'
import NcUserStatusIcon from '@nextcloud/vue/dist/Components/NcUserStatusIcon.js'
import Pencil from 'vue-material-design-icons/Pencil.vue'
import Vue from 'vue'

import isMobile from './mixins/isMobile.js'
import ApiDashboardWidget from './components/ApiDashboardWidget.vue'
import CloudfloatWidget from './components/CloudfloatWidget.vue'
import FileAppWidget from './components/FileAppWidget.vue'

const panels = loadState('dashboard', 'panels')
const firstRun = loadState('dashboard', 'firstRun')

const statusInfo = {
	weather: {
		text: t('dashboard', 'Weather'),
		icon: 'icon-weather-status',
	},
	status: {
		text: t('dashboard', 'Status'),
	},
}

export default {
	name: 'DashboardApp',
	components: {
		ApiDashboardWidget,
		CloudfloatWidget,
		FileAppWidget,
		NcButton,
		Draggable,
		NcModal,
		Pencil,
		NcUserStatusIcon,
	},
	mixins: [
		isMobile,
	],

	data() {
		return {
			isAdmin: getCurrentUser().isAdmin,
			timer: new Date(),
			registeredStatus: [],
			callbacks: {},
			callbacksStatus: {},
			allCallbacksStatus: {},
			statusInfo,
			enabledStatuses: loadState('dashboard', 'statuses'),
			panels,
			firstRun,
			displayName: getCurrentUser()?.displayName,
			uid: getCurrentUser()?.uid,
			layout: loadState('dashboard', 'layout').filter((panelId) => panels[panelId]),
			modal: false,
			appStoreUrl: generateUrl('/settings/apps/dashboard'),
			appStoreEnabled: loadState('dashboard', 'appStoreEnabled', true),
			statuses: {},
			apiWidgets: [],
			apiWidgetItems: {},
			loadingItems: true,
		}
	},
	computed: {
		greeting() {
			const time = this.timer.getHours()

			// Determine part of the day
			let partOfDay
			if (time >= 22 || time < 5) {
				partOfDay = 'night'
			} else if (time >= 18) {
				partOfDay = 'evening'
			} else if (time >= 12) {
				partOfDay = 'afternoon'
			} else {
				partOfDay = 'morning'
			}

			// Define the greetings
			const good = {
				morning: {
					generic: t('dashboard', 'Good morning'),
					withName: t('dashboard', 'Good morning, {name}', { name: this.displayName }, undefined, { escape: false }),
				},
				afternoon: {
					generic: t('dashboard', 'Good afternoon'),
					withName: t('dashboard', 'Good afternoon, {name}', { name: this.displayName }, undefined, { escape: false }),
				},
				evening: {
					generic: t('dashboard', 'Good evening'),
					withName: t('dashboard', 'Good evening, {name}', { name: this.displayName }, undefined, { escape: false }),
				},
				night: {
					// Don't use "Good night" as it's not a greeting
					generic: t('dashboard', 'Hello'),
					withName: t('dashboard', 'Hello, {name}', { name: this.displayName }, undefined, { escape: false }),
				},
			}

			// Figure out which greeting to show
			const shouldShowName = this.displayName && this.uid !== this.displayName
			return { text: shouldShowName ? good[partOfDay].withName : good[partOfDay].generic }
		},

		isActive() {
			return (panel) => this.layout.indexOf(panel.id) > -1
		},
		isStatusActive() {
			return (status) => this.enabledStatuses.findIndex((s) => s === status) !== -1
		},

		sortedAllStatuses() {
			return Object.keys(this.allCallbacksStatus).slice().sort(this.sortStatuses)
		},
		sortedPanels() {
			return Object.values(this.panels).sort((a, b) => {
				const indexA = this.layout.indexOf(a.id)
				const indexB = this.layout.indexOf(b.id)
				if (indexA === -1 || indexB === -1) {
					return indexB - indexA || a.id - b.id
				}
				return indexA - indexB || a.id - b.id
			})
		},
		sortedRegisteredStatus() {
			return this.registeredStatus.slice().sort(this.sortStatuses)
		},
	},

	watch: {
		callbacks() {
			this.rerenderPanels()
		},
		callbacksStatus() {
			for (const app in this.callbacksStatus) {
				const element = this.$refs['status-' + app]
				if (this.statuses[app] && this.statuses[app].mounted) {
					continue
				}
				if (element) {
					this.callbacksStatus[app](element[0])
					Vue.set(this.statuses, app, { mounted: true })
				} else {
					console.error('Failed to register panel in the frontend as no backend data was provided for ' + app)
				}
			}
		},
	},

	async created() {
		await this.fetchApiWidgets()

		const apiWidgetIdsToFetch = Object
			.values(this.apiWidgets)
			.filter(widget => this.isApiWidgetV2(widget.id))
			.map(widget => widget.id)
		await Promise.all(apiWidgetIdsToFetch.map(id => this.fetchApiWidgetItems([id], true)))

		for (const widget of Object.values(this.apiWidgets)) {
			if (widget.reload_interval > 0) {
				setInterval(async () => {
					await this.fetchApiWidgetItems([widget.id], true)
				}, widget.reload_interval * 1000)
			}
		}
	},
	mounted() {
		this.updateSkipLink()
		window.addEventListener('scroll', this.handleScroll)

		setInterval(() => {
			this.timer = new Date()
		}, 30000)

		if (this.firstRun) {
			window.addEventListener('scroll', this.disableFirstrunHint)
		}
	},
	destroyed() {
		window.removeEventListener('scroll', this.handleScroll)
	},

	methods: {
		/**
		 * Method to register panels that will be called by the integrating apps
		 *
		 * @param {string} app The unique app id for the widget
		 * @param {Function} callback The callback function to register a panel which gets the DOM element passed as parameter
		 */
		register(app, callback) {
			Vue.set(this.callbacks, app, callback)
		},
		registerStatus(app, callback) {
			// always save callbacks in case user enables the status later
			Vue.set(this.allCallbacksStatus, app, callback)
			// register only if status is enabled or missing from config
			if (this.isStatusActive(app)) {
				this.registeredStatus.push(app)
				this.$nextTick(() => {
					Vue.set(this.callbacksStatus, app, callback)
				})
			}
		},
		rerenderPanels() {
			for (const app in this.callbacks) {
				// TODO: Properly rerender v2 widgets
				if (this.isApiWidgetV2(this.panels[app].id)) {
					continue
				}

				const element = this.$refs[app]
				if (this.layout.indexOf(app) === -1) {
					continue
				}
				if (this.panels[app] && this.panels[app].mounted) {
					continue
				}
				if (element) {
					this.callbacks[app](element[0], {
						widget: this.panels[app],
					})
					Vue.set(this.panels[app], 'mounted', true)
				} else {
					console.error('Failed to register panel in the frontend as no backend data was provided for ' + app)
				}
			}
		},
		saveLayout() {
			axios.post(generateOcsUrl('/apps/dashboard/api/v3/layout'), {
				layout: this.layout,
			})
		},
		saveStatuses() {
			axios.post(generateOcsUrl('/apps/dashboard/api/v3/statuses'), {
				statuses: this.enabledStatuses,
			})
		},
		showModal() {
			this.modal = true
			this.firstRun = false
		},
		closeModal() {
			this.modal = false
		},
		updateCheckbox(panel, currentValue) {
			const index = this.layout.indexOf(panel.id)
			if (!currentValue && index > -1) {
				this.layout.splice(index, 1)

			} else {
				this.layout.push(panel.id)
			}
			Vue.set(this.panels[panel.id], 'mounted', false)
			this.saveLayout()
			this.$nextTick(() => this.rerenderPanels())
		},
		disableFirstrunHint() {
			window.removeEventListener('scroll', this.disableFirstrunHint)
			setTimeout(() => {
				this.firstRun = false
			}, 1000)
		},
		updateSkipLink() {
			// Make sure "Skip to main content" link points to the app content
			document.getElementsByClassName('skip-navigation')[0].setAttribute('href', '#app-dashboard')
		},
		updateStatusCheckbox(app, checked) {
			if (checked) {
				this.enableStatus(app)
			} else {
				this.disableStatus(app)
			}
		},
		enableStatus(app) {
			this.enabledStatuses.push(app)
			this.registerStatus(app, this.allCallbacksStatus[app])
			this.saveStatuses()
		},
		disableStatus(app) {
			const i = this.enabledStatuses.findIndex((s) => s === app)
			if (i !== -1) {
				this.enabledStatuses.splice(i, 1)
			}
			const j = this.registeredStatus.findIndex((s) => s === app)
			if (j !== -1) {
				this.registeredStatus.splice(j, 1)
				Vue.set(this.statuses, app, { mounted: false })
				this.$nextTick(() => {
					Vue.delete(this.callbacksStatus, app)
				})
			}
			this.saveStatuses()
		},
		sortStatuses(a, b) {
			const al = a.toLowerCase()
			const bl = b.toLowerCase()
			return al > bl
				? 1
				: al < bl
					? -1
					: 0
		},
		handleScroll() {
			if (window.scrollY > 70) {
				document.body.classList.add('dashboard--scrolled')
			} else {
				document.body.classList.remove('dashboard--scrolled')
			}
		},
		async fetchApiWidgets() {
			const response = await axios.get(generateOcsUrl('/apps/dashboard/api/v1/widgets'))
			this.apiWidgets = response.data.ocs.data
		},
		async fetchApiWidgetItems(widgetIds, merge = false) {
			try {
				const url = generateOcsUrl('/apps/dashboard/api/v2/widget-items')
				const params = new URLSearchParams(widgetIds.map(id => ['widgets[]', id]))
				const response = await axios.get(`${url}?${params.toString()}`)
				const widgetItems = response.data.ocs.data
				if (merge) {
					this.apiWidgetItems = Object.assign({}, this.apiWidgetItems, widgetItems)
				} else {
					this.apiWidgetItems = widgetItems
				}
			} finally {
				this.loadingItems = false
			}
		},
		isApiWidgetV2(id) {
			for (const widget of Object.values(this.apiWidgets)) {
				if (widget.id === id && widget.item_api_versions.includes(2)) {
					return true
				}
			}
			return false
		},
	},
}
</script>

<style lang="scss" scoped>
#app-dashboard {
	width: 100%;
	min-height: 100%;
	background-size: cover;
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;

	> h2 {
		// this is shown directly on the background image / color
		color: var(--color-background-plain-text);
		text-align: center;
		font-size: 32px;
		line-height: 130%;
		padding: 1rem 0;
	}
}

.panels {
	width: auto;
	margin: auto;
	max-width: 1800px;
	display: flex;
	justify-content: center;
	flex-direction: row;
	align-items: flex-start;
	flex-wrap: wrap;
}

.panel, .panels > div {
	// Ensure the maxcontrast color is set for the background
	--color-text-maxcontrast: var(--color-text-maxcontrast-background-blur, var(--color-main-text));

	width: 320px;
	max-width: 100%;
	margin: 16px;
	align-self: stretch;
	background-color: var(--color-main-background-blur);
	-webkit-backdrop-filter: var(--filter-background-blur);
	backdrop-filter: var(--filter-background-blur);
	border-radius: var(--body-container-radius);

	#body-user.theme--highcontrast & {
		border: 2px solid var(--color-border);
	}

	&.sortable-ghost {
		 opacity: 0.1;
	}

	& > .panel--header {
		display: flex;
		z-index: 1;
		top: 50px;
		padding: 16px;
		cursor: grab;

		&, ::v-deep * {
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		&:active {
			cursor: grabbing;
		}

		a {
			flex-grow: 1;
		}

		> h2 {
			display: block;
			align-items: center;
			flex-grow: 1;
			margin: 0;
			font-size: 20px;
			line-height: 24px;
			font-weight: bold;
			padding: 16px 8px;
			height: 56px;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			cursor: grab;

			img,
			span {
				background-size: 32px;
				width: 32px;
				height: 32px;
				margin-right: 16px;
				background-position: center;
				float: left;
				margin-top: -6px;
				margin-left: 6px;
			}

			img {
				filter: var(--background-invert-if-dark);
			}
		}
	}

	& > .panel--content {
		margin: 0 16px 16px 16px;
		height: 424px;
		// We specifically do not want scrollbars inside widgets
		overflow: visible;
	}

	// No need to extend height of widgets if only one column is shown
	@media only screen and (max-width: 709px) {
		& > .panel--content {
			height: auto;
		}
	}
}

.footer {
	display: flex;
	justify-content: center;
	transition: bottom var(--animation-slow) ease-in-out;
	padding: 1rem 0;
}

.edit-panels {
	display: inline-block;
	margin:auto;
	background-position: 16px center;
	padding: 12px 16px;
	padding-left: 36px;
	border-radius: var(--border-radius-pill);
	max-width: 200px;
	opacity: 1;
	text-align: center;
}

.button,
.button-vue,
.edit-panels,
.statuses ::v-deep .action-item .action-item__menutoggle,
.statuses ::v-deep .action-item.action-item--open .action-item__menutoggle {
	// Ensure the maxcontrast color is set for the background
	--color-text-maxcontrast: var(--color-text-maxcontrast-background-blur, var(--color-main-text));

	background-color: var(--color-main-background-blur);
	-webkit-backdrop-filter: var(--filter-background-blur);
	backdrop-filter: var(--filter-background-blur);
	opacity: 1 !important;

	&:hover,
	&:focus,
	&:active {
		background-color: var(--color-background-hover)!important;
	}
	&:focus-visible {
		box-shadow: 0 0 0 4px var(--color-main-background) !important;
		outline: 2px solid var(--color-main-text) !important;
	}
}

.modal__content {
	padding: 32px 16px;
	text-align: center;

	ol {
		display: flex;
		flex-direction: row;
		justify-content: center;
		list-style-type: none;
		padding-bottom: 16px;
	}
	li {
		label {
			position: relative;
			display: block;
			padding: 48px 16px 14px 16px;
			margin: 8px;
			width: 140px;
			background-color: var(--color-background-hover);
			border: 2px solid var(--color-main-background);
			border-radius: var(--border-radius-large);
			text-align: left;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;

			img,
			span {
				position: absolute;
				top: 16px;
				width: 24px;
				height: 24px;
				background-size: 24px;
			}

			img {
				filter: var(--background-invert-if-dark);
			}

			&:hover {
				border-color: var(--color-primary-element);
			}
		}

		// Do not invert status icons
		&:not(.panel-status) label span {
			filter: var(--background-invert-if-dark);
		}

		input[type='checkbox'].checkbox + label:before {
			position: absolute;
			right: 12px;
			top: 16px;
		}

		input:focus + label {
			border-color: var(--color-primary-element);
		}
	}

	h2 {
		font-weight: bold;
		margin-top: 12px;
	}

	// Adjust design of 'Get more widgets' button
	.button {
		display: inline-block;
		padding: 10px 16px;
		margin: 0;
	}

	p {
		max-width: 650px;
		margin: 0 auto;

		a:hover,
		a:focus {
			border-bottom: 2px solid var(--color-border);
		}
	}

	.credits--end {
		padding-bottom: 32px;
		color: var(--color-text-maxcontrast);

		a {
			color: var(--color-text-maxcontrast);
		}
	}
}

.flip-list-move {
	transition: transform var(--animation-slow);
}

.statuses {
	display: flex;
	flex-direction: row;
	justify-content: center;
	flex-wrap: wrap;
	margin-bottom: 36px;

	& > li {
		margin: 8px;
	}
}
</style>
<style>
html, body {
	background-attachment: fixed;
}

#body-user #header {
	position: fixed;
}

#content {
	overflow: auto;
}
</style>
