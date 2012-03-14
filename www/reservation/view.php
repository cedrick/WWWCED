<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>web-based accounting system</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style6 {font-size: 16px; color: #FFFFFF;}
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
	color: #000000;
}
.style7 {font-family: "Courier New", Courier, monospace}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
 <?php
session_start();
if(!session_is_registered(username1))

{
  header("location:admin.php");
  

}
?>
<div id="content">
<!-- header begins -->
<div id="header"> 
	<div id="logo">
		<h1><a href="#">aldricks ver 1.0</a></h1>
	  <h2><a href="http://www.metamorphozis.com/" id="metamorph">designed for: la luz beach resort</a></h2>
	</div>
	<div id="menu">
		<ul>
			<li id="button1"><a href="menu.php" title="">Home</a></li>
			<li id="button2"><a href="reservation.php" title="" target="_self">Confirm</a></li>
		  <li id="button3"><a href="cc.php" title="">Booking</a></li>
		  <li id="button4"><a href="viewreserved.php" title="">Report</a></li>
		    <li id="button5"><a href="manage.php" title="">Add User</a></li>
	  </ul>
	</div>
</div>

<!-- header ends -->
<!-- content begins -->
<div id="main">
<div id="mainbot">
<div id="maintop"></div>
	<div id="right">
        <p>&nbsp;</p>
        <form id="form1" method="post" action="">
          <div align="center">
            <p><img src="images/thmb_Aerial.jpg" alt="" width="584" height="151" />
            </p>
            <p>&nbsp;</p>
            <table width="250" border="0">
              <tr>
                <td height="24" colspan="2"><div align="center" class="style6">
                  <h3 class="style7">ENTER USERNAME </h3>
                </div></td>
              </tr>
              <tr>
                <td width="96" height="24"><input name="cmdfind" type="submit" id="cmdfind" value="     Search     " /></td>
                <td width="144"><input name="txtfind" type="text" id="txtfind" /></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
    <p class="style1">
                  <?php
			     $user=$_POST['txtus'];
			     $pass=$_POST['txtpass'];
				 $conp=$_POST['txtconpass'];
				 $find=$_POST['txtfind'];
				 
				 mysql_connect("localhost","root")or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 $result= mysql_query( "select * from tbllog where username='$find' order by username desc ") or die(mysql_error());
	
	if ($result)
	{
	echo "<table width=300 border=0 align=center>";
	echo"<td>"."<b>"."USERNAME"."</b>"."</td>";
	echo"<td>"."<b>"."PASSWORD" ."</b>"."</td>";
	echo"<td>"."<b>"."EDIT" ."</b>"."</td>";
	echo"<td>"."<b>"."DELETE" ."</b>"."</td>";
	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		echo"<td>". $row['username'] ."</td>";
		echo"<td>". $row['password'] ."</td>";
		
		?>
		    <p align="center">
	        
		    <td><a href="search.php?name2=<?php echo $find;?>">Edit </a></td>
		</p>

		<?php
		?>
		<p align="center">

<td><a href="delete_confirm.php?name=<?php echo $find;?>">Delete </a></td>
		</p>

		<?php
		echo"</tr>";

		}

	     echo "</table>";
		

	}
	
			
	else
	{
	
	
	
	}	 
			
				
				
			  
			  
			  ?>
            </p>
            <p class="style1"><br />
	    </p>
          </div>
        </form>
        <div class="read"></div>
			
				
                <h4>&nbsp;</h4>
<div id="col">
  <div id="rightcol">
		<h5 align="center"><img src="images/LaluzLogoV4.gif" alt="" width="110" height="96" align="right" /></h5>
			<div class="read"></div>
		</div>
		</div>
	</div>
	<div id="lefttop">
	<div id="left">
			<h3>MANAGE USER </h3>
			<ul><p>
		      <embed src="images/Produce.wmv" width="221" height="195"> </embed>
		      <img src="images/thmb_Talisay_Bedroom_Interior.JPG" alt="" width="226" height="150" /><img src="images/thmb_Premier_Faucet.jpg" alt="" width="226" height="142" /><img src="images/thmb_Premier_Beds.JPG" alt="" width="146" height="100" /><img src="images/thmb_Premier_Sink_Area.JPG" alt="" width="65" height="100" /> </p>
			</ul>
			
	  </div>
	</div>
</div>
</div>

<div id="footer">
<p>Copyright  2009. <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p> 
	<p>Design by <a href="http://www.metamorphozis.com/" title="Flash Templates">Cedrick Macatangay</a>
	</p>
  </div>
</div>
<!-- footer ends-->
<div style="text-align: center; font-size: 0.75em;">Design downloaded f</div>
</body>
</html>
