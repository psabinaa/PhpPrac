<!DOCTYPE html>
<html>
<head>
  <title>Age in Days Calculator</title>
</head>
<body>
  <h2>Convert Age in Years to Days</h2>
  <form method="post">
    Enter Your Age (in years): <input type="number" name="age" required>
    <input type="submit" value="Convert">
  </form>

  <?php
  // Function to convert age in years to days
  function ageInDays($years) {
    return $years * 365;
  }

  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
    $days = ageInDays($age);

    echo "<h3>Result:</h3>";
    echo "You are approximately $days days old.";
  }
  ?>
</body>
</html>