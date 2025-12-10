# 🎨 GUZALIC Salon Website - Hostinger Deployment Guide

## Complete Step-by-Step Deployment Instructions

---

## ✅ STEP 1: Prepare Your Project Files

### What You Need:
- All files from your Replit project
- FTP client (WinSCP for Windows, Cyberduck for Mac, or Hostinger's File Manager)
- Your Hostinger login credentials

### Files to Upload:
```
Your Project Root:
├── public/                    (Upload this ONLY)
│   ├── index.php
│   ├── about.php
│   ├── services.php
│   ├── booking.php
│   ├── contact.php
│   ├── pricing.php
│   ├── gallery.php
│   ├── .htaccess              (Important!)
│   ├── css/
│   │   ├── style.css
│   │   ├── about.css
│   │   ├── booking.css
│   │   └── services.css
│   ├── js/
│   │   └── main.js
│   ├── images/                (All image files)
│   ├── videos/                (Your video files)
│   └── admin/
│       └── index.php
│
└── includes/                  (Upload this too!)
    ├── booking.php            (Booking handler)
    ├── contact-handler.php    (Contact form handler)
    ├── bookings.json          (Auto-created, leave it)
    └── queries.json           (Auto-created, leave it)
```

---

## 🌐 STEP 2: Access Hostinger Control Panel

### Method A: Using File Manager (Easiest)
1. Log in to **Hostinger Dashboard** → `hpanel.hostinger.com`
2. Go to **Hosting** → Your domain
3. Click **File Manager**
4. You'll see `public_html` folder

### Method B: Using FTP Client (More Control)
1. Log in to Hostinger
2. Go to **Hosting** → **FTP Accounts**
3. Note your:
   - FTP Host: `your-domain.com` or IP
   - Username: `username` (usually starts with `u`)
   - Password: Your FTP password
   - Port: `21`
4. Open FTP client (WinSCP/Cyberduck/FileZilla)
5. Connect using above credentials
6. Navigate to `public_html`

---

## 📤 STEP 3: Delete Hostinger Default Files

**IMPORTANT**: Remove these default Hostinger files first:
- `index.html`
- Any welcome/placeholder files
- These will conflict with your PHP files

---

## 📁 STEP 4: Upload Your Website Files

### Using File Manager:
1. Open `public_html` folder
2. **Upload `public/` contents** into `public_html`:
   - Right-click → **Upload Files**
   - Select all files from `public/` folder
   - Wait for upload to complete

3. **Create `includes` folder**:
   - Right-click in `public_html` → **New Folder**
   - Name: `includes`
   - Upload contents of your `includes/` folder into it

### Using FTP Client:
1. Drag and drop files from `public/` into `public_html`
2. Create `includes` folder
3. Upload `includes/` contents
4. This is faster for large files

---

## ⚙️ STEP 5: Important Configuration Files

### ✅ .htaccess File (Already Created!)
Location: `/public_html/.htaccess`

**What it does:**
- Enables URL rewriting
- Adds security headers
- Enables gzip compression
- Sets caching rules

**Status**: Already in your project - just upload it!

### ✅ Folder Permissions
After uploading, set these permissions:

**For PHP files**: `644` (read/write by owner, read by others)
**For folders**: `755` (execute permission for web server)

**To set permissions:**
1. Right-click folder/file → **Permissions** (in File Manager)
2. Set as mentioned above
3. Or via FTP: Use `chmod` command

---

## 📝 STEP 6: PHP Configuration on Hostinger

### Enable PHP Extensions:
1. Go to **Hosting** → **PHP Version**
2. Make sure **PHP 8.2** is selected
3. Required extensions enabled:
   - `json` ✅ (For queries.json storage)
   - `filter` ✅ (For email validation)
   - `mail` ✅ (For sending emails)

### PHP Settings to Check:
1. Go to **Hosting** → **Advanced** → **PHP Configuration**
2. Verify:
   - `upload_max_filesize`: At least `50M`
   - `post_max_size`: At least `50M`
   - `display_errors`: OFF (for security)
   - `mail()` function: Enabled

---

## 📬 STEP 7: Email Configuration

### How Contact Forms Will Work:
1. User submits contact form
2. Email sent to: `admin@guzalic.com`
3. User receives confirmation email

### To Receive Emails:
1. Go to **Email** in Hostinger
2. Create email account: `admin@guzalic.com`
3. Update in contact-handler.php if needed (line 3):
   ```php
   $email_to = "admin@guzalic.com";
   ```

### Test Email:
1. Go to website → **Contact** page
2. Fill form and submit
3. Check email inbox for test message

---

## 🔐 STEP 8: Admin Panel Access

### Login to Admin Panel:
1. URL: `yoursite.com/admin/`
2. Username: Just password
3. Password: `guzalic2024`

### What You Can Do:
- View all customer queries
- Mark queries as "new", "read", or "resolved"
- See customer contact info
- Check when queries were received

### Change Admin Password:
Edit `public/admin/index.php` line 5:
```php
$admin_password = "guzalic2024";  // Change this to your new password
```

---

## 📊 STEP 9: Booking System Setup

### Bookings Are Stored In:
- **File**: `/includes/bookings.json`
- **Auto-saves** every booking automatically
- No database setup needed!

### To View Bookings:
- Ask your developer OR
- Download `bookings.json` via FTP
- Open in text editor to view all bookings

---

## 🎥 STEP 10: Video Files

### Video Storage:
- Location: `/public/videos/`
- Currently: `guzalic-salon-profile.mp4` (67MB)
- Other videos loaded from **Mixkit** (online)

### To Add More Videos:
1. Upload to `/public/videos/`
2. Update video source in HTML:
   ```html
   <source src="videos/your-video-name.mp4" type="video/mp4">
   ```

---

## 🧪 STEP 11: Test Everything

### Checklist:
- [ ] Homepage loads: `yoursite.com/` ✅
- [ ] All pages load (About, Services, etc)
- [ ] Videos play in 3D sections ✅
- [ ] Contact form works → Check email
- [ ] Booking form works → Check `/includes/bookings.json`
- [ ] Admin panel loads → Check `/admin/`
- [ ] Mobile responsive (test on phone)

### Common Issues:

**Videos not playing?**
- Check file permissions (755)
- Verify video format is MP4
- Check browser console (F12 → Console)

**Contact form not sending emails?**
- Verify email account created in Hostinger
- Check PHP mail() is enabled
- Look for emails in spam folder

**Admin panel not loading?**
- Verify `.htaccess` is uploaded
- Check file permissions (644)
- Try different browser

**Forms not working?**
- Check folder permissions (755 for `includes/`)
- Verify `includes/booking.php` is readable
- Check browser console for JavaScript errors

---

## 📱 STEP 12: SSL Certificate (Recommended)

### Enable HTTPS:
1. Go to **Hosting** → **SSL Certificates**
2. Usually FREE with Hostinger!
3. Click **Activate**
4. Update links:
   - Change all `http://yoursite.com` to `https://yoursite.com`
   - Update in `.htaccess` if needed

---

## 🚀 STEP 13: Performance Optimization

### Already Configured:
- ✅ `.htaccess` gzip compression
- ✅ Image optimization (already done)
- ✅ Lazy loading images
- ✅ Caching headers set

### Monitor Performance:
1. Use Google PageSpeed: `pagespeed.web.dev`
2. Enter your domain URL
3. Get optimization tips

---

## 🆘 TROUBLESHOOTING

### Website Shows "Index of /public"
**Problem**: `.htaccess` not working
**Solution**:
1. Verify `.htaccess` uploaded to `public_html`
2. Go to **Hosting** → **Advanced** → **Apache Directives**
3. Look for: `AllowOverride All` (should be enabled)
4. If not, contact Hostinger support

### PHP Files Show as Text
**Problem**: PHP not enabled
**Solution**:
1. Verify PHP 8.2 selected in Hostinger
2. Check `.htaccess` exists
3. Restart Apache (in Hosting panel)

### Large Upload Error
**Problem**: File too large
**Solution**:
1. In Hostinger: **Advanced** → **PHP Configuration**
2. Increase `upload_max_filesize` to `100M` or higher
3. Increase `post_max_size` too

### Database Connection Error
**Problem**: No database configured (you don't need one!)
**Solution**:
- Your site uses JSON files (auto-created)
- No MySQL database needed
- Everything stored in `/includes/` folder

---

## 📞 HOSTINGER SUPPORT

If you get stuck:
1. Go to **Hostinger** → **Support**
2. Contact support via:
   - **Chat**: Fastest (usually <5 min)
   - **Email**: support@hostinger.com
   - **Tickets**: For complex issues

---

## ✨ FINAL CHECKLIST BEFORE GOING LIVE

- [ ] All files uploaded to `/public_html/`
- [ ] `/includes/` folder created with all files
- [ ] `.htaccess` file present
- [ ] `.htaccess` not hidden (might be hidden by default)
- [ ] Permissions set (644 for files, 755 for folders)
- [ ] PHP 8.2 selected
- [ ] Email account created (`admin@guzalic.com`)
- [ ] Admin password noted (currently: `guzalic2024`)
- [ ] All pages load without error
- [ ] Contact form sends email
- [ ] Videos play correctly
- [ ] Mobile responsive tested
- [ ] Admin panel accessible

---

## 🎉 YOU'RE LIVE!

Your GUZALIC Salon website is now live on Hostinger!

**Share with clients:**
```
🌐 Website: yoursite.com
📧 Booking Email: bookings@guzalic.com
📞 Phone: +91 98765 43210
📱 Instagram: @guzalic
```

---

## 📧 Admin Email Summary

**Admin Panel**: `yoursite.com/admin/`
- Password: `guzalic2024`
- View queries, booking, customer messages
- Manage booking status

**Contact Queries Go To**: `admin@guzalic.com`
**Booking Confirmations Go To**: `bookings@guzalic.com`

---

## 🔄 Ongoing Maintenance

### Weekly:
- Check admin panel for new bookings
- Respond to customer emails
- Monitor website performance

### Monthly:
- Check backup of important files
- Review website analytics
- Update prices/services if needed

### As Needed:
- Add new images/videos
- Update services/pricing
- Fix any issues reported

---

**Need Help?** Contact your developer or Hostinger support.

**Good Luck with GUZALIC! 💎**
