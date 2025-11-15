<!DOCTYPE html>
<html>
<head>
  <title>Circle Area Calculator</title>
</head>
<body>
  <h2>Calculate Area of a Circle</h2>
  <form method="post">
    Enter Radius: <input type="number" name="radius" step="0.01" required>
    <input type="submit" value="Calculate">
  </form>

  <?php
  // Define PI as a constant
  define("PI", 3.14159);

  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST["radius"];
    $area = PI * $radius * $radius;

    echo "<h3>Result:</h3>";
    echo "Radius: $radius<br>";
    echo "Area of the circle: $area";
  }
  ?>
</body>
</html>