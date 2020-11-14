<?php   
 session_start();
 include("config.php"); //include the config
?>
<?php
//create database connection
include ('includes/db.php')
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login into Weelux.io Drive</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Login into WeeLux.io Drive" name="description" />
        <meta content="Weelux" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
        </div>
        
        <div class="account-pages w-100 mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <a href="/">
                                        <span><img src="assets/images/logo-dark.png" alt="" height="28"></span>
                                    </a>
                                </div>
    <form action="" method="post" name="login" class="pt-2">

        <div class="form-group mb-3">
            <label for="username">Email address</label>
            <input class="form-control" type="username" id="username" name="username" required=""
                   placeholder="Enter your username">
        </div>

        <div class="form-group mb-3">
            <a href="auth-recoverpassword.html" class="text-muted float-right"><small>Forgot your password?</small></a>
            <label for="password">Password</label>
            <input class="form-control" type="password" required="" name="password" id="password"
                   placeholder="Enter your password">
        </div>

        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
        </div>

        <div class="form-group mb-0 text-center">
            <button class="btn btn-success btn-block" type="submit" name="login"> Log In</button>
        </div>

    </form>

    <div class="row mt-3">
        <div class="col-12 text-center">
            <p class="text-muted mb-0">Don't have an account? <a href="register.php" class="text-dark ml-1"><b>Sign
                        Up</b></a></p>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    </div> <!-- end card-body -->
    </div>
    <!-- end card -->

    </div> <!-- end col -->
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
</div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>
    </html>
    <!-- php quary section -->
    <?php
    $username = "";
    $password = "";
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5(md5($_POST['password']));
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $db->query($query);
        $num_rows = $result->num_rows;
        for ($i = 0; $i < $num_rows; $i++) {
            $row = $result->fetch_row();
        }
        if (($username == $row[1]) && ($password == $row[6])) //checking the username and password if right
        {
            $_SESSION['username'] = $username;
            echo "<script>window.location='/index.php';</script>";
        } else {
            //Header("location:'https://google.com/'");
            echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Wrong Combination
                                    </div>';
        }
}
?>