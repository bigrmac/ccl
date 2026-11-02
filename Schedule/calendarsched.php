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
</head>
<body>
<div>
<?php

function build_calendar($branch,$month,$year,$dateArray) {

     // Create array containing abbreviations of days of week.
     $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);

     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);

     // What is the name of the month in question?
     $monthName = $dateComponents['month'];

     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];

     // Create the table tag opener and day headers

     $calendar = "<table class='table1' width=\"800\" height=\"800\" align=\"center\">";
     $calendar .= "<caption><h2>$branch $monthName $year</h2></caption>";
     $calendar .= "<tr>";

     // Create the calendar headers

     foreach($daysOfWeek as $day) {
          $calendar .= "<th class='header'>$day</th>";
     } 

     // Create the rest of the calendar

     // Initiate the day counter, starting with the 1st.

     $currentDay = 1;

     $calendar .= "</tr><tr>";

     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.

     if ($dayOfWeek > 0) { 
          $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>"; 
     }
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {

          // Seventh column (Saturday) reached. Start a new row.

          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";

          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          
          $date = "$year-$month-$currentDayRel";

          $calendar .= "<td class='day' rel='$date' align='left'><a href=\"https://m.ncr.com/norolinks/ccl/schedule/dailyschedule.php?branch=$branch&date=$date\">$currentDay</td>";

          // Increment counters
 
          $currentDay++;
          $dayOfWeek++;

     }
     
     

     // Complete the row of the last week in month, if necessary

     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>"; 

     }
     
     $calendar .= "</tr>";

     $calendar .= "</table>";

     return $calendar;

}

$branch = $_REQUEST['branch'];

$dateComponents = getdate();

     $month = $dateComponents['mon']; 			     
     $year = $dateComponents['year'];

     echo build_calendar($branch,$month,$year,$dateArray);
?> 
</div>
</body>
</html>