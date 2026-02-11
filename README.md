LABact - Laravel Auth Dashboard

This laboratory assignment involves creating a Laravel-based authentication dashboard using Laravel migrations, factories, seeders, Breeze authentication, routing, and a Bootstrap-based dashboard.

Requirements

PHP 8.2 or higher

Composer

Node.js with npm

XAMPP (MySQL)

Setup Instructions

Start Apache and MySQL in XAMPP.

Create a MySQL database named labact using phpMyAdmin.

Copy .env.example to .env and make sure the database settings match your XAMPP MySQL configuration.

Install PHP dependencies by running composer install.

Install frontend dependencies and build assets by running npm install followed by npm run build.

Run migrations and seeders by executing php artisan migrate --seed.

Serve the application using php artisan serve.

Functional Requirements

Users can log in using seeded user data.

Users can register a new account.

Users can log out successfully.

Users are redirected to /dashboard after login.

Dashboard uses a frontend template via Vite with Bootstrap.

Sample Login Credentials (Seeded)

Email: student1@example.com

Username: student1

Password: Password123!

The seeder creates a total of 100 users. All factory-generated users share the same password above.
