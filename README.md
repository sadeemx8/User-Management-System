# User-Management-System
A simple web application developed using PHP and MySQL to manage user records. The system allows users to add a name and age, store the data in a MySQL database, display all records in a table, and toggle the user status between 0 and 1

## 🌐 Live Website

🔗 https://sadeemproject.freehosting.dev/

---

## 📖 Project Description

This project is a simple User Management System developed using HTML, CSS, JavaScript, PHP, and MySQL.

The system allows users to:
- Add a user's name and age.
- Store data in a MySQL database.
- Display all users in a table.
- Toggle the user status between 0 and 1.

---

## 🛠️ Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL

---

## ✨ Project Features

- One-line user input form.
- Store user data in a MySQL database.
- Display all records in a table.
- Toggle user status (0 ↔ 1).
- Update the status immediately after clicking the Toggle button.
- Simple and user-friendly interface.

---

## 🚀 Project Steps

### 1️⃣ Create the Database

Create a MySQL database.

Database Name
if0_42450081_userstatus

---

### 2️⃣ Create the Users Table

Run the following SQL statement:
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    status TINYINT(1) NOT NULL DEFAULT 0
);

---

### 3️⃣ Build the Web Page

Create the main page using HTML, CSS, JavaScript, and PHP.

The page contains:
- Name field
- Age field
- Submit button

---

### 4️⃣ Store User Data

After clicking Submit, the entered data is stored in the MySQL database using PHP.

---

### 5️⃣ Display Users

Retrieve all records from the database and display them in a table below the form.

The table contains:

- ID
- Name
- Age
- Status
- Action (Toggle)

---

### 6️⃣ Toggle User Status

Each record has a Toggle button.

Clicking the button changes the status:

- 🔴 0 → 🟢 1
- 🟢 1 → 🔴 0

The table is updated immediately after the change.

---

## 📂 Project Files

- index.php
- insert.php
- toggle.php

---

<img width="747" height="510" alt="Screenshot 2026-07-20 050402" src="https://github.com/user-attachments/assets/2b3b3e29-33e2-4282-ba32-4c2a639de025" />

---

## 👩‍💻 Author
Eng.Sadeem Al-Harthi
