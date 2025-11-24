<!DOCTYPE html>
<html>
<head>
    <title>Uppercase Last 3 Characters</title>
</head>
<body>
    <h2>Convert Last 3 Characters to Uppercase</h2>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" name="inputString" id="inputString" required><br><br>
        <input type="submit" name="submit" value="Convert">
    </form>

    <?php
    function convertLastThreeToUpper($str) {
        $len = strlen($str);
        if ($len < 3) {
            return strtoupper($str);
        }
        $front = substr($str, 0, $len - 3);
        $lastThree = strtoupper(substr($str, -3));
        return $front . $lastThree;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["inputString"];
        $result = convertLastThreeToUpper($input);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>