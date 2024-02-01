<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Files</title>
</head>
<body>
    <?php
    $folderPath = 'C:\xampp_8\htdocs';
    ?>

    <p>Click the button to download files from the folder:</p>
    
    <?php
    // Get a list of files in the folder
    $files = scandir($folderPath);
    
    // Exclude '.' and '..' from the list
    $files = array_diff($files, array('.', '..'));
    
    // Display links for each file
    foreach ($files as $file) {
        $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;
        echo "<a href=\"download.php?file=" . urlencode($filePath) . "\" download>" . $file . "</a><br>";
    }
    ?>

</body>
</html>
