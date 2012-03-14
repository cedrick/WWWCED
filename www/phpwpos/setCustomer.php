<?php
/*
  PHPWPos, Open Source Point-Of-Sale System
  http://phpwpos.ptwebserve.com

  Copyright (c) 2006 Moisés Sequeira

  Released under the GNU General Public License
*/

header('Content-Type:text/xml; charset="iso-8859-1"');
session_start();
if(!isset($_SESSION['user'])){
header("Location:admin.php");
}
include("config.php");
require_once("database.php");
$db = new database($dbhost,$dbuser,$dbpassword,$dbname);
$sql = "insert into customers(first_name, last_name, account_number, address, city, pcode, state, country, phone_number, email, comments) values('" .$_POST['firstname'] ."','" .$_POST['lastname'] ."','" .$_POST['account_number'] ."','" .$_POST['address'] ."','" .$_POST['city'] ."','" .$_POST['pcode'] ."','" .$_POST['state'] ."','" .$_POST['country'] ."','" .$_POST['phone_number'] ."','" .$_POST['email'] ."','" .$_POST['comments'] ."')";
$result = $db->query($sql);
$id = mysql_insert_id($db->getConnection());
$db->close();
echo '<?xml version="1.0" encoding="iso-8859-1" ?>
';
if($result){
?>
<customer>
<id><?php echo $id; ?></id>
<name><?php echo $_POST['firstname'] ." " .$_POST['lastname']; ?></name>
</customer>
<?php
}
?>





