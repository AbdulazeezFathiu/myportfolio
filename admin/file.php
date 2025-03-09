<?php
include ('connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $projectname = $_POST['name'];
 $description = $_POST['description'];
 $category = $_POST['category'];
 $client = $_POST['client'];
 $projecturl = $_POST['url'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
/* $uploadOk = 1; */
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is a real image or fake image
/* if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
} */

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
$allowed_types = array("jpg", "png", "jpeg", "gif", "pdf", "doc", "docx");
if (!in_array($fileType, $allowed_types)) {
    echo "Sorry, only JPG, JPEG, PNG, GIF, PDF, DOC, & DOCX files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
        // Save file info to database
       include ('connect.php');
        $name = basename($_FILES["fileToUpload"]["name"]);
        $path = $target_file;
        $type = $fileType;
        $size = $_FILES["fileToUpload"]["size"];
        
        $sql = "INSERT INTO project (Projectname, Descriptionn, Category, Client, Projecturl, Imagee) VALUES ('$projectname', '$description', '$category' , '$client' , '$projecturl', '$path' )";
        if ($conn->query($sql) === TRUE) {
            echo "The file ". htmlspecialchars($name). " has been uploaded and saved to the database.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }}
}
?>
