<!DOCTYPE html>
<?php

include "admin/connection.php";

?>
<html>
<head>
	<title>Electronic Product Page</title>
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
<style>
/* Style the tab */
.tab {
  float: left;
  /*border: 1px solid #ccc;*/
  /*background-color: #f1f1f1;*/
  width: 20%;
  height: 100px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  margin-left: 30px;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: center;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  /*background-color: #ddd;*/
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
  border-radius: 30px;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  width: 70%;
  border-left: none;
  height: 500px;
  margin-left: 20px;
}	
.section .product-layout {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
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
/*  height: 100%;
  width: 100%;*/
}
.cut {
  font-size: 1.5rem;
  text-decoration: line-through;
  color: #666;
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

.product .side-icons {
  position: absolute;
  right: 0;
  top: 30%;
  transform: translate(80%, -50%);
  display: flex;
  flex-direction: column;
  padding: 1rem;
  transition: all 500ms ease-in-out;
}

.product .side-icons span {
  font-size: 1.4rem;
  background-color: var(--white);
  margin: 0.3rem;
  padding: 1rem 1.3rem;
  border-radius: 50%;
  transition: all 300ms ease-in-out;
}

.product .side-icons span:hover {
  background-color: var(--primary);
  color: var(--white);
}

.product:hover .side-icons {
  transform: translate(0%, -50%);
}

@media only screen and (max-width: 996px) {
  .prodouct-layout {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media only screen and (max-width: 768px) {
  .prodouct-layout {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media only screen and (max-width: 567px) {
  .prodouct-layout {
    grid-template-columns: 1fr;
  }
}  
.ele{
  width: auto;
  height: 200px;
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
.he i{
  font-size: 25px;
  margin-top: 5px;
  color: white;
}
.f{
  color: white;
  font-size: 22px;
  cursor: pointer;
  margin-left: 15px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #EB333C"> 
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
            <li class="nav-item"> <a style="color: white;" class="nav-link" href="#" data-abc="true">Fashion</a> </li>
            <li class="nav-item"> <a style="color: white;" class="nav-link" href="book.php" data-abc="true">Books</a> </li>
            <li class="nav-item"> <a style="color: white;" class="nav-link" href="furniture.php" data-abc="true">Furniture</a> </li>

            <li class="nav-item"> <a style="color: white;" class="nav-link" href="#" data-abc="true">About Us</a> </li>
            <li class="nav-item"> <a style="color: white;" class="nav-link" href="#" data-abc="true">Contact Us</a> </li>

            <li style="margin-left: 490px;">
              <i  class="fa f f fa-facebook-square" aria-hidden="true"></i>
              <i  class="fa f i fa-instagram" aria-hidden="true"></i>
              <i  class="fa f t fa-twitter" aria-hidden="true"></i>
              <i  class="fa f l fa-linkedin-square" aria-hidden="true"></i>
              <i  class="fa f y fa-youtube-play" aria-hidden="true"></i>
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
         <form onsubmit="event.preventDefault()" class="form-inline my-2 my-lg-0"> <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width: 800px; "> 
          <button class="btn btn-danger my-2 my-sm-0" type="submit" style="width: 100px;">Search</button> 
         </form>
        </ul>
      <ul class="navbar-nav" >
      <li class="nav-item">
        <div class="dropdown">
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="color: white;">
            Log In | Register
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="login.php">Log In</a>
            <a class="dropdown-item" href="register.php">Register Here</a>
          </div>
        </div> 
      </li>
      <li class="nav-item" >
          <a class="nav-link" href="#" style="color: white;"> Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
      </li>      
    </ul>
    </div>
</nav>
<br><br>

<br><br>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'all')" id="defaultOpen"><b>Electronic Product</b></button>
  <button class="tablinks" onclick="openCity(event, 'm')"><i class="fa fa-check-square-o" aria-hidden="true"></i> Men's Cloths</button>
  <button class="tablinks" onclick="openCity(event, 'l')"><i class="fa fa-check-square-o" aria-hidden="true"></i> Women Cloths</button>
  <button class="tablinks" onclick="openCity(event, 'w')"><i class="fa fa-check-square-o" aria-hidden="true"></i> Kids Wear</button>
  <button class="tablinks" onclick="openCity(event, 'h')"><i class="fa fa-check-square-o" aria-hidden="true"></i> Hoddies</button><br>
  <button class="tablinks" style="background-color: #ccc; border-radius: 30px;"><b>Brands</b></button>
  <button class="tablinks">OTUS</button>
  <button class="tablinks">Meiital</button>
  <button class="tablinks">Bull</button>
  <button class="tablinks">Woodland</button>
  <button class="tablinks">U-TURN</button>
  <button class="tablinks">Parx</button>

</div>
<center><h3 style="color: red; margin-bottom: 30px; font-family: algerian;"><b>Fashion Products</b></h3></center> 
<div id="all" class="tabcontent">
  <!-- <div class="harsh">
  <img src="https://www.aptronixindia.com/media/slidebanner/i/p/iphone_13_website_banner_2x_2.png" width="1400" height="300" style="margin-left: 50px;">
</div> -->

<div class="container">
  <h4><b>Brands in focus</b></h4>
  <div class="row">
    <div class="col"><img src="https://images-na.ssl-images-amazon.com/images/G/31/img2020/fashion/WA_2020/WA_WINTERFLIP2021/COOP/biba._SS400_QL85_.jpg"></div>
    <div class="col"><img src="https://images-na.ssl-images-amazon.com/images/G/31/img2020/fashion/WA_2020/WA_WINTERFLIP2021/COOP/biba._SS400_QL85_.jpg"></div>
    <div class="col"><img src="https://images-na.ssl-images-amazon.com/images/G/31/img2020/fashion/WA_2020/WA_WINTERFLIP2021/COOP/biba._SS400_QL85_.jpg"></div>
    <div class="col"><img src="https://images-na.ssl-images-amazon.com/images/G/31/img2020/fashion/WA_2020/WA_WINTERFLIP2021/COOP/biba._SS400_QL85_.jpg"></div>
    <div class="col"><img src="https://images-na.ssl-images-amazon.com/images/G/31/img2020/fashion/WA_2020/WA_WINTERFLIP2021/COOP/biba._SS400_QL85_.jpg"></div>
  </div>
</div>
<?php

$pro = mysqli_query($conn, "select * from product where category='Fashion'");

$pro_arr1=array();

while ($row=mysqli_fetch_assoc($pro)) {
  $pro_arr1[]=$row;
}

?>
<!-- <center><h3 style="color: red;  font-family: algerian;"><b>Electronics Products</b></h3></center>  -->

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
            <p><b>Price :</b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['discount']; ?></p><br>
            <p class="cut"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['price']; ?></p>
            <p class="offer"> 20% off </p>
            <p><b>Available :</b><?php echo $key['available']; ?></p>
            <p><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add TO Cart</button></p>
          </div>
        </div>
      </div>
<?php
 }
?>       
    </div>   
</section>
	
</div>	

<div id="m" class="tabcontent">
<?php

$pro = mysqli_query($conn, "select * from product where sub_category='Men shirt'");

$pro_arr1=array();

while ($row=mysqli_fetch_assoc($pro)) {
  $pro_arr1[]=$row;
}

?>
<!-- <center><h3 style="color: red;  font-family: algerian;"><b>Electronics Products</b></h3></center>  -->

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
            <p><b>Price :</b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['discount']; ?></p><br>
            <p class="cut"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['price']; ?></p>
            <p class="offer"> 20% off </p>
            <p><b>Available :</b><?php echo $key['available']; ?></p>
            <p><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add TO Cart</button></p>
          </div>
        </div>
      </div>
<?php
 }
?>       
    </div>   
</section>

</div>

<div id="l" class="tabcontent">
<?php

$pro = mysqli_query($conn, "select * from product where sub_category='Women'");

$pro_arr1=array();

while ($row=mysqli_fetch_assoc($pro)) {
  $pro_arr1[]=$row;
}

?>
<!-- <center><h3 style="color: red;  font-family: algerian;"><b>Electronics Products</b></h3></center>  -->

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
            <p><b>Price :</b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['discount']; ?></p><br>
            <p class="cut"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['price']; ?></p>
            <p class="offer"> 20% off </p>
            <p><b>Available :</b><?php echo $key['available']; ?></p>
            <p><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add TO Cart</button></p>
          </div>
        </div>
      </div>
<?php
 }
?>       
    </div>   
</section>


</div>

<div id="w" class="tabcontent">
<?php

$pro = mysqli_query($conn, "select * from product where sub_category='Kids'");

$pro_arr1=array();

while ($row=mysqli_fetch_assoc($pro)) {
  $pro_arr1[]=$row;
}

?>
<!-- <center><h3 style="color: red;  font-family: algerian;"><b>Electronics Products</b></h3></center>  -->

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
            <p><b>Price :</b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['discount']; ?></p><br>
            <p class="cut"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['price']; ?></p>
            <p class="offer"> 20% off </p>
            <p><b>Available :</b><?php echo $key['available']; ?></p>
            <p><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add TO Cart</button></p>
          </div>
        </div>
      </div>
<?php
 }
?>       
    </div>   
</section>

</div>

<div id="h" class="tabcontent">
<?php

$pro = mysqli_query($conn, "select * from product where sub_category='Headphone'");

$pro_arr1=array();

while ($row=mysqli_fetch_assoc($pro)) {
  $pro_arr1[]=$row;
}

?>
<!-- <center><h3 style="color: red;  font-family: algerian;"><b>Electronics Products</b></h3></center>  -->

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
            <p><b>Price :</b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['discount']; ?></p><br>
            <p class="cut"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $key['price']; ?></p>
            <p class="offer"> 20% off </p>
            <p><b>Available :</b><?php echo $key['available']; ?></p>
            <p><button type="button" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add TO Cart</button></p>
          </div>
        </div>
      </div>
<?php
 }
?>       
    </div>   
</section>

</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<footer class="bg-black" style="margin-top: 2800px;">
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
