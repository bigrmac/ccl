

<?php #Script 2.2 - login.php
//header("content-type: text/xml");
error_reporting(0);
$xmlauth=simplexml_load_string(file_get_contents("https://ncr.quickbase.com/db/main?a=API_Authenticate&username=co230031@ncr.com&password=Ncr12345")) or die("Error: Unable to Connect.  <p>Failed to establish connection to Quickbase. <br>Possible link is down momentarily, Please try again in a few minutes. <br><img src=\"techdifficulties.jpg\">");
$errcode = $xmlauth->errcode;
$errtext = $xmlauth->errtext;
$errdetail = $xmlauth->errdetail;
if ($xmlauth->errcode != 0){
	echo "AUTHENTICATION ERROR <p>";
	echo "ERROR CODE: " . $errcode . "<br>";
	echo $errtext . "<br>";
	echo $errdetail . "<br>";
	echo "<img src=\"techdifficulties.jpg\">";
	die('Please contact Administrator');
} else {
	$ticket = $xmlauth->ticket;
	$userid = $xmlauth->userid;
	//echo "Ticket: $ticket<br>";
	//echo "Userid: $userid";
}
//$ticket = "9_bpetpt6s8_bypss7_s9a_a_-b_cg396w4cmf6f5ccyx9s3vd9n2dhrdns2sg3bpvuyrnbf8za4ngsvgbv_byncy2q";
?>
