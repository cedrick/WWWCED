<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
body,td,th {
	font-size: 14px;
	color: #000000;
}
body {
	background-color: #DDD743;
}
.style1 {color: #000000;
	font-size: 18px;
	font-weight: bold;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="viewreservedfind.php">
 <?php
session_start();
if(!session_is_registered(username1))

{
  header("location:admin.php");
  

}
?>
 <p align="center"><img src="headerhome.jpg" width="1152" height="216" /></p>
  <table width="200" border="0" align="center">
    <tr>
      <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','22','src','button17','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','button17' ); //end AC code
    </script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
            <param name="movie" value="button17.swf" />
            <param name="quality" value="high" />
            <embed src="button17.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="22" ></embed>
          </object>
        </noscript></td>
      <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','22','src','button19','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','button19' ); //end AC code
      </script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
            <param name="movie" value="button19.swf" />
            <param name="quality" value="high" />
            <embed src="button19.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="22" ></embed>
          </object>
        </noscript></td>
      <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','22','src','button22','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','button22' ); //end AC code
      </script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
            <param name="movie" value="button22.swf" />
            <param name="quality" value="high" />
            <embed src="button22.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="22" ></embed>
          </object>
        </noscript></td>
      <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','22','src','button21','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','','movie','button21' ); //end AC code
      </script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
            <param name="BGCOLOR" value="" />
            <param name="movie" value="button21.swf" />
            <param name="quality" value="high" />
            <embed src="button21.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="22" ></embed>
          </object>
        </noscript></td>
      <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','22','src','button20','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','button20' ); //end AC code
      </script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22">
            <param name="movie" value="button20.swf" />
            <param name="quality" value="high" />
            <embed src="button20.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="22" ></embed>
          </object>
        </noscript></td>
    </tr>
  </table>
  <table width="200" border="0" align="center">
    <tr>
      <td><label>
        <input type="submit" name="button" id="button" value="     Search     " />
      </label></td>
      <td><label>
        <input type="text" name="txtsearch" id="txtsearch" />
      </label></td>
    </tr>
  </table>
  <table width="456" border="0" align="center">
    
    <tr>
      <td width="450"><div align="center"><?php
			     
				
				mysql_connect("localhost","root")or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				


$result= mysql_query( "select * from tblmain where confirm='RESERVED' ") or die(mysql_error());		
	if ($result)
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td>"."<b>"."RESERVATION-ID" ."</b>"."</td>";
	echo"<td>"."<b>"."CONFIRMATION-ID" ."</b>"."</td>";
	
	while($row=mysql_fetch_array($result))
		{
			echo"</tr>";
		echo"<td>". $row['id']."</td>";
		echo"<td>". $row['confirm'] ."</td>";
		
		echo"</tr>";
		

		}
		
				
	}	
	
	$result= mysql_query( "select * from tblmain where confirm='RESERVED' ") or die(mysql_error());		
	if ($result)
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td>"."<b>"."NAME"."</b>" ."</td>";
	echo"<td>"."<b>"."LASTNAME" ."</b>"."</td>";
	echo"<td>"."<b>"."M.I." ."</b>"."</td>";
	echo"<td>"."<b>"."CONTACT#"."</b>" ."</td>";
	echo"<td>"."<b>"."PLACE" ."</b>"."</td>";
	
	
	while($row=mysql_fetch_array($result))
		{
		echo"</tr>";
		echo"<td>". $row['name'] ."</td>";
		echo"<td>". $row['lname'] ."</td>";
		echo"<td>". $row['mi']."</td>";
		echo"<td>". $row['cont#'] ."</td>";
		echo"<td>". $row['place'] ."</td>";
		echo"</tr>";
		

		}
		
				
	}	 
	
	
	$result= mysql_query( "select * from tblmain where confirm='RESERVED' ") or die(mysql_error());		
	if ($result)
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td>"."<b>"."STANDARD" ."</b>"."</td>";
	echo"<td>"."<b>"."JUNIOR PREMIER"."</b>" ."</td>";
	echo"<td>"."<b>"."PREMIER" ."</b>"."</td>";
	echo"<td>"."<b>"."PREMIER LOFT" ."</b>"."</td>";
	echo"<td>"."<b>"."ANNEX"."</b>" ."</td>";
		
	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		echo"<td>". $row['standardqty']."</td>";
		echo"<td>". $row['junpreqty'] ."</td>";
		echo"<td>". $row['premierqty'] ."</td>";
		echo"<td>". $row['preloftqty']."</td>";
		echo"<td>". $row['annexqty'] ."</td>";
		
		echo"</tr>";
		

		}
		
				
	}	  
	$result= mysql_query( "select * from tblmain where confirm='RESERVED' ") or die(mysql_error());		
	if ($result)
	{
	echo "<table width=500 border=1 align=center>";
	
	echo"<td>"."<b>"."TRIP" ."</b>"."</td>";
	echo"<td>"."<b>"."SENIOR(20% DISCOUNT)" ."</b>"."</td>";
	echo"<td>"."<b>"."NUMBER OF PERSONS"."</b>" ."</td>";
	echo"<td>"."<b>"."RATE" ."</b>"."</td>";
	
	
	while($row=mysql_fetch_array($result))
		{
	   	echo"</tr>";
		echo"<td>". $row['trip'] ."</td>";
		echo"<td>". $row['citizen'] ."</td>";
		echo"<td>". $row['numper'] ."</td>";
		echo"<td>". $row['rate']."</td>";
			
		echo"</tr>";
		

		}
		
				
	}	
	
	$result= mysql_query( "select * from tblmain where confirm='RESERVED' ") or die(mysql_error());		
	if ($result)
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td>"."<b>"."(50%)DOWN PAYMENT" ."</b>"."</td>";
	echo"<td>"."<b>"."IN_MONTH"."</b>" ."</td>";
	echo"<td>"."<b>"."CHECK-IN" ."</b>"."</td>";
	echo"<td>"."<b>"."OUT_MONTH"."</b>" ."</td>";
	echo"<td>"."<b>"."CHECK-OUT" ."</b>"."</td>";
	echo"<td>"."<b>"."YEAR" ."</b>"."</td>";

	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		echo"<td>". $row['down'] ."</td>";
		echo"<td>". $row['month'] ."</td>";
		echo"<td>". $row['in']."</td>";
		echo"<td>". $row['outmonth'] ."</td>";
		echo"<td>". $row['out'] ."</td>";
		echo"<td>". $row['yir'] ."</td>";
	
		echo"</tr>";
		

		}
		
				
	}	
	
	$result= mysql_query( "select * from tblmain where confirm='RESERVED' ") or die(mysql_error());		
	if ($result)
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td>"."<b>"."RESERVATION OFFICER" ."</b>"."</td>";
	
	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";

		echo"<td>". $row['clerk'] ."</td>";
		
		echo"</tr>";
		

		}
		
				
	}	  
	  
	  
	
	 
	  
	
	
	
	
	
	
			  ?>
      </div></td>
    </tr>
  </table>
  <div align="center"><img src="footerhome.jpg" width="1152" height="204" />
  </div>
</form>
</body>
</html>