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

Import the provided SQL file ("database/svnic.sql")

6. Run the Project
php artisan serve


Visit the site at:
👉 http://127.0.0.1:8000

📸 Screenshots
(public/images/screenshots/Screenshot 2025-10-27 230025.png) 
## 📸 Screenshots

![Screenshot](public/images/screenshots/Screenshot%202025-10-27%20230025.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143407.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143425.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143445.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143512.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143537.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143552.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143636.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143651.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143706.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143826.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143849.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143919.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20143938.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20144043.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20144058.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20144116.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20144132.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20144154.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20144214.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20144223.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20144238.png)
![Screenshot](public/images/screenshots/Screenshot%202025-10-28%20144246.png)



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