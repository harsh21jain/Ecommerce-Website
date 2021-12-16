<!DOCTYPE html>
<?php 

include "admin/connection.php";

session_start();
  if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
  }
  unset($_SESSION['qty_array']);

?>
<html>
<head>
	<title>Products Details Page</title>
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
    <script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>     
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
  /* PRODUCT DETAILS */

.product-detail {
  margin-top: 5rem;
}

.product-detail .details {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 7rem;
}

.product-detail .left {
  display: flex;
  flex-direction: column;
}

.product-detail .left .main {
  text-align: center;
  background-color: #f6f2f1;
  margin-bottom: 2rem;
  height: 45rem;
  padding: 3rem;
}

.product-detail .left .main img {
  object-fit: contain;
  height: 100%;
  width: 100%;
}

.product-detail .thumbnails {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1rem;
  width: 100%;
}

.product-detail .thumbnail {
  height: 10rem;
  background-color: #f6f2f1;
  text-align: center;
}

.product-detail .thumbnail img {
  height: 100%;
  object-fit: contain;
}

.product-detail .right span {
  display: inline-block;
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.product-detail .right h1 {
  font-size: 4rem;
  line-height: 1.2;
  margin-bottom: 2rem;
}

.product-detail .right .price {
  font-size: 600;
  font-size: 2rem;
  /*color: var(--primary);*/
  color: #EB333C;
  margin-bottom: 2rem;
}

.product-detail .right div {
  display: inline-block;
  position: relative;
  z-index: 1;
}

.product-detail .right select {
  font-family: "Poppins", sans-serif;
  width: 20rem;
  padding: 0.7rem;
  border: 1px solid var(--grey1);
  appearance: none;
  outline: none;
}

.product-detail form {
  margin-bottom: 2rem;
}

.product-detail form span {
  position: absolute;
  top: 50%;
  right: 1rem;
  transform: translateY(-50%);
  font-size: 2rem;
  z-index: 0;
}

.product-detail .form {
  margin-bottom: 3rem;
}

.product-detail .form input {
  padding: 0.8rem;
  text-align: center;
  width: 3.5rem;
  margin-right: 2rem;
}

.product-detail .form .addCart {
  background: var(--primary);
  padding: 0.8rem 4rem;
  color: var(--white);
  border-radius: 3rem;
}

.product-detail h3 {
  text-transform: uppercase;
  margin-bottom: 2rem;
}

@media only screen and (max-width: 996px) {
  .product-detail .left {
    height: 45rem;
  }

  .product-detail .details {
    gap: 3rem;
  }

  .product-detail .thumbnails {
    gap: 0.5rem;
  }

  .product-detail .thumbnail {
    background-color: #f6f2f1;
    text-align: center;
  }
}

@media only screen and (max-width: 650px) {
  .product-detail .details {
    grid-template-columns: 1fr;
  }

  .product-detail .right {
    margin-top: 10rem;
  }

  .product-detail .left {
    width: 100%;
    height: 45rem;
  }

  .product-detail .details {
    gap: 3rem;
  }

  .product-detail .thumbnail {
    width: 6rem;
    height: 6rem;
  }
}  
 /* BRANDS */
.brands {
    width: 100%;
    padding-top: 90px;
    padding-bottom: 90px
}

.brands_slider_container {
    height: 130px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    padding-left: 97px;
    padding-right: 97px;
    background: #fff;
}

.brands_slider {
    height: 100%;
    margin-top: 50px
}

.brands_item {
    height: 100%
}

.brands_item img {
    max-width: 100%
}

.brands_nav {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    padding: 5px;
    cursor: pointer
}

.brands_nav i {
    color: #e5e5e5;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.brands_nav:hover i {
    color: #676767
}

.brands_prev {
    left: 40px
}

.brands_next {
    right: 40px
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
/**product zoom**/  
ul.gallery{    
margin-left: 3vw;     
margin-right:3vw;  
}    

.zoom {      
-webkit-transition: all 0.35s ease-in-out;    
-moz-transition: all 0.35s ease-in-out;    
transition: all 0.35s ease-in-out;     
cursor: -webkit-zoom-in;      
cursor: -moz-zoom-in;      
cursor: zoom-in;  
}     

.zoom:hover,  
.zoom:active,   
.zoom:focus {
/**adjust scale to desired size, 
add browser prefixes**/
-ms-transform: scale(2.5);    
-moz-transform: scale(2.5);  
-webkit-transform: scale(2.5);  
-o-transform: scale(2.5);  
transform: scale(2.5);    
position:relative;      
z-index:100;  
}

/**To keep upscaled images visible on mobile, 
increase left & right margins a bit**/  
@media only screen and (max-width: 768px) {   
ul.gallery {      
margin-left: 15vw;       
margin-right: 15vw;
}

/**TIP: Easy escape for touch screens,
give gallery's parent container a cursor: pointer.**/
.DivName {cursor: pointer}
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

<?php

$id1 = $_GET['id'];

$pro = mysqli_query($conn, "select * from product where id='$id1'");

$pro_arr=array();

while ($row=mysqli_fetch_assoc($pro)) {
  $pro_arr[]=$row;
}

foreach ($pro_arr as $key) {

?>

<form action="">
<section class="section product-detail">
    <div class="details container">
      <div class="left">
        <ul class="list-inline gallery"> 
        <li><div class="main">
          <img class="ele img-rounded zoom" src="images/<?php echo $key['img1']; ?>" id="img">
        </div>
        </li>
        </ul>
        <div class="thumbnails">
          <div class="thumbnail">
            <img onclick="document.getElementById('img').src='images/<?php echo $key['img1']; ?>'" src="images/<?php echo $key['img1']; ?>" alt="" />
          </div>
          <div class="thumbnail">
            <img onclick="document.getElementById('img').src='images/<?php echo $key['img2']; ?>'" src="images/<?php echo $key['img2']; ?>" alt="" />
          </div>
          <div class="thumbnail">
            <img onclick="document.getElementById('img').src='images/<?php echo $key['img3']; ?>'" src="images/<?php echo $key['img3']; ?>" alt="" />
          </div>
        </div>
      </div>
      <div class="right">
        <span><b><?php echo $key['sub_category']; ?></b></span>
        <h1><?php echo $key['product_name']; ?></h1>
        <h2><?php echo $key['company']; ?></h2>
        <h7><b>Avilability :</b> <?php echo $key['available']; ?></h7><br>
        <h7><b>Shipping Charges :</b> <?php echo $key['shipping']; ?></h7><br>
        <div class="price"><?php echo $key['discount']; ?></div><br>
        <b>Select Quanity:</b> <br>

        <form class="form">
          <select style="width: 60px; border: 1px solid black; border-radius: 10px; text-align: center;" id="qty">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>

          <a href="add_to_cart.php?id=<?php echo $key['id']; ?>" class="btn btn-danger" style="border-radius: 20px;">Add To Cart</a>
        </form>
        <h3>Product Detail</h3>
        <p>
        	<?php echo $key['description']; ?><br>
           And this product is very good by our customer's review.<br>This Product is arrived on max 3 days based on your location.
        </p>
      </div>
    </div>
</section>
</form>
<?php
}
?>

<center>
	<h2>Shop By Brand</h2>
	<p>Select from the premium product brands and save plenty money.</p>
</center>
<div class="brands" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="brands_slider_container">
                    <div class="owl-carousel owl-theme brands_slider">
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_1.jpg" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_2.jpg" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_4.jpg" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_5.jpg" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_3.jpg" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_6.jpg" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_7.jpg" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_8.jpg" alt=""></div>
                        </div>
                    </div> <!-- Brands Slider Navigation -->
                    <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

    if($('.brands_slider').length)
    {
    var brandsSlider = $('.brands_slider');

    brandsSlider.owlCarousel(
    {
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    nav:false,
    dots:false,
    autoWidth:true,
    items:8,
    margin:42
    });

    if($('.brands_prev').length)
    {
    var prev = $('.brands_prev');
    prev.on('click', function()
    {
    brandsSlider.trigger('prev.owl.carousel');
    });
    }

    if($('.brands_next').length)
    {
    var next = $('.brands_next');
    next.on('click', function()
    {
    brandsSlider.trigger('next.owl.carousel');
    });
    }
    }
  });
</script>

<br><br><br><br>
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



<script>
   
</script>

</body>
</html>