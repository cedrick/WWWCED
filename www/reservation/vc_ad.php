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
body,td,th {
	color: #000000;
}
.style3 {color: #FFFFFF}
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
	  <h2><a href="http://www.metamorphozis.com/" id="metamorph">designed for: la luz beach resort</a> </h2>
	</div>
	<div id="menu">
		<ul>
			<li id="button1"><a href="menu.php" title="">HOME</a></li>
			<li id="button2"><a href="cc.php" title="">C.C.</a></li>
		  <li id="button3"><a href="vc_ad.php" title="">V.C.</a></li>
			<li id="button4"><a href="#" title="">CHART</a></li>
		    <li id="button5"><a href="view.php" title=""> USER</a></li>
	  </ul>
	</div>
</div>

<!-- header ends -->
<!-- content begins -->
<div id="main">
<div id="mainbot">
<div id="maintop"></div>
	<div id="right">
        <form id="form1" method="post" action="">
          <p><img src="images/thmb_Waters.jpg" alt="" width="585" height="146" /></p>
          <p>&nbsp;</p>
          <table width="335" border="0" align="center">
            <tr>
              <td><span class="style3">Table</span></td>
              <td><label>
                <select name="txtbev" id="txtbev">
                  <option>Beverages</option>
                  <option>Food</option>
                </select>
              </label></td>
            </tr>
            <tr>
              <td width="86"><span class="style3">ITEM</span></td>
              <td width="239"><input type="text" name="txtprod" id="txtprod" /></td>
            </tr>
            <tr>
              <td><span class="style3">Stocks</span></td>
              <td><input type="text" name="txtstck" id="txtstck" /></td>
            </tr>
            <tr>
              <td><span class="style3">Price</span></td>
              <td><input type="text" name="txtprice" id="txtprice" /></td>
            </tr>
            <tr>
              <td><span class="style3">Date</span></td>
              <td><span class="style3">
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
              </span><span class="style3">
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
              </span><span class="style3">
              <select name="txtyir" id="txtyir">
                <option value="2010">2010</option>
              </select>
              </span></td>
            </tr>
            
            <tr>
              <td colspan="2"><div align="center">
                <input type="submit" name="cmdadd" id="cmdadd" value="     ADD     " />
              </div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"><label></label>                <label></label>
              <div align="center">
                 <?php
				$tabl=$_POST['txtbev'];
		  		 $prod=$_POST['txtprod'];
			     $stck=$_POST['txtstck'];
				 fscanf(STDIN,"%d",$stck);
				 $price=$_POST['txtprice'];
				 fscanf(STDIN,"%d",$price);
				 $date=$_POST['txtdate'];
				 $clrk=$_POST['txtclrk'];
				  $month=$_POST['txtmonth']; 
				 $checkin=$_POST['txtdayfrm'];
				  $checkout=$_POST['txtdayto'];
				  
				 
				 
				 
				 
				 	function checkmonth($mon,$xin,$xout)  // Function wca // to check the end of the month booking
				{
				if($mon=='Feb' && $xin<=28 && $xout<=28)
					{
						return TRUE;
					}	
				else if($mon=='Apr' && $xin<=30 && $xout<=30)
					{
						return TRUE;
					}
				else if($mon=='June' && $xin<=30 && $xout<=30)
					{
						return TRUE;
					}	
				else if($mon=='Sept' && $xin<=30 && $xout<=30)
					{
						return TRUE;
					}	
				else if($mon=='Nov' && $xin<=30 && $xout<=30)
					{
						return TRUE;
					}		
				else if($mon=='Jan' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}	
				else if($mon=='Mar' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else if($mon=='May' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else if($mon=='Jul' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else if($mon=='Aug' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else if($mon=='Oct' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else if($mon=='Decem' && $xin<=31 && $xout<=31)
					{
						return TRUE;
					}
				else
					{
						return FALSE;
					}	
				}
				
				
				 
				mysql_connect("localhost","root", "") or die(mysql_error());
				 mysql_select_db("dbacc")or die(mysql_error());
				 
				 if(is_numeric($price)&&is_numeric($stck)&&$prod!=null && $stck!=null && $price!=null && $date!=null && $clrk!=null && checkmonth($checkin,$checkout)==TRUE &&$tabl=='Bevarages')
					{
					$result= mysql_query("insert into $tabl values('$prod','$stck','$price','$date','$clrk') ");
					$result= mysql_query("insert into tblstocks values('$prod','$stck','$price','$date','$clrk') ");
					echo "<h3>Data Inserted</h3>";
					}
				
				
					else if(is_numeric($price)&&is_numeric($stck)&&$prod!=null && $stck!=null && $price!=null && $date!=null && $clrk!=null && checkmonth($checkin,$checkout)==TRUE &&$tabl=='Bevarages')
					{
				       $result= mysql_query("insert into $tabl values('$prod','$stck','$price','$date','$clrk') ");
					$result= mysql_query("insert into tblstocks values('$prod','$stck','$price','$date','$clrk') ");
					echo "<h3>Data Inserted</h3>";
				
				
					}
					
					
					else{ echo"mali";}
		  
		  
		  ?>
              </div><div align="center"></div></td>
            </tr>
          </table>
        </form>
        <h4>&nbsp;</h4>
        <h4>&nbsp;</h4>
      </div>
	<div id="lefttop">
	<div id="left">
			<h3>Vendor Center</h3>
			<ul>
			  <li><a href="#"> <?php $us=$_COOKIE['name'];  echo $us; ?></a></li>
		    </ul>
			
        <p>
	        <img src="images/LaluzLogoV4.gif" alt="" width="226" height="96" align="right" />
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
