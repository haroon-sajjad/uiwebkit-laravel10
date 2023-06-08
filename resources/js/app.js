import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// JavaScript to toggle mobile menu visibility
const mobileMenuButtonOpen = document.getElementById("mobile-menu-button-open");
const mobileMenuButtonClose = document.getElementById(
    "mobile-menu-button-close"
);
const mobileMenu = document.getElementById("mobile-menu");

mobileMenuButtonOpen.addEventListener("click", () => {
    mobileMenu.classList.remove("hidden");
    mobileMenuButtonOpen.classList.add("hidden");
    mobileMenuButtonClose.classList.remove("hidden");
});

mobileMenuButtonClose.addEventListener("click", () => {
    mobileMenu.classList.add("hidden");
    mobileMenuButtonOpen.classList.remove("hidden");
    mobileMenuButtonClose.classList.add("hidden");
});
