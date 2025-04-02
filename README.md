<div align="center">

<h3 align="center">BankaTi</h3>

  <p align="center">
    Web application for managing bank accounts using PHP OOP and MVC architecture.
    <br />
     <a href="https://github.com/issam-mhj/bankati">github.com/issam-mhj/bankati</a>
  </p>
</div>

## Table of Contents

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#key-features">Key Features</a></li>
      </ul>
    </li>
    <li><a href="#architecture">Architecture</a></li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

## About The Project

BankaTi is a web application designed for managing bank accounts, built using PHP with an Object-Oriented Programming (OOP) approach and following the Model-View-Controller (MVC) architecture. It provides functionalities for managing client accounts, transactions, and financial reports.

### Key Features

**Client-Side:**

- Secure login.
- Personal information management (name, email, password).
- Balance consultation (current and savings).
- Deposits, withdrawals, and transfers.
- Transaction history with real-time search (AJAX).

**Administrator-Side:**

- Client account management (add, modify, deactivate).
- Financial report generation (deposits, withdrawals, cumulative balances).
- Quick client search via AJAX.

**Frontend:**

- HTML
- Tailwind CSS
- Native CSS
- Javascript

**Backend:**

- PHP (OOP)
- MySQL PDO
- phpMyAdmin

**Tools:**

- Git
- GitHub
- Gira (Likely a typo in original README, assuming it refers to issue tracking)

The application follows the MVC architectural pattern, separating data (models), presentation (views), and control logic (controllers). Routing is handled by a custom Router class. Database interactions are managed using PDO.

## Getting Started

To get a local copy up and running, follow these steps.

### Prerequisites

- PHP 7.4 or higher
- MySQL
- Composer (for installing Tailwind CSS dependencies)

### Installation

1.  Clone the repository:

    ```sh
    git clone https://github.com/issam-mhj/bankati.git
    ```

2.  Navigate to the project directory:

    ```sh
    cd bankati
    ```

3.  Create the database:

    ```sh
    mysql -u root -p < script.sql
    ```
    or import the `script.sql` file into your phpMyAdmin.

4. Configure the database connection:
   Edit the `config/database.php` file and update the database credentials:

    ```php
    <?php

    class Db
    {

        protected $conn;

        public function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=localhost;dbname=bankati", "root", "");
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
    ```
    Replace `"root"` with your MySQL username and the empty string with your password if you have one.

5. Install Tailwind CSS dependencies:

   ```sh
   npm install
   ```

6.  Run Tailwind CSS build process:

    ```sh
    npm run dev
    ```
    or
    ```sh
    npm run build
    ```

7. Configure your web server:

   - Set the document root to the `public` directory.
   - Ensure that the `.htaccess` files are correctly configured to handle routing. The provided `.htaccess` files rewrite requests to the `public/index.php` file. 
