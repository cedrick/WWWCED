<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>La Luz Beach Resort </title>
<style type="text/css">
<!--
.style2 {color: #000000}
.style3 {
	font-weight: bold;
	font-size: 36px;
}
-->
</style>
</head>

<body>
<?php
session_start();
if(!session_is_registered(username))

{
  header("location:sale.php");
  

}
?>
<div align="center" class="style2">
  <table width="200" border="0" align="left">
    <tr>
      <td><span class="style3"><img src="images/LaluzLogoV4.gif" width="110" height="96" /></span></td>
    </tr>
  </table>
  <p align="center" class="style3">&nbsp;</p>
  <p align="center" class="style3">&nbsp;</p>
  <p align="center" class="style3">La luz Beach Resort</p>
  <p align="center">
    <?php
			  
		
			  $date=date("D/M/Y");
			  
	
		$customer=$_COOKIE['nid'];
		
		
			  mysql_connect("localhost","root")or die(mysql_error());
			  mysql_select_db("dbacc")or die(mysql_error());
			  
		
			             


		
			
			
		 $result= mysql_query( "select * from $customer where id='$customer' && tag='CHECKOUT' ") or die(mysql_error());		
	if ($result)
	{
	
 	
	echo "<table width=1000 border=1 align=center>";
	echo"<td <h3 align=center>"."<b>"."RESERVATION-ID" ."</b>"."</td>";
	echo"<td <h3 align=center>"."<b>"."REMARKS" ."</b>"."</td>";
	echo"<td <h3 align=center>"."<b>"."NAME" ."</b>"."</td>";
	
	
	

	

	$row=mysql_fetch_array($result);
		{
		
		echo"<tr>";
		echo"<td align=center>". $row['id']."</td>";
		echo"<td align=center>". $row['tag'] ."</td>";
		echo"<td align=center>". $row['name'] ."</td>";
		
		
	 

		}
		
		
			$result= mysql_query( "select * from $customer where extra='Order'  ") or die(mysql_error());		
	if ($result)
	{
	echo "<table width=1000 border=1 align=center>";
	echo"<td <h3 align=center>"."<b>"."SPECIAL_ORDER" ."</b>"."</td>";
	echo"<td <h3 align=center>"."<b>"."AMOUNT" ."</b>"."</td>";
	echo"<td <h3 align=center>"."<b>"."DATE" ."</b>"."</td>";

	while($row=mysql_fetch_array($result))
		{
		
		
		echo"<tr>";
		echo"<td align=center>". $row['extra'] ."</td>";
		echo"<td align=center>". $row['amt'] ."</td>";
		echo"<td align=center>". $row['petsa'] ."</td>";
		
	 

		}
			$result= mysql_query( "select * from $customer where extra!='Order'  ") or die(mysql_error());		
	if ($result)
	{
	echo "<table width=1000 border=1 align=center>";
	echo"<td <h3 align=center>"."<b>"."EXTRA_CHARGES" ."</b>"."</td>";
	echo"<td <h3 align=center>"."<b>"."PRICE" ."</b>"."</td>";
	echo"<td <h3 align=center>"."<b>"."QUANTITY" ."</b>"."</td>";
	echo"<td <h3 align=center>"."<b>"."AMOUNT" ."</b>"."</td>";
	echo"<td <h3 align=center>"."<b>"."DATE" ."</b>"."</td>";

	while($row=mysql_fetch_array($result))
		{
		
		
		echo"<tr>";
		echo"<td align=center>". $row['extra'] ."</td>";
		echo"<td align=center>". $row['price']."</td>";
		echo"<td align=center>". $row['qty'] ."</td>";
		echo"<td align=center>"."Php". $row['amt'] ."</td>";
		echo"<td align=center>". $row['petsa'] ."</td>";
		
	 

		}
		
		
	
	
		}
		
		
		
				
		 $result= mysql_query( "select * from $customer where id='$customer' && tag='CHECKOUT' ") or die(mysql_error());		
	if ($result)
	{
	
 	
	echo "<table width=1000 border=1 align=center>";
	echo"<td <h3 align=center>"."<b>"."ACCOMODATIONS" ."</b>"."</td>";
	echo"<td <h3 align=center>"."<b>"."EXTRA_CHARGES" ."</b>"."</td>";
	echo"<td <h3 align=center>"."<b>"."DOWNPAYMENT" ."</b>"."</td>";
	
	

	

	$row=mysql_fetch_array($result);
		{
		
		echo"<tr>";
		echo"<td align=center>"."Php". $row['accom'] ."</td>";
		echo"<td align=center>"."Php". $row['totalamt'] ."</td>";
		echo"<td align=center>"."Php". $row['down']."</td>";
		
	 

		}
		
		
		 $result= mysql_query( "select * from $customer where id='$customer' && tag='CHECKOUT' ") or die(mysql_error());	
		 
		 
		 	echo "<table width=1000 border=1 align=center>";
		 	echo"<td <h1 align=center>"."<b>"."GRAND_TOTAL" ."</b>"."</td>";
		 while($row=mysql_fetch_array($result))
		 	{
			
			 echo"<td <h1 align=center>"."Php". $row['grandt'] ."</td>";
			 
			 
			}
			
			
				
		 $result= mysql_query( "select * from $customer where id='$customer' && tag='CHECKOUT' ") or die(mysql_error());	
		 
		 
		 	echo "<table width=1000 border=1 align=center>";
		 	echo"<td <h1 align=center>"."<b>"."PAYMENT" ."</b>"."</td>";
		 while($row=mysql_fetch_array($result))
		 	{
			
			 echo"<td <h1 align=center>"."Php". $row['pay'] ."</td>";
			 
			 
			 
			 
			}
			
					
		 $result= mysql_query( "select * from $customer where id='$customer' && tag='CHECKOUT' ") or die(mysql_error());	
		 
		 
		 	echo "<table width=1000 border=1 align=center>";
		 	echo"<td <h1 align=center>"."<b>"."CHANGE" ."</b>"."</td>";
		 while($row=mysql_fetch_array($result))
		 	{
			
			 echo"<td <h1 align=center>"."Php". $row['sukli'] ."</td>";
			 
			 
			 
			 
			}
	
	
	
		
		}
		
	
		}else{header("location:pos.php");}
		
	
	
	}
	else{header("location:pos.php");}
	
	

	
	
         


		

			  ?>
  </p>
  <p align="right"><a href="poscustid2.php">&gt;&gt;    </a></p>
</div>
</body>
</html>
	
	