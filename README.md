# 🏫 ProjectSVNIC - School Website

**ProjectSVNIC** is a fully responsive and dynamic school website developed for *SVNIC School*.  
It provides an easy-to-use platform for managing school information, displaying announcements, and offering students, teachers, and administrators a unified online system.

---

## 🌐 Overview

This website is designed to present the school’s profile, academic programs, notices, and gallery ,while integrating an **admin dashboard** for content management.  
It is built using modern web technologies for speed, security, and scalability.

---

## ⚙️ Features

### 👩‍🏫 Public Section
- Home page with dynamic banners and school overview  
- About page with school information and mission  
- Notice board / announcements  
- Image gallery with responsive grid layout  
- Contact form with email integration  
- Fully responsive UI (mobile-friendly design)

### 🧑‍💼 Admin Panel
- Secure login system for admin users  
- Dashboard overview with key statistics  
- CRUD operations for:
  - Students
  - Teachers
  - Events / Announcements
  - Gallery images  
- Manage website content dynamically (no hard-coded data)

### 🧠 Additional Features
- Laravel Blade templating for dynamic rendering  
- Validation and error handling  
- CSRF-protected forms  
- User authentication using Laravel Auth  
- Activity logging for admin actions
- Role Based Access
- Payment Intigration (RazorPay)

---

## 🛠️ Tech Stack

| Component        | Technology Used       |
|------------------|----------------------|
| Frontend         | HTML5, CSS3, Bootstrap 5, JavaScript |
| Backend          | PHP (Laravel Framework) |
| Database         | MySQL |
| Server           | Apache / XAMPP / Laragon |
| Version Control  | Git & GitHub |

---

## 🚀 Installation & Setup Guide

Follow these steps to run the project locally:

### 1. Clone the Repository
```bash
git clone https://github.com/SuyogyaMishra/projectSVNIC.git
cd projectSVNIC

2. Install Dependencies

If using Laravel:

composer install

3. Set Up Environment File

Duplicate .env.example and rename it to .env, then update your database details:

DB_DATABASE=svnic_db
DB_USERNAME=root
DB_PASSWORD=

4. Generate Key
php artisan key:generate

5. Import Database

Open phpMyAdmin

Create a database named svnic_db

Import the provided SQL file ("database\svnic.sql")

6. Run the Project
php artisan serve


Visit the site at:
👉 http://127.0.0.1:8000

📸 Screenshots
(C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-27 230025.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143407.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143425.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143445.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143512.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143537.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143552.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143636.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143651.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143706.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143826.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143849.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143919.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 143938.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 144043.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 144058.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 144116.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 144132.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 144154.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 144214.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 144223.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 144238.png) 
![Screenshot](C:\xampp\htdocs\projectSvnic\public\images\screenshots\Screenshot 2025-10-28 144246.png) 



📁 Project Structure
projectSVNIC/
│
├── app/                # Laravel application files
├── public/             # Public assets (CSS, JS, images)
├── resources/
│   ├── views/          # Blade templates
│   ├── css/ js/        # Frontend resources
├── routes/             # Web and API routes
├── database/           # Migrations and SQL dumps
├── .env.example
├── composer.json
├── package.json
└── README.md

👨‍💻 Developer

Author: Suyogya Mishra

Project: School Website (ProjectSVNIC)
Role: Full Stack Developer (Laravel + Frontend)

🧾 License

This project is created for educational and academic purposes.
Unauthorized commercial use is not permitted.

💬 Feedback

If you find any bugs or have suggestions, feel free to:

Open an issue on GitHub

Contact: suyogyamishr@gmail.com || 6386369558

⭐ Show Your Support

If you like this project, give it a ⭐ on GitHub to show your support!![Screenshot]