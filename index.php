<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GUZALIC Luxurious Salon - Premium Beauty & Spa Wellness. Experience world-class hair treatments, aesthetic services, massage therapy, and bridal packages in our luxury salon.">
    <meta name="keywords" content="luxury salon, spa, hair treatment, keratin, olaplex, massage, facial, bridal makeup, nail extensions, GUZALIC">
    <meta name="author" content="GUZALIC">
    <title>GUZALIC | Luxurious Salon - Hamam • Aesthetics • Beauty</title>
    
    <!-- Fonts with display=swap -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Performance Optimization -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
    
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/guzalic-logo.png">
</head>
<body>
    <!-- Loading Screen (Fast) -->
    <div class="loader-wrapper" id="loader">
        <div class="loader-content">
            <div class="loader-logo">
                <img src="images/guzalic-logo.png" alt="GUZALIC Logo" loading="eager">
            </div>
           
        </div>
    </div>

    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>
    <div class="cursor-dot"></div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <a href="index.php" class="nav-logo">
            <img src="images/guzalic-logo.png" alt="GUZALIC Logo">
        
        </a>
        
        <ul class="nav-menu" id="navMenu">
            <li class="nav-item">
                <a href="index.php" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link">About Us</a>
            </li>
            <li class="nav-item nav-dropdown">
                <span class="nav-link dropdown-toggle">
                    Services <i class="fas fa-chevron-down"></i>
                </span>
                <div class="dropdown-menu">
                    <a href="services.php#hair-treatments" class="dropdown-item"><i class="fas fa-cut"></i> Hair Treatments</a>
                    <a href="services.php#hair-color" class="dropdown-item"><i class="fas fa-palette"></i> Hair Color</a>
                    <a href="services.php#hair-spa" class="dropdown-item"><i class="fas fa-spa"></i> Hair Spa</a>
                    <a href="services.php#aesthetics" class="dropdown-item"><i class="fas fa-magic"></i> Aesthetics & Facials</a>
                    <a href="services.php#massage" class="dropdown-item"><i class="fas fa-hand-holding-heart"></i> Massage Therapy</a>
                    <a href="services.php#nails" class="dropdown-item"><i class="fas fa-hand-sparkles"></i> Nail Extensions</a>
                    <a href="services.php#bridal" class="dropdown-item"><i class="fas fa-crown"></i> Bridal Packages</a>
                    <a href="services.php#waxing" class="dropdown-item"><i class="fas fa-star"></i> Waxing Services</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="pricing.php" class="nav-link">Pricing</a>
            </li>
            <li class="nav-item">
                <a href="gallery.php" class="nav-link">Gallery</a>
            </li>
            <li class="nav-item">
                <a href="booking.php" class="nav-link">Booking</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
                <a href="booking.php" class="nav-book-btn">Book Now</a>
            </li>
        </ul>
        
        <div class="nav-toggle" id="navToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <!-- Hero Slider Background with Videos -->
        <div class="hero-slider">
            <div class="hero-slide active" data-type="video">
                <video class="hero-video" muted loop playsinline>
                    <source src="https://assets.mixkit.co/videos/preview/mixkit-young-woman-having-facial-treatment-in-spa-center-39844-large.mp4" type="video/mp4">
                </video>
                <img src="images/luxury_salon_hero_background.png" alt="Luxury Salon" class="hero-fallback">
            </div>
            <div class="hero-slide" data-type="video">
                <video class="hero-video" muted loop playsinline>
                    <source src="https://assets.mixkit.co/videos/preview/mixkit-beautician-applying-mud-mask-on-customers-face-39843-large.mp4" type="video/mp4">
                </video>
                <img src="images/luxury_spa_wellness_center.png" alt="Spa Wellness" class="hero-fallback">
            </div>
            <div class="hero-slide" data-type="video">
                <video class="hero-video" muted loop playsinline>
                    <source src="https://assets.mixkit.co/videos/preview/mixkit-woman-relaxing-in-a-spa-with-a-face-mask-39838-large.mp4" type="video/mp4">
                </video>
                <img src="images/salon_reception_interior_image.png" alt="Salon Interior" class="hero-fallback">
            </div>
            <div class="hero-slide" data-type="video">
                <video class="hero-video" muted loop playsinline>
                    <source src="https://assets.mixkit.co/videos/preview/mixkit-woman-applying-facial-mask-in-spa-39837-large.mp4" type="video/mp4">
                </video>
                <img src="images/vip_treatment_room_salon.png" alt="VIP Treatment" class="hero-fallback">
            </div>
        </div>
        
        <!-- Overlay -->
        <div class="hero-overlay"></div>
        
        <!-- Particles -->
        <div id="particles-js"></div>
        
        <!-- Smoke Animation -->
        <div class="smoke-animation"></div>
        
        <!-- Hero Content -->
        <div class="hero-content">
            <p class="hero-subtitle">Place of Your Beauty</p>
            <h1 class="hero-title">
                Beauty & Spa
                <span>Wellness</span>
            </h1>
            <p class="hero-description">
                "The best thing is to look natural, but it takes a lot of makeup to look natural." Experience the epitome of luxury beauty care at GUZALIC.
            </p>
            <div class="hero-buttons">
                <a href="booking.php" class="hero-btn hero-btn-primary">Book Appointment</a>
                <a href="services.php" class="hero-btn hero-btn-secondary">Our Services</a>
            </div>
        </div>
        
        <!-- Slider Navigation -->
        <div class="hero-prev hero-nav" id="heroPrev">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="hero-next hero-nav" id="heroNext">
            <i class="fas fa-chevron-right"></i>
        </div>
        
        <!-- Slider Dots -->
        <div class="hero-dots">
            <div class="hero-dot active" data-slide="0"></div>
            <div class="hero-dot" data-slide="1"></div>
            <div class="hero-dot" data-slide="2"></div>
            <div class="hero-dot" data-slide="3"></div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <span>Scroll Down</span>
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="section section-dark" id="about-preview">
        <div class="container">
            <div class="about-section">
                <div class="about-image" data-aos="fade-right" data-aos-duration="1000">
                    <img src="images/salon_styling_stations_interior.png" alt="GUZALIC Salon Interior">
                </div>
                <div class="about-content" data-aos="fade-left" data-aos-duration="1000">
                    <span class="section-subtitle">Welcome to GUZALIC</span>
                    <h2>Where Luxury Meets<br><span class="text-gold">Beauty Excellence</span></h2>
                    <p>
                        Step into a world of unparalleled luxury at GUZALIC Luxurious Salon. Nestled in the heart of the city, our salon is a sanctuary where beauty, wellness, and relaxation converge to create an extraordinary experience for every guest.
                    </p>
                    <p>
                        With over a decade of expertise in the beauty industry, we have perfected the art of transformation. Our team of internationally trained specialists brings together cutting-edge techniques with timeless elegance to deliver results that exceed expectations.
                    </p>
                    <div class="about-features">
                        <div class="about-feature">
                            <i class="fas fa-award"></i>
                            <span>Award Winning Salon</span>
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-users"></i>
                            <span>Expert Specialists</span>
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-gem"></i>
                            <span>Premium Products</span>
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-heart"></i>
                            <span>Personalized Care</span>
                        </div>
                    </div>
                    <a href="about.php" class="hero-btn hero-btn-primary mt-4">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section section-darker" id="services">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">What We Offer</span>
            <h2 class="section-title">Our Luxury Services</h2>
            <p class="section-description">
                Discover our comprehensive range of premium beauty and wellness services, each designed to enhance your natural beauty and provide ultimate relaxation.
            </p>
        </div>
        
        <div class="services-grid">
            <!-- Hair Treatments -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-image">
                    <img src="images/hair_treatment_service_image.png" alt="Hair Treatments">
                    <div class="service-overlay">
                        <a href="services.php#hair-treatments" class="hero-btn hero-btn-secondary">View Details</a>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3 class="service-title">Hair Treatments</h3>
                    <p class="service-description">
                        Transform your hair with our premium treatments including Olaplex, Keratin, Smoothing, KeraBond, and Flower Potion Therapy.
                    </p>
                    <span class="service-price">Starting from ₹3,000</span>
                    <a href="services.php#hair-treatments" class="service-link">
                        Explore <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Hair Color -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-image">
                    <img src="images/hair_color_balayage_image.png" alt="Hair Color">
                    <div class="service-overlay">
                        <a href="services.php#hair-color" class="hero-btn hero-btn-secondary">View Details</a>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="service-title">Hair Color</h3>
                    <p class="service-description">
                        Express yourself with stunning hair colors including Balayage, Global Color, Highlights, and creative color techniques.
                    </p>
                    <span class="service-price">Starting from ₹8,000</span>
                    <a href="services.php#hair-color" class="service-link">
                        Explore <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Hair Spa -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-image">
                    <img src="images/hair_spa_treatment_image.png" alt="Hair Spa">
                    <div class="service-overlay">
                        <a href="services.php#hair-spa" class="hero-btn hero-btn-secondary">View Details</a>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3 class="service-title">Hair Spa</h3>
                    <p class="service-description">
                        Revitalize your hair with our luxurious spa treatments from Basic to Korean Hair Spa for ultimate nourishment.
                    </p>
                    <span class="service-price">Starting from ₹1,800</span>
                    <a href="services.php#hair-spa" class="service-link">
                        Explore <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Aesthetics -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-image">
                    <img src="images/aesthetics_facial_treatment_image.png" alt="Aesthetics">
                    <div class="service-overlay">
                        <a href="services.php#aesthetics" class="hero-btn hero-btn-secondary">View Details</a>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h3 class="service-title">Aesthetics & Facials</h3>
                    <p class="service-description">
                        Advanced skincare with Hydrafacial, Oxygeneo, Fire & Ice, Chemical Peels, and USFDA approved laser treatments.
                    </p>
                    <span class="service-price">Consultation Required</span>
                    <a href="services.php#aesthetics" class="service-link">
                        Explore <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Massage Therapy -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-image">
                    <img src="images/massage_therapy_service_image.png" alt="Massage Therapy">
                    <div class="service-overlay">
                        <a href="services.php#massage" class="hero-btn hero-btn-secondary">View Details</a>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="service-title">Massage Therapy</h3>
                    <p class="service-description">
                        Rejuvenate body and mind with Potli, Deep Tissue, Thai, Swedish, Stone, Shirodhara, and specialized massages.
                    </p>
                    <span class="service-price">Starting from ₹1,000</span>
                    <a href="services.php#massage" class="service-link">
                        Explore <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Nail Extensions -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-image">
                    <img src="images/nail_extension_service_image.png" alt="Nail Extensions">
                    <div class="service-overlay">
                        <a href="services.php#nails" class="hero-btn hero-btn-secondary">View Details</a>
                    </div>
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-hand-sparkles"></i>
                    </div>
                    <h3 class="service-title">Nail Extensions</h3>
                    <p class="service-description">
                        Stunning nail art and extensions including Acrylic, Gel, French tips, Overlay, and creative nail designs.
                    </p>
                    <span class="service-price">Starting from ₹500</span>
                    <a href="services.php#nails" class="service-link">
                        Explore <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="services.php" class="hero-btn hero-btn-primary">View All Services</a>
        </div>
    </section>

    <!-- 3D TV Section -->
    <section class="tv-section section" id="tv-section">
        <div class="tv-container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Experience Luxury</span>
                <h2 class="section-title">Watch Our Story</h2>
            </div>
            
            <div class="tv-wrapper" data-aos="zoom-in" data-aos-duration="1500">
                <div class="tv-frame">
                    <div class="tv-screen">
                        <video autoplay muted loop playsinline id="tvVideo">
                            <source src="videos/guzalic-salon-profile.mp4" type="video/mp4">
                        </video>
                        <div class="tv-reflection"></div>
                    </div>
                    <div class="tv-stand"></div>
                </div>
            </div>
            
            <div class="tv-content-text" data-aos="fade-up" data-aos-delay="500">
                <h2>Immerse Yourself in <span class="text-gold">Pure Luxury</span></h2>
                <p>Discover the art of beauty and wellness at GUZALIC. Every treatment is crafted to perfection, ensuring you leave feeling rejuvenated and beautiful.</p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section section" id="stats">
        <div class="stats-grid">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-icon"><i class="fas fa-smile"></i></div>
                <div class="stat-number" data-count="5000">0</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-icon"><i class="fas fa-spa"></i></div>
                <div class="stat-number" data-count="50">0</div>
                <div class="stat-label">Luxury Services</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-icon"><i class="fas fa-user-tie"></i></div>
                <div class="stat-number" data-count="25">0</div>
                <div class="stat-label">Expert Specialists</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-icon"><i class="fas fa-trophy"></i></div>
                <div class="stat-number" data-count="15">0</div>
                <div class="stat-label">Awards Won</div>
            </div>
        </div>
    </section>

    <!-- 3D iPhone Section -->
    <section class="iphone-section section" id="iphone-section">
        <div class="iphone-container">
            <div class="iphone-content" data-aos="fade-right" data-aos-duration="1000">
                <span class="section-subtitle">Stay Connected</span>
                <h2>Follow Our <span class="text-gold">Beauty Journey</span></h2>
                <p>
                    Stay updated with our latest treatments, transformations, and beauty tips. Follow us on social media and be part of the GUZALIC family. Watch our exclusive content and get inspired for your next visit.
                </p>
                <ul class="iphone-features">
                    <li><i class="fas fa-check-circle"></i> Daily Beauty Tips & Tutorials</li>
                    <li><i class="fas fa-check-circle"></i> Before & After Transformations</li>
                    <li><i class="fas fa-check-circle"></i> Exclusive Behind-the-Scenes</li>
                    <li><i class="fas fa-check-circle"></i> Special Offers & Promotions</li>
                    <li><i class="fas fa-check-circle"></i> Live Sessions with Experts</li>
                </ul>
                <div class="mt-4">
                    <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank" class="hero-btn hero-btn-primary">
                        <i class="fab fa-instagram"></i> Follow on Instagram
                    </a>
                </div>
            </div>
            
            <div class="iphone-wrapper" data-aos="fade-left" data-aos-duration="1000">
                <div class="iphone-frame">
                    <div class="iphone-screen">
                        <div class="iphone-notch"></div>
                        <video class="iphone-video" muted loop playsinline autoplay>
                            <source src="videos/guzalic-speed-ramp.mp4" type="video/mp4">
                        </video>
                        <div class="iphone-home-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section class="section section-darker" id="offers">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Exclusive Deals</span>
            <h2 class="section-title">Special Offers</h2>
            <p class="section-description">
                Take advantage of our limited-time offers and experience luxury beauty services at special prices.
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-image">
                    <img src="images/bridal_makeup_service_image.png" alt="Bridal Package">
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="service-title">Bridal Bliss Package</h3>
                    <p class="service-description">
                        Complete bridal makeover including pre-bridal treatments, makeup, hair styling, mehendi, and more.
                    </p>
                    <span class="service-price text-gold">Save 20% on Packages</span>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-image">
                    <img src="images/luxury_skincare_products.png" alt="Skincare Package">
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3 class="service-title">Glow Package</h3>
                    <p class="service-description">
                        Combination of Hydrafacial + Hair Spa + Manicure & Pedicure for the ultimate glow experience.
                    </p>
                    <span class="service-price text-gold">₹9,999 Only</span>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-image">
                    <img src="images/hot_stone_massage_therapy.png" alt="Wellness Package">
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="service-title">Wellness Retreat</h3>
                    <p class="service-description">
                        Full body massage + Aromatherapy + Facial + Head massage for complete relaxation and rejuvenation.
                    </p>
                    <span class="service-price text-gold">₹7,999 Only</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section section" id="testimonials">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Client Love</span>
            <h2 class="section-title">What Our Clients Say</h2>
        </div>
        
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p class="testimonial-content">
                            "GUZALIC transformed my wedding day completely. The bridal package was beyond my expectations. Every detail was perfect, and I felt like a queen. The team is incredibly professional and talented!"
                        </p>
                        <div class="testimonial-author">
                            <img src="images/salon_team_professionals_image.png" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h4>Priya Sharma</h4>
                                <span>Bridal Client</span>
                                <div class="testimonial-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p class="testimonial-content">
                            "The Korean Hair Spa was absolutely amazing! My hair has never felt so soft and healthy. The ambiance is so relaxing, and the staff treats you like royalty. Highly recommend!"
                        </p>
                        <div class="testimonial-author">
                            <img src="images/salon_team_professionals_image.png" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h4>Ananya Kapoor</h4>
                                <span>Regular Client</span>
                                <div class="testimonial-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p class="testimonial-content">
                            "Best massage experience in the city! The Shirodhara treatment was deeply relaxing. The therapists are skilled and the atmosphere is pure luxury. Will definitely be coming back!"
                        </p>
                        <div class="testimonial-author">
                            <img src="images/salon_team_professionals_image.png" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h4>Rahul Mehta</h4>
                                <span>Wellness Client</span>
                                <div class="testimonial-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Before After Section -->
    <section class="section section-dark" id="transformations">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Amazing Results</span>
            <h2 class="section-title">Transformations</h2>
            <p class="section-description">
                Witness the magic of our expert treatments through these stunning before and after transformations.
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-image">
                    <img src="images/hair_transformation_before_after.png" alt="Hair Transformation">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Hair Transformation</h3>
                    <p class="service-description">
                        Keratin treatment that brought back the shine and health to damaged hair.
                    </p>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-image">
                    <img src="images/olaplex_hair_treatment.png" alt="Olaplex Treatment">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Olaplex Magic</h3>
                    <p class="service-description">
                        Bond-building treatment that restored severely damaged hair to silky perfection.
                    </p>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-image">
                    <img src="images/nail_salon_interior_setup.png" alt="Nail Art">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Nail Art Perfection</h3>
                    <p class="service-description">
                        Stunning gel extensions with intricate nail art designs for a glamorous look.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3D Location Section -->
    <section class="location-section section" id="location-section">
        <div class="location-container">
            <div class="location-content" data-aos="fade-right" data-aos-duration="1000">
                <span class="section-subtitle">Find Us</span>
                <h2>Visit Our <span class="text-gold">Luxurious Salon</span></h2>
                <p>
                    Located in the heart of the city, our salon offers easy access and a welcoming atmosphere. Come experience the GUZALIC difference in person.
                </p>
                <ul class="location-info">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="location-info-text">
                            <h4>Address</h4>
                            <p>123 Luxury Lane, Beauty District<br>New Delhi, 110001</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <div class="location-info-text">
                            <h4>Working Hours</h4>
                            <p>Monday - Sunday: 10:00 AM - 9:00 PM</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <div class="location-info-text">
                            <h4>Contact</h4>
                            <p>+91 98765 43210</p>
                        </div>
                    </li>
                </ul>
                <a href="https://maps.google.com" target="_blank" class="get-directions-btn">
                    <i class="fas fa-directions"></i> Get Directions
                </a>
            </div>
            
            <div class="location-map-wrapper" data-aos="fade-left" data-aos-duration="1000">
                <div class="location-map-frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.6743057439396!2d77.20658791508096!3d28.64280908241445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd37b741d057%3A0xcdee88e47393c3f1!2sConnaught%20Place%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1635000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                    <div class="location-pulse"></div>
                    <div class="location-pin">
                        <i class="fas fa-map-marker-alt location-pin-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instagram Section -->
    <section class="instagram-section section" id="instagram">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">@GUZALIC_Salon</span>
            <h2 class="section-title">Follow Us on Instagram</h2>
        </div>
        
        <div class="instagram-grid" data-aos="fade-up" data-aos-delay="200">
            <div class="instagram-item">
                <img src="images/hair_treatment_service_image.png" alt="Instagram Post">
                <div class="instagram-overlay">
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
            <div class="instagram-item">
                <img src="images/hair_color_balayage_image.png" alt="Instagram Post">
                <div class="instagram-overlay">
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
            <div class="instagram-item">
                <img src="images/massage_therapy_service_image.png" alt="Instagram Post">
                <div class="instagram-overlay">
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
            <div class="instagram-item">
                <img src="images/nail_extension_service_image.png" alt="Instagram Post">
                <div class="instagram-overlay">
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
            <div class="instagram-item">
                <img src="images/aesthetics_facial_treatment_image.png" alt="Instagram Post">
                <div class="instagram-overlay">
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
            <div class="instagram-item">
                <img src="images/bridal_makeup_service_image.png" alt="Instagram Post">
                <div class="instagram-overlay">
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>
        
        <div class="instagram-follow" data-aos="fade-up">
            <a href="https://instagram.com" target="_blank">
                <i class="fab fa-instagram"></i> Follow @GUZALIC_Salon
            </a>
        </div>
    </section>

    <!-- YouTube Section -->
    <section class="youtube-section section" id="youtube">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Watch & Learn</span>
            <h2 class="section-title">Our YouTube Channel</h2>
            <p class="section-description">
                Subscribe to our channel for beauty tips, tutorials, and behind-the-scenes content.
            </p>
        </div>
        
        <div class="youtube-grid">
            <div class="youtube-item" data-aos="fade-up" data-aos-delay="100">
                <div class="youtube-thumbnail">
                    <img src="images/hair_spa_treatment_image.png" alt="Video Thumbnail">
                    <div class="youtube-play">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="youtube-info">
                    <h4 class="youtube-title">Korean Hair Spa Treatment Guide</h4>
                    <span class="youtube-views">45K views • 2 weeks ago</span>
                </div>
            </div>
            
            <div class="youtube-item" data-aos="fade-up" data-aos-delay="200">
                <div class="youtube-thumbnail">
                    <img src="images/hydrafacial_treatment_machine.png" alt="Video Thumbnail">
                    <div class="youtube-play">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="youtube-info">
                    <h4 class="youtube-title">Hydrafacial: Everything You Need to Know</h4>
                    <span class="youtube-views">38K views • 1 month ago</span>
                </div>
            </div>
            
            <div class="youtube-item" data-aos="fade-up" data-aos-delay="300">
                <div class="youtube-thumbnail">
                    <img src="images/shirodhara_ayurvedic_treatment.png" alt="Video Thumbnail">
                    <div class="youtube-play">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="youtube-info">
                    <h4 class="youtube-title">Shirodhara: Ancient Ayurvedic Therapy</h4>
                    <span class="youtube-views">52K views • 3 weeks ago</span>
                </div>
            </div>
            
            <div class="youtube-item" data-aos="fade-up" data-aos-delay="100">
                <div class="youtube-thumbnail">
                    <img src="images/olaplex_hair_treatment.png" alt="Video Thumbnail">
                    <div class="youtube-play">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="youtube-info">
                    <h4 class="youtube-title">Olaplex Treatment: Before & After</h4>
                    <span class="youtube-views">67K views • 1 month ago</span>
                </div>
            </div>
            
            <div class="youtube-item" data-aos="fade-up" data-aos-delay="200">
                <div class="youtube-thumbnail">
                    <img src="images/nail_salon_interior_setup.png" alt="Video Thumbnail">
                    <div class="youtube-play">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="youtube-info">
                    <h4 class="youtube-title">Nail Art Trends 2024</h4>
                    <span class="youtube-views">29K views • 2 weeks ago</span>
                </div>
            </div>
            
            <div class="youtube-item" data-aos="fade-up" data-aos-delay="300">
                <div class="youtube-thumbnail">
                    <img src="images/thai_massage_therapy_image.png" alt="Video Thumbnail">
                    <div class="youtube-play">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="youtube-info">
                    <h4 class="youtube-title">Thai Massage Benefits Explained</h4>
                    <span class="youtube-views">41K views • 1 month ago</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Preview Section -->
    <section class="section section-dark" id="team-preview">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Our Experts</span>
            <h2 class="section-title">Meet Our Specialists</h2>
            <p class="section-description">
                Our team of internationally trained beauty experts are dedicated to making you look and feel your best.
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-image">
                    <img src="images/salon_team_professionals_image.png" alt="Hair Specialist">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Hair Specialists</h3>
                    <p class="service-description">
                        Expert stylists trained in the latest techniques from Paris, London, and Seoul.
                    </p>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-image">
                    <img src="images/salon_team_professionals_image.png" alt="Skincare Expert">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Skincare Experts</h3>
                    <p class="service-description">
                        Certified dermatologists and aestheticians for all your skincare needs.
                    </p>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-image">
                    <img src="images/salon_team_professionals_image.png" alt="Massage Therapist">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Massage Therapists</h3>
                    <p class="service-description">
                        Trained in traditional and modern massage techniques for ultimate relaxation.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="about.php#team" class="hero-btn hero-btn-primary">Meet All Experts</a>
        </div>
    </section>

    <!-- Blog Preview Section -->
    <section class="section section-darker" id="blog-preview">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Beauty Tips</span>
            <h2 class="section-title">Latest From Our Blog</h2>
        </div>
        
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-image">
                    <img src="images/luxury_skincare_products.png" alt="Blog Post">
                </div>
                <div class="service-content">
                    <span class="section-subtitle" style="font-size: 0.7rem; margin-bottom: 10px;">Skincare</span>
                    <h3 class="service-title">10 Winter Skincare Tips for Glowing Skin</h3>
                    <p class="service-description">
                        Discover the secrets to maintaining healthy, radiant skin during the cold winter months...
                    </p>
                    <a href="#" class="service-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-image">
                    <img src="images/hair_color_balayage_image.png" alt="Blog Post">
                </div>
                <div class="service-content">
                    <span class="section-subtitle" style="font-size: 0.7rem; margin-bottom: 10px;">Hair Care</span>
                    <h3 class="service-title">Balayage vs Highlights: Which is Right for You?</h3>
                    <p class="service-description">
                        Understanding the difference between these popular hair coloring techniques...
                    </p>
                    <a href="#" class="service-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-image">
                    <img src="images/aromatherapy_massage_oils.png" alt="Blog Post">
                </div>
                <div class="service-content">
                    <span class="section-subtitle" style="font-size: 0.7rem; margin-bottom: 10px;">Wellness</span>
                    <h3 class="service-title">Benefits of Aromatherapy for Mind & Body</h3>
                    <p class="service-description">
                        Learn how essential oils can transform your wellness routine and reduce stress...
                    </p>
                    <a href="#" class="service-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section" id="newsletter">
        <div class="newsletter-content" data-aos="zoom-in">
            <h2>Get Exclusive Beauty Tips & Offers</h2>
            <p>Subscribe to our newsletter and be the first to know about special promotions, new services, and beauty trends.</p>
            <form class="newsletter-form" action="includes/newsletter.php" method="POST">
                <input type="email" name="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="footer">
        <div class="footer-grid">
            <div class="footer-brand">
                <img src="images/guzalic-logo.png" alt="GUZALIC Logo">
                <p>
                    GUZALIC Luxurious Salon is your premier destination for beauty, wellness, and relaxation. Experience the art of transformation with our expert team and premium services.
                </p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="pricing.php">Pricing</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h4>Services</h4>
                <ul>
                    <li><a href="services.php#hair-treatments">Hair Treatments</a></li>
                    <li><a href="services.php#hair-color">Hair Color</a></li>
                    <li><a href="services.php#aesthetics">Aesthetics</a></li>
                    <li><a href="services.php#massage">Massage Therapy</a></li>
                    <li><a href="services.php#nails">Nail Extensions</a></li>
                    <li><a href="services.php#bridal">Bridal Packages</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h4>Contact Info</h4>
                <ul>
                    <li><a href="tel:+919876543210"><i class="fas fa-phone"></i> +91 98765 43210</a></li>
                    <li><a href="mailto:info@guzalic.com"><i class="fas fa-envelope"></i> info@guzalic.com</a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt"></i> 123 Luxury Lane, Delhi</a></li>
                    <li><a href="#"><i class="fas fa-clock"></i> Mon-Sun: 10AM - 9PM</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 GUZALIC Luxurious Salon. All Rights Reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cancellation Policy</a>
            </div>
        </div>
    </footer>

    <!-- Floating Buttons -->
    <div class="floating-buttons">
        <a href="https://wa.me/919876543210" class="floating-btn whatsapp-btn" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="tel:+919876543210" class="floating-btn call-btn">
            <i class="fas fa-phone-alt"></i>
        </a>
    </div>

    <!-- Back to Top -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
