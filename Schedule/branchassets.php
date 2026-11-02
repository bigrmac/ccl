<!DOCTYPE HTML>

<html>
<head>
  
  <title>CE Assets</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<link rel="icon" type="image/png" href="http://www.ncr.com/wp-content/themes/ncr-dotcom-wp-theme_STRIPPED/_assets/favicons/favicon-32x32.png" sizes="32x32">
	<!--<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/jquery.mobile-1.4.0.min.css">-->
	<link rel="stylesheet"  href="tablestyle.css" media="screen and (min-width: 30em)">
	<link rel="stylesheet"  href="tablestylemobile.css" media="screen and (max-width: 30em)">
	<!--
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/headerfooter.css">	
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/panel.css">	
	
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/smartphone.css" media="screen and (max-width: 30em)">
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/tabs.css"  media="screen and (min-width: 30em)" />
	<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/desktop.css"  media="screen and (min-width: 48em)" />-->
	
	<!--<style>
		body {
			width:90%;
			height: 90%;
			text-align: centre;
			margin-left:auto;
			margin-right:auto;
		}
		#page-wrap {width 800px; margin: 0 auto;}-->
		
	<style>
		#header1 {
			margin: auto;
			width:40%;
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
		<!--
		.terrtitle {
			padding:15px;
			color:#000000;
			text-shadow:1px 1px 1px #568F23;
			background:-webkit-gradient(
				linear,
				left bottom,
				left top,
				color-stop(0.02, rgb(102,102,255)),
				color-stop(0.51, rgb(51,51,255)),
				color-stop(0.87, rgb(0,0,255))
			);
			background: -moz-linear-gradient(
				center bottom,
				rgb(102,102,255) 2%,
				rgb(51,51,255) 51%,
				rgb(0,0,255) 87%
			);
			-webkit-border-top-left-radius:5px;
			-webkit-border-top-right-radius:5px;
			-moz-border-radius:5px 5px 0px 0px;
			border-top-left-radius:5px;
			border-top-right-radius:5px;
			text-align: center;
		}-->
    </style>
</head>
<body>
<div>
<?php #Script 2.2 - handleform.php
//header("content-type: text/xml");
require 'loginTM.php';

function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    }
function before ($this, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $this));
    };
function msecs2time($ss) {
	$m = floor(($ss%3600)/60);
	if ($m<10){$m = sprintf("%02d",$m);}
	$h = floor(($ss%86400)/3600);
	if ($h<10){$h = sprintf("%02d",$h);}
	return "$h:$m";
}

$date = date('m-d-Y');
$date2 = date('D M d, Y');
$url = "https://ncr.quickbase.com/db/bkcamt8y4?";
$dbid = "bkcamt8y4";
$token = "ffypqddh5fqadb24u3pbhweem9";
$xmlgrab=simplexml_load_file("https://ncr.quickbase.com/db/bkcamt8y4?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'6'.EX.'$cecode'}") OR Die("Error: Unable to Connect");
//echo $xmlgrab;
$errcode = $xmlgrab->errcode;
$errtext = $xmlgrab->errtext;
$errdetail = $xmlgrab->errdetail;

if ($xmlgrab->errcode != 0){
	echo "QUERY ERROR <p>";
	echo "ERROR CODE: " . $errcode . "<br>";
	echo $errtext . "<br>";
	echo $errdetail . "<br>";
	die('Please contact Administrator');
} else {
	
	echo "<table align=\"center\" class=\"table1\">
			<thead>
			<tr>
			<th scope=\"col\">CE Code</th>
			<th scope=\"col\">Name</th>
			<th scope=\"col\">Phone #</th>
			<th scope=\"col\">Phone Platform</th>
			<th scope=\"col\">Phone Model</th>
			<th scope=\"col\">Simm #</th>
			<th scope=\"col\">Manager</th>
			</tr>
			</thead>
			<tbody>
		";
	foreach ($xmlgrab->record as $record) {
		//$record = $xmlgrab->record;
		$cecode = strtoupper($record->quicklook_id___d1_csr_code);
		$quicklook=strtoupper($record->quicklook_id___quicklook);
		$csrname=$record->quicklook_id___csr_name;
		$csrname=substr($record->csr_name, 10, strlen($record->csr_name));
		$csrname=after(' ', $csrname)." ".before(' ', $csrname);
		$email=$record->quicklook."@NCR.COM";
		echo "<div id=\"header1\"><h1><center>CE Assets For $cecode</center></h1><p><h1><center>$csrname</center></h1></div>";
  
			echo "<table align=\"center\" class=\"table1\">
				
				<tbody>
			";	
			echo" <tr>
			<th scope=\"row\">CSR Code: </th><td>$record->csr_code</td>
			<th scope=\"row\">CSR Name: </th><td>$csrname</td>
			<th scope=\"row\">CSR Email: </th><td>$record->quicklook_id___cell_phone__</td>
			<th scope=\"row\">CSR Phone: </th><td>$record->quicklook_id___cell_phone_____phone_make</td>
			<th scope=\"row\">CSR Ship To Address: </th><td>$record->quicklook_id___cell_phone_____simm__</td>
			<th scope=\"row\">CSR Classification: </th><td>quicklook_id___manager_name</td>
			</tr>";
	}
	echo "</tr>
			</tbody>
			</table>
			</div>
			</div><br>";		
			
$mondaynow=date('d-m-Y', strtotime("last monday"));
$monday1=date('M d', strtotime("last monday"));
$monday2=date('M d', strtotime("next monday"));
$monday3=date('M d', strtotime($monday2."+1 week"));
$monday4=date('M d', strtotime($monday2."+2 week"));
$cecode=$record->csr_code;
$xmlgrab2=simplexml_load_file("https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'10'.EX.'$cecode'}AND{'9'.OAF.'$mondaynow'}") OR Die("Error: Unable to Connect");

$errcode = $xmlgrab2->errcode;
$errtext = $xmlgrab2->errtext;
$errdetail = $xmlgrab2->errdetail;
//$count=$xmlgrab2->record->count();
$loopcnt=0;
if ($xmlgrab2->errcode != 0){
	echo "QUERY ERROR <p>";
	echo "ERROR CODE: " . $errcode . "<br>";
	echo $errtext . "<br>";
	echo $errdetail . "<br>";
	die('Please contact Administrator');
} else {	
	//echo "<div id=\"header1\" class=\"centerg\"><h1><center>3 Week Schedule For $cecode</center></h2><br><center>Updated $date2 @ $timenow </center></h1></div>";
	
	  echo "<table align=\"center\" class=\"table1\">
			<thead>
			<tr><th colspan=\"8\"><h2>3 Week Schedule</h2></th></tr>
			<tr style=\"border:3px solid yellowgreen;\">
			<th>Week Start</th>
			<th>Monday</th>
			<th>Tuesday</th>
			<th>Wednesday</th>
			<th>Thursday</th>
			<th>Friday</th>
			<th>Saturday</th>
			<th>Sunday</th>
			</tr>
			<tr>
			</thead>
			<tbody>
		";
		
	  foreach ($xmlgrab2->record as $record2) {		  
			$qbdate=(float)$record2->date/1000;
			$year=date('Y', $qbdate);
			$shiftstart= msecs2time($record2->shift_start/1000);
			$shiftend= msecs2time($record2->shift_end/1000);	
			$territory=substr($record2->territory,0,6);
			$shiftmeld="$shiftstart-$shiftend";
			if ($shiftmeld=="00:00-00:00"){$shiftmeld="OFF";}
			$notes=$record2->notes;
			$notestrue=$record2->notes;
			$notes=substr($record2->notes, 0, 50);
			$notes=strtoupper($notes);
			$notestrue=strtoupper($notes);
			$notes=str_replace("/", "", $notes);
			$notes=str_replace("(", "", $notes);
			$notes=str_replace(")", "", $notes);
			$notes=str_replace(",", "", $notes);
			$notes=str_replace("*N*", " ", $notes);
			$csrname=substr($record2->csr_name, 10, strlen($record2->csr_name));
			$csrname=after(' ', $csrname)." ".before(' ', $csrname);
			//$csrcode=$record->csr;
			if (substr($territory,0,7)==substr($territorypast,0,7)){$tf="True";}else{$tf="False";}
			if ($shiftstart=="08:00"||$shiftstart=="07:00"||$shiftstart=="09:00"||$shiftstart=="10:00"||$shiftstart=="08:30"){
				$colour="rcorners1"; $center="centerg";
				}elseif ($shiftmeld=="OFF"){
					$center="centerr";
				}else{$colour="rcorners2"; $center="centerb";}
			if (substr($notes, 0,3)=="OFF"||$shiftmeld=="OFF"){$shiftmeld="OFF"; $colour="rcornersred";}
			if (strpos($notestrue, 'VACATION')!== false){$shiftmeld="VACATION";}
			if ($shiftmeld!=="OFF"&&strpos($notestrue, 'STANDBY')!== false){$shiftmeld=$shiftmeld."+STBY";}
			if ($shiftmeld=="OFF"&&strpos($notestrue, 'STANDBY')!== false){$shiftmeld="STANDBY";}
			if ($record2->branch=="RTSS"){$shiftmeld=$record2->shift;}
				$loopcnt++;
				if ($loopcnt==1){
					echo "
					<tr>
					<th>$monday1</td>
					<td>$shiftmeld</td>
					";
				} elseif ($loopcnt==7||$loopcnt==14||$loopcnt==22){
					if($loopcnt==7){
					echo"<td>$shiftmeld</td>";
					echo"</tr><tr><th>$monday2</th>";
					}
					if($loopcnt==14){
						echo"<td>$shiftmeld</td>";
						echo"</tr><tr><th>$monday3</th>";
					}
					if($loopcnt==22){
						echo"</tr><tr><th>$monday4</th>
						<td>$shiftmeld</td>";
					}
					} else {
						echo"<td>$shiftmeld</td>";
					}
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