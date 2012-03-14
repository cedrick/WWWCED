<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #CDCE56;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style2 {
	font-size: 16px;
	font-weight: bold;
}
.style3 {font-size: 14px; font-weight: bold; }
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="prviewupdate.php">
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
    <table width="535" border="0" align="left">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','22','src','button39','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','button39' ); //end AC code
        </script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
            <param name="movie" value="button39.swf" />
            <param name="quality" value="high" />
            <embed src="button39.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="22" ></embed>
          </object>
          </noscript></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="10">&nbsp;</td>
        <td width="67">&nbsp;</td>
        <td width="107"><input type="submit" name="button" id="button" value="      Search      " /></td>
        <td width="273"><label>
          <input type="text" name="txtsearch" id="txtsearch" />
        </label></td>
        <td width="20">&nbsp;</td>
        <td width="32">&nbsp;</td>
      </tr>
    </table>
    <div align="left">
      <div align="center"></div>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><span class="style3">
      <?php
	

				 
				mysql_connect("localhost","root", "") or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 
			$cat=$_COOKIE['crit'];
				
				
					
			
		$result= mysql_query( "select * from $cat  ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=200 border=1 align=center>";
	echo"<td <h1 align=center>"."<b>"."PRODUCT" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."STOCKS" ."</b>"."</td>";
	
	while($row=mysql_fetch_array($result))
		{
		
		
		echo"<tr>";
		echo"<td h1 align=center>". $row['Item'] ."</td>";
		echo"<td h1 align=center>". $row['Stocks']."</td>";
	
		
	 

		}
		
	
		}




?>
    </span></p>
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
