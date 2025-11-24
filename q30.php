<?php
$err = [];
$result = "";
$profile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_FILES['profile']) && !empty($_FILES['profile']['name']) && trim($_FILES['profile']['name'])) {
        $profile = $_FILES["profile"]["name"];
        $fileName = basename($_FILES["profile"]["name"]);
        $fileSize = $_FILES["profile"]["size"];
        $fileTmp  = $_FILES["profile"]["tmp_name"];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowedTypes = ["png", "jpg", "jpeg"];

      
        if ($fileSize > 512000) {
            $err['profile'] = "Error: File size must be less than 500 KB.";
        }

       
        if (!in_array($fileType, $allowedTypes)) {
            $err['profile'] = "Error: Only PNG and JPEG files are allowed.";
        }

     
        if (empty($err)) {
            $targetDir = "uploads/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            $targetFile = $targetDir . $fileName;

            if (move_uploaded_file($fileTmp, $targetFile)) {
                $result = "Success: The profile image " . htmlspecialchars($fileName) . " has been uploaded.";
            } else {
                $err['profile'] = "Error: There was a problem uploading your profile image.";
            }
        }
    } else {
        $err['profile'] = "Error: Please select an image to upload.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Profile Image</title>
</head>
<body>

<h2>Upload Profile Image</h2>

<form method="post" enctype="multipart/form-data">
    <label for="profile">Choose Image (PNG/JPEG, max 500KB):</label>
    <input type="file" name="profile" id="profile" />
    <?php echo isset($err['profile']) ? $err['profile'] : ''; ?><br><br>

    <input type="submit" value="Upload">
</form>

<?php
if (!empty($result)) {
    echo "<h3>$result</h3>";
}
?>

</body>
</html>
