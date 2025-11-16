<!DOCTYPE html>
<html>
<head>
    <title>Repeat Front Characters</title>
</head>
<body>
    <h2>Repeat First Two Characters Four Times</h2>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" name="inputString" id="inputString" required><br><br>
        <input type="submit" name="submit" value="Generate">
    </form>

    <?php
    function repeatFrontChars($str) {
        if (strlen($str) < 2) {
            return $str;
        }
        $front = substr($str, 0, 2);
        return str_repeat($front, 4);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["inputString"];
        $result = repeatFrontChars($input);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>