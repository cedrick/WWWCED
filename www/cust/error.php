<?php 
	$agent = "";
	$err_msg = "";
	$err = $_GET['err'];
	switch ($err){
		case 1:
			$err_msg = "Error 001. Contact your ADMIN";
			break;
		case 2:
			$err_msg = "Error 002. Contact your ADMIN";
			break;
		case 3:
			$err_msg = "Error 003. Contact your ADMIN";
			break;
		case 4:
			$err_msg = "Error 004. Contact your ADMIN";
			break;
		case 5:
			$err_msg = "Error 005. Contact your ADMIN";
			break;
	}
	
	//log error
	include 'includes/class.connection.php';
	$dbConn=new Connection();
	$dbConn->NewConnection("localhost", "customer_care", "root", "");
	
	$qstring = "INSERT INTO cc_log_errors(error_id, ip) VALUE(".$err.", '".$_SERVER['REMOTE_ADDR']."')";
	$insert = mysql_query($qstring);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Northstar Solutions Inc - Customer Care</title>
    <link type="text/css" href="template/css/style.css" rel="stylesheet" />  
    <style type="text/css">
    	#logTable {
    		font-size: 12px;
    	}
    	
    	.logForm {
    		margin: 60px 0 20px 60px;
    	}
    	
    	.label {
    		font-size: 14px;
    		font-weight: 700;
    	}
    	
    	.err {
    		color: red;
    	}
    	
    	.succ {
    		color: green;
    	}
    	
    </style>
  </head>
  <body>
    <div id="content">
      <div id="contentHeader">
      	<div style="width: 820px;margin-left: 200px;"><div id="nslogo"></div><div id="appTitle">Customer Care</div></div>
      </div>
      <div id="navMenu">
      	<div id="location"></div>
      	<div>
      		<ul>
      			
      		</ul>
      	</div>
      </div>
      <div class="clearFix"></div>
      <div id="contentBody" class="content">
      	<div id="contentTitle">ERROR!</div>
      	<br /><br /><br /><br />
        <div id="leftcontentBody">
        </div>
        <div id="rightcontentBody">
        	<table id="logTable" width="450" cellpadding="5">
        		<tr>
        			<td></td>
        			<td><div class='err'><?php echo $err_msg; ?></div></td>
        		</tr>
        	</table>
        </div>
      </div>
      <div id="contentFooter">
      	NorthStar Solutions Inc.     |     Copyright © 2011
      </div>
    </div>
  </body>
</html>