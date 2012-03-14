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
-->
</style>

</head>
<body>




<form id="form1" name="form1" method="post" action="">
  <div id="mother">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div id="header">
      <table width="566" height="74" border="0" align="right">
        <tr>
          <td width="111" height="70"><div align="center"><a href="inventory_home.php">
                  <input type="image" name="imageField2" id="imageField2" src="../css/homeicon.JPG" />
          </div></td>
          <td width="188"><div align="center"><a href="inventory.php">
                  <input type="image" name="imageField" id="imageField" src="../css/inventory.JPG" />
          </div></td>
          <td width="135"><div align="right">
              <input type="image" name="imageField4" id="imageField4" src="../css/reporticon.JPG" />
          </div></td>
          <td width="129"><div align="center">
              <input type="image" name="imageField3" id="imageField3" src="../css/helpicon.JPG" />
          </div></td>
        </tr>
      </table>
    </div>
<label>
 
    </label>
    <p>&nbsp;</p>
  <div id="search">
    <table width="849" border="0" align="center">
        <tr>
          <td width="113" height="37"><div align="center"><a href="../add_product/add.php"><img src="../css/botton_add.JPG" width="109" height="43" /></a></div></td>
          <td width="132"><div align="center"><a href="../delete/delete.php"><img src="../css/btndel.JPG" width="128" height="42" /></a></div></td>
          <td width="590"><div align="right">
            <input type="text" name="txtsearch" id="txtsearch" />
            <input name="imageField5" type="image" id="imageField5" src="../css/search.jpeg" />
          </div></td>
        </tr>
      </table>
    <p>&nbsp;</p>
    </div>
    
    </p>
    <?php
	include("../connection/connection.php");
	$result = mysql_query("SELECT * FROM tblinventory ORDER BY category") or die(mysql_error());
	
	echo "<Table border=0 align=center width=800 bordercolor=#0000FF >";
	echo "<TR   bgcolor=#4887EE   height=50  >";
	echo "<TH>Product Name </TH>";
	echo "<TH>Product Code</TH>";
	echo "<TH>Category</TH>";
	echo "<TH>Price </TH>";
	echo "<TH>Stocks </TH>";
	//echo "<TH> Delete </TH>";
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
<td><a href="delete2.php?id=<?php echo $row['price'];?>">Delete</a></p>
  <?php
  
  
		echo "</TR>";
		}
		echo"</table>";
		?>
    
 
</form>

</body>
</html>
