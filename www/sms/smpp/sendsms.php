<?php
require_once ("smppclass.php");
$smpphost = "66.179.181.59";
$smppport = 2775;
$systemid = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];
$system_type = "PHP";
$from = $_POST['FROM'];
$smpp = new SMPPCLass();
$smpp->SetSender($from);
$smpp->Start($smpphost, $smppport, $systemid, $password, $system_type);
$smpp->Send($_POST['TO'], $_POST['MESSAGE']);
$smpp->End();
?>
