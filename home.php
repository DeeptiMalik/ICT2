<?php
		require('connection.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HOME PAGE</title>
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->


</head>

<body background="../images/b1.jpg">
<?php include('header.php');?>
<h1 class="cname" align="center">Dashboard</h1>


  <div class="custom-widgets" style="width: 100%; margin-left: 1.5%;">
					   <div class="row-one">
							<div class="widget">
								<div class="stats-left ">
									<h5>Total</h5>
									<h4> Product</h4>
								</div>
								<div class="stats-right">
									<label><?php 
										$total = mysql_query("SELECT * FROM product");
										$total1=mysql_num_rows($total);
										echo $total1;
									 ?></label>
								</div>
									
							</div>

							<div class="widget states-mdl">
								<div class="stats-left">
									<h5>Total</h5>
									<h4>Appointment</h4>
								</div>
								<div class="stats-right">
									<label>
										<?php 
										$total = mysql_query("SELECT * FROM tbl_booking");
										$total1=mysql_num_rows($total);
										echo $total1;
									 ?>
									</label>
								</div>
									
							</div>
							
							<div class="widget states-thrd">
								<div class="stats-left">
									<h5>Total</h5>
									<h4>Message</h4>   
								</div>
								<div class="stats-right">
									<label><?php 
										$total = mysql_query("SELECT * FROM contact");
										$total1=mysql_num_rows($total);
										echo $total1;
									 ?></label>
								</div>
									
							</div>
							<div class="widget states-last">
						

							<div class="stats-left">
									<h5>Total</h5>
									<h4>Customer</h4>
								</div>
								<div class="stats-right">
									<label><?php 
										$total = mysql_query("SELECT * FROM user_register");
										$total1=mysql_num_rows($total);
										echo $total1;
									 ?>
									 	
									 </label>
								</div>
									
							</div>
								
						</div>
	</div>
<!-- <p align="center"><a class="cname" href="logout.php"> <h1  align="center">sign out</h1></a></p> -->

</body>
</html>
