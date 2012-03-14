<html>
<body>

<p align="center"><?php

/**
 * @author 
 * @copyright 2008
 */
// Make a MySQL Connection
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("dbacc") or die(mysql_error());
// Retrieve all the data from the "example" table

	$nm=$_POST['txtprod'];
	$stk=$_POST['txtstck'];
	$cat=$_COOKIE['crit'];
	
	$result=mysql_query("select*from $cat where Item='$nm'")or die (mysql_error());
	$row=mysql_fetch_array($result);
	
	$stock=$row['Stocks'];
	$stock=$stock+$stk;

	
	 $sql="UPDATE $cat SET Stocks='$stock' WHERE Item='$nm'";
	$result=mysql_query($sql);
	
	header("location:previewresult.php");
	
		
							
?>
</body>
</html>