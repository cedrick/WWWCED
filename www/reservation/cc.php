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
.style1 {color: #FFFFFF}
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
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style14 {
	font-size: 12px;
	color: #FFFFFF;
}
.style15 {color: #FFFF00}
-->
</style>
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
if(!session_is_registered(username1))

{
  header("location:admin.php");
  

}
?>
<div id="content">
<!-- header begins -->
<div id="header"> 
	<div id="logo">
		<h1><a href="#">web-based reservation and inverotry system with built-in POs via vpn</a></h1>
	  <h2><a href="http://www.metamorphozis.com/" id="metamorph">designed for: la luz beach resort</a></h2>
	</div>
  <div id="menu">
		<ul>
			<li id="button1"><a href="menu.php" title="">Home</a></li>
			<li id="button2"><a href="reservation.php" title="" target="_self">Confirm</a></li>
	    <li id="button3"><a href="cc.php" title="">Booking</a></li>
	    <li id="button4"><a href="viewreserved.php" title="">Report</a></li>
	      <li id="button5"><a href="undercons.php" title="">About</a></li>
	  </ul>
	</div>
</div>

<!-- header ends -->
<!-- content begins -->
<div id="main">
<div id="mainbot">
<div id="maintop"></div>
	<div id="right">
	  <form action="confirm.php" method="post" enctype="multipart/form-data" id="form1">
          <div align="center">
            <p>&nbsp;</p>
            <table width="624" border="0" align="center">
              
              <tr>
                <td width="164" height="24"><span class="read style1">Name</span></td>
                <td width="450"><label>
                  <input type="text" name="txtname" id="txtname" />
                </label></td>
              </tr>
              <tr>
                <td height="24"><span class="style14">Last Name</span></td>
                <td><input type="text" name="txtln" id="txtln" /></td>
              </tr>
              <tr>
                <td height="24"><span class="style1">M.I.</span></td>
                <td><input name="txtmi" type="text" id="txtmi" size="1" maxlength="1" /></td>
              </tr>
              <tr>
                <td height="24"><span class="style1">City/Province</span></td>
                <td><input type="text" name="txtplc" id="txtplc" /></td>
              </tr>
              <tr>
                <td height="24"><span class="style1">Contact#</span></td>
                <td><input name="txtcont" type="text" id="txtcont" size="11" maxlength="11" /></td>
              </tr>
              <tr>
                <td height="15"><span class="style1">Trip</span></td>
                <td><label>
                  <select name="txttrip" id="txttrip">
                    <option value="DAY">Day</option>
                    <option value="NIGHT">Night</option>
                  </select>
                </label>
                  <label></label>
                  <div align="center" class="style1"></div>                  </td>
              </tr>
              <tr>
                <td height="24"><span class="style1">Number of persons</span></td>
                <td><input type="text" name="txtqty" id="txtqty" /></td>
              </tr>
              <tr>
                <td height="24"><span class="style1">Senior Citizen(20% Discount)</span></td>
                <td><span class="style1">
                  <input type="text" name="txtsen" id="txtsen" />
                </span></td>
              </tr>
              
              
              <tr>
                <td height="24"><span class="style1">Reservation Date:
                    <label></label>
                </span></td>
                <td><p><span class="style1">From
                  <select name="txtmonth" id="txtmonth">
                    <option>Jan</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Apr</option>
                    <option>May</option>
                    <option>June</option>
                    <option>Jul</option>
                    <option>Aug</option>
                    <option>Sept</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Decem</option>
                  </select>
                  <select name="txtdayfrm" id="txtdayfrm">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                  </span><span class="style1">To:</span><span class="style1">
                  <select name="txtmonth2" id="txtmonth2">
                    <option>Jan</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Apr</option>
                    <option>May</option>
                    <option>June</option>
                    <option>Jul</option>
                    <option>Aug</option>
                    <option>Sept</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Decem</option>
                  </select>
                  </span>
                  <select name="txtdayto" id="txtdayto">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                  <span class="style1">Year:</span>
                <label><span class="style1">
                <select name="txtyir" id="txtyir">
                  <option value="2010">2010</option>
                                                </select>
                </span></label>
                </p>                </td>
              </tr>
              <tr>
                <td height="24">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="24"><span class="style1">Accomodations</span></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="24">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="24"><span class="style1">Standard1,800  	max 6 people  	<span class="style15">(Fan, 2 Semi-double beds)</span></span></td>
                <td><label>
                <select name="txtst" id="txtst">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                </label></td>
              </tr>
              <tr>
                <td height="24"><span class="style1">Junior Premier2,550  	max 4 people  	<span class="style15">(Aircon, 1 Queen Size bed) </span></span></td>
                <td><label>
                <select name="txtjp" id="txtjp">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                </label></td>
              </tr>
              <tr>
                <td height="24"><span class="style1">Premier3,500  	max 6 people  	<span class="style15">(Aircon, 2 Semi and 1 Double bed) </span></span></td>
                <td><label>
                <select name="txtp" id="txtp">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                </label></td>
              </tr>
              <tr>
                <td height="24"><span class="style1">Premier Loft4,300                max 10 people  	<span class="style15">(Aircon, 5 Semi and 1 Double bed)</span></span></td>
                <td><label>
                <select name="txtpl" id="txtpl">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                </label></td>
              </tr>
              <tr>
                <td height="24"><span class="style1">Annex2,550                max 4 people  	<span class="style15">(Aircon, 2 Semi Double Beds</span>)</span></td>
                <td><label>
                <select name="txta" id="txta">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                </label></td>
              </tr>
              <tr>
                <td height="24" colspan="2"><label></label>                  <label>
                  <div align="center"><span id="sprytextfield1"><span class="textfieldRequiredMsg">A value is required.</span>
                    <input type="submit" name="cmdok" id="cmdok" value="    Create     " />
                    </span>                  </div>
                </label>
                <div align="center"></div></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p><span class="style1">
           
            </span> </p>
            <p>&nbsp;</p>
<p class="style1">&nbsp;</p>
            <p class="style1"><br />
	    </p>
          </div>
           <div align="center">
   
              </div>
	  </form>
        <div class="read"></div>
			
				
                <h4>&nbsp;</h4>
<div id="col">
  <div id="rightcol">
		<h5 align="center">&nbsp;</h5>
			<div class="read"></div>
		</div>
		</div>
	</div>
	<div id="lefttop">
	<div id="left">
			<h3>Customer Center</h3>
			<ul>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p><span class="style1"><img src="images/LaluzLogoV4.gif" alt="" width="229" height="96" /></span><img src="images/thmb_View.jpg" alt="" width="227" height="176" /><img src="images/thmb_Sunrise.jpg" alt="" width="225" height="199" /><img src="images/thmb_Aerial.jpg" alt="" width="227" height="168" /></p>
		    </ul>
			
	  </div>
	</div>
</div>
</div>

<div id="footer">
<p>
  Copyright  2009. <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p> 
	<p>Design by <a href="http://www.metamorphozis.com/" title="Flash Templates">Cedrick Macatangay</a>
	</p>
  </div>
</div>
<!-- footer ends-->
<div style="text-align: center; font-size: 0.75em;">Design downloaded f</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>
