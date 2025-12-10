<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GUZALIC Luxurious Salon Gallery - View our work and salon interiors">
    <title>Gallery | GUZALIC Luxurious Salon</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    
    <link rel="icon" type="image/png" href="images/guzalic-logo.png">
    
    <style>
        .gallery-filters {
            display: flex; justify-content: center; gap: 15px;
            flex-wrap: wrap; margin-bottom: 50px;
        }
        .filter-btn {
            padding: 12px 30px; background: var(--secondary-black);
            border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 30px;
            color: var(--light-silver); cursor: pointer;
            transition: var(--transition-smooth); font-size: 0.9rem;
        }
        .filter-btn:hover, .filter-btn.active {
            background: var(--gold-accent); color: var(--primary-black);
            border-color: var(--gold-accent);
        }
        .gallery-grid {
            display: grid; grid-template-columns: repeat(4, 1fr);
            gap: 20px; max-width: 1400px; margin: 0 auto; padding: 0 5%;
        }
        .gallery-item {
            position: relative; aspect-ratio: 1; overflow: hidden;
            border-radius: 15px; cursor: pointer;
        }
        .gallery-item.wide { grid-column: span 2; aspect-ratio: 2/1; }
        .gallery-item.tall { grid-row: span 2; }
        .gallery-item img {
            width: 100%; height: 100%; object-fit: cover;
            transition: var(--transition-smooth);
        }
        .gallery-item:hover img { transform: scale(1.1); }
        .gallery-overlay {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(180deg, transparent 0%, rgba(10,10,10,0.9) 100%);
            display: flex; flex-direction: column; justify-content: flex-end;
            padding: 25px; opacity: 0; transition: var(--transition-smooth);
        }
        .gallery-item:hover .gallery-overlay { opacity: 1; }
        .gallery-overlay h4 { color: var(--white); font-size: 1.2rem; margin-bottom: 5px; }
        .gallery-overlay span { color: var(--gold-accent); font-size: 0.9rem; }
        .gallery-zoom {
            position: absolute; top: 20px; right: 20px;
            width: 50px; height: 50px; background: rgba(212, 175, 55, 0.9);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            color: var(--primary-black); font-size: 1.2rem;
            opacity: 0; transform: scale(0.8);
            transition: var(--transition-smooth);
        }
        .gallery-item:hover .gallery-zoom { opacity: 1; transform: scale(1); }
        
        @media (max-width: 992px) { .gallery-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 576px) { 
            .gallery-grid { grid-template-columns: 1fr; }
            .gallery-item.wide { grid-column: span 1; aspect-ratio: 16/9; }
        }
    </style>
</head>
<body>
    <div class="loader-wrapper" id="loader">
        <div class="loader-content">
            <div class="loader-logo"><img src="images/guzalic-logo.png" alt="GUZALIC Logo"></div>
           
            <div class="loader-bar"><div class="loader-progress"></div></div>
        </div>
    </div>

    <div class="custom-cursor"></div>
    <div class="cursor-dot"></div>

    <nav class="navbar scrolled" id="navbar">
        <a href="index.php" class="nav-logo">
            <img src="images/guzalic-logo.png" alt="GUZALIC Logo">
          
        </a>
        <ul class="nav-menu" id="navMenu">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
            <li class="nav-item nav-dropdown">
                <span class="nav-link dropdown-toggle">Services <i class="fas fa-chevron-down"></i></span>
                <div class="dropdown-menu">
                    <a href="services.php#hair-treatments" class="dropdown-item"><i class="fas fa-cut"></i> Hair Treatments</a>
                    <a href="services.php#massage" class="dropdown-item"><i class="fas fa-hand-holding-heart"></i> Massage</a>
                    <a href="services.php#nails" class="dropdown-item"><i class="fas fa-hand-sparkles"></i> Nail Extensions</a>
                </div>
            </li>
            <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="gallery.php" class="nav-link active">Gallery</a></li>
            <li class="nav-item"><a href="booking.php" class="nav-link">Booking</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="booking.php" class="nav-book-btn">Book Now</a></li>
        </ul>
        <div class="nav-toggle" id="navToggle"><span></span><span></span><span></span></div>
    </nav>

    <section class="page-hero" style="height: 50vh; min-height: 300px;">
        <div class="page-hero-bg"><img src="images/salon_styling_stations_interior.png" alt="Gallery"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content" data-aos="fade-up">
            <span class="section-subtitle">Our Work</span>
            <h1>Gallery</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a><span>/</span><span>Gallery</span>
            </div>
        </div>
    </section>

    <section class="section section-dark">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Visual Journey</span>
            <h2 class="section-title">Explore Our Work</h2>
            <p class="section-description">Browse through our portfolio of transformations, treatments, and salon interiors.</p>
        </div>
        
        <div class="gallery-filters" data-aos="fade-up">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="hair">Hair</button>
            <button class="filter-btn" data-filter="spa">Spa & Wellness</button>
            <button class="filter-btn" data-filter="nails">Nails</button>
            <button class="filter-btn" data-filter="aesthetics">Aesthetics</button>
            <button class="filter-btn" data-filter="interior">Salon Interior</button>
        </div>
        
        <div class="gallery-grid">
            <div class="gallery-item hair wide" data-aos="fade-up" data-aos-delay="100">
                <img src="images/hair_treatment_service_image.png" alt="Hair Treatment">
                <div class="gallery-overlay">
                    <h4>Hair Treatment</h4>
                    <span>Keratin Smoothing</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item spa" data-aos="fade-up" data-aos-delay="150">
                <img src="images/massage_therapy_service_image.png" alt="Massage Therapy">
                <div class="gallery-overlay">
                    <h4>Massage Therapy</h4>
                    <span>Relaxation</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item nails" data-aos="fade-up" data-aos-delay="200">
                <img src="images/nail_extension_service_image.png" alt="Nail Art">
                <div class="gallery-overlay">
                    <h4>Nail Art</h4>
                    <span>Gel Extensions</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item hair tall" data-aos="fade-up" data-aos-delay="100">
                <img src="images/hair_color_balayage_image.png" alt="Balayage">
                <div class="gallery-overlay">
                    <h4>Balayage</h4>
                    <span>Color Transformation</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item interior" data-aos="fade-up" data-aos-delay="150">
                <img src="images/salon_reception_interior_image.png" alt="Reception">
                <div class="gallery-overlay">
                    <h4>Reception</h4>
                    <span>Luxury Interior</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item spa" data-aos="fade-up" data-aos-delay="200">
                <img src="images/luxury_spa_wellness_center.png" alt="Spa Center">
                <div class="gallery-overlay">
                    <h4>Spa Center</h4>
                    <span>Wellness Zone</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item aesthetics" data-aos="fade-up" data-aos-delay="100">
                <img src="images/aesthetics_facial_treatment_image.png" alt="Facial Treatment">
                <div class="gallery-overlay">
                    <h4>Facial Treatment</h4>
                    <span>Hydrafacial</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item hair" data-aos="fade-up" data-aos-delay="150">
                <img src="images/hair_spa_treatment_image.png" alt="Hair Spa">
                <div class="gallery-overlay">
                    <h4>Hair Spa</h4>
                    <span>Korean Treatment</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item interior wide" data-aos="fade-up" data-aos-delay="200">
                <img src="images/salon_styling_stations_interior.png" alt="Styling Stations">
                <div class="gallery-overlay">
                    <h4>Styling Stations</h4>
                    <span>Premium Setup</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item spa" data-aos="fade-up" data-aos-delay="100">
                <img src="images/hot_stone_massage_therapy.png" alt="Hot Stone Massage">
                <div class="gallery-overlay">
                    <h4>Hot Stone</h4>
                    <span>Stone Therapy</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item interior" data-aos="fade-up" data-aos-delay="150">
                <img src="images/vip_treatment_room_salon.png" alt="VIP Room">
                <div class="gallery-overlay">
                    <h4>VIP Suite</h4>
                    <span>Private Treatment</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item hair" data-aos="fade-up" data-aos-delay="200">
                <img src="images/olaplex_hair_treatment.png" alt="Olaplex">
                <div class="gallery-overlay">
                    <h4>Olaplex</h4>
                    <span>Bond Repair</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item spa" data-aos="fade-up" data-aos-delay="100">
                <img src="images/shirodhara_ayurvedic_treatment.png" alt="Shirodhara">
                <div class="gallery-overlay">
                    <h4>Shirodhara</h4>
                    <span>Ayurvedic Therapy</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item nails" data-aos="fade-up" data-aos-delay="150">
                <img src="images/nail_salon_interior_setup.png" alt="Nail Bar">
                <div class="gallery-overlay">
                    <h4>Nail Bar</h4>
                    <span>Luxury Setup</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item aesthetics" data-aos="fade-up" data-aos-delay="200">
                <img src="images/hydrafacial_treatment_machine.png" alt="Hydrafacial Machine">
                <div class="gallery-overlay">
                    <h4>Hydrafacial</h4>
                    <span>Advanced Technology</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
            
            <div class="gallery-item spa" data-aos="fade-up" data-aos-delay="100">
                <img src="images/aromatherapy_massage_oils.png" alt="Aromatherapy">
                <div class="gallery-overlay">
                    <h4>Aromatherapy</h4>
                    <span>Essential Oils</span>
                </div>
                <div class="gallery-zoom"><i class="fas fa-expand"></i></div>
            </div>
        </div>
    </section>

    <section class="newsletter-section" id="newsletter">
        <div class="newsletter-content" data-aos="zoom-in">
            <h2>Get Exclusive Beauty Tips & Offers</h2>
            <p>Subscribe to our newsletter for special promotions.</p>
            <form class="newsletter-form" action="includes/newsletter.php" method="POST">
                <input type="email" name="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-brand">
                <img src="images/guzalic-logo.png" alt="GUZALIC Logo">
                <p>GUZALIC Luxurious Salon - Your premier destination for beauty and wellness.</p>
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
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Contact</h4>
                <ul>
                    <li><a href="tel:+919876543210"><i class="fas fa-phone"></i> +91 98765 43210</a></li>
                    <li><a href="mailto:info@guzalic.com"><i class="fas fa-envelope"></i> info@guzalic.com</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 GUZALIC Luxurious Salon. All Rights Reserved.</p>
        </div>
    </footer>

    <div class="floating-buttons">
        <a href="https://wa.me/919876543210" class="floating-btn whatsapp-btn" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <a href="tel:+919876543210" class="floating-btn call-btn"><i class="fas fa-phone-alt"></i></a>
    </div>

    <div class="back-to-top" id="backToTop"><i class="fas fa-chevron-up"></i></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
