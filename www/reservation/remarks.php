<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
				 mysql_connect("localhost","root")or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 
				 $con=$_GET['num'];
				 
				 
				
	
				$sql="UPDATE tblmain SET confirm='RESERVED' where id='$con'";
				$result=mysql_query($sql);
				
				$result=mysql_query("select *from tblmain where id='$con'")or die(mysql_error());
				$row=mysql_fetch_array($result);
				
				$standard=$row['standardqty'];
					
			   
				$jpre=$row['junpreqty'];
			
				$premier=$row['premierqty'];
				
				
				$preloft=$row['preloftqty'];
				
			   
				$annex=$row['annexqty'];
				
                $row['name'];
				$cust=$row['name'];
												
			    $row['lname'];
				$lastn=$row['lname'];
				
			    $row['mi'];
				$mid=$row['mi'];
				
			    $row['rate'];
				$accom=$row['rate'];
				
			    $row['down'];
				$downpay=$row['down'];
					
			   
				$pos="$con"."$cust";
				
				
				 $mon1=$row['month']; 
				 $xin=$row['in'];
				 $mon2=$row['outmonth']; 
		         $xout=$row['out']; 
				 $gt=$downpay;
$sql="create table $pos(id INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(id),name VARCHAR(30),lname VARCHAR(30),mi VARCHAR(30),clerck VARCHAR(30),extra VARCHAR(30),price INT,qty INT,amt INT,totalamt INT,grandt INT,down INT,accom INT,pay INT,sukli INT,petsa VARCHAR(30),monthin VARCHAR(30),checkin VARCHAR(30),monthout VARCHAR(30),checkout VARCHAR(30),tablename VARCHAR(30),tag VARCHAR(30),standardqty INT,juniorpreqty INT,premierqty INT,premierloftqty INT,annexqty INT)";

mysql_query($sql)or die(mysql_error());

  $sql="insert into $pos (id,name,lname,mi,grandt,down,accom,monthin,checkin,monthout,checkout,tablename,tag,standardqty,juniorpreqty,premierqty,premierloftqty ,annexqty )values('$con','$cust','$lastn','$mid','$gt','$downpay','$accom', '$mon1','$xin','$mon2','$xout','$pos','RESERVED','$standard','$jpre','$premier','$preloft','$annex')";
	
		mysql_query($sql)or die(mysql_error());
	
				header("location:reservation.php");
				 
				 
				 
				 ?>
</body>
</html>
