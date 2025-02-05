# Login and Registration System

This project is a simple login and registration system built using PHP and MySQL. It features a beautiful user interface powered by Bootstrap, with the ability to switch between the login and registration forms.

## Features

- User registration.
- User login.
- Success and error messages for registration and login.
- Interactive user interface using Bootstrap.
- Session management to store user data after login.
- A homepage that displays the user's name after login.
- Logout functionality.

## Screenshots

### Signup Page
![Signup Page](screenshots/signUp.jpg)

### Login Page
![Login Page](screenshots/signIn.jpg)

### Home Page After Login
![Home Page](screenshots/home.jpg)

## Requirements

- A web server with PHP support (e.g., XAMPP, WAMP, or MAMP).
- MySQL database.
- A modern web browser.

## Installation

1. Download or clone the project into a folder inside your local web server (e.g., `htdocs` if using XAMPP).
2. Import the database:
   - Open the `login.sql` file and execute it in phpMyAdmin or any database management tool to create the required table.
3. Modify the `connect.php` file to add your database connection details:
   ```php
   $host = 'localhost'; // Server name
   $user = 'username'; // Database username
   $password = 'password'; // Database password
   $db = 'login'; // Database name
How to Use
Register a new account:

Click on "Sign up" on the login page.

Fill out the form (First Name, Last Name, Email, and Password).

Click "SignUp" to complete the registration.

Login:

Enter your email and password in the login form.

Click "Sign In" to log in.

Logout:

Click "LogOut" on the homepage to log out.

File Structure
index.php: The main page containing the login and registration forms.

registerANDlogin.php: Handles login and registration requests.

home.php: The homepage after login.

logout.php: Handles logout functionality.

connect.php: Database connection file.

msg.php: Displays success or error messages.

css/: Contains styling files (Bootstrap and custom styles).

Technologies Used
PHP: For data processing and database connection.

MySQL: For storing user data.

Bootstrap: For front-end styling.

JavaScript: For form interactivity.

License
This project is licensed under the MIT License.

