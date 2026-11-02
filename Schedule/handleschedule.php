<!DOCTYPE html>
<html>
<head>
<?php
	ini_set('display_errors', 'on'); // ini setting for turning on errors
	require '../assets/login.php';
	require '../assets/quickbase.php';
	$token = "ffypqddh5fqadb24u3pbhweem9";
	$row = 1;
	$count = 0;
	$err = 0;
	
	//Start of Conversion code for csv to xml_error_string

$inputFilename = 'raw_csv/CA161.csv';
$outputFilename = 'raw_csv/CA161.xml';


$db = "bfyxz8357";
$quickbase = new Quickbase();
$quickbase->db_id = $db;


// Open csv to read
$inputFile  = fopen($inputFilename, 'r');
//print_r($inputFile);
//$csv = fgetcsv($inputFile);
//print_r(fgetcsv($inputFile, 100, ","));
 $row = 1;
if (($handle = fopen($inputFilename, "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 100, ",")) !== FALSE) {
    $num = count($data);
    echo "<p> $num fields in line $row: <br /></p>\n";
    $row++;
    for ($c=0; $c < $num; $c++) {
       // echo $data[$c] . "<br />\n";
    }
  }
  fclose($handle);
  print_r($data);
}
//$schedadd = $quickbase->import_from_csv($csv, "");

//echo $handle;

?>


