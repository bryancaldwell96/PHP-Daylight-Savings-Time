<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Assignment 9</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>


<?php

// Daylight Savings Time begins at 2:00AM on Sunday, March 8
// Daylight Savings Time ends at 2:00 AM on Sunday, November 1

//$currentTime = date( "m/j/Y G:i:s" );
$currentTime = new DateTime();
$currentMonth = date( "m" );
$currentDay = date( "j" );
$currentYear = date( "Y" );
$currentHour = date( "G" );
$currentMinute = date( "i" );
$currentDayOfTheYear = date( "z" );

$daylightSavingsStart = new DateTime( "03/08/2017 2:00:00" );
$daylightSavingsEnd = new DateTime( "11/01/2017 2:00:00" );

//$daylightSavingsStartTime = DateTime::createFromFormat( "m/j/Y G:i:s", "03/08/2017 2:00:00" );
//$daylightSavingsEndTime = DateTime::createFromFormat( "m/j/Y G:i:s", "11/01/2017 2:00:00" );

$timeTilDaylightSavingsStart = $daylightSavingsStart->diff($currentTime);
$timeTilDaylightSavingsEnd = $daylightSavingsEnd->diff($currentTime);
//$timeTilDaylightSavingsStart = date_diff($currentTime, $daylightSavingsStart);
//$timeTilDaylightSavingsEnd = date_diff($currentTime, $daylightSavingsEnd);

$blnIsDST = "";

if ($currentMonth > 3 && $currentMonth < 11) {

$blnIsDST = "True";

} elseif ($currentMonth == 3 && $currentDay >= 8 && $currentHour >= 2) {

$blnIsDST = "True";

} elseif ($currentMonth == 11 && $currentHour >= 2 || $currentMonth == 11 && $currentDay > 1) {

$blnIsDST = "True";

} else {

$blnIsDST = "False";

}

if ($blnIsDST == "True") {

echo "We are in Daylight Savings Time. Daylight Savings Time ends in " . $timeTilDaylightSavingsEnd->format('%m months, %d days, %h hours and %i minutes.');

} else {

echo "We are not in Daylight Savings Time. Daylight Savings Time starts in " . $timeTilDaylightSavingsStart->format('%m months, %d days, %h hours and %i minutes.');

}

?>


  </body>
</html>
