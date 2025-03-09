<!DOCTYPE html>
<html>
<head>
    <title>Display Images</title>
</head>
<body>
    <h1>Uploaded Images</h1>
    <div>
        <?php
        // Database connection
        include ('connect.php');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch image data
        $sql = "SELECT  Imagee FROM project ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<img src='" . $row["Imagee"] . "' style='max-width: 200px; max-height: 200px;'/>";
               
                echo "</div>";
            }
        } else {
            echo "No images found.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
