<!DOCTYPE html>
<?php 
include "admin/connection.php";

session_start();

?>
<html lang="en">
<head>
    <title>Login Form | HJ Electronics </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
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
                      <h6 class="mb-0 text-sm">Email Address</h6>
                      </label> <input class="mb-4" type="email" name="email" placeholder="Enter a valid email address" required>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                      <h6 class="mb-0 text-sm">Password</h6>
                      </label> <input type="password" name="pass" placeholder="Enter password" required>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"><button type="submit" name="submit" class="btn btn-blue" onclick="msg()">Login</button> </div>
                    <div class="row mb-4 px-3"><small class="font-weight-bold">Don't have an account? <a class="text-danger " href="register.php">Register</a></small> </div>
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
    $e = $_POST['email'];
    $p = $_POST['pass'];

     $_SESSION['email']=$e;

    if (empty($e) || empty($p)) {
        echo "<script> alert('Please Fill Username And Password')</script>";
    }
    else{
        $sql = "select * from user_login where email='$e' and password='$p' ";
        $result = mysqli_query($conn,$sql);

        if ($r = mysqli_fetch_array($result)) {
            $dbStoredPASSWORD = $row['p'];
            $_SESSION['id'] = $r['id'];
            $id = $_SESSION['id'];
            echo "Login Successfully";

            // if (password_verify ($p, $dbStoredPASSWORD)) {
            //      $_SESSION['customer'] = $e;
            //      echo "<script>location.href='checkout.php'</script>";
            //   } else {
            //     echo "<script>location.href='login.php'</script>";
            // //    $message =  'incorrect Credentials';
            //   }
            
            $_SESSION['customer'] = $e;

            $_SESSION['pass'] = $p;

            $_SESSION['email'] = $e;

            $_SESSION['fname'] = $fn;

            echo "<script>location.href='checkout.php'</script>";

        }
        else{
            echo "<script>alert('Incorrect Username OR Password')";
        }

        // $ipaddress = $_SERVER['REMOTE_ADDR'];

        date_default_timezone_set('Asia/kolkata');
        $current_time = date('d-m-Y h:i:s, A', time());

        $sql1= "INSERT INTO user_log(user_email,login_time) VALUES('$e','$current_time')";
        $result1 = mysqli_query($conn,$sql1);
    }
  
}

?>

<script type="text/javascript">
    function msg(){
        alert("Login Successfully");
    }
</script>


</html>