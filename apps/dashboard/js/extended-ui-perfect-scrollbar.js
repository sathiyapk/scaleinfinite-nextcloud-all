// document.addEventListener("DOMContentLoaded",function(){var e,t,l;e=document.getElementById("vertical-example"),t=document.getElementById("horizontal-example"),l=document.getElementById("both-scrollbars-example"),e&&new PerfectScrollbar(e,{wheelPropagation:!1}),t&&new PerfectScrollbar(t,{wheelPropagation:!1,suppressScrollY:!0}),l&&new PerfectScrollbar(l,{wheelPropagation:!1})});
document.addEventListener("DOMContentLoaded", function () {
    // Get DOM elements
    var c = document.getElementById("compute-activity-scroll");
    var a = document.getElementById("active-application-scroll");
    var s = document.getElementById("storage-activity-scroll");
    var t = document.getElementById("horizontal-example");
    var l = document.getElementById("both-scrollbars-example");
 
    // Initialize PerfectScrollbar if the elements exist
    if (c) {
       new PerfectScrollbar(c, {
          wheelPropagation: false
       });
    }
    if (a) {
       new PerfectScrollbar(a, {
          wheelPropagation: false
       });
    }
    if (s) {
      new PerfectScrollbar(s, {
         wheelPropagation: false
      });
   }
    if (t) {
       new PerfectScrollbar(t, {
          wheelPropagation: false,
          suppressScrollY: true
       });
    }
    if (l) {
       new PerfectScrollbar(l, {
          wheelPropagation: false
       });
    }
 });
 