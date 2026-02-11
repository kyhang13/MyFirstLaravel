LABact – Laravel Auth Dashboard Laboratory Assignment

Description:
Implementation of a Laravel-based authentication dashboard using:

Laravel migrations, factories, and seeders

Breeze authentication

Routing

Bootstrap-based dashboard with Vite

Requirements

PHP: 8.2 or higher

Composer

Node.js + npm

XAMPP (for MySQL)

Setup Instructions

Start XAMPP:

Launch Apache and MySQL services.

Create Database:

Open phpMyAdmin

Create a database named: labact

Configure Environment:

Copy .env.example to .env

Update DB settings in .env to match your XAMPP MySQL configuration

Install PHP dependencies:

composer install


Install frontend dependencies and build assets:

npm install
npm run build


Run migrations and seeders:

php artisan migrate --seed


Serve the application:

php artisan serve

Functional Requirements

Users can log in using seeded user data

Users can register a new account

Users can log out successfully

Users are redirected to /dashboard after login

Dashboard uses a Bootstrap frontend template via Vite

Sample Login Credentials (Seeded)
Field	Value
Email	admin@example.com

Username	admin
Password	admin123
