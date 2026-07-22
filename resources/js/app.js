import './bootstrap';

/**
 * Banavo Financial Advisory — Front-end Scripts
 * Deep Slate Advisory Design System
 */

// ===== SCROLL REVEAL ANIMATION =====
document.addEventListener('DOMContentLoaded', () => {
    const revealElements = document.querySelectorAll('.reveal');

    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                revealObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    revealElements.forEach(el => revealObserver.observe(el));

    // ===== MOBILE MENU TOGGLE =====
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('max-h-screen');

            if (isOpen) {
                mobileMenu.classList.remove('max-h-screen', 'opacity-100');
                mobileMenu.classList.add('max-h-0', 'opacity-0');
                menuIcon.textContent = 'menu';
            } else {
                mobileMenu.classList.remove('max-h-0', 'opacity-0');
                mobileMenu.classList.add('max-h-screen', 'opacity-100');
                menuIcon.textContent = 'close';
            }
        });

        // Close mobile menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('max-h-screen', 'opacity-100');
                mobileMenu.classList.add('max-h-0', 'opacity-0');
                menuIcon.textContent = 'menu';
            });
        });
    }

    // ===== HERO CARD TILT EFFECT =====
    const heroCard = document.querySelector('.glass-milled');
    if (heroCard) {
        document.addEventListener('mousemove', (e) => {
            const rect = heroCard.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = ((y - centerY) / 25).toFixed(2);
            const rotateY = ((centerX - x) / 25).toFixed(2);

            heroCard.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        heroCard.addEventListener('mouseleave', () => {
            heroCard.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
            heroCard.style.transition = 'transform 0.5s ease-out';
        });

        heroCard.addEventListener('mouseenter', () => {
            heroCard.style.transition = 'none';
        });
    }

    // ===== SMOOTH SCROLL =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ===== STATS COUNTER ANIMATION =====
    const statElements = document.querySelectorAll('[data-count]');

    const countObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = el.getAttribute('data-count');
                const prefix = el.getAttribute('data-prefix') || '';
                const suffix = el.getAttribute('data-suffix') || '';
                const numericTarget = parseFloat(target);
                const duration = 2000;
                const startTime = performance.now();

                function updateCount(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const easeOut = 1 - Math.pow(1 - progress, 3);
                    const current = numericTarget * easeOut;

                    if (Number.isInteger(numericTarget)) {
                        el.textContent = prefix + Math.round(current).toLocaleString('id-ID') + suffix;
                    } else {
                        el.textContent = prefix + current.toFixed(1) + suffix;
                    }

                    if (progress < 1) {
                        requestAnimationFrame(updateCount);
                    }
                }

                requestAnimationFrame(updateCount);
                countObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    statElements.forEach(el => countObserver.observe(el));

    // ===== NAVBAR SCROLL BEHAVIOR =====
    const navbar = document.getElementById('main-nav');
    if (navbar) {
        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const currentScroll = window.scrollY;

            if (currentScroll > 100) {
                navbar.classList.add('shadow-lg', 'shadow-black/20');
            } else {
                navbar.classList.remove('shadow-lg', 'shadow-black/20');
            }

            lastScroll = currentScroll;
        });
    }

    // ===== ACTIVE NAV LINK HIGHLIGHTING =====
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    if (sections.length && navLinks.length) {
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('text-primary', 'border-b-2', 'border-primary');
                        link.classList.add('text-text-secondary');

                        if (link.getAttribute('href') === `#${id}` || link.getAttribute('data-section') === id) {
                            link.classList.add('text-primary', 'border-b-2', 'border-primary');
                            link.classList.remove('text-text-secondary');
                        }
                    });
                }
            });
        }, { threshold: 0.3 });

        sections.forEach(section => sectionObserver.observe(section));
    }
});
