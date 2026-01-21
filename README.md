College Event Management System (CEMS).

A web-based application designed to manage college events, student registrations, and coordination tasks. This system provides different interfaces for administrators, staff, and students to ensure smooth event planning and execution.

🚀 Features
User Management: Separate registration and login for students and staff.

Event Coordination: Tools for staff and student coordinators to manage specific events.

Event Tracking: View registered events and manage event details.

Admin Control: Administrative panel for overseeing the entire system.

Database Integration: Persistent storage for all event and user records.

🛠️ Tech Stack
Backend: PHP (Object-Oriented Programming)

Database: MySQL

Frontend: HTML5, CSS3

Server Environment: Apache

📂 Directory Structure
Plaintext

COLLEGE_EVENT_MANAGEMENT/
├── classes/             # PHP classes for core logic
├── css/                 # UI styling files
├── fonts/               # Project-specific fonts
├── images/              # Graphic assets
├── utils/               # Database connection and helper scripts
├── cems.sql             # MySQL database schema
├── index.php            # Primary entry point
├── adminPage.php        # Administrative dashboard
├── events.php           # Event listing page
└── [Function-specific scripts]
🖥️ Server Requirements
To run this project, a local or remote server environment with the following components is required:

Web Server: Apache (standard in XAMPP/WAMP).

PHP Engine: Version 7.4 or higher.

Database Server: MySQL or MariaDB.

Database Management: phpMyAdmin (recommended for easy importing).

⚙️ Installation & Setup
Follow these steps to set up the project on a local machine using XAMPP or WAMP:

1. Project Placement
Clone or move the COLLEGE_EVENT_MANAGEMENT folder into your server's root directory:

For XAMPP: C:\xampp\htdocs\

For WAMP: C:\wamp64\www\

2. Database Configuration
Open your browser and navigate to http://localhost/phpmyadmin/.

Create a new database named cems.

Select the cems database, click the Import tab, and choose the cems.sql file from the project root.

Click Go to execute the import.

3. Connection Settings
Ensure the database credentials in utils/ or your connection class match your local server (usually localhost, user root, and no password).

4. Running the Application
Access the project by opening your web browser and typing: http://localhost/COLLEGE_EVENT_MANAGEMENT/index.php

👤 Author
Kamlesh Rathod
