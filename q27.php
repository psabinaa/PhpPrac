<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="submit" value="Login">
    </form>

    <?php
    // Predefined credentials (for demonstration)
    $validUsername = "admin";
    $validPassword = "12345";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === $validUsername && $password === $validPassword) {
            echo "<h3 style='color:green;'>Login successful! Welcome, $username.</h3>";
        } else {
            echo "<h3 style='color:red;'>Invalid username or password.</h3>";
        }
    }
    ?>
</body>
</html>