<?php
/*
  PHPWPos, Open Source Point-Of-Sale System
  http://phpwpos.ptwebserve.com

  Copyright (c) 2006 Moisés Sequeira

  Released under the GNU General Public License
*/

if(isset($_POST['submitinstall'])){
$conn = mysql_connect($_POST['dbhost'],$_POST['dbuser'],$_POST['dbpassword']);
mysql_select_db($_POST['dbname'],$conn);

$sql = "
CREATE TABLE brands (
id int(8) NOT NULL auto_increment,
brand varchar(30) NOT NULL,
PRIMARY KEY(id)
) TYPE=MyISAM
";
mysql_query($sql,$conn);

$sql = "
CREATE TABLE categories (
id int(8) NOT NULL auto_increment,
category varchar(30) NOT NULL,
image varchar(80) NOT NULL default 'images/categories/categorie.gif',
PRIMARY KEY(id)
) TYPE=MyISAM
";
mysql_query($sql,$conn);

$sql = "
CREATE TABLE customers (
id int(8) NOT NULL auto_increment,
first_name varchar(75) NOT NULL,
last_name varchar(75) NOT NULL,
account_number varchar(30),
address varchar(80),
city varchar(50),
pcode varchar(30),
state varchar(50),
country varchar(50),
phone_number varchar(25),
email varchar(80),
comments blob,
PRIMARY KEY(id)
) TYPE=MyISAM
";
mysql_query($sql,$conn);


$sql = "
CREATE TABLE discounts (
id int(8) NOT NULL auto_increment,
item_id int(8) NOT NULL,
percent_off int NOT NULL,
comment blob,
PRIMARY KEY(id)
) TYPE=MyISAM
";
mysql_query($sql,$conn);

$sql = "
CREATE TABLE items (
id int(8) NOT NULL auto_increment,
item_name varchar(30) NOT NULL,
item_number varchar(20),
description blob,
brand_id int(8) NOT NULL,
category_id int(8) NOT NULL,
supplier_id int(8) NOT NULL,
buy_price varchar(30) NOT NULL,
unit_price varchar(30) NOT NULL,
supplier_item_number varchar(50),
tax_percent varchar(10) NOT NULL,
total_cost varchar(30) NOT NULL,
quantity int(8),
reorder_level int(8),
image varchar(80) default 'images/items/item.gif',
PRIMARY KEY(id)
) TYPE=MyISAM
";
mysql_query($sql,$conn);

$sql = "
CREATE TABLE sales (
id int(8) NOT NULL auto_increment,
date date NOT NULL default '0000-00-00',
customer_id int(8),
sale_sub_total varchar(30) NOT NULL,
sale_total_cost varchar(30) NOT NULL,
paid_with varchar(50),
items_purchased int(8) NOT NULL,
sold_by int(8) NOT NULL,
comment blob,
PRIMARY KEY(id)
) TYPE=MyISAM
";
mysql_query($sql,$conn);

$sql = "
CREATE TABLE sales_items (
id int(8) NOT NULL auto_increment,
sale_id int(8) NOT NULL,
item_id int(8) NOT NULL,
quantity_purchased int(8) NOT NULL,
item_unit_price varchar(30) NOT NULL,
item_buy_price varchar(30) NOT NULL,
item_tax_percent varchar(10) NOT NULL,
item_total_tax varchar(30) NOT NULL,
item_total_cost varchar(30) NOT NULL,
PRIMARY KEY(id)
) TYPE=MyISAM
";
mysql_query($sql,$conn);

$sql = "
CREATE TABLE suppliers (
id int(8) NOT NULL auto_increment,
supplier varchar(80) NOT NULL,
address varchar(80),
city varchar(50),
pcode varchar(30),
state varchar(50),
country varchar(50),
phone_number varchar(25),
contact varchar(60),
email varchar(80),
comments blob,
PRIMARY KEY(id)
) TYPE=MyISAM
";
mysql_query($sql,$conn);

$sql = "
CREATE TABLE users (
id int(8) NOT NULL auto_increment,
first_name varchar(75) NOT NULL,
last_name varchar(75) NOT NULL,
username varchar(20) NOT NULL,
password varchar(60) NOT NULL,
type varchar(30),
PRIMARY KEY(id)
) TYPE=MyISAM
";
mysql_query($sql,$conn);
mysql_close($conn);

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
$adminname = "' .$_POST['adminname'] .'";
$adminpassword = "' .md5($_POST['adminpassword']) .'";

//Database values
$dbhost = "' .$_POST['dbhost'] .'";
$dbuser = "' .$_POST['dbuser'] .'";
$dbpassword = "' .$_POST['dbpassword'] .'";
$dbname = "' .$_POST['dbname'] .'";

//GENERAL VALUES
define("POS_DEFAULT_LANGUAGE","english");
define("CATEGORY_IMG_SIZE","32");
define("ITEM_IMG_SIZE","32");
define("CURRENCY","USD ");
define("ITEMS_PER_PAGE","10"); 
?>
';
//Create configuration file
$file = fopen("config.php","w+") or die("Failed to create config file!");
fwrite($file,$configfile);
fclose($file);
}
?>

<html>
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
if(isset($_GET['action']) && $_GET['action']=='install'){
//Everithing is installed, I hope!
echo '<table align="center"><tr><td>Installation finished.<br>
To access the administration area click <a href="admin.php">here</a>.</td></tr></table>';
}
else
{
?>
<form action="install.php?action=install" method="POST">
<table align="center">
<TR><TD colspan="2"><b>Administrator login:</b></TD></TR>
<TR><TD>login name</TD><TD><input type="text" name="adminname"></TD></TR>
<TR><TD>Password</TD><TD><input type="text" name="adminpassword"></TD></TR>
<TR><TD colspan="2"><b>Database values:</b></TD></TR>
<TR><TD>Host</TD><TD><input type="text" name="dbhost"></TD></TR>
<TR><TD>Database</TD><TD><input type="text" name="dbname"></TD></TR>
<TR><TD>User</TD><TD><input type="text" name="dbuser"></TD></TR>
<TR><TD>Password</TD><TD><input type="text" name="dbpassword"></TD></TR>
<TR><TD colspan="2"><input type="submit" name="submitinstall" value="Install"></TD></TR>
</table>
</form>
<?php
}
?>
</body>
</html>
