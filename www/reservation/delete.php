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
	$del=$_GET['user'];
	
	 // Make a MySQL Connection
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("dbacc") or die(mysql_error());
// Retrieve all the data from the "example" table
 
 	$sql="delete from tbllog where username='$del'";
	$result=mysql_query($sql);

	

// if successfully updated. 
	if($result){
	echo "<H1> Successful </H1>";
	echo '<td><a href="view.php">Home</a></td>';
	echo "<BR>";
	}

	else {
	echo "<H1> ERROR </H1>";
	}




?>


</body>
</html>
