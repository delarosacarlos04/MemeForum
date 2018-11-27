<?php

// Makes a file named after the person's username and stores it as a '.jpg'

$target_dir = "images/";
$username = $_COOKIE["username"];
$target_file = $target_dir . $_FILES["fileToUpload"]["name"] . ".jpg";
//var_dump($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image, returns message

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size, returns error message

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain image file formats, returns error message

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo $target_file;
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error, returns error message

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// Check if file already exists, if so, overwrite, else, return error message

if (file_exists($target_file)) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". $_FILES["fileToUpload"]["name"] . " has been uploaded.";
    } else {
        echo "Sorry, there was an error overwriting your file.";
    }
}

// If $uploadOk == 1, try to upload file, else, return error message

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". $_FILES["fileToUpload"]["name"] . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Redirect back to main page
header("Location:index.html");
?>
