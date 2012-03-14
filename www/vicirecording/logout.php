<?php 
	setcookie("vici_uid","",time()-43200);
	setcookie("vici_uname","",time()-43200);
	header("Location:login.php");	
?>
