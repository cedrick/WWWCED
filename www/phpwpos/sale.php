<?php
/*
  PHPWPos, Open Source Point-Of-Sale System
  http://phpwpos.ptwebserve.com

  Copyright (c) 2006 Moisés Sequeira

  Released under the GNU General Public License
*/

session_start();
if(!isset($_SESSION['admin']) && !isset($_SESSION['user'])){
header("Location:index.php");
}

include("config.php");
include("languages/" .POS_DEFAULT_LANGUAGE .".php");
require_once("database.php");
$db = new database($dbhost,$dbuser,$dbpassword,$dbname);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
*{font-family:arial, helvetica, sans-serif;font-size:12px;}
@media print{#top{display:none;}}
small{font-size:10px;color:#788;}
body{margin:0px;background:#f5f9ff;}
th{background:248;color:fff;}
#top {background:#9cf;border-bottom:solid 1px #248;}
#menu td{border-left:solid 1px #788;width:60px;cursor:hand;
text-align:center;color:248;font-weight:bold;}
#sale_info{margin-top:10px;height:220px;overflow:auto;}
#sale_info td{}
#total b{color:#922;font-size:14px;}
</style>

</head>
<body>
<table id="top" width="100%" cellpadding=0">
<tr>
<td>&nbsp;</td>
<td align="right">
<table id="menu"><tr><td onClick="window.print()">Print</td><td onClick="window.close()">Close</td></tr></table>
</td>
</tr>
</table>

<?php
$sql = "select date, sale_sub_total, sale_total_cost from sales where id=" .$_GET['id'];
$result = $db->query($sql);
$sales_info = mysql_fetch_row($result);
?>
<div id="sale_info">
<small><?php echo $sales_info[0]; ?></small>
<hr>
<table width="100%" cellspacing="0">
<?php
$sql = "select item_name, quantity_purchased, item_total_cost from sales_items, items where sales_items.item_id=items.id and sale_id=" .$_GET['id'];
$result = $db->query($sql);
while($sales_items = mysql_fetch_row($result)){
?><tr><td width="40" align="left"><?php echo $sales_items[1]; ?></td><td align="left"><?php echo $sales_items[0]; ?></td><td width="50" align="right"><?php echo $sales_items[2]; ?></td></tr><?php
}
?>
</table>
</div>
<hr>
<table width="100%" cellpadding=0">
<tr>
<td>Tax: <b><?php echo $sales_info[2]-$sales_info[1]; ?></td>
<td id="total" align="right">Total: <b><?php echo $sales_info[2]; ?></b></td>
</tr>
</table>
</body>
</html>


