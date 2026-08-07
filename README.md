# Customer Management System

A simple Customer Management (CRUD) web application built with Laravel and MySQL as part of a Web Developer Internship technical assessment.

## Features

- Create new customers
- View all customers
- Update customer information
- Delete customers
- Customer status management (Active / Inactive)
- Server-side form validation
- Bootstrap responsive user interface
- Success messages and delete confirmation

## Technologies Used

- Laravel 13
- PHP 8.5
- MySQL
- Bootstrap 5
- Blade Template Engine
- Eloquent ORM
- Git & GitHub

## Customer Fields

- Full Name
- Email
- Phone
- Address
- Status (Active / Inactive)

## Installation

1. Clone the repository

```bash
git clone https://github.com/pamuduNethisa004/customer-management-system-Laravel.git
```

2. Navigate to the project

```bash
cd customer-management-system-Laravel
```

3. Install dependencies

```bash
composer install
```

4. Configure the environment

```bash
cp .env.example .env
```

Update your database settings in the `.env` file.

5. Generate the application key

```bash
php artisan key:generate
```

6. Run migrations

```bash
php artisan migrate
```

7. Start the development server

```bash
php artisan serve
```

Open:

```
http://127.0.0.1:8000
```

## Project Structure

```
app/
├── Http/Controllers
├── Models

database/
├── migrations

resources/
├── views

routes/
├── web.php
```

## Author

**Pamudu Jayathunge**

GitHub:
https://github.com/pamuduNethisa004