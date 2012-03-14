<?php 
	$agent = "";
	$err = "";
	$succ = "";
	$phone = "";
	$callid = "";
	
	$record_id = trim($_GET['id']);
	//check if id exist
	if ($record_id != '' && !is_null($record_id)) {
		//database connection
		include 'includes/class.connection.php';
		$dbConn=new Connection();
		$dbConn->NewConnection("localhost", "customer_care", "root", "");

		//test if FORM is submitted
		if (isset($_POST['save'])) {
			//Update record
			$update = mysql_query("UPDATE cc_logs SET phone = '".mysql_escape_string($_POST['phone'])."', rdate =  NOW(), ista_id = '".mysql_escape_string($_POST['ista_id'])."' WHERE id = ".$record_id);
			
			if (!$update) {
				//failed to update
				header("Location: error.php?err=3");
			} else {
				//success. get info
				$succ = "Record save! <strong>Trace ID: " . $record_id . "</strong>";
			}
		}
		
		//get info
		$get_info = mysql_query("SELECT * FROM cc_logs WHERE id = ".$record_id);
		if(mysql_num_rows($get_info) > 0) {
			$info = mysql_fetch_object($get_info);
			$date = $info->rdate;
			$phone = $info->phone;
			$agent = $info->agent;
			$callid = $info->callid;
			$ista_id = $info->ista_id;
		} else {
			header("Location: error.php?err=4");
		}
		
	} else {
		header("Location: error.php?err=5");
	}
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
      	<div style="width: 820px;margin-left: 200px;"><div id="nslogo"></div><div id="appTitle">Customer Care</div><div id="greeting">Hi <?php echo $agent;?></div></div>
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
      	<div id="contentTitle">Call Log</div>
        <div id="leftcontentBody">
        </div>
        <div id="rightcontentBody">
        	<form action="<?php $_SERVER['PHP_SELF'];?>" class="logForm" method="post">
        		<table id="logTable" width="450" cellpadding="5">
        			<tr>
        				<td width="100" class="label">Phone:</td>
        				<td><input type="text" name="phone" value="<?php echo $phone;?>"/></td>
        			</tr>
        			<tr>
        				<td class="label">ISTA ID:</td>
        				<td><input type="text" name="ista_id" value="<?php echo $ista_id;?>"/></td>
        			</tr>
        			<tr>
        				<td class="label">Agent:</td>
        				<td><?php echo $agent; ?></td>
        			</tr>
        			<tr>
        				<td class="label">Call ID:</td>
        				<td><?php echo $callid; ?></td>
        			</tr>
        			<tr>
        				<td class="label">Date:</td>
        				<td><?php echo $date; ?></td>
        			</tr>
        			<tr>
        				<td></td>
        				<td><input type="submit" name="save" value="Save"/></td>
        			</tr>
        			<tr>
        				<td></td>
        				<td><div class='succ'><?php echo $succ; ?></div></td>
        			</tr>
        		</table>
        		<input type="hidden" name="record_id" value="<?php echo $record_id; ?>"/>
        	</form>
        </div>
      </div>
      <div id="contentFooter">
      	NorthStar Solutions Inc.     |     Copyright © 2011
      </div>
    </div>
  </body>
</html>