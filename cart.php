<!DOCTYPE html>
<?php 
session_start();

include "admin/connection.php";

// if(!isset($_SESSION['customer']) && empty($_SESSION['customer']) ){
//  header('location:login.php');
// }

?>
<html>
<head>
	<title>Shopping Cart Page | HJ Electronics</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script> 
</head>

<style>
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
.fa{
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
    color: #aaa;
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
	background-image: url(images/banner2.jpg);
	background-attachment:fixed;
	height: 300px;
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
              <i  class="fa i fa-instagram" aria-hidden="true"></i>
              <i  class="fa t fa-twitter" aria-hidden="true"></i>
              <i  class="fa l fa-linkedin-square" aria-hidden="true"></i>
              <i  class="fa y fa-youtube-play" aria-hidden="true"></i>
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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <img src="images/logo.jpg" width="45"> 
  <a class="navbar-brand" href="index1.php"><span style="margin-left: 5px;"> HJ </span> Electronics</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <form onsubmit="event.preventDefault()" class="form-inline my-2 my-lg-0"> <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width: 700px; "> 
      <button class="btn btn-danger my-2 my-sm-0" type="submit" style="width: 100px;">Search</button> 
      </form>
    </ul>
    <ul class="navbar-nav" >
      <li class="nav-item">
        <div class="dropdown">
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="color: white;">
            Log In | Register
          </button>
          <div class="dropdown-menu" style="">
            <a class="dropdown-item" href="login.php">Log In</a>
            <a class="dropdown-item" href="register.php">Register Here</a>
          </div>
        </div> 
      </li>
      <li class="nav-item" >
          <a class="nav-link harsh" href="rough.php" style="color: white;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php echo count($_SESSION['cart']); ?></a>
      </li>  
    </ul>
  </div>
</nav>

<div class="jumbotron text-center jum" style="margin-bottom:0">
  <h1>Add To Cart</h1>
  
</div>


<div class="container">
  
  <h1 class="page-header text-center"></h1>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <?php 
      if(isset($_SESSION['message'])){
        ?>
        <div class="alert alert-success text-center" style="margin-left: 350px;">
          <?php echo $_SESSION['message']; ?>
        </div>
        <?php
        unset($_SESSION['message']);
      }

      ?>
      <form method="POST" action="save_cart.php">
      <table class="table table-bordered" style="margin-left: 200px;">
        <thead>
          <th></th>
          <th>Product</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </thead>
        <tbody>
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
                <tr>
                  <td>
                    <!-- <a href="delete_item.php?id=<?php echo $row['id']; ?>&index=<?php echo $index; ?>" class="">Remove</a> -->
                  </td>
                  <td><img src="images/<?php echo $row['img1']; ?>" width='100' height="100"></td>
                  <td>
                  	<?php echo $row['product_name']; ?><br>
                  	<a href="delete_item.php?id=<?php echo $row['id']; ?>&index=<?php echo $index; ?>" class="" style="color: #EB333C;" >Remove</a>
                  </td>
                  <td><?php echo number_format($row['discount'], 2); ?></td>
                  <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                  <td><input type="number" style="width: 60px;" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td>
                  <td><?php echo number_format($_SESSION['qty_array'][$index]*$row['discount'], 2); ?></td>
                  <?php $total += $_SESSION['qty_array'][$index]*$row['discount']; ?>
                </tr>
                <?php
                $index ++;
              }
            }
            else{
              ?>
              <tr>
                <td colspan="4" class="text-center">No Item in Cart</td>
              </tr>
              <?php
            }

          ?>
          <tr>
            <td colspan="5" align="right"><b>Total</b></td>
            <td><b><?php echo number_format($total, 2); ?></b></td>
          </tr>
        </tbody>
      </table>
		<div class="container-fluid" style=" margin-top: 50px;">
		   <a href="index1.php" class="btn btn-success">Continue Shopping</a>
		   <!-- <a href="index1.php" class="btn btn-danger"><span class=""></span>Back</a> -->
		   <button type="submit" class="btn btn-success" name="save">Save Changes</button>
		   <a href="clear_cart.php" class="btn btn-success">Clear Cart</a>
		</div>
      </form>

    </div>
  </div>
</div>
<a href="checkout.php" class="btn btn-danger" onclick="msg()" style="margin-left: 840px; width: 400px; ">Checkout</a>


<script>
	// function msg(){
	// 	alert("Please Login Your Account First");
	// }
</script>

<br><br><br>
<footer class="bg-black">
     <div class="container py-5">
         <div class="row py-3">
             <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                 <h6 class="text-uppercase font-weight-bold mb-4">About</h6>
                 <ul class="list-unstyled mb-0">
                     <li class="mb-2"><a href="#" class="text-muted">Contact Us</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">About Us</a></li>
                     <!-- <li class="mb-2"><a href="#" class="text-muted">Stories</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Press</a></li> -->
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