<!DOCTYPE html>
<html>
<head>
    <title>String Length Comparison</title>
</head>
<body>
    <h2>Compare String Lengths</h2>
    <form method="post">
        <label for="string1">First String:</label><br>
        <input type="text" id="string1" name="string1" required><br><br>

        <label for="string2">Second String:</label><br>
        <input type="text" id="string2" name="string2" required><br><br>

        <input type="submit" value="Compare Lengths">
    </form>

    <?php
    function areLengthsEqual($str1, $str2) {
        return strlen($str1) === strlen($str2);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string1 = $_POST["string1"];
        $string2 = $_POST["string2"];
        $result = areLengthsEqual($string1, $string2);

        echo "<h3>Result:</h3>";
        echo $result ? "✅ The strings have equal length." : "❌ The strings have different lengths.";
    }
    ?>
</body>
</html>