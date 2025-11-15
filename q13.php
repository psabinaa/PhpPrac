<!DOCTYPE html>
<html>
<head>
    <title>Shape Area Calculator</title>
</head>
<body>
    <h2>Calculate Area of a Shape</h2>
    <form method="post">
        <label for="base">Base (decimal):</label><br>
        <input type="number" step="any" id="base" name="base" required><br><br>

        <label for="height">Height (decimal):</label><br>
        <input type="number" step="any" id="height" name="height" required><br><br>

        <label for="shape">Shape:</label><br>
        <select id="shape" name="shape" required>
            <option value="triangle">Triangle</option>
            <option value="parallelogram">Parallelogram</option>
        </select><br><br>

        <input type="submit" value="Calculate Area">
    </form>

    <?php
    function calculateArea($base, $height, $shape) {
        switch (strtolower($shape)) {
            case "triangle":
                return 0.5 * $base * $height;
            case "parallelogram":
                return $base * $height;
            default:
                return null;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = floatval($_POST["base"]);
        $height = floatval($_POST["height"]);
        $shape = $_POST["shape"];
        $area = calculateArea($base, $height, $shape);

        echo "<h3>Result:</h3>";
        if ($area !== null) {
            echo "📐 The area of the $shape is: $area square units.";
        } else {
            echo "⚠️ Invalid shape type selected.";
        }
    }
    ?>
</body>
</html>