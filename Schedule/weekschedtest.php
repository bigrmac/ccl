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
//ini_set('display_errors', 'on'); // ini setting for turning on errors
require '../assets/login.php';
require 'schedfunc.php';
$branch = strtoupper($_REQUEST['branch']);
$weekof = $_REQUEST['week']; if($_POST['week']==NULL){$week=date('m-d-Y');}
echo "<title>$branch Schedule</title>";

/* function after (string $this, string $inthat){
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    } */
/*  function before (string $this, string $inthat) {
        return substr($inthat, 0, strpos($inthat, $this));
    }; */
//Variable Decleration
//

$yearnow=date("Y");
$monthnow=date("m");
$timenow=date("G:i");
$week=(int)date("W")+2;
$date = date('m-d-Y');
$date2 = date(' M d, Y');
$day = date("N");
if ($day==1){
	$monday= new DateTime();
	$datemonday = $monday->format('M d');
  $dayviewmon=$monday->format('Y-m-d');
}else{
	$monday= new DateTime('last monday');
	$datemonday = $monday->format('M d');
  $dayviewmon=$monday->format('Y-m-d');
}
$tuesday=$monday->add(new DateInterval('P1D'));
$datetuesday= $tuesday->format('M d');
$dayviewtue=$tuesday->format('Y-m-d');
$wednesday=$tuesday->add(new DateInterval('P1D'));
$datewednesday= $wednesday->format('M d');
$dayviewwed=$wednesday->format('Y-m-d');
$thursday=$wednesday->add(new DateInterval('P1D'));
$datethursday= $thursday->format('M d');
$dayviewthu=$thursday->format('Y-m-d');
$friday = $thursday->add(new DateInterval('P1D'));
$datefriday= $friday->format('M d');
$dayviewfri=$friday->format('Y-m-d');
$saturday = $friday->add(new DateInterval('P1D'));
$datesaturday= $saturday->format('M d');
$dayviewsat=$saturday->format('Y-m-d');
$sunday=$saturday->add(new DateInterval('P1D'));
$datesunday= $sunday->format('M d');
$dayviewsun=$sunday->format('Y-m-d');


$url = "https://ncr.quickbase.com/db/bkim6843g?";
$dbid = "bfyxz8357";
$token = "ffypqddh5fqadb24u3pbhweem9";
$token2 = "d8ak57ncsav89adfgufpkm9ypcm";
$fullurl = "https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'14'.EX.'$branch'}AND{'209'.EX.'0'}AND{'9'.IR.'this+wk'}&slist=20";
//echo $fullurl;
/* if (($response_xml_data = simplexml_load_string(file_get_contents($fullurl)))===false){
	echo "Due to a connection issue with Quickbase, the Schedule is currently not available.<p>
		<img src=\"../assets/images/techdifficulties.jpg\" height=\"242\" width=\"400\">";
}else {
   libxml_use_internal_errors(true);
   $xmlgrab = simplexml_load_string($response_xml_data);
   if (!$xmlgrab) {
       echo "Error loading XML\n";
       foreach(libxml_get_errors() as $error) {
           echo "\t", $error->message;
       }
   }
} */
$xmlgrab=simplexml_load_string(file_get_contents($fullurl));

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
	$branch2 = strtoupper($branch);

	echo "<div id=\"header1\" class=\"centerg\"><h1><center>This Week's Schedule For $branch2</center></h2><br><center>Updated $date2 @ $timenow </center></h1></div>";

	  echo "<table align=\"center\" class=\"table1\">
			<thead>
			<tr style=\"border:3px solid yellowgreen;\">
			<th> </th>
			<th> </th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewmon\">Monday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewtue\">Tuesday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewwed\">Wednesday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewthu\">Thursday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewfri\">Friday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewsat\">Saturday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewsun\">Sunday</href></th>
			</tr>
			<tr>
			<th>CE Code</th>
			<th>Name</th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewmon\">$datemonday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewtue\">$datetuesday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewwed\">$datewednesday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewthu\">$datethursday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewfri\">$datefriday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewsat\">$datesaturday</href></th>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$dayviewsun\">$datesunday</href></th>
			</thead>
			<tbody>
		";

	  foreach ($xmlgrab->record as $record) {
			$qbdate=(float)$record->date/1000;
			$year=date('Y', $qbdate);
			$shiftstart= msecs2time($record->shift_start/1000);
			$shiftend= msecs2time($record->shift_end/1000);
			$territory=$record->territory2;
			//echo $territory:$territorypast;
			$shiftmeld="$shiftstart-$shiftend";
			if ($shiftmeld=="00:00-00:00"){$shiftmeld="OFF";}
			$notes=$record->notes;
			$notestrue=$record->notes;
			$notes=substr($record->notes, 0, 50);
			$notes=strtoupper($notes);
			$notestrue=strtoupper($notes);
			$notes=str_replace("/", "", $notes);
			$notes=str_replace("(", "", $notes);
			$notes=str_replace(")", "", $notes);
			$notes=str_replace(",", "", $notes);
			$notes=str_replace("*N*", " ", $notes);
			$csrname=substr($record->csr_name, 10, strlen($record->csr_name));
			$csrname=nameswap($csrname);
			//$csrcode=$record->csr;
			//if ($territory==$territorypast){$tf="True";}else{$tf="False";}
			if ($shiftstart=="08:00"||$shiftstart=="07:00"||$shiftstart=="09:00"||$shiftstart=="10:00"||$shiftstart=="08:30"){
				$colour="rcorners1"; $center="centerg";
				}elseif ($shiftmeld=="OFF"){
					$center="centerr";
				}else{$colour="rcorners2"; $center="centerb";}
			if (substr($notes, 0,3)=="OFF"||$shiftmeld=="OFF"){$shiftmeld="OFF"; $colour="rcornersred";}
			if (strpos($notestrue, 'VACATION')!== false){$shiftmeld="VACATION";}
      if (strpos($notestrue, 'ATTENDANCE')!== false){$shiftmeld="SICK";}
			if ($shiftmeld!=="OFF"&&strpos($notestrue, 'STANDBY')!== false){$shiftmeld=$shiftmeld."+STBY";}
			if ($shiftmeld=="OFF"&&strpos($notestrue, 'STANDBY')!== false){$shiftmeld="STANDBY";}
      //$installdate=date('mm-dd-YYYY', ($record->adjusted_date)/1000);
      //$installgrab=simplexml_load_string(file_get_contents("https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token2&query={'17'.EX.'$installdate'}AND{'151'.HAS.'$csrcode'}"));

      //$install=$installgrab->record->count();
      //if ($install!==0){$shiftmeld=$shiftmeld."*";}
			//if (substr($record->csr_name,0,20) == "Daytime Duty Manager"||substr($record->csr_name,0,20) == "Evening Duty Manager"||substr($record->csr_name,0,22) == "Overnight Duty Manager"||substr($record->csr_name,0,13)=="Shell_Corunna"){
      if (strpos($record->csr_name, 'Duty') !== false||substr($record->csr_name,0,13)=="Shell_Corunna"||strpos($record->csr_name, 'Network') !== false){
					$dmname= dmclean($record->notes);
					$dmcnt=strlen($dmname);
					/*if ($dmcnt==0){
						//if (preg_match('/^([A-Z]+)([0-9]+)$/i', $notestrue, $matches)){
						//	$dmname= $matches[1]; // Everything before the first number
						//}
						$dmexplode = explode(" ", $notestrue);
						$dmname= $dmexplode[0]." ".$dmexplode[1];
					}*/
					//$dmname= before('_', $record->notes);
					if (substr($record->csr_name,0,20) == "Evening Duty Manager"){$colour="rcornersdme"; $dmtitle="Evening DM"; $center="centerb";} elseif (substr($record->csr_name,0,20) == "Daytime Duty Manager") {$colour="rcornersdmd"; $dmtitle="Daytime DM"; $center="centerg";} elseif (substr($record->csr_name,0,13)=="Shell_Corunna"){ $dmtitle="Shell Corunna Standby"; $dmname=substr($notes,9,strlen($notes));} else {$colour="rcornersdme"; $dmtitle="Overnight DM"; $center="centerb";}
					$loopcnt++;
					$runcnt++;
					if ($loopcnt==1){
						if (strcmp($territorypast,$record->territory2)!=0){
							echo "<tr><th colspan=\"3\">$record->territory2</th></tr>";
						}
						echo "
						<tr>
						<th></td>
						<th>$dmtitle</td>
						<td>$dmname</td>
						";
					} elseif ($loopcnt==7){
						echo"<td>$dmname</td>";
						echo"</tr>";
						$loopcnt=0;
					} else {
						echo"<td>$dmname</td>";
					}
			} else {
					$loopcnt++;
					if ($loopcnt==1){
						if (strcmp($territorypast,$record->territory2)!=0){
							echo "<tr><th colspan=\"3\">$record->territory2</div></td></tr>";
						}
						if ($record->csr=="SCAR EVENING PROOF STBY"){$csrcode="PROOF STBY";}else{$csrcode=$record->csr;}
						echo "
						<tr>
						<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrcode</href></td>
						<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrname</href></td>
						<td>$shiftmeld</td>
						";
					} elseif ($loopcnt==7){
						echo"<td>$shiftmeld</td>";
						echo"</tr>";
						$loopcnt=0;
					} else {
						echo"<td>$shiftmeld</td>";
					}
			}
			$territorypast=$record->territory2;
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
