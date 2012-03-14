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
.style2 {color: #FFFF00}
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
if(!session_is_registered(username))

{
  header("location:sale.php");
  

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
		  <li id="button2"><a href="#" title="" target="_self">Extra Charges</a></li>
		  <li id="button3"><a href="poscustid2.php" title="">Extra Items</a></li>
		  <li id="button4"><a href="vc_ad.php" title="">Delivery</a></li>
		    <li id="button5"><a href="undercons.php" title="">Reports</a></li>
	  </ul>
	</div>
</div>

<!-- header ends -->
<!-- content begins -->
<div id="main">
<div id="mainbot">
<div id="maintop"></div>
	<div id="right">
	  <form action="" method="post" enctype="multipart/form-data" id="form1">
          <div align="center">
            <p>&nbsp;</p>
            <p></td>
              </tr>
            </table>
            </p>
            <p><span class="style1">
           
            </span> </p>
            <table width="610" border="0" align="center">
              <tr>
                <td width="164"><div align="center"><span class="style1">Activities</span></div></td>
                <td width="203"><div align="center"><span class="style1">Rate</span></div></td>
                <td width="221"><div align="center"></div></td>
              </tr>
              <tr>
                <td><span class="style1">Massage</span><span class="style2">  	(P250/hour)</span></td>
                <td><div align="center">
                  <input type="text" name="txtrate1" id="txtrate1" />
                </div></td>
                <td><label>
                  <div align="center"></div>
                </label></td>
              </tr>
              <tr>
                <td><span class="style1"><span class="style1">Snorkeling</span><span class="style2"> (P100/3                         hours.)</span></span></td>
                <td><div align="center">
                  <input type="text" name="txtrate2" id="txtrate2" />
                </div></td>
                <td><div align="center"></div></td>
              </tr>
              <tr>
                <td><span class="style1">Boating <span class="style2">(P300/hour.)</span></span></td>
                <td><div align="center">
                  <input type="text" name="txtrate3" id="txtrate3" />
                </div></td>
                <td><div align="center"></div></td>
              </tr>
              <tr>
                <td><span class="style1">Board Games</span><span class="style2"> ( P100/day)</span></td>
                <td><div align="center">
                  <input type="text" name="txtrate6" id="txtrate6" />
                </div></td>
                <td><div align="center"></div></td>
              </tr>
              <tr>
                <td><span class="style1">Diving <span class="style2">( P100 per tank.)</span></span></td>
                <td><div align="center">
                  <input type="text" name="txtqty5" id="txtqty5" />
                </div></td>
                <td><div align="center"></div></td>
              </tr>
              <tr>
                <td><span class="style1">Volleyball</span> <span class="style2">( P50/use)</span></td>
                <td><div align="center">
                  <input type="text" name="txtqty6" id="txtqty6" />
                </div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center"><span class="style1">Extra's</span></div></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><span class="style1">Extra Pillow
                  
                    
                </span></td>
                <td><span class="style1">
                  <input type="text" name="txtpillow" id="txtpillow" />
                </span></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><span class="style1">Extra Matress</span></td>
                <td><span class="style1">
                  <input type="text" name="txtmatress" id="txtmatress" />
                </span></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><span class="style1">Extra Food
                  <input type="text" name="txtfdname" id="txtfdname" />
                </span></td>
                <td><span class="style1">
                  <input type="text" name="txtfood" id="txtfood" />
                </span></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><span class="style1">Extra Meal
                    <label></label>
                </span></td>
                <td><span class="style1">
                  <select name="txtmeal" id="txtmeal">
                    <option>breakfast</option>
                    <option>lunch</option>
                    <option>dinner</option>
                  </select>
                </span></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="left" class="style1"></div></td>
                <td><div align="center">
                  <input type="submit" name="cmdok" id="cmdok" value="    ADD    " />
                </div></td>
                <td><div align="center"></div></td>
              </tr>
            </table>
            <p>&nbsp;</p>
<p class="style1">&nbsp;</p>
            <p class="style1"><br />
	    </p>
          </div>
    <div align="center">
   
              </div>
              	<?php
				
					$nameid=$_COOKIE['nmid'];
					$us=$_COOKIE['name'];  
				
				 $massage=(int)$_POST['txtrate1'];
				 fscanf(STDIN,"%d",$massage);
				 $qty=(int)$_POST['txtqty'];
				 fscanf(STDIN,"%d",$qty);
				 $snorkeling=(int)$_POST['txtrate2'];
				 fscanf(STDIN,"%d",$snorkeling);
				 $boating=(int)$_POST['txtrate3'];
				 fscanf(STDIN,"%d",$boating);		 
				 $board=(int)$_POST['txtrate6'];
				 fscanf(STDIN,"%d",$board );
				 
				 $diving=(int)$_POST['txtqty5'];
				 fscanf(STDIN,"%d",$diving);
				 $ball=(int)$_POST['txtqty6'];
				 fscanf(STDIN,"%d",$ball);
				 $pill=(int)$_POST['txtpillow'];
				 fscanf(STDIN,"%d",$pill);
				$matress=(int)$_POST['txtmatress'];
				 fscanf(STDIN,"%d",$matress);		 
				 $xfood=(int)$_POST['txtfood'];
				 fscanf(STDIN,"%d",$xfood );
				 
				 $foodnm=(string)$_POST['txtfdname'];
				 fscanf(STDIN,"%c",$foodnm);		 
				 $meal=(int)$_POST['txtmeal'];
				 fscanf(STDIN,"%d",$meal );
				 
				 
				 function checkmeal($xmeal)
				 {
				 	if($xmeal==breakfast)
					{
						$charge=150;
						return $charge;
					}
					if($xmeal==lunch)
					{
						$charge=300;
						return $charge;
					}
					if($xmeal==dinner)
					{
						$charge=350;
						return $charge;
					}
				 
				 
				 
				 
				 }
				 
				 
				 
				 
				 
				 
				 
				 mysql_connect("localhost","root")or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error()); 
				 
				 mysql_query("select * from $nameid")or die(mysql_error());                               														                
				 if( is_numeric($massage)&& is_numeric($qty)&& is_numeric($snorkeling)&& is_numeric($boating)&& is_numeric($board)&&  is_numeric($diving)&&  is_numeric($ball) && is_numeric($matress)&&  is_numeric($xfood)&& ctype_alpha($foodnm) &&  is_numeric($meal) )
				 
				 {
				 
				 $sql="insert into $nameid (extra,price,qty,amt,petsa,clerck)values('$prod','$presyo','$quantity','$amt','$date','$us')";
			mysql_query($sql)or die(mysql_error());
	
	}
	
	else
	{
		echo "error":
	}
				 
				 ?>
                 	
                 
                 
                 <?php
				 
				  mysql_connect("localhost","root")or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error()); 
				 ?>
				 
				
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

</body>
</html>
