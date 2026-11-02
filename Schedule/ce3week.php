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

require 'login.php';
//$branch = $_REQUEST['branch'];
$cecode = $_REQUEST['cecode'];
function msecs2time($ss) {
	$m = floor(($ss%3600)/60);
	if ($m<10){$m = sprintf("%02d",$m);}
	$h = floor(($ss%86400)/3600);
	if ($h<10){$h = sprintf("%02d",$h);}
	return "$h:$m";
}
function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    }
 function before ($this, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $this));
    };
//Variable Decleration
//
$yearnow=date("Y");
$monthnow=date("m");
$daynow=date("d");
$mondaynow=date('d-m-Y', strtotime("last monday"));
$monday1=date('M d', strtotime("last monday"));
$monday2=date('M d', strtotime("next monday"));
$monday3=date('M d', strtotime($monday2."+1 week"));
$timenow=date("G:i");
$week=(int)date("W")+2;
$date = date('m-d-Y');
$date2 = date(' M d, Y');
$day = date("N");

$url = "https://ncr.quickbase.com/db/bkim6843g?";
$dbid = "bfyxz8357";
$token = "ffypqddh5fqadb24u3pbhweem9";
//header ("Location: https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'14'.EX.'CA161'}AND{'9'.EX.'$date'}");
$xmlgrab=simplexml_load_file("https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'10'.EX.'$cecode'}AND{'9'.OAF.'$mondaynow'}") OR Die("Error: Unable to Connect");
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
	
	//echo "<div id=\"header1\" class=\"centerg\"><h1><center>3 Week Schedule For $cecode</center></h2><br><center>Updated $date2 @ $timenow </center></h1></div>";
	
	  echo "<table align=\"center\" class=\"table1\">
			<thead>
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
		
	  foreach ($xmlgrab->record as $record) {		  
			$qbdate=(float)$record->date/1000;
			$year=date('Y', $qbdate);
			$shiftstart= msecs2time($record->shift_start/1000);
			$shiftend= msecs2time($record->shift_end/1000);	
			$territory=substr($record->territory,0,6);
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
			
					$loopcnt++;
					if ($loopcnt==1){
						echo "
						<tr>
						<th>$monday1</td>
						<td>$shiftmeld</td>
						";
					} elseif ($loopcnt==7||$loopcnt==14){
						if($loopcnt==7){
						echo"<td>$shiftmeld</td>";
						echo"</tr><tr><th>$monday2</th>";
						}
						if($loopcnt==14){
						echo"<td>$shiftmeld</td>";
						echo"</tr><tr><th>$monday3</th>";
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