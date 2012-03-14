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
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <p>
      <label></label></p>
    <table width="200" border="0" align="left">
      <tr>
        <td><div align="center"><img src="images/LaluzLogoV4.gif" width="110" height="96" /></div></td>
      </tr>
      <tr>
        <td><div align="center">
        <a href="stocks.php">
        <input name="cmdhome" type="submit" id="cmdhome" value="          Home         " />
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <span class="style1">STOCKS REPORT</span>
    <p align="center">
      <?php
	$warehs=$_POST['txtbev'];

				 
				mysql_connect("localhost","root", "") or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 
			$critical=$_COOKIE['crit'];
				 
		
				
					
			
		$result= mysql_query( "select * from $critical where Stocks='5'  ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=1000 border=1 align=center>";
	echo"<td <h1 align=center>"."<b>"."PRODUCT" ."</b>"."</td>";
	echo"<td <h1 align=center>"."<b>"."STOCKS" ."</b>"."</td>";
	
	while($row=mysql_fetch_array($result))
		{
		
		
		echo"<tr>";
		echo"<td h2 align=center>". $row['Item'] ."</td>";
		echo"<td h2 align=center>". $row['Stocks']."</td>";
	
		
	 

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
