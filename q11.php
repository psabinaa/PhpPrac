<!DOCTYPE html>
<html>
<head>
    <title>Divisibility by 5 Checker</title>
</head>
<body>
    <h2>Check if a Number is Divisible by 5</h2>
    <form method="post">
        <label for="number">Enter an Integer:</label><br>
        <input type="number" id="number" name="number" required><br><br>

        <input type="submit" value="Check">
    </form>

    <?php
    function isDivisibleByFive($number) {
        return $number % 5 === 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        $result = isDivisibleByFive($number);

        echo "<h3>Result:</h3>";
        echo $result ? "✅ $number is divisible by 5." : "❌ $number is not divisible by 5.";
    }
    ?>
</body>
</html>