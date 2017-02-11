// JavaScript Document
// create 3D portfolio
function lib_3D_portfolio (sceneOrigin) {
	
	this.createMesh = function(project_info, project_number) {	
		var video = createVideo("textures/" + project_info.video);				
		var texture = new THREE.VideoTexture( video );
		texture.minFilter = THREE.LinearFilter;
		texture.magFilter = THREE.LinearFilter;
		texture.format = THREE.RGBFormat;
	
		var xsize = 500;
		var ysize = 500;
	
		var parameters = { color: 0xAAAAAA, map: texture, vertexColors: THREE.FaceColors },
	
		geometry = new THREE.BoxGeometry( xsize, ysize, xsize/12 );
		geometry.faces[ 10 ].color.setHex( 0x4C4C4C );
		geometry.faces[ 11 ].color.setHex( 0x4C4C4C );
					
		change_uvs( geometry, xsize, ysize );

		var material = new THREE.MeshLambertMaterial( parameters );
		var mesh = new THREE.Mesh( geometry, material );
		
		mesh.position.x = 0;
		mesh.position.y = (-640 * (project_number%2)) + 320;
		mesh.position.z = 0;
		
		var phi = (Math.floor(project_number/2) * Math.PI/4); 					
		mesh.rotation.y = (phi);					
		mesh.targetX = 800 * Math.sin( phi );
		mesh.targetZ = 800 * Math.cos( phi );
					
		mesh.visible = false;
		mesh.scale.x = mesh.scale.y = mesh.scale.z = 1;
		
		mesh.video = video;
		mesh.info = project_info;
		
		meshes.push(mesh);
		this.portfolio_container.add(mesh);
	}
	
	var createVideo = function (videoURL) {
		var video = document.createElement('video');
		var source = document.createElement('source'); 
		video.appendChild(source);
					
		video.autoplay=false;
		video.setAttribute('crossorigin', 'anonymous');
		video.onloadstart = function() {
			video.pause();
		};
		
		video.loop=true;
		video.muted=true;
		
		source.type = "video/mp4";
		source.src = videoURL;
					
		return video;
	};
	
	var change_uvs = function (geometry, width, height) {
		var faceVertexUvs = geometry.faceVertexUvs[ 0 ];

		for (var i = 0; i < faceVertexUvs.length; i++ ) {
			//front
			var unitx = 12/14;
			var unity = 12/14;
			var offsetx = 1/14;
			var offsety = 1/14;
			
			//right					
			if (i == 0 || i == 1){
				unitx = 1/14;
				offsetx = 13/14;
			}
			 //left
			else if (i == 2 || i == 3){
				unitx = 1/14;
				offsetx = 0;
			}
			//top
			else if (i == 4 || i == 5){
				unity = 1/14;
				offsety = 13/14;
			}
			//bottom
			else if (i == 6 || i == 7){
				unity = 1/14;
				offsety = 0;
			}
			//back
			else if (i == 10 || i == 11){
			var unitx = -12/14;
			var offsetx = 13/14;
			}
				
			var uvs = faceVertexUvs[ i ];
	
			for (var j = 0; j < uvs.length; j++ ){
				var uv = uvs[ j ];
				uv.x = ( uv.x * unitx ) + offsetx;
				uv.y = ( uv.y * unity ) + offsety;
			}				
		}
	}
	
	this.portfolioAppear = function (duration) {
		portfolio_invisible = false;
		for ( var i = 0; i < meshes.length; i ++ ) {
			var object = meshes[ i ];
			delayShow(object, duration * Math.floor((15-i)/2));
			new TWEEN.Tween( object.position )
				.to( { x: object.targetX, z: object.targetZ }, duration*4)
				.easing( TWEEN.Easing.Elastic.Out)
				.delay(duration * Math.floor((15-i)/2))
				.start();
			}
	}
	
	this.hidePortfolio = function (duration) {
		for ( var i = 0; i < meshes.length; i ++ ) {
			var object = meshes[ i ];
			new TWEEN.Tween( object.position )
				.to( { x: 0, z: 0 }, duration*40)
				.easing( TWEEN.Easing.Elastic.Out)
				.delay(0)
				.start();
		}
	}
	
	this.resetPortfolio = function() {
		TWEEN.removeAll();		
		for ( var i = 0; i < meshes.length; i ++ ){
			var object = meshes[ i ];
			object.position.x = 0;
			object.position.z = 0;
			object.visible = false;
		}	
		portfolio_invisible = true;
	}
	
	var delayShow = function (object, duration) {
		window.setTimeout(function () {
			if (portfolio_invisible == false){
				object.visible = true; 
			}
		}, duration);
	}
	
	var scene = sceneOrigin;
	var meshes = [];
	var portfolio_invisible = true;
	
	this.portfolio_container = new THREE.Group();
	this.portfolio_container.position.x = 0;
	this.portfolio_container.position.y = 1050;
	this.portfolio_container.position.z = 0;
	scene.add(this.portfolio_container);
}