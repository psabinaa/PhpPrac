<?php
$err = [];
$username = "";
$email = "";
$dob = "";
$phone = "";
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Username validation
    if (isset($_POST['username']) && !empty(trim($_POST['username']))) {
        $username = trim($_POST['username']);
        if (strlen($username) < 8) {
            $err['username'] = "Error: Username must be at least 8 characters.";
        }
    } else {
        $err['username'] = "Error: Please enter a username.";
    }

    // Email validation
    if (isset($_POST['email']) && !empty(trim($_POST['email']))) {
        $email = trim($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err['email'] = "Error: Please enter a valid email address.";
        }
    } else {
        $err['email'] = "Error: Please enter your email.";
    }

    // DOB validation
    if (isset($_POST['dob']) && !empty(trim($_POST['dob']))) {
        $dob = trim($_POST['dob']);
        $dobCheck = DateTime::createFromFormat('Y-m-d', $dob);
        if (!$dobCheck || $dobCheck->format('Y-m-d') !== $dob) {
            $err['dob'] = "Error: Please enter a valid date of birth.";
        }
    } else {
        $err['dob'] = "Error: Please enter your date of birth.";
    }

    // Phone validation
    if (isset($_POST['phone']) && !empty(trim($_POST['phone']))) {
        $phone = trim($_POST['phone']);
        if (!ctype_digit($phone) || strlen($phone) != 10) {
            $err['phone'] = "Error: Phone number must be exactly 10 digits.";
        }
    } else {
        $err['phone'] = "Error: Please enter your phone number.";
    }

    // If no errors, simulate storing
    if (empty($err)) {
        $result = "User registered successfully!<br>
                   Username: $username <br>
                   Email: $email <br>
                   DOB: $dob <br>
                   Phone: $phone";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration Form</h2>

<form method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" value="<?php echo isset($username) ? $username : ''; ?>" />
                <?php echo isset($err['username']) ? $err['username'] : ''; ?>
            <br />
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="<?php echo isset($email) ? $email : ''; ?>" />
                <?php echo isset($err['email']) ? $err['email'] : ''; ?>
            <br />
                <label for="dob">DOB:</label>
                <input type="date" name="dob" id="dob" value="<?php echo isset($dob) ? $dob : ''; ?>" />
                <?php echo isset($err['dob']) ? $err['dob'] : ''; ?>
            <br />
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" value="<?php echo isset($phone) ? $phone : ''; ?>" />
                <?php echo isset($err['phone']) ? $err['phone'] : ''; ?>
           <br />
                <br><input type="submit" value="Register">
         
</form>

<?php
if (!empty($result)) {
    echo "<h3>$result</h3>";
}
?>

</body>
</html>
