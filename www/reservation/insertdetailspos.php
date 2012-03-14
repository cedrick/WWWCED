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
.style7 {
	color: #FFFFFF;
	font-size: 36px;
	font-weight: bold;
}
.style4 {	color: #FF0000;
	font-size: 16px;
}
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
		<h1><a href="#">aldricks v 1.0</a></h1>
	  <h2><a href="http://www.metamorphozis.com/" id="metamorph">designed for: la luz beach resort</a></h2>
	</div>
  <div id="menu">
		<ul>
			<li id="button1"><a href="menu2.php" title="">HOME</a></li>
			<li id="button2"><a href="poscustid.php" title="" target="_self">P.O.S.</a></li>
	    <li id="button3"><a href="vc_ad.php" title="">Delivery</a></li>
			<li id="button4"><a href="#" title="">Report</a></li>
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
	  <form action="insertdetailspos2.php" method="post" enctype="multipart/form-data" id="form1">
          <div align="center">
            <p>
              <?php
       
			  $prod1=$_POST['txtprod']; 
 			 $customer=$_COOKIE['nid'];
			  $sech=$_COOKIE['expl'];
			 $us=$_COOKIE['name'];
			
			setcookie('cart',$prod1);
			  $date=date("D/M/Y");
			  
		
			  mysql_connect("localhost","root")or die(mysql_error());
			  mysql_select_db("dbacc")or die(mysql_error());
			$result = mysql_query("SELECT COUNT(*) FROM $sech WHERE Item = '" . $prod1 . "' ") or exit(mysql_error());

	if(mysql_result($result, 0))//firewall
	
	{	

if($prod1!=nul )//firewall2

{ 


	if($sech=='Beverages'||$sech=='Food')//condition
	
		{

		 
			 $result= mysql_query( "select * from $sech where Item='$prod1' ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td align=center>"."<b>"."STOCK_CODE" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."PRODUCT" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."PRICE" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."STOCKS" ."</b>"."</td>";
	

	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		
		echo"<td align=center>". $row['stockcode']."</td>";
		echo"<td align=center>". $row['Item']."</td>";
		echo"<td align=center>". $row['Price'] ."</td>";
		echo"<td align=center>". $row['Stocks'] ."</td>";


		}
		
			
		
		}//result 
	
		
	
	else{	header("location:pos.php");}
	
	
	
	}

	else if($sech=='Meal'|| $sech=='Activities' || $sech=='House_keeping')
	
		{

		 
			 $result= mysql_query( "select * from $sech where Item='$prod1' ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td align=center>"."<b>"."STOCK_CODE" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."PRODUCT" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."PRICE" ."</b>"."</td>";
	
	

	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		
		echo"<td align=center>". $row['stockcode']."</td>";
		echo"<td align=center>". $row['Item']."</td>";
		echo"<td align=center>". $row['Price'] ."</td>";

		}
		
			
		
		}//result 
		
		
	    else{	header("location:pos.php");}
	
	
	
	
	
	}
	
	
	else if($sech=='Special_order')
	
		{

		 
			 $result= mysql_query( "select * from $sech where Item='$prod1' ") or die(mysql_error());		
	if ($result)//result
	{
	echo "<table width=500 border=1 align=center>";
	echo"<td align=center>"."<b>"."STOCK_CODE" ."</b>"."</td>";
	echo"<td align=center>"."<b>"."PRODUCT" ."</b>"."</td>";
	

	while($row=mysql_fetch_array($result))
		{
		echo"<tr>";
		
		
		echo"<td align=center>". $row['stockcode']."</td>";
		echo"<td align=center>". $row['Item']."</td>";
	
		}
		
			
		
		}//result 
		
		
	    else{	header("location:pos.php");}
		
		
		
		
		
	}//condition
	else{	header("location:pos.php");}


}//firewall2
 else{	header("location:pos.php");}		


}//firewall
else{	header("location:pos.php");}	


?>
            </p>
            <table width="624" border="0" align="center">
              
              <tr>
                <td height="46"><label>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <div align="center"></div>
                  <div align="center"></div>
                  <div align="center"></div>
                </label></td>
              </tr>
            </table>
            <table width="624" border="0" align="center">
              <tr>
                <td width="516" height="24"><p align="center"><span class="style7">ENTER QUANTITY</span></p>
                  <p align="center"><span class="style4">Please! enter the price if you select special order</span></p>
                  <p align="center">
                    <input type="text" name="txtqty" id="txtqty" />
                  </p>
                  <p align="center">
                    <input type="submit" name="cmdbuy" id="cmdbuy" value="     BUY     " />
                  </p>
                  <p align="center">&nbsp;</p></td>
              </tr>
            </table>
            <p></td>
              </tr>
            </table>
            </p>
            <p><span class="style1">
           
            </span> </p>
            <p>&nbsp;</p>
<p class="style1"></p>
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
			  <p><span class="style1"><img src="images/LaluzLogoV4.gif" alt="" width="229" height="96" /></span></p>
			  <p><img src="images/thmb_View.jpg" alt="" width="227" height="176" /></p>
			  <p><img src="images/thmb_Sunrise.jpg" alt="" width="225" height="199" /><img src="images/thmb_Aerial.jpg" alt="" width="224" height="189" /></p>
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
