<!DOCTYPE html>
<?php 
include "admin/connection.php";

session_start();

if(!isset($_SESSION['customer']) && empty($_SESSION['customer']) && empty($_SESSION['fname'])){
 header('location:login.php');
}
?>
<html>
<head>
	<title></title>
	<title>Checkout | HJ Electronics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo.jpg">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	.row {
	  display: -ms-flexbox; /* IE10 */
	  display: flex;
	  -ms-flex-wrap: wrap; /* IE10 */
	  flex-wrap: wrap;
	  margin: 0 -16px;
	}

	.col-25 {
	  -ms-flex: 25%; /* IE10 */
	  flex: 25%;
	}

	.col-50 {
	  -ms-flex: 50%; /* IE10 */
	  flex: 50%;
	}

	.col-75 {
	  -ms-flex: 75%; /* IE10 */
	  flex: 75%;
	}

	.col-25,
	.col-50,
	.col-75 {
	  padding: 0 16px;
	}

	.container {
	  background-color: #f2f2f2;
	  padding: 5px 20px 15px 20px;
	  border: 1px solid lightgrey;
	  border-radius: 3px;
	}

	input[type=text] {
	  width: 100%;
	  margin-bottom: 20px;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 3px;
	}

	label {
	  margin-bottom: 10px;
	  display: block;
	}

	.icon-container {
	  margin-bottom: 20px;
	  padding: 7px 0;
	  font-size: 24px;
	}

	.btn {
	  /*background-color: #04AA6D;*/
	  color: white;
	  padding: 12px;
	  margin: 10px 0;
	  border: none;
	  width: 100%;
	  border-radius: 3px;
	  cursor: pointer;
	  font-size: 17px;
	}

	.btn:hover {
	  /*background-color: #45a049;*/
	}

	a {
	  color: #2196F3;
	}

	hr {
	  border: 1px solid lightgrey;
	}

	span.price {
	  float: right;
	  color: grey;
	}
	@media (max-width: 800px) {
	  .row {
	    flex-direction: column-reverse;
	  }
	  .col-25 {
	    margin-bottom: 20px;
	  }
	}
	/*side nav*/

	.sidenav {
	  height: 100%;
	  width: 0;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: white;
	  overflow-x: hidden;
	  transition: 0.5s;
	  padding-top: 60px;
	}

	.sidenav a {
	  padding: 8px 8px 8px 32px;
	  text-decoration: none;
	  font-size: 20px;
	  color: #818181;
	  display: block;
	  transition: 0.3s;
	}

	/*.sidenav a:hover {
	  color: #f1f1f1;
	}
	*/
	.sidenav .closebtn {
	  position: absolute;
	  top: 0;
	  right: 25px;
	  font-size: 36px;
	  margin-left: 50px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	.f{
	  color: white;
	  font-size: 22px;
	  cursor: pointer;
	  margin-left: 15px;
	}
	.he i{
	  font-size: 25px;
	  margin-top: 5px;
	  color: white;
	}
	/*footer*/
	.form-control::placeholder {
	    font-size: 0.95rem;
	    /*color: #aaa;*/
	    font-style: italic
	}

	.form-control.shadow-0:focus {
	    box-shadow: none
	}

	.display-3 {
	    font-family: 'Sanchez', serif
	}

	p {
	    font-family: 'Tajawal', sans-serif
	}

	.lead {
	    font-family: 'Sanchez 200', serif
	}
	h6{
	  color: white;
	}
	.jum{
	background-image: url(https://mtziononline.org/wp-content/uploads/2019/11/Credit-Card-Banner-2.jpg);
	background-attachment:fixed;
	height: 300px;
	
}
	.number{
		width:100px; 
	}
</style>
<body>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #EB333C">
	<button class="navbar-toggler"  style="color: black" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon" style="color: black"></span> 
	</button>
	<div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
          	<li class="nav-item"> <a style="color: white;" class="nav-link" data-abc="true"><span style="color: white; cursor:pointer" onclick="openNav()">&#9776; All</span></a>
          	</li>
            <div id="mySidenav" class="sidenav">
              <header class="he" style="background-color: #4F455A; height: 50px;">
                <i class="fa fa-user-circle" aria-hidden="true"> HJ Electronics</i>
              </header>
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="#" style="color: black"><b>Trending</b></a>
              <a href="#">New Releases</a>
              <a href="#">Best Seller</a>
              <a href="#">Discount Offer</a>
              --------------------------------------
              <a href="#" style="color: black"><b>Categories</b></a>
              <a href="#">Electronics</a>
              <a href="#">Fashion</a>
              <a href="#">Furniture</a>
              <a href="#">Books</a>
              <a href="#">Cosmetics</a>
              --------------------------------------
              <a href="#" style="color: black"><b>Help</b></a>
              <a href="#">Sign In</a>
              <a href="#">Contact Us</a>
            </div>
          <li class="nav-item active"> <a style="color: white;" href="index1.php" class="nav-link" href="index1.php" data-abc="true">Home <span class="sr-only">(current)</span></a> 
          </li>
            <?php 
              // foreach ($cat_arr as $key) {
                ?>
                <!-- <li class="nav-item"> <a class="nav-link" style="color: white" href="products.php?id<?php echo $key['id']; ?>" data-abc="true"><?php echo $key['category_name']; ?></a></li> -->
                <?php
              // }
            ?>
            <li class="nav-item"> <a style="color: white;" class="nav-link" href="electronic.php" data-abc="true">Electronics</a> </li>
            <li class="nav-item"> <a style="color: white;" class="nav-link" href="" data-abc="true">Fashion</a> </li>
            <li class="nav-item"> <a style="color: white;" class="nav-link" href="book.php" data-abc="true">Books</a> </li>
            <li class="nav-item"> <a style="color: white;" class="nav-link" href="furniture.php" data-abc="true">Furniture</a> </li>

            <li class="nav-item"> <a style="color: white;" class="nav-link" href="#" data-abc="true">About Us</a> </li>
            <li class="nav-item"> <a style="color: white;" class="nav-link" href="#" data-abc="true">Contact Us</a> </li>

            <li style="margin-left: 490px;">
              <i  class="fa f fa-facebook-square" aria-hidden="true"></i>
              <i  class="fa f fa-instagram" aria-hidden="true"></i>
              <i  class="fa f fa-twitter" aria-hidden="true"></i>
              <i  class="fa f fa-linkedin-square" aria-hidden="true"></i>
              <i  class="fa f fa-youtube-play" aria-hidden="true"></i>
            </li>
        </ul>
    </div>
</nav>

</div>

<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	  document.getElementById("main").style.marginLeft = "250px";
	  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	  document.getElementById("main").style.marginLeft = "0";
	  document.body.style.backgroundColor = "white";
	}
</script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 50px;"> <img src="images/logo.jpg" width="45"> 
  <a class="navbar-brand" href="index1.php"><span style="margin-left: 5px;"> HJ </span> Electronics</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarColor02">
   
    <ul class="navbar-nav" style="margin-left: 800px ;">
      <li class="nav-item">
	      	<div class="dropdown">
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="color: white; ">
          	<?php echo "<b>Welcome</b> ".$_SESSION['email']  ; ?>
          </button>
          <div class="dropdown-menu" style="">
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </div> 
      </li>
      <li class="nav-item" >
          <a class="nav-link harsh" href="" style="color: white; margin-top: 10px; font-size: 20px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php echo count($_SESSION['cart']); ?></a>
      </li>  
    </ul>
  </div>
</nav>


<div class="jumbotron text-center jum" style="margin-bottom:0">
  <!-- <h1 style="margin-left: 300px; color: black">CheckOut Form <br> HJ Electronics</h1>  -->
</div>
<br><br><br>
<form method="POST">
<div class="row">
  <div class="col-75">
    <div class="container">
      
      <h3 align="center" style="margin-bottom: 20px;"><b>Billing Address</b></h3>
        <div class="row">
          <div class="col-50">
            <!-- <h3 align="center">Billing Address</h3> -->
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="name" name="name" placeholder="abc" required>

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="abc@example.com" required>

            <label for="adr"><i class="fa fa-address-card-o"></i> Billing Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>

            <label for="text"><i class="fa fa-phone" aria-hidden="true"></i></i> Contact</label>
            <input type="text" id="contact" name="number" placeholder="1234567890" required>

            <label for="state"><i class="fa fa-globe" aria-hidden="true"></i> Billing State</label>
            <input type="text" id="state" name="state" placeholder="Maharashtra" required>

            <label for="city"><i class="fa fa-institution"></i>Billing City</label>
            <input type="text" id="city" name="city" placeholder="Nagpur" required>

            <label for="zip">Billing Pin Code</label>
            <input type="text" id="zip" name="pin" placeholder="10001" required>
          </div>

          <div class="col-50">
            <!-- <h3>Billing Address</h3> -->
            <label for="fname"><i class="fa fa-address-book" aria-hidden="true"></i> Shipping Address</label>
            <input type="text" id="fname" name="shipadr" placeholder="543 w. 20th Street" required>

            <label for="state"><i class="fa fa-globe" aria-hidden="true"></i> Shipping State</label>
            <input type="text" id="state" name="shipstate" placeholder="Maharashtra" required>

            <label for="city"><i class="fa fa-institution"></i>Shipping City</label>
            <input type="text" id="city" name="shipcity" placeholder="Nagpur" required>

            <label for="zip">Shipping Pin Code</label>
            <input type="text" id="zip" name="shippin" placeholder="10001" required>
          </div>
      </div>
        
      
    </div>
  </div>

  <div class="col-25" style="margin-top: 10px;">	
    <div class="container">
    	<h3><center><b>Your Order</b></center></h3>
    	<h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart" style="color: black;"></i> <b><?php echo count($_SESSION['cart']); ?> </b></span></h4>
		<?php
		//initialize total
		$total = 0;
		if(!empty($_SESSION['cart'])){
		//connection
		 include "admin/connection.php"; 

		//create array of initail qty which is 1
		$index = 0;
		if(!isset($_SESSION['qty_array'])){
		  $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
		}
		$sql = "SELECT * FROM product WHERE id IN (".implode(',',$_SESSION['cart']).")";
		$result = mysqli_query($conn ,$sql);
		    while($row = mysqli_fetch_array($result)){
		?>      	
      <h5><?php echo $row['company']; ?><span class="price" style="color:black"> Price </b></span></h5>
      <p>
      	<a href=""><img src="images/<?php echo $row['img1']; ?>" width="80"></a><a href="#">
      	<input name="product_name" value="<?php echo $row['product_name']; ?>"></a>
      	<input type="aria-hidden" style="width: 60px;" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty"> 
      	<span class="price"><input type="hidden" name="" value="<?php echo number_format($row['discount'], 2); ?>">
      	</span>
      </p>
      <hr style="margin-top: 30px;">
 
      <!-- <p>Total <span class="price" style="color:black"><b><?php echo number_format($_SESSION['qty_array'][$index]*$row['discount'], 2); ?></b></span></p>
      <?php $total += $_SESSION['qty_array'][$index]*$row['discount']; ?> -->
		<?php
		$index ++;
		}
		}
		?> 
	<p>Total : <b style="margin-left: 900px;"><input class="number" name="price" value="<?php echo number_format($total, 2); ?>"></b></p>           
    </div>    
  </div>
</div>
<button name="submit" value="" class="btn btn-danger">Continue to checkout</button>
</form>
<br><br><br>

<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$e = $_POST['email'];
	$a = $_POST['address'];
	$n = $_POST['number'];
	$s = $_POST['state'];
	$c = $_POST['city'];
	$p = $_POST['pin'];

	$a1 = $_POST['shipadr'];
	$s1 = $_POST['shipstate'];
	$c1 = $_POST['shipcity'];
	$p1 = $_POST['shippin'];

	$product = $_POST['product_name'];
	$qty = $_POST['qty'];
	$total = $_POST['price'];



	date_default_timezone_set('Asia/kolkata');
	$current_time = date('d-m-Y h:i:s, A', time());

	$sql = "INSERT INTO user_data(name,email,contact,shipping_address,shipping_state,shipping_city,shipping_pincode,billing_address,billing_state,billing_city,billing_pincode,product_name,qty,total_amount,register_date) VALUES('$name','$e','$n','$a1','$s1','$c1','$p1','$a','$s','$c','$p','$product','$qty','$total','$current_time')";

	$result = mysqli_query($conn,$sql);

	echo "<script>location.href='rough.php';</script>";
}

else {
	// echo "Please Enter The Data";
}

?>


<!-- payment api -->
<!-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_vbuYbVuv1KrHn7",
    "amount": (100*100), // 2000 paise = INR 20
    "name": "HJ Electronics",
    "description": "Payment Proccess",
    "image": "https://localhost/Project1/images/logo.jpg",
    "handler": function (response){
          $.ajax({
            url: 'http://localhost/razorpay/payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'http://localhost/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script> -->


<footer class="" style="background-color: black;">
     <div class="container py-5" style="background-color: black;">
         <div class="row py-3">
             <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                 <h6 class="text-uppercase font-weight-bold mb-4">About</h6>
                 <ul class="list-unstyled mb-0">
                     <li class="mb-2"><a href="#" class="text-muted">Contact Us</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">About Us</a></li>
                 </ul>
             </div>
             <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                 <h6 class="text-uppercase font-weight-bold mb-4">Category</h6>
                 <ul class="list-unstyled mb-0">
                     <li class="mb-2"><a href="#" class="text-muted">Electronics</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Fashion</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Furniture</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Books</a></li>
                 </ul>
             </div>
             <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                 <h6 class="text-uppercase font-weight-bold mb-4">Policy</h6>
                 <ul class="list-unstyled mb-0">
                     <li class="mb-2"><a href="#" class="text-muted">Return Policy</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Terms Of Use</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Security</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Privacy</a></li>
                 </ul>
             </div>
             <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                 <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
                 <ul class="list-unstyled mb-0">
                     <li class="mb-2"><a href="#" class="text-muted">Login</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Register</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Sitemap</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Our Products</a></li>
                 </ul>
             </div>
             <div class="col-lg-4 col-md-6 mb-lg-0">
                 <h6 class="text-uppercase font-weight-bold mb-4">Registered Office Address</h6>
                 <p class="text-muted mb-4">Here , write the complete address of the Registered office address along with telephone number.</p>
                 <ul class="list-inline mt-4">
                     <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fab fa-2x fa-twitter"></i></a></li>
                     <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fab fa-2x fa-facebook-f"></i></a></li>
                     <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fab fa-2x fa-instagram"></i></a></li>
                     <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fab fa-2x fa-youtube"></i></a></li>
                     <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fab fa-2x fa-google"></i></a></li>
                     <li style="margin-top: 20px;"><img src="images/payment.png" alt=""></li>
                 </ul>
             </div>
         </div>
     </div>
     <hr class="p-0 m-0 b-0">
     <div class="bg-light py-2">
         <div class="container text-center">
             <p class="text-muted mb-0 py-2">© 2021 HJ Electronics All risghts reserved.</p>
         </div>
     </div>
</footer>




</body>
</html>