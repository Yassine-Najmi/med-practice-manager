# General Medicine Cabinet System

## Introduction

This project is a General Medicine Cabinet System developed using PHP and Laravel for the backend, and Bootstrap for the frontend. The system consists of two main parts: a user-facing section and an admin dashboard.

## User-Facing Section

### Home Page

-   Displays general information about the medical cabinet.

### Appointment Page

-   Users can book appointments by selecting from available slots.

### About Us

-   Provides details about the doctor and the medical cabinet.

### Contact Page

-   Allows users to send emails to the doctor.

## Admin Dashboard

The admin dashboard is accessible only after authentication and contains the following pages:

### Dashboard

-   Displays statistics about appointments for today, tomorrow, this week, and this month.

### Patients

-   Contains a table of patients with a CRUD (Create, Read, Update, Delete) system.

### Appointments

-   Displays all booked appointments with a CRUD system.

### Business Hours

-   Allows the admin to set working days, working times, and appointment intervals for each day. This information is linked to a dynamic schedule displayed on the home page and the footer of the user-facing section.

### Consultation

-   Contains a CRUD system for consultations and the ability to generate PDF prescriptions.

### Employees

-   Contains a table of employees with a CRUD system.

### Suppliers

-   Contains a table of suppliers with a CRUD system.

### Stock

-   Contains a table of stock items with a CRUD system.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/ZaitouneMohamed/cabinet-dantaire.git
    ```

2. Navigate to the project directory:

    ```bash
    cd cabinet-dantaire
    ```

3. Install dependencies:

    ```bash
    composer install
    npm install
    ```

4. Copy the .env.example file to .env and configure your environment variables:

    ```bash
    cp .env.example .env
    ```

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

6. Run the database migrations:

    ```bash
    php artisan migrate
    ```

7. Seed the database (optional):

    ```bash
    php artisan db:seed
    ```

8. Serve the application:

    ```bash
    php artisan serve
    ```

## Usage

-   Access the user-facing section at [http://127.0.0.1:8000/fr](http://127.0.0.1:8000/fr)
-   Access the admin dashboard at [http://127.0.0.1:8000/fr/admin](http://127.0.0.1:8000/fr/admin) (authentication required).

## Features

### User-Facing Section

-   Home Page: General information about the medical cabinet.
-   Appointment Page: Book appointments by selecting available slots.
-   About Us: Information about the doctor.
-   Contact Page: Send emails to the doctor.

### Admin Dashboard

-   Dashboard: Statistics on appointments.
-   Patients: Manage patients with a CRUD system.
-   Appointments: Manage appointments with a CRUD system.
-   Business Hours: Set working days, times, and appointment intervals.
-   Consultation: Manage consultations with a CRUD system and generate PDF prescriptions.
-   Employees: Manage employees with a CRUD system.
-   Suppliers: Manage suppliers with a CRUD system.
-   Stock: Manage stock items with a CRUD system.
