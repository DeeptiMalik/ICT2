<?php
session_start();
require('config/dbconfig.php');

$qry = mysql_query("select * from admin_register where admin_email = '".$_POST['username']."' and admin_password = '".$_POST['password']."'");


$val = mysql_fetch_array($qry);
if($val != ''){
	$_SESSION['loginuser']  = $val['admin_id'];
	
	echo '<meta http-equiv="refresh" content="0; url=home.php">';
			exit;
}
else{
	echo '<meta http-equiv="refresh" content="0; url=login.php?wrong=access">';
			exit;
}

?>