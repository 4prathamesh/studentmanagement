<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Student Management System

A robust web application designed to streamline educational administration. This system provides a centralized platform for managing student and teacher details, tracking academic results, and ensuring secure access for authorized users.

## 🚀 Features

* **Secure Authentication:** Robust login functionality to protect sensitive educational data.
* **Student & Teacher Management:** Comprehensive tools to add, view, and manage profiles for both students and faculty members.
* **Academic Results Tracking:** Streamlined systems for recording, managing, and viewing student grades and academic performance.

## 🛠️ Tech Stack

* **Framework:** Laravel (PHP)
* **Frontend:** Blade Templating, Vite
* **Database:** MySQL / SQLite (configured via `.env`)

## ⚙️ Installation & Setup

Follow these steps to get the project up and running on your local machine.

### Prerequisites
* PHP >= 8.1
* Composer
* Node.js & NPM

### Steps

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/4prathamesh/studentmanagement.git](https://github.com/4prathamesh/studentmanagement.git)
   cd studentmanagement
2. **Install PHP dependencies:**
    ```bash
    composer install
   
4. **Install and compile frontend dependencies:**
    ```bash
    npm install
    npm run build
   
6. **Environment Setup:**
   ```bash
    cp .env.example .env
   
8. **Generate Application Key:**
   ```bash
    php artisan key:generate
   
10. **Run Database Migrations:**
    ```bash
    php artisan migrate
    
12. **Start the local development server:**
    ```bash
    php artisan serve

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
