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

	
	$result = mysql_query("SELECT * FROM tblinventory WHERE product_name='$prodn'") or die(mysql_error()); 
	$rows=mysql_fetch_array($result);
	
	if($prodn==$rows['product_name']) 
	{
	echo " error";
	
	 }
	else
	{
	
	
	
	$sql="INSERT INTO tblinventory(product_name, product_code, category, price, stocks) VALUES ('$prodn', '$prodc', '$cat', '$price', '$stocks')";
		$result=mysql_query($sql);
	
		if($result)
		{
		
		header("location:../inventory/inventory.php");
		//echo "Successful";
		
		}
	
	else
	{
		echo "error";
	}
}
?>


</body>
</html>
