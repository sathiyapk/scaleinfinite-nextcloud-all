"use strict";
$(function () {
   

    var url_string = window.location.href; // www.test.com?filename=test
    var url = new URL(url_string);
    var appname = url.searchParams.get("name");

   var t = $("html").hasClass("light-style") ? "default" : "default",
      e = $("#jstree-basic"),
      s = $("#jstree-custom-icons"),
      x = $("#jstree-context-menu"),
      n = $("#jstree-drag-drop"),
      c = $("#jstree-checkbox"),
      l = $("#jstree-custom-icons1"),
      m = $("#jstree-install-app"),
      y = $("#jstree-install-app-pv");
   e.length && e.jstree({
      core: {
         themes: {
            name: t
         }
      }
   }), 
   // JS Tree Start -------------------------------
   s.length && s.jstree({
      core: {
         themes: {
            name: t
         },
         data: [{
            text: "General File Types",
            state: {
               opened: !0
            },
            children: [{
               text: "File.txt",
               type: "file"
            }, 
            {
               text: "document.doc",
               type: "document"
            },
            {
               text: "PDF_ Document.pdf",
               type: "pdf"
            },
            {
               text: "Image_file.img",
               type: "img"
            },
        
            {
               text: "Zip_file.zip",
               type: "zip"
            },
        
         ]
         }, 
         {
            text: "Programming Languages",
            state: {
               opened: !0
            },
            children: [{
               text: "NodeJs_file.node",
               type: "nodejs"
            }, {
               text: "HTML_file.html",
               type: "html"
            }, {
               text: "Python_file.py",
               type: "python"
            },
            {
               text: "PHP_file.php",
               type: "php"
            },
            {
               text: "CSS_file.css",
               type: "css"
            },
            {
               text: "Java_file.java",
               type: "java"
            },
            {
               text: "go-long.go",
               type: "go"
            },
           
         ]
         },
         {
            text: "Other Technologies",
            state: {
               opened: !0
            },
            children: [{
               text: "React_JS.react",
               type: "react"
            }, {
               text: "VeuJs_file.vue",
               type: "vew"
            }, {
               text: "Angular_file.ang",
               type: "angular"
            },
            {
               text: "bootstrap_file.bs",
               type: "bootstrap"
            },
            {
               text: "Tailwind-file.twl",
               type: "tailwind"
            },
            {
               text: "SASS_file.sass",
               type: "sass"
            },
           
           
         ]
         }, {
            text: "Tools and Platforms",
            state: {
               opened: !0
            },
            children: [{
               text: "git_lab.git",
               type: "git"
            }, {
               text: "DockerFile.dk",
               type: "docker"
            },
            {
               text: "Kubernetes.kbn",
               type: "kubernetes"
            },
            {
               text: "AWS.aws",
               type: "aws"
            },
            {
               text: "VSCode.vs",
               type: "vscode"
            },
            {
               text: "Figma.fig",
               type: "figma"
            }
         ]
         }
      ]
      },
      plugins: ["types"],
      types: {
         default: {
            icon: "bx bx-folder"
         },
         html: {
            icon: "bx bxl-html5 text-danger"
         },
         css: {
            icon: "bx bxl-css3 text-info"
         },
         img: {
            icon: "bx bx-image text-success"
         },
         nodejs: {
            icon: "bx bxl-nodejs text-warning"
         },
         js: {
            icon: "bx bxl-javascript text-warning"
         },
         file:{
            icon: "bx bxs-file text-warning"
         },
         document:{
            icon: "bx bxs-file-doc text-danger"
         },
         pdf:{
               icon: "bx bxs-file-pdf text-primary"
         },
         video:{
            icon: "bx bxs-file-video text-info"
         },
         music:{
            icon: "bx bxs-file-music text-secondary"
         },
         zip:{
            icon: "bx bxs-file-archive text-secondary"
         },
         python: {
            icon: "bx bxl-python text-success"
         },
         php: {
            icon: "bx bxl-php text-warning"
         },
         java: {
            icon: "bx bxl-java text-primary"
         },
         go:{
            icon: "bx bxl-go-lang text-secondary "
         },
         git:{
            icon: "bx bxl-github text-danger"
         },
         docker: {
            icon: "bx bxl-docker text-warning"
         },
         kubernetes: {
            icon: "bx bxl-kubernetes text-primary"
         },
         aws: {
            icon: "bx bxl-aws  text-secondary"
         },
         vscode: {
            icon: "bx bxl-visual-studio  text-danger"
         },
         figma: {
            icon: "bx bxl-figma - Figma  text-warning"
         },
         react: {
            icon: "bx bxl-react  text-primary"
         },
         veu: {
            icon: "bx bxl-vuejs  text-secondary"
         },
         angular: {
            icon: "bx bxl-angular  text-info"
         },
         bootstrap: {
            icon: "bx bxl-bootstrap  text-success"
         },
         tailwind: {
            icon: "bx bxl-tailwind-css  text-warning"
         },
         sass: {
            icon: "bx bxl-sass  text-danger"
         },
      }
   }), 
   // JS Tree End ------------------------------------
   x.length && x.jstree({
      core: {
         themes: {
            name: t
         },
         check_callback: !0,
         data: [{
            text: "css",
            children: [{
               text: "app.css",
               type: "css"
            }, {
               text: "style.css",
               type: "css"
            }]
         }, {
            text: "img",
            state: {
               opened: !0
            },
            children: [{
               text: "bg.jpg",
               type: "img"
            }, {
               text: "logo.png",
               type: "img"
            }, {
               text: "avatar.png",
               type: "img"
            }]
         }, {
            text: "js",
            state: {
               opened: !0
            },
            children: [{
               text: "jquery.js",
               type: "js"
            }, {
               text: "app.js",
               type: "js"
            }]
         }, {
            text: "index.html",
            type: "html"
         }, {
            text: "page-one.html",
            type: "html"
         }, {
            text: "page-two.html",
            type: "html"
         }]
      },
      plugins: ["types", "contextmenu"],
      types: {
         default: {
            icon: "bx bx-folder"
         },
         html: {
            icon: "bx bxl-html5 text-danger"
         },
         css: {
            icon: "bx bxl-css3 text-info"
         },
         img: {
            icon: "bx bx-image text-success"
         },
         js: {
            icon: "bx bxl-nodejs text-warning"
         }
      }
   }), n.length && n.jstree({
      core: {
         themes: {
            name: t
         },
         check_callback: !0,
         data: [{
            text: "css",
            children: [{
               text: "app.css",
               type: "css"
            }, {
               text: "style.css",
               type: "css"
            }]
         }, {
            text: "img",
            state: {
               opened: !0
            },
            children: [{
               text: "bg.jpg",
               type: "img"
            }, {
               text: "logo.png",
               type: "img"
            }, {
               text: "avatar.png",
               type: "img"
            }]
         }, {
            text: "js",
            state: {
               opened: !0
            },
            children: [{
               text: "jquery.js",
               type: "js"
            }, {
               text: "app.js",
               type: "js"
            }]
         }, {
            text: "index.html",
            type: "html"
         }, {
            text: "page-one.html",
            type: "html"
         }, {
            text: "page-two.html",
            type: "html"
         }]
      },
      plugins: ["types", "dnd"],
      types: {
         default: {
            icon: "bx bx-folder"
         },
         html: {
            icon: "bx bxl-html5 text-danger"
         },
         css: {
            icon: "bx bxl-css3 text-info"
         },
         img: {
            icon: "bx bx-image text-success"
         },
         js: {
            icon: "bx bxl-nodejs text-warning"
         }
      }
   }), c.length && c.jstree({
      core: {
         themes: {
            name: t
         },
         data: [{
            text: "css",
            children: [{
               text: "app.css",
               type: "css"
            }, {
               text: "style.css",
               type: "css"
            }]
         }, {
            text: "img",
            state: {
               opened: !0
            },
            children: [{
               text: "bg.jpg",
               type: "img"
            }, {
               text: "logo.png",
               type: "img"
            }, {
               text: "avatar.png",
               type: "img"
            }]
         }, {
            text: "js",
            state: {
               opened: !0
            },
            children: [{
               text: "jquery.js",
               type: "js"
            }, {
               text: "app.js",
               type: "js"
            }]
         }, {
            text: "index.html",
            type: "html"
         }, {
            text: "page-one.html",
            type: "html"
         }, {
            text: "page-two.html",
            type: "html"
         }]
      },
      plugins: ["types", "checkbox", "wholerow"],
      types: {
         default: {
            icon: "bx bx-folder"
         },
         html: {
            icon: "bx bxl-html5 text-danger"
         },
         css: {
            icon: "bx bxl-css3 text-info"
         },
         img: {
            icon: "bx bx-image text-success"
         },
         js: {
            icon: "bx bxl-nodejs text-warning"
         }
      }
   }), l.length && l.jstree({
      core: {
         themes: {
            name: t
         },
         data: {
            url: "/index.php/apps/cloudfloat/getfiles?appname="+appname,
            dataType: "json",
            data: function (t) {
               return {
                  id: t.id
               }
            }
         }
      },
      plugins: ["types", "state"],
      types: {
         default: {
            icon: "bx bx-folder"
         },
         html: {
            icon: "bx bxl-html5 text-danger"
         },
         css: {
            icon: "bx bxl-css3 text-info"
         },
         img: {
            icon: "bx bx-image text-success"
         },
         nodejs: {
            icon: "bx bxl-nodejs text-warning"
         },
         js: {
            icon: "bx bxl-javascript text-warning"
         },
         file:{
            icon: "bx bxs-file text-warning"
         },
         document:{
            icon: "bx bxs-file-doc text-danger"
         },
         pdf:{
               icon: "bx bxs-file-pdf text-primary"
         },
         video:{
            icon: "bx bxs-file-video text-info"
         },
         music:{
            icon: "bx bxs-file-music text-secondary"
         },
         zip:{
            icon: "bx bxs-file-archive text-secondary"
         },
         python: {
            icon: "bx bxl-python text-success"
         },
         php: {
            icon: "bx bxl-php text-warning"
         },
         java: {
            icon: "bx bxl-java text-primary"
         },
         go:{
            icon: "bx bxl-go-lang text-secondary "
         },
         git:{
            icon: "bx bxl-github text-danger"
         },
         docker: {
            icon: "bx bxl-docker text-warning"
         },
         kubernetes: {
            icon: "bx bxl-kubernetes text-primary"
         },
         aws: {
            icon: "bx bxl-aws  text-secondary"
         },
         vscode: {
            icon: "bx bxl-visual-studio  text-danger"
         },
         figma: {
            icon: "bx bxl-figma - Figma  text-warning"
         },
         react: {
            icon: "bx bxl-react  text-primary"
         },
         veu: {
            icon: "bx bxl-vuejs  text-secondary"
         },
         angular: {
            icon: "bx bxl-angular  text-info"
         },
         bootstrap: {
            icon: "bx bxl-bootstrap  text-success"
         },
         tailwind: {
            icon: "bx bxl-tailwind-css  text-warning"
         },
         sass: {
            icon: "bx bxl-sass  text-danger"
         },
      }
   }), m.length && m.jstree({
      core: {
         themes: {
            name: t
         },
         data: {
            url: "/index.php/apps/cloudfloat/getnamespacefiles",
            dataType: "json",
            data: function (t) {
               return {
                  id: t.id
               }
            }
         }
      },
      plugins: ["types", "state"],
      types: {
         default: {
            icon: "bx bx-folder"
         },
         html: {
            icon: "bx bxl-html5 text-danger"
         },
         css: {
            icon: "bx bxl-css3 text-info"
         },
         img: {
            icon: "bx bx-image text-success"
         },
         nodejs: {
            icon: "bx bxl-nodejs text-warning"
         },
         js: {
            icon: "bx bxl-javascript text-warning"
         },
         file:{
            icon: "bx bxs-file text-warning"
         },
         document:{
            icon: "bx bxs-file-doc text-danger"
         },
         pdf:{
               icon: "bx bxs-file-pdf text-primary"
         },
         video:{
            icon: "bx bxs-file-video text-info"
         },
         music:{
            icon: "bx bxs-file-music text-secondary"
         },
         zip:{
            icon: "bx bxs-file-archive text-secondary"
         },
         python: {
            icon: "bx bxl-python text-success"
         },
         php: {
            icon: "bx bxl-php text-warning"
         },
         java: {
            icon: "bx bxl-java text-primary"
         },
         go:{
            icon: "bx bxl-go-lang text-secondary "
         },
         git:{
            icon: "bx bxl-github text-danger"
         },
         docker: {
            icon: "bx bxl-docker text-warning"
         },
         kubernetes: {
            icon: "bx bxl-kubernetes text-primary"
         },
         aws: {
            icon: "bx bxl-aws  text-secondary"
         },
         vscode: {
            icon: "bx bxl-visual-studio  text-danger"
         },
         figma: {
            icon: "bx bxl-figma - Figma  text-warning"
         },
         react: {
            icon: "bx bxl-react  text-primary"
         },
         veu: {
            icon: "bx bxl-vuejs  text-secondary"
         },
         angular: {
            icon: "bx bxl-angular  text-info"
         },
         bootstrap: {
            icon: "bx bxl-bootstrap  text-success"
         },
         tailwind: {
            icon: "bx bxl-tailwind-css  text-warning"
         },
         sass: {
            icon: "bx bxl-sass  text-danger"
         },
      }
   }), y.length && y.jstree({
      core: {
         themes: {
            name: t
         },
         data: {
            url: "/index.php/apps/cloudfloat/getpvfiles",
            dataType: "json",
            data: function (t) {
               return {
                  id: t.id
               }
            }
         }
      },
      plugins: ["types", "state"],
      types: {
         default: {
            icon: "bx bx-folder"
         },
         html: {
            icon: "bx bxl-html5 text-danger"
         },
         css: {
            icon: "bx bxl-css3 text-info"
         },
         img: {
            icon: "bx bx-image text-success"
         },
         nodejs: {
            icon: "bx bxl-nodejs text-warning"
         },
         js: {
            icon: "bx bxl-javascript text-warning"
         },
         file:{
            icon: "bx bxs-file text-warning"
         },
         document:{
            icon: "bx bxs-file-doc text-danger"
         },
         pdf:{
               icon: "bx bxs-file-pdf text-primary"
         },
         video:{
            icon: "bx bxs-file-video text-info"
         },
         music:{
            icon: "bx bxs-file-music text-secondary"
         },
         zip:{
            icon: "bx bxs-file-archive text-secondary"
         },
         python: {
            icon: "bx bxl-python text-success"
         },
         php: {
            icon: "bx bxl-php text-warning"
         },
         java: {
            icon: "bx bxl-java text-primary"
         },
         go:{
            icon: "bx bxl-go-lang text-secondary "
         },
         git:{
            icon: "bx bxl-github text-danger"
         },
         docker: {
            icon: "bx bxl-docker text-warning"
         },
         kubernetes: {
            icon: "bx bxl-kubernetes text-primary"
         },
         aws: {
            icon: "bx bxl-aws  text-secondary"
         },
         vscode: {
            icon: "bx bxl-visual-studio  text-danger"
         },
         figma: {
            icon: "bx bxl-figma - Figma  text-warning"
         },
         react: {
            icon: "bx bxl-react  text-primary"
         },
         veu: {
            icon: "bx bxl-vuejs  text-secondary"
         },
         angular: {
            icon: "bx bxl-angular  text-info"
         },
         bootstrap: {
            icon: "bx bxl-bootstrap  text-success"
         },
         tailwind: {
            icon: "bx bxl-tailwind-css  text-warning"
         },
         sass: {
            icon: "bx bxl-sass  text-danger"
         },
      }
   })
});
// $(document).on("click", "jstree-container-ul a", function(e) {
//     e.preventDefault();  // Prevent the default action
//     window.open($(this).attr("href"), '_blank');  // Open link in a new tab
// });