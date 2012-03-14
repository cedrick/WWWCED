<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>




<?php
	include("../connection/connection.php");
	
	$u=$_POST['txtuser'];
	$p=$_POST['txtpass'];
	$l=$_POST['txtlname'];
	$f=$_POST['txtfname'];
	
	$repass=$_POST['txtre'];

	if($p==$repass)
	{
		$sql="INSERT INTO tblemployee(lname, fname, username, password) VALUES ('$l', '$f', '$u', '$p')";
		$result=mysql_query($sql);

		
		if($result)
		{
		echo"successful";
		//header("location:../content/index.php");
		}
		
		else 
		{
		echo "Error";
		}
	

?>




</body>
</html>