<?php
require('connection.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ORDER PAGE</title>
<link rel="stylesheet" href="css/style.css">
<script src="select1.js"></script>
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
</head>

<body background="../images/b1.jpg">
<?php include('header.php');?>
<?php
if(@$_POST['sbtfrm'] && $_POST['sbtfrm']=='Update'){

$updateqry = mysql_query("update product set subid = '".$_POST['subcat']."',pname = '".$_POST['pname']."',description = '".$_POST['description']."',qty = '".$_POST['qty']."',price = '".$_POST['price']."',size = '".$_POST['size']."',color = '".$_POST['color']."' where id = '".$_POST['sendid']."'");
				echo '<meta http-equiv="refresh" content="0; url=customer.php">';

}
if($_GET['del']=='variable'){

$delqry = mysql_query("delete from customer where id = '".$_GET['id']."'");
	echo '<meta http-equiv="refresh" content="0; url=customer.php">';
			exit;

}

if(@$_POST['sbtform'] && $_POST['sbtform']=='Insert'){

		if($_POST['pname']==''){
			echo '<meta http-equiv="refresh" content="0; url=customer.php">';
			exit;
		}
		else
	{ 
	 define ("MAX_SIZE","40000000000000000000");
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

 $errors=0;

$image =$_FILES["file"]["name"];
	$uploadedfile = $_FILES['file']['tmp_name'];
     
 
 	if ($image) 
 	{
 	
 		$filename = stripslashes($_FILES['file']['name']);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		
		
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif") ) 
 		{
		
 			$change='<div class="msgdiv">Unknown Image extension </div> ';
 			$errors=1;
 		}
 		else
 		{

 $size=filesize($_FILES['file']['tmp_name']);


if ($size > MAX_SIZE*1024)
{
	$change='<div class="msgdiv">You have exceeded the size limit!</div> ';
	$errors=1;
}


if($extension=="jpg" || $extension=="jpeg" )
{
$uploadedfile = $_FILES['file']['tmp_name'];
$src = imagecreatefromjpeg($uploadedfile);

}
else if($extension=="png")
{
$uploadedfile = $_FILES['file']['tmp_name'];
$src = imagecreatefrompng($uploadedfile);
}
else 
{
$src = imagecreatefromgif($uploadedfile);
}



list($width,$height)=getimagesize($uploadedfile);


$newwidth=600;
$newheight=($height/$width)*$newwidth;
$tmp=imagecreatetruecolor($newwidth,$newheight);


$newwidth1=250;
$newheight1=($height/$width)*$newwidth1;
$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);




$myimg1 = "." .$extension;
$myimg = rand(0,9000) . "_" . rand(0,10) . $myimg1;

$filename = "product/". $myimg;
$filename1 = "product/thumb_". $myimg;

imagejpeg($tmp,$filename,100);
imagejpeg($tmp1,$filename1,100);

imagedestroy($src);
imagedestroy($tmp);
imagedestroy($tmp1);
}}

				$qry = mysql_query("insert into product(`pname`,`subid`,`description`,`image`,`qty`,`price`) values('".$_POST['pname']."','".$_POST['subcat']."','".$_POST['desc']."','".$myimg."','".$_POST['qty']."','".$_POST['price']."')");
		
				echo '<meta http-equiv="refresh" content="0; url=customer.php">';
			exit;
				
		}
		
		
}
?>


<h1 align="center">Order Detail</h1>


<?php
								
									$selqry = mysql_query("select * from invoice");
									
									if(mysql_num_rows($selqry)>=1){
									?>
									<table width="100%" border="3" bgcolor="#CCFF00" >
									<P align="center">
									<tr text align="center" bgcolor="#999999">
										<td width="25%"><b>ORDER ID</b></td>
										<td width="15%"><b>DATE</b></td>
										<td width="19%"><b>SHIPPING ADDRESS</b></td>
										<td width="23%"><b>TOTAL</b></td>
										
										<td width="18%"><b>PRINT</td>
									</tr>
<?php
										while($val = mysql_fetch_array($selqry)){
												
											?>
											<tr>
												<td><?php echo $val['orderid']?></td>
												<td><?php echo $val['date']?></td>
												<td><?php echo $val['d_i_add']?>	</td>
												<td><?php echo $val['finaltotal']?></td>
												
												<td><a href="receipt.php?id=<?php echo $val['orderid']?>&del=variable" target="_blank">Print</a></td>
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