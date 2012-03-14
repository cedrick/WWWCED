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

//Add a new customer
if(isset($_POST['submitcustomer'])){
$sql = "insert into customers(first_name, last_name, account_number, address, city, pcode, state, country, phone_number, email, comments) values('" .$_POST['firstname'] ."','" .$_POST['lastname'] ."','" .$_POST['account_number'] ."','" .$_POST['address'] ."','" .$_POST['city'] ."','" .$_POST['pcode'] ."','" .$_POST['state'] ."','" .$_POST['country'] ."','" .$_POST['phone_number'] ."','" .$_POST['email'] ."','" .$_POST['comments'] ."')";
$db->query($sql);
}

//Edit customer data
if(isset($_POST['editcustomer'])){
$sql = "update customers set first_name='" .$_POST['firstname'] ."', last_name='" .$_POST['lastname'] ."', account_number='" .$_POST['account_number'] ."', address='" .$_POST['address'] ."', city='" .$_POST['city'] ."', pcode='" .$_POST['pcode'] ."', state='" .$_POST['state'] ."', country='" .$_POST['country'] ."', phone_number='" .$_POST['phone_number'] ."', email='" .$_POST['email'] ."', comments='" .$_POST['comments'] ."' where id=" .$_POST['customer_id'];
$db->query($sql);
}

//Delete a customer
if(isset($_GET['delete'])){
$db->query("delete from customers where id=" .$_GET['delete']);
}

?>
<div class="admin_content">
<?php
if(isset($_GET['add_customer'])){
?>
<form action="admin.php?action=clients" method="POST">
<table>
<TR><TD><?php echo TXT_FIRSTNAME; ?></TD><TD><input type="text" name="firstname" size="40"></TD></TR>
<TR><TD><?php echo TXT_LASTNAME; ?></TD><TD><input type="text" name="lastname" size="40"></TD></TR>
<TR><TD><?php echo TXT_ACCOUNT_NUMBER; ?></TD><TD><input type="text" name="account_number" size="30"></TD></TR>
<TR><TD><?php echo TXT_ADDRESS; ?></TD><TD><input type="text" size="60" name="address"></TD></TR>
<TR><TD><?php echo TXT_CITY; ?></TD><TD><input type="text" size="40" name="city"></TD></TR>
<TR><TD><?php echo TXT_PCODE; ?></TD><TD><input type="text" size="20" name="pcode"></TD></TR>
<TR><TD><?php echo TXT_STATE; ?></TD><TD><input type="text" size="40" name="state"></TD></TR>
<TR><TD><?php echo TXT_COUNTRY; ?></TD><TD><input type="text" size="50" name="country"></TD></TR>
<TR><TD><?php echo TXT_PHONE; ?></TD><TD><input type="text" size="20" name="phone_number"></TD></TR>
<TR><TD><?php echo TXT_EMAIL; ?></TD><TD><input type="text" size="60" name="email"></TD></TR>
<TR><TD valign="top"><?php echo TXT_COMMENTS; ?></TD><TD><textarea rows="5" cols="50" name="comments"></textarea></TD></TR>
<TR><TD colspan="2"><input type="submit" name="submitcustomer" value="<?php echo CUSTOMER_SUBMIT; ?>"></TD></TR>
</table>
</form>
<?php
}

if(isset($_GET['edit_customer'])){
$result = $db->query("select * from customers where id=" .$_GET['edit_customer']);
$row = mysql_fetch_row($result);
?>
<form action="admin.php?action=clients" method="POST">
<input type="hidden" name="customer_id" value="<?php echo $row[0]; ?>">
<table>
<TR><TD><?php echo TXT_FIRSTNAME; ?></TD><TD><input type="text" name="firstname" size="40" value="<?php echo htmlspecialchars($row[1]); ?>"></TD></TR>
<TR><TD><?php echo TXT_LASTNAME; ?></TD><TD><input type="text" name="lastname" size="40" value="<?php echo htmlspecialchars($row[2]); ?>"></TD></TR>
<TR><TD><?php echo TXT_ACCOUNT_NUMBER; ?></TD><TD><input type="text" name="account_number" size="30" value="<?php echo htmlspecialchars($row[3]); ?>"></TD></TR>
<TR><TD><?php echo TXT_ADDRESS; ?></TD><TD><input type="text" size="60" name="address" value="<?php echo htmlspecialchars($row[4]); ?>"></TD></TR>
<TR><TD><?php echo TXT_CITY; ?></TD><TD><input type="text" size="40" name="city" value="<?php echo htmlspecialchars($row[5]); ?>"></TD></TR>
<TR><TD><?php echo TXT_PCODE; ?></TD><TD><input type="text" size="20" name="pcode" value="<?php echo htmlspecialchars($row[6]); ?>"></TD></TR>
<TR><TD><?php echo TXT_STATE; ?></TD><TD><input type="text" size="40" name="state" value="<?php echo htmlspecialchars($row[7]); ?>"></TD></TR>
<TR><TD><?php echo TXT_COUNTRY; ?></TD><TD><input type="text" size="50" name="country" value="<?php echo htmlspecialchars($row[8]); ?>"></TD></TR>
<TR><TD><?php echo TXT_PHONE; ?></TD><TD><input type="text" size="20" name="phone_number" value="<?php echo htmlspecialchars($row[9]); ?>"></TD></TR>
<TR><TD><?php echo TXT_EMAIL; ?></TD><TD><input type="text" size="60" name="email" value="<?php echo htmlspecialchars($row[10]); ?>"></TD></TR>
<TR><TD valign="top"><?php echo TXT_COMMENTS; ?></TD><TD><textarea rows="5" cols="50" name="comments"><?php echo htmlspecialchars($row[11]); ?></textarea></TD></TR>
<TR><TD colspan="2"><input type="submit" name="editcustomer" value="<?php echo TXT_SAVE; ?>"></TD></TR>
</table>
</form>
<?php
}

if(!isset($_GET['add_customer']) && !isset($_GET['edit_customer'])){
?>
<script language="JavaScript">
  function delete_customer(customer){
    op = confirm("<?php echo CONFIRM_DELETE_CUSTOMER; ?>");
    if(op)document.location.href="admin.php?action=clients&delete="+customer;
  }

</script>
<input type="button" value="<?php echo ADD_NEW_CUSTOMER; ?>" onclick="document.location.href='admin.php?action=clients&#038;add_customer'"><br><br>
<table cellspacing="0">
<TR><TH width="250" colspan="2"><?php echo TXT_NAME; ?></TH><TH width="60"><?php echo TXT_PHONE; ?></TH><TH width="250" align="left"><?php echo TXT_EMAIL; ?></TH><TH><?php echo TXT_EDIT; ?></TH><TH><?php echo TXT_DELETE; ?></TH></TR>
<?php
$result = $db->query("select * from customers");
while($row = mysql_fetch_row($result)){
?>
<TR><TD class="tvalue"><?php echo $row[0]; ?></TD><TD class="tvalue"><?php echo htmlspecialchars($row[1] ." " .$row[2]); ?></TD><TD class="tvalue"><?php echo htmlspecialchars($row[9]); ?>&nbsp;</TD><TD class="tvalue"><?php echo htmlspecialchars($row[10]); ?>&nbsp;</TD><TD class="tvalue" align="center"><A href="admin.php?action=clients&#038;edit_customer=<?php echo $row[0]; ?>"><img src="images/edit.gif"></A></TD><TD class="tvalue" align="center"><A href="javascript:delete_customer(<?php echo $row[0]; ?>)"><img src="images/delete.gif"></A></TD></TR>
<?php
}
?>
</table>
<?php
}

?>
</div>
