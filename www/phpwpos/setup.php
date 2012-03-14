<?php
/*
  PHPWPos, Open Source Point-Of-Sale System
  http://phpwpos.ptwebserve.com

  Copyright (c) 2006 Moisés Sequeira

  Released under the GNU General Public License
*/

session_start();
if(!isset($_SESSION['admin'])){
header("Location:admin.php");
}

if(isset($_POST['submitsetup'])){
$configfile = '<?php
/*
  PHPWPos, Open Source Point-Of-Sale System
  http://phpwpos.ptwebserve.com

  Copyright (c) 2006 Moisés Sequeira

  Released under the GNU General Public License
*/

/************************
Configuration file
************************/

//Administrator login
$adminname = "' .$adminname .'";
$adminpassword = "' .$adminpassword .'";

//Database values
$dbhost = "' .$dbhost .'";
$dbuser = "' .$dbuser .'";
$dbpassword = "' .$dbpassword .'";
$dbname = "' .$dbname .'";

//GENERAL VALUES
define("POS_DEFAULT_LANGUAGE","' .$_POST['default_language'] .'");
define("CATEGORY_IMG_SIZE","32");
define("ITEM_IMG_SIZE","32");
define("CURRENCY","' .$_POST['currency'] .' ");
define("ITEMS_PER_PAGE","10"); 
?>
';
//Create configuration file
$file = fopen("config.php","w+") or die("Failed to create config file!");
fwrite($file,$configfile);
fclose($file);
?>
<script language="javascript">document.location.href="admin.php?action=setup";</script>
<?php
}

include("languages/languages.php");

?>
<div class="admin_content">
<form action="admin.php?action=setup" method="post">
<table>
<tr><td>Language: </td><td>
<select name="default_language">
<?php
foreach($languages as $language_name => $language_file){
?><option value="<?php echo $language_file; ?>" <?php if($language_file==POS_DEFAULT_LANGUAGE) echo "SELECTED"; ?>><?php echo $language_name; ?></option><?php
}
?>
</select></td></tr>
<tr><td>Currency: </td><td><input type="text" name="currency" value="<?php echo htmlspecialchars(CURRENCY); ?>">
<tr><td colspan="2"><input type="submit" name="submitsetup" value="<?php echo TXT_SUBMIT; ?>"></td></tr>
</table>
</form>
</div>
