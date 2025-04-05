<?php
session_start();
// 🚫 Block access if not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
require_once "Business.php";

// Use session credentials
$host = $_SESSION['server'];
$database = $_SESSION['database'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];

// Initialize outputs
$rowA = null;
$rowC = null;
$names = [];

try {
    $business = new Business($host, $username, $password, $database);

    // Control access logic
    if ($username === "IN453A") {
        $rowA = $business->getRowCountA();
        $rowC = $business->getRowCountC();
        $names = $business->getAllFullNamesFromB();
    } elseif ($username === "IN453B") {
        $names = $business->getAllFullNamesFromB();
    } elseif ($username === "IN453C") {
        $rowC = $business->getRowCountC();
    }

} catch (Exception $e) {
    die("Login Failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IN453 Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            background: #ffffff;
            border-radius: 10px;
            padding: 30px;
            max-width: 800px;
            margin: auto;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #003366;
            text-align: center;
            margin-bottom: 20px;
        }

        p, ul {
            font-size: 16px;
            line-height: 1.6;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 5px;
        }

        .section {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .note {
            font-size: 14px;
            color: #777;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?></h2>
        <div style="text-align: right;">
            <form action="logout.php" method="post">
                <input type="submit" value="Logout" style="background-color: #cc0000; color: white; padding: 8px 12px; border: none; border-radius: 6px; cursor: pointer;">
            </form>
        </div>

        <?php if ($rowA !== null): ?>
            <div class="section">
                <p><strong>Rows in IN453A:</strong> <?php echo $rowA; ?></p>
            </div>
        <?php endif; ?>

        <?php if ($rowC !== null): ?>
            <div class="section">
                <p><strong>Rows in IN453C:</strong> <?php echo $rowC; ?></p>
            </div>
        <?php endif; ?>

        <?php if (!empty($names)): ?>
            <div class="section">
                <p><strong>Names from IN453B:</strong></p>
                <ul>
                    <?php foreach ($names as $name): ?>
                        <li><?php echo htmlspecialchars($name); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="note">
            Data displayed based on access level of: <strong><?php echo htmlspecialchars($username); ?></strong>
        </div>
    </div>
</body>
</html>