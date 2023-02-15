<?php
require_once 'phpqrcode/qrlib.php';

// get the input dates
$date1 = $_POST["date1"];
$date2 = $_POST["date2"];

// validate the input dates
if (!strtotime($date1) || !strtotime($date2)) {
    die('Invalid date format. Please enter the dates in Y-m-d format."');
}

// calculate the number of days between the two dates
$days = (strtotime($date2) - strtotime($date1)) / 86400;

// create a QR code using the result
$temp_dir = 'temp/';
$file_name = 'result.png';

// create the temp directory if it doesn't exist
if (!is_dir($temp_dir)) {
    mkdir($temp_dir, 0777, true);
}

QRcode::png($days, $temp_dir . $file_name);

// return the QR code image as an image tag
echo '<img src="' . $temp_dir . $file_name . '"/>';
?>
