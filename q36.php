<!DOCTYPE html>
<html>
<head>
    <title>Tax Calculator</title>
</head>
<body>
    <h2>Tax Calculator</h2>
    <form method="post">
        <label for="income">Income Amount:</label>
        <input type="number" name="income" id="income" required><br><br>

        <label for="rate">Tax Rate (%):</label>
        <input type="number" name="rate" id="rate" step="0.01" required><br><br>

        <input type="submit" name="calculate" value="Calculate Tax">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $income = $_POST['income'];
        $rate = $_POST['rate'];

        // Formula: Tax = (Income * Rate) / 100
        $tax = ($income * $rate) / 100;
        $net_income = $income - $tax;

        echo "<h3>Result:</h3>";
        echo "Income: $income <br>";
        echo "Tax Rate: $rate % <br>";
        echo "<strong>Tax = $tax</strong><br>";
        echo "<strong>Net Income after Tax = $net_income</strong>";
    }
    ?>
</body>
</html>