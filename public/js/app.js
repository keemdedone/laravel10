const mobileMenuElem = document.getElementById("mobile-menu");
const moblieMenuBtn = document.getElementById("moblie-menu-btn");
if (moblieMenuBtn && mobileMenuElem) {
    moblieMenuBtn.addEventListener("click", () => {
        mobileMenuElem.classList.toggle("h-0");
    });
}
