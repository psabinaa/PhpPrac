<!DOCTYPE html>
<html>
<head>
    <title>Football Points Calculator</title>
</head>
<body>
    <h2>Football Team Points Calculator</h2>
    <form method="post">
        <label for="wins">Number of Wins:</label>
        <input type="number" name="wins" id="wins" required><br><br>

        <label for="draws">Number of Draws:</label>
        <input type="number" name="draws" id="draws" required><br><br>

        <label for="losses">Number of Losses:</label>
        <input type="number" name="losses" id="losses" required><br><br>

        <input type="submit" name="submit" value="Calculate Points">
    </form>

    <?php
    function calculatePoints($wins, $draws, $losses) {
        return ($wins * 3) + ($draws * 1) + ($losses * 0);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wins = (int)$_POST["wins"];
        $draws = (int)$_POST["draws"];
        $losses = (int)$_POST["losses"];

        $totalPoints = calculatePoints($wins, $draws, $losses);
        echo "<h3>Total Points: $totalPoints</h3>";
    }
    ?>
</body>
</html>