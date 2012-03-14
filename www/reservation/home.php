<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(images/aldrick%20version%201.0.jpeg);
	background-repeat: no-repeat;
	margin-left: 100px;
	background-color: #A2CDDD;
	margin-top: 100px;
	margin-right: 100px;
	margin-bottom: 100px;
}
.style1 {color: #FFFFFF}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
<div class="read">
  <table width="268" border="0" align="right">
    <tr>
      <td><span class="style1">User-ID</span></td>
      <td><p>
          <label>
          <input type="text" name="txtus" id="txtus" />
          </label>
      </p></td>
    </tr>
    <tr>
      <td><span class="style1">Password</span></td>
      <td><input type="password" name="txtpass" id="txtpass" /></td>
    </tr>
    <tr>
      <td height="25" colspan="2"><div align="center"><span class="style1">
          <input type="submit" name="cmdok" id="cmdok" value="     Login     " />
      </span></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style1">
        <?php
                 $user=$_POST['txtus'];
			     $pass=$_POST['txtpass'];
				
				 
				mysql_connect("localhost","root", "") or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				$result= mysql_query("select * from tblad where username1='$user' && password1='$pass'")or die(mysql_error());
				 $count=mysql_num_rows($result);
			
				if ($count==1)
				 
				 
				 {
				 setcookie('name',$user);
				 session_register("username1");
				 header("location:menu.php");
				 
				 
				 
				 }
				 
				 
				 
				 
				 else
				 
				 
				 {
				 
				 }
				 
				 
				 ?>
      </div></td>
    </tr>
  </table>
  <div align="center"></div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div align="center"></div>
</div>
 
  
</form>
</body>
</html>
