<!DOCTYPE html>
<html>
<head>
  <title>Minutes to Seconds Converter</title>
</head>
<body>
  <h2>Convert Minutes to Seconds</h2>
  <form method="post">
    Enter Minutes: <input type="number" name="minutes" required>
    <input type="submit" value="Convert">
  </form>

  <?php
  // Function to convert minutes to seconds
  function convertToSeconds($minutes) {
    return $minutes * 60;
  }

  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $minutes = $_POST["minutes"];
    $seconds = convertToSeconds($minutes);

    echo "<h3>Result:</h3>";
    echo "$minutes minute(s) is equal to $seconds second(s).";
  }
  ?>
</body>
</html>