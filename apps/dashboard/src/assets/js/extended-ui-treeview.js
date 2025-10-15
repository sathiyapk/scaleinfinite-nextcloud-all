"use strict";
$(function () {  

    var url_string = window.location.href; // www.test.com?filename=test
    var url = new URL(url_string);
    var appname = url.searchParams.get("name");

   var t = $("html").hasClass("light-style") ? "default" : "default", 
      m = $("#jstree-install-app-dashboard-root")  

   // ---- Handle install-app tree ----
if (m.length) {
  m.jstree({
    core: {
      themes: { name: t },
      check_callback: true,
      data: {
        url: "/index.php/apps/cloudfloat/getnamespacefiles",
        dataType: "json",
        data: function (node) {
          return { id: node.id };
        }
      }
    },
    plugins: ["types", "state"],
    types: { /* your icons config same as before */ }
  });

  // ✅ Wait until fully loaded and state restored
  m.on('loaded.jstree', function (e, data) {
    console.log('Opening all nodes for', e.target.id); 
    setTimeout(() => {
      data.instance.open_all();
    }, 800); // delay ensures children + state plugin finish
  });

  m.on('restore_state.jstree', function (e, data) {
   console.log('Opening all nodes for', e.target.id);
    setTimeout(() => {
      data.instance.open_all();
    }, 800);
  });
}

// ---- Handle install-app-pv tree ----
if (y.length) {
  y.jstree({
    core: {
      themes: { name: t },
      data: {
        url: "/index.php/apps/cloudfloat/getpvfiles",
        dataType: "json",
        data: function (t) {
          return {
            id: t.id,
            pv_path: $('#pv-path').val(),
          };
        }
      }
    },
    plugins: ["types", "state"],
    types: { /* same icon definitions */ }
  });

  // ✅ Same logic for PV tree
  y.on('loaded.jstree', function (e, data) {
   console.log('Opening all nodes for', e.target.id);
    setTimeout(() => {
      data.instance.open_all();
    }, 800);
  });

  y.on('restore_state.jstree', function (e, data) {
   console.log('Opening all nodes for', e.target.id); 
    setTimeout(() => {
      data.instance.open_all();
    }, 800);
  });
}

 

})
