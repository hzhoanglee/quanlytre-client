
<?php include 'config.php'; ?>
<?php
//database connection
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Register to Weelux.io</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

                        <form method="post" action="" name="register" class="pt-2">
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="Enter your username" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname">First Name</label>
                                <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter your first name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fullname">Last Name</label>
                                <input class="form-control" type="text" id="fullname" name="lname" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input class="form-control" type="email" id="email" name="email" required placeholder="Enter your email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required id="password" placeholder="Enter your password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="country">Country</label>
                                <input class="form-control" type="text" id="country" name="country" placeholder="Enter your country" required>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-success btn-block" name="register" type="submit"> Sign Up </button>
                            </div>

                        </form>

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted mb-0">Already have account?  <a href="login.php" class="text-dark ml-1"><b>Sign In</b></a></p>
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
  if(isset($_POST['register']))
  {
   //geting the values from user input form index
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $username=$_POST['username'];
   $password=md5(md5($_POST['password']));
   $country=$_POST['country'];
    //quary
   if ($db->query("INSERT INTO users
    (username,email,fname,lname,country,password)
    VALUES ('$username','$email','$fname','$lname','$country','$password')"))
    print "                                    <div class=\"alert alert-success alert-dismissible bg-white text-success fade show\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        Success
                                    </div>";
	
	else {
		echo '                                    <div class="alert alert-danger alert-dismissible bg-white text-danger fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Error
                                    </div>';
	}
  }
 ?>