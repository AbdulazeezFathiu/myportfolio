
<?php
include ('connect.php');

  if (isset($_POST['submit']))
   {
      $projectname = $_POST['projectname'];
      $description = $_POST['description'];
      $image = $_POST['image'];
      
      
    $stmt = "INSERT INTO project (Projectname, 'Description', 'Image') VALUES ('$projectname', '$description', '$image')";
    mysqli_query($conn, $stmt);
    }
  
/*   include ('connect.php'); */

/* if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image["name"]);
    move_uploaded_file($image["tmp_name"], $target_file);

    $sql = "INSERT INTO project (name, description, image) VALUES ('$name', '$description', '$target_file')";

    if ($conn->query($sql) === TRUE) {
        echo "New project uploaded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} */
?>