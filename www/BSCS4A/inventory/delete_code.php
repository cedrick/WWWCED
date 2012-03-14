<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>





<body>



<?php



	include("../connection/connection.php");

	$prodn=$_POST['txtpn'];
	$prodc=$_POST['txtpc'];
	$cat=$_POST['txtc'];
	$price=$_POST['txtp'];
	$stocks=$_POST['txts'];
 
 	
	$sql="DELETE FROM tblinventory WHERE product_name='$prodn'";
	$result=mysql_query($sql);

	if($result)
	{
		header("location:../inventory/inventory.php");
		
	}
	else 
	{
		echo "Error";
	}

?>



</body>

</html>