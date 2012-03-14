<?php


/* Load sms-api class */
require_once ("sms_api.php");

/* Initialize object */
$mysms = new sms($_POST['USERNAME'],$_POST['PASSWORD']);

/* Send message or print SMS credit balance */
if ($_GET['balance']<>1) {
    $results = $mysms->send($_POST['TO'],$_POST['FROM'],$_POST['MESSAGE']);
    echo "Sending results: ". $results;
} else {
    $balance = $mysms->getbalance();
    echo "Current SMS balance: ".$balance;
}

?>