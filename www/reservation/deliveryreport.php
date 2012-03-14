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
.style5 {
	color: #FFFFFF;
	font-size: 18px;
}
a:link {
	color: #4F7CB3;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #4E7DB5;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style6 {
	font-size: 36px
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<?php
session_start();
if(!session_is_registered(username))

{
  header("location:index.php");
  

}
?>
<form id="form1" name="form1" method="post" action="prviewupdate.php">
  <div align="center">
    <p>
      <label></label></p>
    <p align="left"><span class="style1">
    <label></label>
    </span></p>
    <p align="left"><span class="style1">    </span></p>
    <h1 align="left"><span class="style1">    </span> <strong>La Luz Beach Resort</strong></h1>
    <table width="300" border="0" align="left" class="style3">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><span class="style5"><a href="deliveryweek.php">&gt;&gt;</a></span></td>
      </tr>
      <tr>
        <td width="6">&nbsp;</td>
        <td width="65">&nbsp;</td>
        <td width="151">&nbsp;</td>
      </tr>
    </table>
    <div align="left">
      <div align="center"></div>
    </div>
    <h1 class="style6">Delivery Report</h1>
    <h1 class="style6">&nbsp;</h1>
    <p><span class="style3">
      <?php
	

				 	$warehs=$_POST['txtbev'];
					$month=$_POST['txtmonth'];
					$day=$_POST['txtday'];
				mysql_connect("localhost","root", "") or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 
		function checkmonth($mon,$xin)  // Function wca // to check the end of the month booking
				{
				if($mon=='Feb' && $xin<=28)
					{
						return TRUE;
					}	
				else if($mon=='Apr' && $xin<=30 )
					{
						return TRUE;
					}
				else if($mon=='June' && $xin<=30 )
					{
						return TRUE;
					}	
				else if($mon=='Sept' && $xin<=30 )
					{
						return TRUE;
					}	
				else if($mon=='Nov' && $xin<=30 )
					{
						return TRUE;
					}		
				else if($mon=='Jan' && $xin<=31 )
					{
						return TRUE;
					}	
				else if($mon=='Mar' && $xin<=31 )
					{
						return TRUE;
					}
				else if($mon=='May' && $xin<=31 )
					{
						return TRUE;
					}
				else if($mon=='Jul' && $xin<=31 )
					{
						return TRUE;
					}
				else if($mon=='Aug' && $xin<=31 )
					{
						return TRUE;
					}
				else if($mon=='Oct' && $xin<=31 )
					{
						return TRUE;
					}
				else if($mon=='Decem' && $xin<=31) 
					{
						return TRUE;
					}
				else
					{
						return FALSE;
					}	
				}
				 
				 
				
		if($warehs=='Beverages' && checkmonth($month,$day)==TRUE)//firewall bev
		{
					
			
		$result= mysql_query( "select * from tblbev where month='$month' && day='$day'  ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=500 border=1 align=center >";
	echo"<td <h1 align=center>"."<b>"."PRODUCT" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."STOCKS" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."PRICE" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."MONTH" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."DAY" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."YEAR" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."OFFICER" ."</b>"."</td>";
	
	
	
	while($row=mysql_fetch_array($result))
		{
		
		
		echo"<tr>";
		echo"<td h1 align=center>". $row['Item'] ."</td>";
		echo"<td h1 align=center>". $row['Stocks']."</td>";
		echo"<td h1 align=center>". $row['Price'] ."</td>";
		echo"<td h1 align=center>". $row['month']."</td>";
		echo"<td h1 align=center>". $row['day'] ."</td>";
		echo"<td h1 align=center>". $row['year']."</td>";
		echo"<td h1 align=center>". $row['officer']."</td>";
	
		
	 

		}
		
	
		}
		
		
		
		}//firewall bev
		
		
				
		else if($warehs=='Food' && checkmonth($month,$day)==TRUE)//firewall bev
		{
					
			
		$result= mysql_query( "select * from tblfood  where month='$month' && day='$day'  ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=500 border=1 align=center >";
	echo"<td <h1 align=center>"."<b>"."PRODUCT" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."STOCKS" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."PRICE" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."MONTH" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."DAY" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."YEAR" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."OFFICER" ."</b>"."</td>";
	
	
	
	while($row=mysql_fetch_array($result))
		{
		
		
		echo"<tr>";
		echo"<td h1 align=center>". $row['Item'] ."</td>";
		echo"<td h1 align=center>". $row['Stocks']."</td>";
		echo"<td h1 align=center>". $row['Price'] ."</td>";
		echo"<td h1 align=center>". $row['month']."</td>";
		echo"<td h1 align=center>". $row['day'] ."</td>";
		echo"<td h1 align=center>". $row['year']."</td>";
		echo"<td h1 align=center>". $row['officer']."</td>";
	
		
	 

		}
		
	
		}
		
		
		
		}//firewall bev
		
		else{ header("location:pos.php"); }
		
		
		
		




?>
    </span></p>
  </div>
  <p>&nbsp;</p>
</form>
</body>
</html>
