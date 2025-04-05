<?php
require_once "Business.php";

$host = $_POST['server'];
$database = $_POST['database'];
$username = $_POST['username'];
$password = $_POST['password'];

try {
    $business = new Business($host, $username, $password, $database);

    $rowA = null;
    $rowC = null;
    $names = [];

    // Conditionally load data based on username
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
    echo "<p style='color:red;'>Login Failed: Invalid credentials or insufficient access.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>User Dashboard</title></head>
<body>
<h2>Welcome, <?php echo htmlspecialchars($username); ?></h2>

<?php if ($rowA !== null): ?>
    <p><strong>Rows in IN453A:</strong> <?php echo $rowA; ?></p>
<?php endif; ?>

<?php if ($rowC !== null): ?>
    <p><strong>Rows in IN453C:</strong> <?php echo $rowC; ?></p>
<?php endif; ?>

<?php if (!empty($names)): ?>
    <h3>Names from IN453B:</h3>
    <ul>
        <?php foreach ($names as $name): ?>
            <li><?php echo htmlspecialchars($name); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

    </ul>
</body>
</html>
