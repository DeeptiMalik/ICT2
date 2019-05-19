<?php
require('connection.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>PRODUCT PAGE</title>
<link rel="stylesheet" href="css/style.css">
<script src="select1.js"></script>
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
</head>

<body background="../images/b1.jpg">
<?php include('header.php');?>
<h1 text align="center">Add Product</h1>

<?php
 

if(@$_POST['sbtfrm'] && $_POST['sbtfrm'] == 'Insert'){




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


$qry = mysql_query("insert into product(`pname`,`price`,`description`,`size`,`color`,`image`) values('".$_POST['pname']."','".$_POST['price']."','".$_POST['description']."','".$_POST['size']."','".$_POST['color']."','".$myimg."')");
				echo '<meta http-equiv="refresh" content="0; url=viewproduct.php">';
			exit;
				
		
}
?>
<form method="post" action="" enctype="multipart/form-data">


 <!-- <div id="sdf"></div> -->


<input type="text" name="pname" placeholder="product name" required="required">
	<input type="text" name="price" placeholder="price" required="required">
	<input type="text" name="description" placeholder="description" required="required">
	<input type="text" name="size" placeholder="size" required="required">
	<input type="text" name="color" placeholder="color" required="required">
	<input size="25" name="file" type="file"  class="box" required="required" / >
	<div align="center"><input class="btn btn-outline-info" type="submit" name="sbtfrm" value="Insert"></div>

</form>


</body>
</html>
