<?php
	//get callid 
	$callid = trim($_GET['callid']);

	//get agent login
	if(trim($_GET['username']) != '') {
		$agent = trim($_GET['username']);
	} elseif (trim($_GET['username2']) != '') {
		$agent = trim($_GET['username2']);
	} elseif (trim($_GET['username3']) != '') {
		$agent = trim($_GET['username3']);
	} else {
		header("Location: error.php?err=5");
	}
	$err = "";
	$succ = "";
	$phone = "";
	//check if CALLID exist
	if ($callid != '' && !is_null($callid) && $agent != '' && !is_null($agent)) {
		//database connection
		include 'includes/class.connection.php';
		$dbConn=new Connection();
		$dbConn->NewConnection("localhost", "customer_care", "root", "");

		//try to insert
		$qstring = "INSERT INTO cc_logs(phone, callid, agent, rdate, ip) VALUE('', '".$callid."', '".$agent."', NOW(), '".$_SERVER['REMOTE_ADDR']."')";
		$insert = mysql_query($qstring);
			
		if(!$insert) {
			//failed to insert
			//$err = $err."Error 001. Contact your ADMIN.<br />";
			header("Location: error.php?err=1");
		} else {
			//success. Assign record id
			$record_id = mysql_insert_id(); //Record ID of newly insert record
			
			header("Location: log.php?id=".$record_id);
		}
			
	} else {
		header("Location: error.php?err=2");
	}
	
	
?>