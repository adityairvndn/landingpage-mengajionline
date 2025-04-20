import "./bootstrap";

// Get hamburger button and mobile menu
const hamburgerBtn = document.getElementById("hamburger-btn");
const mobileMenu = document.getElementById("mobile-menu");
const closeMenuBtn = document.getElementById("close-menu-btn");

// Show mobile menu on hamburger button click
hamburgerBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("translate-x-full");
    mobileMenu.classList.add("translate-x-0");
    mobileMenu.classList.remove("hidden"); // Menampilkan mobile menu
});

// Close mobile menu on close button click
closeMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.add("translate-x-full");
    setTimeout(() => mobileMenu.classList.add("hidden"), 300); // Menyembunyikan setelah animasi selesai
});

const swiper = new Swiper(".swiper-container", {
    slidesPerView: 4, // Menampilkan 4 slide sekaligus di desktop
    spaceBetween: 10, // Jarak antar slide
    centeredSlides: false, // Agar slide berada di tengah
    loop: true, // Slide berulang
    autoplay: {
        delay: 0, // Memberikan delay 3 detik di setiap transisi (tanpa delay 0)
        disableOnInteraction: true, // Autoplay tetap aktif meskipun interaksi
    },
    speed: 3000, // Durasi transisi yang lebih cepat (ms)
});
