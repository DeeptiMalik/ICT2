<?php
require('connection.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>PRODUCT VIEW PAGE</title>
<link rel="stylesheet" href="css/style.css">
<script src="select1.js"></script>
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body background="../images/b1.jpg">
<?php include('header.php');?>









<?php
 if(@$_POST['sbtfrm'] && $_POST['sbtfrm']=='Update'){

$updateqry = mysql_query("update product set pname = '".$_POST['pname']."',price = '".$_POST['price']."',description = '".$_POST['description']."',size = '".$_POST['size']."',color = '".$_POST['color']."' where id = '".$_POST['sendid']."'");
				echo '<meta http-equiv="refresh" content="0; url=viewproduct.php">';

}
if($_GET['del']=='variable'){


	$delimg = mysql_query("select * from product where id = '".$_GET['id']."' ");
	$row1 =mysql_fetch_array($delimg);
	$imgdel = $row1['image'];
	$deleted = unlink("product/".$imgdel);
	unlink("product/thumb_".$imgdel);

$delqry = mysql_query("delete from product where id = '".$_GET['id']."'");
	echo '<meta http-equiv="refresh" content="0; url=viewproduct.php">';
			exit;

}

?>
<?php
if($_GET['edit']=='update'){
$findqry = mysql_query("select * from product where id = '".$_GET['id']."'");
$findqryval = mysql_fetch_array($findqry);

?>
<h1 text align="center">Edit Product Detail</h1>

<form method="post" action="">


	<input type="text" name="pname" value="<?php echo $findqryval['pname'];?>">
	<input type="text" name="description" value="<?php echo $findqryval['description'];?>">
	
	<input type="text" name="price" value="<?php echo $findqryval['price'];?>">
	<input type="text" name="size" value="<?php echo $findqryval['size'];?>">
	<input type="text" name="color" value="<?php echo $findqryval['color'];?>">

	<input type="hidden" name="sendid" value="<?php echo $findqryval['id'];?>">
	<div align="center"><input type="submit" class="btn btn-outline-info" name="sbtfrm" value="Update"></div>
	
</form>
<?php
}
else{
?>


<h1 text align="center">Product List</h1>




<?php
								
									$selqry = mysql_query("select * from product");
									
 									if(mysql_num_rows($selqry)>=1){
									?>
		<table class="table table-dark table-striped" style="width: 90%; margin:0 auto 0; border:1px solid white; ">
									
									<tr text align="center" style="background-color: gold!important; color:black!important;">
										<td><b>ID</b></td>
										<td><b>PRODUCT NAME</b></td>
										<td><b>DESCRIPTION</b></td>
										<td><b>PRICE</b></td>
										<td><b>SIZE</b></td>
										<td><b>COLOR</b></td>
										<td><b>IMAGE</b></td>
										<td><b>EDIT</b></td>
										<td><b>DELETE</b></td>
									</tr>
<?php
										while($val = mysql_fetch_array($selqry)){
												
											?>
											<tr style="background-color: black!important;">
												<td><?php echo $val['id']?></td>
												<td><?php echo $val['pname']?></td>
												<td><?php echo $val['description']?></td>
												<td><?php echo $val['price']?></td>
												<td><?php echo $val['size']?></td>
												<td><?php echo $val['color']?></td>
												<!-- <td><?php echo $val['image']?></td> -->
												<td ><img height="100px" width="100px" src="product/<?php echo $val['image']?>"></td>
												<td><a href="viewproduct.php?id=<?php echo $val['id']?>&edit=update">Edit</a></td>
												<td><a href="viewproduct.php?id=<?php echo $val['id']?>&del=variable">Delete</a></td>
											</tr>
											<?php
											
										}
										?>

											
								</table>
										<?php
										
									}
								?>




<?php } ?>

</body>
</html>
