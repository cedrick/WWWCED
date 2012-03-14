<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>//</title>
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
// Make a MySQL Connection
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("dbacc") or die(mysql_error());
// Retrieve all the data from the "example" table
	
	
	$US=$_GET['name2'];


	$result = mysql_query("SELECT * FROM tbllog WHERE username='$US'")
	or die(mysql_error());
	
	$rows=mysql_fetch_array($result);

	
	?>

<form method="POST" action="update.php">
	<!--webbot bot="SaveResults" U-File="C:\wamp\www\IT 119 PHP Forms\_private\form_results.csv" S-Format="TEXT/CSV" S-Label-Fields="TRUE" -->
	
	<p align="center">&nbsp;</p>
  <p align="center"><b>Enter User Account:</b> 
	</p>
	<p align="center"><b>Enter Username:</b> 
	  <input type="text" name="txtuser" size="20" value="<?php echo $rows['username']; ?> "></p>
	<p align="center"><b>Enter Passwrod: 
	</b> 
	  <input type="text" name="txtpass" size="20" value="<?php echo $rows['password']; ?> "></p>
	<p align="center">
	  <input type="submit" value="Submit" name="B1">
	  <input type="reset" value="Reset" name="B2"></p>
</form>


<p>back to <a href="view.php">Back</a></p>

</body>

</html>