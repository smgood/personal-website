
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
  
  <script src="js/prefixfree.min.js"></script>
  <script src="js/three.min.js"></script>

     
<style type='text/css'>

@font-face 
	{
	font-family: 'ProximaNova';
	src: url('Font/ProximaNova-Reg.otf') format('truetype');
	}
		
@font-face
	{
	font-family: 'ProximaNova';
	font-weight: bold;
	src: url('Font/ProximaNova-Sbold.otf') format('truetype');
	}
		
body
	{
	font-family: 'ProximaNova', serif;
	margin-top: 10vh;
	margin-bottom:0px;
	background-color: #BEBEBE;
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
			
#menu {
	  margin-left:auto;
      margin-right:auto;
      position:relative;
	  width:80vh;
	  height:80vh;
	  z-index:2;
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

.slideshow_half_circle_front{
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
	background-color:#BEBEBE;
	}
	
.slideshow_image{
	z-index:1;
	position: absolute;
	height:100%;
	display: block;
}

.slideshow_text{
	z-index:1;
	font-size: 3vh;
	position: absolute;
	height:50%;
	width:72%;
	color: black;
	display: block;	
	right: 6%;
	text-align: center;
	top: 25%;
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
	opacity:0.4;
	cursor:pointer;
}

.arrow-box:hover{
	opacity:0.7;
}

.next{
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

.playButton
	{
	width:16%;
	height:16%;
	position:absolute;
	top: 42%;
	border-radius:50%;
	left:42%;
	opacity:0.4;
	cursor:pointer;
	background-color:black;
	}

.playButton:hover
	{
	opacity:0.7;
}

.portfolioInfo{
    top:90%;
    left:30%;
    z-index:1;
    width:40%;
    height:40%;
	position:absolute;
	background-color:black;
	border-radius:45%;
	opacity:0.4;
	cursor:pointer;
}

#portfolioSwitch{ 
	width:20%;
	position:absolute;
	opacity:0.4;
	cursor:pointer;
	top:5%; 
	left:40%;
}

#portfolioSwitch:hover{
	opacity:0.7;
}

.portfolio{
	position:absolute;
	z-index:1;
	display:block;
	height: 100%;
	width: 100%;
	left: 0%;
	top: 0%;
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

.connect_link {
	display:block;
	position:relative;
	width:30%;
	height:30%;
	margin: 9%;	
}

.connect_box {
	position:relative;
	display:block;
	width:100%;
	height:auto;
	border-radius: 10%;
	box-shadow: 3px 3px 4px #888888;
}

.connect_box:active {
	box-shadow: 0px 0px 0px #888888;
	margin: 38% 9% -8% 11%;
}

.portfolio_link {
	text-decoration:underline;
	font-weight:bold;
	color:#8AE2FF;	
}

.portfolio_link:hover {
	color:#BFFF00;
}

.resume_heading {
	font-size:2vh;
	width:60%;
	left:20%;
	position:absolute;
	top:20%;
	height:60%;
	z-index:10;
}

video {
	margin:0px;
	height:80vh;
	width:100vh;
	position:absolute;
	left:-10vh;
	top:0vh;
	z-index:12;
	background-color: black;
}

iframe {
	margin:0px;
	height:80vh;
	width:100vh;
	position:absolute;
	left:-10vh;
	top:0vh;
	z-index:12;
}

.video_background
	{
	top:0px;
	left:0px;
	position:absolute;
	width:100%;
	height:100%;
	background-color:black;
	opacity:0.7;	
	z-index:1;
	display:none;
	}

.close_video
	{
	color:white;
	opacity:0.7;
	font-size:3.5vh;	
	margin-left:auto;
    margin-right:auto;
    position:relative;
	width:100vh;
	text-align:left;
	top:5vh;
	}

.close_video:hover
	{
	opacity:1.0;
	cursor: pointer;	
	}

.delete_box
	{
	width: 3.5vh;
	height: 3.5vh;
	position:relative;
	float:left;
	margin-right:2vh;
	margin-top:0.3vh;
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


var photos = ["groom team.jpg", "Self Portrait with a Big Mouth.jpg", "Sean at big house.jpg", "petra.jpg"];
var text = ["Welcome, I am a Software Engineer currently living in Los Angeles.", "Take a look at some of my projects! I'm always busy experimenting and hacking.", "I am a University of Michigan alumni. Go Blue!", "I enjoy traveling too. Here I am in Petra, Jordan!"];

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
	
	$( "#flipButton" ).one( "click", function() {
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
});

// variable for image element
var portfolio_video;
var portfolio_source;
var portfolio_art;

// 0 equals website, 1 equals art
var current_image;

var websites = ["DrumCircle.mp4", "SmartArt.mp4", "MarketU.mp4", "Burst.mp4", "3dwebsite.mp4", "Woven.mp4", "CommndGame.mp4", "Brickbreaker.mp4", "Groom.mp4", "Coalman.mp4", "CityPaperBox.mp4"];
var websites_text = [

"<a target=\"_blank\" href=\"/DrumCircle/index.html\" class=\"portfolio_link\">DrumCircle</a> \
(Winter 2015): Current digital audio workstations are not intuitive to new users. DrumCircle creates an improved conceptual model by implementing virtual reality with Oculus Rift and natural hand gestures via the Myo armband.",

"<a target=\"_blank\" href=\"/SmartArt/index.html\" class=\"portfolio_link\">SmartArt</a> \
(Winter 2015): Audio tours are outdated. SmartArt allows curators to easily share information on each work. Art recognition technology is implemented to display the correct information to the user.",

"<a target=\"_blank\" href=\"/marketu/index.html\" class=\"portfolio_link\">MarketU</a> \
(Winter 2015): MarketU is a cross platform app to serve as a marketplace tailored to the needs of Michigan students.",

"<a target=\"_blank\" href=\"/Burst/index.html\" class=\"portfolio_link\">Burst</a> \
(Fall 2014): Burst is a 1st person puzzle game. Use the original beam spawning game mechanic to create bridges, block lasers, destroy enemies, and much more.",

"<a target=\"_blank\" href=\"/3d.html\" class=\"portfolio_link\">3d Website Prototype</a> \
(Summer 2014): Recreation of personal website in 3d to explore three.JS and webGl",

"<span class=\"portfolio_link\">Woven Job Board</span> \
(Summer 2014): Content Management System (CMS) to streamline each of the company's advertising campaigns. Implemented using wordpress. Website is private. Link not available",

"<a target=\"_blank\" href=\"/theGame.html\" class=\"portfolio_link\">Follow Command Prototype</a> \
(Winter 2014): Experimental mobile game that requires user to rotate phone as directed. Inspiration from childrens games such as Bop It and Brain Warp. Play on smart phone.",

"<a target=\"_blank\" href=\"/brickbreaker.html\" class=\"portfolio_link\">Brickbreaker Prototype</a> \
(Winter 2014): Basic javascript game that explores use of acceleramter, physics, spin, and other game mechanics. Play on smart phone.",

"<a target=\"_blank\" href=\"/groom.html\" class=\"portfolio_link\">Groom Prototype</a> \
(Fall 2013): User Interface for sustainable design project to optimize lawn qulaity while minimizing environmental impact involved in lawncare.",

"<a target=\"_blank\" href=\"/coalman/raisingEYEBROWS.html\" class=\"portfolio_link\">Mary Sue Coalman</a> \
(Summer 2013): Interactive artwork that challenges the assumption University of Michigan is sustainable",

"<a target=\"_blank\" href=\"http://www.citypaperbox.com\" class=\"portfolio_link\">Los Angeles City Paper Box</a> \
(Summer 2013): Website for small business to promote its products and services"

]
var websites_index = 0;

var art = ["Coalman Poster.png", "Mfossils.png", "raising eyebrows.png", "rainbow sphere.png", "rooster.png", "washington_cropped.jpg"];
var art_text = [
"President Mary Sue Coalman (Summer 2013)",
"Fossilized (Summer 2013)",
"Raising Eyebrows (Summer 2013)",
"Sphere (Summer 2010)",
"Rooster (Summer 2011)",
"Drowning in the Delaware (Summer 2010)"
];
var art_index = 0;

window.onload = function() {
		portfolio_video = document.createElement('video');
		portfolio_source = document.createElement('source'); 
		portfolio_source.type = "video/mp4";
		portfolio_source.src = "mp4s/" + websites[websites_index];
		portfolio_video.appendChild(portfolio_source);

		portfolio_video.autoplay=true;
		portfolio_video.loop=true;
		portfolio_video.muted=true;
		
		document.getElementById('PORTFOLIO_display').appendChild(portfolio_video);
		portfolio_video.className="portfolio";
		current_image = portfolio_video;	
		
		
		portfolio_video.addEventListener('loadeddata', function() {
			$("#loading").fadeOut("fast", function(){
				$(portfolio_video).fadeIn("medium");
			});
		}, false);
		
		portfolio_art = document.createElement('img');
		portfolio_art.className="portfolio";
		document.getElementById('PORTFOLIO_display').appendChild(portfolio_art);

};
	
function Next_Image(direction){	
		$(current_image).fadeOut("medium", function(){
			$("#loading").fadeIn("fast");

			if (current_image == portfolio_video)
				{
				if (direction == "switch")
					{
					current_image = portfolio_art;	
					$("#portfolioSwitch").fadeOut("fast", function(){
						$("#portfolioSwitch").attr("src", "IMAGES/codePC.png");
						});
					}
				else if (direction == "next")
					{
					if (websites_index == websites.length-1)
						websites_index = 0;
					else
						++websites_index;
					}
				else
					{
					if (websites_index == 0)
						websites_index = websites.length-1;
					else
						--websites_index;
					}
				}
			else
				{
				if (direction == "switch")
					{
					current_image = portfolio_video;	
					$("#portfolioSwitch").fadeOut("medium", function(){
						$("#portfolioSwitch").attr("src", "IMAGES/artPalette.png");
						});
					}
				else if (direction == "next")
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
				}
		
				if (current_image == portfolio_video)
					{
					portfolio_source.src = "mp4s/" + websites[websites_index];
					portfolio_video.load();
					portfolio_video.addEventListener('loadeddata', function() {
						$("#loading").fadeOut("fast", function(){
							$(portfolio_video).fadeIn("medium");
							$("#portfolioSwitch").fadeIn("medium");
						});
					}, false);
					}
				else
					{
					$(portfolio_art).load(function() {	
						$(portfolio_art).height('auto');
						$(portfolio_art).width('auto');
						if ($(portfolio_art).width() > $(portfolio_art).height())
								{
								$(portfolio_art).height('70%');
								var height = $(portfolio_art).height();
								var width = $(portfolio_art).width();
								portfolio_art.style.left = -1*((((width / (height*10/7)) * 100) - 100)/2)  + "%";			
								portfolio_art.style.top = "15%";
								}
						else
								{
								$(portfolio_art).width('70%');
								var height = $(portfolio_art).height();
								var width = $(portfolio_art).width();
								portfolio_art.style.top = -1*((((height / (width*10/7)) * 100) - 100)/2)  + "%";			
								portfolio_art.style.left = "15%";
								}			
						$("#loading").fadeOut("fast", function(){
							$(portfolio_art).fadeIn("medium");
							$("#portfolioSwitch").fadeIn("medium");
						});
					}).attr("src", "IMAGES/" + art[art_index]);
					}
		});
	
	if ($("#portfolio_info").is(':visible'))
		{
		$("#portfolio_info").slideUp("medium", function() {
				$("#info_button").fadeIn("medium");
		});
		}
}

function INFO(){
		$("#portfolio_info").slideDown("fast");
		$("#info_button").fadeOut("fast");

		if (current_image == portfolio_video)	
			$("#portfolio_text").html(websites_text[websites_index]);
		else
			$("#portfolio_text").html(art_text[art_index]);
}

$( document ).ready(function(){	
	$("#portfolio_info").mouseleave(function(){
		$(this).slideUp("fast");
		$("#info_button").fadeIn("fast");
	});
});

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


<?php
include "posts.php";
?>

var currentPost = 0;
var blog_video;
var blog_iframe;

function nextPost(direction){
	if (direction == "next")
		{
		if (currentPost == <?php echo count($posts)-1 ?>)
			currentPost = 0;
		else
			++currentPost;
		}
	else
		{
		if (currentPost == 0)
			currentPost = <?php echo count($posts)-1 ?>;
		else
			--currentPost;
		}
	
	$(".playButton").fadeOut("medium");		
	$("#single-post-container").fadeOut("medium",function(){
		$.post( "/circle/blog.php", {variable: currentPost}, function( data ) {
			$( "#single-post-container" ).html( data );
			$("#single-post-container").fadeIn("medium");
			
			blog_video = $( "#video" ).find( "video" );
			blog_iframe = $( "#video" ).find( "iframe" );
			if (blog_video.length == 0 && blog_iframe.length == 0)
				{
		    	//there's no playable video. don't show play button	
				}
			else
				$(".playButton").fadeIn("medium");		
		});
	});

}

$ ( document ).ready(function(){
	
	$.post( "/circle/blog.php", {variable: currentPost}, function( data ) {
		$( "#single-post-container" ).html( data );
		
		blog_video = $( "#video" ).find( "video" );
		blog_iframe = $( "#video" ).find( "iframe" );
		if (blog_video.length == 0 && blog_iframe.length == 0)
			$(".playButton").hide(); //there's no playable video. don't show play button	
		else
			$(".playButton").show();
	});
	
});


function playVideo(){
	$("#video").fadeIn();
	$("#video_background").fadeIn();
};

$ ( document ).ready(function(){
	$("#video_background").click(function(){
		$("#video").fadeOut();
		$("#video_background").fadeOut();
  	});
});

</script>	
</head> 
<body> 

<div id="menu">
	
    <div class="flipped" id="card">
    	
        <figure class="front">
        
			<div id="container" style="height:100%; width:100%; z-index:1; margin-left:auto; margin-right:auto; position:relative; display:block;"></div>
            
            
            <script>

			var group;
			var container;
			var particlesData = [];
			var camera, scene, renderer;
			var positions,colors;
			var pointCloud;
			var particlePositions;
			var linesMesh;

			var maxParticleCount = 500;
			var particleCount = 500;
			var r = 800;
			var rHalf = r / 2;
			var collision_rad = 100;

			var effectController = {
				showDots: true,
				showLines: true,
				minDistance: 50,
				limitConnections: false,
				maxConnections: 20,
				particleCount: 500
			}

			init();
			animate();

			function init() {

				container = document.getElementById( 'container' );

				camera = new THREE.PerspectiveCamera( 45, 1, 1, 4000 );
				camera.position.z = 1750;

				scene = new THREE.Scene();

				group = new THREE.Group();
				scene.add( group );

				var segments = maxParticleCount * maxParticleCount;

				positions = new Float32Array( segments * 3 );
				colors = new Float32Array( segments * 3 );

				var pMaterial = new THREE.PointCloudMaterial( {
					color: 0xFFFFFF,
					size: 3,
					blending: THREE.AdditiveBlending,
					transparent: true,
					sizeAttenuation: false
				} );

				particles = new THREE.BufferGeometry();
				particlePositions = new Float32Array( maxParticleCount * 3 );

				for ( var i = 0; i < maxParticleCount; i++ ) {
					var y = (Math.random() * 4/3 * r) - (7*r / 12);
					var x = 0;
					if (y>rHalf)
						{
						y = y - rHalf/3;
						x = 15*Math.sqrt(rHalf-y) + (Math.random() * 2 * collision_rad - collision_rad);
						}
					else if (y< -rHalf)
						{
						y = y + rHalf/3;
						x = -15*Math.sqrt(rHalf+y) + (Math.random() * 2 * collision_rad - collision_rad);	
						}
					else
						x = (-Math.sin(y * Math.PI / rHalf) * rHalf/2) + (Math.random() * 2 * collision_rad - collision_rad);
					
					var z = Math.random() * collision_rad - collision_rad/2;

					particlePositions[ i * 3     ] = x;
					particlePositions[ i * 3 + 1 ] = y;
					particlePositions[ i * 3 + 2 ] = z;

					// add it to the geometry
					particlesData.push( {
						velocity: new THREE.Vector3( -.5 + Math.random() * 1, -.5 + Math.random() * 1,  -.5 + Math.random() * 1 ),
						numConnections: 0
					} );

				}

				particles.drawcalls.push( {
					start: 0,
					count: particleCount,
					index: 0
				} );

				particles.addAttribute( 'position', new THREE.DynamicBufferAttribute( particlePositions, 3 ) );

				// create the particle system
				pointCloud = new THREE.PointCloud( particles, pMaterial );
				group.add( pointCloud );

				var geometry = new THREE.BufferGeometry();

				geometry.addAttribute( 'position', new THREE.DynamicBufferAttribute( positions, 3 ) );
				geometry.addAttribute( 'color', new THREE.DynamicBufferAttribute( colors, 3 ) );

				geometry.computeBoundingSphere();

				geometry.drawcalls.push( {
					start: 0,
					count: 0,
					index: 0
				} );

				var material = new THREE.LineBasicMaterial( {
					vertexColors: THREE.VertexColors,
					blending: THREE.AdditiveBlending,
					transparent: true
				} );

				linesMesh = new THREE.Line( geometry, material, THREE.LinePieces );
				group.add( linesMesh );

				//

				renderer = new THREE.WebGLRenderer( { antialias: true } );
				renderer.setClearColor( 0xBEBEBE, 1);
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( $("#container").height(), $("#container").width() );

				renderer.gammaInput = true;
				renderer.gammaOutput = true;

				container.appendChild( renderer.domElement );

				//

				window.addEventListener( 'resize', onWindowResize, false );

			}

			function onWindowResize() {

				camera.aspect = 1;
				camera.updateProjectionMatrix();

				renderer.setSize( $("#container").height(), $("#container").width() );

			}

			function animate() {

				var vertexpos = 0;
				var colorpos = 0;
				var numConnected = 0;

				for ( var i = 0; i < particleCount; i++ )
					particlesData[ i ].numConnections = 0;

				for ( var i = 0; i < particleCount; i++ ) {

					// get the particle
					var particleData = particlesData[i];

					particlePositions[ i * 3     ] += particleData.velocity.x;
					particlePositions[ i * 3 + 1 ] += particleData.velocity.y;
					particlePositions[ i * 3 + 2 ] += particleData.velocity.z;
				
					xPos = particlePositions[ i * 3];
					yPos = particlePositions[ i * 3 +1];
					zPos = particlePositions[ i * 3 +2];
					
					xVel = particleData.velocity.x; 
					yVel = particleData.velocity.y;
					zVel = particleData.velocity.z;
					
					if (Math.abs(xPos) > rHalf/2)
						particleData.velocity.x = -xVel;
							
					if (Math.abs(yPos) > rHalf)
						particleData.velocity.y = -yVel;
					
					if (Math.abs(zPos) > collision_rad)
						particleData.velocity.z = -zVel;
					
					// boundary conditions for top quadratic part of S 	
					if (xPos > 0 && yPos > rHalf/2 && yPos < 2*rHalf/3)
								{
								particleData.velocity.y = -yVel;
								}	
					else if (xPos > 0 && yPos > 2*rHalf/3)
								{
								var estimated_width = 15*Math.sqrt(rHalf-yPos);
								var rad_quad = Math.abs(xPos - estimated_width);
								if (rad_quad > collision_rad)
									{
									parallel_vector = -15/(2*Math.sqrt(rHalf-yPos));
									normal_vector = -1 / parallel_vector;
									normal_norm = Math.sqrt(Math.pow(normal_vector,2) + 1);
									normal_x = 1 / normal_norm;
									normal_y = normal_vector / normal_norm;
									
									dot_product = -2 * (xVel * normal_x + yVel * normal_y);
									
									particleData.velocity.x = dot_product * normal_x + xVel;
									particleData.velocity.y = dot_product * normal_y + yVel;
									
									if (rad_quad > (1.1 * collision_rad) || Math.abs(zPos) > (1.1 * collision_rad))
										{
										particlePositions[ i * 3] = estimated_width;
										}	
									}
								}
						// boundary conditions for bottom quadratic part of S 
						else if (xPos < 0 && yPos < -rHalf/2 && yPos > -2*rHalf/3)
								{
								particleData.velocity.y = -yVel;
								}		
						else if (xPos < 0 && yPos < -2*rHalf/3)
								{
								var estimated_width = -15*Math.sqrt(rHalf+yPos);
								var rad_quad = Math.abs(xPos - estimated_width);
								if (rad_quad > collision_rad)
									{
									parallel_vector = -15/(2*Math.sqrt(rHalf+yPos));
									normal_vector = -1 / parallel_vector;
									normal_norm = Math.sqrt(Math.pow(normal_vector,2) + 1);
									normal_x = 1 / normal_norm;
									normal_y = normal_vector / normal_norm;
									
									dot_product = -2 * (xVel * normal_x + yVel * normal_y);
									
									particleData.velocity.x = dot_product * normal_x + xVel;
									particleData.velocity.y = dot_product * normal_y + yVel;
									
									if (rad_quad > (1.1 * collision_rad) || Math.abs(zPos) > (1.1 * collision_rad))
										{
										particlePositions[ i * 3] = estimated_width;
										}	
									}
								}		
						// boundary conditions for middle Sin Wave part of S 			
						else
								{
								var expected_width = -Math.sin(yPos * Math.PI / rHalf) * rHalf/2;
								var rad_sin = Math.abs(xPos - expected_width);
								if (rad_sin > collision_rad)
									{
									parallel_vector = -Math.cos(yPos * Math.PI / rHalf);
									normal_vector = -1 / parallel_vector;
									normal_norm = Math.sqrt(Math.pow(normal_vector,2) + 1);
									normal_x = 1 / normal_norm;
									normal_y = normal_vector / normal_norm;
									
									dot_product = -2 * (xVel * normal_x + yVel * normal_y);
									
									particleData.velocity.x = dot_product * normal_x + xVel;
									particleData.velocity.y = dot_product * normal_y + yVel;
									
									if (rad_sin > (1.1 * collision_rad) || Math.abs(zPos) > (1.1 * collision_rad))
										{
										particlePositions[ i * 3] = expected_width;
										}
									}	
								}
										

					if ( effectController.limitConnections && particleData.numConnections >= effectController.maxConnections )
						continue;

					// Check collision
					for ( var j = i + 1; j < particleCount; j++ ) {

						var particleDataB = particlesData[ j ];
						if ( effectController.limitConnections && particleDataB.numConnections >= effectController.maxConnections )
							continue;

						var dx = particlePositions[ i * 3     ] - particlePositions[ j * 3     ];
						var dy = particlePositions[ i * 3 + 1 ] - particlePositions[ j * 3 + 1 ];
						var dz = particlePositions[ i * 3 + 2 ] - particlePositions[ j * 3 + 2 ];
						var dist = Math.sqrt( dx * dx + dy * dy + dz * dz );

						if ( dist < effectController.minDistance ) {

							particleData.numConnections++;
							particleDataB.numConnections++;

							var alpha = 1.0 - dist / effectController.minDistance;

							positions[ vertexpos++ ] = particlePositions[ i * 3     ];
							positions[ vertexpos++ ] = particlePositions[ i * 3 + 1 ];
							positions[ vertexpos++ ] = particlePositions[ i * 3 + 2 ];

							positions[ vertexpos++ ] = particlePositions[ j * 3     ];
							positions[ vertexpos++ ] = particlePositions[ j * 3 + 1 ];
							positions[ vertexpos++ ] = particlePositions[ j * 3 + 2 ];

							colors[ colorpos++ ] = alpha;
							colors[ colorpos++ ] = alpha;
							colors[ colorpos++ ] = alpha;

							colors[ colorpos++ ] = alpha;
							colors[ colorpos++ ] = alpha;
							colors[ colorpos++ ] = alpha;

							numConnected++;
						}
					}
				}


				linesMesh.geometry.drawcalls[ 0 ].count = numConnected * 2;
				linesMesh.geometry.attributes.position.needsUpdate = true;
				linesMesh.geometry.attributes.color.needsUpdate = true;

				pointCloud.geometry.attributes.position.needsUpdate = true;

				requestAnimationFrame( animate );

				render();

			}

			var round1 = true;
			var activated = false;
			
			function render() {

				var time = Date.now() * 0.0001;
				
				if (time%6 > 4)
					{
					group.rotation.y = Math.PI;
					group.rotation.x = Math.PI;
					}
				
				if (time%6 < 1)
				{
				group.rotation.y = (1-Math.pow(Math.sin(time%3 * Math.PI/2),2)) * Math.PI;
				group.rotation.x = (1-Math.pow(Math.sin(time%3 * Math.PI/2),2)) * Math.PI;
				}
				else if (time%3 < 1)
				{
				group.rotation.y = Math.pow(Math.sin(time%3 * Math.PI/2),2) * Math.PI;
				group.rotation.x = Math.pow(Math.sin(time%3 * Math.PI/2),2) * Math.PI;
				}
				renderer.render( scene, camera );

			}

		</script>
            
            
            <svg style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:1;"  
				viewBox="0 0 1000 1000">
					<circle cx="500" cy="500" r="417" stroke="#0d278c" stroke-width="120" fill="transparent" />
			  		Sorry, your browser does not support inline SVG.  
			</svg>   
			
           	<svg style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:3;"  
				viewBox="0 0 1000 1000">
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
                        font: 110px 'ProximaNova', serif;
                        text-anchor: middle;
						fill: white;
                     }
                     .continue:hover { fill: cornflowerblue; }
                    </style>
                    <path id="continue" d="M300 108 a 448 448 0 1 0 400 0"/>
                  </defs>
                
                  <text>
                    <a class="handle" style="cursor:pointer;" id="flipButton" >
                       <textPath class="continue" xlink:href="#continue" startOffset="50%">continue to website</textPath>
                    </a>
                  </text> 
			<svg>
				
			<svg style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:2;"
                 viewBox="0 0 1000 1000">  
				  <defs>
                    <style type="text/css">
                     .title {
                        font: 130px 'ProximaNova', serif;
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
        
            

		</figure>
       
	        
		<figure class="back">
            
			<svg style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:1;"  
				viewBox="0 0 1000 1000">
					<circle cx="500" cy="500" r="417" stroke="#0d278c" stroke-width="120" fill="transparent" />
			  		Sorry, your browser does not support inline SVG.  
			</svg>   
			
            <svg style="position:absolute; left:0px; top:0px; width:100%; height:100%; z-index:3;"  
				viewBox="0 0 1000 1000">
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
							font: 120px 'ProximaNova', serif;
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
                        font: 40px 'ProximaNova', serif;
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
                                
               	<div id="CONNECT_page" style="display:block; width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%; display:none; overflow:hidden;"> 
                
                	<div style="width:38%; height:52%; top: 32%; left:9%; position: absolute; z-index:10;">
                    
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
                        			</br></br></br>
                        
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
                    	<div style="top: 18%; position: absolute; z-index:10;">
                              <a class="connect_link" href="https://www.facebook.com/sean.m.goodrich" target="_blank"><img class="connect_box" src="IMAGES/facebook.png"/></a>
                              <a class="connect_link" href="https://www.linkedin.com/in/smgoodrich" target="_blank"><img class="connect_box" src="IMAGES/linkedin.png"/></a>
                              <a class="connect_link" href="https://plus.google.com/u/0/115763478605702749648/posts" target="_blank"><img class="connect_box" class="connect_link" src="IMAGES/google.png"/></a>
                    	</div>
                    </div>
               		 
                </div>                     

               	<div id="HOME_page" style="display:block; width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%;"> 
                </div>
              	
                <div id="PORTFOLIO_page" style="display:none;">
                	<div id = "PORTFOLIO_display" style="width:71.2%; height:71.2%; position:absolute; top:14.4%; overflow:hidden; left:14.4%; border-radius:50%; z-index: 0;">
                  
                	<!--
                        <div style="z-index:2; width:100%; height:100%; position:absolute; 
                            background: -webkit-radial-gradient(rgba(211, 211, 211,0) 50%, #BEBEBE 70%); /* Safari 5.1-6.0 */
                            background: -o-radial-gradient(rgba(211, 211, 211,0) 50%, #BEBEBE 70%); /* For Opera 11.6-12.0 */
                            background: -moz-radial-gradient(rgba(211, 211, 211,0) 50%, #BEBEBE 70%); /* For Firefox 3.6-15 */
                            background: radial-gradient(rgba(211, 211, 211,0) 50%, #BEBEBE 70%); /* Standard syntax */ ">
                        </div>
               		-->
                       
                    </div>
                    
                	<div style="width:71.2%; height:71.2%; position:absolute; top:14.4%; overflow:hidden; left:14.4%; border-radius:50%; z-index: 10;">
                       <img onclick = "Next_Image('switch')" src="IMAGES/artPalette.png" id="portfolioSwitch"/>
                                               
                       <div id="info_button" onmouseover = "INFO()" class="portfolioInfo">
                        	<div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">INFO</div>
                       </div>
                       
                       <div id="portfolio_info" style="width:100%; height:40%; opacity:0.7; background-color:black; bottom:0px; display:none; position:absolute; color:white;">
                       		<div id="portfolio_text" style="width:60%; position:relative; margin-left:auto; margin-right:auto; font-size:2vh;"></div>
                       </div>
                       
                       
                       	<div onclick = "Next_Image('next')" class="next arrow-box">
                        	<div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">NEXT</div>
               	            <img style="left: 20%; position: relative; margin-top:10%; height:40%; width: 60%;" src="IMAGES/arrow.png">
                       </div>      
                       
                        <div onclick = "Next_Image('prev')" class="prev arrow-box">
                        	<div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">PREV</div>
               	            <img style="left: 20%; position: relative; margin-top:10%; height:40%; width: 60%;" src="IMAGES/arrow.png">
                       </div>
                       
                    
                    	<img id="loading" style="width:5%; left: 47.5%; top:47.5%; position:relative;" src="gifs/loading.gif"/>         
                    </div>
                </div>
                
                
               <div id="RESUME_page" style="display:none; width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%; overflow:hidden;"> 
           			
                    <div id = "resume_button" class="prev arrow-box" style="z-index: 10;">
                        <div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">MENU</div>
               	        <img style="left: 20%; position: relative; margin-top:10%; height:40%; width: 60%;" src="IMAGES/arrow.png">
                    </div> 
                    
                    <div id = "resume_menu" style="z-index:11; width:50%; float:left; height:100%; display:none; position:absolute; border-radius: 100% / 50%; border-top-right-radius: 0; border-bottom-right-radius: 0;">
                    	
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
                    
                    
                    <div id ="contact_page" class="resume_heading">                        						
                    	<span style="font-size:2.5vh;"><b>Sean Goodrich</b></span></br>
                        (818) 601-1080</br>
                        smgood@umich.edu</br>
                        _________________________________</br>
                        110 N. Barrington Ave. / Los Angeles, CA 90049</br>
                        </br>
                        
                        <b>OBJECTIVE</b></br>
                        Seeking a position with a dynamic tech firm that will enable me to utilize my education and contribute my skills in software engineering.
                    </div>
                    
                    
                    <div id ="education_page" class="resume_heading" style="display:none;">
                        <b>EDUCATION</b></br>
                        <b>University of Michigan College of Engineering</b></br>
                        Ann Arbor, MI</br>
                        B.S.E. Computer Science</br>
                        Graduation Date: April 2015					
                        </br></br>
                        
                        <b>Relevant Coursework:</b></br>
                        <li>Data Structures and Algorithms</li>
                        <li>Mobile App Dev for Entrepreneurs</li>
                        <li>Introduction to Databases</li>
                        <li>Computer Game Design</li>
                        <li>Computer Vision</li>
                        <li>User Interface Development</li>
                    </div>                    
                    
                    
                    <div id ="job_page" class="resume_heading" style="display:none;" >
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
                            <li>Assisted with computer languages HTML, CSS and JavaScript.</li>
                            <li>Recorded traffic and revenue reports and researched potential partners.</li>
						</div>
                        
                        <div style="font-size:2.5vh; position:absolute; bottom:0px; width:100%; text-align:center; z-index:10;">
                            <span class = "jobsButton" id="jobButton1" style="font-weight:bold;">1</span>
                            <span class = "jobsButton" id="jobButton2">2</span>
                            <span class = "jobsButton" id="jobButton3">3</span>
                            <span class = "jobsButton" id="jobButton4">4</span>
                        </div>
                    </div>
                    
                    
                    <div id ="computer_page" class="resume_heading" style="display:none;" >
                     	<b>COMPUTER SKILLS</b></br>
                        <li><b>Operating systems</b>: Windows, Macintosh, Linux</li>
                        <li><b>Languages</b>: C++, C#, Matlab, HTML5, CSS, Javascript, PHP, AJAX, mySQL, Three.js, jQuery, Qt, Fortran</li>
                        <li><b>Applications</b>: Unity, Wordpress, Microsoft Office, Adobe Creative Suite, SimaPro, Risa, AutoCAD</li>
                        <li><b>Other Skills</b>: Website Development, Graphic Design, Social Media, Sustainable Design, Technical Communications</li>
              		</div>
                    
                    
                    <div id ="more_page" class="resume_heading" style="display:none;" >
						<b>PROJECTS</b></br>
                        <b>MarketU</b>, Ann Arbor, CA</br>
                        January 2015 - Current</br>
	                    Cofounder</br>
                        <li>Develop cross platform app to serve as a marketplace tailored to the needs of Michigan students</li>
                        <li>Full-stack Web Developer, Database Engineer, and UI/UX designer</li>                        
                        </br>
                        
                        <b>MISCELLANEOUS</b>
                        <li>Began education as Civil Engineering major</li>
                        <li>Conversational spanish skills</li>                                                
                        <li>References available upon request</li>
                    </div>
                    
                    <div id ="download_page" class="resume_heading" style="display:none;" >
						<b>DOWNLOAD</b></br>
                        <div style="position:relative; z-index:10;">
                        	<li><a href="/resume/resume_sean_goodrich.pdf" target="_blank">Resume</a></li>
                        </div>	
                    </div>

          
                </div>
                
                
               <div id="ABOUT_page" style="display:none; width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%; overflow:hidden;"> 

				   <svg id="buttons" viewBox = "0 0 1000 500" style="position:absolute; left:0px; top:0px; width:100%; height:50%; z-index:6;" stroke="black">
                            <path d = "M 363.2, 124.1 A 400, 400 0 0 1 636.8, 124.1" onmouseover="rotate(3)" onmouseout="rotate_back()" onclick="change_page(3, 'ABOUT')" stroke-width = "90" style="cursor:pointer;" fill = "none"/>
                            
                            <path d = "M 137.5,331 A 400, 400 0 0 1 331, 137.5" onmouseover="rotate(2)" onmouseout="rotate_back()" onclick="change_page(2, 'BLOG')" stroke-width = "90" style="cursor:pointer;" fill = "none"/>
                            
                            <path d = "M 669, 137.5 A 416, 416 0 0 1 863.5, 331" onmouseover="rotate(1)" onmouseout="rotate_back()" onclick="change_page(1, 'CONNECT')" stroke-width = "90" style="cursor:pointer;" fill = "none"/>
        
                    </svg>
                    
                <div style="top:50%; text-align:center; width:100%; position:relative; color:black;">In Progress!</div>
                
                </div>
                                
               <div id="BLOG_page" style="display:none;">
               
               		<div style="width:71.2%; height:71.2%; position:absolute; top:14.4%; left:14.4%; border-radius:50%; overflow:hidden;"> 
                            <div onclick = "nextPost('next')" class="next arrow-box" style="z-index:10;">
                                <div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">NEXT</div>
                                <img style="left: 20%; position: relative; margin-top:10%; height:40%; width: 60%;" src="IMAGES/arrow.png">
                            </div>      
                           
                            <div onclick = "nextPost('prev')" class="prev arrow-box" style="z-index:10;">
                                <div style="color:white; text-align:center; letter-spacing:.15vh; font-size:1.2vh; margin-top:10%; position:relative;">PREV</div>
                                <img style="left: 20%; position: relative; margin-top:10%; height:40%; width: 60%;" src="IMAGES/arrow.png">
                           </div>   
                           
                           <div onclick = "playVideo()" class="playButton" style="z-index:10;">
                               <img style="margin-left:30%; position:absolute; margin-top:25%; height:50%; width: 50%;" src="IMAGES/playTriangle.png">
                           </div>
                    </div>  
                           
               		<div id="single-post-container">
                    </div>
                
               </div>
                
 		 </figure>	
    </div>

</div>


    <div id="video_background"class="video_background">
    	<div class="close_video">
        	<img class="delete_box" src="IMAGES/close_box.png"/>
        	Close Video
        </div>
    </div>


</body> 
</html> 
