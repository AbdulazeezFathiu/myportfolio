<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="login.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="Password" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                
                                                <button type="submit" class="btn btn-primary" id="login" name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                   <!--  <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
 -->
            <?php
            session_set_cookie_params([
                'lifetime' => 0,
                'path' => '/',
                'domain' => '',
                
            ]);
                session_start();
                require_once 'connect.php';
                if (isset($_POST['login']))
                {
                    $email = $_POST['email'];
                    $password = $_POST['Password'];

                /*     include ('connect.php'); */

                   /*  $sql = "SELECT * FROM register WHERE email = '$email' ";
                    $result = mysqli_query($conn, $sql); */

                    $stmt = $conn->prepare("SELECT email, password FROM register WHERE email = '$email'");
                    /* $stmt->bind_param(s, $email); */

                    $stmt->execute();

                    $stmt->store_result();

                    if ($stmt->num_rows > 0) {
                        $stmt->bind_result($email, $hashed_password);
                        $stmt->fetch();

                        if (password_verify($password, $hashed_password)) {
                            $_SESSION['loggedin'] = true;
                             $_SESSION['email'] = $email; 
                            header ("Location: index.php");
                        exit ();
                        } else {
                            echo "Invalid password.";
                        }
                    } else {
                        echo "Email does not exist.";
                    }
                    
                    $stmt->close();
                    $conn->close();
  
                }

            ?> 


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
