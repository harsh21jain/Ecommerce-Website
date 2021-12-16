<!DOCTYPE html>
<?php session_start();

// define('PRODUCT_IMAGES_SITE_PATH','images');

include "admin/connection.php";

  if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
  }
  unset($_SESSION['qty_array']);

?>
<html>
<head>
	<title>Shop With HJ Electronics</title>
	<meta charset="utf-8">
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
	.h{
		font-size: 50px;
		text-align: center;
		margin-top: 250px;
	}
	.carousel-inner img {
    width: 1400px;
    height: 500px;
    /*height: 100%;*/
  }
  .h img {
    width: 1340px;
    height: 300px;
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
/*.sidenae a:hover{
  color: #EB333C;
}*/

.sidenav a:hover {
  color: #EB333C;
}

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
 
/*email*/
/*    .card {
    width: 700px;
    border: none;
    box-shadow: 3px 3px 5px 9px #eee;
}

.form-control {
    height: 50px;
    border: 2px solid #eee
}

.form-control:focus {
    box-shadow: none;
    border: 2px solid #dc3545
}

.btn-danger {
    height: 50px;
    font-size: 11px
}
footer {
  background: #212529;
  width: 100%;
}*/
/*email*/
.rows {
    height: 100vh
}

.form-control {
    display: block;
    width: 100%;
    min-height: calc(1.5em + .75rem + 2px);
    padding: .575rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 52px;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

.card {
    padding: 20px;
    background-color: #eee;
    padding-bottom: 50px;
    padding-top: 50px
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #f9a826;
    outline: 0;
    box-shadow: none
}

.border-rad {
    border-top-right-radius: 28px;
    border-bottom-right-radius: 28px;
    color: #fff;
    background-color: #f9a826;
    border-color: #f9a826
}

.border-rad:hover {
    background-color: #f9a826;
    border-color: #f9a826
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
/*category*/
.cut {
  font-size: 1.5rem;
  text-decoration: line-through;
  color: #666;
}
.offer {
  font-size: 2rem;
  color: #eb4d4b;
}
.section .product-layout {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
  gap: 3rem;
  max-width: 130rem;
  margin: 0 auto;
  padding: 0 1.6rem;
}

.product {
  overflow: hidden;
}

.product .img-container {
  position: relative;
  cursor: pointer;
}

.product .img-container img {
  object-fit: cover;
  width: 200px;
}

.product .bottom {
  padding: 1rem;
  text-align: center;
}

.product .bottom a {
  margin-bottom: 1rem;
  font-weight: inherit;
  font-size: 1.5rem;
}

.product .bottom a:hover {
  color: var(--primary);
}

.product .bottom span {
  color: var(--primary);
  font-size: 1.8rem;
}

.product .bottom .cancel {
  font-size: 1.4rem;
  color: var(--grey2);
  text-decoration: line-through;
}

.product .addCart {
  position: absolute;
  right: 0;
  bottom: 0.6rem;
  background-color: var(--white);
  border-radius: 50%;
  padding: 1.3rem 1.6rem;
  box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
  transition: all 300ms ease-in-out;
  font-size: 13px;
}

.product:hover .addCart {
  border-radius: 1rem 0 0 0;
}

.product .addCart:hover {
  background-color: #EB333C;
  color: var(--white);
}

.product i {
  transition: all 300ms ease-in-out;
}
/* PROMOTION */
.section {
  padding: 10rem 0 5rem 0;
}

.section .title {
  text-align: center;
  margin-bottom: 5rem;
}

.section .title h2 {
  font-size: 3rem;
  font-weight: 400;
  margin-bottom: 1.5rem;
}

.section .title span {
  color: var(--grey2);
}

.promotion-layout {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 3rem;
}

.promotion-item {
  overflow: hidden;
  position: relative;
  z-index: 0;
}

.promotion-item img {
  object-fit: cover;
/*  height: 100%;
  width: 100%;*/
  width: 200px;
  transition: all 500ms ease-in-out;
}

.promotion-content {
  position: absolute;
  top: 50%;
  left: 75%;
  transform: translate(-50%, -50%);
  color: var(--white);
  text-align: center;
  z-index: 3;
}

.promotion-content h3 {
  background-color: rgba(0, 0, 0, 0.8);
  /*background-color: gray;*/
  border-radius: 5rem;
  padding: 0.7rem 1.4rem;
  font-size: 1.7rem;
  font-weight: inherit;
  margin-bottom: 1rem;
  transition: all 300ms ease-in-out;
}

.promotion-content a {
  transition: all 300ms ease-in-out;
  font-size: 1.4rem;
  color: red;
}

.promotion-content a:hover {
  color: var(--black);
}

.promotion-item:hover {
  background-color: var(--white);
  color: var(--black);
}
.promotion-content h3:hover{
  color: var(--black);
}
.promotion-item:hover img {
  transform: scale(1.2);
}

.promotion-item::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.4);
  opacity: 0;
  visibility: hidden;
  transition: all 500ms ease-in-out;
}

.promotion-item:hover::after {
  visibility: visible;
  opacity: 1;
}

@media only screen and (max-width: 1200px) {
  .promotion-content h3 {
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 5rem;
    padding: 0.7rem 1.4rem;
    font-size: 1.6rem;
  }
}

@media only screen and (max-width: 996px) {
  .promotion-layout {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media only screen and (max-width: 768px) {
  .promotion-layout {
    grid-template-columns: 1fr;
  }
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
.ele{
  width: auto;
  height: 250px;
}
.hero{
  background: url(https://cdn.pixabay.com/photo/2016/08/24/16/20/books-1617327__340.jpg) ;
  background-attachment:fixed;
  background-position:center;
  height: 400px;
  width: 1340px;
}
.hero1{
  background: url(https://cdn.pixabay.com/photo/2015/10/20/18/57/furniture-998265_960_720.jpg) ;
  background-attachment:fixed;
  background-position:center ;
  height: 400px;
  width: 1340px;
}

/*counter*/
.counter-box {
    display: block;
    background: #f6f6f6;
    padding: 40px 20px 37px;
    text-align: center
}

.counter-box p {
    margin: 5px 0 0;
    padding: 0;
    color: #909090;
    font-size: 18px;
    font-weight: 500
}

.counter-box i {
    font-size: 60px;
    margin: 0 0 15px;
    color: #d2d2d2
}
.j{
   background-image: url(images/banner2.jpg);
   background-attachment:fixed;
   background-position:center ;
  
}
.counter {
    display: block;
    font-size: 32px;
    font-weight: 700;
    color: #666;
    line-height: 28px
}

.counter-box.colored {
    background: #EB333C;
}

.counter-box.colored p,
.counter-box.colored i,
.counter-box.colored .counter {
    color: #fff
}
</style>
<script>
	
</script>
<body>


<?php

$cat = mysqli_query($conn, "select * from category");

$cat_arr=array();

while ($row=mysqli_fetch_assoc($cat)) {
  $cat_arr[]=$row;
}

?>

<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #EB333C;"> 
     <!-- <a class="navbar-brand" href="index1.php"><span style="margin-left: 5px;"> HJ </span> Electronics</a>  -->
     <button class="navbar-toggler"  style="color: black" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon" style="color: black"></span> </button>
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-bottom: 1px solid #ededed;"> <img src="images/logo.jpg" width="45"> 
     <a class="navbar-brand" href="index1.php"><span style="margin-left: 5px;"> HJ </span> Electronics</a> 
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
         <form onsubmit="event.preventDefault()" class="form-inline my-2 my-lg-0"> <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width: 800px; border-radius: 20px;"> 
          <button class="btn btn-danger my-2 my-sm-0" type="submit" style="width: 100px; border-radius: 20px;">Search</button> 
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
          <a class="nav-link harsh" href="cart.php" style="color: white;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php echo count($_SESSION['cart']); ?></a>
      </li>    
    </ul>
    </div>
</nav>

<br>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.aptronixindia.com/media/slidebanner/i/p/iphone_13_website_banner_2x_2.png" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2015/10/20/18/57/furniture-998265_960_720.jpg" alt="Chicago" width="1100" height="480">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2021/02/06/07/02/laptop-5987093_960_720.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item ">
      <img src="https://cdn.pixabay.com/photo/2015/06/25/17/21/smart-watch-821557_960_720.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://d3jmn01ri1fzgl.cloudfront.net/photoadking/webp_thumbnail/5fed81142f212_json_image_1609400596.webp" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>
<!-- header -->
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h2 class="h"><span style="color: #EB333C; font-family: algerian;"> HJ </span> Electronics</a><br>Get Up TO 30% Off<br>New Arrivals <span class="typing"></span></h2>
			<button type="button" class="btn btn-danger" style="margin-left: 250px; font-size: 20px;">Show Now</button>
		</div>
		<div class="col">
			<img src="images/mobile.jpg" class="responsive">
		</div>
	</div>
</div>
<br>
<!-- slider -->

<section class="section promotion">
<center><h2 style="color: #CB7E22; margin-bottom: 30px; font-family: algerian;"><b>HJ Store Collections</b></h2></center>   
    <div class="promotion-layout container">

      <div class="promotion-item" style="background-color: #DCF7F7;">
        <!-- <img src="https://i.gadgets360cdn.com/large/HP_Pavilion_Aero_13_launch_1625031929744.jpg" alt="" style="width: 290px;" > -->
        <img src="images/mobile1.jpeg" style="width: 140px;">
        <div class="promotion-content">
          <h3>Elctronics</h3>
          <button type="button" class="btn btn-danger">SHOW NOW</button>
        </div>
      </div>

      <div class="promotion-item">
        <img src="images/banner.jpg" alt="" style="width: 380px;" >
        <div class="promotion-content">
          <h3>Fashion</h3>
          <button type="button" class="btn btn-danger">SHOW NOW</button>
        </div>
      </div>

      <div class="promotion-item" style="background-color: #DCF7F7;">
        <img src="images/sofa-removebg.png" alt="" style="width: 230px;" />
        <div class="promotion-content">
          <h3>Furniture</h3>
          <button type="button" class="btn btn-danger">SHOW NOW</button>
        </div>
      </div>

    </div>
</section>
<br><br>
<div class="hero2">
  <!-- <img src="https://www.annfone.com/img/cms/mobiles-phones-banner.png" > -->
</div>
<br>
<!-- product cards fetch db electronics-->
<?php

$pro = mysqli_query($conn, "select * from product where category='Electronic' LIMIT 4");

$pro_arr1=array();

while ($row=mysqli_fetch_assoc($pro)) {
  $pro_arr1[]=$row;
}

function prod($conn,$limit=''){

    $pro = "select * from product";
  if ($limit!='') {
    $pro.="and limit $limit";
  }
}
$pro_arr = prod($conn,4);
?>
<center><h3 style="color: red;  font-family: algerian;"><b>Electronics Products</b></h3></center> 

<section class="section products">  
    <div class="product-layout">
<?php 

  foreach ($pro_arr1 as $key) {
?>      
      <div class="product">
        <div class="img-container">
          <center><p><b><?php echo $key['product_name']; ?></b></p></center>
          <!-- <center><img src="images/mobile.jpg" alt="" /></center> -->
          <center><a href="productDetails.php?id=<?php echo $key['id']; ?>"><img class="ele" src="images/<?php echo $key['img1']; ?>"></a></center>
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>
        </div>
        <div class="bottom">
          <p><b><?php echo $key['sub_category']; ?></b></p>
          <div class="price">
            <p><b>Price :</b><i class="fa fa-inr" aria-hidden="true"></i>Rs <?php echo $key['discount']; ?></p><br>
            <p class="cut"><i class="fa fa-inr" aria-hidden="true"></i>Rs <?php echo $key['price']; ?></p>
            <p class="offer"> 20% off </p>
            <p><b>Available :</b><?php echo $key['available']; ?></p>
            <!-- <p><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add TO Cart</button></p> -->
          </div>
        </div>
      </div>
<?php
 }
?>       
    </div>   
</section>

<div class="hero">
  <div class="inner">
    
  </div>
</div>
<br>
<!-- product cards fetch db books-->

<?php

$pro = mysqli_query($conn, "select * from product where category='Books' LIMIT 4");

$pro_arr1=array();

while ($row=mysqli_fetch_assoc($pro)) {
  $pro_arr1[]=$row;
}

?>

<center><h3 style="color: red; font-family: algerian;"><b>Books List</b></h3></center>        
<section class="section products">  
    <div class="product-layout">
<?php 
  foreach ($pro_arr1 as $key) {
?>      
      <div class="product">
        <div class="img-container">
          <center><p><b><?php echo $key['product_name']; ?></b></p></center>
          <center><a href="productDetails.php?id=<?php echo $key['id']; ?>"><img class="ele" src="images/<?php echo $key['img1']; ?>"></a></center>
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>
        </div>
        <div class="bottom">
          <p><b><?php echo $key['sub_category']; ?></b></p>
          <div class="price">
            <p>Price :<i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['discount']; ?></p><br>
            <p class="cut"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['price']; ?></p>
            <p class="offer"> 20% off </p>
            <p>Available :<?php echo $key['available']; ?></p>
          </div>
        </div>
      </div>
<?php
 }
?>       
    </div>   
</section>
<div class="hero1">
  <div class="inner">
   
  </div>
</div>
<br>

<!-- product cards fetch db furniture-->

<?php

$pro = mysqli_query($conn, "select * from product where category='Furniture' LIMIT 4");

$pro_arr=array();

while ($row=mysqli_fetch_assoc($pro)) {
  $pro_arr[]=$row;
}

?>

<center><h3 style="color: red; font-family: algerian;"><b>Furniture List</b></h3></center>         
 

<section class="section products">  
    <div class="product-layout">
<?php 
  foreach ($pro_arr as $key) {
?>      
      <div class="product">
        <div class="img-container">
          <center><p><b><?php echo $key['product_name']; ?></b></p></center>
          <center><a href="productDetails.php?id=<?php echo $key['id']; ?>"><img class="ele" src="images/<?php echo $key['img1']; ?>"></a></center>
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>
        </div>
        <div class="bottom">
          <p><b><?php echo $key['sub_category']; ?></b></p>
          <div class="price">
            <p>Price :<i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['discount']; ?></p><br>
            <p class="cut"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['price']; ?></p>
            <p class="offer"> 20% off </p>
            <p>Available :<?php echo $key['available']; ?></p>
          </div>
        </div>
      </div>
<?php
 }
?>       
    </div>   
</section>
<br><br><br>

<div class="container">
  <div class="row">
    <div class="col">
      <img src="images/boy.jpg" class="responsive" width="400">
    </div>
    <div class="col jumbotron" style="margin-top: 40px;">
      <center><h4 style="color: #EB333C;">New Season Trending!</h4>
      <h2 style="font-size: 50px;"><b>Best Winnter Collection</b></h2>
      <p style="font-size: 30px;">Sale Get Up To 50% Off</p>
      <h1><span style="color: #EB333C"><b>New Arrivals</b></span>
        <span class="txt-rotate" data-period="2000" data-rotate='[ "Shirts.", "T-Shirts.", "Women Dress.", "Winnter Jacket."]'></span>
      </h1>
      <button type="button" class="btn btn-danger">Shop Now</button></center>
    </div>
  </div>
</div>
<script type="text/javascript">
  var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>
<br><br><br>
<!-- product cards fetch db   Fashion-->

<!-- <?php

$pro = mysqli_query($conn, "select * from product where category='Fashion' LIMIT 4");

$pro_arr=array();

while ($row=mysqli_fetch_assoc($pro)) {
  $pro_arr[]=$row;
}

?>

<center><h3 style="color: red; font-family: algerian;"><b>Fashion List</b></h3></center>         
 

<section class="section products">  
    <div class="product-layout">
<?php 
  foreach ($pro_arr as $key) {
?>      
      <div class="product">
        <div class="img-container">
          <center><p><b><?php echo $key['product_name']; ?></b></p></center>
          <center><img class="ele" src="images/<?php echo $key['img1']; ?>"></center>
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>
        </div>
        <div class="bottom">
          <p><b><?php echo $key['sub_category']; ?></b></p>
          <div class="price">
            <p>Price :<i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['discount']; ?></p><br>
            <p class="cut"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['price']; ?></p>
            <p class="offer"> 20% off </p>
            <p>Available :<?php echo $key['available']; ?></p>
          </div>
        </div>
      </div>
<?php
 }
?>       
    </div>   
</section> -->
<br><br>

<div class="container-fluid">
  <div class="jumbotron j">
    <div class="row">
        <div class="four col">
            <div class="counter-box colored"> <i class="fa fa-thumbs-o-up"></i> <span class="counter">2147</span>
                <p>Happy Customers</p>
            </div>
        </div>
        <div class="four col">
            <div class="counter-box"> <i style="color: black" class="fa fa-group"></i> <span class="counter">3275</span>
                <p>Registered Members</p>
            </div>
        </div>
        <div class="four col">
            <div class="counter-box"> <i style="color: black" class="fa fa-shopping-cart"></i> <span class="counter">289</span>
                <p>Available Products</p>
            </div>
        </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 40000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
</script>
<br><br>
<!-- newsletter -->
<!-- <div class="container-fluid">
	<div class="container-fluid height-100 mt-5 d-flex justify-content-center align-items-center">
    <div class="card p-3 py-4" style="background-color: black;">
        <div class="d-flex flex-row">
            <div class="d-flex flex-column ms-1" style="color: white">
                <h5 class="mb-0">Get access to exclusive deals</h5>
                <div class="text-left"> <span>we will send only best deals reach you inbox</span> </div>
            </div>
        </div>
        <div class="px-1 d-flex flex-row gap-2 align-items-center mt-2"> <input class="form-control" placeholder="e.g. abc@gmail.com"> <button class="btn btn-danger">Notify Me</button> </div>
    </div>
  </div>
</div> -->
<div class="row d-flex justify-content-center align-items-center rows">
    <div class="col-md-6">
        <div class="card">
            <div class="text-center"> <img src="https://i.imgur.com/Dh7U4bp.png" style="margin-left: 200px;" width="200"> <span class="d-block mt-3">Subscribe to our newsletter in order not to miss new arrivals <br> promotions and discounts of our store</span>
                <div class="mx-5">
                    <div class="input-group mb-3 mt-4"> <input type="text" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="button-addon2"> <button class="btn btn-success border-rad" type="button" id="button-addon2">Subscribe</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

<!-- footer -->
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
                 <p class="text-muted mb-4">PT No.21, Nehru Square, Jain Bullding 3rd Flore Rajura.</p>
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