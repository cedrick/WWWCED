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
<?php
session_start();
if(!session_is_registered(useracc))

{
  header("location:menuacc.php");
  

}
?>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <p>
      <label></label></p>
    <p align="left"><span class="style1"><img src="images/LaluzLogoV4.gif" width="129" height="122" /></span></p>
    <div align="left">
      <p class="style3">
        <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','22','src','button37','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','button37' ); //end AC code
</script><noscript>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
  <param name="movie" value="button37.swf" />
  <param name="quality" value="high" />
  <embed src="button37.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="22" ></embed>
</object>
</noscript>
      </p>
      <p class="style3">
        <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','22','src','button38','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','button38' ); //end AC code
</script><noscript>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
  <param name="movie" value="button38.swf" />
  <param name="quality" value="high" />
  <embed src="button38.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="22" ></embed>
</object>
</noscript>
      </p>
    </div>
    <div align="left"><span class="style1">
    </span></div>
    <span class="style1"><label></label>
    </span>
    <div align="left">
      <div align="center"></div>
    </div>
    <span class="style1"></span>
    <p align="center"><span class="style1">STOCKS REPORT</span></p>
    <p align="center">
      <?php
	$warehs=$_POST['txtbev'];

				 
				mysql_connect("localhost","root", "") or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 
				setcookie('crit',$warehs); 
				
				
					
			
		$result= mysql_query( "select * from $warehs  ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=1000 border=1 align=center>";
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
    </p>
    <p>&nbsp;        </p>
  </div>
  <p>&nbsp;</p>
</form>
</body>
</html>
