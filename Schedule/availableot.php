<html>
<head>
  
  
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<link rel="icon" type="image/png" href="https://m.ncr.com/norolinks/ccl/assets/favicons/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="https://m.ncr.com/norolinks/ccl/assets/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="https://m.ncr.com/norolinks/ccl/assets/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://m.ncr.com/norolinks/ccl/assets/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="https://m.ncr.com/norolinks/ccl/assets/favicons/favicon-32x32.png" sizes="32x32">
	
	<link rel="stylesheet"  href="tablestyle.css" media="screen and (min-width: 30em)">
	<link rel="stylesheet"  href="tablestylemobile.css" media="screen and (max-width: 30em)">
	<!--<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/jquery.mobile-1.4.0.min.css">
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/my_custom_css_1_4.css">
	
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/headerfooter.css">	
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/panel.css">	
	
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/smartphone.css" media="screen and (max-width: 30em)">
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/tabs.css"  media="screen and (min-width: 30em)" />
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/desktop.css"  media="screen and (min-width: 48em)" />-->
	
	<style>
		body {
			width:90%;
			height: 90%;
			text-align: centre;
			margin-left:auto;
			margin-right:auto;
		}
		#page-wrap {width 800px; margin: 0 auto;}
		#rcorners1 {
			color: white;
			border-radius: 25px;
			background: #006600;
			padding: 5px; 
			width: auto;
			height: 15; 
			white-space: nowrap;
			
		}
		#rcorners2 {
			color: white;
			border-radius: 25px;
			background: #000099;
			padding: 5px; 
			width: auto;
			height: 15; 
		}
		#rcorners3 {
			color: white;
			border-radius: 25px;
			background: #cce1ff;
			padding: 20px; 
			width: 90%;
			height: auto; 
		}
		#rcornersred {
			color: white;
			border-radius: 25px;
			background: #800000;
			padding: 5px; 
			width: auto;
			height: 15; 
		}
		#rcornersterr {
			color: white;
			border-radius: 25px;
			background: #3333cc;
			padding: 5px; 
			width: auto;
			height: 15; 
			font-size: 18px;
		}
		#rcornersheader {
			color: white;
			border-radius: 25px;
			background: #006600;
			padding: 10px; 
			width: 90%;
			height: auto; 
		}
		#rcornersdmd {
			color: white;
			border-radius: 25px;
			background: #006600;
			padding: 5px; 
			width: auto;
			height: 20; 
			white-space: nowrap;
		}
		#rcornersdme {
			color: white;
			border-radius: 25px;
			background: #000099;
			padding: 5px; 
			width: auto;
			height: 20; 
			white-space: nowrap;
		}
		.centerg {
			margin: auto;
			width: auto;
			border: 3px solid #006600;
			padding: 10px;
			text-align: center;
		}
		.centerb {
			margin: auto;
			width: auto;
			border: 3px solid #000099;
			padding: 10px;
			text-align: center;
		}
		.centerr {
			margin: auto;
			width: auto;
			border: 3px solid #800000;
			padding: 10px;
			text-align: center;
		}
		.off {
			
		}
		h1 {
			font-family: 'Franklin Gothic Medium';
			font-size: 32px;
			font-style: normal;
			font-variant: normal;
			font-weight: 500;
			line-height: 26.4px;
		}
		table td.shrink {
			white-space:nowrap
			text-align: center;			
		}
		a {
			color: inherit;
			text-decoration: inherit;
		}
		#header1 {
			margin: auto;
			width:70%;
			padding:15px;
			color:#fff;
			text-shadow:1px 1px 1px #568F23;
			border:1px solid #93CE37;
			border-bottom:3px solid #9ED929;
			background-color:#9DD929;
			background:-webkit-gradient(
				linear,
				left bottom,
				left top,
				color-stop(0.02, rgb(123,192,67)),
				color-stop(0.51, rgb(139,198,66)),
				color-stop(0.87, rgb(158,217,41))
			);
			background: -moz-linear-gradient(
				center bottom,
				rgb(123,192,67) 2%,
				rgb(139,198,66) 51%,
				rgb(158,217,41) 87%
			);
			-webkit-border-top-left-radius:5px;
			-webkit-border-top-right-radius:5px;
			-moz-border-radius:5px 5px 0px 0px;
			border-top-left-radius:5px;
			border-top-right-radius:5px;
		}
    </style>
</head>
<body>
<div>
<?php #Script 2.2 - handleform.php
//header("content-type: text/xml");
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off

require 'login.php';
//$branch = strtoupper($_REQUEST['branch']);
echo "<title>GTA OT Requests</title>";
$tmcheck=0;
$login=(trim($_COOKIE['LOGONNAME']));
//$login='rm123456';
if ($login=='ss137348'||$login=='pp185007'||$login=='rm185346'||$login=='nb185043'||$login=='rm100017'||$login=='cm230002'||$login=='ms185041'){
	$tmcheck=1;
}
//echo $tmcheck;

//Variable Decleration
//

$timenow=date("G:i");
$date = date('d-m-Y');
$date2 = date(' M d, Y');
function msecs2time($ss) {
	$m = floor(($ss%3600)/60);
	if ($m<10){$m = sprintf("%02d",$m);}
	$h = floor(($ss%86400)/3600);
	if ($h<10){$h = sprintf("%02d",$h);}
	return "$h:$m";
}


$url = "https://ncr.quickbase.com/db/bkim6843g?";
$dbid = "bm5yf3v5p";
$token = "ffypqddh5fqadb24u3pbhweem9";
$fullurl = "https://ncr.quickbase.com/db/bm5yf3v5p?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'10'.EX.'0'}AND{'7'.OAF.'$date'}&slist=7";
//echo $fullurl;
if (($response_xml_data = file_get_contents($fullurl))===false){
	echo "Error fetching XML\n";
}else {
   libxml_use_internal_errors(true);
   $xmlgrab = simplexml_load_string($response_xml_data);
   if (!$xmlgrab) {
       echo "Error loading XML\n";
       foreach(libxml_get_errors() as $error) {
           echo "\t", $error->message;
       }
   }
}

$tm = array("ss137348@ncr.com"=>"Susan Conway", "PP185007@ncr.com"=>"Patrick Peralta", "rm185346@ncr.com"=>"Rob Morandin", "NB185043@ncr.com"=>"Nick Baetz", "ms185041@ncr.com"=>"Michel Suprenant");

$errcode = $xmlgrab->errcode;
$errtext = $xmlgrab->errtext;
$errdetail = $xmlgrab->errdetail;
$territorypast="";
$count=$xmlgrab->count();
//print_r($xmlgrab);
$loopcnt=0;
$runcnt=0;
if ($xmlgrab->errcode != 0){
	echo "QUERY ERROR <p>";
	echo "ERROR CODE: " . $errcode . "<br>";
	echo $errtext . "<br>";
	echo $errdetail . "<br>";
	die('Please contact Administrator');
} else {
	//$branch2 = strtoupper($branch);
	
	echo "<div id=\"header1\" class=\"centerg\"><h1><center>GTA OT REQUESTS</center></h2><br><center>Updated $date2 @ $timenow </center></h1></div>";
	
	  echo "<table align=\"center\" class=\"table1\">
			<thead>
			<th>Territory Manager</th>
			<th>OT Request Date</th>
			<th>OT Shift</th>
			<th>OT Hours</th>
			<th>WorkGroup</th>
			<th>Seniority Rights Deadline Date</th>
			<th>Seniority Rights Deadline Time</th>
			";
	  if ($tmcheck==1){ echo "<th>Update Record</th>";}
			
		echo"</thead>
			<tbody>";
		
	  foreach ($xmlgrab->record as $record) {
		    $reqdate = (float)$record->ot_request_date;
		    $reqdate = $reqdate/1000;
			$reqdate2 = date("M d, Y", $reqdate);
			$requestdate = $reqdate2;
			$sentime = $record->seniority_rights_deadline_time;
			$seniortime = msecs2time($sentime/1000);
			$start = msecs2time($record->ot_request_start_time/1000);
			$end = msecs2time($record->ot_request_end_time/1000);
			$shift = $start." - ".$end;
			$sendate = (float)$record->seniority_rights_deadline_date;
			$seniordate = date("M d, Y", $sendate/1000);
			$tmemail = trim($record->territory_manager);
			$manager = $tm[$tmemail];
			$recordid = $record->record_id_;
			
		echo "<tr><td>$manager</td>
				<td>$requestdate</td>
				<td>$shift</td>
				<td>$record->ot_hours</td>
				<td>$record->workgroup</td>
				<td>$seniordate</td>
				<td>$seniortime</td>
				";
				
				if ($tmcheck==1){ echo "<td><a href=\"https://ncr.quickbase.com/db/bm5yf3v5p?a=dr&rid=$recordid&rl=b46\">Update</a></td>";}
	}
}
  echo "</tr>
			</tbody>
			</table>
			</div>
			</div>";
?>
</div>
</body>
</html>