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
a {
	font-size: 20px;
	color: #999999;
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


<table width="60" height="28" border="0" align="right">
  <tr>
    <td width="114" height="24"><a href="../logout/logout.php">Logout</a></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="">
  <div id="mother">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div id="header">
      <table width="419" height="71" border="0" align="right">
        <tr>
          <td width="133" height="67"><div align="left"><a href="../content/index.php">
              <input type="image" name="imageField5" id="imageField3" src="../css/homeicon.JPG" />
            HOME </a></div></td>
          <td width="170"><div align="center"><a href="../POS/POS.php"> <a href="../POS/POS.php">
                    <input type="image" name="imageField3" id="imageField3" src="../css/pos.JPG" />
            POS </a></div></td>
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
      <div id="sale">
        <div align="center"></div>
        <p>
          <label></label>
        </p>
        <table width="410" border="0" align="center">
          <tr>
            <td width="198"><label>
              <div align="center">
              <!--  
                <a href="wholesale.php">
                <input type="image" name="imageField" id="imageField" src="../css/whole.JPG" />
                </a></div>
              <a href="wholesale.php">
              </label>              
            </a>              <div align="center" class="style1"><a href="wholesale.php">WholeSale</a></div></td>
           
            <td width="196"><label>
              <div align="center">
                <a href="items.php">
                <input type="image" name="imageField2" id="imageField2" src="../css/retail.JPG" />
                </a></div>
              <a href="items.php">
              </label>              
            </a>              <div align="center" class="style1"><a href="items.php">SHOP</a></div></td>
          </tr>
        </table>
         -->  
          <div align="center">
                <a href="items.php">
                	<input type="image" name="imageField2" id="imageField2" src="../css/retail.JPG" />
                </a>
           </div>
           <label>
             <a href="items.php">
                         
            	</a>
            </label>   
           <div align="center" class="style1"><a href="items.php">SHOP</a></div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp; </p>
        <p>&nbsp; </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
      <p>&nbsp;</p>
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
