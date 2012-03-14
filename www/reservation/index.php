<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>web-based accounting system</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #66FFCC}
-->
</style>
</head>
<body>
<div id="content">
<!-- header begins -->
<div id="header"> 
	<div id="logo">
		<h1><a href="#">aldricks ver 1.0</a></h1>
	  <h2><a href="http://www.metamorphozis.com/" id="metamorph">designed for: la luz beach resort</a></h2>
	</div>
	<div id="menu">
		<ul>
			<li id="button1"><a href="#" title="">Home</a></li>
			<li id="button2"><a href="#" title="">P.O.S.</a></li>
		  <li id="button3"><a href="#" title="">Checkout</a></li>
			<li id="button4"><a href="#" title="">Inventory</a></li>
		    <li id="button5"><a href="about.php" title="">About</a></li>
		</ul>
	</div>
</div>

<!-- header ends -->
<!-- content begins -->
<div id="main">
<div id="mainbot">
<div id="maintop"></div>
	<div id="right">
        <h4 align="center"><img src="images/Umbrellas_7.JPG" alt="" width="448" height="300" /></h4>
	<div id="cen"></div>
		<div id="col">
		  <div id="leftcol">
		    <form id="form1" method="post" action="">
		      <table width="268" border="0">
                <tr>
                  <td><span class="style1">User-ID</span></td>
                  <td><p>
                      <label>
                      <input type="text" name="txtus" id="txtus" />
                      </label>
                  </p></td>
                </tr>
                <tr>
                  <td><span class="style1">Password</span></td>
                  <td><input type="password" name="txtpass" id="txtpass" /></td>
                </tr>
                <tr>
                  <td height="25" colspan="2"><div align="center"><span class="style1">
                      <input type="submit" name="cmdok" id="cmdok" value="     Login     " />
                  </span></div></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="center" class="style1"></div></td>
                </tr>
              </table>
               <?php
                 $user=$_POST['txtus'];
			     $pass=$_POST['txtpass'];
				
				 
				mysql_connect("localhost","root", "") or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				$result= mysql_query("select * from tbllog where username='$user' && password='$pass'")or die(mysql_error());
				 $count=mysql_num_rows($result);
			
				if ($count==1)
				 
				 
				 {
				  setcookie('name',$user);
				 session_register("username");
				 header("location:menu2.php");
				 
				
				 
				 }
				 
				 
				 
				 
				 else
				 
				 
				 {
				   
				 }
				 
				 
				 ?>
              
				 
                        </form>
		    <p align="center">&nbsp;</p>
		    <div class="read"></div>
		</div>
		<div id="rightcol">
		<h5 align="center"><img src="images/LaluzLogoV4.gif" alt="" width="110" height="96" /></h5>
			<div class="read"></div>
		</div>
		</div>
	</div>
	<div id="lefttop"><img src="images/thmb_Sunrise.jpg" alt="" width="241" height="100" /><img src="images/thmb_Waters.jpg" alt="" width="238" height="100" /><img src="images/thmb_Aerial.jpg" alt="" width="238" height="159" /><img src="images/thmb_View.jpg" alt="" width="236" height="147" /></div>
	<div style="clear:both"></div>
<!--content ends -->
<!--footer begins -->
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
