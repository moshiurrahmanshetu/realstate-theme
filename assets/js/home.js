/**
 * Homepage Specific JavaScript
 *
 * @package Nextoolify_Real_Estate
 * @since 1.0.0
 */

document.addEventListener('DOMContentLoaded', function () {
    // Initialize AOS animations with a smooth duration
    if (typeof AOS !== 'undefined') {
        AOS.init({
            once: true,
            duration: 1000
        });
    }

    // Initialize Swiper Hero Slider
    if (typeof Swiper !== 'undefined') {
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination-custom',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-custom-next',
                prevEl: '.swiper-button-custom-prev',
            },
        });

        // Initialize Testimonial Swiper Slider
        const testimonialSwiper = new Swiper('.testimonial-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonial-swiper .swiper-pagination-custom',
                clickable: true,
            },
        });
    }

    // Statistics Counter Animation (Vanilla JS IntersectionObserver implementation)
    const counters = document.querySelectorAll('.counter-number');
    const countSpeed = 200; // The lower, the faster

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;

                // Calculate increment based on target/speed proportion
                const inc = Math.max(1, Math.ceil(target / countSpeed));

                if (count < target) {
                    counter.innerText = count + inc;
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    // Create Intersection Observer to trigger counters exactly when they roll on screen
    const observerOptions = {
        threshold: 0.5
    };

    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const statsSection = document.querySelector('.stats-counter-section');
    if (statsSection) {
        counterObserver.observe(statsSection);
    }
});
