# C3077Project
online flower shop e-commerce website

Installation Documentation
1. URL live link and github 
A software repository of all code/branches. (like github):
https://github.com/Yumna101/C3077Project.git 
Provide live URL link that works:
https://sumya.myweb.cs.uwindsor.ca/c3077proj/index.php  

2. Installation documentation (how can someone install your app on a different website?)
To run this website on another server, you might need:
A web server (e.g., Apache)
PHP (version 7.0 or higher)
MySQL / MariaDB
phpMyAdmin (recommended)
Step 1: Download the Project Files
Download or clone the project from GitHub:
git clone https://github.com/Yumna101/C3077Project.git 
OR
Extract the provided .zip file
Step 2: Upload Files to Server
Upload all files to your web server directory (ie.filezilla:
Example:
htdocs/ (XAMPP)
public_html/
Step 3: Set Up the Database
Open phpMyAdmin
Create a new database:
sumya_c3077
Import the SQL file:
Go to Import tab
Upload:
user_data.sql
Step 4: Verify Database Table
Make sure the table user_data exists:
CREATE TABLE user_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100),
    password VARCHAR(100),
    role VARCHAR(20)
);
Step 5: Add Default Users
Insert test users:
INSERT INTO user_data (email, password, role)
VALUES 
('admin@test.com', '1234', 'admin'),
('user@test.com', '1234', 'customer');
Step 6: Configure Database Connection
Open your PHP files (e.g., login.php, register.php) and update:
$host = "localhost";
$dbname = "sumya_c3077";
$username = "your_username";
$password = "your_password";
Step 7: Run the Website
Open your browser and go to:
http://localhost/finalproject/index.php
OR (as it is host online):
https://yourdomain.com/finalproject/index.php
OR (as it is hosted online you can simply access website easily through this link):
https://sumya.myweb.cs.uwindsor.ca/c3077proj/index.php 

*Admin accounts CANNOT be created on the website as we don’t want anyone to have access to admin only features. Thus they are added manually directly on phpMyAdmin. You can access an admin account for grading using these credentials: ('admin@test.com', '1234')
