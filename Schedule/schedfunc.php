<?php #Script 2.2 - login.php

function msecs2time(int $ss) {
	$m = floor(($ss%3600)/60);
	if ($m<10){$m = sprintf("%02d",$m);}
	$h = floor(($ss%86400)/3600);
	if ($h<10){$h = sprintf("%02d",$h);}
	return "$h:$m";
}

function nameswap ($name) {

	$parts = explode(" ", $name);
	$firstname = array_pop($parts);
	$lastname = implode(" ", $parts);
	if ($name=="ty Manager"){
		return "Duty Manager";
	} else {
	return "$firstname $lastname";
	}
}

function dmclean ($name) {
	if (strpos($name, "_")){
		$expchar="_";
		$parts = explode($expchar, $name);
		$dimname = array_shift($parts);
	} else {
		$parts = preg_split('/[\s]+/', $name);
		//print_r($parts);
		//echo count($parts);
		if (count($parts)==3){
			$pop = array_pop($parts);
			$dimname = implode(" ", $parts);
		}else{
		$dimname = array_shift($parts);
 		}
		/*$expchar=" ";
		$parts = explode(" ", $name);
		print_r($parts);
		$pop = array_pop($parts);
		$dimname = implode($parts);*/
	}

	return "$dimname";
}

?>
