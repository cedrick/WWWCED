
<?php
session_start();
if(!session_is_registered(username1))

{
  header("location:admin.php");
  

}
?>


<?php

/**
 * @author 
 * @copyright 2008
 */
 
 // Make a MySQL Connection
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("dbacc") or die(mysql_error());
// Retrieve all the data from the "example" table
 
 
	$USERNAME=$_POST['txtuser'];
	$PASSWORD=$_POST['txtpass'];
 
	$sql="UPDATE tbllog SET username='$USERNAME', password='$PASSWORD' WHERE username='$USERNAME'";
	$result=mysql_query($sql);

// if successfully updated. 
	if($result){
	echo "<H1> Successful </H1>";
	echo "<BR>";
	echo "<a href='view.php'>View result</a>";
	}

	else {
	echo "<H1> ERROR </H1>";
	}




?>

<p>&nbsp;</p>
