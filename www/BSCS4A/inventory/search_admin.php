<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POS&amp;INVENTORYSYSTEM</title>
<link rel="stylesheet" type="text/css" href="../css/inventorystyle.css" />
<script type="text/javascript" src="../js/jss.jsp"> </script>

<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #999999;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
h1,h2,h3,h4,h5,h6 {
	font-family: Arial, Helvetica, sans-serif;
}
a {
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>

</head>
<body>

<?php
session_start();
if($_SESSION['user'])
{
	echo "Welcome: ". $_SESSION['user'];
}
else
{
	header("location:../index.php");
}

?>


<form id="form1" name="form1" method="post" action="">
  <div id="mother">
    <p align="right"><a href="../logout/logout.php">Logout</a></p>
    <p>&nbsp;</p>
  <div id="header">
<table width="566" height="75" border="0" align="right">
        <tr>
          <td height="71"><div align="left"><a href="inventory_home.php">
              <input type="image" name="imageField2" id="imageField2" src="../css/homeicon.JPG" />
              <a href="inventory_home.php">HOME</a></div></td>
          <td><div align="left"><a href="inventory.php"><a href="inventory.php">
                    <input type="image" name="imageField" id="imageField" src="../css/inventory.JPG" />
            INVENTORY</a></div></td>
          <td><div align="left">
              <input type="image" name="imageField4" id="imageField4" src="../css/reporticon.JPG" />
            REPORTS </div></td>
          <td><div align="left">
              <input type="image" name="imageField3" id="imageField3" src="../css/helpicon.JPG" />
            HELP</div></td>
        </tr>
      </table>
      
  </div>
    <label>
 
    </label>
    <p>&nbsp;</p>
    <div id="search">
      <table width="852" border="0" align="center">
        <tr>
          <td width="113" height="37"><div align="center"><a href="../add_product/add.php"><img src="../css/botton_add.JPG" width="109" height="43" /></a></div></td>
          <td width="729"><div align="right">Find
              <input type="text" name="txtsearch" id="txtsearch" />
              <input name="imageField5" type="image" id="imageField5" src="../css/search.jpeg" />
          </div></td>
        </tr>
      </table>
  </div>
<p>

<div style="width: 850px; height:550px; overflow:auto; padding-left:90px;scrollbar-highlight-color :#F0DEE5; scrollbar-face-color : #D4AEBB; ">
  

      	 <?php
	 
	
	include("../connection/connection.php");
	$search=$_POST['txtsearch'];
	$result = mysql_query("SELECT * FROM tblinventory WHERE category='$search'") or die(mysql_error());
	
	echo "<Table border=0 align=center width=800 bordercolor=#0000FF >";
	echo "<TR   bgcolor=#4887EE  height=50 >";
	echo "<TH>Product Name </TH>";
	echo "<TH>Product Code</TH>";
	echo "<TH>Category</TH>";
	echo "<TH>Price </TH>";
	echo "<TH>Stocks </TH>";
	//echo "<TH> Update </TH>";
	echo "</TR>";
	while($row = mysql_fetch_array( $result ))
	
	{
		echo "<TR align=center>";
		echo "<TD bgcolor=#CCCCCC>". $row['product_name'];
		echo "<TD bgcolor=#CCCCCC>". $row['product_code'];
		echo "<TD bgcolor=#CCCCCC>". $row['category'];
		echo "<TD bgcolor=#CCCCCC>". $row['price'];
		echo "<TD bgcolor=#CCCCCC>". $row['stocks'];
	
		
		
		?>
  </p>
    <p>
      </p>
        </p>
  <td><a href="update.php?id=<?php echo $row['price'];?>">Update</a> | <a href="delete2.php?id=<?php echo $row['price'];?>">Delete</a></p>
  <?php
  
  
  
  
		echo "</TR>";
		}
		echo"</table>";
		?>
        
        </div>
    
 
</form>

</body>
</html>
