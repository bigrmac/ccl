<!DOCTYPE HTML>

<html>
<head>
  
  <title>CE Info</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<link rel="icon" type="image/png" href="http://www.ncr.com/wp-content/themes/ncr-dotcom-wp-theme_STRIPPED/_assets/favicons/favicon-32x32.png" sizes="32x32">
	<!--<link rel="stylesheet"  href="http://iis.ncrnet.ncr.com/cequicklinks/cemr/assets/css/jquery.mobile-1.4.0.min.css">-->
	<link rel="stylesheet"  href="tablestyle.css" media="screen and (min-width: 30em)">
	<link rel="stylesheet"  href="tablestylemobile.css" media="screen and (max-width: 30em)">

</head>
<body>
<div>
<?php #Script 2.2 - handleform.php

$indicesServer = array('PHP_SELF', 
'argv', 
'argc', 
'GATEWAY_INTERFACE', 
'SERVER_ADDR', 
'SERVER_NAME', 
'SERVER_SOFTWARE', 
'SERVER_PROTOCOL', 
'REQUEST_METHOD', 
'REQUEST_TIME', 
'REQUEST_TIME_FLOAT', 
'QUERY_STRING', 
'DOCUMENT_ROOT', 
'HTTP_ACCEPT', 
'HTTP_ACCEPT_CHARSET', 
'HTTP_ACCEPT_ENCODING', 
'HTTP_ACCEPT_LANGUAGE', 
'HTTP_CONNECTION', 
'HTTP_HOST', 
'HTTP_REFERER', 
'HTTP_USER_AGENT', 
'HTTPS', 
'REMOTE_ADDR', 
'REMOTE_HOST', 
'REMOTE_PORT', 
'REMOTE_USER', 
'REDIRECT_REMOTE_USER', 
'SCRIPT_FILENAME', 
'SERVER_ADMIN', 
'SERVER_PORT', 
'SERVER_SIGNATURE', 
'PATH_TRANSLATED', 
'SCRIPT_NAME', 
'REQUEST_URI', 
'PHP_AUTH_DIGEST', 
'PHP_AUTH_USER', 
'PHP_AUTH_PW', 
'AUTH_TYPE', 
'PATH_INFO', 
'ORIG_PATH_INFO') ; 

echo '<table cellpadding="10">' ; 
foreach ($indicesServer as $arg) { 
    if (isset($_SERVER[$arg])) { 
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ; 
    } 
    else { 
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
    } 
} 
echo '</table>'; 

?>

</div>
</body>
</html>