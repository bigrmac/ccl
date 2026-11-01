<!DOCTYPE HTML>

<html>
<head>

  <title>Schedule</title>
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
		a {
			color: inherit;
			text-decoration: inherit;
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
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117465328-4"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-117465328-4');
	</script>

</head>
<body>
<div>
<?php #Script 2.2 - handleform.php
//ini_set('display_errors', 'on'); // ini setting for turning on errors
//header("content-type: text/xml");
require '../assets/login.php';

$branch = $_REQUEST['branch'];
//$pulldate=$_REQUEST['date'];

function msecs2time(int $ss) {
	$m = floor(($ss%3600)/60);
	if ($m<10){$m = sprintf("%02d",$m);}
	$h = floor(($ss%86400)/3600);
	if ($h<10){$h = sprintf("%02d",$h);}
	return "$h:$m";
}
function nameswap ($name) {
	$parts = explode(" ", $name);

	$lastname = array_shift($parts);
	$firstname = implode(" ", $parts);
	if ($name=="ty Manager"){
		return "Duty Manager";
	} else {
	return "$firstname $lastname";
	}
}
function dmclean ($name) {
	$parts = explode("_", $name);
	$dimname = implode("_", $parts);
	return "$dimname";
}
/* function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    }
 function before ($this, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $this));
    }; */
//Variable Decleration
//https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=8_bki7i48zr_bypss7_s9a_a_dwmabrcctjvphgbggt852dqa5y82bf3czdx2ezq7qby2zsp5byuvnb7&apptoken=ffypqddh5fqadb24u3pbhweem9&query={'14'.EX.'CA161'}AND{'9'.EX.'$date'}
$date = date('m-d-Y');
$date2 = date('D M d, Y');
$url = "https://ncr.quickbase.com/db/bkim6843g?";
$dbid = "bfyxz8357";
$token = "ffypqddh5fqadb24u3pbhweem9";
//header ("Location: https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'14'.EX.'CA161'}AND{'9'.EX.'$date'}");
if ($branch=="CA199"){
		//echo "https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'14'.EX.'$branch'}AND{'9'.EX.'$date'}&slist=20.58";
}
$xmlgrab=simplexml_load_string(file_get_contents("https://ncr.quickbase.com/db/bfyxz8357?a=API_DoQuery&ticket=$ticket&apptoken=$token&query={'14'.EX.'$branch'}AND{'9'.EX.'$date'}&slist=20.58")); /* OR Die("Due to a connection issue with Quickbase, the Schedule is currently not available.<p>
		<img src=\"../assets/images/techdifficulties.jpg\" height=\"242\" width=\"400\">"); */
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

  if ($branch=="CA199"){
	  $count=$xmlgrab->count();
	  //echo "Records: $count";
	  echo "<div id=\"header1\"><h1><center>RTSS Schedule</center></h1><p><h1><center>$date2</center></h1></div>";
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
		$csrname=nameswap($csrname);
		$csrcode=$recordElement->csr;
		//if (!empty($recordElement->shift)) {
			//$shiftstart= msecs2time($recordElement->shift_start/1000);
			//$shiftend= msecs2time($recordElement->shift_end/1000);
			$territory=$recordElement->territory;
			$notes=substr($recordElement->notes, 0, 50);
			$colour="rcorners1";
			$center="centerg";
			echo" <tr>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrcode</href></td>
			<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrname</href></td>
			<td><div id=\"$colour\">".$recordElement->shift."</div></td>
			<td class=\"shrink\"><div id=\"$colour\" class=\"$center\">$notes</div></td>
			<td class=\"shrink\"><div id=\"$colour\" class=\"$center\">$recordElement->csr___cell_phone__</div></td></tr>";
		//}
	}
  } else {
	  if ($branch=="None"){
			echo "<h1><center>No Branch Entered!!</h1></center>";
		} else {
			echo "<div id=\"header1\"><h1><center>CE Schedule For $branch2</center></h1><p><h1><center>$date2</center></h1></div>";
			echo "<table align=\"center\" class=\"table1\">
				<thead>
				<tr>
				<th scope=\"col\">CE Code</th>
				<th scope=\"col\">Name</th>
				<th scope=\"col\">Shift Start</th>
				<th scope=\"col\">Shift End</th>
				<th scope=\"col\">Notes</th>
				<th scope=\"col\">Phone #</th>
				</tr>
				</thead>
				<tbody>
			";
			foreach ($xmlgrab->record as $recordElement) {
				$csrname=substr($recordElement->csr_name, 10, strlen($recordElement->csr_name));
				$csrname=nameswap($csrname);
				$csrcode=substr($recordElement->csr_name, 0, 8);
				if ($csrcode == "Daytime" ||  $csrcode == "Evening") {$csrname="Duty Manager";}

				if ($recordElement->daily_key_audit_complete==1) {$audit="Yes";}else{$audit="No";};
				if (!empty($recordElement->shift_start)) {
					$shiftstart= msecs2time($recordElement->shift_start/1000);
					$shiftend= msecs2time($recordElement->shift_end/1000);
					$territory=substr($recordElement->territory,0,6);
					$notes=substr($recordElement->notes, 0, 50);
					$notes=str_replace("/", "", $notes);
					$notes=str_replace("(", "", $notes);
					$notes=str_replace(")", "", $notes);
					$notes=str_replace(",", "", $notes);
					$notes=str_replace("*N*", " ", $notes);
					if ($shiftstart=="08:00"||$shiftstart=="07:00"||$shiftstart=="09:00"||$shiftstart=="10:00"||$shiftstart=="08:30"){
						$colour="rcorners1"; $center="centerg";
						}else{
							$colour="rcorners2"; $center="centerb";
						}
					if ($territory==$territorypast){
						echo" <tr>
						<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrcode</href></td>
						<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrname</href></td>
						<td>";
						echo $shiftstart;
						echo "</td><td>";
						echo $shiftend;
						echo "</td>
						<td class=\"shrink\">$notes</td>
						<td class=\"shrink\">$recordElement->csr___cell_phone__</td>
						</tr>";
					} else {
						echo" <tr><th scope=\"row\" colspan=\"3\">$recordElement->territory</div></td></tr>
						<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrcode</href></td>
						<th><a href=\"https://m.ncr.com/norolinks/ccl/schedule/CEInfo.php?cecode=$csrcode\">$csrname</href></td>
						<td>";
						echo $shiftstart;
						echo"</td><td>";
						echo $shiftend;
						echo "</td>
						<td class=\"shrink\">$notes</td>
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
  echo "</tr>
			</tbody>
			</table>
			</div>
			</div>";
?>
</div>
</body>
</html>
