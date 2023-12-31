<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Quizzard</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/css/util.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
        <!--===============================================================================================-->
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" action="includes/login.inc.php" method="POST">
                    <center><span class="text-danger"><b>
                            <?php
                            if(isset($_GET['error'])){
                                if($_GET['error'] == 1){
                                    echo 'Please fill all fields';
                                } elseif($_GET['error'] == 2){
                                    echo 'Username or Password is wrong';
                                }
                            }
                            ?>
                        </b></span></center>
                        <br>
                        <span class="login100-form-title p-b-43">
                            Login to Quizzard
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="Username is required">
                            <input class="input100" type="text" name="username" />
                            <span class="focus-input100"></span>
                            <span class="label-input100">User Name</span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="pass" />
                            <span class="focus-input100"></span>
                            <span class="label-input100">Password</span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" name="submit_login">
                                Login
                            </button>
                        </div>
                        <br />
                        <div class="text-center">
                            <p class="mb-0">
                                Don't have an account? <a href="signup.php"><b>Sign Up</b></a>
                            </p>
                        </div>
                    </form>

                    <div class="login100-more" style="background-image: url('assets/img/bg-01.gif');"></div>
                </div>
            </div>
        </div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
    </body>
</html>
