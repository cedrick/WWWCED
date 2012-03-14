<?php
 
include ("connection.php");
Class Check extends Connection
{
    function show_items()
    {
    	if($this->connectdb('dbmseufcics'))
    	{
	    	$result = mysql_query("SELECT * FROM tblinventory ORDER BY category") or die(mysql_error());
			 echo "<table width=500 border=0 align=center cellspacing=1 bgcolor=#AFC7C7>";
			 echo"<td>"."<b>"."Product Code"."</b>"."</td>";
			 echo"<td>"."<b>"."Product Name"."</b>"."</td>";
			 echo"<td>"."<b>"."Category"."</b>"."</td>";
			 echo"<td>"."<b>"."Price " ."</b>"."</td>";
			 echo"<td>"."<b>"."Stocks" ."</b>"."</td>";
			 echo"<td>"."<b>"."ADD ITEM" ."</b>"."</td>";
			
			// echo"<td>"."<b>"."Quantity " ."</b>"."</td>";
			// echo"<td>"."<b>"."Update" ."</b>"."</td>";
			 while($row=mysql_fetch_array($result))
							{
								
								if($row['id']%2==0)
									{$color=" bgcolor = '#a19f9e' ";}
									else{$color=" bgcolor='#FFF5EE'";}
									echo '<tr'.$color.'>';
									echo"<td>". $row['product_code']."</td>";
									echo"<td>".$row['product_name']."</td>";
									echo"<td>". $row['category']."</td>";
									echo"<td>". $row['price']."</td>";
									echo"<td>". $row['stocks']."</td>";
									echo"<td>"."<a href=qty.php?id=$row[id]>"."<font color=#6C95CB>ADD ITEM</font>"."</a>"."</td>";
									echo "</tr>";		
							}
							echo "</table>";
    	}
    }
    
    
 
    function show_basket($item,$qty)
    {
    	if($this->connectdb('dbmseufcics'))
    	{
	    	$item = $_COOKIE['id'] = $item;
	    	$qty = $_COOKIE['qty']= $qty;
    		$sql="SELECT * FROM tblinventory where id='$item'";
			$result = mysql_query($sql) or die(mysql_error());
			 echo "<table width=500 border=0 align=center cellspacing=1 bgcolor=#AFC7C7>";
			 echo"<td>"."<b>"."Product Name"."</b>"."</td>";
			 echo"<td>"."<b>"."Product Code"."</b>"."</td>";
			 echo"<td>"."<b>"."Category"."</b>"."</td>";
			 //echo"<td>"."<b>"."Stocks"."</b>"."</td>";
			 echo"<td>"."<b>"."Price " ."</b>"."</td>";
			 echo"<td>"."<b>"."Total" ."</b>"."</td>";
			 //echo"<td>"."<b>"."Decrease QTY" ."</b>"."</td>";
			// echo"<td>"."<b>"."Quantity " ."</b>"."</td>";
			// echo"<td>"."<b>"."Update" ."</b>"."</td>";
			 while($row=mysql_fetch_array($result))
							{
								
								if($row['id']%2==0)
									{$color=" bgcolor = '#a19f9e' ";}
									else{$color=" bgcolor='#FFF5EE'";}
									echo '<tr'.$color.'>';
									echo"<td>".$row['product_name']."</td>";
									echo"<td>". $row['product_code']."</td>";
									echo"<td>". $row['category']."</td>";
									//echo"<td>". $row['stocks']."</td>";
									echo"<td>". $row['price']."</td>";
									echo"<td>". $total = $_COOKIE['total']=$row['price']*$qty."</td>";
									//echo"<td>"."Delete Item"."</td>";
									echo "</tr>";	
									
									//declaration of global var
									$product = $_COOKIE['product']= $row['product_name'];
									$code = $_COOKIE['code']=$row['product_code'];
									$category = $_COOKIE['category']=$row['category'];
									$price = $_COOKIE['price']=$row['price'];	
							}
							echo "</table>";
    	}
    }
    
    
	//insert to temp table
	function insert_basket($item,$qty,$product,$code,$category,$price,$total)
    {
    	if($this->connectdb('dbmseufcics'))
    	{	
    			$sql="SELECT * FROM tblinventory where id='$item'";
				$result = mysql_query($sql) or die(mysql_error());
				 while($row=mysql_fetch_array($result))
				 {	
				 	echo "Stocks is:".$_COOKIE['stocks']=$row['stocks']."-1";
				 }	
				 if($_COOKIE['stocks']>0)
				 {
			    		//get bir no
				 		echo"<br>";
				 		$sql="SELECT * FROM tbl_bir ";
						$result = mysql_query($sql) or die(mysql_error());
						$row=mysql_fetch_array($result);
						 echo "BIR NO:".$_COOKIE['bir_no']=$row['bir_no']+1;
						 
						 
				 		$sql = "INSERT INTO tbl_temp (bir_no,product_code,product_name,category,price,qty,total,sale_date) 
						VALUES('".$_COOKIE['bir_no']."','".$_COOKIE['code']."','".$_COOKIE['product']."','".$_COOKIE['category']."','".$_COOKIE['price']."','".$qty."','". $_COOKIE['total']."',NOW())"; 
			    		if($result = mysql_query($sql))
			    		{
			    			
			    			$sql="SELECT * FROM tblinventory where id='$item'";
							$result = mysql_query($sql) or die(mysql_error());
							 while($row=mysql_fetch_array($result))
							 {
							 	
							 	$new_stock = $row['stocks']-$qty;
							 }
			    					$sql= " UPDATE tblinventory 
									SET stocks=$new_stock
									WHERE id=$item";
									if($result = mysql_query($sql))
									{
										$sql = "INSERT INTO tbl_sale (trans_id,bir_no,product_code,product_name,category,price,qty,total,sale_date) 
										VALUES('".$_COOKIE['trans_id']."','".$_COOKIE['bir_no']."','".$_COOKIE['code']."','".$_COOKIE['product']."','".$_COOKIE['category']."','".$_COOKIE['price']."','".$qty."','". $_COOKIE['total']."',NOW())"; 
										if($result = mysql_query($sql))
										{
											return TRUE;
										}else{
											return FALSE;
										}
										
									}else{
										return FALSE;
									}
									 
			    		}else{
			    			echo "Error!";
			    			return FALSE;
			    		}
				 }else{
				 	echo "<br>";
				 	echo "Out of Stock";
				 }
    	}
    }
    
    
    function show_all_basket()
    {
    	if($this->connectdb('dbmseufcics'))
    		{		
    			
    			$sql="SELECT * FROM tbl_temp";
				$result = mysql_query($sql) or die(mysql_error());
				 echo "<table width=500 border=0 align=center cellspacing=1 bgcolor=#AFC7C7>";
				 echo"<td>"."<b>"."Transaction ID"."</b>"."</td>";
				 echo"<td>"."<b>"."Product Name"."</b>"."</td>";
				 echo"<td>"."<b>"."Product Code"."</b>"."</td>";
				 echo"<td>"."<b>"."Category"."</b>"."</td>";
				 echo"<td>"."<b>"."Price " ."</b>"."</td>";
				 echo"<td>"."<b>"."QTY" ."</b>"."</td>";
				 echo"<td>"."<b>"."Total" ."</b>"."</td>";
				 // echo"<td>"."<b>"."Update" ."</b>"."</td>";
				 while($row=mysql_fetch_array($result))
							{
								
								if($row['id']%2==0)
									{$color=" bgcolor = '#a19f9e' ";}
									else{$color=" bgcolor='#FFF5EE'";}
									echo '<tr'.$color.'>';
									echo"<td>".$_COOKIE['trans_id']=$row['trans_id']."</td>";
									echo"<td>".$row['product_code']."</td>";
									echo"<td>". $row['product_name']."</td>";
									echo"<td>". $row['category']."</td>";
									echo"<td>". $row['price']."</td>";
									echo"<td>". $row['qty']."</td>";
									echo"<td>". $row['total']."</td>";
									//echo"<td>"."Delete Item"."</td>";
									echo "</tr>";	
									$_COOKIE['trans_id'];
							}
							echo "</table>";
    		}
							
							
    }
    
    function invoice_total()
    {
    		if($this->connectdb('dbmseufcics'))
    		{		
    			
			    	$sql="SELECT sum(total) as grand_total from tbl_temp";
			    	$result = mysql_query($sql) or die(mysql_error());
			    	$row=mysql_fetch_array($result);
			    	echo "<font color=GREEN size=5>Grand Total:".$_COOKIE['gt']=$row['grand_total']."</font>";
				 	$_COOKIE['gt'];
    		}
    	
    }
    
     function preview_transaction()
    {
    		if($this->connectdb('dbmseufcics'))
    		{		
    				
			    	//get transaction info
    				$sql="SELECT * from tbl_trans";
			    	$result = mysql_query($sql) or die(mysql_error());
			    	$row=mysql_fetch_array($result);
			    	echo "<font color=GREEN size=5>Grand Total:".$row['total']."</font>";
			    	echo "<br>";
			    	echo "<font color=GREEN size=5>Payment:".$row['payment']."</font>";
			    	echo "<br>";
			    	echo "<font color=GREEN size=5>Change:".$row['rchange']."</font>";
    		}
    	
    }
    
   function get_birno()
   {
	   	if($this->connectdb('dbmseufcics'))
	    		{
   				 	//get bir no
    				$sql="SELECT * from tbl_bir";
			    	$result = mysql_query($sql) or die(mysql_error());
			    	$row=mysql_fetch_array($result);
			    	echo "<font color=GREEN size=5>Sales Reciept#:".$row['bir_no']."</font>";
	    		}
   } 
    
    
    

    function payment($pay)
    {
    				
			    	$gt=$_COOKIE['gt'];
    				$pay=$_COOKIE['pay']=$pay;
    				
    				echo "<font color=GREEN size=5>Payment:".$pay."</font>";
    				echo "<br>";
    				echo "<font color=GREEN size=5>Change:".$change=$pay-$_COOKIE['gt']."</font>";
    				
    				//update transaction details
					$sql=" UPDATE tbl_trans SET payment='$pay',rchange='$change',total='$gt'";
					if($result = mysql_query($sql))
					{
						return TRUE;
					}else{
						echo "Error! transaction update";
						return FALSE;
					}
    }
    
    function clear_transaction()
    {

    	if($this->connectdb('dbmseufcics'))
    		{    		
				 	 //get bir no	
	    			$sql="SELECT * FROM tbl_bir ";
					$result = mysql_query($sql) or die(mysql_error());
					$row=mysql_fetch_array($result);
					$_COOKIE['bir_no']=$row['bir_no']+1;
						 
    				//update bir no
					$sql=" UPDATE tbl_bir SET bir_no='".$_COOKIE['bir_no']."' ";
					$result = mysql_query($sql) or die(mysql_error());
    				
    				//update transaction details
					$sql=" UPDATE tbl_trans SET payment='0',rchange='0',total='0'";
					if($result = mysql_query($sql))
					{
						return TRUE;
						// empty basket
						
					}else{
						echo "Error! transaction update";
						return FALSE;
					}
					
					
					
    		}
    }
    
    function clear_basket()
    {
    		$sql="DELETE from tbl_temp";
			if($result = mysql_query($sql))
				{
				    echo "Basket Cleared!";
				    header("location:POS.php");
				 }else{
				    	echo "Basket Error!";
				     }
    }
 
}
?>