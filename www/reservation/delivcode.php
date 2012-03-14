<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
				$warehs=$_POST['txtbev'];
		  		 $prod=$_POST['txtprod'];
				 $status=$_POST['txtstat'];
				 
			     $stck=$_POST['txtstck'];
				 //fscanf(STDIN,"%d",$stck);
				 
				 $price=$_POST['txtprice'];
				 //fscanf(STDIN,"%d",$price);
			    $us=$_COOKIE['name'];  
				 
				 $date=$_POST['txtdate'];
				
				  $month=$_POST['txtmonth']; 
				 $checkin=$_POST['txtdayfrm'];
				  $year=$_POST['txtyir'];
				  
				 	
				function checkmonth($mon,$xin,$xout)  // Function wca // to check the end of the month booking
				{
				if($mon=='Feb' && $xin<=28 && $xout<=28)
					{
						return TRUE;
					}	
				else if($mon=='Apr' && $xin<=30 && $xout<=30)
					{
						return TRUE;
					}
				else if($mon=='June' && $xin<=30 && $xout<=30)
					{
						return TRUE;
					}	
				else if($mon=='Sept' && $xin<=30 && $xout<=30)
					{
						return TRUE;
					}	
				else if($mon=='Nov' && $xin<=30 && $xout<=30)
					{
						return TRUE;
					}		
				else if($mon=='Jan' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}	
				else if($mon=='Mar' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else if($mon=='May' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else if($mon=='Jul' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else if($mon=='Aug' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else if($mon=='Oct' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else if($mon=='Decem' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else
					{
						return FALSE;
					}	
				}
				 
				 
				
				 
				mysql_connect("localhost","root", "") or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 
				 
				 
		if (is_numeric($price) && is_numeric($stck) && $prod!=null && $stck!=null && $price!=null &&                              checkmonth($month,$checkin,$checkout)==TRUE && $warehs=='Beverages' )
		     {
				 
				
						$date="$month"."$checkin"."$year";
		$result= mysql_query("insert into $warehs (Item,Stocks,Price,Date,officer)values('$prod','$stck','$price','$date','$us') ");$result= mysql_query("insert into tblbev (Item,Stocks,Price,month,officer,day,year)values('$prod','$stck','$price','$month','$us','$checkin','$year') ");
			
			
					header("location:vcmessage.php");
				
		  }		
		  
		  	else if (is_numeric($price) && is_numeric($stck) && $prod!=null && $stck!=null && $price!=null &&                              checkmonth($month,$checkin,$checkout)==TRUE && $warehs=='Food')
		     {
				 
				
						$date="$month"."$checkin"."$year";
					
		$result= mysql_query("insert into $warehs (Item,Stocks,Price,Date,officer)values('$prod','$stck','$price','$date','$us') ");
$result= mysql_query("insert into tblfood (Item,Stocks,Price,month,officer,day,year)values('$prod','$stck','$price','$month','$us','$checkin','$year') ");
			
			
					header("location:vcmessage.php");
				
		  }	
		  
		  
		
		 	 	 
			else{header("location:pos.php");}
			
			
		  ?>
</body>
</html>
