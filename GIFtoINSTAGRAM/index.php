<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
		
			// On submit button function 
			$(document).ready(function(){
				//Find the progress bar
				var pBar = document.getElementById('p');
				pBar.value = 0;
				var startButton = document.getElementById("submit");
				startButton.onclick = function()
					{
					start()
					};
			});
			
			
			
			//PROGRESS BAR
			function start(){
				//Set interval function
				setInterval(function() {
					//Get info from info.php using ajax
   					$.ajax({url:"info.php",success:function(result){
						//Put info in div
   						$("#div").html(result);
						//Add value in progress bar
						pBar.value = result;
						}});
					//Update progress bar every .1 seconds
					}, 100);
				}
			</script>

<script type="text/javascript">

//SHOW IMAGE AND IAMGE DETAILS
function handleFiles(files) {  
    for (var i = 0; i < files.length; i++) {  
        var file = files[i];  
        var imageType = /image.*/;  
        
        if (!file.type.match(imageType)) {  
            continue;  
        }  
        
		var preview = document.getElementById('preview');

		var container = document.createElement("div");
	    container.className = "preview_container";
		preview.appendChild(container);
		
        var img = document.createElement("img");  
        img.classList.add("obj");  
        img.file = file;  
        container.appendChild(img);
		
        
       var info = document.createElement('div');
       info.innerHTML = 'Title: ' + file.name + '</br>Type: ' + file.type + '</br>Dimentions: ' + img.width + 'x' + img.height + '</br>Size: ' +  file.size;
       container.appendChild(info);
     
	   var progress = document.createElement('progress');
       progress.value = 0;
	   progress.className = "progress";
	   container.appendChild(progress);


        
        var reader = new FileReader();  
        reader.onload = (function(aImg) {
            return function(e) { 
                aImg.src = e.target.result;
            };
        })(img);
        reader.readAsDataURL(file);
    }  
}


</script>


<style>
.obj {
    width: 180px;
    height: 180px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}

.progress{
	display: inline-block;
}

.preview_container{
	margin:10px;
	float:left;
	display:relative;
}
</style>

</head>
<body>

<form action="uploader_06.php" method="post" enctype="multipart/form-data">
	<label for="file">Add File:</label>
	<!--<input type="file" name="file" id="file"><br>-->
    <input type="file" name="file_array[]" multiple="multiple" id="fileselect" onChange="handleFiles(this.files)"><br>
    E-mail: <input type="email" name="usremail"><br>
	<input type="submit" name="submit" value="Submit" id="submit">
</form>

<div id="div"></div>
<div id="preview"></div>
<progress id='p' max='100'><span>0</span>%</progress>



</body>

</html>