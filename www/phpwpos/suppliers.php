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

//Add a supplier
if(isset($_POST['submitsupplier'])){
$sql = "insert into suppliers(supplier, address, city, pcode, state, country, phone_number, contact, email, comments) values('" .$_POST['supplier'] ."','" .$_POST['address'] ."','" .$_POST['city'] ."','" .$_POST['pcode'] ."','" .$_POST['state'] ."','" .$_POST['country'] ."','" .$_POST['phone_number'] ."','" .$_POST['contact'] ."','" .$_POST['email'] ."','" .$_POST['comments'] ."')";
$db->query($sql);
}

//Edit a supplier
if(isset($_POST['editsupplier'])){
$sql = "update suppliers set supplier='" .$_POST['supplier'] ."', address='" .$_POST['address'] ."', city='" .$_POST['city'] ."', pcode='" .$_POST['pcode'] ."', state='" .$_POST['state'] ."', country='" .$_POST['country'] ."', phone_number='" .$_POST['phone_number'] ."', contact='" .$_POST['contact'] ."', email='" .$_POST['email'] ."', comments='" .$_POST['comments'] ."' where id=" .$_POST['supplier_id'];
$db->query($sql);
}

//Delete a supplier
if(isset($_GET['delete'])){
$db->query("delete from suppliers where id=" .$_GET['delete']);
}
?>
<script language="JavaScript">
  function validate_supplier(frm){
	if(frm.supplier.value==""){
	alert("<?php echo ERROR_SUPPLIER_SUBMIT; ?>");
	return false;
	}
	else return true;
  }
  function delete_supplier(supplier){
    op = confirm("<?php echo CONFIRM_DELETE_SUPPLIER; ?>");
    if(op)document.location.href="admin.php?action=suppliers&delete="+supplier;
  }

</script>
<div class="admin_content">
<?php
//Add a supplier
if(isset($_GET['add_supplier'])){
?>
<form action="admin.php?action=suppliers" method="POST" onsubmit="return validate_supplier(this);">
<table>
<TR><TD><?php echo TXT_SUPPLIER; ?></TD><TD><input type="text" size="60" name="supplier"></TD></TR>
<TR><TD><?php echo TXT_ADDRESS; ?></TD><TD><input type="text" size="60" name="address"></TD></TR>
<TR><TD><?php echo TXT_CITY; ?></TD><TD><input type="text" size="40" name="city"></TD></TR>
<TR><TD><?php echo TXT_PCODE; ?></TD><TD><input type="text" size="20" name="pcode"></TD></TR>
<TR><TD><?php echo TXT_STATE; ?></TD><TD><input type="text" size="40" name="state"></TD></TR>
<TR><TD><?php echo TXT_COUNTRY; ?></TD><TD><input type="text" size="50" name="country"></TD></TR>
<TR><TD><?php echo TXT_PHONE; ?></TD><TD><input type="text" size="20" name="phone_number"></TD></TR>
<TR><TD><?php echo TXT_CONTACT; ?></TD><TD><input type="text" size="60" name="contact"></TD></TR>
<TR><TD><?php echo TXT_EMAIL; ?></TD><TD><input type="text" size="60" name="email"></TD></TR>
<TR><TD valign="top"><?php echo TXT_COMMENTS; ?></TD><TD><textarea rows="5" cols="50" name="comments"></textarea></TD></TR>
<TR><TD colspan="2"><input type="submit" name="submitsupplier" value="<?php echo SUPPLIER_SUBMIT; ?>"></TD></TR>
</table>
</form>
<?php
}

//Edit a supplier
if(isset($_GET['edit_supplier'])){
$result = $db->query("select * from suppliers where id=" .$_GET['edit_supplier']);
$row = mysql_fetch_row($result);
?>
<form action="admin.php?action=suppliers" method="POST" onsubmit="return validate_supplier(this);">
<input type="hidden" name="supplier_id" value="<?php echo $row[0]; ?>">
<table>
<TR><TD><?php echo TXT_SUPPLIER; ?></TD><TD><input type="text" size="60" name="supplier" value="<?php echo htmlspecialchars($row[1]); ?>"></TD></TR>
<TR><TD><?php echo TXT_ADDRESS; ?></TD><TD><input type="text" size="60" name="address" value="<?php echo htmlspecialchars($row[2]); ?>"></TD></TR>
<TR><TD><?php echo TXT_CITY; ?></TD><TD><input type="text" size="40" name="city" value="<?php echo htmlspecialchars($row[3]); ?>"></TD></TR>
<TR><TD><?php echo TXT_PCODE; ?></TD><TD><input type="text" size="20" name="pcode" value="<?php echo htmlspecialchars($row[4]); ?>"></TD></TR>
<TR><TD><?php echo TXT_STATE; ?></TD><TD><input type="text" size="40" name="state" value="<?php echo htmlspecialchars($row[5]); ?>"></TD></TR>
<TR><TD><?php echo TXT_COUNTRY; ?></TD><TD><input type="text" size="50" name="country" value="<?php echo htmlspecialchars($row[6]); ?>"></TD></TR>
<TR><TD><?php echo TXT_PHONE; ?></TD><TD><input type="text" size="20" name="phone_number" value="<?php echo htmlspecialchars($row[7]); ?>"></TD></TR>
<TR><TD><?php echo TXT_CONTACT; ?></TD><TD><input type="text" size="60" name="contact" value="<?php echo htmlspecialchars($row[8]); ?>"></TD></TR>
<TR><TD><?php echo TXT_EMAIL; ?></TD><TD><input type="text" size="60" name="email" value="<?php echo htmlspecialchars($row[9]); ?>"></TD></TR>
<TR><TD valign="top"><?php echo TXT_COMMENTS; ?></TD><TD><textarea rows="5" cols="50" name="comments"><?php echo htmlspecialchars($row[10]); ?></textarea></TD></TR>
<TR><TD colspan="2"><input type="submit" name="editsupplier" value="<?php echo TXT_SAVE; ?>"></TD></TR>
</table>
</form>
<?php
}

if(!isset($_GET['edit_supplier']) && !isset($_GET['add_supplier'])){
?>
<input type="button" value="<?php echo ADD_NEW_SUPPLIER; ?>" onclick="document.location.href='admin.php?action=suppliers&#038;add_supplier'"><br><br>
<table cellspacing="0">
<TR><TH width="250"><?php echo TXT_SUPPLIER; ?></TH><TH width="60"><?php echo TXT_PHONE; ?></TH><TH width="60" align="left"><?php echo TXT_CONTACT; ?></TH><TH width="250" align="left"><?php echo TXT_EMAIL; ?></TH><TH><? echo TXT_EDIT; ?></TH><TH><? echo TXT_DELETE; ?></TH></TR>
<?php
$result = $db->query("select id,supplier,phone_number,contact,email from suppliers");
while($row = mysql_fetch_row($result)){
?>
<TR><TD class="tvalue"><?php echo htmlspecialchars($row[1]); ?></TD><TD class="tvalue"><?php echo htmlspecialchars($row[2]); ?>&nbsp;</TD><TD class="tvalue"><?php echo htmlspecialchars($row[3]); ?>&nbsp;</TD><TD class="tvalue"><?php echo htmlspecialchars($row[4]); ?>&nbsp;</TD><TD class="tvalue" align="center"><a href="admin.php?action=suppliers&#038;edit_supplier=<?php echo $row[0]; ?>"><img src="images/edit.gif"></a></TD><TD class="tvalue" align="center"><a href="javascript:delete_supplier(<?php echo $row[0]; ?>)"><img src="images/delete.gif"></a></TD></TR>
<?php
}
?>
</table>
<?php
}
?>
</div>
