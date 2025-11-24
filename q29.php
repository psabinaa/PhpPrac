<?php
$err = [];
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file is uploaded
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == 0) {
        $fileName = basename($_FILES["cv"]["name"]);
        $fileSize = $_FILES["cv"]["size"];
        $fileTmp  = $_FILES["cv"]["tmp_name"];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

     
        $allowedTypes = ["pdf", "doc", "docx"];

      
        if ($fileSize > 1048576) {
            $err['cv'] = "Error: File size must be less than 1 MB.";
        }

     
        if (!in_array($fileType, $allowedTypes)) {
            $err['cv'] = "Error: Only PDF, DOC, and DOCX files are allowed.";
        }

   
        if (empty($err)) {
            $targetDir = "uploads/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            $targetFile = $targetDir . $fileName;

            if (move_uploaded_file($fileTmp, $targetFile)) {
                $result = "Success: The file " . htmlspecialchars($fileName) . " has been uploaded.";
            } else {
                $err['cv'] = "Error: There was a problem uploading your file.";
            }
        }
    } else {
        $err['cv'] = "Error: Please select a file to upload.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cv</title>
</head>
<body>
    <h2>Upload Your CV</h2>

<form method="post" enctype="multipart/form-data">
    <label for="cv">Choose CV (PDF/DOC/DOCX, max 1MB):</label>
    <input type="file" name="cv" id="cv">
    <?php echo isset($err['cv']) ? $err['cv'] : ""; ?><br><br>

    <input type="submit" value="Upload">
</form>

<?php
if (!empty($result)) {
    echo "<h3>$result</h3>";
}
?>

</body>
</html>
