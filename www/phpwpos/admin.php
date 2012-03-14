<?php
/*
  PHPWPos, Open Source Point-Of-Sale System
  http://phpwpos.ptwebserve.com

  Copyright (c) 2006 Moisés Sequeira

  Released under the GNU General Public License
*/

session_start();
include("config.php");
include("languages/" .POS_DEFAULT_LANGUAGE .".php");

require_once("database.php");
$db = new database($dbhost,$dbuser,$dbpassword,$dbname);

//Logout
if(isset($_GET['action']) && $_GET['action']=="logout"){
	session_destroy();
	header("Location:admin.php");
}

//Login
if(isset($_POST['adminlogin'])){
	//IF LOGIN OK
	if($adminname == trim($_POST['adminname']) && $adminpassword == md5(trim($_POST['adminpassword']))){
		$_SESSION['admin'] = trim($_POST['adminname']);
		$_SESSION['user'] = trim($_POST['adminname']);
	}
}

?>

<html>
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="pos.css" rel="StyleSheet" type="text/css">
  <script language="javascript" src="general.js"></script>
</head>
<body>
<table width="100%" height="100%" cellspacing="0" cellpadding="0">
<TR height="20"><TD>
<?php
require_once("header.php");
?>
</TD></TR>
<TR><TD valign="top">
<?php
if(!isset($_SESSION['admin'])){
?>
<br><br>
<center><b class="blt"><?php echo LOGIN_WELCOM; ?></b></center>
<form action="admin.php?action=login" method="POST" class="loginform">
<table align="center" class="tlogin">
<TR><TD align="right" width="40%"><?php echo LOGIN_ADMIN; ?></TD><TD width="60%"><input type="text" name="adminname"></TD></TR>
<TR><TD align="right" width="40%"><?php echo LOGIN_PASSWORD; ?></TD><TD width="60%"><input type="password" name="adminpassword"></TD></TR>
<TR><TD colspan="2" align="center"><input type="submit" name="adminlogin" value="<?php echo LOGIN_SUBMIT; ?>"></TD></TR>
</table>
</form>
<center><a href="index.php" class="stronglink">Sales</a>&nbsp;|&nbsp;<a href="admin.php" class="stronglink">Administrator</a></center>
<?php
}
else{
//MAIN ADMIN AREA
?>
<div id="adminmenu">
<table>
<TR>
<TD><a href="admin.php?action=brands"><?php echo ADMINMENU_BRANDS; ?></a></TD>
<TD><a href="admin.php?action=categories"><?php echo ADMINMENU_CATEGORIES; ?></a></TD>
<TD><a href="admin.php?action=clients"><?php echo ADMINMENU_CUSTOMERS; ?></a></TD>
<TD><a href="admin.php?action=products"><?php echo ADMINMENU_PRODUCTS; ?></a></TD>
<TD><a href="admin.php?action=suppliers"><?php echo ADMINMENU_SUPPLIERS; ?></a></TD>
<TD><a href="admin.php?action=users"><?php echo ADMINMENU_USERS; ?></a></TD>
<TD><a href="index.php"><?php echo ADMINMENU_SALES; ?></a></TD>
<TD><a href="admin.php?action=reports"><?php echo ADMINMENU_REPORTS; ?></a></TD>
<TD><a href="admin.php?action=setup"><?php echo ADMINMENU_SETUP; ?></a></TD>
<TD><a href="admin.php?action=logout"><?php echo ADMINMENU_LOGOUT; ?></a></TD>
</TR>
</table>
</div>

<?php
if(!isset($_GET['action']) || $_GET['action']=="login"){
?><div class="admin_content"><?php
echo ADMIN_WELCOM_TEXT;
?></div><?php
}

if($_GET['action']=="brands"){
require_once("brands.php");
}

if($_GET['action']=="categories"){
require_once("categories.php");
}

if($_GET['action']=="clients"){
require_once("clients.php");
}

if($_GET['action']=="products"){
require_once("products.php");
}

if($_GET['action']=="suppliers"){
require_once("suppliers.php");
}

if($_GET['action']=="users"){
require_once("users.php");
}

if($_GET['action']=="reports"){
require_once("reports.php");
}

if($_GET['action']=="setup"){
require_once("setup.php");
}
?>

<?php
}
?>
</TD></TR>
<TR height="16"><TD>
<?php require_once("footer.php"); ?>
</TD></TR>
</table>
</body>
</html>
