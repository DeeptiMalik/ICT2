<?php
session_start();
require('config/dbconfig.php');

if($_SESSION['loginuser']==''){
	echo '<meta http-equiv="refresh" content="0; url=login.php">';
			exit;
}
else{
	$qry = mysql_query("select * from admin_register where admin_id = '".$_SESSION['loginuser']."' ");
	if(mysql_num_rows($qry)>=1){
	
	}
	else{
			echo '<meta http-equiv="refresh" content="0; url=login.php">';
			exit;
	}
}

?>
