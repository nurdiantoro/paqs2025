// (() => {
//     const navbar = document.getElementById("navbarNew");
//     const list = document.getElementById("list-navbar");
//     const scrollYThreshold = 200;
//     let previousScrollY = window.scrollY;

//     if (!navbar) return; // Exit if navbar element is not found

//     window.addEventListener("scroll", () => {
//         if (window.scrollY > scrollYThreshold) {
//             navbar.classList.add("fixed", "bg-warna-temp-01");
//             navbar.classList.remove("absolute");
//         } else {
//             navbar.classList.add("absolute");
//             navbar.classList.remove("fixed", "bg-warna-temp-01");
//         }

//         if (window.scrollY > previousScrollY) {
//             navbar.classList.add("top-[-60px]"); // Hide navbar
//         } else {
//             navbar.classList.remove("top-[-60px]"); // Show navbar
//         }

//         previousScrollY = window.scrollY;
//     });

//     // Toggle mobile menu
//     const menuToggle = document.getElementById("menu-toggle");
//     if (menuToggle) {
//         menuToggle.addEventListener("click", () => {
//             const mobileMenu = document.getElementById("mobile-menu");
//             if (mobileMenu) mobileMenu.classList.toggle("hidden");
//         });
//     }
// })();
