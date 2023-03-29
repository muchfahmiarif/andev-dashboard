const sidebarToggler = document.querySelector(".sidebar-toggler");
const sidebarBody = document.querySelector(".sidebar .sidebar-body");
const sidebarHeaderToggler = document.querySelector(
    ".sidebar-header .sidebar-toggler"
);
const body = document.body;
let sidebar = document.querySelector(".sidebar");
const settingsSidebarToggler = document.querySelector(
    ".settings-sidebar-toggler"
);
const sidebarThemeSettings = document.querySelectorAll(
    'input[name="sidebarThemeSettings"]'
);
var horizontalMenuToggle = document.querySelector(
    '[data-toggle="horizontal-menu-toggle"]'
);
var navItems = document.querySelectorAll(
    ".horizontal-menu .page-navigation >.nav-item"
);

// Sidebar toggle to sidebar-folded
sidebarToggler.addEventListener("click", function (e) {
    e.preventDefault();
    sidebarHeaderToggler.classList.toggle("active");
    sidebarHeaderToggler.classList.toggle("not-active");
    if (window.matchMedia("(min-width: 992px)").matches) {
        e.preventDefault();
        body.classList.toggle("sidebar-folded");
    } else if (window.matchMedia("(max-width: 991px)").matches) {
        e.preventDefault();
        body.classList.toggle("sidebar-open");
    }
});

// open sidebar-folded when hover
sidebarBody.addEventListener("mouseenter", function () {
    if (body.classList.contains("sidebar-folded")) {
        body.classList.add("open-sidebar-folded");
    }
});

sidebarBody.addEventListener("mouseleave", function () {
    if (body.classList.contains("sidebar-folded")) {
        body.classList.remove("open-sidebar-folded");
    }
});

// Settings sidebar toggle
if (settingsSidebarToggler) {
    settingsSidebarToggler.addEventListener("click", function (e) {
        document.body.classList.toggle("settings-open");
    });
}

// Sidebar theme settings
if (sidebarThemeSettings) {
    sidebarThemeSettings.forEach(function (radio) {
        radio.addEventListener("click", function () {
            document.body.classList.remove("sidebar-light", "sidebar-dark");
            document.body.classList.add(this.value);
        });
    });
}

// Enable feather-icons with SVG markup
feather.replace();

// initializing bootstrap tooltip
var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// initializing bootstrap popover
var popoverTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="popover"]')
);
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
});

// Applying perfect-scrollbar
if (sidebarBody) {
    const sidebarBodyScroll = new PerfectScrollbar(sidebarBody);
}
// commented beacuse of hang (scroll from  dropdown.html with small height)
// const contentNavWrapper = document.querySelector('.content-nav-wrapper');
// if (contentNavWrapper) {
//   const contentNavWrapperScroll = new PerfectScrollbar(contentNavWrapper);
// }

// Close other submenu in sidebar on opening any
sidebar.addEventListener("show.bs.collapse", function (event) {
    var shownCollapse = sidebar.querySelector(".collapse.show");
    if (shownCollapse && shownCollapse !== event.target) {
        shownCollapse.classList.remove("show");
    }
});

// Prevent body scrolling while sidebar scroll
sidebarBody.addEventListener("mouseover", function () {
    body.classList.add("overflow-hidden");
});

sidebarBody.addEventListener("mouseout", function () {
    body.classList.remove("overflow-hidden");
});

// close sidebar when click outside on mobile/table
document.addEventListener("click", function (e) {
    e.stopPropagation();

    // closing of sidebar menu when clicking outside of it
    if (!e.target.closest(".sidebar-toggler")) {
        var sidebar = e.target.closest(".sidebar");
        var sidebarBody = e.target.closest(".sidebar-body");
        if (!sidebar && !sidebarBody) {
            if (document.body.classList.contains("sidebar-open")) {
                document.body.classList.remove("sidebar-open");
            }
        }
    }
});

//Horizontal menu in mobile
if (horizontalMenuToggle) {
    horizontalMenuToggle.addEventListener("click", function () {
        var bottomNavbar = document.querySelector(
            ".horizontal-menu .bottom-navbar"
        );
        bottomNavbar.classList.toggle("header-toggled");
    });
}

// Horizontal menu navigation in mobile menu on click
navItems.forEach(function (navItem) {
    navItem.addEventListener("click", function (event) {
        if (window.matchMedia("(max-width: 991px)").matches) {
            if (!navItem.classList.contains("show-submenu")) {
                navItems.forEach(function (item) {
                    item.classList.remove("show-submenu");
                });
            }
            navItem.classList.toggle("show-submenu");
        }
    });
});

window.addEventListener("scroll", function () {
    if (window.matchMedia("(min-width: 992px)").matches) {
        var header = document.querySelector(".horizontal-menu");
        if (window.pageYOffset >= 60) {
            header.classList.add("fixed-on-scroll");
        } else {
            header.classList.remove("fixed-on-scroll");
        }
    }
});
