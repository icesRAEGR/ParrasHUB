document.addEventListener("DOMContentLoaded", function () {
    const buttonMenu = document.getElementById("button-menu");
    const navLinks = document.querySelector(".nav-links");

    buttonMenu.addEventListener("click", function () {
        navLinks.classList.toggle("active");
        buttonMenu.classList.toggle("close");
    });
});
