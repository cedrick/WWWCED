<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style3 {font-size: 14px; font-weight: bold; }
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="updatenow.php">
 <?php
	$find=$_POST['txtsearch'];

				 
				mysql_connect("localhost","root", "") or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 
				
				
				$cat=$_COOKIE['crit'];
					
			
		$result= mysql_query( "select * from $cat where Item='$find' ") or die(mysql_error());		
		$row=mysql_fetch_array($result);
	
		

	 

		
	
		




?>
  <div align="center">
    <p>
      <label></label></p>
    <table width="200" border="0" align="center">
      <tr>
        <td><img src="point of sale.jpg" width="1152" height="216" /></td>
      </tr>
    </table>
    <p align="left"><span class="style1">
    <label></label>
    </span></p>
    <table width="516" border="1" align="center">
      <tr>
        <td><div align="center"><strong>ITEM</strong></div></td>
        <td><div align="center"><strong>STOCK</strong></div></td>
      </tr>
      <tr>
        <td width="266" height="45"><label>
          <div align="center">
            <input name="txtprod" type="text" id="txtprod" value="<?php echo $row['Item'];?>" />
          </div>
        </label></td>
        <td width="234"><div align="center">
          <input name="txtstck" type="text" id="txtstck" value="" />
        </div></td>
      </tr>
    </table>
    <p>
      <label>
      <input type="submit" name="cmdupdate" id="cmdupdate" value="     UPDATE     " />
      </label>
    </p>
    <div align="left">
      <div align="center"></div>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <table width="200" border="0" align="center">
    <tr>
      <td><img src="footerhome.jpg" width="1152" height="204" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
 
</form>
</body>
</html>
