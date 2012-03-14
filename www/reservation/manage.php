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
		<h1><a href="#">aldricks v 1.0</a></h1>
	  <h2><a href="http://www.metamorphozis.com/" id="metamorph">designed for: la luz beach resort</a></h2>
	</div>
	<div id="menu">
		<ul>
			<li id="button1"><a href="menu.php" title="">Home</a></li>
			<li id="button2"><a href="reservation.php" title="" target="_self">Confirm</a></li>
      </ul>
	    <p><a href="cc.php" title="">Booking</a></p>
    <ul>
	      <li id="button4"><a href="viewreserved.php" title="">Report</a></li>
	      <li id="button5"><a href="view.php" title="">User</a></li>
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
          <p><img src="images/thmb_Sunrise.jpg" alt="" width="584" height="198" /></p>
          <table width="331" border="0" align="center">
            <tr>
              <td width="114"><span class="style1">User-ID</span></td>
              <td width="207"><input name="txtus" type="text" id="txtus" value="" /></td>
            </tr>
            <tr>
              <td><span class="style1">Password</span></td>
              <td><input type="password" name="txtpass" id="txtpass" /></td>
            </tr>
            <tr>
              <td><span class="style1">Confirm Password</span></td>
              <td><span class="style1">
                <input type="password" name="txtconpass" id="txtconpass" />
              </span></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center"><span class="style1">
                <input type="submit" name="cmdok" id="cmdok" value="     Login     " />
              </span></div></td>
            </tr>
          </table>
          
          <p align="center"><span class="style1">
            <?php
			     $user=$_POST['txtus'];
			     $pass=$_POST['txtpass'];
				 $conp=$_POST['txtconpass'];
				 
				mysql_connect("localhost","root", "") or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 
			
				if($pass==$conp && $pass!=null && $conp!=null && $user!=null   )
				{
				$result= mysql_query("insert into tbllog values('$user','$pass') ");
				echo "Data Inserted";
				}
				
				
				else
				{
				
				
				
				}
			  
			  
			  ?>
          </span></p>
  <div align="center"><br />
	    </div>
        </form>
        <div class="read"></div>
			
				
        <div id="col">
          <div id="rightcol">
		<h5 align="left"><span class="read"><img src="images/LaluzLogoV4.gif" alt="" width="110" height="96" align="right" /></span></h5>
			<div class="read">
			  <div align="left"></div>
			</div>
		</div>
		</div>
	</div>
	<div id="lefttop">
	<div id="left">
		  <h3>MANAGE USER		  </h3>
		  <p>&nbsp;</p>
		  <p>
		    <embed src="images/Produce.wmv" width="227" height="201"> </embed>
		  </p>
		  <p><img src="images/thmb_Cabana_from_Behind.jpg" alt="" width="229" height="146" /><img src="images/thmb_Cottage2.jpg" alt="" width="229" height="82" /></p>
	</div>
	</div><div style="clear:both"></div>
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
