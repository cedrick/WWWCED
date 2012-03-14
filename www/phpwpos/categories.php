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

//Add category
if(isset($_POST['submitcategory'])){
//Upload image file
$category_image="images/categories/" .(isset($_FILES['category_image']['name']) && $_FILES['category_image']['name']!="" ? $_FILES['category_image']['name'] : "category.png");
if (!move_uploaded_file ($_FILES['category_image']['tmp_name'],"images/categories/".$_FILES['category_image']['name'])){
	echo '<font color="#f22">Error uploading category image file!</font>';
}

$sql = "insert into categories(category,image) values('" .$_POST['category'] ."','" .$category_image ."')";
$db->query($sql);
}

//Edit category
if(isset($_POST['submiteditcategory'])){
	if(isset($_FILES['category_image']['name']) && $_FILES['category_image']['name']!=""){
		$category_image = "images/categories/" .$_FILES['category_image']['name'];
		if (!move_uploaded_file ($_FILES['category_image']['tmp_name'],"images/categories/".$_FILES['category_image']['name'])){
			echo '<font color="#f22">Error uploading category image file!</font>';
		}
		$sql = "update categories set category='" .$_POST['category'] ."', image='" .$category_image ."' where id=" .$_POST['category_id'];
		$db->query($sql);
	}
	else{
		$sql = "update categories set category='" .$_POST['category'] ."' where id=" .$_POST['category_id'];
		$db->query($sql);
	}
}

//Delete category
if(isset($_GET['delete'])){
$sql = "delete from categories where id=" .$_GET['delete'];
$db->query($sql);
}

?>
<div class="admin_content">
<?php
if(isset($_GET['edit'])){
	$result = $db->query("select * from categories where id=" .$_GET['edit']);
	$row = mysql_fetch_row($result);
?>
<form action="admin.php?action=categories" enctype="multipart/form-data" method="post">
<input type="hidden" name="category_id" value="<?php echo $row[0]; ?>">
<TABLE>
<TR><TD colspan="2" align="left"><img src="<?php echo $row[2]; ?>"  style="border:solid 1px #788;margin:4px;"></TD></TR>
<TR><TD><?php echo TXT_IMAGE; ?></TD><TD><input type="file" name="category_image"></TD></TR>
<TR><TD><?php echo TXT_CATEGORY; ?></TD><TD><input type="text" name="category" size="30" value="<?php echo htmlspecialchars($row[1]); ?>"> <input type="submit" name="submiteditcategory" value="<?php echo TXT_SAVE; ?>"></TD></TR>
</TABLE>
</form>
<?php
}
else {
?>
<form action="admin.php?action=categories" enctype="multipart/form-data" method="POST">
<table>
<TR><TD><?php echo TXT_IMAGE; ?></TD><TD><input type="file" name="category_image"></TD></TR>
<TR><TD><?php echo TXT_CATEGORY; ?></TD><TD><input type="text" name="category" size="30"> <input type="submit" name="submitcategory" value="<?php echo TXT_ADD_CATEGORY; ?>"></TD></TR>
</table>
</form>
<br>
<table cellspacing="0">
<TR><TH colspan="2" width="400"><?php echo TXT_CATEGORY; ?></TH><TH><?php echo TXT_EDIT; ?></TH><TH><?php echo TXT_DELETE; ?></TH></TR>
<?php
$sql = "select * from categories";
$result = $db->query($sql);
while($row = mysql_fetch_row($result)){
?>
<TR><TD width="<?php echo CATEGORY_IMG_SIZE; ?>" class="tvalue"><img width="<?php echo CATEGORY_IMG_SIZE; ?>" height="<?php echo CATEGORY_IMG_SIZE; ?>" src="<?php echo $row[2]; ?>"></TD><TD class="btvalue"><a href="admin.php?action=products&category=<?php echo $row[0]; ?>"><?php echo htmlspecialchars($row[1]); ?></a></TD><TD class="tvalue" align="center"><a href="admin.php?action=categories&edit=<?php echo $row[0]; ?>"><img src="images/edit.gif"></a></TD><TD class="tvalue" align="center"><a href="admin.php?action=categories&delete=<?php echo $row[0]; ?>"><img src="images/delete.gif"></a></TD></TR>
<?php
} 
?>
</table>
<?php
}
?>
</div>
