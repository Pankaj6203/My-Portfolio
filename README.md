# 🚀 Pankaj Kumar - Portfolio Website

[![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-4.0.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![Vite](https://img.shields.io/badge/Vite-7.0.4-646CFF?style=for-the-badge&logo=vite&logoColor=white)](https://vitejs.dev)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)

> **Professional Portfolio Website** showcasing full-stack web development skills, projects, and experience.

---

## 👨‍💻 About

This is a **modern, responsive portfolio website** built for **Pankaj Kumar**, a passionate Full-Stack Web Developer from Varanasi, UP. The website features a clean, professional design with advanced functionality including contact forms, email integration, and responsive layouts.

### 🎯 **Key Highlights:**
- 💼 **Professional Portfolio** - Showcasing projects, skills, and experience
- 📱 **Fully Responsive** - Optimized for desktop, tablet, and mobile
- 📧 **Contact Integration** - Email functionality with auto-replies
- 🎨 **Modern Design** - Professional styling with smooth animations
- 🚀 **Fast Performance** - Optimized loading and user experience

---

## 🛠️ Tech Stack

### **Backend:**
- **[Laravel 12.0](https://laravel.com)** - PHP web framework
- **[PHP 8.2+](https://php.net)** - Server-side programming
- **[MySQL](https://mysql.com)** - Database management

### **Frontend:**
- **[TailwindCSS 4.0.0](https://tailwindcss.com)** - Utility-first CSS framework
- **[Vite 7.0.4](https://vitejs.dev)** - Frontend build tool
- **[Blade Templates](https://laravel.com/docs/blade)** - Laravel templating engine
- **[Axios 1.11.0](https://axios-http.com)** - HTTP client

### **Development Tools:**
- **[Laravel Pint](https://laravel.com/docs/pint)** - Code style fixer
- **[Laravel Sail](https://laravel.com/docs/sail)** - Docker development environment
- **[Laravel Tinker](https://laravel.com/docs/artisan#tinker)** - REPL environment
- **[Concurrently](https://www.npmjs.com/package/concurrently)** - Parallel command execution

---

## ✨ Features

### 🏠 **Homepage**
- Professional hero section with call-to-action
- Skills showcase with technology cards
- Responsive grid layout
- Contact information display

### 👤 **About Page**
- Personal background and experience
- Technical skills and expertise
- Professional journey timeline

### 💼 **Projects Portfolio**
- Project showcase with descriptions
- Technology stack for each project
- Live demo and GitHub links
- Responsive project cards

### 📄 **Documents**
- Resume download functionality
- Professional document management
- PDF integration

### 📞 **Contact System**
- **Contact Form** with validation
- **Email Integration** (Gmail SMTP)
- **Auto-reply functionality**
- **Google Maps integration**
- **WhatsApp integration**
- **Database storage** for messages

### 🤖 **AI Chatbot**
- Interactive assistant for visitors
- Personal information queries
- Professional background details
- Contact information assistance

---

## 🚀 Installation & Setup

### **Prerequisites:**
- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL Database
- Git

### **1. Clone Repository:**
```bash
git clone https://github.com/pankaj09d/pankaj-portfolio.git
cd pankaj-portfolio
```

### **2. Install Dependencies:**
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### **3. Environment Setup:**
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### **4. Database Configuration:**
Update `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pankaj_portfolio
DB_USERNAME=root
DB_PASSWORD=your_password
```

### **5. Email Configuration:**
Configure email settings in `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@gmail.com
MAIL_FROM_NAME="Your Name"
```

### **6. Database Migration:**
```bash
# Run database migrations
php artisan migrate
```

### **7. Start Development Server:**
```bash
# Start all services (recommended)
composer run dev

# Or start individual services:
php artisan serve          # Laravel server
npm run dev                # Vite dev server
```

---

## 📱 Screenshots

### Desktop View
![Desktop Homepage](screenshots/desktop-home.png)
![Desktop Contact](screenshots/desktop-contact.png)

### Mobile View
![Mobile Homepage](screenshots/mobile-home.png)
![Mobile Contact](screenshots/mobile-contact.png)

---

## 🔧 Development

### **Available Commands:**
```bash
# Development (all services)
composer run dev

# Build for production
npm run build

# Run tests
composer run test
php artisan test

# Code style fixing
./vendor/bin/pint

# Clear caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

### **Project Structure:**
```
pankaj-portfolio/
├── app/
│   ├── Http/Controllers/     # Application controllers
│   ├── Mail/                # Email classes
│   └── Models/              # Eloquent models
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/            # Database seeders
├── resources/
│   ├── css/                # Stylesheets
│   ├── js/                 # JavaScript files
│   └── views/              # Blade templates
├── routes/
│   └── web.php             # Web routes
└── public/                 # Public assets
```

---

## 📧 Email System

### **Features:**
- ✅ **Contact Form Validation**
- ✅ **Email Notifications** to owner
- ✅ **Auto-reply** to sender
- ✅ **Professional Templates**
- ✅ **Database Backup**
- ✅ **Error Handling**

### **Email Configuration:**
1. **Gmail Setup:**
   - Enable 2-Factor Authentication
   - Generate App Password
   - Update `.env` with credentials

2. **Testing:**
   ```bash
   # Test email functionality
   php artisan tinker
   
   # Send test email
   Mail::to('test@example.com')->send(new App\Mail\ContactFormSubmission($data));
   ```

---

## 🌐 Deployment

### **Production Setup:**
1. **Environment:**
   ```bash
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://your-domain.com
   ```

2. **Build Assets:**
   ```bash
   npm run build
   ```

3. **Optimize Laravel:**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   php artisan optimize
   ```

### **Server Requirements:**
- PHP 8.2+
- MySQL 8.0+
- Nginx/Apache
- SSL Certificate
- Composer

---

## 🤝 Contributing

1. Fork the repository
2. Create feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open Pull Request

---

## 📄 License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

---

## 👤 Contact

**Pankaj Kumar**
- 📧 Email: [pankaj09d@gmail.com](mailto:pankaj09d@gmail.com)
- 📱 Phone: [+91 6203454484](tel:+916203454484)
- 📍 Location: Mirapur, Varanasi, UP, India
- 💬 WhatsApp: [Chat Now](https://wa.me/916203454484)

---

## 🙏 Acknowledgments

- [Laravel Team](https://laravel.com/team) for the amazing framework
- [TailwindCSS](https://tailwindcss.com) for the utility-first CSS framework
- [Heroicons](https://heroicons.com) for beautiful icons
- [Google Fonts](https://fonts.google.com) for typography

---

## 📊 Project Stats

![GitHub repo size](https://img.shields.io/github/repo-size/pankaj09d/pankaj-portfolio)
![GitHub last commit](https://img.shields.io/github/last-commit/pankaj09d/pankaj-portfolio)
![GitHub issues](https://img.shields.io/github/issues/pankaj09d/pankaj-portfolio)
![GitHub stars](https://img.shields.io/github/stars/pankaj09d/pankaj-portfolio)

---

<div align="center">

**⭐ Star this repository if you found it helpful!**

Made with ❤️ by [Pankaj Kumar](https://github.com/pankaj09d)

</div>
