<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Folder</title>
</head>
<body>
    <?php
    $folderPath = 'C:\Users\rusel\OneDrive\Desktop\demo';
    ?>

    <p>Click the button to open the folder directory:</p>
    <a href="<?php echo $folderPath; ?>" target="_blank"><button>Open Folder</button></a>
</body>
</html>