<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POS&amp;INVENTORYSYSTEM</title>
<link rel="stylesheet" type="text/css" href="../css/stylehome.css" />
<script type="text/javascript" src="../js/jss.jsp"> </script>
<SCRIPT TYPE="text/javascript">
	function popup(mylink, windowname)
	{
	if (! window.focus)return true;
	var href;
	if (typeof(mylink) == 'string')
	   href=mylink;
	else
	   href=mylink.href;
	window.open(href, windowname, 'width=783,height=500,scrollbars=yes');
	return false;
	}
</SCRIPT>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
a {
	font-size: 20px;
	color: #999999;
}
-->
</style>
</head>
<body>
 
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
<table width="60" height="28" border="0" align="right">
  <tr>
    <td width="161" height="24"><div align="left"><a href="../logout/logout.php">Logout</a></div></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="">
  <div id="mother">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div id="header">
</form>
      <p></p>
      <p>&nbsp;</p>
</div>
    <p>&nbsp;</p>
    <div id="item">
   
    </div>
    
    <div id="sale">
      <div align="left"></div>
      
      <div style="width: 850px; height:550px; align:center; overflow:auto; margin-rigth:500px;   scrollbar-highlight-color :#F0DEE5; scrollbar-face-color : #D4AEBB; ">
     
     <form id="form2" name="form2" method="POST" action="">
     	<center>
	     	<?php
				include("connection/rec_class.php");
				$pay=$_POST['payment'];
				$check = new Check();
				echo "<font size=5 color=BLUE>Sales Break Down</font>";
				$check->show_all_basket();
				echo "<br>";
				$check->invoice_total();
				echo "<br>";
				if(isset($_POST['pay']))
				{
					$check->payment($pay);
				}
				
			?>
			<br>
			<input type="text" name="payment" id="payment" />
			<input type="submit" name="pay" id="pay" value="PAYMENT" />	   
			<br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="items.php">Shop More</a>  	
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="preview.php" onClick="return popup(this, 'notes')">Print Preview</a>  
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="clear.php">Finish Transaction</a>  		
				
     	</center>
      </div>
    </div>
  </div>
   </form>
</body>
</html>
