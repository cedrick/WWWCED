<?php 
	if(!empty($_COOKIE['vici_uid'])){
		$uid=$_COOKIE['vici_uid'];
	}else{
		header("Location:login.php");	
	}
?>