<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<table width="200" border="0" align="center">
              
              <tr>
                <td width="163"><div align="center">
                  <?php
			     
				
				
				 $name=$_POST['txtname'];
				 fscanf(STDIN,"%c",$name);
				 $ln=$_POST['txtln'];
				 fscanf(STDIN,"%c",$ln);
				 $mi=$_POST['txtmi'];
				 fscanf(STDIN,"%c",$mi);
				 $plc=$_POST['txtplc'];
				 fscanf(STDIN,"%c",$plc);		 
				 $num=$_POST['txtcont'];
				 fscanf(STDIN,"%d",$num);
				 
				 $sen=(int)$_POST['txtsen'];
				 fscanf(STDIN,"%d",$sen);
			     $qty=$_POST['txtqty'];
				 fscanf(STDIN,"%d",$qty);
				 $month=$_POST['txtmonth']; //list month input booking
				 $checkin=$_POST['txtdayfrm']; //booking
				  $month2=$_POST['txtmonth2']; //list month2 input booking
				 $checkout=$_POST['txtdayto']; //booking
				 $yir=$_POST['txtyir'];
				 $trip=$_POST['txttrip'];
				 $standard=$_POST['txtst'];
				 $jpre=$_POST['txtjp'];
				 $premier=$_POST['txtp'];
				 $preloft=$_POST['txtpl'];
				 $annex=$_POST['txta'];
				 $us=$_COOKIE['name']; 
				
		     	$digits=strlen($num);
				
				 mysql_connect("localhost","root")or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				
				
                 $result=mysql_query("select *from $month where month='$checkin' ") or die(mysql_error());
				 $row=mysql_fetch_array($result);
				 
				$row['standard'];
				$f=$row['standard'];
				$row['junpre'];
				$j=$row['junpre'];
				$row['premier'];
				$pr=$row['premier'];

				$row['premierloft'];
				$plf=$row['premierloft'];

				$row['annex'];
				$annx=$row['annex'];

					
				function checkmonth($mon,$xin,$xout)  // Function wca // to check the end of the month booking
				{
				if($mon=='Feb' && $xin<=28 )
					{
						return TRUE;
					}	
				else if($mon=='Apr' && $xin<=30 )
					{
						return TRUE;
					}
				else if($mon=='June' && $xin<=30)
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
				else if($mon=='May' && $xin<=31)
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
				else if($mon=='Decem' && $xin<=31 )
					{
						return TRUE;
					}
				else
					{
						return FALSE;
					}	
				}
				
				
				
				function checkmonthout($mon,$xin,$xout)  // Function wca // to check the end of the month booking
				{
				if($mon=='Feb' && $xin<=28 )
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
				else if($mon=='Decem' && $xin<=31 )
					{
						return TRUE;
					}
				else
					{
						return FALSE;
					}	
				}
				
				
			
			      function checkdec($xdec,$xdate) //expiration date wca
				  {
				  
				  	if($xdec==12 && $xdate==31)
					{
					
						return TRUE;
						
						
												
					}
					
					else if($xdec==12 && $xdate==30)
					{
						return TRUE;
					}
					
					
					else if($xdec==12 && $xdate==29)
					{
						return TRUE;
					}
					
					else{return FALSE;}
				  
				  
				  
				  
				  }
					
					
					
					
					
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
				    
				     $xmon2=12;
					 return $xmon2;
				
				  }
					
					
					
				}
				
							
				$x=convert($month);
				$y=convert2($month2);

				
				function dualmonth($dmon,$dmon2) //to disallow two months one month booking
				{
					$dcheck=$dmon2-$dmon;
					
					 if(($dcheck>=0)&&($dcheck<=1))
						{
									
							return TRUE;
						}
						
						else{ return FALSE; }
				
				}
				
				function compmonth($comp1,$comp2,$compcheck1,$compcheck2) //to disallow backward dates
				{
					if(($comp2>=$comp1 && $compcheck1<=$compcheck2) || ($comp2>$comp1 &&  $compcheck1>=$compcheck2))
					
						{
							return TRUE;
						
						
						}
						
						
						else 
						
					
						{
							return FALSE;
						
						
						}
						
					}
					
					function wca($wmon1,$wmon2,$wcheckin,$wcheckout)
					
					{
					if($wmon2>$wmon1)
						{
							if(($wmon1==3) || ($wmon1==1) || ($wmon1==7) || ($wmon1==5) || ($wmon1==8) || ($wmon1==10))
							{ 	$w=31-$wcheckin + $wcheckout;
								return $w;
							}
						else if (($wmon1==4) || ($wmon1==6) || ($wmon1==9) || ($wmon1==11))
							{	$w=30-$wcheckin + $wcheckout;
								return $w;
							}
						else if ($wmon1==28)
							{	$w=28-$wcheckin + $wcheckout;
								return $w;
								
							}
						else {	$w=$wcheckout - $wcheckin;
								return $w;
							 }	
					
						}
						
						else
							{
							 	$w=$wcheckout - $wcheckin;
								return $w;
							
							}					
					  }
							
					
					function xcheck($curmon,$curdate,$conx,$inx)//to disallow booking for previous dates
					{
						if($conx==$curmon && $inx>=$curdate)
						{
							return TRUE;
						
						}
						
					else if($conx>$curmon)
					
					
					
						{
						
							return TRUE;
						
						
						}
						
					else
						{
							return FALSE;
						}
					}
						
						
			
				
					if(	$name!=null && $ln!=null &&	$mi!=null && $plc!=null && $num!=null &&  is_numeric($qty)&&is_numeric($sen) && ctype_alpha($name) && ctype_alpha($ln) && ctype_alpha($mi) && ctype_alpha($plc) && is_numeric($num) && $standard<=$f && $jpre<=$j &&  $premier<=$pr && $preloft<=$plf && $annex<=$annx &&$digits=='11' && checkmonth($month,$checkin,$checkout)==TRUE &&         checkmonthout($month2,$checkin,$checkout)==TRUE && checkdec($currentmonth,$date)==FALSE && dualmonth($x,$y)==TRUE &&               xcheck($currentmonth,$date,$x,$checkin)==TRUE && compmonth($x,$y,$checkin,$checkout)==TRUE )		//START OF IF-1
					{
					
					 
					if($trip=='DAY' && $read==0) //computation of payment for day trip , START OF IF-2 
					{
					
						
							$p=($qty*750)+($sen*600);
							$day=1;
					
							
					$total=(((($standard*1800)+($jpre*2550 )+($premier*3500)+($preloft*4300)+($annex*2550))+$p)*$day)/2; 
					
					
					
						
					$gt=$total*2;
					$currentmonth=date("n");
					$date=date("j");
					
	 if($currentmonth==2 && $date==28) // to adjust reservation date
		{
			$date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			
		}
		else if($currentmonth==2 && $date==27)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
		else if($currentmonth==2 && $date==26)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==4 && $date==28)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==4 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
	else if( $currentmonth==4 && $date==30 )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
			else if($currentmonth==6&& $date==28)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==6 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
			else if(  $currentmonth==6 && $date==30 )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
			else if($currentmonth==9 && $date==28)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==9 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
			
			else if(  $currentmonth==9 && $date==30 )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
			else if($currentmonth==11 && $date==28)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==11 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
		
		
			else if(  $currentmonth==11 && $date==30 )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
				
		else if($currentmonth==1&& $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==1 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
		
			else if($currentmonth==1 && $date==31  )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
					else if($currentmonth==5 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==5 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
			
			else if($currentmonth==5 && $date==31  )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
		else if($currentmonth==7 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==7 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
				
			else if($currentmonth==7 && $date==31  )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
		else if($currentmonth==8 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==8 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
					
			else if($currentmonth==8 && $date==31  )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			}

		else if($currentmonth==3 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
		
		
		}
			else if($currentmonth==3 && $date==27)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
		else if($currentmonth==3 && $date==26)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
			
		else if($currentmonth==10 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==10 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
			
			else if($currentmonth==10 && $date==31  )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
			
	
						
			else
			{
			  
			  $confirm=$date+3;
			
			}
					
			
							
$sql="insert into tblmain 														values('$id','$name','$ln','$mi','$num','$plc','$standard','$jpre','$premier','$preloft','$annex','$month','$checkin','$checkout'     ,'$yir','$confirm','$trip','$sen','$qty','$gt','$total','$us','$month2')"; 
	
		mysql_query($sql)or die(mysql_error());





$result=mysql_query("select * from $month where month='$checkin'  " )or die(mysql_error());
$row=mysql_fetch_array($result);

			
	



$row['standard'];
$f=$row['standard']-$standard;	//standard

$row['junpre'];
$j=$row['junpre']-$jpre; //junior premier

$row['premier'];
$pr=$row['premier']-$premier;	//premier

$row['premierloft'];
$plf=$row['premierloft']-$preloft;	//premier loft

$row['annex'];
$annx=$row['annex']-$annex;	//annex

$sql="UPDATE $month SET standard='$f',junpre='$j',premier='$pr',premierloft='$plf',annex='$annx' WHERE month='$checkin'";
	$result=mysql_query($sql);
	
header("location:reservation.php");


}		//END OF IF-2
					
	else if(($trip=='NIGHT' && $read>0  ) || ($trip=='NIGHT' && read==0 && $x<$y) && ($standard>0 || $jpre>0 ||  $premier>0 || $preloft>0 || $annex>0) ) 		//START OF ELSE IF OF IF-2
					{
					
					$r=wca($x,$y,$checkin,$checkout);
				    $p=($qty*950)+($sen*760);
					   
					 
					$total=(((($standard*1800)+($jpre*2550 )+($premier*3500)+($preloft*4300)+($annex*2550))+$p)*$r)/2; 
						
					$gt=$total*2;
					$currentmonth=date("n");
					$date=date("j");
					
	 if($currentmonth==2 && $date==28)
		{
			$date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			
		}
		else if($currentmonth==2 && $date==27)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
		else if($currentmonth==2 && $date==26)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==4 && $date==28)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==4 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
	else if( $currentmonth==4 && $date==30 )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
			else if($currentmonth==6&& $date==28)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==6 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
			else if(  $currentmonth==6 && $date==30 )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
			else if($currentmonth==9 && $date==28)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==9 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
			
			else if(  $currentmonth==9 && $date==30 )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
			else if($currentmonth==11 && $date==28)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==11 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
		
		
			else if(  $currentmonth==11 && $date==30 )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
				
		else if($currentmonth==1&& $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==1 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
		
			else if($currentmonth==1 && $date==31  )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
					else if($currentmonth==5 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==5 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
			
			else if($currentmonth==5 && $date==31  )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
		else if($currentmonth==7 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==7 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
				
			else if($currentmonth==7 && $date==31  )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
		else if($currentmonth==8 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==8 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
					
			else if($currentmonth==8 && $date==31  )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			}

		else if($currentmonth==3 && $date==31)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
		
		
		}
			else if($currentmonth==3 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
		else if($currentmonth==3 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
			
		else if($currentmonth==10 && $date==29)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+1;
		
		
		}
		
		else if($currentmonth==10 && $date==30)
		
		{
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+2;
		
		
		}
			
			else if($currentmonth==10 && $date==31  )
			{
			
		    $date=0;
			$currentmonth=$currentmonth+1;
			$confirm=$date+3;
			  
			
			}
			
	
						
			else
			{
			  
			  $confirm=$date+3;
			
			}
							
$sql="insert into tblmain values('$id','$name','$ln','$mi','$num','$plc','$standard','$jpre','$premier','$preloft','$annex','$month','$checkin','$checkout'     ,'$yir','$confirm','$trip','$sen','$qty','$gt','$total','$us','$month2')";
	
		mysql_query($sql)or die(mysql_error());

if($x==$y)
{$g=$r;}
else {$g=$r-$checkout;}

while($r>0 && $g>=0)		//START OF WHILE OF ELSE OF ELSE IF OF IF-2
{
$result=mysql_query("select * from $month where month='$checkin'  " )or die(mysql_error());
$row=mysql_fetch_array($result);	
	

$row['standard'];
$f=$row['standard']-$standard;	//standard

$row['junpre'];
$j=$row['junpre']-$jpre; //junior premier

$row['premier'];
$pr=$row['premier']-$premier;	//premier

$row['premierloft'];
$plf=$row['premierloft']-$preloft;	//premier loft

$row['annex'];
$annx=$row['annex']-$annex;	//annex

$sql="UPDATE $month SET standard='$f',junpre='$j',premier='$pr',premierloft='$plf',annex='$annx' WHERE month='$checkin'";
	$result=mysql_query($sql);
	
	if($g==0 && $x<$y)
	{
		$month=$month2;
		$g=$r;
		$r=$r-1;
		$checkin=1;
		
	}
	
	else
	{
	
	$r=$r-1;//r is diff checkout-checkin
	$g=$g-1;	
	$checkin=$checkin+1;	
	}

}		//END OF WHILE OF ELSE OF ELSE IF OF IF-2

	
	header("location:reservation.php");
	
	

					
					
					
					}		//END OF ELSE IF OF IF-2
					
					else 	//START OF ELSE OF IF-2
					{		header("location:cc2.php"); }		//END OF ELSE OF IF-2
					
					
	
}		//END OF IF-1




	
	else if(checkdec($currentmonth,$date)==TRUE)	//START OF ELSE OF IF-1
	{
		
	
       	header("location:cc3expired.php");
	
	}	
	
	
	
	else{	header("location:cc2.php");}	//END OF ELSE OF IF-1
			  ?>
                </div></td>
              </tr>
            </table>
</body>
</html>
