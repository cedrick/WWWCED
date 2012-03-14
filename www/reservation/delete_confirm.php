<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
body {
	background-color: #666666;
}
-->
</style></head>

<body>
<?php
session_start();
if(!session_is_registered(username1))

{
  header("location:admin.php");
  

}
?>
<form id="form1" name="form1" method="post" action="">
<?php



 mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("dbacc") or die(mysql_error());
// Retrieve all the data from the "example" table
	$result = mysql_query("SELECT * FROM tbllog")or die(mysql_error());
	$nm=$_GET['name'];


?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="371" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">
        <h1><strong>Are you sure?</strong></h1>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <label></label>
        <label>
          <a href="delete.php?user=<?php echo $nm;?>">
        <input type="submit" name="cmdyes" id="cmdyes" value="   YES    " />
        </label>
      </div></td>
      <td><div align="center">
      <a href="view.php">
        <input type="submit" name="cmdno" id="cmdno" value="     NO     " />
      </div>
      <label></label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
