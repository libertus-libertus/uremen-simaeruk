document.addEventListener('DOMContentLoaded', function () {
    // --- Header Background Change on Scroll ---
    const mainHeader = document.getElementById('main-header');
    const scrollThreshold = 50;

    function changeHeaderBg() {
        if (mainHeader) {
            if (window.scrollY > scrollThreshold) {
                mainHeader.classList.add('bg-white', 'shadow-lg');
            } else {
                mainHeader.classList.remove('shadow-lg');
            }
        }
    }

    window.addEventListener('scroll', changeHeaderBg);
    changeHeaderBg();

    // --- Mobile Menu Toggle Functionality ---
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuBackdrop = document.getElementById('menu-backdrop');

    if (menuToggle && mobileMenu && menuBackdrop) {
        const toggleIcon = menuToggle.querySelector('i');

        function toggleMenu() {
            mobileMenu.classList.toggle('translate-x-full');
            document.body.classList.toggle('menu-open');
            menuBackdrop.classList.toggle('opacity-0');
            menuBackdrop.classList.toggle('pointer-events-none');

            if (mobileMenu.classList.contains('translate-x-full')) {
                toggleIcon.classList.remove('fa-times');
                toggleIcon.classList.add('fa-bars');
            } else {
                toggleIcon.classList.remove('fa-bars');
                toggleIcon.classList.add('fa-times');
            }
        }

        menuToggle.addEventListener('click', toggleMenu);
        menuBackdrop.addEventListener('click', toggleMenu);

        const mobileNavLinks = mobileMenu.querySelectorAll('a');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileMenu.classList.contains('translate-x-full')) {
                    toggleMenu();
                }
            });
        });
    }

    // --- Desktop Dropdown Menu Functionality (How To Get) ---
    const howToGetTrigger = document.getElementById('howToGetDropdownTrigger');
    const howToGetContent = document.getElementById('howToGetDropdownContent');

    if (howToGetTrigger && howToGetContent) {
        // Add a click event listener to the dropdown trigger
        howToGetTrigger.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default link behavior (e.g., navigating to #)
            event
                .stopPropagation(); // Stop the event from bubbling up to the document, which would immediately close the dropdown
            howToGetContent.classList.toggle(
                'hidden'); // Toggle the 'hidden' class to show or hide the dropdown content

            const icon = howToGetTrigger.querySelector('i');
            if (howToGetContent.classList.contains('hidden')) {
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            } else {
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            }
        });

        // Add hover functionality
        howToGetTrigger.parentElement.addEventListener('mouseenter', function () {
            if (howToGetContent.classList.contains(
                    'hidden')) { // Only show on hover if not already open by click
                howToGetContent.classList.remove('hidden');
                howToGetTrigger.querySelector('i').classList.remove('fa-chevron-down');
                howToGetTrigger.querySelector('i').classList.add('fa-chevron-up');
            }
        });

        howToGetTrigger.parentElement.addEventListener('mouseleave', function () {
            // Only hide on mouseleave if not currently open by click (i.e., if 'hidden' is present)
            if (!howToGetContent.classList.contains('hidden')) {
                howToGetContent.classList.add('hidden');
                howToGetTrigger.querySelector('i').classList.remove('fa-chevron-up');
                howToGetTrigger.querySelector('i').classList.add('fa-chevron-down');
            }
        });


        // Add a click event listener to the entire document to close the dropdown
        document.addEventListener('click', function (event) {
            // Check if the click target is outside both the dropdown trigger and its content
            if (!howToGetTrigger.contains(event.target) && !howToGetContent.contains(event
                    .target)) {
                howToGetContent.classList.add(
                    'hidden'); // If clicked outside, hide the dropdown
                howToGetTrigger.querySelector('i').classList.remove('fa-chevron-up');
                howToGetTrigger.querySelector('i').classList.add('fa-chevron-down');
            }
        });
    }

    // --- Mobile Dropdown Menu Functionality (How To Get) ---
    const mobileHowToGetTrigger = document.getElementById('mobileHowToGetDropdownTrigger');
    const mobileHowToGetContent = document.getElementById('mobileHowToGetDropdownContent');

    if (mobileHowToGetTrigger && mobileHowToGetContent) {
        mobileHowToGetTrigger.addEventListener('click', function (event) {
            event.preventDefault();
            mobileHowToGetContent.classList.toggle('hidden');
            const icon = mobileHowToGetTrigger.querySelector('i');
            if (mobileHowToGetContent.classList.contains('hidden')) {
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            } else {
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            }
        });
    }

    // testimonial-slider
    const testimonialSwiper = new Swiper('.testimonial-swiper', {
        loop: true,
        speed: 700,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        spaceBetween: 20,
        slidesPerView: 1,
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 32,
            },
            1280: {
                slidesPerView: 3,
            },
        },
        on: {
            init: function () {
                // Pastikan semua slide memiliki tinggi penuh
                document.querySelectorAll('.swiper-slide').forEach(slide => {
                    slide.style.height = '100%';
                });
            }
        }
    });
});