<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About GUZALIC Luxurious Salon - Learn about our story, mission, and team of expert beauty professionals.">
    <title>About Us | GUZALIC Luxurious Salon</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
    
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/guzalic-logo.png">
</head>
<body>
    <!-- Loading Screen -->
    <div class="loader-wrapper" id="loader">
        <div class="loader-content">
            <div class="loader-logo">
                <img src="images/guzalic-logo.png" alt="GUZALIC Logo">
            </div>
            <div class="loader-text">GUZALIC</div>
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
            <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link active">About Us</a>
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

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="page-hero-bg">
            <img src="images/luxury_salon_hero_background.png" alt="About GUZALIC">
        </div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content" data-aos="fade-up">
            <span class="section-subtitle">Discover Our Story</span>
            <h1>About GUZALIC</h1>
            <p>Where Luxury Meets Beauty Excellence</p>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>About Us</span>
            </div>
        </div>
    </section>

    <!-- Section 1: Welcome -->
    <section class="section section-dark" id="welcome">
        <div class="container">
            <div class="about-section">
                <div class="about-image" data-aos="fade-right" data-aos-duration="1000">
                    <img src="images/guzalic_storefront.jpg" alt="GUZALIC Salon Welcome">
                    <div class="about-image-badge">
                        <span>Since</span>
                        <strong>2014</strong>
                    </div>
                </div>
                <div class="about-content" data-aos="fade-left" data-aos-duration="1000">
                    <span class="section-subtitle">Welcome to GUZALIC</span>
                    <h2>A Sanctuary of <span class="text-gold">Beauty & Wellness</span></h2>
                    <p>
                        Welcome to GUZALIC Luxurious Salon, where the art of beauty meets the science of wellness. Established in 2014, we have dedicated ourselves to creating an unparalleled experience that transcends the ordinary salon visit. Our name, GUZALIC, embodies our commitment to providing services that are both beautiful and transformative.
                    </p>
                    <p>
                        Located in the heart of the city, our salon is a sanctuary designed to pamper, rejuvenate, and transform. Every element of our space has been carefully curated to create an atmosphere of luxury and tranquility. From the moment you step through our doors, you are enveloped in an experience that engages all your senses and transports you to a world of pure indulgence.
                    </p>
                    <p>
                        At GUZALIC, we believe that true beauty is not just about looking good – it's about feeling confident, empowered, and radiant from within. Our comprehensive range of services, from cutting-edge hair treatments to holistic wellness therapies, is designed to enhance your natural beauty while nurturing your overall well-being.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Our Story -->
    <section class="section section-darker" id="story">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Our Journey</span>
            <h2 class="section-title">The GUZALIC Story</h2>
        </div>
        
        <div class="timeline-container" data-aos="fade-up">
            <div class="timeline">
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-date">2014</div>
                    <div class="timeline-content">
                        <h3>The Beginning</h3>
                        <p>GUZALIC was founded with a simple yet ambitious vision: to create a beauty destination that would redefine luxury in the salon industry. Starting with just three styling stations and a small but passionate team, we set out to prove that excellence and attention to detail could set us apart.</p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-date">2016</div>
                    <div class="timeline-content">
                        <h3>Expansion & Growth</h3>
                        <p>Recognizing the growing demand for holistic beauty services, we expanded our offerings to include spa treatments, wellness therapies, and advanced aesthetic procedures. This marked the beginning of our journey to become a comprehensive beauty and wellness destination.</p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-date">2018</div>
                    <div class="timeline-content">
                        <h3>International Training</h3>
                        <p>We partnered with renowned beauty academies in Paris, London, and Seoul to provide our team with world-class training. This investment in our people ensured that we could offer the latest techniques and trends from global beauty capitals.</p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-date">2020</div>
                    <div class="timeline-content">
                        <h3>Innovation & Technology</h3>
                        <p>We introduced cutting-edge technology including USFDA-approved laser treatments, advanced skincare machines, and digital consultation systems. Our commitment to innovation helped us maintain our position as industry leaders even during challenging times.</p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>Today & Beyond</h3>
                        <p>Today, GUZALIC stands as a beacon of luxury and excellence, having served over 5,000 satisfied clients. We continue to evolve, innovate, and raise the bar for what a premium salon experience should be, while staying true to our founding values of quality, care, and transformation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Vision & Mission -->
    <section class="section section-dark" id="vision-mission">
        <div class="container">
            <div class="vision-mission-grid">
                <div class="vision-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="vision-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>
                        To be the most trusted and celebrated luxury salon in the region, setting new standards for beauty excellence and customer experience. We envision a world where every individual has access to transformative beauty services that enhance not just their appearance, but their confidence and well-being. Our goal is to make luxury accessible while never compromising on quality, creating a legacy of beauty that inspires generations.
                    </p>
                </div>
                
                <div class="mission-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="vision-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>
                        To provide exceptional beauty and wellness services that exceed expectations, delivered by passionate professionals in an environment of uncompromising luxury. We are committed to continuous innovation, sustainable practices, and creating meaningful connections with every client who walks through our doors. Our mission extends beyond services – we aim to educate, inspire, and empower our clients to embrace their unique beauty.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Core Values -->
    <section class="section section-darker" id="values">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">What Drives Us</span>
            <h2 class="section-title">Our Core Values</h2>
        </div>
        
        <div class="values-grid">
            <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                <div class="value-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h4>Excellence</h4>
                <p>We pursue perfection in every service, never settling for anything less than the best for our clients.</p>
            </div>
            
            <div class="value-card" data-aos="fade-up" data-aos-delay="150">
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h4>Passion</h4>
                <p>Beauty is our passion, and we pour our hearts into every treatment, styling, and consultation.</p>
            </div>
            
            <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                <div class="value-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4>Integrity</h4>
                <p>We operate with transparency and honesty, building trust through consistent, ethical practices.</p>
            </div>
            
            <div class="value-card" data-aos="fade-up" data-aos-delay="250">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h4>Innovation</h4>
                <p>We embrace new technologies and techniques, staying at the forefront of beauty industry trends.</p>
            </div>
            
            <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                <div class="value-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h4>Community</h4>
                <p>We foster a sense of belonging, treating every client and team member as part of our family.</p>
            </div>
            
            <div class="value-card" data-aos="fade-up" data-aos-delay="350">
                <div class="value-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h4>Sustainability</h4>
                <p>We are committed to eco-friendly practices and products that are kind to both people and planet.</p>
            </div>
        </div>
    </section>

    <!-- Section 5: Why Choose Us -->
    <section class="section section-dark" id="why-us">
        <div class="container">
            <div class="about-section reverse">
                <div class="about-content" data-aos="fade-right" data-aos-duration="1000">
                    <span class="section-subtitle">The GUZALIC Difference</span>
                    <h2>Why Choose <span class="text-gold">GUZALIC?</span></h2>
                    <p>
                        At GUZALIC, we don't just provide services – we create experiences. Our dedication to excellence, combined with our passion for beauty, sets us apart from ordinary salons. Here's what makes us the preferred choice for discerning clients seeking the best in beauty and wellness.
                    </p>
                    
                    <div class="features-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Internationally Trained Experts</h4>
                                <p>Our team is trained at prestigious academies in Paris, London, and Seoul, bringing global expertise to every service.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Premium Products Only</h4>
                                <p>We exclusively use world-renowned brands like Olaplex, Schwarzkopf, Dermalogica, and more for superior results.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Personalized Consultations</h4>
                                <p>Every treatment begins with a thorough consultation to understand your unique needs and create customized solutions.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>State-of-the-Art Facilities</h4>
                                <p>Our salon features the latest equipment and technology, ensuring safe, effective, and comfortable treatments.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Hygiene & Safety First</h4>
                                <p>We maintain the highest standards of cleanliness with hospital-grade sterilization and single-use tools where applicable.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-image" data-aos="fade-left" data-aos-duration="1000">
                    <img src="images/guzalic_reception.jpg" alt="Why Choose GUZALIC">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Stats -->
    <section class="stats-section section" id="stats">
        <div class="stats-grid">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-icon"><i class="fas fa-calendar-check"></i></div>
                <div class="stat-number" data-count="10">0</div>
                <div class="stat-label">Years of Excellence</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-icon"><i class="fas fa-smile"></i></div>
                <div class="stat-number" data-count="5000">0</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-icon"><i class="fas fa-spa"></i></div>
                <div class="stat-number" data-count="50">0</div>
                <div class="stat-label">Luxury Services</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-icon"><i class="fas fa-award"></i></div>
                <div class="stat-number" data-count="15">0</div>
                <div class="stat-label">Industry Awards</div>
            </div>
        </div>
    </section>

    <!-- Section 7: Our Team -->
    <section class="section section-darker" id="team">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Meet Our Experts</span>
            <h2 class="section-title">Our Talented Team</h2>
            <p class="section-description">
                Behind every transformation is a passionate professional. Our team of internationally trained specialists brings years of experience and a genuine love for what they do.
            </p>
        </div>
        
        <div class="team-grid">
            <div class="team-card" data-aos="fade-up" data-aos-delay="100">
                <div class="team-image">
                    <img src="images/guzalic_team.jpg" alt="Team Member">
                    <div class="team-social">
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="team-info">
                    <h4>Simran Kaur</h4>
                    <span>Creative Director & Master Stylist</span>
                    <p>With 15+ years of experience and training from Paris, Simran leads our creative vision and specializes in editorial styling.</p>
                </div>
            </div>
            
            <div class="team-card" data-aos="fade-up" data-aos-delay="150">
                <div class="team-image">
                    <img src="images/guzalic_consultation_area.jpg" alt="Team Member">
                    <div class="team-social">
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="team-info">
                    <h4>Dr. Priya Sharma</h4>
                    <span>Chief Aesthetician</span>
                    <p>A certified dermatologist specializing in advanced facial treatments, laser therapy, and non-invasive aesthetic procedures.</p>
                </div>
            </div>
            
            <div class="team-card" data-aos="fade-up" data-aos-delay="200">
                <div class="team-image">
                    <img src="images/guzalic_spa_room.jpg" alt="Team Member">
                    <div class="team-social">
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="team-info">
                    <h4>Anita Roy</h4>
                    <span>Senior Colorist</span>
                    <p>Trained in London, Anita is a color expert known for stunning balayage, fashion colors, and color correction.</p>
                </div>
            </div>
            
            <div class="team-card" data-aos="fade-up" data-aos-delay="250">
                <div class="team-image">
                    <img src="images/guzalic_products_display.jpg" alt="Team Member">
                    <div class="team-social">
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="team-info">
                    <h4>Meera Patel</h4>
                    <span>Bridal Makeup Artist</span>
                    <p>With expertise in both traditional and contemporary bridal looks, Meera has styled over 500 brides to perfection.</p>
                </div>
            </div>
            
            <div class="team-card" data-aos="fade-up" data-aos-delay="300">
                <div class="team-image">
                    <img src="images/guzalic_sign_wall.jpg" alt="Team Member">
                    <div class="team-social">
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="team-info">
                    <h4>Raj Kumar</h4>
                    <span>Wellness Therapist</span>
                    <p>Certified in Ayurvedic and Thai massage techniques, Raj brings healing touch and relaxation expertise to our spa.</p>
                </div>
            </div>
            
            <div class="team-card" data-aos="fade-up" data-aos-delay="350">
                <div class="team-image">
                    <img src="images/salon_team_professionals_image.png" alt="Team Member">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="team-info">
                    <h4>Neha Singh</h4>
                    <span>Nail Art Specialist</span>
                    <p>A certified nail technician with artistic flair, Neha creates stunning nail art and flawless extensions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 8: Our Facilities -->
    <section class="section section-dark" id="facilities">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Luxury Awaits</span>
            <h2 class="section-title">Our World-Class Facilities</h2>
            <p class="section-description">
                Step into an environment designed for your comfort and relaxation. Our facilities combine elegance with functionality to ensure your experience is nothing short of extraordinary.
            </p>
        </div>
        
        <div class="facilities-grid">
            <div class="facility-card large" data-aos="fade-up" data-aos-delay="100">
                <img src="images/salon_styling_stations_interior.png" alt="Styling Stations">
                <div class="facility-overlay">
                    <h4>Premium Styling Stations</h4>
                    <p>10 spacious stations with Italian leather chairs and professional lighting</p>
                </div>
            </div>
            
            <div class="facility-card" data-aos="fade-up" data-aos-delay="150">
                <img src="images/luxury_spa_wellness_center.png" alt="Spa Area">
                <div class="facility-overlay">
                    <h4>Spa & Wellness Zone</h4>
                    <p>Private treatment rooms for ultimate relaxation</p>
                </div>
            </div>
            
            <div class="facility-card" data-aos="fade-up" data-aos-delay="200">
                <img src="images/vip_treatment_room_salon.png" alt="VIP Suite">
                <div class="facility-overlay">
                    <h4>VIP Suite</h4>
                    <p>Exclusive private suite for special occasions</p>
                </div>
            </div>
            
            <div class="facility-card" data-aos="fade-up" data-aos-delay="250">
                <img src="images/nail_salon_interior_setup.png" alt="Nail Bar">
                <div class="facility-overlay">
                    <h4>Luxury Nail Bar</h4>
                    <p>State-of-the-art manicure and pedicure stations</p>
                </div>
            </div>
            
            <div class="facility-card" data-aos="fade-up" data-aos-delay="300">
                <img src="images/laser_treatment_clinic_room.png" alt="Aesthetics Clinic">
                <div class="facility-overlay">
                    <h4>Aesthetics Clinic</h4>
                    <p>Medical-grade equipment for advanced treatments</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Products & Brands -->
    <section class="section section-darker" id="brands">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Premium Quality</span>
            <h2 class="section-title">Brands We Trust</h2>
            <p class="section-description">
                We partner exclusively with world-renowned brands known for their exceptional quality, safety, and results. These partnerships ensure that every treatment delivers outstanding outcomes.
            </p>
        </div>
        
        <div class="brands-content" data-aos="fade-up">
            <div class="brands-text">
                <p>
                    At GUZALIC, we believe that the quality of products directly impacts the quality of results. That's why we've carefully curated a selection of the world's most prestigious beauty brands. From Olaplex's revolutionary bond-building technology to Schwarzkopf's professional-grade colors, from Dermalogica's advanced skincare solutions to OPI's iconic nail lacquers – every product we use has been chosen for its proven efficacy and safety.
                </p>
                <p>
                    Our commitment to premium products extends to our organic and natural offerings as well. For clients seeking clean beauty options, we offer treatments using certified organic ingredients that are gentle yet effective. Our Flower Potion Therapy uses 100% organic extracts, providing a luxurious experience without compromising on purity.
                </p>
            </div>
            
            <div class="brand-features">
                <div class="brand-feature">
                    <i class="fas fa-check"></i>
                    <span>Olaplex - Hair Bond Building</span>
                </div>
                <div class="brand-feature">
                    <i class="fas fa-check"></i>
                    <span>Schwarzkopf - Professional Hair Color</span>
                </div>
                <div class="brand-feature">
                    <i class="fas fa-check"></i>
                    <span>Dermalogica - Advanced Skincare</span>
                </div>
                <div class="brand-feature">
                    <i class="fas fa-check"></i>
                    <span>OPI - Premium Nail Products</span>
                </div>
                <div class="brand-feature">
                    <i class="fas fa-check"></i>
                    <span>Forest Essentials - Ayurvedic Luxury</span>
                </div>
                <div class="brand-feature">
                    <i class="fas fa-check"></i>
                    <span>GK Hair - Keratin Specialists</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 10: Hygiene & Safety -->
    <section class="section section-dark" id="hygiene">
        <div class="container">
            <div class="about-section">
                <div class="about-image" data-aos="fade-right" data-aos-duration="1000">
                    <img src="images/waxing_treatment_room_image.png" alt="Hygiene Standards">
                </div>
                <div class="about-content" data-aos="fade-left" data-aos-duration="1000">
                    <span class="section-subtitle">Your Safety, Our Priority</span>
                    <h2>Hygiene & Safety <span class="text-gold">Standards</span></h2>
                    <p>
                        At GUZALIC, we maintain the highest standards of hygiene and safety to ensure your complete peace of mind. Our protocols meet and exceed industry standards, creating a clean, safe environment for every treatment.
                    </p>
                    
                    <div class="hygiene-list">
                        <div class="hygiene-item">
                            <i class="fas fa-shield-virus"></i>
                            <div>
                                <h4>Hospital-Grade Sterilization</h4>
                                <p>All reusable tools undergo autoclave sterilization after every use.</p>
                            </div>
                        </div>
                        <div class="hygiene-item">
                            <i class="fas fa-hand-sparkles"></i>
                            <div>
                                <h4>Single-Use Items</h4>
                                <p>We use disposable items wherever possible including towels, wax sticks, and nail files.</p>
                            </div>
                        </div>
                        <div class="hygiene-item">
                            <i class="fas fa-pump-soap"></i>
                            <div>
                                <h4>Sanitization Stations</h4>
                                <p>Hand sanitizers available throughout the salon for clients and staff.</p>
                            </div>
                        </div>
                        <div class="hygiene-item">
                            <i class="fas fa-air-freshener"></i>
                            <div>
                                <h4>Air Purification</h4>
                                <p>HEPA air purifiers maintain clean, fresh air circulation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 11: Awards & Recognition -->
    <section class="section section-darker" id="awards">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Recognition</span>
            <h2 class="section-title">Awards & Achievements</h2>
        </div>
        
        <div class="awards-grid">
            <div class="award-card" data-aos="fade-up" data-aos-delay="100">
                <div class="award-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h4>Best Luxury Salon 2023</h4>
                <p>Times Beauty Awards</p>
            </div>
            
            <div class="award-card" data-aos="fade-up" data-aos-delay="150">
                <div class="award-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <h4>Excellence in Hair Color</h4>
                <p>India Hair Awards 2022</p>
            </div>
            
            <div class="award-card" data-aos="fade-up" data-aos-delay="200">
                <div class="award-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h4>Top 10 Spas in Delhi</h4>
                <p>Lifestyle India 2023</p>
            </div>
            
            <div class="award-card" data-aos="fade-up" data-aos-delay="250">
                <div class="award-icon">
                    <i class="fas fa-crown"></i>
                </div>
                <h4>Best Bridal Studio</h4>
                <p>WeddingSutra Awards 2022</p>
            </div>
        </div>
    </section>

    <!-- Section 12: Testimonials -->
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
                            "I've been to salons all over the world, and GUZALIC truly stands apart. The attention to detail, the luxurious ambiance, and the results speak for themselves. My Keratin treatment lasted for months, and my hair has never looked healthier. This is my go-to salon for everything!"
                        </p>
                        <div class="testimonial-author">
                            <img src="images/salon_team_professionals_image.png" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h4>Ritu Agarwal</h4>
                                <span>Fashion Designer</span>
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
                            "The spa experience at GUZALIC is unmatched. I booked the Shirodhara treatment for stress relief, and it was absolutely divine. The therapist was skilled, the ambiance was peaceful, and I left feeling like a new person. Already booked my next appointment!"
                        </p>
                        <div class="testimonial-author">
                            <img src="images/salon_team_professionals_image.png" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h4>Vikram Kapoor</h4>
                                <span>Business Executive</span>
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

    <!-- Section 13: Community -->
    <section class="section section-darker" id="community">
        <div class="container">
            <div class="about-section reverse">
                <div class="about-content" data-aos="fade-right" data-aos-duration="1000">
                    <span class="section-subtitle">Giving Back</span>
                    <h2>Community <span class="text-gold">Initiatives</span></h2>
                    <p>
                        At GUZALIC, we believe in the power of beauty to transform lives and communities. Our commitment extends beyond our salon walls through various initiatives designed to give back, educate, and empower.
                    </p>
                    <p>
                        We regularly conduct free grooming workshops for underprivileged women, helping them build confidence and job skills. Our "Beauty for a Cause" program dedicates one day each month to providing free services to cancer survivors and burn victims, helping them rediscover their self-esteem.
                    </p>
                    <p>
                        Additionally, we partner with local beauty schools to offer internship opportunities and mentorship programs, nurturing the next generation of beauty professionals. We also use eco-friendly products and packaging as part of our commitment to environmental sustainability.
                    </p>
                    
                    <div class="community-stats">
                        <div class="comm-stat">
                            <strong>200+</strong>
                            <span>Women Trained</span>
                        </div>
                        <div class="comm-stat">
                            <strong>50+</strong>
                            <span>Charity Events</span>
                        </div>
                        <div class="comm-stat">
                            <strong>30+</strong>
                            <span>Interns Mentored</span>
                        </div>
                    </div>
                </div>
                <div class="about-image" data-aos="fade-left" data-aos-duration="1000">
                    <img src="images/salon_team_professionals_image.png" alt="Community Initiatives">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 14: Careers -->
    <section class="section section-dark" id="careers">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Join Our Team</span>
            <h2 class="section-title">Careers at GUZALIC</h2>
            <p class="section-description">
                Are you passionate about beauty and looking for a career where you can grow, learn, and make a difference? GUZALIC might be the perfect place for you. We're always looking for talented individuals who share our values and vision.
            </p>
        </div>
        
        <div class="careers-content" data-aos="fade-up">
            <div class="career-benefits">
                <h3>Why Work With Us?</h3>
                <ul>
                    <li><i class="fas fa-check"></i> Competitive salary and performance bonuses</li>
                    <li><i class="fas fa-check"></i> Continuous education and training opportunities</li>
                    <li><i class="fas fa-check"></i> International exposure and certifications</li>
                    <li><i class="fas fa-check"></i> Health insurance and wellness benefits</li>
                    <li><i class="fas fa-check"></i> Positive, inclusive work environment</li>
                    <li><i class="fas fa-check"></i> Career growth and promotion opportunities</li>
                </ul>
            </div>
            
            <div class="career-cta">
                <p>Interested in joining our team? Send your resume and portfolio to:</p>
                <a href="mailto:careers@guzalic.com" class="hero-btn hero-btn-primary">careers@guzalic.com</a>
            </div>
        </div>
    </section>

    <!-- Section 15: Partnership -->
    <section class="section section-darker" id="partnership">
        <div class="container">
            <div class="about-section">
                <div class="about-image" data-aos="fade-right" data-aos-duration="1000">
                    <img src="images/luxury_skincare_products.png" alt="Partnership">
                </div>
                <div class="about-content" data-aos="fade-left" data-aos-duration="1000">
                    <span class="section-subtitle">Collaborate With Us</span>
                    <h2>Partnership <span class="text-gold">Opportunities</span></h2>
                    <p>
                        GUZALIC welcomes partnerships with brands, influencers, and businesses that share our commitment to excellence and luxury. Whether you're a beauty brand looking to showcase your products, an influencer seeking collaboration, or a corporate client needing group services, we'd love to explore opportunities together.
                    </p>
                    <p>
                        Our strategic partnerships program offers co-branded experiences, exclusive launches, influencer events, and corporate wellness packages. We believe in creating mutually beneficial relationships that enhance value for all parties involved.
                    </p>
                    <a href="contact.php" class="hero-btn hero-btn-primary mt-3">Partner With Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 16: FAQ -->
    <section class="section section-dark" id="faq">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
        </div>
        
        <div class="faq-container" data-aos="fade-up">
            <div class="faq-item">
                <div class="faq-question">
                    <span>Do I need to book an appointment in advance?</span>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>While walk-ins are welcome subject to availability, we highly recommend booking an appointment in advance to ensure your preferred time slot and specialist. You can book online, call us, or message us on WhatsApp.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What is your cancellation policy?</span>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>We request at least 24 hours notice for cancellations or rescheduling. This allows us to accommodate other clients. Late cancellations may be subject to a fee of 25% of the service value.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Do you offer home services?</span>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer premium home services for bridal parties, special occasions, and certain treatments. Home service rates may vary. Please contact us for more details and availability.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Are your products cruelty-free?</span>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>We are committed to using cruelty-free products wherever possible. Most of our partner brands do not test on animals. We also offer a range of vegan and organic options for clients who prefer clean beauty.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Do you offer gift cards?</span>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes! GUZALIC gift cards make perfect presents for any occasion. Available in various denominations, they can be purchased at our salon or ordered online. Gift cards are valid for one year from purchase.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 17: CTA -->
    <section class="cta-section" id="cta">
        <div class="cta-content" data-aos="zoom-in">
            <h2>Ready to Experience <span class="text-gold">Luxury?</span></h2>
            <p>Book your appointment today and discover why GUZALIC is the city's most trusted luxury salon.</p>
            <div class="cta-buttons">
                <a href="booking.php" class="hero-btn hero-btn-primary">Book Appointment</a>
                <a href="contact.php" class="hero-btn hero-btn-secondary">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Section 18: Newsletter -->
    <section class="newsletter-section" id="newsletter">
        <div class="newsletter-content" data-aos="zoom-in">
            <h2>Stay Updated with GUZALIC</h2>
            <p>Subscribe to our newsletter for exclusive offers, beauty tips, and news.</p>
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
                    <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/guzalicluxurioussalon/?hl=en" target="_blank"><i class="fab fa-pinterest"></i></a>
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
    <script src="js/main.js"></script>
</body>
</html>
