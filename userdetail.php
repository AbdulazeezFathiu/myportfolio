<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User <details></details></title>
</head>
<body>
    
<div class="container">
                <table>
                    <th>
                        <td>SN FIRSTNAME</td>
                        <td>LASTNAME</td>
                        <td>EMAIL</td>
                        <td>PASSWORD</td>
                        
                    </th>

                    <?php

                    include('connect.php');
                    $sql = "SELECT * FROM register";
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_array($result)){
                            ?>
                                <tr>
                                    <td> <?php echo $row['S/N'] ?> </td>
                                    <td> <?php echo $row['FirstName'] ?> </td>
                                    <td> <?php echo $row['LastName'] ?> </td>
                                    <td> <?php echo $row['Email'] ?> </td>
                                    
                                    <td> <?php
                                    if (password_verify($password, $hashed_password)) {
                                       
                                        echo $row['Password']; }
                                    ?> </td> 
                                </tr>
                            <?php
                        }
                    }
                    ?>
</table>
</div>


</body>
</html>