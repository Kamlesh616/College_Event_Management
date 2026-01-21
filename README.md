# College Event Management System (CEMS)

A web-based application designed to manage college events, student registrations, and coordination tasks. This system provides different interfaces for administrators, staff, and students to ensure smooth event planning and execution.

---

## 🚀 Features
* **User Management:** Separate registration and login for students and staff.
* **Event Coordination:** Tools for staff and student coordinators to manage events.
* **Event Tracking:** View registered events and manage event details.
* **Admin Control:** Administrative panel for overseeing the entire system.

---

## 🛠️ Tech Stack
* **Backend:** PHP (Object-Oriented Programming)
* **Database:** MySQL
* **Frontend:** HTML5, CSS3
* **Server Environment:** Apache

---

## 📂 Directory Structure
```text
COLLEGE_EVENT_MANAGEMENT/
├── classes/             # PHP classes for core logic
├── css/                 # UI styling files
├── fonts/               # Project-specific fonts
├── images/              # Graphic assets
├── utils/               # Database connection scripts
├── cems.sql             # MySQL database schema
├── index.php            # Primary entry point
└── adminPage.php        # Administrative dashboard

---
🖥️ Server Requirements
To run this project, you need a local server environment (like XAMPP or WAMP):
Web Server: Apache
PHP Engine: Version 7.4 or higher
Database: MySQL

---
⚙️ Installation & Setup
1. Project Placement
Move the COLLEGE_EVENT_MANAGEMENT folder into your server's root directory:
XAMPP: C:\xampp\htdocs\
WAMP: C:\wamp64\www\

2. Database Configuration
Open http://localhost/phpmyadmin/.
Create a new database named cems.
Click the Import tab and upload the cems.sql file.

3. Running the Application
Open your browser and go to:
http://localhost/COLLEGE_EVENT_MANAGEMENT/index.php
