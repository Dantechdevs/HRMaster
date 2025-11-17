HRMaster – Human Resource Management System

HRMaster is a modern, scalable Human Resource Management System (HRMS) built with Laravel 11, Tailwind CSS, and optionally AdminLTE.
It helps organizations manage employees, departments, attendance, leave, payroll, and user roles efficiently.

Table of Contents

Overview

Features

Installation

Database Setup

Modules

Screenshots

Future Enhancements

Contributing

License

Overview

HRMaster is designed for professional HR management. It provides a clean, responsive dashboard, quick actions, and easy navigation between modules.

✅ Multi-office ready
✅ Clean UI with Tailwind / AdminLTE
✅ Secure authentication & role-based access

Features

User Authentication (Login/Register/Password Reset/Email Verification)

Employee Management

Department Management

Attendance Tracking

Leave Management

Payroll Management

Role-Based Access Control (RBAC)

Clean, responsive UI (Tailwind / AdminLTE optional)

Installation

Clone the repository:

git clone https://github.com/Dantechdevs/hrmaster.git
cd hrmaster


Install PHP dependencies:

composer install


Install Node dependencies:

npm install


Build frontend assets:

npm run build


Copy .env.example to .env and set your database:

cp .env.example .env
php artisan key:generate


Run migrations and seed default data:

php artisan migrate --seed


Serve the application:

php artisan serve

Database Setup

Default Departments:

Human Resources

Finance

IT

Marketing

Sales

Operations

Default User (for testing):

Email: test@example.com
Password: password


Run seeders:

php artisan db:seed

Modules
Employees

Add, edit, delete, view employees

Assign to departments, track position & hire date

Departments

Create, edit, delete departments

Assign employees to departments

Attendance

Daily attendance marking

Track present/absent

Reports

Leave Management

Employee leave requests

Approval workflows

Leave tracking

Payroll

Salary management

Payroll generation

Payment history

Roles & Permissions

Assign roles to users

Control module access per role

Screenshots

Dashboard

Employee Module

Departments Module

Attendance Module

Replace these placeholders with real screenshots from your project before pushing to GitHub.

Future Enhancements

Multi-office support with office-level permissions

Charts and reports on dashboard (attendance trends, payroll, leave)

Notifications via email/SMS

API for mobile app integration

Contributing

Fork the repository

Create your feature branch:

git checkout -b feature/my-feature


Commit your changes:

git commit -m "Add some feature"


Push to your branch:

git push origin feature/my-feature


Open a Pull Request

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
