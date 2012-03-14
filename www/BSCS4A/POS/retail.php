<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POS&amp;INVENTORYSYSTEM</title>
<link rel="stylesheet" type="text/css" href="../css/stylehome.css" />
<script type="text/javascript" src="../js/jss.jsp"> </script>
<style type="text/css">
<!--
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
}
a {
	font-size: 20px;
	color: #999999;
}
-->
</style>
</head>
<body>
 
<?php
session_start();
if($_SESSION['user'])
{
	echo "Welcome: ". $_SESSION['user'];
}
else
{
	header("location:../index.php");
}

?>



<table width="60" height="28" border="0" align="right">
  <tr>
    <td width="161" height="24"><div align="left"><a href="../logout/logout.php">Logout</a></div></td>
  </tr>
</table>

  <div id="mother">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div id="header">
      <table width="419" height="71" border="0" align="right">
        <tr>
          <td width="133" height="67"><div align="left"><a href="../content/index.php">
              <input type="image" name="imageField5" id="imageField3" src="../css/homeicon.JPG" />
            HOME </a></div></td>
          <td width="170"><div align="center"><a href="../POS/POS.php"> <a href="../POS/POS.php">
                    <input type="image" name="imageField" id="imageField" src="../css/pos.JPG" />
            POS </a></div></td>
          <td width="102"><div align="center">
              <input type="image" name="imageField4" id="imageField6" src="../css/helpicon.JPG" />
            HELP</div></td>
        </tr>
      </table>
      <p></p>
      <p>&nbsp;</p>
    </div>
    <p>&nbsp;</p>
    <div id="item">
   
    </div>
    
    <div id="sale">
      <div align="left"></div>
      
      <div style="width: 850px; height:550px; align:center; overflow:auto; margin-rigth:500px;   scrollbar-highlight-color :#F0DEE5; scrollbar-face-color : #D4AEBB; ">
      
      
      
    <?php

	 
	include("../connection/connection.php");;
	$result = mysql_query("SELECT * FROM tblinventory ORDER BY category") or die(mysql_error());
	
	echo "<Table border=0 align=center width=800 bordercolor=#0000FF >";
	echo "<TR   bgcolor=#4887EE  height=50 >";
		echo "<TH> </TH>";
	echo "<TH>Product Name </TH>";
	echo "<TH>Product Code</TH>";
	echo "<TH>Category</TH>";
	echo "<TH>Price </TH>";
	//echo "<TH>Stocks </TH>";
	echo "<TH>Quantity </TH>";
	//echo "<TH> Update </TH>";
	echo "</TR>";
	while($row = mysql_fetch_array( $result ))
	
	{
		echo "<TR align=center>";
		?>
        <?php echo "<TD bgcolor=#CCCCCC>"?><input name= "check" type = "checkbox"/>
        <?php
		echo "<TD bgcolor=#CCCCCC>". $row['product_name'];
		echo "<TD bgcolor=#CCCCCC>". $row['product_code'];
		echo "<TD bgcolor=#CCCCCC>". $row['category'];
		echo "<TD bgcolor=#CCCCCC>". $row['price'];
		//echo "<TD bgcolor=#CCCCCC>". $row['stocks'];
		?> <?php echo "<TD bgcolor=#CCCCCC>"?><input name="quantity" type="text" />
			
		
	
       	    <?php
  
  
  
  
		echo "</TR>";
		}
		echo"</table>";
		
		?>
              <form id="form1" name="form1" method="post" action="compute.php"> 
                <input type="submit" name="Submit" id="button" value="Submit" />
                            </form>
      </div>
    
    </div>
     
    <p>
      <label></label>
    </p>
</div>
  


  </body>
</html>
