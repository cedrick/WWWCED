<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php

	
	
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("dbmseufcics") or die(mysql_error());

	$log = $_POST['btnadmin'];
	$user=$_POST['txtu'];
	$pass=$_POST['txtp'];
	
	$result1 = mysql_query("SELECT * FROM tbladmin WHERE username='$user' AND password='$pass'")
	or die(mysql_error());
	$rows=mysql_fetch_array($result1);
	
	if($rows['username']==$user AND $rows['password']==$pass)
		{
			session_start();
			$_SESSION['user'] = $user;
			$_SESSION['pass']=$pass;
			
			//echo "ok!";
			
			header("location:../inventory_home.php");
			
		}
	else
		{
		//echo "Wrong Password";
			echo "<script language=javascript>alert('Login Error! ')
			history.go(-1)
			</script>";
		}
?>

</body>
</html>