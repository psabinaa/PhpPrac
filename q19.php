<!DOCTYPE html>
<html>
<head>
    <title>'if' Prefix Checker</title>
</head>
<body>
    <h2>Add 'if' to the Front of a String</h2>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" name="inputString" id="inputString" required><br><br>
        <input type="submit" name="submit" value="Process">
    </form>

    <?php
    function addIfPrefix($str) {
        // Trim leading spaces and check if it starts with 'if'
        return (substr(trim($str), 0, 2) === "if") ? $str : "if " . $str;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["inputString"];
        $result = addIfPrefix($input);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>