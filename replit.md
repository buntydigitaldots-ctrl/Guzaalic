# GUZALIC Luxurious Salon Website

## Project Overview
Complete luxury salon website built with HTML, CSS, JavaScript, and PHP. Features black/silver theme with gold accents, premium luxury design, 20+ home page sections, 18+ about page sections, 3D animations, video hero slider, and online booking system.

## Current Status: COMPLETED ✅
- PHP 8.2 development server running on port 5000
- All pages fully functional and accessible
- Website live and responsive

## Key Features Implemented
- **Hero Section**: Dynamic video slider with 4 premium spa/salon videos, auto-rotating with manual controls
- **3D TV Animation**: Luxury TV frame with video display, floating 3D perspective transforms, reflection effects
- **3D iPhone Animation**: iPhone 15 Pro mockup with notch/home bar, floating animation with 8s rotation cycle
- **3D Location Map**: Google Maps embed with bouncing pin animation, pulsing effect, 3D perspective rotation
- **Navigation**: Mega dropdown menus for services, responsive mobile toggle, sticky header
- **Loading Screen**: GUZALIC logo with gold animation, smooth fade transition
- **Particle Effects**: Animated gold particles in hero section
- **Premium Styling**: Playfair Display headings, Montserrat body text, luxury black/silver/gold color scheme

## Pages Completed
1. **index.php** - Home with 20+ sections including hero, services preview, TV section, iPhone section, location, testimonials, Instagram/YouTube integration, stats, blog preview, FAQ, newsletter
2. **about.php** - 18+ sections with salon history, team bios, achievements, luxury amenities, expert services
3. **services.php** - All service categories with images, detailed descriptions, pricing info
4. **booking.php** - Online appointment booking system with PHP backend, date/time pickers
5. **pricing.php** - Luxury pricing tables with service categories and rates
6. **gallery.php** - Filterable portfolio with before/after images
7. **contact.php** - Contact form with Google Maps integration

## Design Theme
- **Primary Color**: Black (#0a0a0a)
- **Secondary Color**: Silver (#c0c0c0)
- **Accent Color**: Gold (#d4af37)
- **Typography**: Playfair Display (headings), Montserrat (body), Cormorant Garamond (elegant text)
- **Shadows**: Luxury drop shadows and inset glows for depth

## Video Integration
- Hero slider: 4 luxury spa treatment videos from Mixkit
- 3D TV section: Woman in spa treatment video
- iPhone section: Facial treatment video preview
- Auto-rotating hero with manual controls (dots, arrows)

## 3D Animations & Effects
- CSS 3D transforms on TV, iPhone, and map sections
- perspective: 1500px-2000px on parent containers
- transform-style: preserve-3d on 3D elements
- Floating keyframe animations (tvFloat, iphoneFloat, mapFloat)
- Smooth transitions and hover effects

## Technical Stack
- **Backend**: PHP 8.2
- **Frontend**: HTML5, CSS3, JavaScript (ES5/ES6)
- **Libraries**: AOS (Animate On Scroll), Particles.js, Font Awesome icons, Google Fonts
- **APIs**: Google Maps embed, Mixkit videos (free stock footage)

## User Communication Preference
- Language: Hindi/Urdu mixed (as per user preference)

## Recent Changes
- Fixed CSS asset path from `url('images/...')` to `url('../images/...')`
- Added video-based hero slider with multiple luxury treatment videos
- Enhanced JavaScript to handle video play/pause when switching slides
- Added CSS styling for hero video fallback images
- All 3D sections verified to have proper CSS transforms and animations
- Website tested and confirmed loading correctly

## File Structure
```
public/
├── index.php           # Home page with 20+ sections
├── about.php           # About Us page
├── services.php        # Services page
├── booking.php         # Booking system
├── pricing.php         # Pricing page
├── gallery.php         # Gallery with filters
├── contact.php         # Contact page
├── css/
│   ├── style.css       # Main styles with all animations
│   ├── about.css       # About page specific styles
│   └── [other page-specific CSS]
├── js/
│   └── main.js         # JavaScript for interactivity
├── images/             # All luxury salon images
└── includes/
    └── booking.php     # PHP booking handler
```

## Known Details
- Service menu pricing from user PDF: Olaplex ₹5000, Keratin ₹3500, etc.
- Location: New Delhi (used in contact/maps section)
- Business hours: 10:00 AM - 9:00 PM (Monday-Sunday)
- Contact: +91 98765 43210

## Next Steps (Optional Enhancements)
- Add actual Instagram API integration for live feed (currently uses 6 reel preview links)
- Add YouTube API integration for live feed (currently uses 6 video preview links)
- Add backend database for booking management
- Implement admin panel for content updates
- Add email notifications for bookings
- SSL certificate for production deployment
