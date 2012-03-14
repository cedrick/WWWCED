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

//Add brand
if(isset($_POST['submitbrand'])){
$sql = "insert into brands(brand) values('" .$_POST['brand'] ."')";
$db->query($sql);
}

//Edit brand
if(isset($_POST['editbrand'])){
	$sql = "update brands set brand='" .$_POST['brand'] ."' where id=" .$_POST['brand_id'];
	$db->query($sql);
}

//Delete brand
if(isset($_GET['delete'])){
$sql = "delete from brands where id=" .$_GET['delete'];
$db->query($sql);
}
?>
<div class="admin_content">
<?php
if(isset($_GET['edit'])){
	$sql = "select brand from brands where id=" .$_GET['edit'];
	$result = $db->query($sql);
	$brand = mysql_fetch_row($result);
?>
<form action="admin.php?action=brands" method="POST">
<input type="hidden" name="brand_id" value="<?php echo $_GET['edit']; ?>">
<?php echo HDR_BRAND; ?>: <input type="text" size="30" name="brand" value="<?php echo htmlspecialchars($brand[0]); ?>"> 
<input type="submit" name="editbrand" value="<?php echo TXT_SAVE; ?>">
</form>
<?php
}
else{
?>
<form action="admin.php?action=brands" method="POST">
<?php echo ADD_NEW_BRAND; ?>:<br>
<input type="text" size="30" name="brand"> <input type="submit" name="submitbrand" value="<?php echo BRAND_SUBMIT; ?>">
</form>
<br>
<table cellspacing="0">
<TR><TH width="300"><?php echo HDR_BRAND; ?></TH><TH><?php echo TXT_EDIT; ?></TH><TH><?php echo TXT_DELETE; ?></TH></TR>
<?php
$sql = "select * from brands";
$result = $db->query($sql);
while($row = mysql_fetch_row($result)){
?><TR><TD class="btvalue"><a href="admin.php?action=products&brand=<?php echo $row[0]; ?>"><?php echo htmlspecialchars($row[1]); ?></a></TD><TD class="tvalue" align="center"><a href="admin.php?action=brands&edit=<?php echo $row[0]; ?>"><img src="images/edit.gif"></a></TD><TD class="tvalue" align="center"><a href="admin.php?action=brands&delete=<?php echo $row[0]; ?>"><img src="images/delete.gif"></a></TD></TR><?php
}
?>
<TR><TD></TD></TR>
</table>
<?php
}
?>
</div>
