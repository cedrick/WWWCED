
<?php
session_start();
if($_SESSION['user'])
{
	echo "Welcome: ". $_SESSION['user'];
}
else
{
	header("location:../index.php");
}

?>


<form id="form2" name="form2" method="POST" action="">
<br>
<br>
<font size="5" color="BLUE">Daily Sales Report</font>
<br><br>
Enter Date:(Ex. 2012-02-29)
<input type="text" name="rdate" id="rdate" />
<input type="submit" name="report" id="pay" value="Create Report" />	
<?php 
include("includes/rec_class.php");
$check = new Check();
$rdate=$_POST['rdate'];
$check->daily_sales($rdate);
echo "<br>";
echo "<div align=center>";
$check->daily_total($rdate);
echo "</div>";
?>   
</form>