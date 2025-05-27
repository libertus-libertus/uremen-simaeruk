document.addEventListener('DOMContentLoaded', function () {
    // JavaScript untuk Loader
    const loaderWrapper = document.getElementById('loader-wrapper');
    setTimeout(function () {
        if (loaderWrapper) {
            loaderWrapper.classList.add('hidden');
            loaderWrapper.addEventListener('transitionend', function () {
                loaderWrapper.remove();
            }, {
                once: true
            });
        }
    }, 500); 
    // Penundaan 0.5 detik

    // JavaScript untuk Navigasi Active
    const navLinks = document.querySelectorAll('nav a');
    const mobileNavLinks = document.querySelectorAll('#mobile-menu nav a');
    const currentPath = window.location.pathname.split('/').pop(); // Mendapatkan nama file, misal: "blog.html"

    const activateNavLink = (links) => {
        links.forEach(link => {
            link.classList.remove('text-teal-600', 'font-semibold');
            link.classList.add('hover:text-teal-600', 'transition');

            if (link.getAttribute('href') === currentPath) {
                link.classList.add('text-teal-600', 'font-semibold');
                link.classList.remove('hover:text-teal-600', 'transition');
            }
        });
    };

    activateNavLink(navLinks);
    activateNavLink(mobileNavLinks);

    // Javascript untuk Mobile Navigasi
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuBackdrop = document.getElementById('menu-backdrop');

    if (menuToggle && mobileMenu && menuBackdrop) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('-translate-x-full');
            mobileMenu.classList.toggle('translate-x-0');
            menuBackdrop.classList.toggle('opacity-0');
            menuBackdrop.classList.toggle('opacity-50');
            menuBackdrop.classList.toggle('pointer-events-none');
        });

        menuBackdrop.addEventListener('click', () => {
            mobileMenu.classList.add('-translate-x-full');
            mobileMenu.classList.remove('translate-x-0');
            menuBackdrop.classList.add('opacity-0');
            menuBackdrop.classList.remove('opacity-50');
            menuBackdrop.classList.add('pointer-events-none');
        });
    }
});