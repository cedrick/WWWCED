<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("../connection/connection.php");
	
	$u=$_POST['txtuser'];
	$p=$_POST['txtpass'];
	$l=$_POST['txtlname'];
	$f=$_POST['txtfname'];
	
	$repass=$_POST['txtre'];

	$result = mysql_query("SELECT * FROM tblemployee WHERE username='$u'");
	
	$rows=mysql_fetch_array($result);
		if($u==$rows['username'])
	{
		echo "<script language=javascript>alert('Username Already Exist! ')
			history.go(-1)
			</script>";
	}
	else
	{
	
	if($repass==$p)
	{
		$sql="INSERT INTO tblemployee(username, password, lastname, firstname) VALUES ('$u', '$p', '$l', '$f')";
		$result1=mysql_query($sql);
		echo "<script language=javascript>alert('Sucessful! .')
			history.go(-1)
			</script>";
	header("location:../user.php");
	
	}	

	else
	{
		//echo "Password Mismatch!";
	echo "<script language=javascript>alert('Password MisMatch! ')
			history.go(-1)
			</script>";
	}
	}
	?>

</body>
</html>
