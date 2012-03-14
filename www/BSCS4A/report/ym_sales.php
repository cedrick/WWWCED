
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
<font size="5" color="BLUE">Weekly/Monthly/Yearly Sales Report</font>
<br><br>
<font size="2" color="GRAY">Enter Date:(Ex. 2012-02-29)</font>
<br>
FROM:
<input type="text" name="sdate" id="sdate" />
<br>
TO:
<input type="text" name="edate" id="edate" />
<input type="submit" name="report" id="pay" value="Create Report" />	
<?php 
include("includes/rec_class.php");
$check = new Check();
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$check->wym_sales($sdate,$edate);
echo "<br>";
echo "<div align=center>";
$check->wym_total($sdate,$edate);
echo "</div>";
?>   
</form>