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
?>
<div class="admin_content">
<div id="hdr_report">
  <b>Choose options:</b><br><br>
  <form action="admin.php?action=reports" method="POST" name="form_report1">
  Date <input type="text" size="12" name="date1" <?php if(isset($_POST['submit_report1']))echo 'value="' .$_POST['date1'] .'"'; ?>> to <input type="text" size="12" name="date2" <?php if(isset($_POST['submit_report1']))echo 'value="' .$_POST['date2'] .'"'; ?>>&nbsp;&nbsp;&nbsp;
  User <select name="user"><option value="-1">---</option><option value="0">Administrator</option>
  <?php
  $result = $db->query("select id, first_name, last_name from users");
  while ($row = mysql_fetch_row($result)){
    if(isset($_POST['user']) && $_POST['user']==$row[0]){
  ?><option value="<?php echo $row[0]; ?>" SELECTED><?php echo htmlspecialchars($row[1] ." " .$row[2]); ?></option><?php
    }
    else{
  ?><option value="<?php echo $row[0]; ?>"><?php echo htmlspecialchars($row[1] ." " .$row[2]); ?></option><?php
    }
  }
  ?>
  </select>&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit" name="submit_report1"><br>
  <input type="checkbox" name="groupbydate" <?php if(isset($_POST['groupbydate']))echo "CHECKED"; ?> style="border:0px"> Group by date
  </form>
</div>

  <?php
    if(isset($_POST['date1'])){

	if(isset($_POST['groupbydate'])){
		$sql1 = "select date, sum(sale_total_cost) from sales";
	}
	else{
		$sql1 = "select id, date, items_purchased, sale_total_cost, sold_by from sales";
	}
	$sql2 = "select sum(sale_sub_total),sum(sale_total_cost) from sales";
	$nq = 0;
	if($_POST['date1']!="" && $_POST['date2']==""){
          $sql1 .= " where date='" .$_POST['date1'] ."'";
	  $sql2 .= " where date='" .$_POST['date1'] ."'";
	  $nq++;
	}
	if($_POST['date1']!="" && $_POST['date2']!=""){
	    $sql1 .= " where date between '" .$_POST['date1'] ."' and '" .$_POST['date2'] ."'";
	    $sql2 .= " where date between '" .$_POST['date1'] ."' and '" .$_POST['date2'] ."'";
	    $nq++;
	}
        if($_POST['user']>-1){
          if($nq==0){
	    $sql1 .= " where sold_by=" .$_POST['user'];
	    $sql2 .= " where sold_by=" .$_POST['user'];
	  }
	  else{
	    $sql1 .= " and sold_by=" .$_POST['user'];
	    $sql2 .= " and sold_by=" .$_POST['user'];
	  }
	  $nq++;
	}
	if(isset($_POST['groupbydate']))$sql1 .= " group by date";
	$result = $db->query($sql2);
	  if($result){
	  $row = mysql_fetch_row($result);
	  ?>
	  <table>
    	    <TR><TD>Tax: </TD><TD align="right"><?php echo $row[1]-$row[0]; ?></TD></TR>
   	    <TR><TD>Sub-Total: </TD><TD align="right"><?php echo $row[0]; ?></TD></TR>
    	    <TR><TD>Total: </TD><TD align="right"><?php echo $row[1]; ?></TD></TR>
  	  </table>
	<table>
  	<tr><th width="100">Date</th>
	<?php
	if(!isset($_POST['groupbydate'])){
		?><th width="100">Sold By</th><th width="100">Items</th><?php
	}
	?><th width="100">Total</th></tr>
	<?php
	}
	$result = $db->query($sql1);
	if($result){
	  while($row = mysql_fetch_row($result)){
          
	  if(!isset($_POST['groupbydate'])){
	    ?><TR><TD><?php echo $row[1]; ?></TD><TD align="right"><?php echo ($row[4]=="0"?"Admin":$row[4]); ?></TD><TD align="right"><?php echo $row[2]; ?></TD><TD align="right"><?php echo $row[3]; ?></TD></TR><?php
	  }
	  else{
	    ?><TR><TD><?php echo $row[0]; ?></TD><TD align="right"><?php echo $row[1]; ?></TD></TR><?php
	  }
	  }
	}
  ?>
  	</table>
</div>
<?php
  }
?>

