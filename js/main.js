/* ============================================
   GUZALIC Luxurious Salon - Main JavaScript
============================================ */

document.addEventListener('DOMContentLoaded', function() {
    
    // ============================================
    // LOADING SCREEN
    // ============================================
    const loader = document.getElementById('loader');
    
    window.addEventListener('load', function() {
        setTimeout(function() {
            loader.classList.add('loaded');
        }, 2000);
    });

    // ============================================
    // CUSTOM CURSOR
    // ============================================
    const cursor = document.querySelector('.custom-cursor');
    const cursorDot = document.querySelector('.cursor-dot');
    
    if (cursor && cursorDot && window.innerWidth > 768) {
        document.addEventListener('mousemove', function(e) {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
            
            setTimeout(function() {
                cursorDot.style.left = e.clientX + 'px';
                cursorDot.style.top = e.clientY + 'px';
            }, 50);
        });

        const hoverElements = document.querySelectorAll('a, button, .nav-link, .service-card, .hero-btn');
        hoverElements.forEach(function(el) {
            el.addEventListener('mouseenter', function() {
                cursor.classList.add('hover');
            });
            el.addEventListener('mouseleave', function() {
                cursor.classList.remove('hover');
            });
        });
    }

    // ============================================
    // NAVIGATION
    // ============================================
    const navbar = document.getElementById('navbar');
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    const navDropdowns = document.querySelectorAll('.nav-dropdown');

    // Scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    if (navToggle) {
        navToggle.addEventListener('click', function() {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    }

    // Dropdown toggle for mobile
    navDropdowns.forEach(function(dropdown) {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        if (toggle) {
            toggle.addEventListener('click', function(e) {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    dropdown.classList.toggle('active');
                }
            });
        }
    });

    // Close menu on link click
    const navLinks = document.querySelectorAll('.nav-link:not(.dropdown-toggle), .dropdown-item');
    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            navToggle.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });

    // ============================================
    // HERO SLIDER
    // ============================================
    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroDots = document.querySelectorAll('.hero-dot');
    const heroPrev = document.getElementById('heroPrev');
    const heroNext = document.getElementById('heroNext');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        heroSlides.forEach(function(slide, i) {
            slide.classList.remove('active');
            if (heroDots[i]) heroDots[i].classList.remove('active');
            
            // Pause videos on inactive slides
            var video = slide.querySelector('.hero-video');
            if (video) {
                video.pause();
            }
        });
        
        currentSlide = index;
        if (currentSlide >= heroSlides.length) currentSlide = 0;
        if (currentSlide < 0) currentSlide = heroSlides.length - 1;
        
        if (heroSlides[currentSlide]) {
            heroSlides[currentSlide].classList.add('active');
            
            // Play video on active slide
            var activeVideo = heroSlides[currentSlide].querySelector('.hero-video');
            if (activeVideo) {
                activeVideo.play().catch(function(e) {
                    console.log('Video autoplay prevented');
                });
            }
        }
        if (heroDots[currentSlide]) heroDots[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    function startSlideshow() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    function stopSlideshow() {
        clearInterval(slideInterval);
    }

    if (heroSlides.length > 0) {
        startSlideshow();

        if (heroNext) {
            heroNext.addEventListener('click', function() {
                stopSlideshow();
                nextSlide();
                startSlideshow();
            });
        }

        if (heroPrev) {
            heroPrev.addEventListener('click', function() {
                stopSlideshow();
                prevSlide();
                startSlideshow();
            });
        }

        heroDots.forEach(function(dot, i) {
            dot.addEventListener('click', function() {
                stopSlideshow();
                showSlide(i);
                startSlideshow();
            });
        });
    }

    // ============================================
    // PARTICLES.JS
    // ============================================
    if (typeof particlesJS !== 'undefined' && document.getElementById('particles-js')) {
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 50,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: '#d4af37'
                },
                shape: {
                    type: 'circle'
                },
                opacity: {
                    value: 0.3,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 2,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#d4af37',
                    opacity: 0.2,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 1,
                    direction: 'none',
                    random: true,
                    straight: false,
                    out_mode: 'out',
                    bounce: false
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: 'grab'
                    },
                    onclick: {
                        enable: true,
                        mode: 'push'
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 140,
                        line_linked: {
                            opacity: 0.5
                        }
                    },
                    push: {
                        particles_nb: 4
                    }
                }
            },
            retina_detect: true
        });
    }

    // ============================================
    // AOS INITIALIZATION
    // ============================================
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });
    }

    // ============================================
    // SWIPER INITIALIZATION
    // ============================================
    if (typeof Swiper !== 'undefined') {
        const testimonialSwiper = new Swiper('.testimonials-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            breakpoints: {
                768: {
                    slidesPerView: 1
                },
                1024: {
                    slidesPerView: 1
                }
            }
        });
    }

    // ============================================
    // COUNTER ANIMATION
    // ============================================
    const statNumbers = document.querySelectorAll('.stat-number');
    let counted = false;

    function countUp(el) {
        const target = parseInt(el.getAttribute('data-count'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(function() {
            current += step;
            if (current >= target) {
                el.textContent = target.toLocaleString() + '+';
                clearInterval(timer);
            } else {
                el.textContent = Math.floor(current).toLocaleString();
            }
        }, 16);
    }

    function checkCounters() {
        if (counted) return;
        
        statNumbers.forEach(function(stat) {
            const rect = stat.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                counted = true;
                statNumbers.forEach(countUp);
            }
        });
    }

    window.addEventListener('scroll', checkCounters);
    checkCounters();

    // ============================================
    // BACK TO TOP
    // ============================================
    const backToTop = document.getElementById('backToTop');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 500) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });

    if (backToTop) {
        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ============================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const offsetTop = target.offsetTop - 100;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // ============================================
    // FORM VALIDATION
    // ============================================
    const forms = document.querySelectorAll('form');
    
    forms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(function(field) {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    });

    // ============================================
    // GALLERY LIGHTBOX
    // ============================================
    const galleryItems = document.querySelectorAll('.gallery-item img, .instagram-item img');
    
    galleryItems.forEach(function(item) {
        item.addEventListener('click', function() {
            const lightbox = document.createElement('div');
            lightbox.className = 'lightbox';
            lightbox.innerHTML = `
                <div class="lightbox-content">
                    <img src="${this.src}" alt="${this.alt}">
                    <button class="lightbox-close">&times;</button>
                </div>
            `;
            document.body.appendChild(lightbox);
            document.body.style.overflow = 'hidden';

            lightbox.addEventListener('click', function(e) {
                if (e.target === lightbox || e.target.classList.contains('lightbox-close')) {
                    lightbox.remove();
                    document.body.style.overflow = '';
                }
            });
        });
    });

    // ============================================
    // YOUTUBE VIDEO PLAY
    // ============================================
    const youtubeItems = document.querySelectorAll('.youtube-play');
    
    youtubeItems.forEach(function(item) {
        item.addEventListener('click', function() {
            const videoModal = document.createElement('div');
            videoModal.className = 'video-modal';
            videoModal.innerHTML = `
                <div class="video-modal-content">
                    <button class="video-modal-close">&times;</button>
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            `;
            document.body.appendChild(videoModal);
            document.body.style.overflow = 'hidden';

            videoModal.addEventListener('click', function(e) {
                if (e.target === videoModal || e.target.classList.contains('video-modal-close')) {
                    videoModal.remove();
                    document.body.style.overflow = '';
                }
            });
        });
    });

    // ============================================
    // 3D TILT EFFECT
    // ============================================
    const tiltElements = document.querySelectorAll('.service-card');
    
    tiltElements.forEach(function(el) {
        el.addEventListener('mousemove', function(e) {
            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;
            
            el.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-15px)`;
        });

        el.addEventListener('mouseleave', function() {
            el.style.transform = '';
        });
    });

    // ============================================
    // GALLERY FILTER
    // ============================================
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItemsAll = document.querySelectorAll('.gallery-grid .gallery-item');

    filterBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            filterBtns.forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');

            galleryItemsAll.forEach(function(item) {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                    setTimeout(function() {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(function() {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // ============================================
    // FAQ ACCORDION
    // ============================================
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function(item) {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', function() {
                const isActive = item.classList.contains('active');
                
                faqItems.forEach(function(i) { i.classList.remove('active'); });
                
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        }
    });

    // ============================================
    // PRICING TABLE TOGGLE
    // ============================================
    const pricingToggle = document.querySelector('.pricing-toggle');
    const pricingCards = document.querySelectorAll('.pricing-card');

    if (pricingToggle) {
        pricingToggle.addEventListener('click', function() {
            this.classList.toggle('annual');
            pricingCards.forEach(function(card) {
                const monthlyPrice = card.querySelector('.monthly-price');
                const annualPrice = card.querySelector('.annual-price');
                if (monthlyPrice && annualPrice) {
                    monthlyPrice.classList.toggle('active');
                    annualPrice.classList.toggle('active');
                }
            });
        });
    }

    // ============================================
    // PARALLAX EFFECT
    // ============================================
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.parallax');
        
        parallaxElements.forEach(function(el) {
            const speed = el.getAttribute('data-speed') || 0.5;
            el.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // ============================================
    // PRELOAD IMAGES
    // ============================================
    const imagesToPreload = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.getAttribute('data-src');
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });

    imagesToPreload.forEach(function(img) {
        imageObserver.observe(img);
    });

    // ============================================
    // SERVICE SELECTION FOR BOOKING
    // ============================================
    const serviceCategory = document.getElementById('serviceCategory');
    const serviceSelect = document.getElementById('serviceSelect');

    const services = {
        'hair-treatments': [
            { name: 'Olaplex Treatment', price: '5000' },
            { name: 'Keratin Treatment', price: '3500' },
            { name: 'Smoothing Treatment', price: '3000' },
            { name: 'KeraBond Treatment', price: '5000' },
            { name: 'Flower Potion Therapy (Organic)', price: '5000' }
        ],
        'hair-color': [
            { name: 'Global Color - Short', price: '8000' },
            { name: 'Global Color - Medium', price: '10000' },
            { name: 'Global Color - Long', price: '12000' },
            { name: 'Balayage', price: '10000' }
        ],
        'hair-spa': [
            { name: 'Basic Hair Spa (45 Min)', price: '1800' },
            { name: 'Semi Advance Hair Spa (60 Min)', price: '3000' },
            { name: 'Advance Hair Spa (60 Min)', price: '4000' },
            { name: 'Korean Hair Spa', price: '5000' }
        ],
        'aesthetics': [
            { name: 'Hydrafacial', price: 'Consultation' },
            { name: 'Oxygeneo Facial', price: 'Consultation' },
            { name: 'Fire & Ice Facial', price: 'Consultation' },
            { name: 'Chemical Peel', price: 'Consultation' },
            { name: 'Laser Hair Removal', price: 'Consultation' }
        ],
        'massage': [
            { name: 'Foot Reflexology (30 Min)', price: '1000' },
            { name: 'Potli Massage (60 Min)', price: '3000' },
            { name: 'Potli Massage (90 Min)', price: '5000' },
            { name: 'Deep Tissue Massage (60 Min)', price: '3000' },
            { name: 'Thai Massage (60 Min)', price: '3000' },
            { name: 'Swedish Massage (60 Min)', price: '3000' },
            { name: 'Shirodhara', price: '4500' },
            { name: 'Stone Massage', price: '4000' },
            { name: 'Mud Massage', price: '6000' }
        ],
        'nails': [
            { name: 'Acrylic Extension (Color/French)', price: '4000' },
            { name: 'Gel Extension (Color/French)', price: '4000' },
            { name: 'Gel Extension', price: '3000' },
            { name: 'Gel/Acrylic Refilling', price: '1500' },
            { name: 'Overlay', price: '2000' },
            { name: 'Nail Art', price: '500' },
            { name: 'Power Polish', price: '999' }
        ]
    };

    if (serviceCategory && serviceSelect) {
        serviceCategory.addEventListener('change', function() {
            const category = this.value;
            serviceSelect.innerHTML = '<option value="">Select Service</option>';
            
            if (services[category]) {
                services[category].forEach(function(service) {
                    const option = document.createElement('option');
                    option.value = service.name;
                    option.textContent = `${service.name} - ₹${service.price}`;
                    serviceSelect.appendChild(option);
                });
            }
        });
    }

    // ============================================
    // FORM SUBMISSION HANDLING
    // ============================================
    const bookingForm = document.getElementById('bookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                // Hide form and show success message
                document.querySelector('.booking-form').style.display = 'none';
                document.querySelector('.booking-info').style.display = 'none';
                const bookingId = 'GUZALIC_' + Math.random().toString(36).substr(2, 9).toUpperCase();
                document.getElementById('bookingId').textContent = 'Booking ID: ' + bookingId;
                document.getElementById('bookingSuccess').style.display = 'block';
                
                // Scroll to success message
                document.getElementById('bookingSuccess').scrollIntoView({ behavior: 'smooth' });
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        });
    }
    
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                // Hide form and show success message
                document.querySelector('.booking-form').style.display = 'none';
                document.querySelector('.contact-cards').style.display = 'none';
                document.querySelector('.social-links').style.display = 'none';
                document.getElementById('contactSuccess').style.display = 'block';
                
                // Scroll to success message
                document.getElementById('contactSuccess').scrollIntoView({ behavior: 'smooth' });
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        });
    }

    console.log('GUZALIC Luxurious Salon - All systems initialized!');
});

// ============================================
// LIGHTBOX & VIDEO MODAL STYLES (Dynamic)
// ============================================
const dynamicStyles = document.createElement('style');
dynamicStyles.textContent = `
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 99999;
        animation: fadeIn 0.3s ease;
    }
    
    .lightbox-content {
        position: relative;
        max-width: 90%;
        max-height: 90%;
    }
    
    .lightbox-content img {
        max-width: 100%;
        max-height: 90vh;
        object-fit: contain;
        border-radius: 10px;
    }
    
    .lightbox-close {
        position: absolute;
        top: -40px;
        right: 0;
        background: none;
        border: none;
        color: #d4af37;
        font-size: 2rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .lightbox-close:hover {
        color: #fff;
        transform: rotate(90deg);
    }
    
    .video-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 99999;
        animation: fadeIn 0.3s ease;
    }
    
    .video-modal-content {
        position: relative;
        width: 90%;
        max-width: 900px;
    }
    
    .video-modal-close {
        position: absolute;
        top: -40px;
        right: 0;
        background: none;
        border: none;
        color: #d4af37;
        font-size: 2rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .video-modal-close:hover {
        color: #fff;
        transform: rotate(90deg);
    }
    
    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 10px;
    }
    
    .video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
`;
document.head.appendChild(dynamicStyles);
