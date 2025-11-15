<!DOCTYPE html>
<html>
<head>
    <title>Recursive String Length Calculator</title>
</head>
<body>
    <h2>Find the Length of a String (Recursively)</h2>
    <form method="post">
        <label for="inputString">Enter a String:</label><br>
        <input type="text" id="inputString" name="inputString" required><br><br>

        <input type="submit" value="Calculate Length">
    </form>

    <?php
    function recursiveStrLen($str) {
        if ($str === "") {
            return 0;
        }
        return 1 + recursiveStrLen(substr($str, 1));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["inputString"];
        $length = recursiveStrLen($input);

        echo "<h3>Result:</h3>";
        echo "📏 The length of the string \"$input\" is: $length characters.";
    }
    ?>
</body>
</html>