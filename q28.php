<?php
session_start();

// Predefined credentials
$validUsername = "admin";
$validPassword = "12345";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $remember = isset($_POST["remember"]);

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION["username"] = $username;

        // Set cookie for 7 days if "Remember Me" is checked
        if ($remember) {
            setcookie("username", $username, time() + (7 * 24 * 60 * 60));
        }

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login with Session & Cookie</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <label><input type="checkbox" name="remember"> Remember Me</label><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>