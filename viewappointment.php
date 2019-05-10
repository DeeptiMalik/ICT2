<?php
require('connection.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MAIN CATEGORIES</title>
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body background="../images/b1.jpg">
<?php include('header.php');?>
<h1 text align="center">View Appointment</h1>


<?php
		$selqry = mysql_query("select * from tbl_booking");
		if(mysql_num_rows($selqry)>=1)
		{
?>
		
		<table class="table table-dark table-striped" style="width: 90%; margin: 0 auto 0; text-align: center;">
			<tr text align="center">
				<td><B>ID</B></td>
				<td><B>USERNAME</B></td>
				<td><B>STYLIST</B></td>
				<td><B>BOOKING DATE</B></td>
				<td><B>PLAN NAME</B></td>
				<td><B>CONTACT NO</B></td>
	      		<!-- <td><B>EDIT</B></td> -->
				<td><B>DELETE</B></td>
			</tr>
			
			<?PHP
			while($val = mysql_fetch_array($selqry)){
			?>
				<tr text align="center">
					<td> <?php echo $val['booking_id']?> </td>
					<td> <?php echo $val['user_name']?> </td>
					<td> <?php echo $val['booking_stylist']?> </td>
					<td> <?php echo $val['booking_date']?> </td>
					<td> <?php echo $val['booking_plan_name']?> </td>
					<td> <?php echo $val['user_contactNo']?> </td>
						

					<!-- <td><a href="maincat.php?id=<?php echo $val['id']?>&edit=update">Edit</a></td> -->
					<td><a href="viewappointment.php?id=<?php echo $val['booking_id']?>&del=variable">Delete</a></td>
											
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
					$delqry = mysql_query("delete from tbl_booking where booking_id='".$_GET['id']."'");
					echo '<meta http-equiv="refresh" content="0; url=viewappointment.php">';
					exit;
				}
			?>