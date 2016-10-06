<?php

$content = @file_get_contents('block.txt');

if($content){
   //get the time in the file that is already encoded
    preg_match_all("/time=(.*?) bitrate/", $content, $matches);

    $rawTime = array_pop($matches);

    //this is needed if there is more than one match
    if (is_array($rawTime)){$rawTime = array_pop($rawTime);}

    //rawTime is in 00:00:00.00 format. This converts it to seconds.
    $ar = array_reverse(explode(":", $rawTime));
    $time = floatval($ar[0]);
    if (!empty($ar[1])) $time += intval($ar[1]) * 60;
    if (!empty($ar[2])) $time += intval($ar[2]) * 60 * 60;

	$new_duration = 15;
	
    //calculate the progress
    $progress = round(($time/$new_duration) * 100);

    //echo "Duration: " . $new_duration . "<br>";
    //echo "Current Time: " . $time . "<br>";
    //echo "Progress: " . $progress . "%";
	echo $progress;
	
	
}

?>

