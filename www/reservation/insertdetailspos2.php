<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
        		  
				$qty=$_POST['txtqty'];
				 fscanf(STDIN,"%d",$qty);
				
			  $prod1=$_POST['txtprod']; 
 			 $customer=$_COOKIE['nid'];
			  $sech=$_COOKIE['expl'];
			 $us=$_COOKIE['name'];
			  
			   
				$prodit=$_COOKIE['cart'];
			  $date=date("D/M/Y");
			  
				
			  mysql_connect("localhost","root")or die(mysql_error());
			  mysql_select_db("dbacc")or die(mysql_error());
	          
			  
			  
	
if(is_numeric($qty) && $qty!=null)//firewall
{
	
	if($sech=='Beverages'||$sech=='Food' )//condition
	
		{

		 
			 $result= mysql_query( "select * from $sech where Item='$prodit' ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td align=center>"."<b>"."STOCK_CODE" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."PRODUCT" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."PRICE" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."STOCKS" ."</b>"."</td>";
	

	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		
		echo"<td align=center>". $row['stockcode']."</td>";
		echo"<td align=center>". $row['Item']."</td>";
		echo"<td align=center>". $row['Price'] ."</td>";
		echo"<td align=center>". $row['Stocks'] ."</td>";
		
	   $code=$row['stockcode'];
	   $product=$row['Item'];
	    $price1=$row['Price'];
		$stock=$row['Stocks'];

		}
		
		
		if($qty<=$stock)//firewall stock
		{
		
		
		
		
		 $result= mysql_query( "select * from $customer where tablename='$customer' ") or die(mysql_error());		
	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		
	   $total=$row['totalamt'];
	   $accomo=$row['accom'];
	   $downp=$row['down'];
	  

		}
		
			
		
		
	      
		  $amount=$qty*$price1;
		  $total=$total+$amount;
		  $stock=$stock-$qty;
		  $less=$total+$accomo;
		  $less=$less-$downp;
		
	$result= mysql_query("insert into $customer(clerck,extra,price,qty,amt,petsa) values('$us','$product','$price1','$qty','$amount','$date') ")  or die(mysql_error());
		
		$sql="UPDATE $sech SET Stocks='$stock' WHERE stockcode='$code'";
	$result=mysql_query($sql);
	
			
		$sql="UPDATE $customer SET totalamt='$total' WHERE tablename='$customer'";
	$result=mysql_query($sql);
		$sql="UPDATE $customer SET grandt='$less' WHERE tablename='$customer'";
	$result=mysql_query($sql);
	
	
		header("location:posview.php");
		
		
	
		} else{header("location:pos.php");}//firewall stock
		
	  
		}	 else{	header("location:pos.php");}//result
	
	
	
	
	}//condition
	
	
	else if($sech=='Activities'|| $sech=='House_keeping' || $sech=='Meal')//condition
	
		{
		
		
		 $result= mysql_query( "select * from $sech where Item='$prodit' ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td align=center>"."<b>"."STOCK_CODE" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."PRODUCT" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."PRICE" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."STOCKS" ."</b>"."</td>";
	

	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		
		echo"<td align=center>". $row['stockcode']."</td>";
		echo"<td align=center>". $row['Item']."</td>";
		echo"<td align=center>". $row['Price'] ."</td>";
		echo"<td align=center>". $row['Stocks'] ."</td>";
		
	   $code=$row['stockcode'];
	   $product=$row['Item'];
	    $price1=$row['Price'];
		$stock=$row['Stocks'];

		}
		
		
		 $result= mysql_query( "select * from $customer where tablename='$customer' ") or die(mysql_error());		
	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		
	   $total=$row['totalamt'];
	   $accomo=$row['accom'];
	   $downp=$row['down'];
	  

		}
		
			
		
		
	     
		 $amount=$qty*$price1;
		 $total=$total+$amount;
		 
		  $less=$total+$accomo;
		  $less=$less-$downp;
		$result= mysql_query("insert into $customer(clerck,extra,price,qty,amt,petsa) values('$us','$product','$price1','$qty','$amount','$date') ")  or die(mysql_error());
		
		$sql="UPDATE $sech SET Stocks='$stock' WHERE stockcode='$code'";
	$result=mysql_query($sql);
		
		$sql="UPDATE $customer SET totalamt='$total' WHERE tablename='$customer'";
	$result=mysql_query($sql);
	$sql="UPDATE $customer SET grandt='$less' WHERE tablename='$customer'";
	$result=mysql_query($sql);
	
	
	
	
		header("location:posview.php");
		
		
		}else{	header("location:pos.php");}//result
		
		
		
		
		}//condition
	
	
	else if(
	$sech=='Special_order')//condition
	
		{
		
		
		 $result= mysql_query( "select * from $sech where Item='$prodit' ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td align=center>"."<b>"."STOCK_CODE" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."PRODUCT" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."AMOUNT" ."</b>"."</td>";
	

	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		
		echo"<td align=center>". $row['stockcode']."</td>";
		echo"<td align=center>". $row['Item']."</td>";
		echo"<td align=center>". $row['amt'] ."</td>";
		
		
	   
	   $product=$row['Item'];
		


		}
		
		
		 $result= mysql_query( "select * from $customer where tablename='$customer' ") or die(mysql_error());		
	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		
	   $total=$row['totalamt'];
	    $accomo=$row['accom'];
	    $downp=$row['down'];
	  
		}
		
		
		$amount=$qty;
		 $total=$total+$amount;
		 
		  $less=$total+$accomo;
		  $less=$less-$downp;
			
		
		
		$result= mysql_query("insert into $customer(clerck,extra,amt,petsa) values('$us','$product','$amount','$date') ")  or die(mysql_error());
		
		
	
	$sql="UPDATE $customer SET totalamt='$total' WHERE tablename='$customer'";
	$result=mysql_query($sql);
	$sql="UPDATE $customer SET grandt='$less' WHERE tablename='$customer'";
	$result=mysql_query($sql);
	
	
	
	
	
		header("location:posview.php");
		
		
		}else{	header("location:pos.php");}//result
		  
	  }else{	header("location:pos.php");}//condition
		  
		
	
	}else{	header("location:pos.php");}//firewall
	
	
	
	
			
?>
</body>
</html>
