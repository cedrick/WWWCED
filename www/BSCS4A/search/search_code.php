<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



	
	
 
	 <?php
	 
	
	include("../connection/connection.php");
	
	$search=$_POST['txtsearch'];
	
$result = mysql_query("SELECT * FROM tblinventory WHERE category='$search'") or die(mysql_error());
	
	echo "<Table border=1 align=center width=800 bordercolor=#0000FF >";
	echo "<TR   bgcolor=#4887EE >";
	echo "<TH>Product Name </TH>";
	echo "<TH>Product Code</TH>";
	echo "<TH>Category</TH>";
	echo "<TH>Price </TH>";
	echo "<TH>Stocks </TH>";
	echo "<TH> </TH>";
	echo "</TR>";
	while($row = mysql_fetch_array( $result ))
	
	{
		echo "<TR align=center >";
		echo "<TD>". $row['product_name'];
		echo "<TD>". $row['product_code'];
		echo "<TD>". $row['category'];
		echo "<TD>". $row['price'];
		echo "<TD>". $row['stocks'];
		?>
  </p>

  <?php
  
  
		echo "</TR>";
		}
		echo"</table>";
		?>
	
</body>
</html>
