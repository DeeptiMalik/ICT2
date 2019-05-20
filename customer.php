<?php
require('connection.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CUSTOMER PAGE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<script src="select1.js"></script>
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
</head>

<body>
<?php include('header.php');?>

<h1 align="center">Customer Detail</h1>


<?php
								
									$selqry = mysql_query("select * from user_register");
									
									if(mysql_num_rows($selqry)>=1){
									?>
		<table class="table table-dark table-striped" style="width: 90%; margin: 0 auto; border:1px solid white;  text-align: center;">
								
									
									<tr text align="center" style="border:1px solid white;background-color: gold!important; color:black!important;">
										<td><b>ID</b></td>
										<td> <b>NAME</b></td>
										<td> <b>BIRTHDATE</b></td>
										<td> <b>CONTACTNO</b></td>
										<td><b>EMAIL</b></td>
										<td><b>PASSWORD</b></td>
										
										<td><b>DELETE</b></td>
									</tr>
<?php
										while($val = mysql_fetch_array($selqry)){
												
											?>
											<tr style="background-color: black!important;">
												<td><?php echo $val['user_id']?></td>
												<td><?php echo $val['user_name']?></td>
												<td><?php echo $val['user_bdate']?></td>
												<td><?php echo $val['user_contactNo']?></td>

											
												<td><?php echo $val['user_email']?>	</td>
											
												<td><?php echo $val['user_password']?></td>
												
												<td><a href="customer.php?id=<?php echo $val['user_id']?>&del=variable">Delete</a></td>
											</tr>
											<?php							
										}
										?>
										
</table>
										<?php
										
									}
								?>

</body>
</html>
<?php
				if($_GET['del']=='variable')
				{
					$delqry = mysql_query("delete from user_register where user_id='".$_GET['id']."'");
					echo '<meta http-equiv="refresh" content="0; url=customer.php">';
					exit;
				}
			?>
