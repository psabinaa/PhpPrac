<!DOCTYPE html>
<html>
<head>
    <title>Find Largest Number</title>
</head>
<body>
    <h2>Check the Largest of Three Numbers</h2>
    <form method="post">
        <label for="num1">Enter first number:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Enter second number:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="num3">Enter third number:</label>
        <input type="number" name="num3" id="num3" required><br><br>

        <input type="submit" name="submit" value="Find Largest">
    </form>

    <?php
    function findLargest($a, $b, $c) {
        return max($a, $b, $c);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = (int)$_POST["num1"];
        $num2 = (int)$_POST["num2"];
        $num3 = (int)$_POST["num3"];

        $largest = findLargest($num1, $num2, $num3);
        echo "<h3>The largest number is: $largest</h3>";
    }
    ?>
</body>
</html>