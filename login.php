<!DOCTYPE html>
<html>
<head>
    <title>Login - IN453</title>
</head>
<body>
    <h2>IN453 Login</h2>
    <form method="post" action="dashboard.php">
        <label>Server:</label>
        <input type="text" name="server" value="localhost" required><br>
        <label>Database:</label>
        <input type="text" name="database" value="IN453" required><br>
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>