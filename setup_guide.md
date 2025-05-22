# Success Microfinance Institution S.C. Website
# Setup and Deployment Guide

## Table of Contents
1. [Introduction](#introduction)
2. [System Requirements](#system-requirements)
3. [Installation](#installation)
4. [Database Setup](#database-setup)
5. [Configuration](#configuration)
6. [Admin Panel](#admin-panel)
7. [Multilingual Support](#multilingual-support)
8. [Customization](#customization)
9. [Troubleshooting](#troubleshooting)
10. [Security Considerations](#security-considerations)

## Introduction

This document provides instructions for setting up and deploying the Success Microfinance Institution S.C. Website. The website is built using PHP, MySQL, Bootstrap 5, and includes a comprehensive admin panel with multilingual support (English and Amharic).

## System Requirements

### Server Requirements
- Web server (Apache or Nginx recommended)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- PHP Extensions:
  - PDO
  - PDO_MySQL
  - GD Library
  - JSON
  - mbstring

### Recommended Server Specifications
- CPU: 2+ cores
- RAM: 2GB or higher
- Storage: 1GB minimum for the application

### Development Environment
- Local development server (XAMPP, WAMP, MAMP, or similar)
- Code editor (Visual Studio Code, Sublime Text, etc.)
- Git (optional, for version control)

## Installation

### Option 1: Manual Installation

1. **Download the project files**
   - Extract the ZIP archive to your local machine

2. **Upload files to your web server**
   - Upload all files to your web server's public directory (e.g., public_html, www, or htdocs)
   - Ensure file permissions are set correctly:
     ```
     chmod 755 for directories
     chmod 644 for files
     ```

3. **Create a database**
   - Create a new MySQL database for the website
   - Note the database name, username, and password for configuration

### Option 2: Using Git (for developers)

1. **Clone the repository**
   ```
   git clone https://github.com/your-repository/success-microfinance.git
   ```

2. **Move to web server directory**
   - Move the cloned directory to your web server's public directory

## Database Setup

1. **Import the database schema**
   - Navigate to phpMyAdmin or use MySQL command line
   - Create a new database (e.g., `success_microfinance`)
   - Import the database schema from `includes/database.sql`

2. **Verify database tables**
   - Ensure the following tables are created:
     - users
     - news
     - products
     - content
     - partners
     - media
     - settings

## Configuration

1. **Database Configuration**
   - Open `includes/config.php`
   - Update the database connection settings:
     ```php
     define('DB_HOST', 'localhost'); // Your database host
     define('DB_NAME', 'success_microfinance'); // Your database name
     define('DB_USER', 'root'); // Your database username
     define('DB_PASS', ''); // Your database password
     ```

2. **File Permissions**
   - Ensure the following directories are writable by the web server:
     ```
     chmod 755 images/
     chmod 755 uploads/
     chmod 755 languages/
     ```

3. **URL Configuration**
   - If you're installing in a subdirectory, you may need to adjust base URLs in the code

## Admin Panel

### Default Admin Credentials
- Username: `admin`
- Password: `admin123`

### Changing Admin Password
1. Log in to the admin panel
2. Navigate to Profile
3. Change your password immediately after first login

### Admin Panel Features
- **Dashboard**: Overview of website statistics
- **News Manager**: Add, edit, and delete news articles
- **Products Manager**: Manage financial products (savings, loans)
- **Content Editor**: Edit static content sections
- **Language Manager**: Manage translations for multilingual support
- **Media Library**: Upload and manage media files
- **Settings**: Configure website settings

## Multilingual Support

### Language Files
- Language translations are stored in `languages/translations.json`
- The website supports English (en) and Amharic (am) by default

### Adding or Modifying Translations
1. Log in to the admin panel
2. Navigate to Language Manager
3. Edit translations for each language
4. Save changes

### Adding a New Language
1. Edit `languages/translations.json`
2. Add a new language code section following the existing structure
3. Update the language switcher in the header

## Customization

### Theme Customization
- CSS styles are located in `css/style.css`
- Main color scheme can be modified by changing CSS variables:
  ```css
  :root {
      --primary-color: #0056b3;
      --secondary-color: #28a745;
      --accent-color: #ffc107;
      /* Other variables */
  }
  ```

### Logo and Images
- Replace `images/logo.png` with your own logo
- Update hero background image at `images/hero-bg.jpg`
- Partner logos should be placed in the `images/` directory

### Content Customization
1. Log in to the admin panel
2. Use the Content Editor to modify static content
3. Use the Products Manager to update financial products
4. Use the News Manager to manage news articles

## Troubleshooting

### Common Issues

#### Database Connection Error
- Verify database credentials in `includes/config.php`
- Ensure MySQL server is running
- Check if the database exists and has the correct tables

#### File Upload Issues
- Check file permissions on the `uploads/` directory
- Verify PHP settings for file uploads (php.ini):
  ```
  upload_max_filesize = 5M
  post_max_size = 8M
  ```

#### Blank Page or PHP Errors
- Enable error reporting for debugging:
  ```php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  ```
- Check PHP error logs

## Security Considerations

### Recommended Security Measures
1. **Change default admin credentials immediately**
2. **Keep PHP and MySQL updated** to the latest stable versions
3. **Use HTTPS** for secure communication
4. **Implement proper input validation** for all user inputs
5. **Regularly backup your database** and files
6. **Use strong passwords** for admin accounts
7. **Restrict access to admin directory** using .htaccess:
   ```
   <Files ~ "^\.ht">
       Order allow,deny
       Deny from all
   </Files>
   ```

### Security Best Practices
- Regularly review admin user accounts
- Monitor login attempts and suspicious activities
- Keep all software components updated
- Consider implementing a Web Application Firewall (WAF)

---

For additional support or questions, please contact the development team.

© 2025 Success Microfinance Institution S.C. All rights reserved.
