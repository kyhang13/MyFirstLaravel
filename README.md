LABact - Laravel Auth Dashboard
Laboratory assignment implementation using Laravel migrations, factories, seeders, Breeze authentication, routing, and a Bootstrap-based dashboard.

Requirements
PHP 8.2+
Composer
Node.js + npm
XAMPP (MySQL)
Setup Instructions
Start Apache and MySQL in XAMPP.
Create a MySQL database named labact (phpMyAdmin is fine).
Copy .env.example to .env and verify the DB settings match your XAMPP MySQL configuration.
Install PHP dependencies:
composer install
Install frontend dependencies and build assets:
npm install
npm run build
Run migrations and seeders:
php artisan migrate --seed
Serve the app:
php artisan serve
Functional Requirements
Users can log in using seeded user data.
Users can register a new account.
Users can log out successfully.
Users are redirected to /dashboard after login.
Dashboard uses a frontend template via Vite (Bootstrap).
Sample Login Credentials (Seeded)
Email: admin@example.com
Password: admin123
Username: admin
The seeder creates 100 users total. All factory users share the same password shown above.
