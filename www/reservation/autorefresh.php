<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<META HTTP-EQUIV=Refresh CONTENT="5;>
  <?php
			     
				
				
				
				 
				
				$date=date("d");
					
					
				mysql_connect("localhost","root")or die(mysql_error());
				mysql_select_db("dbacc")or die(mysql_error());
				 
				 
				 
				$sql="select*from tblmain where confirm='$date'";
				$result=mysql_query($sql);
							
			    while($row=mysql_fetch_array($result))	
				
				{
			    $row['id'];
				echo $id=$row['id'];
				
				$row['month'];
				$m=$row['month'];
				
			    $row['in'];
				$checkin=$row['in'];
				
			    $row['out'];
				$checkout=$row['out'];
				
			    $row['standardqty'];
				$standard=$row['standardqty'];
					
			    $row['junpreqty'];
				$jpre=$row['junpreqty'];
			
			    $row['premierqty'];
				$premier=$row['premierqty'];
				
				$row['preloftqty'];
				$preloft=$row['preloftqty'];
				
			    $row['annexqty'];
				$annex=$row['annexqty'];
				
			    $row['confirm'];
				$conid=$row['confirm'];
				
				//see if rid has a cid = date
				
				
				$r=$checkout-$checkin;
				
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
	$result= mysql_query( "delete  from tblmain where id='$id'  ") or die(mysql_error());
	header("location:reservation.php");	
				}
				
				else
				{
				
				 while($r>0)
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
	$result= mysql_query( "delete  from tblmain where id='$id'  ") or die(mysql_error());
	
	$r=$r-1;	//r is diff checkout-checkin
	$checkin=$checkin+1;
		header("location:reservation.php");	

				}	//end of while-2
				}	//end of else
				}	//end of while-1
	
	




$result= mysql_query( "select * from tblmain where confirm!='RESERVED' ") or die(mysql_error());		
	if ($result)
	{
	echo "<table width=3000 border=1 align=center>";
	echo"<td>"."<b>"."SAVE" ."</b>"."</td>";
	echo"<td>"."<b>"."DELETE" ."</b>"."</td>";
	echo"<td>"."<b>"."RESERVATION-ID" ."</b>"."</td>";
	echo"<td>"."<b>"."NAME"."</b>" ."</td>";
	echo"<td>"."<b>"."LASTNAME" ."</b>"."</td>";
	echo"<td>"."<b>"."M.I." ."</b>"."</td>";
	echo"<td>"."<b>"."CONTACT#"."</b>" ."</td>";
	echo"<td>"."<b>"."PLACE" ."</b>"."</td>";
	echo"<td>"."<b>"."STANDARD" ."</b>"."</td>";
	echo"<td>"."<b>"."JUNIOR PREMIER"."</b>" ."</td>";
	echo"<td>"."<b>"."PREMIER" ."</b>"."</td>";
	echo"<td>"."<b>"."PREMIER LOFT" ."</b>"."</td>";
	echo"<td>"."<b>"."ANNEX"."</b>" ."</td>";
	echo"<td>"."<b>"."TRIP" ."</b>"."</td>";
	echo"<td>"."<b>"."SENIOR(20% DISCOUNT)" ."</b>"."</td>";
	echo"<td>"."<b>"."NUMBER OF PERSONS"."</b>" ."</td>";
	echo"<td>"."<b>"."RATE" ."</b>"."</td>";
	echo"<td>"."<b>"."(50%)DOWN PAYMENT" ."</b>"."</td>";
	echo"<td>"."<b>"."MONTH"."</b>" ."</td>";
	echo"<td>"."<b>"."CHECK-IN" ."</b>"."</td>";
	echo"<td>"."<b>"."CHECK-OUT" ."</b>"."</td>";
	echo"<td>"."<b>"."YEAR" ."</b>"."</td>";
	echo"<td>"."<b>"."CONFIRMATION-ID" ."</b>"."</td>";
	echo"<td>"."<b>"."RESERVATION OFFICER" ."</b>"."</td>";
	
	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		?>
        </div>
          <p align="center"> </p></td>
      <td><a href="remarks.php?num=<?php echo $row['id'];?>">Save </a></td>
      <p></p>
      <?php
		?>
      <p align="center"> </p>
      <td><a href="deletecon.php?num=<?php echo $row['id'];?>">Delete </a></td>
      <p></p>
      <?php
		echo"<td>". $row['id']."</td>";
		echo"<td>". $row['name'] ."</td>";
		echo"<td>". $row['lname'] ."</td>";
		echo"<td>". $row['mi']."</td>";
		echo"<td>". $row['cont#'] ."</td>";
		echo"<td>". $row['place'] ."</td>";
		echo"<td>". $row['standardqty']."</td>";
		echo"<td>". $row['junpreqty'] ."</td>";
		echo"<td>". $row['premierqty'] ."</td>";
		echo"<td>". $row['preloftqty']."</td>";
		echo"<td>". $row['annexqty'] ."</td>";
		echo"<td>". $row['trip'] ."</td>";
		
		echo"<td>". $row['citizen'] ."</td>";
		echo"<td>". $row['numper'] ."</td>";
		echo"<td>". $row['rate']."</td>";
		echo"<td>". $row['down'] ."</td>";
		echo"<td>". $row['month'] ."</td>";
		echo"<td>". $row['in']."</td>";
		echo"<td>". $row['out'] ."</td>";
		echo"<td>". $row['yir'] ."</td>";
		echo"<td>". $row['confirm'] ."</td>";
		echo"<td>". $row['clerk'] ."</td>";
		
		echo"</tr>";
		

		}
		
				
	}	  
	

			  ?>
              
              
</body>
</html>
