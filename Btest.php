<?php
// include the QR code library
include "phpqrcode\qrlib.php";

// get the string to be converted
$string = "abcdef";

// create the QR code image
QRcode::png($string);
?>