# IN453 Unit 3 - Secure Data Access Application
**Author:** SGT Sedjro Tovihouande  
**Course:** IN453 – Advanced Software Development Using PHP and JavaScript  
**Project:** Unit 3 - Data Access Application (Part 2)

## 🔐 Project Summary
This web application demonstrates the use of layered architecture and secure role-based access control using PHP and MySQL. The application builds on a previously developed N-tier system and adds database user roles, credential-based login, and table-level security.

## 🧩 Features
- Login form captures dynamic connection info (server, DB, username, password)
- Business layer processes user access based on MySQL roles
- IN453A, IN453B, and IN453C users have distinct permissions:
  - `IN453A`: Can view all three tables
  - `IN453B`: Can only view names from `IN453B`
  - `IN453C`: Can only view row count from `IN453C`
- Secure error handling for invalid logins

## 📂 Folder Contents
- `login.php`: Entry point login form
- `dashboard.php`: Main output page with conditional content
- `Business.php`: Business logic layer
- `Database.php`: Data access layer
- `IN453_Unit3_SedjroTovihouande.SQL`: SQL script to create and grant roles
- `README.md`: This file

## 🧪 Tested Logins
| Username  | Password       | Access Description                     |
|-----------|----------------|----------------------------------------|
| IN453A    | PasswordA123!   | Full access to all tables              |
| IN453B    | PasswordB123!   | Access to IN453B only (names)          |
| IN453C    | PasswordC123!   | Access to IN453C only (row count)      |

## 📦 Instructions
1. Place files in `htdocs/IN453AppUnit3`
2. Start Apache via XAMPP
3. Access `http://localhost/IN453AppUnit3/login.php`
4. Use credentials above to test each role