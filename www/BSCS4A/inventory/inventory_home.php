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
      <table width="564" height="67" border="0" align="right">
        <tr>
          <td width="120" height="63"><div align="left"><a href="inventory_home.php">
              <input type="image" name="imageField2" id="imageField2" src="../css/homeicon.JPG" />
              <a href="inventory_home.php">HOME</a></div></td>
    <td width="193"><div align="left"><a href="inventory.php"><a href="inventory.php">
                    <input type="image" name="imageField" id="imageField" src="../css/inventory.JPG" />
            INVENTORY</a></div></td>
          <td width="132"><div align="left">
              <a href="../report/reports.php">
            <input type="image" name="imageField4" id="imageField4" src="../css/reporticon.JPG" />
          REPORTS</a> </div></td>
          <td width="101"><div align="left">
              <input type="image" name="imageField3" id="imageField3" src="../css/helpicon.JPG" />
            HELP</div></td>
        </tr>
      </table>
    </div>
    <label>
 
    </label>
  </div>
</form>

</body>
</html>
