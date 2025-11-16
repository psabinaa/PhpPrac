<!DOCTYPE html>
<html>
<head>
    <title>Wrap with First 3 Characters</title>
</head>
<body>
    <h2>Wrap String with First 3 Characters</h2>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" name="inputString" id="inputString" required><br><br>
        <input type="submit" name="submit" value="Transform">
    </form>

    <?php
    function wrapWithFirstThree($str) {
        $prefix = (strlen($str) < 3) ? $str : substr($str, 0, 3);
        return $prefix . $str . $prefix;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["inputString"];
        $result = wrapWithFirstThree($input);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>