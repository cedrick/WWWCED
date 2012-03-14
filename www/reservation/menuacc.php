<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>web-based reservation and inverotry system with built-in POs via vpn</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.style2 {color: #66FFCC}
body,td,th {
	color: #000000;
}
.style1 {color: #FFFFFF}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_CheckFlashVersion(reqVerStr,msg){
  with(navigator){
    var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
    var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
    if (!isIE || !isWin){  
      var flashVer = -1;
      if (plugins && plugins.length > 0){
        var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
        desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
        if (desc == "") flashVer = -1;
        else{
          var descArr = desc.split(" ");
          var tempArrMajor = descArr[2].split(".");
          var verMajor = tempArrMajor[0];
          var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
          var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
          flashVer =  parseFloat(verMajor + "." + verMinor);
        }
      }
      // WebTV has Flash Player 4 or lower -- too low for video
      else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;

      var verArr = reqVerStr.split(",");
      var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
  
      if (flashVer < reqVer){
        if (confirm(msg))
          window.location = "http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
      }
    }
  } 
}
</script>
</head>
<body onload="MM_CheckFlashVersion('7,0,0,0','Content on this page requires a newer version of Adobe Flash Player. Do you want to download it now?');">
 <?php
session_start();
if(!session_is_registered(useracc))

{
  header("location:menuacc.php");
  

}
?>
<div id="content">
<!-- header begins -->
<div id="header"> 
	<div id="logo">
		<h1><a href="#">aldricks ver 1.0</a></h1>
	  <h2><a href="http://www.metamorphozis.com/" id="metamorph">designed for: la luz beach resort</a> </h2>
	</div>
	<div id="menu">
		<ul>
			<li id="button1"><a href="menu.php" title="">Home</a></li>
			<li id="button2"><a href="reservation.php" title="">Inventory</a></li>
		  <li id="button3"><a href="cc.php" title="">Stocks</a></li>
	    <li id="button4"><a href="viewreserved.php" title="">Reservation</a></li>
	      <li id="button5"><a href="view.php" title=""> Sales Order</a></li>
	  </ul>
	</div>
</div>

<!-- header ends -->
<!-- content begins -->
<div id="main">
<div id="mainbot">
<div id="maintop"></div>
	<div id="right">
        <h4 align="center"><img src="images/LaluzLogoV4.gif" alt="" width="110" height="96" align="right" /><img src="images/Umbrellas_7.JPG" alt="" width="448" height="300" /></h4>
			\
		    
	    <h4>&nbsp;</h4>
        <div id="cen"></div>
		<div id="col">
		  <div id="leftcol">
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
				$result= mysql_query("select * from tbllog where useracc='$user' && passacc='$pass'")or die(mysql_error());
				 $count=mysql_num_rows($result);
			
				if ($count==1)
				 
				 
				 {
				  setcookie('name',$useracc);
				 session_register("useracc");
				 header("location:menurep.php");
				 
				
				 
				 }
				 
				 
				 
				 
				 else
				 
				 
				 {
				   
				 }
				 
				 
				 ?>
<p align="center">&nbsp;</p>
		    <div class="read"></div>
		</div>
	    </div>
	</div>
	<div id="lefttop">
	<div id="left">
			<h3>WELCOME</h3>
			<ul>
			  <li><a href="#"><?php $us=$_COOKIE['name'];  echo $us; ?></a></li>
			    <li><strong><a href="manage_ad.php">MANAGE ADMIN</a></strong></li>
			    <li><strong><a href="view.php">MANAGE USER</a></strong></li>
			</ul>
			
<ul>
		      <li>
		        <h2><a href="logout_ad.php"><strong>LOGOUT</strong></a></h2>
		      </li>
          </ul>
	      <p>
	        <embed src="images/Produce.wmv" width="234" height="214"> </embed>
	      </p>
	      <p>&nbsp;</p>
		    <p>&nbsp;</p>
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
