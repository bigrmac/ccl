<!DOCTYPE HTML>

<html>
<head>

  <title>Schedule</title>
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

require 'login.php';
require 'schedfunc.php';
$branch = $_REQUEST['branch'];
$pulldate=$_REQUEST['date'];
/*function msecs2time($ss) {
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
    };*/
//Variable Decleration
//https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=8_bki7i48zr_bypss7_s9a_a_dwmabrcctjvphgbggt852dqa5y82bf3czdx2ezq7qby2zsp5byuvnb7&apptoken=ffypqddh5fqadb24u3pbhweem9&query={'14'.EX.'CA161'}AND{'9'.EX.'$date'}
$date = date('m-d-Y', strtotime($pulldate));
$date2 = date('D M d, Y', strtotime($pulldate));
$url = "https://ncr.quickbase.com/db/bkim6843g?";
$dbid = "bfyxz8357";
$token = "ffypqddh5fqadb24u3pbhweem9";
//header ("Location: https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'14'.EX.'CA161'}AND{'9'.EX.'$date'}");
$xmlgrab=simplexml_load_string(file_get_contents("https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'14'.EX.'$branch'}AND{'9'.EX.'$date'}&slist=20.58")) OR Die("Error: Unable to Connect, Failed to load QB XML String. <br> Please contact Administrator.");
//echo $xmlgrab;
$errcode = $xmlgrab->errcode;
$errtext = $xmlgrab->errtext;
$errdetail = $xmlgrab->errdetail;
$territorypast="";
//echo $ticket;
//echo "//".$token;
if ($xmlgrab->errcode != 0){
	echo "QUERY ERROR <p>";
	echo "ERROR CODE: " . $errcode . "<br>";
	echo $errtext . "<br>";
	echo $errdetail . "<br>";
	die('Please contact Administrator');
} else {
	$branch2 = strtoupper($branch);
	echo "<div id=\"header1\"><h1><center>CE Schedule For $branch2</center></h1><p><h1><center>$date2</center></h1></div>";

  if ($branch=="RTSS"){
	  echo "<table align=\"center\" class=\"table1\">
			<thead>
			<tr>
			<th scope=\"col\">CE Code</th>
			<th scope=\"col\">Name</th>
			<th scope=\"col\">Shift</th>
			<th scope=\"col\">Notes</th>
			<th scope=\"col\">Phone #</th>
			</tr>
			</thead>
			<tbody>
		";
	foreach ($xmlgrab->record as $recordElement) {

		$csrname=substr($recordElement->csr_name, 10, strlen($recordElement->csr_name));
		$csrname=after(' ', $csrname)." ".before(' ', $csrname);
		$csrcode=$recordElement->csr;
		if (!empty($recordElement->shift)) {
			//$shiftstart= msecs2time($recordElement->shift_start/1000);
			//$shiftend= msecs2time($recordElement->shift_end/1000);
			$territory=$recordElement->territory;
			$notes=substr($recordElement->notes, 0, 50);
			$colour="rcorners1";
			$center="centerg";
			echo" <tr>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrcode</href></td>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrname</href></td>
			<td><div id=\"$colour\">";
			echo $recordElement->shift;
			echo "</div></td>
			<td class=\"shrink\"><div id=\"$colour\" class=\"$center\">$notes</div></td>
			<td class=\"shrink\">$recordElement->phone__</td></tr>";
		}
	}
  } else {
	  if ($branch=="None"){
			echo "<h1><center>No Branch Entered!!</h1></center>";
		} else {
			echo "<table align=\"center\" class=\"table1\">
				<thead>
				<tr>
				<th scope=\"col\">CE Code</th>
				<th scope=\"col\">Name</th>
				<th scope=\"col\">Shift Start</th>
				<th scope=\"col\">Shift End</th>
				<th scope=\"col\">Notes</th>
				<th scope=\"col\">Phone #</th>
				<th scope=\"col\">Daily Audit Complete</th>
				</tr>
				</thead>
				<tbody>
			";
			foreach ($xmlgrab->record as $recordElement) {
				$csrname=substr($recordElement->csr_name, 10, strlen($recordElement->csr_name));
				$csrname=nameswap($csrname);
				$csrcode=$recordElement->csr;
				if ($recordElement->daily_key_audit_complete==1) {$audit="Yes";}else{$audit="No";};
				if (!empty($recordElement->shift_start)) {
					$shiftstart= msecs2time($recordElement->shift_start/1000);
					$shiftend= msecs2time($recordElement->shift_end/1000);
					$territory=substr($recordElement->territory2,0,6);
					$notes=substr($recordElement->notes, 0, 50);
					if ($shiftstart=="08:00"||$shiftstart=="07:00"||$shiftstart=="09:00"||$shiftstart=="10:00"||$shiftstart=="08:30"){
						$colour="rcorners1"; $center="centerg";
						}else{
							$colour="rcorners2"; $center="centerb";
						}
					if (strpos($territorypast,$territory)!==false){
						echo" <tr>
						<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrcode</href></td>
						<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrname</href></td>
						<td>";
						echo $shiftstart;
						echo "</td><td>";
						echo $shiftend;
						echo "</td>";
            if (strpos($csrname, "Duty") !== false){
              if (strpos($notes, "_")){
            		$expchar="_";
            		$parts = explode($expchar, $notes);
            		$notes = array_shift($parts);
                $cell = implode($expchar, $parts);
            	} else {
            		$parts = preg_split('/[\s]+/', $notes);
            		if (count($parts)==3){
            			$cell = array_pop($parts);
            			$notes = implode(" ", $parts);
            		}else{
            		    $notes = array_shift($parts);
                    $cell = implode(" ", $parts);
             		}
            	}
              echo"
						      <td class=\"shrink\">$notes</td>
						      <td class=\"shrink\">$cell
						      <td class=\"shrink\">$audit
						      </tr>";
            } else {
              echo"<td class=\"shrink\">$notes</td>
						      <td class=\"shrink\">$recordElement->csr___cell_phone__
						      <td class=\"shrink\">$audit
						      </tr>";
            }
					} else {
						echo" <tr><th colspan=\"3\">$recordElement->territory2</div></th></tr>
            <tr>
						<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrcode</href></td>
						<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrname</href></td>
						<td>";
						echo $shiftstart;
						echo "</td><td>";
						echo $shiftend;
						echo "</td>";
            if (strpos($csrname, "Duty") !== false){
              if (strpos($notes, "_")){
            		$expchar="_";
            		$parts = explode($expchar, $notes);
            		$notes = array_shift($parts);
                $cell = implode($expchar, $parts);
            	} else {
            		$parts = preg_split('/[\s]+/', $notes);
            		if (count($parts)==3){
                  $cell = array_pop($parts);
            			$notes = implode(" ", $parts);
            		}else{
            		    $notes = array_shift($parts);
                    $cell = implode(" ", $parts);
             		}
            	}
              echo"
						      <td class=\"shrink\">$notes</td>
						      <td class=\"shrink\">$cell
						      <td class=\"shrink\">$audit
						      </tr>";
            } else {
              echo"<td class=\"shrink\">$notes</td>
						      <td class=\"shrink\">$recordElement->csr___cell_phone__
						      <td class=\"shrink\">$audit
						      </tr>";
            }
				}
				$territorypast=$territory;
			}
		}
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
