<!DOCTYPE html>
<?php 

include "admin/connection.php" ;

session_start();

$_SESSION['fname']=$fn;

?>

<?php 

// $_SESSION['fname'] = $fn;

// echo "Session Is Set";

?>
<html lang="en">
<head>
    <title>Registration Form | HJ Electronics </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #B0BEC5;
    background-repeat: no-repeat
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px
}

.card2 {
    margin: 0px 40px
}

.logo {
    width: 150px;
    height: 90px;
    margin-top: 20px;
    margin-left: 35px

}

.image {
    width: 500px;
    height: 280px;
    margin-top: 100px;
}

.border-line {
    border-right: 1px solid #EEEEEE
}

.facebook {
    background-color: #3b5998;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.twitter {
    background-color: #1DA1F2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.linkedin {
    background-color: #2867B2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.line {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px
}
.lines {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px;
    margin-left: 50px;
}

.or {
    width: 10%;
    font-weight: bold
}

.text-sm {
    font-size: 14px !important
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

a {
    color: inherit;
    cursor: pointer
}

.btn-blue {
    background-color: #1A237E;
    width: 150px;
    color: #fff;
    border-radius: 2px
}

.btn-blue:hover {
    background-color: green;
    cursor: pointer
    text-color:white;
}

.bg-blue {
    color: #fff;
    background-color: #1A237E
}

@media screen and (max-width: 991px) {
    .logo {
        margin-left: 0px
    }

    .image {
        width: 300px;
        height: 220px
    }

    .border-line {
        border-right: none
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px
    }
}
.col {
  /*float: left;
  width: 50%;
  margin: 30px;
  padding: 0 50px;
  margin-top: 6px;*/
}
.fb {
  background-color: #3B5998;
  color: white;
  margin-bottom: 30px;
  width: 300px;
}

/*.twitter {
  background-color: #55ACEE;
  color: white;
}*/

.google {
  background-color: #dd4b39;
  color: white;
  width: 300px;
  margin-bottom: 30px;
}
.s{
  background-color: #55ACEE;
  color: white;
  margin-bottom: 30px;
  width: 300px;
}

</style>
<body>
<body id="myId"> 
  <form method="POST">  
 <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <!-- <img src="images/logo.jpg" class="logo"> --></div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="images/HJ.png" class="image"> </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                    <h6 class="" style="margin-bottom: 20px;" align="center">Sign in with</h6>
                    <div class="row ">
                        <div class="col" align="center">
                           <a href="#" class="fb btn">
                              <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                           </a><br>
                           <a href="" class="btn s">
                              <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                           </a><br>
                           <a href="" class="google btn">
                              <i class="fa fa-google fa-fw"></i> Login with Google+ 
                           </a><br>
                           <a href="" class="fb btn">
                              <i class="fa fa-linkedin"></i> Login with Linkedin 
                           </a>
                        </div>
                    </div>

                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                        <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                        </div>
                        <div class="twitter text-center mr-3">
                            <div class="fa fa-twitter"></div>
                        </div>
                        <div class="linkedin text-center mr-3">
                            <div class="fa fa-linkedin"></div>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">First Name</h6>
                        </label> <input class="mb-4" type="text" name="fname" placeholder="Enter a valid Fist Name" required>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Last Name</h6>
                        </label> <input class="mb-4" type="text" name="lname" placeholder="Enter a valid Last Name"required>
                    </div>    
                    <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4" type="email" name="email" placeholder="Enter a valid email address"required>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="pass" placeholder="Enter password"required>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Mobile Number</h6>
                        </label> <input class="mb-4" type="text" name="mob" placeholder="Enter a valid Mobile Number"required>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Address</h6>
                        </label> <input class="mb-4" type="text" name="add" placeholder="Enter a valid address"required>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Location</h6>
                        </label> <input class="mb-4" type="text" name="loc" placeholder="Enter a valid Location"required>
                    </div>    
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" name="submit" class="btn btn-blue" onclick="msg()">Register</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Already have an account? <a class="text-danger" href="login.php">Log In</a></small> </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div> 
</form>                                   
</body>

<?php

include "admin/connection.php";


if (isset($_POST['submit'])) {
    $fn = $_POST['fname'];
    $ln = $_POST['lname'];
    $e = $_POST['email'];
    $p = $_POST['pass'];
    $m = $_POST['mob'];
    $a = $_POST['add'];
    $c = $_POST['loc'];

$_SESSION['fname'] = $fn;

    $sql = "INSERT INTO user_login(first_name,last_name,email,password,mob,address,city) VALUES('$fn','$ln','$e','$p','$m','$a','$c')";
    $result = mysqli_query($conn,$sql);

    // $_SESSION['fname'] = $fn;
    
    echo "<script>location.href='login.php?r=".$p."'</script>";

    $_SESSION['fname'] = $fn;

}
else{
    echo "<script>alert('DataNot Enter')";
}


?>
<script type="text/javascript">
    function msg(){
        alert("Registration Process Complete");
    }
</script>

</html>