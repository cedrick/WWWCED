<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POS&amp;INVENTORYSYSTEM</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script type="text/javascript" src="../js/jss.jsp"> </script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style12 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style14 {
	font-family: Geneva, Arial, Helvetica, sans-serif
}
-->
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style15 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFFFFF;
}
.style16 {
	font-size: 15px
}
-->
</style>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
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
		echo "Username Exists!";
	}
	else
	{
	
	if($repass==$p)
	{
		$sql="INSERT INTO tblemployee(username, password, lastname, firstname) VALUES ('$u', '$p', '$l', '$f')";
		$result1=mysql_query($sql);
		header("location:../user.php");
	
	}	

	else
	{
		//echo "Password Mismatch!";
		header ("location:../signup/passwordmismatch.php");
	}
	}
	?>
  <div id="mother">
    <p>&nbsp;</p>
    <table width="242" height="69" border="0" align="right">
      <tr>
        <td width="233" height="65" class="style15"><p class="style16">PasswordMismatch!</p></td>
      </tr>
    </table>
    <p align="right">&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center" class="style14">Input your Data  and click  Register </p>
    <blockquote>
      <blockquote>
        <p>&nbsp;</p>
      </blockquote>
    </blockquote>
    <p>&nbsp;</p>
    <table width="308" height="244" border="0" align="center">
      <tr>
        <td width="139" height="41" class="style12">Username</td>
        <td width="159"><div align="center">
          <div align="center"><span id="sprytextfield1">
            <input name="txtuser" type="text" id="txtuser" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
      </tr>
      <tr>
        <td height="31" class="style12">Password</td>
        <td><div align="center"><span id="sprytextfield2">
          <input name="txtpass" type="password" id="txtpass" />
        <span class="textfieldRequiredMsg">A value is required.</span></span><span class="textfieldRequiredMsg">A value is required.</span></div></td>
      </tr>
      <tr>
        <td height="37" class="style12">Re-enter password</td>
        <td><div align="center"><span id="sprytextfield3">
          <input name="txtre" type="password" id="txtre" />
        <span class="textfieldRequiredMsg">A value is required.</span></span><span class="textfieldRequiredMsg">A value is required.</span></div></td>
      </tr>
      <tr>
        <td height="34" class="style12">Firstname</td>
        <td><div align="center"><span id="sprytextfield4">
          <input name="txtfname" type="text" id="txtfname" />
          <span class="textfieldRequiredMsg">A value is required.</span></span><span class="textfieldRequiredMsg">A value is required.</span></div></td>
      </tr>
      <tr>
        <td height="46" class="style12">Lastname</td>
        <td><div align="center"><span id="sprytextfield5">
          <input name="txtlname" type="text" id="txtlname" />
        <span class="textfieldRequiredMsg">A value is required.</span></span><span class="textfieldRequiredMsg">A value is required.</span></div></td>
      </tr>
      <tr>
        <td height="41" colspan="2"><div align="right">
            <input type="submit" name="btnreg" id="btnreg" value="Register" />
        </div></td>
      </tr>
    </table>
  </div>
</form>

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>
