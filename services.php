<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GUZALIC Luxurious Salon Services - Hair Treatments, Hair Color, Hair Spa, Aesthetics, Massage Therapy, Nail Extensions, Bridal Packages">
    <title>Services | GUZALIC Luxurious Salon</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/services.css">
    
    <link rel="icon" type="image/png" href="images/guzalic-logo.png">
</head>
<body>
    <!-- Loading Screen -->
    <div class="loader-wrapper" id="loader">
        <div class="loader-content">
            <div class="loader-logo">
                <img src="images/guzalic-logo.png" alt="GUZALIC Logo">
            </div>
            
            <div class="loader-bar">
                <div class="loader-progress"></div>
            </div>
        </div>
    </div>

    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>
    <div class="cursor-dot"></div>

    <!-- Navigation -->
    <nav class="navbar scrolled" id="navbar">
        <a href="index.php" class="nav-logo">
            <img src="images/guzalic-logo.png" alt="GUZALIC Logo">
          
        </a>
        
        <ul class="nav-menu" id="navMenu">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
            <li class="nav-item nav-dropdown">
                <span class="nav-link dropdown-toggle active">Services <i class="fas fa-chevron-down"></i></span>
                <div class="dropdown-menu">
                    <a href="#hair-treatments" class="dropdown-item"><i class="fas fa-cut"></i> Hair Treatments</a>
                    <a href="#hair-color" class="dropdown-item"><i class="fas fa-palette"></i> Hair Color</a>
                    <a href="#hair-spa" class="dropdown-item"><i class="fas fa-spa"></i> Hair Spa</a>
                    <a href="#aesthetics" class="dropdown-item"><i class="fas fa-magic"></i> Aesthetics</a>
                    <a href="#massage" class="dropdown-item"><i class="fas fa-hand-holding-heart"></i> Massage Therapy</a>
                    <a href="#nails" class="dropdown-item"><i class="fas fa-hand-sparkles"></i> Nail Extensions</a>
                </div>
            </li>
            <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="booking.php" class="nav-link">Booking</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="booking.php" class="nav-book-btn">Book Now</a></li>
        </ul>
        
        <div class="nav-toggle" id="navToggle">
            <span></span><span></span><span></span>
        </div>
    </nav>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="images/luxury_spa_wellness_center.png" alt="Our Services">
        </div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content" data-aos="fade-up">
            <span class="section-subtitle">Explore Our Offerings</span>
            <h1>Our Luxury Services</h1>
            <p>Comprehensive Beauty & Wellness Solutions</p>
            <div class="breadcrumb">
                <a href="index.php">Home</a><span>/</span><span>Services</span>
            </div>
        </div>
    </section>

    <!-- Hair Treatments Section -->
    <section class="section section-dark" id="hair-treatments">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Transform Your Hair</span>
            <h2 class="section-title">Hair Treatments</h2>
            <p class="section-description">Our professional hair treatments repair, strengthen, and transform damaged hair using world-class products and techniques.</p>
        </div>
        
        <div class="service-detail-container">
            <div class="service-detail-image" data-aos="fade-right">
                <img src="images/hair_treatment_service_image.png" alt="Hair Treatments">
            </div>
            <div class="service-detail-content" data-aos="fade-left">
                <p class="service-intro">At GUZALIC, we understand that healthy, beautiful hair is the foundation of great style. Our comprehensive range of hair treatments addresses every concern – from damage repair to deep conditioning, from frizz control to shine enhancement. Using premium products from brands like Olaplex, Schwarzkopf, and GK Hair, our expert stylists create customized treatment plans that deliver visible, long-lasting results. Each treatment begins with a thorough consultation to understand your hair type, condition, and goals.</p>
                
                <div class="service-treatments-grid">
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-flask"></i></div>
                        <h4>Olaplex Treatment</h4>
                        <p>Revolutionary bond-building treatment that repairs damaged hair at the molecular level. Restores strength, elasticity, and shine.</p>
                        <span class="treatment-price">₹5,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-magic"></i></div>
                        <h4>Keratin Treatment</h4>
                        <p>Smoothing treatment that eliminates frizz and adds incredible shine. Results last 3-5 months.</p>
                        <span class="treatment-price">₹3,500 onwards</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-wind"></i></div>
                        <h4>Smoothing Treatment</h4>
                        <p>Gentle smoothing formula that relaxes curls and waves for manageable, sleek hair.</p>
                        <span class="treatment-price">₹3,000 onwards</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-atom"></i></div>
                        <h4>KeraBond Treatment</h4>
                        <p>Advanced bond technology combined with keratin for ultimate repair and smoothing.</p>
                        <span class="treatment-price">₹5,000 onwards</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-leaf"></i></div>
                        <h4>Flower Potion Therapy</h4>
                        <p>100% organic treatment using natural flower extracts for deep nourishment.</p>
                        <span class="treatment-price">₹5,000 / ₹500 per ML</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-star"></i></div>
                        <h4>Hair Botox</h4>
                        <p>Intensive deep conditioning treatment that fills in gaps in hair fibers.</p>
                        <span class="treatment-price">₹10,000 onwards</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-gem"></i></div>
                        <h4>Nanoplastia</h4>
                        <p>Latest innovation in hair straightening using nanotechnology for natural results.</p>
                        <span class="treatment-price">₹10,000 onwards</span>
                    </div>
                </div>
                
                <a href="booking.php" class="hero-btn hero-btn-primary mt-4">Book Hair Treatment</a>
            </div>
        </div>
    </section>

    <!-- Hair Color Section -->
    <section class="section section-darker" id="hair-color">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Express Your Style</span>
            <h2 class="section-title">Hair Color</h2>
            <p class="section-description">From subtle highlights to bold transformations, our color experts create stunning looks that enhance your natural beauty.</p>
        </div>
        
        <div class="service-detail-container reverse">
            <div class="service-detail-image" data-aos="fade-left">
                <img src="images/hair_color_balayage_image.png" alt="Hair Color">
            </div>
            <div class="service-detail-content" data-aos="fade-right">
                <p class="service-intro">Color is the ultimate form of self-expression, and at GUZALIC, we treat it as an art form. Our internationally trained colorists bring expertise from the world's leading hair academies, mastering techniques from classic single-process color to modern balayage and ombre. We use only professional-grade products that deliver vibrant, long-lasting color while protecting hair health. Every color service includes a detailed consultation, customized formula, and expert application.</p>
                
                <div class="service-treatments-grid">
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-palette"></i></div>
                        <h4>Global Color - Short</h4>
                        <p>Full head color application for short hair using premium color formulas.</p>
                        <span class="treatment-price">₹8,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-palette"></i></div>
                        <h4>Global Color - Medium</h4>
                        <p>Complete color transformation for medium length hair.</p>
                        <span class="treatment-price">₹10,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-palette"></i></div>
                        <h4>Global Color - Long</h4>
                        <p>Full coverage color for long hair with conditioning treatment.</p>
                        <span class="treatment-price">₹12,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-sun"></i></div>
                        <h4>Balayage</h4>
                        <p>Hand-painted highlights for natural, sun-kissed dimension.</p>
                        <span class="treatment-price">₹10,000 onwards</span>
                    </div>
                </div>
                
                <a href="booking.php" class="hero-btn hero-btn-primary mt-4">Book Hair Color</a>
            </div>
        </div>
    </section>

    <!-- Hair Spa Section -->
    <section class="section section-dark" id="hair-spa">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Deep Nourishment</span>
            <h2 class="section-title">Hair Spa</h2>
            <p class="section-description">Indulge in luxurious hair spa experiences that nourish, repair, and revitalize your hair from root to tip.</p>
        </div>
        
        <div class="service-detail-container">
            <div class="service-detail-image" data-aos="fade-right">
                <img src="images/hair_spa_treatment_image.png" alt="Hair Spa">
            </div>
            <div class="service-detail-content" data-aos="fade-left">
                <p class="service-intro">A hair spa is more than just a treatment – it's a sensory journey that combines therapeutic massage with deep conditioning. Our hair spa rituals are designed to address specific concerns like dryness, damage, hair fall, and scalp issues. Each session includes steam therapy to open cuticles, specialized masks for intensive repair, and relaxing head massage to improve blood circulation. Choose from our range of spa experiences, from our Basic Hair Spa to our signature Korean Hair Spa.</p>
                
                <div class="service-treatments-grid">
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-spa"></i></div>
                        <h4>Basic Hair Spa</h4>
                        <p>45-minute treatment including shampoo, conditioning mask, and head massage.</p>
                        <span class="treatment-price">₹1,800</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-spa"></i></div>
                        <h4>Semi Advance Hair Spa</h4>
                        <p>60-minute enhanced spa with steam and specialized hair mask.</p>
                        <span class="treatment-price">₹3,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-spa"></i></div>
                        <h4>Advance Hair Spa</h4>
                        <p>60-minute premium treatment with deep repair formula.</p>
                        <span class="treatment-price">₹4,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-crown"></i></div>
                        <h4>Korean Hair Spa</h4>
                        <p>Signature K-beauty inspired treatment using Korean products.</p>
                        <span class="treatment-price">₹5,000</span>
                    </div>
                </div>
                
                <a href="booking.php" class="hero-btn hero-btn-primary mt-4">Book Hair Spa</a>
            </div>
        </div>
    </section>

    <!-- Aesthetics Section -->
    <section class="section section-darker" id="aesthetics">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Advanced Skincare</span>
            <h2 class="section-title">Aesthetics & Facials</h2>
            <p class="section-description">Experience cutting-edge skincare treatments that deliver visible results using medical-grade technology and products.</p>
        </div>
        
        <div class="service-detail-container reverse">
            <div class="service-detail-image" data-aos="fade-left">
                <img src="images/aesthetics_facial_treatment_image.png" alt="Aesthetics">
            </div>
            <div class="service-detail-content" data-aos="fade-right">
                <p class="service-intro">Our aesthetics clinic brings together advanced technology and expert care to address your skin concerns. From hydrating facials to laser treatments, our certified dermatologists and aestheticians create customized treatment plans. We use USFDA-approved equipment and premium skincare lines to ensure safety and efficacy. All treatments begin with a comprehensive skin analysis.</p>
                
                <div class="service-treatments-grid">
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-tint"></i></div>
                        <h4>Hydrafacial</h4>
                        <p>Multi-step treatment that cleanses, exfoliates, and hydrates.</p>
                        <span class="treatment-price">Consultation</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-wind"></i></div>
                        <h4>Oxygeneo</h4>
                        <p>3-in-1 super facial that exfoliates, infuses, and oxygenates.</p>
                        <span class="treatment-price">Consultation</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-fire"></i></div>
                        <h4>Fire & Ice Facial</h4>
                        <p>Hollywood-favorite treatment combining warming and cooling therapies.</p>
                        <span class="treatment-price">Consultation</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-flask"></i></div>
                        <h4>Chemical Peels</h4>
                        <p>Controlled exfoliation for smoother, brighter skin.</p>
                        <span class="treatment-price">Consultation</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-bolt"></i></div>
                        <h4>Laser Hair Removal</h4>
                        <p>USFDA approved Diode Soprano Ice technology for permanent reduction.</p>
                        <span class="treatment-price">Consultation</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-eraser"></i></div>
                        <h4>Tattoo Removal</h4>
                        <p>Advanced laser treatment for safe tattoo removal.</p>
                        <span class="treatment-price">Consultation</span>
                    </div>
                </div>
                
                <a href="booking.php" class="hero-btn hero-btn-primary mt-4">Book Consultation</a>
            </div>
        </div>
    </section>

    <!-- Massage Section -->
    <section class="section section-dark" id="massage">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Relax & Rejuvenate</span>
            <h2 class="section-title">Massage Therapy</h2>
            <p class="section-description">Escape the stress of daily life with our range of therapeutic massage treatments performed by certified therapists.</p>
        </div>
        
        <div class="service-detail-container">
            <div class="service-detail-image" data-aos="fade-right">
                <img src="images/massage_therapy_service_image.png" alt="Massage Therapy">
            </div>
            <div class="service-detail-content" data-aos="fade-left">
                <p class="service-intro">Our spa offers a sanctuary of relaxation where ancient healing traditions meet modern wellness practices. Each massage is tailored to your specific needs, whether you seek relief from muscle tension, stress reduction, or simply a moment of tranquility. Our therapists are trained in multiple modalities including Ayurvedic, Thai, Swedish, and contemporary techniques.</p>
                
                <div class="service-treatments-grid">
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-shoe-prints"></i></div>
                        <h4>Foot Reflexology</h4>
                        <p>30-minute focused treatment targeting pressure points in feet.</p>
                        <span class="treatment-price">₹1,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-hand-holding-heart"></i></div>
                        <h4>Potli Massage</h4>
                        <p>Ayurvedic massage using heated herbal pouches.</p>
                        <span class="treatment-price">₹3,000 (60min) / ₹5,000 (90min)</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-hands"></i></div>
                        <h4>Deep Tissue Massage</h4>
                        <p>Intensive therapy targeting deep muscle layers.</p>
                        <span class="treatment-price">₹3,000 (60min) / ₹4,000 (90min)</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-leaf"></i></div>
                        <h4>Aromatherapy Massage</h4>
                        <p>Relaxing massage with essential oils.</p>
                        <span class="treatment-price">₹3,000 (60min) / ₹4,000 (90min)</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-yin-yang"></i></div>
                        <h4>Thai Massage</h4>
                        <p>Traditional Thai stretching and pressure techniques.</p>
                        <span class="treatment-price">₹3,000 (60min) / ₹4,000 (90min)</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-circle"></i></div>
                        <h4>Stone Massage</h4>
                        <p>Hot basalt stones for deep relaxation.</p>
                        <span class="treatment-price">₹4,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-tint"></i></div>
                        <h4>Shirodhara</h4>
                        <p>Ayurvedic treatment with warm oil stream on forehead.</p>
                        <span class="treatment-price">₹4,500</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-seedling"></i></div>
                        <h4>Mud Massage</h4>
                        <p>Detoxifying treatment using therapeutic mud.</p>
                        <span class="treatment-price">₹6,000</span>
                    </div>
                </div>
                
                <a href="booking.php" class="hero-btn hero-btn-primary mt-4">Book Massage</a>
            </div>
        </div>
    </section>

    <!-- Nails Section -->
    <section class="section section-darker" id="nails">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Perfect Your Look</span>
            <h2 class="section-title">Nail Extensions</h2>
            <p class="section-description">Express your style with stunning nail art and extensions crafted by our talented nail technicians.</p>
        </div>
        
        <div class="service-detail-container reverse">
            <div class="service-detail-image" data-aos="fade-left">
                <img src="images/nail_extension_service_image.png" alt="Nail Extensions">
            </div>
            <div class="service-detail-content" data-aos="fade-right">
                <p class="service-intro">Our luxury nail bar offers a complete range of nail services from classic manicures to elaborate nail art and extensions. Using premium products from OPI and other top brands, we ensure beautiful, long-lasting results. Our nail technicians are trained in the latest techniques including gel, acrylic, and innovative 3D nail art designs.</p>
                
                <div class="service-treatments-grid">
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-hand-sparkles"></i></div>
                        <h4>Acrylic Extension</h4>
                        <p>Durable acrylic extensions with color or French tips.</p>
                        <span class="treatment-price">₹4,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-hand-sparkles"></i></div>
                        <h4>Gel Extension (Color/French)</h4>
                        <p>Flexible gel extensions with color or French design.</p>
                        <span class="treatment-price">₹4,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-hand-sparkles"></i></div>
                        <h4>Gel Extension</h4>
                        <p>Natural-looking gel nail extensions.</p>
                        <span class="treatment-price">₹3,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-sync"></i></div>
                        <h4>Gel/Acrylic Refilling</h4>
                        <p>Maintenance refill for existing extensions.</p>
                        <span class="treatment-price">₹1,500</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-layer-group"></i></div>
                        <h4>Overlay</h4>
                        <p>Protective overlay on natural nails.</p>
                        <span class="treatment-price">₹2,000</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-paint-brush"></i></div>
                        <h4>Nail Art</h4>
                        <p>Creative designs and embellishments.</p>
                        <span class="treatment-price">₹500 onwards</span>
                    </div>
                    <div class="treatment-card">
                        <div class="treatment-icon"><i class="fas fa-gem"></i></div>
                        <h4>Power Polish</h4>
                        <p>Long-lasting dip powder manicure.</p>
                        <span class="treatment-price">₹999</span>
                    </div>
                </div>
                
                <a href="booking.php" class="hero-btn hero-btn-primary mt-4">Book Nail Service</a>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter-section" id="newsletter">
        <div class="newsletter-content" data-aos="zoom-in">
            <h2>Get Exclusive Beauty Tips & Offers</h2>
            <p>Subscribe to our newsletter and be the first to know about special promotions.</p>
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
                <p>GUZALIC Luxurious Salon is your premier destination for beauty, wellness, and relaxation.</p>
                <div class="footer-social">
                    <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://wa.me/919876543210" target="_blank"><i class="fab fa-whatsapp"></i></a>
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
                    <li><a href="#hair-treatments">Hair Treatments</a></li>
                    <li><a href="#hair-color">Hair Color</a></li>
                    <li><a href="#aesthetics">Aesthetics</a></li>
                    <li><a href="#massage">Massage Therapy</a></li>
                    <li><a href="#nails">Nail Extensions</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Contact Info</h4>
                <ul>
                    <li><a href="tel:+919876543210"><i class="fas fa-phone"></i> +91 98765 43210</a></li>
                    <li><a href="mailto:info@guzalic.com"><i class="fas fa-envelope"></i> info@guzalic.com</a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt"></i> 123 Luxury Lane, Delhi</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 GUZALIC Luxurious Salon. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Floating Buttons -->
    <div class="floating-buttons">
        <a href="https://wa.me/919876543210" class="floating-btn whatsapp-btn" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <a href="tel:+919876543210" class="floating-btn call-btn"><i class="fas fa-phone-alt"></i></a>
    </div>

    <div class="back-to-top" id="backToTop"><i class="fas fa-chevron-up"></i></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
