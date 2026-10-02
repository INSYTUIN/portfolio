// Change the navbar style when the page is scrolled.
window.addEventListener("scroll", function () {
    const nav = document.getElementById("mainNav");

    if (window.scrollY > 50) {
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
});

// Show the current year automatically.
document.getElementById("currentYear").textContent = new Date().getFullYear();
