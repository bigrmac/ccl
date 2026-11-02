<html>
<head>
  
  <title>Schedule</title>
	<link rel="icon" type="image/png" href="http://www.ncr.com/wp-content/themes/ncr-dotcom-wp-theme_STRIPPED/_assets/favicons/favicon-32x32.png" sizes="32x32">
	
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
    </style>
</head>
<body>
<div>
<?php #Script 2.2 - handleform.php
//header("content-type: text/xml");
$xmlauth=simplexml_load_file("https://ncr.quickbase.com/db/main?a=API_Authenticate&username=rm100017@ncr.com&password=Bender77") or die("Error: Unable to Connect");
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
//echo $ticket;
//echo date("W");
}

$branch = $_REQUEST['branch'];
function msecs2time($ss) {
	$m = floor(($ss%3600)/60);
	if ($m<10){$m = sprintf("%02d",$m);}
	$h = floor(($ss%86400)/3600);
	if ($h<10){$h = sprintf("%02d",$h);}
	return "$h:$m";
}
//Variable Decleration
//
$yearnow=date("Y");
$week=(int)date("W")+1;
$date = date('m-d-Y');
$date2 = date(' M d, Y');
$day = date("N");
if ($day==1){
	$datemonday= date('M d');
	$datetuesday= date ('M d', strtotime($datemonday."+1 days"));
	$datewednesday= date ('M d', strtotime($datemonday."+2 days"));
	$datethursday= date ('M d', strtotime($datemonday."+3 days"));
	$datefriday= date ('M d', strtotime($datemonday."+4 days"));
	$datesaturday= date ('M d', strtotime($datemonday."+5 days"));
	$datesunday= date ('M d', strtotime($datemonday."+6 days"));
}else{
	$datemonday = date('M d', strtotime("last monday"));}
$url = "https://ncr.quickbase.com/db/bkim6843g?";
$dbid = "bfyxz8357";
$token = "ffypqddh5fqadb24u3pbhweem9";
//header ("Location: https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'14'.EX.'CA161'}AND{'9'.EX.'$date'}");
$xmlgrab=simplexml_load_file("https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'83'.EX.'0'}AND{'14'.EX.'$branch'}AND{'9'.AF.'01-01-$yearnow'}AND{'164'.EX.'$week'}&slist=20&options=num-1000") OR Die("Error: Unable to Connect");
//echo $xmlgrab;
$errcode = $xmlgrab->errcode;
$errtext = $xmlgrab->errtext;
$errdetail = $xmlgrab->errdetail;
$territorypast="";
$count=$xmlgrab->record->count();
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
	
	echo "<div id=\"header\" class=\"centerg\"><h1><center>CE Schedule For $branch2</center></h2><br><center>$date2</center></h1></div>";
	
	  echo "<table align=\"center\" class=\"table1\">
			<thead>
			<tr style=\"border:3px solid yellowgreen;\">
			<th> </th>
			<th> </th>
			<th>Monday</th>
			<th>Tuesday</th>
			<th>Wednesday</th>
			<th>Thursday</th>
			<th>Friday</th>
			<th>Saturday</th>
			<th>Sunday</th>
			</tr>
			<tr>
			<th>CE Code</th>
			<th>Name</th>
			<th>$datemonday</th>
			<th>$datetuesday</th>
			<th>$datewednesday</th>
			<th>$datethursday</th>
			<th>$datefriday</th>
			<th>$datesaturday</th>
			<th>$datesunday</th>
			</thead>
			<tbody>
		";
		
	  foreach ($xmlgrab->record as $record) {		  
			$qbdate=(float)$record->date/1000;
			$year=date('Y', $qbdate);
			$shiftstart= msecs2time($record->shift_start/1000);
			$shiftend= msecs2time($record->shift_end/1000);	
			$territory=substr($record->territory,0,6);
			$shiftmeld="$shiftstart-$shiftend";
			if ($shiftmeld=="00:00-00:00"){$shiftmeld="OFF";}
			$notes=substr($record->notes, 0, 50);
			$notes=strtoupper($notes);
			if (substr($territory,0,7)==substr($territorypast,0,7)){$tf="True";}else{$tf="False";}
			if ($shiftstart=="08:00"||$shiftstart=="07:00"||$shiftstart=="09:00"||$shiftstart=="10:00"||$shiftstart=="08:30"){
				$colour="rcorners1"; $center="centerg";
				}elseif ($shiftmeld=="OFF"){
					$center="centerr";
				}else{$colour="rcorners2"; $center="centerb";}
			if (substr($notes, 0,3)=="OFF"||$shiftmeld=="OFF"){$shiftmeld="OFF"; $colour="rcornersred";}
			if (substr($record->csr_name,0,20) == "Daytime Duty Manager"||substr($record->csr_name,0,20) == "Evening Duty Manager"||substr($record->csr_name,0,22) == "Overnight Duty Manager"||substr($record->csr_name,0,13)=="Shell_Corunna"){			
					$notes=$record->notes;
					$dmname=substr($notes,0,strlen($notes)-13);
					if (substr($record->csr_name,0,20) == "Evening Duty Manager"){$colour="rcornersdme"; $dmtitle="Evening DM"; $center="centerb";} elseif (substr($record->csr_name,0,20) == "Daytime Duty Manager") {$colour="rcornersdmd"; $dmtitle="Daytime DM"; $center="centerg";} elseif (substr($record->csr_name,0,13)=="Shell_Corunna"){ $dmtitle="Shell Corunna Standby"; $dmname=substr($notes,9,strlen($notes));} else {$colour="rcornersdme"; $dmtitle="Overnight DM"; $center="centerb";}
					$loopcnt++;
					$runcnt++;
					if ($loopcnt==1){
						if ($territory!=$territorypast){
							echo "<tr><th colspan=\"3\">$record->territory</th></tr>"; 
						}
						echo "
						<tr>
						<th>DM</td>
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
						if ($territory!=$territorypast){
							echo "<tr><th colspan=\"3\">$record->territory</div></td></tr>"; 
						}
						echo "
						<tr>
						<th>$record->csr</td>
						<th>$record->csr_name</td>
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
			$territorypast=$territory;
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