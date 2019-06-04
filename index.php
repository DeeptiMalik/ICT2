<?php error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login  for Admin Panel </title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transparent Sign In Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/reg.font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/reg.style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fontreg.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
<link href="//fontreg.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<!-- //web-fonts -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
		<!--header-->
		<div class="header-w3l">
			<h1>Brow Salon Admin Panel</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile" style="box-shadow: 1px 1px 14px 1px rgba(255,255,250,0.5);">
			<div class="sub-main-w3">	
				<h2>Sign In</h2>
<form method="post" action="verify.php">
				
					
					<!--<div class="navbar-right social-icons"> 
						<a href="#" class="one-w3ls" ><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
						<a href="#" class="two-w3ls" ><i class="fa fa-google-plus" aria-hidden="true"></i>Google+</a>
						<div class="clear"></div>
					</div>
					<h6>Or use your email</h6>-->
					<div class="icon1">
						<input placeholder="Email" name="username" type="text" required="">
					</div>
					
					<div class="icon2">
						<input  placeholder="Password" name="password" type="password" required="">
					</div>
					<div class="clear"></div>
					<input type="submit" name="login" value="Sign in"><br>
					<!-- <?php
					if($_GET['res']=='opres1')
					{
					
						?>
						<label class="anim ">
						<div class="alert alert-warning">
						  <strong>INFO!</strong> You are not a Registered Customer.
						</div>
						</label> 
						<?php
					}
					/* if($_GET['res']=='opres2')
					{
					
						?>
						<label class="anim ">
						<div class="alert alert-warning">
						  <strong>INFO!</strong> Your Account is Not Active Contact With 4Protech.
						</div>
						</label> 
						<?php
					} */
					?> -->
					<?php
if($_GET['wrong']=='access'){
		echo "<h4 style='color:white;'>Username/Password mismatch !!!</h4>";

}
?>

				</form>
			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
		</div>
		<!--//footer-->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<!-- //js -->
</body>
</html>


<!-- 
<?php error_reporting(0)?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
</head>

<body background="../images/7.jpg">

<form method="post" action="verify.php">
<P text align="center">
						<br><br><br><br><br><br><br><br><br><br><br><br><br>
						<span><b>ADMIN LOGIN</b></span><br><br><br>
						<input type="text" name="username" placeholder="USERNAME" ><br><br>
						<input type="password" name="password" placeholder="password"><br><br>
						<input type="submit" name="login"> 

</P>
</form>
</div>
<?php
if($_GET['wrong']=='access'){
	echo "Username/Password mismatch !!!";
}
?>

</body>
</html>


 -->