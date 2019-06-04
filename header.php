<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <link rel="stylesheet" href="css1/style.css"> -->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
<link rel="stylesheet" href="css/reg.font-awesome.min.css">
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/icon-font.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
	.topnav {
  overflow: hidden;
  width: 100%;
  background-color: transparent;
    transition-delay:  1s;
}
html,body{

  background-color: black!important;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
      margin: 1px 15px;
  
    transition-delay:  1s;

}

.topnav a:hover {
  background-color: transparent;
  color: #ff0;
  font-weight: 500;
    transition: 1s;

}

.active {
  border-top:1px solid gold;
  border-bottom:1px solid gold;
  width: auto;
    transition: 1s;

  color: white;
}

.topnav .icon {
  display: none;
}
/*
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}*/

/*@media screen and (min-width: 0px) and (max-width: 850px) {
  
 
}*/

</style>
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>

</head>

<body>
<div class="borderclass">
						<img class="logo" src="img/logo.jpeg" alt="industrial brush company">
						<div id="compname" class="cname">
						  <h2>Welcome to Admin panel</h2>
						</div>
		<div class="menu1">
			<div class="topnav" id="myTopnav">
				   <a href="javascript:void(0);" class="active" style="text-align: left;"  onclick="myFunction()"><span class="fa fa-bars"></span></a>
				  <a href="home.php">Dashboard</a>
				  <a href="product.php">Add Product</a>
				  <a href="viewproduct.php">Edit Product</a>
				  <a href="viewappointment.php">View Appointments</a>
				  <a href="viewcomment.php">View Comments</a>
				  <a href="customer.php">View Customers</a>
				  <a href="logout.php">Logout</a>

				  <a href="logout.php" class="icon" style="color:#ff0;"><i class="lnr lnr-power-switch"></i></a>
</div>

		</div>

		</div>			
					<div class="clearfix"></div>
					<div id="menu">
						<ul>
							<li><a href="home.php">Dashboard</a></span></li>
							<li><a href="product.php">Add Product</a></li>
							<li><a href="viewproduct.php">Edit Product</a></li>
							<li><a href="viewappointment.php">View Appointments</a></li>
							<li><a href="viewcomment.php">View Comments</a></li>
							<li><a href="customer.php">View Customers</a></li>
						    <li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
					<div style="clear:both;"></div>



					<!-- <div class="menu1">
					 <nav class="menu">
    <header>Menu <span>X</span></header>
    <ol>
        <li class="menu-item"><a href="home.php">Dashboard</a></li>
        <li class="menu-item"><a href="product.php">Add Product</a></li>
        <li class="menu-item"><a href="viewproduct.php">Edit Product</a></li>

        <li class="menu-item"><a href="viewappointment.php">view Appointment</a></li>
        <li class="menu-item"><a href="viewcomment.php">view comment</a></li>
        <li class="menu-item"><a href="customer.php">view customer</a></li>
        <li class="menu-item"><a href="logout.php">Logout</a></li>

    </ol>
    <footer><button aria-label="Toggle Menu">Toggle</button></footer>
</nav> 
</div> -->
  <script src='https://code.jquery.com/jquery-3.3.1.js'></script>

  

    <script  src="js/index.js"></script>




</body>
</html>
	