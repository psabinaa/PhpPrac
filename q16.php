<!DOCTYPE html>
<html>
<head>
    <title>Car Calculator</title>
</head>
<body>
    <h2>How Many Cars Are Needed?</h2>
    <form method="post">
        <label for="people">Enter number of people:</label>
        <input type="number" name="people" id="people" required><br><br>
        <input type="submit" name="submit" value="Calculate Cars">
    </form>

    <?php
    function calculateCarsNeeded($people) {
        return ceil($people / 5);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $people = (int)$_POST["people"];
        $cars = calculateCarsNeeded($people);
        echo "<h3>Cars needed: $cars</h3>";
    }
    ?>
</body>
</html>