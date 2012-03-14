<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
 <?php
session_start();
if(!session_is_registered(username1))

{
  header("location:admin.php");
  

}
?>
<?php
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

				 
				 
				 mysql_connect("localhost","root")or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 
				  $ID=$_GET['num'];
				 
				$sql="select*from tblmain where id='$ID'";
				$result=mysql_query($sql);
				$row=mysql_fetch_array(	$result);	
				
				
				$m=$row['month'];
				$row['outmonth'];
				$outm=$row['outmonth'];
				
				$checkin=$row['in'];
				$checkout=$row['out'];
				$standard=$row['standardqty'];
				$jpre=$row['junpreqty'];
				$premier=$row['premierqty'];
				$preloft=$row['preloftqty'];
				$annex=$row['annexqty'];
				
				
				$x=convert($m);
				$y=convert2($outm);
				
				$r=wca($x,$y,$checkin,$checkout);
				
				if($x==$y)
					{$g=$r;}
				else {$g=$r-$checkout;}
				
				if($r==0)
				{
					$result=mysql_query("select * from $m where month='$checkin'  " )or die(mysql_error());
					$row=mysql_fetch_array($result);
				
					$row['standard'];
					$f=$row['standard']+$standard;	//standard

					$row['junpre'];
					$j=$row['junpre']+$jpre; //junior premier

					$row['premier'];
					$pr=$row['premier']+$premier;	//premier

					$row['premierloft'];
					$plf=$row['premierloft']+$preloft;	//premier loft

					$row['annex'];
					$annx=$row['annex']+$annex;	//annex

$sql="UPDATE $m SET standard='$f',junpre='$j',premier='$pr',premierloft='$plf',annex='$annx' WHERE month='$checkin'";
	$result=mysql_query($sql);
	$sql="delete from tblmain where id='$ID'";
	$result=mysql_query($sql);
	
header("location:reservation.php");

			
				}
				
				
				
				
				
				
				else
				{
				
				 while($r>0 && $g>=0)
				{
				$result=mysql_query("select * from $m where month='$checkin'  " )or die(mysql_error());
					$row=mysql_fetch_array($result);
				
					$row['standard'];
					$f=$row['standard']+$standard;	//standard

					$row['junpre'];
					$j=$row['junpre']+$jpre; //junior premier

					$row['premier'];
					$pr=$row['premier']+$premier;	//premier

					$row['premierloft'];
					$plf=$row['premierloft']+$preloft;	//premier loft

					$row['annex'];
					$annx=$row['annex']+$annex;	//annex

	$sql="UPDATE $m SET standard='$f',junpre='$j',premier='$pr',premierloft='$plf',annex='$annx' WHERE month='$checkin'";
	$result=mysql_query($sql);
	$sql="delete from tblmain where id='$ID'";
	$result=mysql_query($sql);
	
	if($g==0 && $x<$y)
	{
		$m=$outm;
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
	
	header("location:reservation.php");
				
				}
				
				
				}
				 
				 
				 
				 ?>
</body>
</html>
