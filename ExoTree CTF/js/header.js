
let header = document.getElementsByTagName("header")[0];
let headerhitbox = document.getElementById("header-hitbox");

// Responsive header
window.onresize = function(a) {
    headerhitbox.style.height = header.clientHeight + "px";
}
window.onload = function() {
    headerhitbox.style.height = header.clientHeight + "px";
}


// Mobile Header links sidebar framework
let sidebar;
let sidebarShadow;
let mobileMenuTrigger = document.getElementById("mobile-sidebar-trigger");
if (mobileMenuTrigger) {
    // Create  an sidebar
    sidebar = document.createElement("div");
    sidebar.id = "mobile-sidebar";
    sidebarShadow = document.createElement("div");
    sidebarShadow.id = "mobile-sidebar-shadow";

    // Childnodes
        let closeBtn = document.createElement("span");
        closeBtn.classList.add("icon-sli-close");
        closeBtn.classList.add("mobile-sidebar-close");
        closeBtn.onclick = function() {
            sidebar.classList.remove("extended");
        }
        sidebar.appendChild(closeBtn);

        // Links
        let links = document.getElementsByClassName("header-links")[0].cloneNode(true);
        // Replace vertical hr
        for (var i = 0; i < links.children.length; i++) {
            if (links.children[i].classList.contains("vert-separator")) {
                links.children[i].replaceWith(document.createElement("hr"));
            }
        }
        sidebar.appendChild( links );

        // Credits
        if (showCredits) {
            let credits = document.createElement("p");
            credits.innerHTML = platformName + " is based on the template platform - <a href=\"https://github.com/WilliamRagstad/ExoTree-CTF\" target=\"_blank\">ExoTree CTF</a>.";
            credits.classList.add("creditsText");
            sidebar.appendChild( credits );
        }

    document.body.appendChild(sidebar);
    document.body.appendChild(sidebarShadow);
}

mobileMenuTrigger.onclick = function() {
    sidebar.classList.add("extended");
}
