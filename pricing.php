<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GUZALIC Luxurious Salon Price List - Complete pricing for all services">
    <title>Pricing | GUZALIC Luxurious Salon</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    
    <link rel="icon" type="image/png" href="images/guzalic-logo.png">
    
    <style>
        .pricing-section { max-width: 1400px; margin: 0 auto; padding: 0 5%; }
        .pricing-category { margin-bottom: 80px; }
        .pricing-category-header { display: flex; align-items: center; gap: 20px; margin-bottom: 30px; }
        .pricing-category-icon {
            width: 70px; height: 70px;
            background: var(--gradient-gold);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.8rem; color: var(--primary-black);
        }
        .pricing-category-header h3 { color: var(--white); font-size: 2rem; }
        .pricing-table {
            background: var(--secondary-black);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(212, 175, 55, 0.2);
        }
        .pricing-row {
            display: flex; justify-content: space-between; align-items: center;
            padding: 20px 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: var(--transition-smooth);
        }
        .pricing-row:last-child { border-bottom: none; }
        .pricing-row:hover {
            background: rgba(212, 175, 55, 0.05);
            padding-left: 40px;
        }
        .pricing-service h4 { color: var(--white); font-size: 1.1rem; margin-bottom: 5px; }
        .pricing-service p { color: var(--dark-silver); font-size: 0.9rem; }
        .pricing-amount {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem; font-weight: 600;
            color: var(--gold-accent);
        }
        .pricing-note {
            text-align: center; padding: 50px; background: var(--tertiary-black);
            border-radius: 20px; margin-top: 50px;
        }
        .pricing-note p { color: var(--dark-silver); margin-bottom: 20px; }
        
        @media (max-width: 768px) {
            .pricing-row { flex-direction: column; align-items: flex-start; gap: 10px; }
            .pricing-category-header h3 { font-size: 1.5rem; }
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
                    <a href="services.php#hair-spa" class="dropdown-item"><i class="fas fa-spa"></i> Hair Spa</a>
                    <a href="services.php#massage" class="dropdown-item"><i class="fas fa-hand-holding-heart"></i> Massage</a>
                    <a href="services.php#nails" class="dropdown-item"><i class="fas fa-hand-sparkles"></i> Nail Extensions</a>
                </div>
            </li>
            <li class="nav-item"><a href="pricing.php" class="nav-link active">Pricing</a></li>
            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="booking.php" class="nav-link">Booking</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="booking.php" class="nav-book-btn">Book Now</a></li>
        </ul>
        <div class="nav-toggle" id="navToggle"><span></span><span></span><span></span></div>
    </nav>

    <section class="page-hero" style="height: 50vh; min-height: 300px;">
        <div class="page-hero-bg"><img src="images/luxury_spa_wellness_center.png" alt="Pricing"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content" data-aos="fade-up">
            <span class="section-subtitle">Transparent Pricing</span>
            <h1>Our Price List</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a><span>/</span><span>Pricing</span>
            </div>
        </div>
    </section>

    <section class="section section-dark">
        <div class="pricing-section">
            
            <!-- Hair Treatments -->
            <div class="pricing-category" data-aos="fade-up">
                <div class="pricing-category-header">
                    <div class="pricing-category-icon"><i class="fas fa-cut"></i></div>
                    <h3>Hair Treatments</h3>
                </div>
                <div class="pricing-table">
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Olaplex Treatment</h4><p>Bond-building hair repair</p></div>
                        <div class="pricing-amount">₹5,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Keratin Treatment</h4><p>Smoothing & frizz control</p></div>
                        <div class="pricing-amount">₹3,500 onwards</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Smoothing Treatment</h4><p>Gentle hair straightening</p></div>
                        <div class="pricing-amount">₹3,000 onwards</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>KeraBond Treatment</h4><p>Advanced keratin + bond repair</p></div>
                        <div class="pricing-amount">₹5,000 onwards</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Flower Potion Therapy (Organic)</h4><p>100% organic treatment</p></div>
                        <div class="pricing-amount">₹5,000 / ₹500 per ML</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Hair Botox</h4><p>Deep conditioning treatment</p></div>
                        <div class="pricing-amount">₹10,000 onwards</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Nanoplastia</h4><p>Latest smoothing technology</p></div>
                        <div class="pricing-amount">₹10,000 onwards</div>
                    </div>
                </div>
            </div>
            
            <!-- Hair Color -->
            <div class="pricing-category" data-aos="fade-up">
                <div class="pricing-category-header">
                    <div class="pricing-category-icon"><i class="fas fa-palette"></i></div>
                    <h3>Hair Color</h3>
                </div>
                <div class="pricing-table">
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Global Color - Short Hair</h4><p>Full head color application</p></div>
                        <div class="pricing-amount">₹8,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Global Color - Medium Hair</h4><p>Full head color application</p></div>
                        <div class="pricing-amount">₹10,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Global Color - Long Hair</h4><p>Full head color application</p></div>
                        <div class="pricing-amount">₹12,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Balayage</h4><p>Hand-painted highlights</p></div>
                        <div class="pricing-amount">₹10,000 onwards</div>
                    </div>
                </div>
            </div>
            
            <!-- Hair Spa -->
            <div class="pricing-category" data-aos="fade-up">
                <div class="pricing-category-header">
                    <div class="pricing-category-icon"><i class="fas fa-spa"></i></div>
                    <h3>Hair Spa</h3>
                </div>
                <div class="pricing-table">
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Basic Hair Spa</h4><p>45 minutes</p></div>
                        <div class="pricing-amount">₹1,800</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Semi Advance Hair Spa</h4><p>60 minutes</p></div>
                        <div class="pricing-amount">₹3,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Advance Hair Spa</h4><p>60 minutes</p></div>
                        <div class="pricing-amount">₹4,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Korean Hair Spa</h4><p>Premium K-beauty treatment</p></div>
                        <div class="pricing-amount">₹5,000</div>
                    </div>
                </div>
            </div>
            
            <!-- Massage Therapy -->
            <div class="pricing-category" data-aos="fade-up">
                <div class="pricing-category-header">
                    <div class="pricing-category-icon"><i class="fas fa-hand-holding-heart"></i></div>
                    <h3>Massage Therapy</h3>
                </div>
                <div class="pricing-table">
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Foot Reflexology</h4><p>30 minutes</p></div>
                        <div class="pricing-amount">₹1,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Potli Massage</h4><p>Herbal pouch massage</p></div>
                        <div class="pricing-amount">₹3,000 (60min) / ₹5,000 (90min)</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Deep Tissue Massage</h4><p>Intensive muscle therapy</p></div>
                        <div class="pricing-amount">₹3,000 (60min) / ₹4,000 (90min)</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Aromatherapy Massage</h4><p>Essential oil relaxation</p></div>
                        <div class="pricing-amount">₹3,000 (60min) / ₹4,000 (90min)</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Thai Massage</h4><p>Traditional stretching</p></div>
                        <div class="pricing-amount">₹3,000 (60min) / ₹4,000 (90min)</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Sabai Stone Therapy</h4><p>Hot stone massage</p></div>
                        <div class="pricing-amount">₹3,000 (60min) / ₹4,000 (90min)</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Swedish Massage</h4><p>Classic relaxation massage</p></div>
                        <div class="pricing-amount">₹3,000 (60min) / ₹4,000 (90min)</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Cupping Therapy</h4><p>Traditional detox treatment</p></div>
                        <div class="pricing-amount">₹4,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Shirodhara</h4><p>Ayurvedic oil therapy</p></div>
                        <div class="pricing-amount">₹4,500</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Stone Massage</h4><p>Hot basalt stone therapy</p></div>
                        <div class="pricing-amount">₹4,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Mud Massage</h4><p>Therapeutic mud treatment</p></div>
                        <div class="pricing-amount">₹6,000</div>
                    </div>
                </div>
            </div>
            
            <!-- Nail Extensions -->
            <div class="pricing-category" data-aos="fade-up">
                <div class="pricing-category-header">
                    <div class="pricing-category-icon"><i class="fas fa-hand-sparkles"></i></div>
                    <h3>Nail Extensions</h3>
                </div>
                <div class="pricing-table">
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Acrylic Extension (Color/French)</h4><p>Durable nail extensions</p></div>
                        <div class="pricing-amount">₹4,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Gel Extension (Color/French)</h4><p>Flexible gel extensions</p></div>
                        <div class="pricing-amount">₹4,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Gel Extension</h4><p>Natural-looking extensions</p></div>
                        <div class="pricing-amount">₹3,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Gel/Acrylic Refilling</h4><p>Maintenance refill</p></div>
                        <div class="pricing-amount">₹1,500</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Overlay</h4><p>Protective layer on natural nails</p></div>
                        <div class="pricing-amount">₹2,000</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>One Tip Refill</h4><p>Single nail repair</p></div>
                        <div class="pricing-amount">₹500</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Nail Art</h4><p>Creative designs</p></div>
                        <div class="pricing-amount">₹500 onwards</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Power Polish</h4><p>Dip powder manicure</p></div>
                        <div class="pricing-amount">₹999</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Extension Removal</h4><p>Safe removal service</p></div>
                        <div class="pricing-amount">₹1,500</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Power Polish Removal</h4><p>Dip powder removal</p></div>
                        <div class="pricing-amount">₹500</div>
                    </div>
                    <div class="pricing-row">
                        <div class="pricing-service"><h4>Temporary Nails</h4><p>Press-on application</p></div>
                        <div class="pricing-amount">₹1,500</div>
                    </div>
                </div>
            </div>
            
            <div class="pricing-note" data-aos="fade-up">
                <h3 class="text-gold">Important Information</h3>
                <p>Prices are subject to change. For aesthetic treatments (Medifacials, Lasers, etc.), pricing is determined after consultation based on individual requirements.</p>
                <a href="booking.php" class="hero-btn hero-btn-primary">Book Appointment</a>
            </div>
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
