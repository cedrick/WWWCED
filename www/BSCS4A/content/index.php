<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POS&amp;INVENTORYSYSTEM</title>
<link rel="stylesheet" type="text/css" href="../css/stylehome.css" />
<script type="text/javascript" src="../js/jss.jsp"> </script>
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
a {
	font-size: 20px;
	color: #CCCCCC;
}
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
	//header("location:../index.php");
}

?>
<table width="60" height="28" border="0" align="right">
  <tr>
    <td width="161" height="24"><div align="left"><a href="../logout/logout.php">Logout</a></div></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="">
  <div id="mother">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div id="header">
      <table width="419" height="71" border="0" align="right">
        <tr>
          <td width="133" height="67"><div align="left"><a href="index.php">
            <input type="image" name="imageField5" id="imageField3" src="../css/homeicon.JPG" />
            HOME
          </a></div></td>
          <td width="170"><div align="center"><a href="../POS/POS.php">
              <a href="../POS/POS.php">
            <input type="image" name="imageField" id="imageField" src="../css/pos.JPG" />
            POS
          </a></div></td>
          <td width="102"><div align="center">
              <input type="image" name="imageField4" id="imageField6" src="../css/helpicon.JPG" />
          HELP</div></td>
        </tr>
      </table>
      <p></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <div id="sale">
        <div align="center"></div>
        <p>
          <label></label>
        </p>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <div align="right"></div>
  </div>
</form>
</body>
</html>
