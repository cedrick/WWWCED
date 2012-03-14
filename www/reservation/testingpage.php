<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <label></label><p>
    <?php

				
					//$num=4;
					
					//$name="cedrick";
					
					//$result="$num"."$name";
					
 				 mysql_connect("localhost","root")or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				  
				
				 
				 //echo $currentmonth=date("n");
					 $currentmonth=date("n");
					 //echo $currentmonth;
					 $date=date("j");
					//echo $date=$date+03;
					//$currentmonth=12;
					//$date=31;
					 	
			// if( $currentmonth==12 && $date==31 )
			
			//{ 
				//$confirm=0;
				//if($confirm==0)
				//{
			     
					//header("location:cc2.php");
				//}		
				
				
				
				//else{}	  
			//}
			//else
			//{
			
			  //echo "mali!";
			//}
			
						
				
					//$currentmonth=12;
					//$date=31;
					
	 //if(($currentmonth==2 && $date==28) && (
		//{
			//$date=0;
			//$currentmonth=$currentmonth+1;
			//$confirm=$date+3;
			
		//}
	//else if( $currentmonth==4 && $date==30 )
			//{
			
		   // $date=0;
			//$currentmonth=$currentmonth+1;
		//	$confirm=$date+3;
			  
			
			//}
			//else if(  $currentmonth==6 && $date==30 )
			//{
			
		   // $date=0;
			//$currentmonth=$currentmonth+1;
			//$confirm=$date+3;
			  
			
			//}
			
			//else if(  $currentmonth==9 && $date==30 )
			//{
			
		   // $date=0;
			//$currentmonth=$currentmonth+1;
			//$confirm=$date+3;
			  
			
			//}
		
		
			//else if(  $currentmonth==11 && $date==30 )
			//{
			
		   // $date=0;
			//$currentmonth=$currentmonth+1;
			//$confirm=$date+3;
			  
			
			//}
				
		
			//else if($currentmonth==1 && $date==31  )
			//{
			
		    //$date=0;
			//$currentmonth=$currentmonth+1;
			//$confirm=$date+3;
			  
			
			//}
			
			//else if($currentmonth==5 && $date==31  )
		//	{
			
		   // $date=0;
		//	$currentmonth=$currentmonth+1;
		//	$confirm=$date+3;
			//  
			
		//	}
			
				
			//else if($currentmonth==7 && $date==31  )
		//	{
			
		 //  $date=0;
			//$currentmonth=$currentmonth+1;
			//$confirm=$date+3;
		//	  
			
			//}
			
					
			//else if($currentmonth==8 && $date==31  )
			//{
			
		    //$date=0;
			//$currentmonth=$currentmonth+1;
		//	$confirm=$date+3;
			  
			
		//	}
			
				//else if($currentmonth==3 && $date==31  )
			//{
			
		   // $date=0;
			//$currentmonth=$currentmonth+1;
		//	$confirm=$date+3;
			  
			
		//}
			
			
			//else if($currentmonth==10 && $date==31  )
			//{
			//
		  //  $date=0;
		//	$currentmonth=$currentmonth+1;
			//$confirm=$date+3;
			  
			
			//}
			
			

			
			//else if( $currentmonth==12 && $date==31 )
			
			//{ 
				
			   
				    
				//	header("location:cc2.php");
				 
				
			  
			//}
			
			
			//else
			//{
			//  
			 // $confirm=$date+3;
			
			//}
					
			
					
				 
					
				 
				
                 //$result=mysql_query("select *from feb where month='1' ") or die(mysql_error());
				// $row=mysql_fetch_array($result);
				 
				//$row['standard'];
				
				//$row['junpre'];
				
				//$row['premier'];
			

				//$row['premierloft'];
				
             
				//$row['annex'];
				//$num=$_POST['txtnum'];
				//$x=strlen($num);
				//echo $x;
				
				//function checkmonth($mon,$xin,$xout)
				 // {
				//if($mon=='Feb' && $xin<=28 && $xout<=28)
				//	{
						//return TRUE;
						
					//}	
				//}
				
				
				 //if(checkmonth("Feb",28,27)==TRUE)
				// {echo "Correct";}
	//mysql_query("create table $result(id INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(id),name VARCHAR(30),age INT)")or die(mysql_error());

	 // $mon=$_POST['txtmon'];	
	  
	  
	  //echo $mon;	
	  $month='Jan';
	  $month2='Mar';
	  
					$read=$checkout-$checkin;
				$currentmonth=date("n");
				$date =date("j");
				
				function convert($cmon1) //convert $month to numbers
				{
				  if($cmon1=='Jan')
				  {
				    
				     $xmon=1;
					 return $xmon;
	
				
				  }
				  
				  
				 else if($cmon1=='Feb')
				  {
				    
				     $xmon=2;
					 return $xmon;
				
				  }
				   else if($cmon1=='Mar')
				  {
				    
				     $xmon=3;
					 return $xmon;
				
				  }
				   else if($cmon1=='Apr')
				  {
				    
				     $xmon=4;
					 return $xmon;
				
				  
								
				  }
					 else if($cmon1=='May')
				  {
				    
				     $xmon=5;
					 return $xmon;
				
				  }	
					 else if($cmon1=='Jun')
				  {
				    
				     $xmon=6;
					 return $xmon;
				
				  }
					 else if($cmon1=='Jul')
				  {
				    
				     $xmon=7;
					 return $xmon;
				
				  }
					 else if($cmon1=='Aug')
				  {
				    
				     $xmon=8;
					 return $xmon;
				
				  }
					 else if($cmon1=='Sep')
				  {
				    
				     $xmon=9;
					 return $xmon;
				
				  }
					 else if($cmon1=='Oct')
				  {
				    
				     $xmon=10;
					 return $xmon;
				
				  }
					 else if($cmon1=='Nov')
				  {
				    
				     $xmon=11;
					 return $xmon;
				
				  }
					 else 
				  {
				    
				     $xmon=12;
					 return $xmon;
				
				  }
					
				}
				
				
				
				function convert2($cmon2) //convert2 $month2 to numbers
				{
				  if($cmon2=='Jan')
				  {
				    
				     $xmon2=1;
					 return $xmon2;
				
				  }
				  
				  
				 else if($cmon2=='Feb')
				  {
				    
				     $xmon2=2;
					 return $xmon2;
	
				
				  }
				   else if($cmon2=='Mar')
				  {
				    
				     $xmon2=3;
					 return $xmon2;
				
				  }
				   else if($cmon2=='Apr')
				  {
				    
				     $xmon2=4;
					 return $xmon2;
				
				  
								
				  }
					 else if($cmon2=='May')
				  {
				    
				     $xmon2=5;
					 return $xmon2;
				
				  }	
					 else if($cmon2=='Jun')
				  {
				    
				     $xmon2=6;
					 return $xmon2;
				
				  }
					 else if($cmon2=='Jul')
				  {
				    
				     $xmon2=7;
					 return $xmon2;
				
				  }
					 else if($cmon2=='Aug')
				  {
				    
				     $xmon2=8;
					 return $xmon2;
				
				  }
					 else if($cmon2=='Sep')
				  {
				    
				     $xmon2=9;
					 return $xmon2;
				
				  }
					 else if($cmon2=='Oct')
				  {
				    
				     $xmon2=10;
					 return $xmon2;
				
				  }
					 else if($cmon2=='Nov')
				  {
				    
				     $xmon2=11;
					 return $xmon2;
				
				  }
				  
				  
				   else 
				  {
				    
				     $xmon=12;
					 return $xmon2;
				
				  }
					
					
					
				}
				
											
				  $x=convert($month);				
				  $y=convert2($month2);
				  echo $x;
				  echo $y;
				//echo $xmon;
				//echo $xmon2;
				 
				 //echo $x;
				 //echo $y;
					
		
?>
  </p>
  <p>
    <label></label>
  </p>
  <p>
    <label></label>
  </p>
</form>
</body>
</html>
