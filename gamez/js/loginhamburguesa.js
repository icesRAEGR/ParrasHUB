document.addEventListener("DOMContentLoaded", function () {
    const buttonMenu = document.getElementById("button-menu");
    const menu = document.querySelector(".menu");

    buttonMenu.addEventListener("click", function () {
        menu.classList.toggle("active");
        buttonMenu.classList.toggle("active");
    });
});
