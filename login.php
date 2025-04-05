<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IN453 Login</title>
    <style>
        body {
            background: #f2f4f8;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #003366;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #003366;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0059b3;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>IN453 Secure Login</h2>
        <form method="post" action="authenticate.php">
            <label>Server</label>
            <input type="text" name="server" value="localhost" required>

            <label>Database</label>
            <input type="text" name="database" value="IN453" required>

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <input type="submit" value="Login">
        </form>
        <div class="footer">
            © 2025 Sedjro Tovihouande | IN453
        </div>
    </div>
</body>
</html>