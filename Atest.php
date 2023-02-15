<?php
// get the two dates as inputs
$date1 = "2010-05-04";
$date2 = "2016-04-26";

// validate that the input is in the correct format (YYYY-MM-DD)
if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date1) ||
    !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date2)) {
  exit("Invalid date format");
}

// calculate the difference in days
$diff = strtotime($date2) - strtotime($date1);
$days = floor($diff / (60 * 60 * 24));

// create an image with the result using the GD library
$im = imagecreate(200, 100);
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 0);
imagestring($im, 5, 50, 50, $days . " days", $textcolor);

// download the image as JPG
header("Content-Type: image/jpeg");
imagejpeg($im);

// destroy the image
imagedestroy($im);

?>
