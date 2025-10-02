<!--
 - SPDX-FileCopyrightText: 2023 Nextcloud GmbH and Nextcloud contributors
 - SPDX-License-Identifier: AGPL-3.0-or-later
 -->
<template>
	<div class="row">
                     <div  class="col-12 col-lg-9 order-2 order-md-3 order-lg-2 mb-4">
                        <div class="card">
                           <div class="row row-bordered g-0">
                              <div class="col-md-7">                             
                                 <div class="card-header flex-grow-0">
                                    <div class="d-flex align-items-center">
                                      <div class="avatar flex-shrink-0">
                                       <img src="https://cloud.fltt.fr/apps/dashboard/img/activity.png"  class="rounded p-2">    
                                      </div>
                                      <div class="d-flex w-100 flex-wrap justify-content-between gap-1">                                       
                                          <h5 class="card-title mt-2">Storage </h5>   
                                          <div class="col-4 p-1">
                                                 <select id="defaultSelect" class="form-select">                                                      
                                                      <option value="1" class="dropdown-item ">Last 28 Days</option>
                                                      <option value="2" class="dropdown-item ">Last Month</option>
                                                      <option value="3" class="dropdown-item ">Last Year</option>
                                                </select>
                                           </div>                                    
                                          <!-- <div class="dropdown">
                                             <button class="btn text-muted p-0" type="button" id="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <i class="bx bx-dots-vertical-rounded bx-sm"></i>
                                             </button>
                                             <div class="dropdown-menu dropdown-menu-end" aria-labelledby="">
                                             <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                             <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                             <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                             </div>
                                          </div> -->
                                      </div>
                                    </div>
                                  </div>
                                    <div class="card-body">
                                       <!-- <div id="fileactivityChart"></div> -->
                                        <div class="loader" style="position: relative;">
                                             <div style="position: absolute; inset: 0; background: #fff; z-index: 9999; display: flex; align-items: center; justify-content: center;">
                                             <div class="spinner-border text-primary" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                             </div>
                                             </div>
                                          </div>
                                        <div class="chart-scroll-wrapper">
                                             <div id="fileactivityChart"></div>
                                       </div>
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
                                    <div class="card overflow-hidden" > 
                                    <div class="card-body mb-5 "  id="storage-activity-scroll" style="height:300px;">
                                     <div class="file_activity_loader" style="position: relative;">
                        <div style="position: absolute; inset: 0; background: #fff; z-index: 9999; display: flex; align-items: center; justify-content: center;">
                          <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                        </div>
                      </div>
                                        
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
                              <div class="card overflow-hidden "  style="height:415px;">
                                 <div class="card-header d-flex justify-content-left pb-1" >
                                    <div class="avatar card-title mb-0">
                                       <img src="https://cloud.fltt.fr/apps/dashboard/img/activity.png"  class="rounded p-2">                                    
                                    </div>
                                    <h5 class="mt-2">📂 Root Files</h5>
                                 </div>
                                 <div class="card-body">
                                  <div id="jstree-context-menu" style="max-height: 350px; overflow: auto; margin:0px"></div>
                                                             
                                 </div>                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- compute activity closed -->
                  </div>
</template>
<script>
import config from "../config/config.js";

export default {
  name: 'FileAppWidget',

  data() {
    return {
      baseUrl: config.BASE_URL,
    };
  },

  mounted() {
  
    this.loadJstreeCss();       // CDN jsTree CSS
    this.loadCustomJstreeCss(); // Local overrides
    this.loadJquery();
  },

  methods: {
 

    loadJstreeCss() {
      // const url = "https://cdn.jsdelivr.net/npm/jstree@3.3.16/dist/themes/default/style.min.css";
       const url = `${this.baseUrl}/src/assets/css/jstree-style.css`;
      if (!document.querySelector(`link[href="${url}"]`)) {
        const link = document.createElement("link");
        link.rel = "stylesheet";
        link.href = url;
        document.head.appendChild(link);
        console.log("Local jsTree min style loaded");
      }
    },

    loadCustomJstreeCss() {
      const url = `${this.baseUrl}/src/assets/css/jstree.css`;
      if (!document.querySelector(`link[href="${url}"]`)) {
        const link = document.createElement("link");
        link.rel = "stylesheet";
        link.href = url;
        document.head.appendChild(link);
        console.log("custom jstree.css loaded");
      }
    },

    loadJquery() {
      if (!window.jQuery) {
        const script = document.createElement("script");
        // script.src = "https://code.jquery.com/jquery-3.7.1.min.js";
        script.src=`${this.baseUrl}/src/assets/js/jquery-3.7.1.min.js`;
        script.onload = () => {
          console.log("jQuery loaded");
          this.loadJstreeScript();
        };
        document.head.appendChild(script);
      } else {
        console.log("jQuery already loaded");
        this.loadJstreeScript();
      }
    },

    loadJstreeScript() {
      if ($.jstree) {
        this.initJsTree();
        return;
      }

      const script = document.createElement("script");
      script.src = "https://cdn.jsdelivr.net/npm/jstree@3.3.16/dist/jstree.min.js";
      script.async = true;
      script.onload = () => {
        console.log("jsTree loaded");
        this.loadExtendedTreeviewScript();
      };
      document.head.appendChild(script);
    },

    loadExtendedTreeviewScript() {
      const url = `${this.baseUrl}/src/assets/js/extended-ui-treeview.js`;
      if (!document.querySelector(`script[src="${url}"]`)) {
        const script = document.createElement("script");
        script.src = url;
        script.async = true;
        script.onload = () => {
          console.log("extended-ui-treeview.js loaded");
          this.initJsTree(); // init AFTER your custom logic is loaded
        };
        document.head.appendChild(script);
      }
    },

    // 🔹 file type mapping
    getFileType(filename) {
      const ext = filename.split(".").pop().toLowerCase();
      const mapping = {
        html: "html",
        css: "css",
        png: "img", jpg: "img", jpeg: "img", gif: "img", svg: "img",
        js: "js", json: "js", node: "nodejs",
        txt: "file", log: "file",
        doc: "document", docx: "document",
        pdf: "pdf",
        mp4: "video", avi: "video", mkv: "video",
        mp3: "music", wav: "music",
        zip: "zip", rar: "zip", tar: "zip", gz: "zip",
        py: "python",
        php: "php",
        java: "java",
        go: "go",
        git: "git",
        docker: "docker",
        yml: "kubernetes", yaml: "kubernetes",
        jsx: "react", tsx: "react",
        vue: "vue",
        angular: "angular",
        bootstrap: "bootstrap",
        tailwind: "tailwind",
        scss: "sass", sass: "sass",
      };
      return mapping[ext] || "file"; // fallback
    },

    // 🔹 init jsTree dynamically
    initJsTree() {
  this.$nextTick(() => {
    $("#jstree-context-menu").jstree({
      core: {
        check_callback: true,
        data: [
          {
            text: "Root Files",
            state: { opened: true },
            children: [
              {
                text: "css",
                state: { opened: true },
                children: [
                  { text: "app.css", type: "css" },
                  { text: "style.css", type: "css" }
                ]
              },
              {
                text: "img",
                state: { opened: true },
                children: [
                  { text: "bg.jpg", type: "img" },
                  { text: "logo.png", type: "img" },
                  { text: "avatar.png", type: "img" }
                ]
              },
              {
                text: "js",
                state: { opened: true },
                children: [
                  { text: "jquery.js", type: "js" },
                  { text: "app.js", type: "js" }
                ]
              },
              { text: "index.html", type: "html" },
              { text: "page-one.html", type: "html" },
              { text: "page-two.html", type: "html" }
            ]
          }
        ],
         themes: {
      name: "default",
      dots: true,    // enables connector lines
      icons: true    // shows icons
    }
      },
      plugins: ["types", "state", "wholerow", "contextmenu"], // added wholerow and contextmenu
      types: {
        default: { icon: "bx bx-folder" },
        html: { icon: "bx bxl-html5 text-danger" },
        css: { icon: "bx bxl-css3 text-info" },
        img: { icon: "bx bx-image text-success" },
        js: { icon: "bx bxl-javascript text-warning" }
      }
    });
  });
}
  },
};
</script>
<style>
@media (max-width: 768px) {
  .chart-scroll-wrapper {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    display: block;
  }

  #fileactivityChart {
    min-width: 600px;
    width: 100%;
  }
}
</style>
