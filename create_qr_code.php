<?php
require_once 'phpqrcode/qrlib.php';

// get the input string
$input_string = $_POST["input_string"];

// create a QR code using the input string
$temp_dir = 'temp/';
$file_name = 'qrcode.png';

// create the temp directory if it doesn't exist
if (!is_dir($temp_dir)) {
    mkdir($temp_dir, 0777, true);
}

QRcode::png($input_string, $temp_dir . $file_name);

// return the QR code image as an image tag
echo '<img src="' . $temp_dir . $file_name . '"/>';
?>
