# MyReads - Personal Reading Tracker

A web application for tracking your personal reading habits, built with Laravel.

---

## About the Project

MyReads solves a real problem that many readers face — keeping track of a growing book
collection is surprisingly difficult. People often rely on physical notes or spreadsheets
that don't work well together.

MyReads brings everything into one place. Users can register an account, log in, and
manage their entire reading list — tracking what they have finished, what they are
currently reading, and what they plan to read next.

---

## Features

- User registration, login, logout, and profile management
- Add, edit, delete, and view books (full CRUD)
- Track reading status (finished / reading / plan to read)
- Store title, author, genre, and reading status for each book
- Book ratings and short reviews
- Search and filter books by status or author
- Statistics overview (e.g. total books finished)
- Full API with documented endpoints (verified via Postman)

---

## Team Members

| Name | Student ID | Email | Role |
|---|---|---|---|
| Sadrije Alija | 131611 | sa31611@seeu.edu.mk | API development, routing, authentication, CRUD implementation, testing |
| Anida Osmani | 131659 | ao31659@seeu.edu.mk | Database design, ER diagrams, seed data, SQL queries, testing support |
| Medina Fetai | 131917 | mf31917@seeu.edu.mk | Documentation, Postman collection, testing endpoints, validating functionality |

**Course:** Software Engineering (CCS-502)
**Professor:** Betim Sherifi

---

## Technologies Used

- **Backend:** PHP, Laravel
- **Frontend:** Blade templates, HTML, CSS
- **Database:** MySQL
- **Authentication:** Laravel built-in Auth
- **API Testing:** Postman

---

## Installation Guide

Follow these steps to run the project on your local machine.

### Requirements

- PHP >= 8.1
- Composer
- MySQL
- Git

### Steps

**1. Clone the repository**
```bash
git clone https://github.com/anidaosmani/MyReads-Personal-Reading-Tracker.git
cd MyReads-Personal-Reading-Tracker
```

**2. Install dependencies**
```bash
composer install
```

**3. Set up environment file**
```bash
cp .env.example .env
```

**4. Generate application key**
```bash
php artisan key:generate
```

**5. Configure your database**

Open the `.env` file and update these lines with your database details:
```
DB_DATABASE=myreads
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

**6. Run database migrations and seeders**
```bash
php artisan migrate --seed
```

**7. Start the development server**
```bash
php artisan serve
```

**8. Open in browser**

Visit: `http://127.0.0.1:8000`

---

## Running Tests

To run the unit tests for this project:

```bash
php artisan test
```

---

## API Endpoints

| Method | Endpoint | Description |
|---|---|---|
| POST | `/api/register` | Register a new user |
| POST | `/api/login` | Log in and get token |
| GET | `/api/books` | Get all books for the user |
| POST | `/api/books` | Add a new book |
| PUT | `/api/books/{id}` | Update a book |
| DELETE | `/api/books/{id}` | Delete a book |

Full API documentation is available in the included Postman collection file:
`MyReads.postman_collection.json`

---

## Project Structure

```
MyReads-Personal-Reading-Tracker/
├── app/
│   ├── Http/Controllers/   # Application controllers
│   └── Models/             # Eloquent models (User, Book)
├── database/
│   ├── migrations/         # Database table structure
│   └── seeders/            # Sample book data
├── resources/
│   └── views/              # Blade template views
├── routes/
│   └── web.php             # Application routes
└── tests/
    └── Feature/            # Unit and feature tests
```

---

## License

This project was developed for academic purposes at SEEU university.
