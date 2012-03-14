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

<style type="text/css">
<!--
.style14 {
	font-size: 12px;
	color: #FFFFFF;
}
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
		<h1><a href="#">web-based accounting system</a></h1>
	  <h2><a href="http://www.metamorphozis.com/" id="metamorph">designed for: la luz beach resort</a></h2>
	</div>
	<div id="menu">
		<ul>
			<li id="button1"><a href="menu.php" title="">HOME</a></li>
			<li id="button2"><a href="cc.php" title="" target="_self">C.C.</a></li>
		  <li id="button3"><a href="vc_ad.php" title="">V.C.</a></li>
			<li id="button4"><a href="#" title="">CHART</a></li>
		    <li id="button5"><a href="about.php" title="">ABOUT</a></li>
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
             <div align="left"></div>
            <p>
              <label></label>
              </p>
            <p>&nbsp;</p>
<p align="left" class="style1">
  <?php
			     
				
				 $id=$_POST['txtid'];
				 $name=$_POST['txtname'];
				 $ln=$_POST['txtln'];
				 $mi=$_POST['txtmi'];
				 $plc=$_POST['txtplc'];
				 $qty=$_POST['txtqty'];
				 $clerk=$_POST['txtclerk'];
				 $date=$_POST['txtmonth'];
				 $frm=$_POST['txtfrm'];
				 $to=$_POST['txtto'];
				 $yir=$_POST['txtyir'];
			     $trip=$_POST['txttrip'];
				 $bill=$_POST['txtbill'];
				 $pay=$_POST['txtpay'];
				 $num=$_POST['txtcont'];
				 $sen=$_POST['txtsen'];
			  	 $rm1=$_POST['room1'];
				 $rm2=$_POST['room2'];
				 $rm3=$_POST['room3'];
				 $rm4=$_POST['room4'];
				 $rm5=$_POST['room5'];
				  $us=$_COOKIE['name']; 
				
				 
				 mysql_connect("localhost","root")or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				
					if($rm1=='st')
					
					 {
						$say1 ="Standard 1800 6 people (Fan, 2 Semi-double beds)<br>";
					
					 
					 }
					 
					 if($rm2=='jp')
					 {
					 

					  $say2=" Junior Premier 2,550 4 people  (Aircon, 1 Queen Size bed)<br>";
					
					 }
					 
					 if($rm3=='p')
					 {
					   
					 	
					  $say3="  Premier 3,500 6 people  (Aircon, 2 Semi and 1 Double bed)<br> "; 
					 
					 
					 
					 }
					 
					 if($rm4=='pl')
					 {
					   
					   $say4="  Premier Loft  4,300 10 people  (Aircon, 5 Semi and 1 Double bed)<br> "; 
					    
					 
					 }
					 
					 if($rm5=='a')
					 {
					   
					  	
					   $say5="Annex  2,550 4 people  (Aircon, 2 Semi Double Beds)<br> "; 
					
					 
					 
					 }
					 
					 
				
				
				
				
				
				echo "Name: $name<br><br>";
				echo "Last Name: $ln<br><br>";
				echo "Middle initial: $mi<br><br>";
				echo "City/Province: $plc<br><br>";
				echo "Contact#: $num<br><br>";
				echo "Trip: $trip<br><br>";
				echo" Customer's Quantity: $qty<br><br>";
				echo "Senior Citizen: $sen<br><br>";
                
				echo "Accomodation:<br><br>";
				echo "$say1";
				echo "$say2";
				echo "$say3";
				echo "$say4";
				echo "$say5<br><br>";
			
				echo "Checked by: $us<br><br><br>";
				mysql_query( "insert into  tblmain(name,lname,mi,place)values ('$name','$ln','$mi','$plc') ") or die(mysql_error());
				
				
				
				
				
				
				
			  
			  
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
