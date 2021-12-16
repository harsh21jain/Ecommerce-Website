
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style>
.img {
  /*width: 800px;
  height: 500px;*/
  width: 400px;

}
.text{
  /*margin-bottom: 100px;*/
}
.container {
  border: 3px solid #f1f1f1;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

/* Container for columns and the top "toolbar" */
.row {
  padding: 10px;
  background: #f1f1f1;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
}

.left {
  width: 15%;
}

.right {
  width: 10%;
}

.middle {
  width: 75%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Three dots */
.dot {
  margin-top: 4px;
  height: 12px;
  width: 12px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

/* Style the input field */
input[type=text] {
  width: 100%;
  border-radius: 3px;
  border: none;
  background-color: white;
  margin-top: -8px;
  height: 25px;
  color: #666;
  padding: 5px;
}

/* Three bars (hamburger menu) */
.bar {
  width: 17px;
  height: 3px;
  background-color: #aaa;
  margin: 3px 0;
  display: block;
}

/* Page content */
.content {
  padding: 10px;
}
</style>
<body>
<div class="container">
  <div class="row">
    <div class="column left">
      <span class="dot" style="background:#ED594A;"></span>
      <span class="dot" style="background:#FDD800;"></span>
      <span class="dot" style="background:#5AC05A;"></span>
    </div>
    <div class="column middle">
      <input type="text" value="http://www.hjelectronics.com/payment-page">
    </div>
    <div class="column right">
      <div style="float:right">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </div>
  </div>

  <center>
  <img class="img" src="https://images.mbgcard.com/933/fbc017dc-9dfb-4fff-8d15-b40a556bd3b1.jpg">  
</center>

</div>

</body>
</html>