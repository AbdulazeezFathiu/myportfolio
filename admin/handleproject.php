<?php


/* include ('connect.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image["name"]);
    move_uploaded_file($image["tmp_name"], $target_file);

    $sql = "INSERT INTO projects (name, description, image) VALUES ('$name', '$description', '$target_file')";

    if ($conn->query($sql) === TRUE) {
        echo "New project uploaded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} */
include ('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $projectname = $_POST['name'];
      $description = $_POST['description'];
      if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK)
      {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        /* $uploadOk = 1; */
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Save file info to database
           include ('input.php');
            $image = basename($_FILES["fileToUpload"]["name"]);
}}
      
    $category = $_POST['category'];
      $client = $_POST['client'];
      $projecturl = $_POST['url'];

    
    $sql = "INSERT INTO project (Projectname, Descriptionn, Imagee, Category, Client, Projecturl) VALUES ('$projectname', '$description', '$' , '$category' , '$client' , '$projecturl' )";

    if ($conn->query($sql) === TRUE) {
        echo "New project uploaded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
      
   /*  $stmt = "INSERT INTO project (Projectname, Descriptionn, Imagee) VALUES ('$projectname', '$description', '$image')";
    mysqli_query($conn, $stmt); */
    }
  
?>
