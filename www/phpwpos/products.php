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

//Add new item
if(isset($_POST['submit_item'])){
//Upload image file
$item_image="images/items/" .(isset($_FILES['item_image']['name']) && $_FILES['item_image']['name']!="" ? $_FILES['item_image']['name'] : "item.png");
move_uploaded_file ($_FILES['item_image']['tmp_name'],"images/items/".$_FILES['item_image']['name']);
//insert item in the database
$sql = "insert into items(item_name, item_number, description, brand_id, category_id, supplier_id, buy_price, unit_price, supplier_item_number, tax_percent, total_cost, quantity, reorder_level, image) values(
'" .$_POST['item_name'] ."',
'" .$_POST['item_number'] ."',
'" .$_POST['description'] ."',
" .$_POST['brand_id'] .",
" .$_POST['category_id'] .",
" .$_POST['supplier_id'] .",
'" .$_POST['buy_price'] ."',
'" .$_POST['unit_price'] ."',
'" .$_POST['supplier_item_number'] ."',
'" .$_POST['tax_percent'] ."',
'" .$_POST['total_cost'] ."',
" .$_POST['quantity'] .",
" .$_POST['reorder_level'] .",
'" .$item_image ."')";
$db->query($sql);
}

//Edit an item
if(isset($_POST['edit_item'])){
//Upload a new image file if the user has selected one
$item_image="images/items/" .(isset($_FILES['item_image']['name']) && $_FILES['item_image']['name']!="" ? $_FILES['item_image']['name'] : "");
move_uploaded_file ($_FILES['item_image']['tmp_name'],"images/items/".$_FILES['item_image']['name']);
//Save values
$sql = "update items set 
item_name = '" .$_POST['item_name'] ."',
item_number = '" .$_POST['item_number'] ."',
description = '" .$_POST['description'] ."',
brand_id = " .$_POST['brand_id'] .",
category_id = " .$_POST['category_id'] .",
supplier_id = " .$_POST['supplier_id'] .",
buy_price = '" .$_POST['buy_price'] ."',
unit_price = '" .$_POST['unit_price'] ."',
supplier_item_number = '" .$_POST['supplier_item_number'] ."',
tax_percent = '" .$_POST['tax_percent'] ."',
total_cost = '" .$_POST['total_cost'] ."',
quantity = " .$_POST['quantity'] .",
reorder_level = " .$_POST['reorder_level'] .(isset($_FILES['item_image']['name']) && $_FILES['item_image']['name']!="" ? ",image = '" .$item_image ."'" : "") ." 
where id=" .$_POST['item_id'];
$db->query($sql);
}


//Delete item
if(isset($_GET['delete'])){
$sql = "delete from items where id=" .$_GET['delete'];
$db->query($sql);
}

?>
<div class="admin_content">
<?php
//Add a new item
if(isset($_GET['add_item']) || isset($_GET['edit_item'])){
  //Get the items values that we want to edit
  if(isset($_GET['edit_item'])){
    $result = $db->query("select * from items where id=" .$_GET['edit_item']);
    $row = mysql_fetch_row($result);
  }
?>
<script language="JavaScript">
  function setPrice(t){
    var uprice = parseFloat(document.forms['frm_new_item'].elements['unit_price'].value);
    var taxperc = parseFloat(document.forms['frm_new_item'].elements['tax_percent'].value);
    var total = parseFloat(document.forms['frm_new_item'].elements['total_cost'].value);
    //When we change the unit price or tax percent fields
    if(t==1){
      total = toCurrency(uprice*(1+taxperc/100));
      document.forms['frm_new_item'].elements['total_cost'].value = total;
    }
    //When we change the total price field
    if(t==2){
      uprice = toCurrency(total/(1+taxperc/100));
      document.forms['frm_new_item'].elements['unit_price'].value = uprice;
    }
  } 
</script>
<form name="frm_new_item" action="admin.php?action=products" enctype="multipart/form-data" method="POST">
<?php if(isset($_GET['edit_item']))echo '<input type="hidden" name="item_id" value="' .htmlspecialchars($row[0]) .'">'; ?>
<table>
<TR><TD><?php echo TXT_ITEM_NAME; ?></TD><TD><input type="text" size="30" name="item_name" <?php if(isset($_GET['edit_item']))echo 'value="' .htmlspecialchars($row[1]) .'"'; ?>></TD></TR>
<TR><TD><?php echo TXT_ITEM_NUMBER; ?></TD><TD><input type="text" size="20" name="item_number" <?php if(isset($_GET['edit_item']))echo 'value="' .htmlspecialchars($row[2]) .'"'; ?>></TD></TR>
<TR><TD><?php echo TXT_CATEGORY; ?></TD>
<TD>
<select name="category_id"><OPTION value="0">---</OPTION>
<?php
$result = $db->query("select id,category from categories");
while($categories = mysql_fetch_row($result)){
?><option value="<?php echo $categories[0]; ?>" <?php if(isset($_GET['edit_item']) && $row[5]==$categories[0]) echo "SELECTED"; ?>><?php echo $categories[1]; ?></option><?php
}
?>
</select>
</TD></TR>
<TR><TD><?php echo TXT_BRAND; ?></TD>
<TD>
<select name="brand_id"><OPTION value="0">---</OPTION>
<?php
$result = $db->query("select id,brand from brands");
while($brands = mysql_fetch_row($result)){
?><option value="<?php echo $brands[0]; ?>" <?php if(isset($_GET['edit_item']) && $row[4]==$brands[0]) echo "SELECTED"; ?>><?php echo $brands[1]; ?></option><?php
}
?>
</select>
</TD></TR>
<TR><TD><?php echo TXT_SUPPLIER; ?></TD>
<TD>
<select name="supplier_id"><OPTION value="0">---</OPTION>
<?php
$result = $db->query("select id,supplier from suppliers");
while($suppliers = mysql_fetch_row($result)){
?><option value="<?php echo $suppliers[0]; ?>" <?php if(isset($_GET['edit_item']) && $row[6]==$suppliers[0]) echo "SELECTED"; ?>><?php echo $suppliers[1]; ?></option><?php
}
?>

</select>
</TD></TR>
<TR><TD><?php echo TXT_SUPPLIER_ITEM_NUMBER; ?></TD><TD><input type="text" size="30" name="supplier_item_number" <?php if(isset($_GET['edit_item']))echo 'value="' .htmlspecialchars($row[9]) .'"'; ?>></TD></TR>
<TR><TD><?php echo TXT_BUYING_PRICE; ?></TD><TD><input type="text" name="buy_price" <?php if(isset($_GET['edit_item']))echo 'value="' .htmlspecialchars($row[7]) .'"'; ?>></TD></TR>
<TR><TD><?php echo TXT_UNIT_PRICE; ?></TD><TD><input type="text" name="unit_price" <?php if(isset($_GET['edit_item']))echo 'value="' .htmlspecialchars($row[8]) .'"'; ?> onchange="setPrice(1)"></TD></TR>
<TR><TD><?php echo TXT_TAX_PERCENT; ?></TD><TD><input type="text" name="tax_percent" <?php if(isset($_GET['edit_item']))echo 'value="' .htmlspecialchars($row[10]) .'"'; ?> onchange="setPrice(1)"></TD></TR>
<TR><TD><?php echo TXT_SELLING_PRICE; ?></TD><TD><input type="text" name="total_cost" <?php if(isset($_GET['edit_item']))echo 'value="' .htmlspecialchars($row[11]) .'"'; ?> onchange="setPrice(2)"></TD></TR>
<TR><TD><?php echo TXT_STOCK; ?></TD><TD><input type="text" name="quantity" <?php if(isset($_GET['edit_item']))echo 'value="' .htmlspecialchars($row[12]) .'"'; ?>></TD></TR>
<TR><TD><?php echo TXT_REORDER_LEVEL; ?></TD><TD><input type="text" name="reorder_level" <?php if(isset($_GET['edit_item']))echo 'value="' .htmlspecialchars($row[13]) .'"'; ?>></TD></TR>
<TR><TD><?php echo TXT_ITEM_IMAGE; ?></TD><TD><input type="file" name="item_image"></TD></TR>
<TR><TD valign="top"><?php echo TXT_DESCRIPTION; ?></TD>
<TD>
<textarea rows="4" cols="40" name="description"><?php if(isset($_GET['edit_item']))echo htmlspecialchars($row[3]); ?></textarea>
</TD></TR> 
<TR><TD><input type="submit" <?php if(isset($_GET['edit_item'])) echo 'name="edit_item" value="' .TXT_SAVE .'"'; else echo 'name="submit_item" value="' .ADD_ITEM .'"'; ?>></TD></TR>
</table>
</form>
<?php
}
else
{
//List items
?>
<table cellspacing="0">
<TR><TH colspan="12" align="left">
<form action="admin.php?action=products" method="POST">
<b><?php echo TXT_CATEGORY; ?>:</b> 
<select name="find_category"><option value="0">---</option>
<?php
$result = $db->query("select id,category from categories");
while($row = mysql_fetch_row($result)){
?><option value="<?php echo $row[0]; ?>" <?php if((isset($_GET['category']) && $_GET['category']==$row[0]) || (isset($_POST['find_category']) && $_POST['find_category']==$row[0])) echo "SELECTED"; ?>><?php echo $row[1]; ?></option><?php
}
?>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b><?php echo TXT_BRAND; ?>:</b> 
<select name="find_brand"><option value="0">---</option>
<?php
$result = $db->query("select id,brand from brands");
while($row = mysql_fetch_row($result)){
?><option value="<?php echo $row[0]; ?>" <?php if((isset($_GET['brand']) && $_GET['brand']==$row[0]) || (isset($_POST['find_brand']) && $_POST['find_brand']==$row[0])) echo "SELECTED"; ?>><?php echo $row[1]; ?></option><?php
}
?>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="find_items" value="<?php echo TXT_FIND_ITEMS; ?>">
<input type="button" value="<?php echo ADD_NEW_ITEM; ?>" onclick="document.location.href='admin.php?action=products&add_item'">
</form>
</TH></TR>
<?php
$sql = "select SQL_CALC_FOUND_ROWS id, item_name, item_number, description, brand_id, category_id, supplier_id, buy_price, unit_price, supplier_item_number, tax_percent, total_cost, quantity, reorder_level, image from items";
if(isset($_POST['find_items'])){
  // If whe have selected a category or a brand
  $q = 0;
  if($_POST['find_category']!="0")$q++;
  if($_POST['find_brand']!="0")$q++;
  if($q==1){
    $sql .= " where";
    if($_POST['find_category']!="0")$sql .= " category_id=" .$_POST['find_category'];
    if($_POST['find_brand']!="0")$sql .= " brand_id=" .$_POST['find_brand'];
  }
  if($q==2){
    $sql .= " where category_id=" .$_POST['find_category'] ." and brand_id=" .$_POST['find_brand'];
  }
}
if(isset($_GET['category'])){
  $sql .= " where category_id=" .$_GET['category'];
}
if(isset($_GET['brand'])){
  $sql .= " where brand_id=" .$_GET['brand'];
}

//Ten (10) items per page
$sql .= " limit " .(isset($_GET['page']) ? ($_GET['page']-1)*ITEMS_PER_PAGE : 0) ."," .ITEMS_PER_PAGE;
$result = $db->query($sql);
//The total of items that this query would return without the limit clause
$found_rows = $db->query("SELECT FOUND_ROWS()");
$total_num_items = mysql_fetch_row($found_rows);
$npages = ceil($total_num_items[0] / ITEMS_PER_PAGE);

?>
<TR><TH colspan="6" align="left">&nbsp;&nbsp;page <?php echo (isset($_GET['page']) ? $_GET['page'] : 1); ?> of <?php echo $npages; ?></TH>
<TH colspan="6" align="right">
<div id="pageset">&nbsp;</div>
<?php
if($npages > 1){
?>
<script language="javascript">setPages(<?php echo $npages; ?>,<?php echo (isset($_GET['page']) ? $_GET['page'] : 1); ?>);</script>
<?php
}
?>
</TH></TR>
<TR><TH width="24%" colspan="2"><?php echo TXT_ITEM_NAME; ?></TH><TH width="100" align="left"><?php echo TXT_ITEM_NUMBER; ?></TH>
<TH width="12%" align="left"><?php echo TXT_BRAND; ?></TH>
<TH width="12%" align="left"><?php echo TXT_CATEGORY; ?></TH>
<TH width="8%"><?php echo TXT_BUYING_PRICE; ?></TH>
<TH width="8%"><?php echo TXT_UNIT_PRICE; ?></TH>
<TH width="8%"><?php echo TXT_TAX_PERCENT; ?></TH>
<TH width="8%"><?php echo TXT_SELLING_PRICE; ?></TH>
<TH width="5%"><?php echo TXT_STOCK; ?></TH>
<TH width="5%"><?php echo TXT_EDIT; ?></TH>
<TH width="5%"><?php echo TXT_DELETE; ?></TH>
</TR>
<?php
while($row = mysql_fetch_row($result)){
$rcategory = $db->query("select category from categories where id=" .$row[5]);
$rbrand = $db->query("select brand from brands where id=" .$row[4]);
$category = mysql_fetch_row($rcategory);
$brand = mysql_fetch_row($rbrand);
?>
<script language="JavaScript">
  function delete_item(item){
    op = confirm("Do you really want to delete this item?");
    if(op)document.location.href="admin.php?action=products&delete=" + item;
  }
</script>
<TR>
<TD width="5%" class="tvalue"><img width="<?php echo ITEM_IMG_SIZE; ?>" height="<?php echo ITEM_IMG_SIZE; ?>" src="<?php echo $row[14]; ?>"></TD>
<TD width="16%" class="btvalue"><?php echo htmlspecialchars($row[1]); ?></TD>
<TD width="8%" class="tvalue"><?php echo htmlspecialchars($row[2]); ?>&nbsp;</TD>
<TD width="12%" class="tvalue"><?php if(isset($brand[0])) echo htmlspecialchars($brand[0]); else echo "-"; ?></TD>
<TD width="12%" class="tvalue"><?php if(isset($category[0])) echo htmlspecialchars($category[0]); else echo "-"; ?></TD>
<TD width="8%" align="center" class="tvalue"><?php echo htmlspecialchars($row[7]); ?></TD>
<TD width="8%" align="center" class="tvalue"><?php echo htmlspecialchars($row[8]); ?></TD>
<TD width="8%" align="center" class="tvalue"><?php echo htmlspecialchars($row[10]); ?></TD>
<TD width="8%" align="center" class="tvalue"><?php echo htmlspecialchars($row[11]); ?></TD>
<TD width="5%" align="center" class="tvalue"><?php echo htmlspecialchars($row[12]); ?></TD>
<TD width="5%" align="center" class="tvalue"><a href="admin.php?action=products&#038;edit_item=<?php echo $row[0]; ?>"><img src="images/edit.gif"></a></TD>
<TD width="5%" align="center" class="tvalue"><a href="Javascript:delete_item(<?php echo $row[0]; ?>)"><img src="images/delete.gif"></a></TD>
</TR>
<?php
}
?>
</table>
<?php
}
?>
</div>
