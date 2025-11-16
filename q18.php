<!DOCTYPE html>
<html>
<head>
    <title>Absolute Difference Calculator</title>
</head>
<body>
    <h2>Calculate Absolute Difference from 51</h2>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    function computeDifference($n) {
        $diff = abs($n - 51);
        return ($n > 51) ? $diff * 3 : $diff;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = (int)$_POST["number"];
        $result = computeDifference($n);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>