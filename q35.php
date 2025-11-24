<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest Calculator</title>
</head>
<body>
    <h2>Simple Interest Calculator</h2>
    <form method="post">
        <label for="principal">Principal Amount:</label>
        <input type="number" name="principal" id="principal" required><br><br>

        <label for="rate">Rate of Interest (% per annum):</label>
        <input type="number" name="rate" id="rate" step="0.01" required><br><br>

        <label for="time">Time (in years):</label>
        <input type="number" name="time" id="time" required><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $principal = $_POST['principal'];
        $rate = $_POST['rate'];
        $time = $_POST['time'];

        // Formula: SI = (P * R * T) / 100
        $simple_interest = ($principal * $rate * $time) / 100;

        echo "<h3>Result:</h3>";
        echo "Principal: $principal <br>";
        echo "Rate of Interest: $rate % <br>";
        echo "Time: $time years <br>";
        echo "<strong>Simple Interest = $simple_interest</strong>";
    }
    ?>
</body>
</html>