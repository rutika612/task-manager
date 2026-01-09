# Task Management System - Laravel Intern Assessment

## Description
This is a simple Task Management System built using **Laravel 11**. It allows users to:

- Add tasks
- Edit tasks
- Mark tasks as completed
- Delete tasks
- Filter tasks by priority or status

---

## Features

- Task Fields: **Title, Description, Priority (Low, Medium, High), Status (Pending/Completed)**
- Proper **MVC** usage
- **Laravel validation**
- **Resource routes**
- Clean and readable code
- External CSS & JS for better UI

---

## Requirements

- PHP 8.1 or above  
- Composer  
- Laravel 11  
- SQLite or MySQL (configurable in `.env`)  

---

## Setup Instructions

1. **Clone the repository**
git clone https://github.com/rutika612/task-manager.git

2. **Open project folder**
cd task-manager

markdown
Copy code

3. **Install dependencies**
composer install

4. **Create environment file**
cp .env.example .env

markdown
Copy code

5. **Generate application key**
php artisan key:generate

markdown
Copy code

6. **Configure database**
- Open `.env` file
- Update database settings:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=

markdown
Copy code

7. **Run migrations**
php artisan migrate

markdown
Copy code

8. **Start the Laravel server**
php artisan serve

---

## Access

- Open your browser
- Go to:
http://127.0.0.1:8000/tasks

yaml
Copy code

---

## Notes

- Make sure **XAMPP** is running (Apache + MySQL) if using local server  
- If any errors appear, run:
php artisan config:clear
php artisan cache:clear

yaml
Copy code

---

## Author

**Rutika Kadam**  