

<?php #Script 2.2 - login.php
//header("content-type: text/xml");
$xmlauth=simplexml_load_string(file_get_contents("https://ncr.quickbase.com/db/main?a=API_Authenticate&username=co230031@ncr.com&password=Ncr12345")) or die("Error: Unable to Connect.  Failed to establish connection to Quickbase. Possible link is down momentarily, Please try again in a few minutes.");
$errcode = $xmlauth->errcode;
$errtext = $xmlauth->errtext;
$errdetail = $xmlauth->errdetail;
if ($xmlauth->errcode != 0){
	echo "AUTHENTICATION ERROR <p>";
	echo "ERROR CODE: " . $errcode . "<br>";
	echo $errtext . "<br>";
	echo $errdetail . "<br>";
	die('Please contact Administrator');
} else {
	$ticket = $xmlauth->ticket;
	$userid = $xmlauth->userid;
}
?>