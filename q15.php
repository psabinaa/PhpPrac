<!DOCTYPE html>
<html>
<head>
    <title>Array Index Lookup</title>
</head>
<body>
    <h2>Get Value from Array by Index</h2>
    <form method="post">
        <label for="array">Enter array values (comma-separated):</label><br>
        <input type="text" id="array" name="array" required><br><br>

        <label for="index">Enter index (integer):</label><br>
        <input type="number" id="index" name="index" required><br><br>

        <input type="submit" value="Get Value">
    </form>

    <?php
    function getValueAtIndex($index, $array) {
        return isset($array[$index]) ? $array[$index] : "Index out of bounds";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rawArray = $_POST["array"];
        $index = intval($_POST["index"]);

        // Convert comma-separated string to array
        $array = array_map('trim', explode(',', $rawArray));
        $value = getValueAtIndex($index, $array);

        echo "<h3>Result:</h3>";
        echo "🔍 Value at index $index: <strong>$value</strong>";
    }
    ?>
</body>
</html>