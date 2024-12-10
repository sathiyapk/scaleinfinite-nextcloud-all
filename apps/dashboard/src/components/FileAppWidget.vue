<!--
 - SPDX-FileCopyrightText: 2023 Nextcloud GmbH and Nextcloud contributors
 - SPDX-License-Identifier: AGPL-3.0-or-later
 -->
<template>
	<div class="row">
                     <div  class="col-12 col-lg-9 order-2 order-md-3 order-lg-2 mb-4">
                        <div class="card" style="height: 480px;">
                           <div class="row row-bordered g-0">
                              <div class="col-md-7">                             
                                 <div class="card-header flex-grow-0">
                                    <div class="d-flex align-items-center">
                                      <div class="avatar flex-shrink-0">
                                       <img src="https://cloud.fltt.fr/apps/dashboard/img/activity.png"  class="rounded p-2">    
                                      </div>
                                      <div class="d-flex w-100 flex-wrap justify-content-between gap-1">                                       
                                          <h5 class="card-title mt-2">Storage </h5>                                       
                                        <div class="dropdown">
                                          <button class="btn text-muted p-0" type="button" id="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded bx-sm"></i>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="">
                                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                    <div class="card-body">
                                       <!-- <div id="fileactivityChart"></div> -->
                                        <div id="fileactivityChart"></div>
                                    </div>
                              </div>
                              <!-- /Compute line chart end -->
                              <!-- Compute Usage -->
                              <div class="col-md-5">
                                 <div class="pt-4  d-flex justify-content-left" >
                                    <div class="avatar card-title mb-0">
                                       <img src="https://cloud.fltt.fr/apps/dashboard/img/activity.png"  class="rounded p-2">                                    
                                    </div>
                                    <h5 class="card-title mt-2">Storage Activities</h5>
                                    </div> 
                                    <div class="card overflow-hidden"  style="height: 480px;"> 
                                    <div class="card-body mb-5 "  id="storage-activity-scroll">
                                       <ul class="list-unstyled mb-0" id="file_activity_txt">
                                          
                                       </ul>
                                    </div>   
                                 </div>                             
                              </div>
                             
                           </div>
                        </div>
                     </div>
             
                     <!-- /closed chart -->
                      <!-- Storate activity start -->
                     <div class="col-12 col-md-8 col-lg-3 order-3 order-md-2">
                        <div class="row">                           
                           <div class="col-12 mb-4">
                              <div class="card overflow-hidden " style="height: 480px;">
                                 <div class="card-header d-flex justify-content-left">
                                    <div class="avatar card-title mb-0">
                                       <img src="https://cloud.fltt.fr/apps/dashboard/img/activity.png"  class="rounded p-2">                                    
                                    </div>
                                    <h5 class="mt-2">Storage usage</h5>
                                 </div>
                                 <div class="card-body">
                                    <div id="fileAppSpace"></div>
                                    <div class="d-flex justify-content-center align-items-center gap-4">
                                       <div class="d-flex align-items-center">
                                          <span class="badge badge-dot bg-success me-2"></span> Used Space
                                       </div>
                                       <div class="d-flex align-items-center">
                                          <span class="badge badge-dot bg-label-secondary me-2"></span> Free Space
                                       </div>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- compute activity closed -->
                  </div>
</template>

<script>
export default {
	name: 'FileAppWidget',
	
}
</script>

<style lang="scss" scoped>
</style>
