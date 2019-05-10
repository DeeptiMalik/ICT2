<?php
require('connection.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>CONTACT PAGE</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body background="../images/b1.jpg">
<?php include('header.php');?>
<h1 align="center">Customer question Detail</h1>

<?php
								
									$selqry = mysql_query("select * from contact");
									
 									if(mysql_num_rows($selqry)>=1){
									?>
									<table width="100%" border="1" bgcolor="#CCFF00">
									<tr text align="center" bgcolor="#999999">
										<td><b>ID</b></td>
										<td><b>USER NAME</b></td>
										<td><b>EMAIL</b></td>
										<td><b>PHONE</b></td>
										<td><b>MESSAGE</b></td>
									</tr>

									<?php
										while($val = mysql_fetch_array($selqry)){
												
											?>
											<tr>
												<td><?php echo $val['id'];?></td>
												<td><?php echo $val['username'];?></td>
												<td><?php echo $val['email'];?></td>
												<td><?php echo $val['phone'];?></td>
												<td><?php echo $val['message'];?></td>
												
										<?php
											
										}
										?>
								</table>
										<?php
										
									}
								?>
</body>
</html>
