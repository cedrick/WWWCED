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
<div id="content">
<!-- header begins -->
<div id="header"> 
	<div id="logo">
		<h1><a href="#">aldricks ver 1.o</a></h1>
	  <h2><a href="http://www.metamorphozis.com/" id="metamorph">designed for: la luz beach resort</a></h2>
	</div>
	<div id="menu">
		<ul>
			<li id="button1"><a href="menu2.php" title="">Home</a></li>
			<li id="button2"><a href="poscustid.php" title="">P.O.S</a></li>
		  <li id="button3"><a href="poscustid2.php" title="">Checkout</a></li>
		  <li id="button4"><a href="menuinventory.php" title="">Inventory</a></li>
	      <li id="button5"><a href="about.php" title=""> About</a></li>
	  </ul>
	</div>
</div>

<!-- header ends -->
<!-- content begins -->
<div id="main">
<div id="mainbot">
<div id="maintop"></div>
	<div id="right">
        <p class="style1">&nbsp;	</p>
        <table width="434" border="0" align="center">
          <tr>
            <td width="168">&nbsp;</td>
            <td width="75"><span class="style1">Programmers</span></td>
            <td width="177"><span class="style1"></span></td>
          </tr>
          <tr>
            <td><div align="center" class="style1">Aldie D. Quilapio</div></td>
            <td><span class="style1"></span></td>
            <td><div align="center" class="style1">Cedrick C. Macatangay</div></td>
          </tr>
          <tr>
            <td><div align="center" class="style1">quilapioaldie@yahoo.com</div></td>
            <td><span class="style1"></span></td>
            <td><div align="center" class="style1">cedrickmacatangay@gmail.com</div></td>
          </tr>
          <tr>
            <td><div align="center" class="style1">+639294231133</div></td>
            <td><span class="style1"></span></td>
            <td><div align="center" class="style1">+63918114656</div></td>
          </tr>
        </table>
        <p class="style1"><br />
        </p>
        <h4 align="center"><br />
        </h4>
        <p>&nbsp;</p>
	    <div id="cen"></div>
		<div id="col"></div>
	</div>
	<div id="lefttop">
	<div id="left">
			<h3>WELCOME</h3>
			<ul>
				<li><a href="#">
                
                </a>
				  <?php $us=$_COOKIE['name'];  echo $us; ?>
				  <h2>&nbsp;</h2>
				</li>
		  </ul>
			
    <ul>
      <div align="left"><img src="images/LaluzLogoV4.gif" alt="" width="147" height="96" align="right" />                        </div>
    </ul>
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
