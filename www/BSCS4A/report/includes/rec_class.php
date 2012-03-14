<?php
 
include ("connection.php");
Class Check extends Connection
{
    function daily_sales($rdate)
    {
    	if($this->connectdb('dbmseufcics'))
    	{
	    	$result = mysql_query("select * from tbl_sale where date(sale_date)='$rdate' ORDER BY sale_date") or die(mysql_error());
			 echo "<table width=900 border=0 align=center cellspacing=1 bgcolor=#AFC7C7>";
			 echo"<td>"."<b>"."Transaction ID"."</b>"."</td>";
			 echo"<td>"."<b>"."Product Code"."</b>"."</td>";
			 echo"<td>"."<b>"."Product Name"."</b>"."</td>";
			 echo"<td>"."<b>"."Category"."</b>"."</td>";
			 echo"<td>"."<b>"."Price " ."</b>"."</td>";
			 echo"<td>"."<b>"."QTY" ."</b>"."</td>";
			 echo"<td>"."<b>"."Total" ."</b>"."</td>";
			 echo"<td>"."<b>"."Sale Date" ."</b>"."</td>";
			// echo"<td>"."<b>"."Quantity " ."</b>"."</td>";
			// echo"<td>"."<b>"."Update" ."</b>"."</td>";
			 while($row=mysql_fetch_array($result))
							{
								
								if($row['id']%2==0)
									{$color=" bgcolor = '#a19f9e' ";}
									else{$color=" bgcolor='#FFF5EE'";}
									echo '<tr'.$color.'>';
									echo"<td>".$row['id']."</td>";
									echo"<td>". $row['product_code']."</td>";
									echo"<td>". $row['product_name']."</td>";
									echo"<td>". $row['category']."</td>";
									echo"<td>". $row['price']."</td>";
									echo"<td>". $row['qty']."</td>";
									echo"<td>". $row['total']."</td>";
									echo"<td>". $row['sale_date']."</td>";
									echo "</tr>";		
							}
							echo "</table>";
    	}
    }
 
     function daily_total($rdate)
    {
    	$result = mysql_query("select sum(total) as total_sales from tbl_sale where date(sale_date)='$rdate' ORDER BY sale_date") or die(mysql_error());
    	$row=mysql_fetch_array($result);
		echo "<font color=GREEN size=5>Daily Sales:".$row['total_sales']."</font>";
							
    }
    
    
    
    function wym_sales($sdate,$edate)
    {
    	if($this->connectdb('dbmseufcics'))
    	{
	    	$result = mysql_query("select * from tbl_sale where date(sale_date)>='$sdate' AND date(sale_date)<='$edate' ORDER BY sale_date") or die(mysql_error());
			 echo "<table width=900 border=0 align=center cellspacing=1 bgcolor=#AFC7C7>";
			 echo"<td>"."<b>"."Transaction ID"."</b>"."</td>";
			 echo"<td>"."<b>"."Product Code"."</b>"."</td>";
			 echo"<td>"."<b>"."Product Name"."</b>"."</td>";
			 echo"<td>"."<b>"."Category"."</b>"."</td>";
			 echo"<td>"."<b>"."Price " ."</b>"."</td>";
			 echo"<td>"."<b>"."QTY" ."</b>"."</td>";
			 echo"<td>"."<b>"."Total" ."</b>"."</td>";
			 echo"<td>"."<b>"."Sale Date" ."</b>"."</td>";
			// echo"<td>"."<b>"."Quantity " ."</b>"."</td>";
			// echo"<td>"."<b>"."Update" ."</b>"."</td>";
			 while($row=mysql_fetch_array($result))
							{
								
								if($row['id']%2==0)
									{$color=" bgcolor = '#a19f9e' ";}
									else{$color=" bgcolor='#FFF5EE'";}
									echo '<tr'.$color.'>';
									echo"<td>".$row['id']."</td>";
									echo"<td>". $row['product_code']."</td>";
									echo"<td>". $row['product_name']."</td>";
									echo"<td>". $row['category']."</td>";
									echo"<td>". $row['price']."</td>";
									echo"<td>". $row['qty']."</td>";
									echo"<td>". $row['total']."</td>";
									echo"<td>". $row['sale_date']."</td>";
									echo "</tr>";		
							}
							echo "</table>";
    	}
    }
    
    
 function wym_total($sdate,$edate)
    {
	   	$result = mysql_query("select sum(total) as total_sales from tbl_sale where date(sale_date)>='$sdate' AND date(sale_date)<='$edate' ORDER BY sale_date") or die(mysql_error());
    	$row=mysql_fetch_array($result);
		echo "<font color=GREEN size=5>Sales:".$row['total_sales']."</font>";
							
    }
 
}
?>