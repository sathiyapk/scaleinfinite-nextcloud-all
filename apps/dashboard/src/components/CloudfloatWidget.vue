<!--
 - SPDX-FileCopyrightText: 2023 Nextcloud GmbH and Nextcloud contributors
 - SPDX-License-Identifier: AGPL-3.0-or-later
 -->
<template>
	<div class="row">
                     <div  class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                        <div class="card" >
                           <div class="row row-bordered g-0">
                              <div class="col-md-7">
                                 <div class="">
                                    <div class="card-header">
                                       <ul class="nav nav-pills card-header-pills" role="tablist">
                                          <li class="nav-item">
                                             <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#tab_totalcpuUsage" aria-controls="tab_totalcpuUsage" aria-selected="true">CPU Usage</button>
                                          </li>
                                          <li class="nav-item">
                                             <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#tab_totalMemoryUsage" aria-controls="tab_totalMemoryUsage" aria-selected="false"> Memory Usage</button>
                                          </li>
                                          <li class="nav-item">
                                             <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#tab_networkUsage" aria-controls="tab_networkUsage" aria-selected="false"> Network Usage</button>
                                          </li>
                                          <li class="nav-item">
                                             <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#tab_ioUsage" aria-controls="tab_ioUsage" aria-selected="false"> I/O Usage</button>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="card-body">
                                       <div class="tab-content p-0">
                                          <div class="tab-pane fade show active" id="tab_totalcpuUsage" role="tabpanel">
                                             <div class="justify-content-left d-flex">
                                                <div class="align-item-right">
                                                   <div id="cpu_pod_container">        
                                                    <select id="cpu_pod" class="form-select form-select-md">
                                                      <option value="0">All Pods</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                   <button class="btn p-0" type="button" id="totalIncome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="bx bx-dots-vertical-rounded bx-sm text-muted"></i>
                                                   </button>
                                                   <div class="dropdown-menu dropdown-menu-end background-white" aria-labelledby="totalIncome">
                                                        <a class="dropdown-item cpu_period" data-value="1" >6 Hours</a>
                                                        <a class="dropdown-item cpu_period" data-value="2" >24 Hours</a>
                                                        <a class="dropdown-item cpu_period" data-value="3" >48 Hours</a>
                                                    </div>
                                                </div>
                                             </div>
                                             <div id="totalCPUusage" class="px-2"></div>
                                          </div>
                                          <div class="tab-pane fade" id="tab_totalMemoryUsage" role="tabpanel">
                                             <div class="justify-content-left d-flex">
                                                <div class="align-item-right">
                                                    <div id="memory_pod_container">        
                                                      <select id="memory_pod" class="form-select form-select-md">
                                                        <option value="0">All Pods</option>
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                   <button class="btn p-0" type="button" id="totalIncome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="bx bx-dots-vertical-rounded bx-sm text-muted"></i>
                                                   </button>
                                                   <div class="dropdown-menu dropdown-menu-end background-white" aria-labelledby="totalIncome">
                                                       <a class="dropdown-item memory_period" data-value="1" >6 Hours</a>
                                                       <a class="dropdown-item memory_period" data-value="2" >24 Hours</a>
                                                       <a class="dropdown-item memory_period" data-value="3" >48 Hours</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="totalMemoryUsage" class="px-2"></div>
                                          </div>
                                          <div class="tab-pane fade" id="tab_networkUsage" role="tabpanel">
                                             <div class="justify-content-left d-flex">
                                                <div class="align-item-right">
                                                   <div id="network_pod_container">        
                                                      <select id="network_pod" class="form-select form-select-md">
                                                        <option value="0">All Pods</option>
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                   <button class="btn p-0" type="button" id="totalIncome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="bx bx-dots-vertical-rounded bx-sm text-muted"></i>
                                                   </button>
                                                   <div class="dropdown-menu dropdown-menu-end background-white" aria-labelledby="totalIncome">
                                                     <a class="dropdown-item network_period" data-value="1" >6 Hours</a>
                                                     <a class="dropdown-item network_period" data-value="2" >24 Hours</a>
                                                     <a class="dropdown-item network_period" data-value="3" >48 Hours</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="networkUsage" class="px-2"></div>
                                          </div>
                                          <div class="tab-pane fade" id="tab_ioUsage" role="tabpanel">
                                             <div class="justify-content-left d-flex">
                                                <div class="align-item-right">
                                                   <div id="io_pod_container">        
                                                      <select id="io_pod" class="form-select form-select-md">
                                                        <option value="0">All Pods</option>
                                                      </select>
                                                      </div>
                                                </div>
                                                <div class="dropdown">
                                                   <button class="btn p-0" type="button" id="totalIncome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="bx bx-dots-vertical-rounded bx-sm text-muted"></i>
                                                   </button>
                                                   <div class="dropdown-menu dropdown-menu-end background-white" aria-labelledby="totalIncome">
                                                       <a class="dropdown-item input_period" data-value="1" >6 Hours</a>
                                                        <a class="dropdown-item input_period" data-value="2" >24 Hours</a>
                                                        <a class="dropdown-item input_period" data-value="3" >48 Hours</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="ioUsage" class="px-2"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- /Compute line chart end -->
                              <!-- Compute Usage -->
                              <div class="col-md-5">
                                 <div class="card-header d-flex justify-content-left" style="padding-left: 3px;">
                                    <div class="avatar card-title mb-0">
                                       <img src="https://gc.fltt.fr/apps/dashboard/img/activity.png"  class="rounded p-2">                                    
                                    </div>
                                    <h5 class="mt-2">Compute Usages</h5>
                                 </div>
                                 <div class="">
                                    <div class="d-flex">
                                    <div id="CPUusage" style="height: 120px !important;   width: 150px !important; border-right:1px solid #d9dee3">
                                       <small class="d-block text-center" style="font-weight: 700;"> CPU Usages</small>
                                    </div>
                                    <div id="MemoryUsage" style="height: 120px !important;   width: 150px !important; ">                                    
                                       <small class="d-block text-center"  style="font-weight: 700;"> Memory Usages</small>
                                       </div>
                                    </div>
                                    <hr>
                                 </div>
                                 <!-- Active Applications -->
                                 <div class=" d-flex justify-content-left">
                                    <div class="avatar card-title mb-0">
                                       <img src="https://gc.fltt.fr/apps/dashboard/img/activity.png"  class="rounded p-2">                                    
                                    </div>
                                    <h5 class="mt-2">Active Applications</h5>
                                 </div>
                                 <div class="card" style="height: 250px;">
                                    <div class="p-2 mb-5" id="active-application-scroll">
                                       <ul class="p-0 m-0" id="active_application">
                                         
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- /Active Applications End -->
                              </div>
                             
                           </div>
                        </div>
                     </div>
                     <!-- /closed chart -->
                      <!-- Compute activity start -->
                     <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2 " style="margin-bottom:3rem;">
                        <div class="row">                           
                           <div class="col-12 mb-4">
                              <div class="card overflow-hidden " style="height: 520px;">
                                 <div class="card-header d-flex justify-content-left">
                                    <div class="avatar card-title mb-0">
                                       <img src="https://gc.fltt.fr/apps/dashboard/img/activity.png"  class="rounded p-2">                                    
                                    </div>
                                    <h5 class="mt-2">Compute Activity</h5>
                                 </div>
                                 <div class="card-body mb-5" id="compute-activity-scroll">
                                    <ul class="list-unstyled mb-0" id="activity_txt">
                                      
                                    </ul>
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
	name: 'CloudfloatWidget',
	
}
</script>

<style lang="scss" scoped>
</style>
