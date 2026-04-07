// ===== DOM READY =====
document.addEventListener('DOMContentLoaded', function () {

    // ===== HEADER SCROLL EFFECT =====
    const header = document.getElementById('siteHeader');

    function handleScroll() {
        if (window.scrollY > 60) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll(); // Initial check

    // ===== HAMBURGER MENU =====
    const hamburger = document.getElementById('hamburger');
    const headerNav = document.getElementById('headerNav');

    if (hamburger && headerNav) {
        hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('active');
            headerNav.classList.toggle('open');
        });

        // Close menu when clicking a link
        headerNav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                hamburger.classList.remove('active');
                headerNav.classList.remove('open');
            });
        });

        // Close menu on outside click
        document.addEventListener('click', function (e) {
            if (!headerNav.contains(e.target) && !hamburger.contains(e.target)) {
                hamburger.classList.remove('active');
                headerNav.classList.remove('open');
            }
        });
    }

    // ===== FLOATING PARTICLES =====
    const particlesContainer = document.getElementById('particles');

    if (particlesContainer) {
        const particleCount = 20;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');

            // Random positioning
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = (60 + Math.random() * 40) + '%';

            // Random size
            const size = 2 + Math.random() * 4;
            particle.style.width = size + 'px';
            particle.style.height = size + 'px';

            // Random animation
            particle.style.animationDuration = (8 + Math.random() * 15) + 's';
            particle.style.animationDelay = (Math.random() * 10) + 's';
            particle.style.opacity = 0.15 + Math.random() * 0.4;

            particlesContainer.appendChild(particle);
        }
    }

    // ===== SMOOTH VIDEO PLAYBACK =====
    const heroVideo = document.getElementById('heroVideo');

    if (heroVideo) {
        // Ensure video plays on mobile devices
        heroVideo.play().catch(function () {
            // Auto-play was prevented, add a click handler
            document.addEventListener('click', function playOnClick() {
                heroVideo.play();
                document.removeEventListener('click', playOnClick);
            }, { once: true });
        });

        // Slow down video for cinematic feel
        heroVideo.playbackRate = 0.75;
    }

    // ===== PARALLAX ON MOUSE MOVE =====
    const heroContent = document.querySelector('.hero-content');

    if (heroContent && window.innerWidth > 768) {
        document.addEventListener('mousemove', function (e) {
            const x = (e.clientX / window.innerWidth - 0.5) * 2;
            const y = (e.clientY / window.innerHeight - 0.5) * 2;

            requestAnimationFrame(function () {
                heroContent.style.transform =
                    'translate(' + (x * -8) + 'px, ' + (y * -5) + 'px)';
            });
        });
    }

    // ===== INTERSECTION OBSERVER FOR ANIMATIONS =====
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('[data-animate]').forEach(function (el) {
        observer.observe(el);
    });

    // ===== VIDEO FALLBACK — CSS ANIMATED GRADIENT =====
    if (heroVideo) {
        heroVideo.addEventListener('error', function () {
            const videoWrapper = document.querySelector('.hero-video-wrapper');
            if (videoWrapper) {
                videoWrapper.innerHTML = '';
                videoWrapper.style.background =
                    'linear-gradient(135deg, #000000 0%, #1a1a2e 30%, #16213e 60%, #0f3460 100%)';
                videoWrapper.style.backgroundSize = '400% 400%';
                videoWrapper.style.animation = 'gradientShift 12s ease infinite';

                // Add keyframes dynamically
                const style = document.createElement('style');
                style.textContent = '@keyframes gradientShift { ' +
                    '0% { background-position: 0% 50%; } ' +
                    '50% { background-position: 100% 50%; } ' +
                    '100% { background-position: 0% 50%; } }';
                document.head.appendChild(style);
            }
        });
    }

    // ===== SERVICES CAROUSEL NAVIGATION =====
    const servicesCarousel = document.getElementById('servicesCarousel');
    const servicesPrev = document.getElementById('servicesPrev');
    const servicesNext = document.getElementById('servicesNext');

    if (servicesCarousel && servicesPrev && servicesNext) {
        var scrollAmount = 0;

        servicesNext.addEventListener('click', function () {
            var cardWidth = servicesCarousel.querySelector('.services-card').offsetWidth + 24;
            servicesCarousel.scrollBy({ left: cardWidth, behavior: 'smooth' });
        });

        servicesPrev.addEventListener('click', function () {
            var cardWidth = servicesCarousel.querySelector('.services-card').offsetWidth + 24;
            servicesCarousel.scrollBy({ left: -cardWidth, behavior: 'smooth' });
        });
    }

});
