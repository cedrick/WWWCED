<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POS&amp;INVENTORYSYSTEM</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />

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
</head>

<body>
 
<form id="form1" name="form1" method="post" action="register_code.php">


  <div id="mother">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center" class="style14">Input your Data  and click  Register </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="308" height="244" border="0" align="center">
      <tr>
        <td width="139" height="41"><div align="right"><span class="style12">Username:</span></div></td>
        <td width="159"><div align="center"><span id="sprytextfield1">
          <input name="txtuser" type="text" id="txtuser" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
      </tr>
      <tr>
        <td height="31"><div align="right"><span class="style12">Password:</span></div></td>
        <td><div align="center"><span id="sprytextfield2">
          <input name="txtpass" type="password" id="txtpass" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
      </tr>
      <tr>
        <td height="37"><div align="right"><span class="style12">Verify Password:</span></div></td>
        <td><div align="center"><span id="sprytextfield3">
          <input name="txtre" type="password" id="txtre" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
      </tr>
      <tr>
        <td height="34"><div align="right"><span class="style12">Firstname:</span></div></td>
        <td><div align="center"><span id="sprytextfield4">
          <input name="txtfname" type="text" id="txtfname" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
      </tr>
      <tr>
        <td height="46"><div align="right"><span class="style12">Lastname:</span></div></td>
        <td><div align="center"><span id="sprytextfield5">
          <input name="txtlname" type="text" id="txtlname" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
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
