
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/struct.dtd"> 
<html> 

<head> 

<link href="css/MainStyleSheet.css" rel="stylesheet" type="text/css" />

  <title>Sean Goodrich</title>   
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
	<link rel="shortcut icon" type="image/x-icon" href="IMAGES/favicon.ico"/>
     
    <script src="js/jquery-1.11.1.min.js"></script> 
    <script src="js/jquery.easing.1.3.js"></script> 
    <script src="js/jquery.animate-colors-min.js"></script> 
    
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="http://github.com/weepy/jquery.path/raw/master/jquery.path.js"></script>
    
     
<style type='text/css'>
body
	{
	font-family:"Arial", Arial, Helvetica, sans-serif;
	margin-top: 10vh;
	margin-bottom:0px;
	background-color: #d3d3d3;
	margin-left:0px;
	margin-right:0px;
	}
	
#path.changeColor1
{
-webkit-animation:color1 0.5s; /* Chrome, Safari, Opera */
animation:color1 0.5s;
stroke:#869346;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes color1
{
from {stroke:#861346;}
to {stroke:#869346;}
}

/* Standard syntax */
@keyframes color1
{
from {stroke:#861346;}
to {stroke:#869346;}
}


#path.changeColor2
{
-webkit-animation:color2 0.5s; /* Chrome, Safari, Opera */
animation:color2 0.5s;
stroke:#861346;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes color2
{
from {stroke:#869346;}
to {stroke:#861346;}
}

/* Standard syntax */
@keyframes color2
{
from {stroke:#869346;}
to {stroke:#861346;}
}
			
#spinning 
	{
	position: absolute;
	z-index:6;
	top: 26.6%;
	width:40%;
	left:30.6%; 
	
	-webkit-animation: spin 2s infinite linear;
	-moz-animation: spin 2s infinite linear;
	-o-animation: spin 2s infinite linear;
	-ms-animation: spin 2s infinite linear;
	}
	@-webkit-keyframes spin {
	0% { -webkit-transform: rotate(0deg);}
	100% { -webkit-transform: rotate(360deg);}
	}
	@-moz-keyframes spin {
	0% { -moz-transform: rotate(0deg);}
	100% { -moz-transform: rotate(360deg);}
	}
	@-o-keyframes spin {
	0% { -o-transform: rotate(0deg);}
	100% { -o-transform: rotate(360deg);}
	}
	@-ms-keyframes spin {
	0% { -ms-transform: rotate(0deg);}
	100% { -ms-transform: rotate(360deg);}
}
	

#menu {
	  margin-left:auto;
      margin-right:auto;
      position:relative;
	  width:65vh;
	  height:65vh;
      -webkit-perspective: 600px;
         -moz-perspective: 600px;
           -o-perspective: 600px;
              perspective: 600px;
}
	
#card {
	  z-index:2;
      width: 100%;
      height: 100%;
      position: absolute;
      -webkit-transition: -webkit-transform 1s;
         -moz-transition: -moz-transform 1s;
           -o-transition: -o-transform 1s;
              transition: transform 1s;
      -webkit-transform-style: preserve-3d;
         -moz-transform-style: preserve-3d;
           -o-transform-style: preserve-3d;
              transform-style: preserve-3d;
}

#card.flipped {
      -webkit-transform: rotateY( 180deg );
         -moz-transform: rotateY( 180deg );
           -o-transform: rotateY( 180deg );
              transform: rotateY( 180deg );
}

#card figure {
      display: block;
      height: 100%;
      width: 100%;
      position: absolute;
      margin:0px;
      -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
			  
	 -webkit-perspective: 600px;
         -moz-perspective: 600px;
           -o-perspective: 600px;
              perspective: 600px;
    -webkit-perspective-origin: center center; /* Chrome, Safari, Opera */
		perspective-origin: center center;
}

#card .front {
     -webkit-transform: rotateY( 180deg );
         -moz-transform: rotateY( 180deg );
           -o-transform: rotateY( 180deg );
              transform: rotateY( 180deg );
}

#card .back {
      -webkit-transform: rotateY( 0deg );
         -moz-transform: rotateY( 0deg );
           -o-transform: rotateY( 0deg );
              transform: rotateY( 0deg );
}

.slideshow_page{
	z-index:1;
	position:absolute;
	display:none;
	margin-left:50%;
	height:100%;
	width:50%;     
     -webkit-transform-style: preserve-3d;
         -moz-transform-style: preserve-3d;
           -o-transform-style: preserve-3d;
              transform-style: preserve-3d; 
	transform-origin:center left;
		-ms-transform-origin:center left; /* IE 9 */
			-webkit-transform-origin:center left; /* Chrome, Safari, Opera */
}

.slideshow_half_circle_front
	{
	z-index:1;
	-webkit-transform: rotateY( 0deg );
         -moz-transform: rotateY( 0deg );
           -o-transform: rotateY( 0deg );
              transform: rotateY( 0deg );
	position: absolute;
	height:100%;
	width:100%;
	border-radius: 100% / 50%;
	border-top-left-radius: 0;
	border-bottom-left-radius: 0;
	overflow:hidden;
	}

.slideshow_half_circle_back
	{
	z-index:2;
	-webkit-transform: rotateY( 180deg );
         -moz-transform: rotateY( 180deg );
           -o-transform: rotateY( 180deg );
              transform: rotateY( 180deg );
	position: absolute;
	height:100%;
	width:100%;
	border-radius: 100% / 50%;
	border-top-right-radius: 0;
	border-bottom-right-radius: 0;
	overflow:hidden;
	
	-webkit-backface-visibility: hidden;
    	-moz-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden; 
			  
	opacity: 0.90;
	background-color:#d3d3d3;
	}
	
.slideshow_image{
	z-index:1;
	position: absolute;
	height:100%;
	display: block;
}

.slideshow_text{
	z-index:1;
	font-size: 2.3vh;
	position: absolute;
	height:60%;
	width:72%;
	color: black;
	display: block;	
	right: 3%;
	text-align: center;
	top: 20%;
}

.slideshow_shadow{
	position: absolute;
	height:100%;
	width:100%;
	z-index:2;
	background-color:black;
	opacity:0.0;	
}

.arrow-box{ 
	width:12%;
	height:12%;
	position:absolute;
	top: 44%;
	background-color:black;
	border-radius:20%;
	opacity:0.3;
	cursor:pointer
}

.arrow-box:hover{
	opacity:0.6;
}


.next
	{
	left: 83%;
	transform:rotate(270deg);
	-ms-transform:rotate(270deg);
	-webkit-transform:rotate(270deg);
	}

.prev{ 
	left: 5%;
	transform:rotate(90deg);
	-ms-transform:rotate(90deg);
	-webkit-transform:rotate(90deg);
}

.art{
	position:absolute;
	z-index:1;
	display:none;
}

.construction_links{
	color:black;
	text-decoration: underline;	
}

.jobsButton:hover {
    text-decoration: underline;
	cursor:pointer;
}
</style>
   
<script type="text/javascript"> 

$( document ).ready(function(){
	if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) 
		{
		 alert("For best results, please use chrome or firefox. Thanks");
		}
});

//resize text
$(document).ready(function(){
causeRepaintsOn = $("h1, h2, h3, p, span");	
	$(window).resize(function() {
  		causeRepaintsOn.css("z-index", 1);
	});
});

	var wordpressLinks = [];
	var currentPost = 0;
	
	<?php
		// Include the wp-load'er
        define( 'WP_USE_THEMES', false );
        require( $_SERVER['DOCUMENT_ROOT'] . '/Blog/wp-load.php' );
        require( $_SERVER['DOCUMENT_ROOT'] . '/Blog/wp-blog-header.php');
                        
		$postlist = get_posts( 'orderby=date&order=DESC');
		$posts = array();
		foreach ( $postlist as $post ) {
		$posts[] += $post->ID;
		?>
		wordpressLinks.push("<?php echo the_permalink(); ?>");
		<?php
		}
	?>
	
//eyelids
$(document).ready(function(){
		var x=1;
		do
		  {
			var random = Math.random();
			$('#eyelids').delay(5000*random).slideDown(100).delay(100).slideUp(100 );
			x++;
		  }
		while (x<643);
});

//moving eyeballs
$(window).ready(function() {
	$(function(){
	var canvasObjs = [], lineStyle = 'white', eyeStyle = 'white', irisStyle='#081e71', speed = 0.2;
	
	function drawEye(canvasObj) {
	    if(Math.abs(canvasObj.lcx - canvasObj.ncx) < 1 && Math.abs(canvasObj.lcy - canvasObj.ncy) < 1) return;
	    var tcx = canvasObj.ncx * speed + canvasObj.lcx * (1 - speed),
	        tcy = canvasObj.ncy * speed + canvasObj.lcy * (1 - speed),
	        ctx = canvasObj.context;
	    // draw large circle, fill to clear
	    ctx.fillStyle = eyeStyle;
	    ctx.strokeStyle = lineStyle;
	    ctx.beginPath();
	    ctx.arc(canvasObj.w/2, canvasObj.h/2, canvasObj.rBig, 0, Math.PI * 2, false);
	    ctx.fill();
	    ctx.stroke();
	    // draw iris
	    ctx.fillStyle = irisStyle;
	    ctx.beginPath();
	    ctx.arc(tcx, tcy, canvasObj.rLittle, 0, Math.PI * 2, false);
	    ctx.fill();
	    canvasObj.lcx = tcx;
	    canvasObj.lcy = tcy;
	}
	
	$('#canvasEye').each(function() {
	    var canvasDom = this, canvasObj = {};
		var eyeSIZE = 66;
	    canvasObj.w = eyeSIZE;
	    canvasObj.h = eyeSIZE;
		var menu = document.getElementById("menu");
	    canvasObj.abs_cx = canvasObj.w/2 + canvasDom.offsetLeft + menu.offsetLeft;
	    canvasObj.abs_cy = canvasObj.h/2 + canvasDom.offsetTop + menu.offsetTop;  
	    canvasObj.rBig = Math.min(canvasObj.w, canvasObj.h) * 0.51;
	    canvasObj.rLittle = Math.min(canvasObj.w, canvasObj.h) * 0.3;
	    canvasObj.lcx = canvasObj.ncx = canvasObj.w/2; 
	    canvasObj.lcy = canvasObj.h/2;
	    canvasObj.ncy = canvasObj.h/2 + (canvasObj.rBig - canvasObj.rLittle);
	    canvasObj.context = canvasDom.getContext('2d');  
	    canvasObjs.push(canvasObj);
	
		$(window).resize(function() {
			var menu = document.getElementById("menu");
			canvasObj.abs_cx = canvasObj.w/2 + canvasDom.offsetLeft + menu.offsetLeft;
			canvasObj.abs_cy = canvasObj.h/2 + canvasDom.offsetTop + menu.offsetTop;  
		});
		
	    setInterval(function() {drawEye(canvasObj);}, 20);
		
		});
	
document.onmousemove = function(ev) {
	    var x = ev.pageX; var y = ev.pageY;

	    $.each(canvasObjs, function(index, canvasObj) {
	        var angle = Math.atan2(y - canvasObj.abs_cy, x - canvasObj.abs_cx);
	        canvasObj.ncx = canvasObj.w/2 + (canvasObj.rBig - canvasObj.rLittle) * Math.cos(angle);
	        canvasObj.ncy = canvasObj.h/2 + (canvasObj.rBig - canvasObj.rLittle) * Math.sin(angle);
	    });
	};
	});
});
	
$(window).ready(function() {
	var width = $(window).width();
	var height = $(window).height();
	var margin = (width - (0.7 * height))/2;
})
	

$(document).ready(function(){
	$(".handle").click(function(){
		$("#card").toggleClass("flipped");
	});
});

var old_distance = 0;
var current_page = 0;
var current_location = 0;
var current_name = "HOME_page";
				
function rotate(new_distance) {    
	var travel_time = 1*(new_distance - old_distance) * 23;	
	var distancePerLoop = travel_time / (1*Math.abs(travel_time));
	for (i = 0; i< Math.abs(travel_time); i++)
		{
			setTimeout(function(){
				current_location = current_location + distancePerLoop;
				$("#arc").css({ transform: 'rotate(' + current_location + 'deg)'});	
			}, i*5);
		}
	
	old_distance = new_distance;
	
	if (new_distance != current_page)
		{
		document.getElementById('path').classList.add('changeColor1'); 
		document.getElementById('path').classList.remove('changeColor2'); 
		}
}

function rotate_back() {    
	var travel_time_back = 1*(current_page - old_distance) * 23;
	var distancePerLoop = travel_time_back / (1 * Math.abs(travel_time_back));
	for (i = 0; i< Math.abs(travel_time_back); i++)
		{
			setTimeout(function(){
				current_location = current_location + distancePerLoop;
				$("#arc").css({ transform: 'rotate(' + current_location + 'deg)'});	
			}, i*5);
		}
		
	old_distance = current_page;
	
	document.getElementById('path').classList.add('changeColor2'); 
	document.getElementById('path').classList.remove('changeColor1'); 
}
	
function change_page(page_location, page_name){
	if (current_page != page_location)
		{
		current_page = page_location;
		document.getElementById('path').classList.add('changeColor2'); 
		document.getElementById('path').classList.remove('changeColor1'); 
		
		$("#" + current_name).fadeOut( 400 );
		$("#page_header_text").fadeOut( 400, function() {   
				document.getElementById('page_header_text').textContent =page_name;
				$("#page_header_text").fadeIn( 400 );
				$("#" + page_name + "_page").fadeIn( 400 );
			});
		current_name = page_name + "_page";
		}
}


var photos = ["Sean at big house.jpg", "Self Portrait with a Big Mouth.jpg", "daft punk.jpg"];
var text = ["Welcome, Sean Goodrich is an undergrad studying Computer Science at University of Michigan's school of engineering.", "Page 2", "Page 3"];

var next_photo = 0;
var current_photo = photos.length-1;
var previous_photo = photos.length-2 ;
 
$(document).ready(function(){
	for (var i = 0; i<photos.length; i++)
		{	
		var page = document.createElement('div');
		document.getElementById('HOME_page').appendChild(page);
		page.className="slideshow_page";
		page.id = "slideshow" + i;
		
		var circle_front = document.createElement('div');
		page.appendChild(circle_front);
		circle_front.className="slideshow_half_circle_front";
		
		var circle_back = document.createElement('div');
		page.appendChild(circle_back);
		circle_back.className="slideshow_half_circle_back";
		
		var image = document.createElement('img');
		image.className="slideshow_image";
		circle_front.appendChild(image);
		image.src= "IMAGES/" + photos[i];
			
		var info = document.createElement('div');
		info.className="slideshow_text";
		circle_back.appendChild(info);
		if (i == text.length-1)
			$(info).html(text[0]);
		else
			$(info).html(text[i+1]);
		
		var shadow_front = document.createElement('div');
		circle_front.appendChild(shadow_front);
		shadow_front.className="slideshow_shadow";
		shadow_front.id = "shadow_front" + i;
		
		var shadow_back = document.createElement('div');
		circle_back.appendChild(shadow_back);
		shadow_back.className="slideshow_shadow";
		shadow_back.id = "shadow_back" + i;

		if (i == 0)
			page.style.display="block";
		else if (i == photos.length-1)
			{
			page.style.display="block";
			$(page).css({ transform: 'rotateY(180deg)'});	
			}
		}
		
	setInterval(function(){
		previous_photo = current_photo;
		current_photo = next_photo;
		if (next_photo < photos.length-1)
			next_photo++;
		else
			next_photo = 0;
		
		$("#slideshow" + current_photo).css("z-index","10");
			
		document.getElementById("slideshow" + next_photo).style.display="block";
		$("#slideshow" + next_photo).css({ transform: 'rotateY(0deg)'});	
		
		var iterations = 0;
		for (var i = 0; i< 100; i++)
			{
				setTimeout(function(){
					iterations++;
					$("#slideshow" + current_photo).css({ transform: 'rotateY(' + -1*iterations * 1.8 + 'deg)'});

					if (iterations<=50)
						{
						$("#shadow_front" + next_photo).css('opacity', (75-iterations*1.5)/100);	
						$("#shadow_front" + current_photo).css('opacity', (iterations*1.5)/100);	
						}
					else
						{
						$("#shadow_back" + previous_photo).css('opacity', (iterations*1.5-75)/100);	
						$("#shadow_back" + current_photo).css('opacity', (150 - iterations*1.5)/100);	
						}
				}, i*10);
			}	
		setTimeout(function(){
			$("#shadow_front" + current_photo).css('opacity', 0);	
		}, 500);
	
		setTimeout(function(){
			document.getElementById("slideshow" + previous_photo).style.display="none";
			$("#shadow_back" + previous_photo).css('opacity', 0);	
			$("#slideshow" + current_photo).css("z-index","1");
			$("#slideshow" + current_photo).css({ transform: 'rotateY(' + 180 + 'deg)'});

		}, 1000);
		
	}, 6000);
});

var art = ["Coalman Poster.png", "Mfossils.png", "raising eyebrows.png", "rainbow sphere.png", "rooster.png", "washington_cropped.jpg"];
var art_index = 0;

$( document ).ready(function(){	
	for (var i = 0; i < art.length; i++) { 
		var image = document.createElement('img');
		image.src= "IMAGES/" + art[i];
		document.getElementById('PORTFOLIO_display').appendChild(image);
		image.className="art";
		if (art_index == i)
			{
			image.style.display="block";
			$(image).height('70%');
			image.style.top = "15%";
			image.style.left = "-4.563%";
			}
	}
});
	
function Next_Image(direction){
	var fade_image = art_index;
	if (direction == "next")
		{
		if (art_index == art.length-1)
			art_index = 0;
		else
			++art_index;
		}
	else
		{
		if (art_index == 0)
			art_index = art.length-1;
		else
			--art_index;
		}
	
	$(".art").each(function(){
    	if ( "IMAGES/" + art[fade_image] == $(this).attr("src"))
			{	
			$(this).fadeOut(500, function(){
				
				$(".art").each(function(){
					if ("IMAGES/" + art[art_index] == $(this).attr("src"))
						{
						$(this).fadeIn(500);
						if ($(this).width() > $(this).height())
							{
							$(this).height('70%');
							var height = $(this).height();
							var width = $(this).width();
							this.style.left = -1*((((width / (height*10/7)) * 100) - 100)/2)  + "%";			
							this.style.top = "15%";
							}
						else
							{
							$(this).width('70%');
							var height = $(this).height();
							var width = $(this).width();
							this.style.top = -1*((((height / (width*10/7)) * 100) - 100)/2)  + "%";			
							this.style.left = "15%";
							}
						}
				});
			});
		}
	});
}

$( document ).ready(function(){	
	var resumeButtons = ["contact", "education", "job", "computer", "more", "download"];
	for (var i = 0; i < resumeButtons.length; i++) 
		{ 
		hoverURL(resumeButtons[i], "IMAGES/resume_" + resumeButtons[i] + "_pink.png", "IMAGES/resume_" + resumeButtons[i] + "_black.png" )
		}
});
 
var currentPage = "contact";
function hoverURL(ID, URL1, URL2)   
	{
		$( "#resume_" + ID )
			.mouseover(function() {
				$(this).attr("src", URL1);
			})
			.mouseout(function() {
				$(this).attr("src", URL2);
			});
			
		$( "#resume_" + ID )
			.click(function() {
				$("#" + currentPage + "_page").fadeOut("fast", function(){
					$("#" + ID + "_page").fadeIn("fast");
					$("#" + ID + "_page").css("opacity", "0.1");
					});

				$("#resume_menu").fadeOut("slow", function(){
					$("#resume_button").fadeIn("slow");	
					$("#" + ID + "_page").fadeTo( "slow" , 1.0);
					});
				
				currentPage = ID;				
			});
	}
	
$ ( document ).ready(function(){
	$("#resume_button").mouseover(function() {
		$("#resume_button").fadeOut("slow", function(){
			$("#resume_menu").fadeIn("slow");
			});
		$("#" + currentPage + "_page").fadeTo( "slow" , 0.1);		
	});
	
	$("#resume_menu").mouseleave(function(){
		$(this).fadeOut("slow", function(){
			$("#resume_button").fadeIn("slow");	
			$("#" + currentPage + "_page").fadeTo( "slow" , 1.0);
			});
	});
	
	var currentJob = "job1";
	var currentButton = "jobButton1";
	var newJob;
	$(".jobsButton").click(function(){
		if (this.id != currentButton)
			{			
			$(this).css("font-weight","Bold");
			$("#" + currentButton).css("font-weight","normal");
			
			if (this.id == "jobButton1")
				newJob = "job1";
			else if (this.id == "jobButton2")
				newJob = "job2";
			else if (this.id == "jobButton3")
				newJob = "job3";
			else
				newJob = "job4";
			
			$("#" + currentJob).fadeOut("medium", function(){
				$("#" + newJob).fadeIn("medium");
				});
			currentButton = this.id;
			currentJob = newJob;
			}
		});
});


function nextPost(direction){
	
	if (direction == "next")
		{
					
		$("#single-post-container").fadeOut(function(){
			$("#single-post-container").empty();
			
            $("#single-post-container").load(wordpressLinks[currentPost]);
			alert(wordpressLinks[currentPost]);
			$("#single-post-container").fadeIn();
			
			currentPost++;
		
			
			
			
			});
		
		
		}
	else
		{
		$("#single-post-container").fadeOut();
		}
}


$(document).ready(function(){
 
        $.ajaxSetup({cache:false});
        $(".post-link").click(function(){
            var post_link = $(this).attr("href");
 
            $("#single-post-container").load(post_link);
			alert(post_link);
        return false;
        });
 
    });
	
</script>	
</head> 
<body> 

<div id="menu">
	
    <div class="flipped" id="card">
    	
        <figure class="front">
        
            <img id="coat_of_arms" style="position: absolute; width:100%; z-index:3;" src="IMAGES/coat_of_arms.png">
            
            <svg style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:1;"  
				viewBox="0 0 1000 1000">
					<circle cx="500" cy="500" r="417" stroke="#0d278c" stroke-width="120" fill="transparent" />
			  		Sorry, your browser does not support inline SVG.  
			</svg>   
			
           	<svg style="position:absolute; left:0px; top:0px; width:200%; height:200%; z-index:3;"  
				viewBox="0 0 2000 2000">
				  <defs>
					<filter id="f1" x="-1" y="-1" width="300%" height="300%">
					  <feOffset result="offOut" in="SourceAlpha" dx="5" dy="5" />
					  <feGaussianBlur result="blurOut" in="offOut" stdDeviation="5" />
					  <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
					</filter>
				  </defs>
	
			  		<circle cx="500" cy="500" r="478" stroke="#081e71" stroke-width="12" fill="transparent" filter="url(#f1)" />
					<circle cx="500" cy="500" r="358" stroke="#081e71" stroke-width="9" fill="transparent" filter="url(#f1)"/>

			  		Sorry, your browser does not support inline SVG.  
			</svg>      
            
            <svg style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:10;"
                 viewBox="0 0 1000 1000">
                    <defs>
                    <style type="text/css">
                     .continue {
                        font: 110px Helvetica, sans-serif;
                        text-anchor: middle;
						fill: white;
                     }
                     .continue:hover { fill: cornflowerblue; }
                    </style>
                    <path id="continue" d="M300 108 a 448 448 0 1 0 400 0"/>
                  </defs>
                
                  <text>
                    <a class="handle" style="cursor:pointer">
                       <textPath class="continue" xlink:href="#continue" startOffset="50%">continue to website</textPath>
                    </a>
                  </text> 
			<svg>
				
			<svg style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:2;"
                 viewBox="0 0 1000 1000">  
				  <defs>
                    <style type="text/css">
                     .title {
                        font: 136px Helvetica, sans-serif;
                        text-anchor: middle;
						fill: white;
						font-weight:bold;
                     }
                    </style>
                    <path id="title" d="M 132 499 a 300 300 0 0 1 736 0"/>
                  </defs>
                
                  <text>
                    <a>
                       <textPath class="title" xlink:href="#title" startOffset="50%">Sean Goodrich</textPath>
                    </a>
                  </text> 				  
            </svg>          
        
            <img id="eyebrow" style="position:absolute; z-index:8; width:15%; top:30%; left:54%;" src="IMAGES/sean's eye.png"/>
            <div id="eyelids" style="position:absolute; display:none; opacity:1; z-index:7; width:10%; height:5%; top:35%; left:57%; background-color:#0d278c"></div>
            <canvas id='canvasEye' style="position:absolute; top:33.5%; left:57.5%; z-index:6; width:26vh; height:13vh;"></canvas>
            
            <img id="poll" style="position:absolute; height:28%; top:32%; left:38%; z-index:5;" src="IMAGES/windmill turbine.png" alt="turbine"/>
            <img id="spinning" src="IMAGES/windmill spinning.png" alt="" />

		</figure>
       
	        
		<figure class="back">
            
			<svg style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:1;"  
				viewBox="0 0 1000 1000">
					<circle cx="500" cy="500" r="417" stroke="#0d278c" stroke-width="120" fill="transparent" />
			  		Sorry, your browser does not support inline SVG.  
			</svg>   
			
            <svg style="position:absolute; left:0px; top:0px; width:200%; height:200%; z-index:3;"  
				viewBox="0 0 2000 2000">
				  <defs>
					<filter id="f1" x="-1" y="-1" width="300%" height="300%">
					  <feOffset result="offOut" in="SourceAlpha" dx="5" dy="5" />
					  <feGaussianBlur result="blurOut" in="offOut" stdDeviation="5" />
					  <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
					</filter>
				  </defs>
	
			  		<circle cx="500" cy="500" r="478" stroke="#081e71" stroke-width="12" fill="transparent" filter="url(#f1)" />
					<circle cx="500" cy="500" r="358" stroke="#081e71" stroke-width="9" fill="transparent" filter="url(#f1)"/>

			  		Sorry, your browser does not support inline SVG.  
			</svg>            
			
            <svg id="arc" viewBox = "0 0 1000 1000" style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:2;">
						<path id="path" d = "M 420,910 A 388,388 0 0,0 580,910" stroke = "#861346" stroke-width = "111" fill = "none"/>
			</svg>
                                        
            <svg style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:4;"
                 viewBox="0 0 1000 1000">
					 <defs>
						<style type="text/css">
						 .page_header_class {
							font: 120px Helvetica, sans-serif;
							text-anchor: middle;
							fill: white;
							font-weight:bold;
						 }
						</style>
						<path id="page_header_path" d="M 132 499 a 300 300 0 0 1 736 0"/>
					  </defs>
					
					  <text>
						<a>
						   <textPath id = "page_header_text" class="page_header_class" xlink:href="#page_header_path" startOffset="50%">HOME</textPath>
						</a>
					  </text> 
				
				    <defs>
                    <style type="text/css">
                     .links {
                        font: 40px Helvetica, sans-serif;
                        text-anchor: middle;
                     }
                     a {fill: white; }
                     a:hover {}
                    </style>
                    <path id="p1" d="M 72 510 a 100 100 0 0 0 856 0"/>
                  </defs>
                
                  <text>
				  <!--Comment: I didn't include photos page or links page-->

					 <a>
					 	<textPath class = "links" xlink:href="#p1" startOffset="11%">About</textPath>
					 </a>	
					 
					 <a>
					 	<textPath class = "links" xlink:href="#p1" startOffset="24%">Blog</textPath>
					 </a>					  			  
					 
					 <a>
					 	<textPath class = "links" xlink:href="#p1" startOffset="37%">Connect</textPath>
					 </a>	
				 
					 <a>
					 	<textPath class = "links" xlink:href="#p1" startOffset="50%">Home</textPath>
					 </a>					  				  
					 
					 <a>
					 	<textPath class = "links" xlink:href="#p1" startOffset="63%">Portfolio</textPath>
					 </a>	
					
					 <a>
					 	<textPath class = "links" xlink:href="#p1" startOffset="76%">Résumé</textPath>
					 </a>	
					 	
					 			 
					 <a>
					 	<textPath class = "links" xlink:href="#p1" startOffset="89%">Return</textPath>
					 </a>
                 </text> 
                </svg>    
                
                
                <svg id="buttons" viewBox = "0 0 1000 1000" style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:6;" stroke="transparent">
						<path d = "M 90, 572 A 416, 416 0 0,0 150.24,725.72" onmouseover="rotate(3)" onmouseout="rotate_back()" onclick="change_page(3, 'ABOUT')" stroke-width = "111" style="cursor:pointer;" fill = "none"/>
						<path d = "M 150.24,725.72 A 416, 416 0 0,0 265.49, 843.93" onmouseover="rotate(2)" onmouseout="rotate_back()" onclick="change_page(2, 'BLOG')" stroke-width = "111" style="cursor:pointer;" fill = "none"/>
						<path d = "M 265.49, 843.93 A 416, 416 0 0,0 417.64, 908.05" onmouseover="rotate(1)" onmouseout="rotate_back()" onclick="change_page(1, 'CONNECT')" stroke-width = "111" style="cursor:pointer;" fill = "none"/>
						<path d = "M 417.64, 908.05 A 416, 416 0 0,0 582.74, 907.97" onmouseover="rotate(0)" onmouseout="rotate_back()" onclick="change_page(0, 'HOME')" stroke-width = "111" style="cursor:pointer;" fill = "none"/>
						<path d = "M 582.74, 907.97 A 416, 416 0 0,0 734.82, 843.72" onmouseover="rotate(-1)" onmouseout="rotate_back()" onclick="change_page(-1, 'PORTFOLIO')" stroke-width = "111" style="cursor:pointer;" fill = "none"/>
						<path d = "M 734.82, 843.72 A 416, 416 0 0,0 849.97, 725.4" onmouseover="rotate(-2)" onmouseout="rotate_back()" onclick="change_page(-2, 'RESUME')" stroke-width = "111" style="cursor:pointer;" fill = "none"/>
						<path d = "M 849.97, 725.4 A 416, 416 0 0,0 910.07, 571.73" onmouseover="rotate(-3)" onmouseout="rotate_back()" stroke-width = "111" style="cursor:pointer;" fill = "none" class="handle"/>
				</svg>
                                
					<div style="position:absolute; width:100%; height:10%; top:105%; text-align:left; z-index:7; color:black; font-size:2vh;">
                          <div style="font-weight: bold;">Website is being developed. Look below for additional resources</div>
						  </br>
                         
						  <div style="font-weight: bold;">Experience</div>
						  <ul style="display:inline-block;">
                          	<li><a class="construction_links" target="_blank" href="/goodrich_sean_resume.pdf">Resume</a></li>
						  	<li><a class="construction_links" target="_blank" href="">Curriculum Vitae (CV)</a></li>
						  </ul>
						
						  <div style="font-weight: bold;">On the Web</div>
						  <ul style="display:inline-block;">
						  	<li><a class="construction_links" target="_blank" href="/coalman/raisingEYEBROWS.html">Mary Sue Coalman (Summer 2013)</a>: Interactive artwork that challenges the assumption University of Michigan is sustainable</li>
							<li><a class="construction_links" target="_blank" href="http://www.citypaperbox.com/">Los Angeles City Paper Box (Summer 2013)</a>: Website for small business to promote its products and services</li>
							<li><a class="construction_links" target="_blank" href="/MegaMan2/MegaMan2.html">Mega Man 2(Fall 2014)</a>: Recreation of a classic level and a new level from the NES game. Focus is on aqcuiring original feel and mechanics of the game, not on graphics and sprites </li>
							<li><a class="construction_links" target="_blank" href="">Woven Job Board (Summer 2014)</a>: Content Management System (CMS) to streamline each of the company's advertising campaigns. Implemented using wordpress.</li>
							<li><a class="construction_links" target="_blank" href="/3d.html">3d Website Prototype (Fall 2014)</a>: Recreation of personal website in 3d to explore three.JS and webGl</li>
							<li><a class="construction_links" target="_blank" href="/Burst/Burst.html">Burst (Fall 2014)</a>: Computer game design group project. 1st person puzzle game with an original beam spawning game mechanic. Spawned beams serve various purposes such as protection against turrets and lasers, and for creation of bridges and stairs.</li>
						  </ul>

                          <div style="font-weight: bold;">Mobile (view on smart phone)</div>
						  <ul style="display:inline-block;">
							<li><a class="construction_links" target="_blank" href="/brickbreaker.html">Brickbreaker Prototype (Winter 2014)</a>: Basic javascript game that explores use of acceleramter, physics, spin, and other game mechanics</li>
							<li><a class="construction_links" target="_blank" href="/theGame.html">Follow Command Prototype (Winter 2014)</a>: Experimental game that requires user to rotate phone as directed. Inspiration from childrens games such as Bop It and Time Warp </li>
						  	<li><a class="construction_links" target="_blank" href="/groom.html">Groom Prototype (Fall 2013)</a>: User Interface for sustainable design project to optimize lawn qulaity while minimizing environmental impact involved in lawncare.</li>
						  </ul>	

                	 </div>
                     

               	<div id="CONNECT_page" style="display:block; width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%; display:none; overflow:hidden;"> 
                
                	<div style="width:38%; height:52%; top: 24%; left:9%; position: absolute; z-index:10;">
                    
                             <?php
                         	function spamcheck($field) {
                            	// Sanitize e-mail address
                                $field=filter_var($field, FILTER_SANITIZE_EMAIL);
                                // Validate e-mail address
                                if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
                                  return TRUE;
                                } else {
                                  return FALSE;
                                }
                              }
                     	 ?>
                                
                          <?php
                                // display form if user has not clicked submit
                                if (!isset($_POST["submit"])) {
                                  ?>
                                  <form method="post" style="font-size: 1.45vh;" action="<?php echo $_SERVER["PHP_SELF"];?>">
                          			 <div> 
                           			 	Name*
                            			<input type="text" style= "top:-2px; position:relative; padding: 0px; float:right; width:10vh; font-size: 1.45vh; color:grey; margin:0px;" placeholder="Name"  
                            			name="NAME" required> 
                       				 </div> 
                       				 </br>
                        
                        			<div> 
                            			Company
                           				 <input type="text" style= "top:-2px; position:relative; padding: 0px; float:right; width:10vh; font-size: 1.45vh; color:grey; margin:0px;" placeholder="Company"  
                           				name="COMPANY"> 
                       				 </div>
                        			</br>
                        
                        			<div> 
                          				 Email *
                          				 <input type="email" style= "top:-2px; position:relative; padding: 0px; float:right; width:10vh; font-size: 1.45vh; color:grey; margin:0px;" placeholder="E-mail address"  
                          				 name="EMAIL" required> 
                        			</div> 
                       				 </br>
                        
                        			<div> 
                           				 Phone
                            			<div style="float:right; position:relative; font-size: 1.45vh;"> 
                                (<span class="phonearea"><input pattern="[0-9]*" name="PHONE1" maxlength="3" type="text" style = "font-size: 1.45vh; width:2.5vh; color:grey; padding: 0px;"></span>) 
                                		<span class="phonedetail1"><input pattern="[0-9]*" name="PHONE2" maxlength="3" type="text" style = "font-size: 1.45vh; width:2.5vh; color:grey; padding: 0px;"></span> - 
                                		<span class="phonedetail2"><input pattern="[0-9]*" name="PHONE3" maxlength="4"  type="text" style = "font-size: 1.45vh; width:3.2vh; color:grey; padding: 0px;"></span></div> 
                        			</div> 
                        			</br>
                        
                       				 <div> 
                            			<textarea type="text" style= "position:relative; width: 100%; rows:2; padding:0px; color:grey; font-size: 1.45vh; float:right; resize: none;" placeholder="Comments" 
                            			name="COMMENTS"></textarea>
                        			</div> 
                        			</br>
                        
                       				 <div style="float:right;">* indicates required</div>
                        			</br>
                        
                       				<div style="float:right;"><input type="submit" name ="submit" style = "font-size: 1.45vh;" value="Message"></div> 
                                  </form>
                                  <?php 
                                } else {  // the user has submitted the form
                                  // Check if the "from" input field is filled out
                                  if (isset($_POST["EMAIL"])) {
                                    // Check if "from" email address is valid
                                    $mailcheck = spamcheck($_POST["EMAIL"]);
                                    if ($mailcheck==FALSE) {
                                      echo "Invalid input";
                                    } else {
                                      $from = $_POST["NAME"]; // sender
									  $company = $_POST["COMPANY"];
									  $email = $_POST ["EMAIL"];
                                      $phone1 = $_POST["PHONE1"];
									  $phone2 = $_POST["PHONE2"];
									  $phone3 = $_POST["PHONE3"];
                                      $comments = $_POST["COMMENTS"];
									  
									  $subject = "{$company} -- {$from}";
									  $message = "Name: {$from} \nCompany: {$company} \nEmail: {$email} \nPhone: {$phone1} {$phone2} {$phone3}\n{$comments}";
                                      // message lines should not exceed 70 characters (PHP rule), so wrap it
                                      $message = wordwrap($message, 70);
                                      // send mail
	                                  mail('smgood@umich.edu', $subject, $message,'From: <smgoodrich.com>');
                                      ?>
									  <div style="text-align:right; font-size: 3vh; color: grey;">Thank you for contacting me!</div>
									  <?php 
                                    }
                                  }
                                }
                                ?>  
                    </div>
                	
                    
                    <div style="width:50%; height:100%; left:50%; border-left:2px dashed #b2b2b2; position: absolute;">              
                              
                    </div>
               		 
                </div>                     

               	<div id="HOME_page" style="display:block; width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%;"> 
                </div>
              	
                <div id="PORTFOLIO_page" style="display:none;">
                	<div id = "PORTFOLIO_display" style="width:71.2%; height:71.2%; position:absolute; top:14.4%; overflow:hidden; left:14.4%; border-radius:50%; z-index: 1;">
                        <div style="z-index:2; width:100%; height:100%; position:absolute; 
                            background: -webkit-radial-gradient(rgba(211, 211, 211,0) 50%, #d3d3d3 70%); /* Safari 5.1-6.0 */
                            background: -o-radial-gradient(rgba(211, 211, 211,0) 50%, #d3d3d3 70%); /* For Opera 11.6-12.0 */
                            background: -moz-radial-gradient(rgba(211, 211, 211,0) 50%, #d3d3d3 70%); /* For Firefox 3.6-15 */
                            background: radial-gradient(rgba(211, 211, 211,0) 50%, #d3d3d3 70%); /* Standard syntax */ ">
                        </div>
                    </div>
                    
                	<div style="width:71.2%; height:71.2%; position:absolute; top:14.4%; overflow:hidden; left:14.4%; border-radius:50%; z-index: 10;">
                       	<div onclick = "Next_Image('next')" class="next arrow-box">
                        	<div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">NEXT</div>
               	            <img style="left: 20%; position: relative; margin-top:10%; height:40%; width: 60%;" src="IMAGES/arrow.png">
                       </div>      
                       
                        <div onclick = "Next_Image('prev')" class="prev arrow-box">
                        	<div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">PREV</div>
               	            <img style="left: 20%; position: relative; margin-top:10%; height:40%; width: 60%;" src="IMAGES/arrow.png">
                       </div>      
                                 
                    </div>
                </div>
                
                
               <div id="RESUME_page" style="display:none; width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%; overflow:hidden;"> 
           			
                    <div id = "resume_button" class="prev arrow-box" style="z-index: 10;">
                        <div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">MENU</div>
               	        <img style="left: 20%; position: relative; margin-top:10%; height:40%; width: 60%;" src="IMAGES/arrow.png">
                    </div> 
                    
                    <div id = "resume_menu" style="z-index:100; width:50%; float:left; height:100%; display:none; position:absolute; border-radius: 100% / 50%; border-top-right-radius: 0; border-bottom-right-radius: 0;">
                    	
                        <div style="position:absolute; top:4%; left:76%; height:18%; width:auto; text-align:center; font-size:1vh;"> 
                        	<img id="resume_contact" style="z-index:10; float:left; height:77.78%; position:relative; cursor: pointer; " src="IMAGES/resume_contact_black.png"/>
                            </br>
							<div style="position:relative; top:5%;">OBJECTIVE</div>
                        </div>
                        
                        <div style="position:absolute; top:18%; left:34%; height:14%; width:auto; text-align:center; font-size:1vh;"> 
                      		<img id="resume_education" style="z-index:10; float:left; height:92.86%; position:relative; cursor: pointer;" src="IMAGES/resume_education_black.png"/>
                            </br>
							<div style="position:relative; top:-15%; left:-5%;">EDUCATION</div>
                        </div>
                        
                        <div style="position:absolute; top:33%; left:24%; height:16%; width:auto; text-align:center; font-size:1vh;"> 
                        	<img id="resume_job" style="z-index:10; float:left; height:75%; position:relative; cursor: pointer;" src="IMAGES/resume_job_black.png"/>
                            </br>
							<div style="position:relative; top:5%;">EXPERIENCE</div>
                        </div>
				          
                        <div style="position:absolute; top:50%; left:20%; height:16%; width:auto; text-align:center; font-size:1vh;"> 
                        	<img id="resume_computer" style="z-index:10; float:left; height:75%; position:relative; cursor: pointer;" src="IMAGES/resume_computer_black.png"/>
                            </br>
							<div style="position:relative; top:5%;">SKILLS</div>
                        </div> 
                        
                        <div style="position:absolute; top:67%; left:38%; height:16%; width:auto; text-align:center; font-size:1vh;"> 
                        	<img id="resume_more" style="z-index:10; float:left; height:75%; position:relative; cursor: pointer;" src="IMAGES/resume_more_black.png"/>
                            </br>
							<div style="position:relative; top:5%;">OTHER</div>
                        </div>             
                        
                         <div style="position:absolute; top:78%; left:74%; height:18%; width:auto; text-align:center; font-size:1vh;"> 
                        	<img id="resume_download" style="z-index:10; float:left; height:77.78%; position:relative; left:5%; cursor: pointer;" src="IMAGES/resume_download_black.png"/>
                            </br>
							<div style="position:relative; top:5%;">DOWNLOAD</div>
                        </div> 
					</div>
                    
                    
                    <div id ="contact_page" style="font-size:1.5vh; width:60%; left:20%; position:absolute; top:20%; height:60%;">                        						
                    	<span style="font-size:2vh;"><b>Sean Goodrich</b></span></br>
                        (818) 601-1080</br>
                        smgood@umich.edu</br>
                        _________________________________</br>
                        3915 Longridge Ave / Sherman Oaks, CA 91423</br>
                        721 Church Street  / Ann Arbor, MI 48104</br>
                        </br>
                        
                        <b>OBJECTIVE</b></br>
                        Sean is an undergraduate studying Computer Science at the University of Michigan College of Engineering. He would like to obtain a full-time job in software engineering beginning summer 2015.
                    </div>
                    
                    
                    <div id ="education_page" style="font-size:1.5vh; width:60%; left:20%; position:absolute; top:20%; height:60%; display:none;">
                        <b>EDUCATION</b></br>
                        <b>University of Michigan College of Engineering</b></br>
                        Ann Arbor, MI</br>
                        B.S.E. Computer Science</br>
                        Minor Program in Sustainable Engineering</br>
                        Expected Graduation: April 2015					
                        </br></br>
                        
                        <b>Relevant Coursework:</b></br>
                        <li>Discrete Math</li>
                        <li>Data Structures and Algorithms</li>
                        <li>Computational Methods</li>
                        <li>Foundations of Computer Science</li>
                        <li>Computer Architecture</li>
                        <li>Introduction to Databases</li>
                    </div>                    
                    
                    
                    <div id ="job_page" style="font-size:1.5vh; width:60%; left:20%; position:absolute; top:20%; height:60%; display:none;">
                    	<b>WORK EXPERIENCE</b></br>
                        <div id = "job1" style="position:absolute; top:0px;">
                            </br>
                            <b>Woven Digital</b>, Culver City, CA</br>
                            July 2014 - August 2014</br>
                            Paid Internship</br>
                            <li>Created the primary content management system (CMS) for the digital publishing company.</li>
                            <li>CMS was customized in order to streamline company’s marketing campaigns.</li>
                            <li>CMS includes functionality regulating the content each department can view and edit.</li>
                        </div>
                        </br>
                        
                        <div id = "job2" style="display:none; position:absolute; top:0px;">
                      		</br>
                            <b>Freelance Web Development</b>, Los Angeles, CA</br>
                        	July 2012 - December 2013</br>
                        	Paid Position</br>
                        	<li >Designed websites for various small businesses and student organizations including S&M Development and City Paper Box Company.</li>
                        	<li>Integrated company information into an intuitive, dynamic, and stimulating website.</li>
                        </div>
                        </br>
                        
                        <div id = "job3" style="display:none; position:absolute; top:0px;">
                        	</br>
                            <b>HSA & Associates</b>, La Mirada, CA</br>
                            May 2013 - June 2013</br>
                      		Paid Internship</br>
                            <li >Reviewed shop drawings and structural plans</li>
                            <li >Performed calculations to verify structural plans comply with appropriate codes and policies</li>
                        </div>
                        </br>
                        
                        <div id = "job4" style="display:none; position:absolute; top:0px;">
                        	</br>
                            <b>Moonshado Inc.</b>, Los Angeles, CA</br>
                            May 2012 - August 2012</br>
	                        Paid Internship</br>
                            <li>Recorded traffic and revenue reports and researched potential partners.</li>
                            <li>Assisted with computer languages HTML, CSS and JavaScript.</li>
						</div>
                        
                        <div style="font-size:2vh; position:absolute; bottom:0px; width:100%; text-align:center; z-index:10;">
                            <span class = "jobsButton" id="jobButton1" style="font-weight:bold;">1</span>
                            <span class = "jobsButton" id="jobButton2">2</span>
                            <span class = "jobsButton" id="jobButton3">3</span>
                            <span class = "jobsButton" id="jobButton4">4</span>
                        </div>
                    </div>
                    
                    
                    <div id ="computer_page" style="font-size:1.5vh; width:60%; left:20%; position:absolute; top:20%; height:60%; display:none;">
                     	<b>COMPUTER SKILLS</b></br>
                        <li>Operating systems: Windows, Macintosh, Linux</li>
                        <li>Languages: C++, C#, HTML5, CSS, Javascript, jQuery, PHP, mySQL, Matlab, Fortran</li>
                        <li>Applications: Unity, Microsoft Office, Adobe Photoshop, SimaPro, Risa, AutoCad, Tecplot</li>
                        <li>Other Skills: Wordpress, Website Development, Graphic Design, Social Media, Sustainable Design, Technical Communications</li>
              		</div>
                    
                    
                    <div id ="more_page" style="font-size:1.5vh; width:60%; left:20%; position:absolute; top:20%; height:60%; display:none;">
						<b>MISCELLANEOUS</b>
                        <li>Enjoys rapid prototyping interactive artwork, computer games, and software outside of class</li>
                        <li>Spent two years studying civil engineering</li>
                        <li>Speaks a little spanish</li>     
                        </br>
                                           
                        <b>MORE INFORMATION</b>
                        <li>Personal Website: http://www.smgoodrich.com</li>
                        <li>LinkedIn: http://www.linkedin.com/pub/sean-goodrich/5b/b85/958</li>
                        <li>References available upon request</li>
                    </div>
                    
                    <div id ="download_page" style="font-size:1.5vh; width:60%; left:20%; position:absolute; top:20%; height:60%; display:none;">
						<b>DOWNLOAD</b></br>
                    </div>

          
                </div>
                
                
               <div id="ABOUT_page" style="display:none; width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%; overflow:hidden;"> 
				   <svg id="buttons" viewBox = "0 0 1000 500" style="position:absolute; left:0px; top:0px; width:100%; height:50%; z-index:6;" stroke="black">
                            <path d = "M 363.2, 124.1 A 400, 400 0 0 1 636.8, 124.1" onmouseover="rotate(3)" onmouseout="rotate_back()" onclick="change_page(3, 'ABOUT')" stroke-width = "90" style="cursor:pointer;" fill = "none"/>
                            
                            <path d = "M 137.5,331 A 400, 400 0 0 1 331, 137.5" onmouseover="rotate(2)" onmouseout="rotate_back()" onclick="change_page(2, 'BLOG')" stroke-width = "90" style="cursor:pointer;" fill = "none"/>
                            
                            <path d = "M 669, 137.5 A 416, 416 0 0 1 863.5, 331" onmouseover="rotate(1)" onmouseout="rotate_back()" onclick="change_page(1, 'CONNECT')" stroke-width = "90" style="cursor:pointer;" fill = "none"/>
        
                    </svg>
                </div>
                                
               <div id="BLOG_page" style="display:none; width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%; overflow:hidden; z-index:10;"> 
				   
                   <div onclick = "nextPost('next')" class="next arrow-box">
                        	<div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">NEXT</div>
               	            <img style="left: 20%; position: relative; margin-top:10%; height:40%; width: 60%;" src="IMAGES/arrow.png">
                       </div>      
                       
                        <div onclick = "nextPost('prev')" class="prev arrow-box">
                        	<div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">PREV</div>
               	            <img style="left: 20%; position: relative; margin-top:10%; height:40%; width: 60%;" src="IMAGES/arrow.png">
                       </div>   
                       
                       </br></br>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
    <a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
 
       <?php the_title(); ?> 
 
    </a>
 
    <?php endwhile; endif; ?>
                       
                       
                       
                   
                    <div id="single-post-container" style="width:100%; height:100px; margin-top:30%; text-align:center; background-color:blue;">
                    	
						<?php
						
                          echo get_post($posts[1])->post_title;
						  echo apply_filters('the_content', get_post($posts[1])->post_content);
/*

                        
                                    if ( have_posts() ) :
                                        query_posts ('orderby=date&order=DESC&showposts=2');
                        
                                        // Start the Loop.
                                        while ( have_posts() ) : the_post();
                                            
                                            get_template_part( 'content', get_post_format() );
                        
                                        endwhile;
                                        
                                    else :
                                        // If no content, include the "No posts found" template.
                                        get_template_part( 'content', 'none' );
                        
                                    endif;
*/
                        ?>
                        
                    </div>
                
                </div>
                
                
 		 </figure>	
    </div>

</div>

</body> 
</html> 
