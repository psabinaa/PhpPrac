<!DOCTYPE html>
<html>
<head>
    <title>Wrap with Last Character</title>
</head>
<body>
    <h2>Wrap String with Last Character</h2>
    <form method="post">
        <label for="inputString">Enter a string (length ≥ 1):</label>
        <input type="text" name="inputString" id="inputString" required><br><br>
        <input type="submit" name="submit" value="Transform">
    </form>

    <?php
    function wrapWithLastChar($str) {
        if (strlen($str) < 1) {
            return "Input must be at least 1 character long.";
        }
        $lastChar = substr($str, -1);
        return $lastChar . $str . $lastChar;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["inputString"];
        $result = wrapWithLastChar($input);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>