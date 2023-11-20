<?php
$ds = DIRECTORY_SEPARATOR;  //1

$storeFolder = 'uploads';   //2

if (!empty($_FILES)) {
    
    $tempFile = $_FILES['file']['tmp_name'];           //3                   
    
    $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;  //4
    
    $targetFile = $targetPath . $_FILES['file']['name'];  //5

    // Check if the file was uploaded via POST request
    if (is_uploaded_file($tempFile)) {
        // Move the uploaded file to the desired location
        if (move_uploaded_file($tempFile, $targetFile)) {
            echo 'File successfully uploaded.';
        } else {
            echo 'Error moving the file.';
        }
    } else {
        echo 'Error: File not uploaded via POST request.';
    }
}
?>
