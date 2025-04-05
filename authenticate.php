<?php
session_start();
require_once "Business.php";

// Grab login input
$host = $_POST['server'] ?? '';
$database = $_POST['database'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

try {
    // Just test the connection
    $business = new Business($host, $username, $password, $database);

    // Save login to session
    $_SESSION['server'] = $host;
    $_SESSION['database'] = $database;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    // Redirect to dashboard
    header("Location: dashboard.php");
    exit;

} catch (Exception $e) {
    echo "<p style='color:red;'>Login Failed: Invalid credentials or insufficient access.</p>";
    echo "<p><a href='login.php'>Back to login</a></p>";
    exit;
}