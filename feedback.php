<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
</head>
<body>
    
<div class="container">
                <table>
                    <th>
                        <td>SN NAME</td>
                        
                        <td>EMAIL</td>
                        <td>SUBJECT</td>
                        <td>MESSAGE</td>
                        <td>TIME-STAMP</td>
                    </th>

                    <?php

                    include('connect.php');
                    $sql = "SELECT * FROM contact";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_array($result)){
                            ?>
                                <tr>
                                    <td> <?php echo $row['SN'] ?> </td>
                                    <td> <?php echo $row['Namee'] ?> </td>
                                    <td> <?php echo $row['Email'] ?> </td>
                                    <td> <?php echo $row['Subjectt'] ?> </td>
                                    <td> <?php echo $row['Messagee'] ?> </td>
                                    <td> <?php echo $row['created_at'] ?> </td>
                                </tr>
                            <?php
                        }
                    }
                    ?>
</table>
</div>


</body>
</html>