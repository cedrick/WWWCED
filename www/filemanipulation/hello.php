<?php 

$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$date=date("Y/m/d h:i");
$activity=date("2012/03/05 06:5");


echo "Current Date:".$unix_cur=strtotime($date);
echo "<br>";
echo "Activity Date:".$unix_act=strtotime($activity);
echo "<br>";
//echo $idle=date_diff($unix_cur,$unix_act);
$idle=$unix_cur-$unix_act;
$settime=3600;
echo "Set Logout Date".$settime;
echo "<br>";
echo "Set Idle Date".$idle;



?>

