<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POS&amp;INVENTORYSYSTEM</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />

<script src="../signup/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style12 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style14 {
	font-family: Geneva, Arial, Helvetica, sans-serif
}
-->
</style>
<link href="../signup/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
 
<form id="form1" name="form1" method="post" action="../update/update_code.php">



<?php

	include("../connection/connection.php");
	
	$price=$_GET['id'];


	$result = mysql_query("SELECT * FROM tblinventory WHERE price='$price'")
	or die(mysql_error());
	
	$rows=mysql_fetch_array($result);

	?>




  <div id="mother">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center" class="style14">Update Item</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="436" align="center">
      <tr>
        <td width="186" height="43">Product Name:</td>
        <td width="238"><input name="txtpn" type="text" id="txtpn" value="<?php echo $rows['product_name']; ?> " /></td>
      </tr>
      <tr>
        <td><span class="style3">Product Code:</span></td>
        <td><input name="txtpc" type="text" id="txtpc" value="<?php echo $rows['product_code']; ?> " /></td>
      </tr>
      <tr>
        <td height="46"><span class="style3">Category:</span></td>
        <td><input name="txtc" type="text" id="txtc" value="<?php echo $rows['category']; ?> " /></td>
      </tr>
      <tr>
        <td>Price:</td>
        <td><input name="txtp" type="text" id="txtp" value="<?php echo $rows['price']; ?> " /></td>
      </tr>
      <tr>
        <td height="37"><span class="style3">Stocks:</span></td>
        <td><input name="txts" type="text" id="txts" value="<?php echo $rows['stocks']; ?> " /></td>
      </tr>
      <tr>
        <td height="64">&nbsp;</td>
        <td><div align="center">
            <p align="center">
              <input type="submit" name="button" id="button" value="Update" />
            </p>
        </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>
