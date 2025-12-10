<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact GUZALIC Luxurious Salon - Get in touch with us for appointments and inquiries">
    <title>Contact Us | GUZALIC Luxurious Salon</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/booking.css">
    
    <link rel="icon" type="image/png" href="images/guzalic-logo.png">
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
            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="booking.php" class="nav-link">Booking</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link active">Contact</a></li>
            <li class="nav-item"><a href="booking.php" class="nav-book-btn">Book Now</a></li>
        </ul>
        <div class="nav-toggle" id="navToggle"><span></span><span></span><span></span></div>
    </nav>

    <section class="page-hero" style="height: 50vh; min-height: 300px;">
        <div class="page-hero-bg"><img src="images/luxury_salon_hero_background.png" alt="Contact Us"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content" data-aos="fade-up">
            <span class="section-subtitle">Get In Touch</span>
            <h1>Contact Us</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a><span>/</span><span>Contact</span>
            </div>
        </div>
    </section>

    <section class="section section-dark" id="contact">
        <div class="booking-container">
            <div class="booking-info" data-aos="fade-right">
                <h2>Let's <span class="text-gold">Connect</span></h2>
                <p>Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                
                <div class="contact-cards">
                    <div class="contact-card">
                        <div class="contact-card-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Visit Us</h4>
                            <p>123 Luxury Lane, Beauty District<br>New Delhi, 110001</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <h4>Call Us</h4>
                            <p>+91 98765 43210<br>+91 98765 43211</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4>Email Us</h4>
                            <p>admin@guzalic.com<br>bookings@guzalic.com</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h4>Working Hours</h4>
                            <p>Monday - Sunday<br>10:00 AM - 9:00 PM</p>
                        </div>
                    </div>
                </div>
                
                <div class="social-links" style="margin-top: 30px;">
                    <h4 style="color: var(--white); margin-bottom: 15px;">Follow Us</h4>
                    <div class="footer-social">
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://wa.me/919876543210" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="booking-form-wrapper" data-aos="fade-left">
                <form id="contactForm" action="includes/contact-handler.php" method="POST" class="booking-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required placeholder="Your full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="your@email.com">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" required placeholder="How can we help?">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Your message..."></textarea>
                    </div>
                    
                    <button type="submit" class="hero-btn hero-btn-primary booking-submit">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
                
                <div id="contactSuccess" style="display:none; text-align: center; padding: 40px 20px; background: rgba(212, 175, 55, 0.1); border-radius: 15px; border: 1px solid rgba(212, 175, 55, 0.3);">
                    <i class="fas fa-check-circle" style="font-size: 3rem; color: #d4af37; margin-bottom: 15px;"></i>
                    <h3 style="color: #ffffff; font-size: 1.8rem; margin-bottom: 10px;">Message Sent Successfully!</h3>
                    <p style="color: #c0c0c0; margin-bottom: 10px;">Thank you for reaching out to us.</p>
                    <p style="color: #c0c0c0; margin-bottom: 20px;">Our team will get back to you within 2 hours.</p>
                    <a href="index.php" class="hero-btn hero-btn-primary" style="display: inline-block;">
                        <i class="fas fa-home"></i> Back to Home
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-darker" id="map">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Our Location</span>
            <h2 class="section-title">Find Us Here</h2>
        </div>
        <div class="map-container" data-aos="zoom-in">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.6743057439396!2d77.20658791508096!3d28.64280908241445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd37b741d057%3A0xcdee88e47393c3f1!2sConnaught%20Place%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1635000000000!5m2!1sen!2sin" width="100%" height="500" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <footer class="footer" id="footer">
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
                    <li><a href="pricing.php">Pricing</a></li>
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
    
    <style>
        .contact-cards { margin-top: 30px; }
        .contact-card {
            display: flex;
            gap: 20px;
            padding: 20px;
            background: var(--secondary-black);
            border-radius: 15px;
            margin-bottom: 15px;
            border: 1px solid rgba(212, 175, 55, 0.1);
            transition: var(--transition-smooth);
        }
        .contact-card:hover {
            border-color: var(--gold-accent);
            transform: translateX(10px);
        }
        .contact-card-icon {
            width: 50px;
            height: 50px;
            background: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold-accent);
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        .contact-card h4 {
            color: var(--white);
            margin-bottom: 5px;
            font-size: 1rem;
        }
        .contact-card p {
            color: var(--dark-silver);
            font-size: 0.9rem;
            line-height: 1.5;
            margin: 0;
        }
        .map-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }
    </style>
</body>
</html>
