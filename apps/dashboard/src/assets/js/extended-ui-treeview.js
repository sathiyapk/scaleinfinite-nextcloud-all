"use strict";
$(function () {  

    var url_string = window.location.href; // e.g., www.test.com?name=test
    var url = new URL(url_string);
    var appname = url.searchParams.get("name");

    var t = $("html").hasClass("light-style") ? "default" : "default"; 
    var m = $("#jstree-install-app-dashboard-root");  

    // ---- Icon Types ----
    var iconTypes = {
        default: { icon: "bx bx-folder" },
        html: { icon: "bx bxl-html5 text-danger" },
        css: { icon: "bx bxl-css3 text-info" },
        img: { icon: "bx bx-image text-success" },
        nodejs: { icon: "bx bxl-nodejs text-warning" },
        js: { icon: "bx bxl-javascript text-warning" },
        file: { icon: "bx bxs-file text-warning" },
        document: { icon: "bx bxs-file-doc text-danger" },
        pdf: { icon: "bx bxs-file-pdf text-primary" },
        video: { icon: "bx bxs-file-video text-info" },
        music: { icon: "bx bxs-file-music text-secondary" },
        zip: { icon: "bx bxs-file-archive text-secondary" },
        python: { icon: "bx bxl-python text-success" },
        php: { icon: "bx bxl-php text-warning" },
        java: { icon: "bx bxl-java text-primary" },
        go: { icon: "bx bxl-go-lang text-secondary" },
        git: { icon: "bx bxl-github text-danger" },
        docker: { icon: "bx bxl-docker text-warning" },
        kubernetes: { icon: "bx bxl-kubernetes text-primary" },
        aws: { icon: "bx bxl-aws text-secondary" },
        vscode: { icon: "bx bxl-visual-studio text-danger" },
        figma: { icon: "bx bxl-figma text-warning" },
        react: { icon: "bx bxl-react text-primary" },
        veu: { icon: "bx bxl-vuejs text-secondary" },
        angular: { icon: "bx bxl-angular text-info" },
        bootstrap: { icon: "bx bxl-bootstrap text-success" },
        tailwind: { icon: "bx bxl-tailwind-css text-warning" },
        sass: { icon: "bx bxl-sass text-danger" },
    };

    // ---- Initialize install-app tree ----
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
            types: iconTypes
        });

        function openNodeAndChildren(instance, nodeId) {
            instance.open_node(nodeId, function(node) {
                // Wait for children to be loaded
                node.children.forEach(function(childId) {
                    openNodeAndChildren(instance, childId);
                });
            });
        }

        m.on('loaded.jstree', function (e, data) {
            console.log('Tree fully loaded:', e.target.id);
            var rootChildren = data.instance.get_node('#').children;
            rootChildren.forEach(function(childId) {
                openNodeAndChildren(data.instance, childId);
            });
        });

        m.on('restore_state.jstree', function (e, data) {
            console.log('Tree state restored:', e.target.id);
            var rootChildren = data.instance.get_node('#').children;
            rootChildren.forEach(function(childId) {
                openNodeAndChildren(data.instance, childId);
            });
        });
    }

});
