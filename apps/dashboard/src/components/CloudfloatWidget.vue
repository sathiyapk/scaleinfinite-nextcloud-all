<!--
 - SPDX-FileCopyrightText: 2023 Nextcloud GmbH and Nextcloud contributors
 - SPDX-License-Identifier: AGPL-3.0-or-later
 -->
<template>
   <div class="row g-4 mb-4">
  <!-- ====== Tabs Section (CPU, Memory, Network, IO) ====== -->
  <div class="col-12 col-lg-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <ul class="nav nav-pills card-header-pills flex-wrap" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
              data-bs-target="#tab_totalcpuUsage" aria-controls="tab_totalcpuUsage" aria-selected="true">CPU Usage</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
              data-bs-target="#tab_totalMemoryUsage" aria-controls="tab_totalMemoryUsage" aria-selected="false">Memory
              Usage</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
              data-bs-target="#tab_networkUsage" aria-controls="tab_networkUsage" aria-selected="false">Network
              Usage</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
              data-bs-target="#tab_ioUsage" aria-controls="tab_ioUsage" aria-selected="false">I/O Usage</button>
          </li>
        </ul>
      </div>

      <div class="card-body">
        <div class="tab-content p-0">
          <!-- ===== CPU Usage ===== -->
          <div class="tab-pane fade show active" id="tab_totalcpuUsage" role="tabpanel">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
              <div class="flex-grow-1 me-2">
                <select id="cpu_pod" class="form-select form-select-md">
                  <option value="0">All Pods</option>
                </select>
              </div>
              <div style="width: 150px;">
                <select class="form-select cpu_period">
                  <option value="1">6 Hrs</option>
                  <option value="2">24 Hrs</option>
                  <option value="3">48 Hrs</option>
                </select>
              </div>
            </div>

            <div class="position-relative">
              <div class="loader position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-white" style="z-index:10;">
                <div class="spinner-border text-primary" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div>
              <div id="totalCPUusage" class="px-2"></div>
            </div>
          </div>

          <!-- ===== Memory Usage ===== -->
          <div class="tab-pane fade" id="tab_totalMemoryUsage" role="tabpanel">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
              <div class="flex-grow-1 me-2">
                <select id="memory_pod" class="form-select form-select-md">
                  <option value="0">All Pods</option>
                </select>
              </div>
              <div style="width: 150px;">
                <select class="form-select memory_period">
                  <option value="1">6 Hrs</option>
                  <option value="2">24 Hrs</option>
                  <option value="3">48 Hrs</option>
                </select>
              </div>
            </div>
            <div class="position-relative">
              <div class="loader position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-white" style="z-index:10;">
                <div class="spinner-border text-primary" role="status"></div>
              </div>
              <div id="totalMemoryUsage" class="px-2"></div>
            </div>
          </div>

          <!-- ===== Network Usage ===== -->
          <div class="tab-pane fade" id="tab_networkUsage" role="tabpanel">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
              <div class="flex-grow-1 me-2">
                <select id="network_pod" class="form-select form-select-md">
                  <option value="0">All Pods</option>
                </select>
              </div>
              <div style="width: 150px;">
                <select class="form-select network_period">
                  <option value="1">6 Hrs</option>
                  <option value="2">24 Hrs</option>
                  <option value="3">48 Hrs</option>
                </select>
              </div>
            </div>
            <div class="position-relative">
              <div class="loader position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-white" style="z-index:10;">
                <div class="spinner-border text-primary" role="status"></div>
              </div>
              <div id="networkUsage" class="px-2"></div>
            </div>
          </div>

          <!-- ===== I/O Usage ===== -->
          <div class="tab-pane fade" id="tab_ioUsage" role="tabpanel">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
              <div class="flex-grow-1 me-2">
                <select id="io_pod" class="form-select form-select-md">
                  <option value="0">All Pods</option>
                </select>
              </div>
              <div style="width: 150px;">
                <select class="form-select input_period">
                  <option value="1">6 Hrs</option>
                  <option value="2">24 Hrs</option>
                  <option value="3">48 Hrs</option>
                </select>
              </div>
            </div>
            <div class="position-relative">
              <div class="loader position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-white" style="z-index:10;">
                <div class="spinner-border text-primary" role="status"></div>
              </div>
              <div id="ioUsage" class="px-2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== Compute Usages + Active Applications ===== -->
  <div class="col-12 col-md-6 col-lg-3">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center gap-2">
        <div class="avatar">
          <img src="https://cloud.fltt.fr/apps/dashboard/img/activity.png" class="rounded p-2">
        </div>
        <h5 class="mb-0">Compute Usages</h5>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-around">
          <div id="CPUusage" class="text-center">
            <small class="fw-bold d-block">CPU Usages</small>
          </div>
          <div id="MemoryUsage" class="text-center">
            <small class="fw-bold d-block">Memory Usages</small>
          </div>
        </div>
        <hr />
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="avatar">
            <img src="https://cloud.fltt.fr/apps/dashboard/img/activity.png" class="rounded p-2">
          </div>
          <h6 class="mb-0">Active Applications</h6>
        </div>
        <div id="active-application-scroll" style="max-height: 220px; overflow-y: auto;">
          <ul class="p-0 m-0 list-unstyled" id="active_application"></ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== Compute Activity ===== -->
  <div class="col-12 col-md-6 col-lg-3">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center gap-2">
        <div class="avatar">
          <img src="https://cloud.fltt.fr/apps/dashboard/img/activity.png" class="rounded p-2">
        </div>
        <h5 class="mb-0">Compute Activity</h5>
      </div>
      <div class="card-body" id="compute-activity-scroll" style="max-height: 420px; overflow-y: auto;">
        <ul class="list-unstyled mb-0" id="activity_txt"></ul>
      </div>
    </div>
  </div>
</div>

</template>

<script>
export default {
   name: 'CloudfloatWidget',
   
}
</script>

<style lang="scss" scoped>
@media (max-width: 768px) {
  .chart-scroll-wrapper_cpu_usage {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    display: block;
    width: 100%;
  }

//  .chart-scroll-wrapper > div {
//  min-width: 600px;
//    width: 100%;
//  }
  #totalCPUusage {
     min-width: 600px;
    width: 100%;
  }
}



</style>
