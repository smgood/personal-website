<script>alert("sean");</script>

<?php

/*-----GET INFO-----*/ 
if (isset ($_FILES['file_array'])){

// debug the post
	//print "<pre>";
	//	print_r($_FILES);
	//print "</pre>";

// get the file
	$tmpName = $_FILES['file_array']['tmp_name'];
	$name = $_FILES['file_array']['name'];
	$type = $_FILES['file_array']['type'];
	$size = $_FILES['file_array']['size'];
	//$ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
 
 
 //$amount = count($tmpName);
 //echo $amount;
 
 
for($i = 0; $i < count($tmpName); $i++) {

// copy the file over... MAKE SURE THIS DIR EXISTS AND IS 777 or RW by the web process
	move_uploaded_file($tmpName[$i], "test_videos/" . $name[$i]);

/*-----CONVERT FILE-----*/ 

// declare variables 
	$ffmpeg = "/usr/bin/ffmpeg";
	$videoFolder ="test_videos";
	$videoFile = "test_videos/" . $name[$i];
	$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $name[$i]);
	$mpeg = $withoutExt . ".mpeg";
	$tmp = $withoutExt . ".mpeg";
	$mp4 = $withoutExt . ".mp4";

//convert gif to mpeg	
	exec ("$ffmpeg -i $videoFile -vb 5M -y test_videos/$mpeg");


// get the durations
	$xyz = shell_exec("$ffmpeg -i test_videos/$mpeg 2>&1");
	$search='/Duration: ((\d+):(\d+):(\d+).(\d+))/s';
	if(preg_match($search, $xyz, $matches)) {
		$duration = ($matches[2] * 3600) + ($matches[3] * 60) + $matches[4]  + ($matches[5] * .01);
 	}

// how many times do we need to loop?  ffmpeg deprecated the -loop lame
	$loopCount = ceil(15 / $duration);


// workaround for small gifs of 2 or less than 1s frames ffmpeg on linux (macs work) too many command args
// this is hacky so figure out the right settings by trial and error ??? ac
	if($loopCount > 50) {
		exec("$ffmpeg -i concat:'$mpeg|$mpeg|$mpeg|$mpeg' -y test_videos/$tmp 2>&1");
		copy("test_videos/". $tmp, "test_videos/" .$mpeg);
        }
		
// concat the mpg files together
        $catArgs = '';
        for($k=0; $k<$loopCount; $k++) {
            $catArgs = "test_videos/". $mpeg . '|' . $catArgs;
        }
		
        exec("$ffmpeg -i concat:'$catArgs' -vb 1M -vf scale='trunc(oh/a/2)*2:640' -t 15 -y test_videos/$mp4 1> block.txt 2>&1");
		$content = @file_get_contents('block.txt');


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

    //echo "Duration: " . $duration . "<br>";
    //echo "Current Time: " . $time . "<br>";
    //echo "Progress: " . $progress . "%";
	//echo $new_duration;
	
// Delete info from block.txt	
	$handle = fopen ("block.txt", "w+");
	fclose($handle);


/*-----EMAIL-----*/ 

// declare email variables 
	$to       = $_POST["usremail"];
	$from        = "Gif_to_Instagram ";
	$subject     = $mp4;
	$mainMessage = $mp4;
	$fileatt     = "test_videos/". $mp4;
	$fileatttype = "MPEG-4 movie";
	$fileattname = $mp4;
	$headers = "From: $from";

// file
	$file = fopen($fileatt, 'rb');
	
	$data = fread($file, filesize($fileatt));
	fclose($file);

// this attaches the file
	$semi_rand     = md5(time());
	
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
	
	$headers      .= "\nMIME-Version: 1.0\n" .
	"Content-Type: multipart/mixed;\n" .
	" boundary=\"{$mime_boundary}\"";
	
	$message = "This is a multi-part message in MIME format.\n\n" .
	"-{$mime_boundary}\n" .
	"Content-Type: text/plain; charset=\"iso-8859-1\n" .
	"Content-Transfer-Encoding: 7bit\n\n" .
	
	$mainMessage  . "\n\n";
	
	$data = chunk_split(base64_encode($data));
	
	$message .= "--{$mime_boundary}\n" .
	"Content-Type: {$fileatttype};\n" .
	" name=\"{$fileattname}\"\n" .
	"Content-Disposition: attachment;\n" .
	" filename=\"{$fileattname}\"\n" .
	"Content-Transfer-Encoding: base64\n\n" .
	
	$data . "\n\n" .
	"-{$mime_boundary}-\n";

// send the email
	if(mail($to, $subject, $message, $headers)) {
		echo "The email was sent.";
	}
	else 
	{
		echo "There was an error sending the mail.";
	}

/*-----REMOVE FILES-----*/
	
	}
	
	// remove image sequence, mp4, and mpeg
	$fullPath = __DIR__ . "/test_videos/" ;
	//array_map('unlink', glob( "$fullPath*.mp4"));
	//array_map('unlink', glob( "$fullPath*.mpeg"));
	//array_map('unlink', glob( "$fullPath*.gif"));

}

?>