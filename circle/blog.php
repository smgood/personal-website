<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script src="js/jquery-1.11.1.min.js"></script> 

<script>

$ ( document ).ready(function(){
	var thumbnail = document.getElementById("thumbnail");
	$("#thumbnail").load(function() {
		var ratio = thumbnail.width / thumbnail.height;
		if (ratio > 1)
				{
				thumbnail.style.height = "100%";
				thumbnail.style.left = (ratio - 1) * -50 + "%"
				}
		else
				{
				thumbnail.style.width = "100%";
				thumbnail.style.top = (1/ratio - 1) * -50 + "%"
				}
	});
});

</script>

<style type='text/css'>
.post_title
	{
	position:absolute;
	top:25%;
	background-color:black;
	opacity:0.7;
	width:100%;
	height:7vh;
	z-index:2;
	}
</style>

<?php
include "posts.php";
?>

</head>

<body>

<?php
$currentPost = $_POST['variable'];
?>

<div style="z-index:1; width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%; overflow:hidden;"">
    <div class="post_title">
        <div style="margin-left:9%; top:1.5vh; position:relative; display:inline-block; font-size:4vh; font-weight:bold; color:white;">
            <?php
                $title = get_post($posts[$currentPost])->post_title;
                if (strlen($title) > 20)
                    {
                    $title = substr($title, 0, 17) . "..."; ;
                    }
                echo $title;
            ?>
        </div>
        
        <div style="top:1.5vh; position:relative; display:inline-block; font-size:1.5vh; color:white;">
            <?php
                echo date("M j, Y", strtotime(get_post($posts[$currentPost])->post_date));
             ?>
        </div>
    </div>  
                   
    <img id="thumbnail" style="z-index:1; left:0%; top:0%; position:absolute;" src="
        <?php
        $image_id = get_post_thumbnail_id($posts[$currentPost]);
        $image_url = wp_get_attachment_image_src($image_id,'large', true);
        echo $image_url[0];
        ?>
     " />
</div>

<div id="video" class="video" style="display:none;">
	<?php
   	echo apply_filters('the_content', get_post($posts[$currentPost])->post_content);
	?>
</div>

</body>
</html>