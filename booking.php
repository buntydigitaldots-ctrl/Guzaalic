<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Book your appointment at GUZALIC Luxurious Salon - Online booking for all services">
    <title>Book Appointment | GUZALIC Luxurious Salon</title>
    
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
                    <a href="services.php#hair-color" class="dropdown-item"><i class="fas fa-palette"></i> Hair Color</a>
                    <a href="services.php#hair-spa" class="dropdown-item"><i class="fas fa-spa"></i> Hair Spa</a>
                    <a href="services.php#aesthetics" class="dropdown-item"><i class="fas fa-magic"></i> Aesthetics</a>
                    <a href="services.php#massage" class="dropdown-item"><i class="fas fa-hand-holding-heart"></i> Massage</a>
                    <a href="services.php#nails" class="dropdown-item"><i class="fas fa-hand-sparkles"></i> Nail Extensions</a>
                </div>
            </li>
            <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="booking.php" class="nav-link active">Booking</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
        <div class="nav-toggle" id="navToggle"><span></span><span></span><span></span></div>
    </nav>

    <section class="page-hero" style="height: 50vh; min-height: 300px;">
        <div class="page-hero-bg"><img src="images/salon_reception_interior_image.png" alt="Book Appointment"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content" data-aos="fade-up">
            <span class="section-subtitle">Reserve Your Spot</span>
            <h1>Book Appointment</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a><span>/</span><span>Booking</span>
            </div>
        </div>
    </section>

    <section class="section section-dark" id="booking">
        <div class="booking-container">
            <div class="booking-info" data-aos="fade-right">
                <h2>Book Your <span class="text-gold">Luxury Experience</span></h2>
                <p>Fill out the form to schedule your appointment. Our team will confirm your booking within 2 hours.</p>
                
                <div class="booking-features">
                    <div class="booking-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Instant Confirmation</span>
                    </div>
                    <div class="booking-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Free Cancellation (24hrs before)</span>
                    </div>
                    <div class="booking-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>No Advance Payment Required</span>
                    </div>
                </div>
                
                <div class="contact-quick">
                    <h4>Quick Contact</h4>
                    <p><i class="fas fa-phone"></i> +91 98765 43210</p>
                    <p><i class="fab fa-whatsapp"></i> WhatsApp Available</p>
                    <p><i class="fas fa-clock"></i> Mon-Sun: 10AM - 9PM</p>
                </div>
            </div>
            
            <div class="booking-form-wrapper" data-aos="fade-left">
                <form id="bookingForm" action="includes/booking.php" method="POST" class="booking-form">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required placeholder="Your full name">
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="your@email.com">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required placeholder="+91 98765 43210">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="serviceCategory">Service Category *</label>
                            <select id="serviceCategory" name="service_category" required>
                                <option value="">Select Category</option>
                                <option value="hair-treatments">Hair Treatments</option>
                                <option value="hair-color">Hair Color</option>
                                <option value="hair-spa">Hair Spa</option>
                                <option value="aesthetics">Aesthetics & Facials</option>
                                <option value="massage">Massage Therapy</option>
                                <option value="nails">Nail Extensions</option>
                                <option value="bridal">Bridal Packages</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="serviceSelect">Specific Service *</label>
                            <select id="serviceSelect" name="service" required>
                                <option value="">Select Service</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="date">Preferred Date *</label>
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="time">Preferred Time *</label>
                            <select id="time" name="time" required>
                                <option value="">Select Time</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="13:00">01:00 PM</option>
                                <option value="14:00">02:00 PM</option>
                                <option value="15:00">03:00 PM</option>
                                <option value="16:00">04:00 PM</option>
                                <option value="17:00">05:00 PM</option>
                                <option value="18:00">06:00 PM</option>
                                <option value="19:00">07:00 PM</option>
                                <option value="20:00">08:00 PM</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="notes">Special Requests (Optional)</label>
                        <textarea id="notes" name="notes" rows="4" placeholder="Any special requirements or requests..."></textarea>
                    </div>
                    
                    <button type="submit" class="hero-btn hero-btn-primary booking-submit">
                        <i class="fas fa-calendar-check"></i> Book Appointment
                    </button>
                </form>
                
                <div id="bookingSuccess" style="display:none; text-align: center; padding: 40px 20px; background: rgba(212, 175, 55, 0.1); border-radius: 15px; border: 1px solid rgba(212, 175, 55, 0.3);">
                    <i class="fas fa-check-circle" style="font-size: 3rem; color: #d4af37; margin-bottom: 15px;"></i>
                    <h3 style="color: #ffffff; font-size: 1.8rem; margin-bottom: 10px;">Booking Confirmed!</h3>
                    <p style="color: #c0c0c0; margin-bottom: 10px;">Your appointment has been successfully booked.</p>
                    <p style="color: #808080; font-size: 0.9rem; margin-bottom: 20px;" id="bookingId"></p>
                    <p style="color: #c0c0c0; margin-bottom: 20px;">We will send you confirmation details on your email and WhatsApp shortly.</p>
                    <a href="index.php" class="hero-btn hero-btn-primary" style="display: inline-block;">
                        <i class="fas fa-home"></i> Back to Home
                    </a>
                </div>
            </div>
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
