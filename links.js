// JavaScript Document
// create 3D links shapes
function lib_3D_links (sceneOrigin) {

	this.createIcon = function (geometry, color, x, y, z, url){
		var transparentBox = createTransparentBox ();
		transparentBox.link = url;
		this.links_container.add( transparentBox );

		transparentBox.scale.x = transparentBox.scale.y = 1.5;
		transparentBox.position.set( x, y, z);
		transparentBox.rotation.x = Math.PI;
		if (x < 0){
			transparentBox.rotation.y = -0.25*Math.PI;
		} else {
			transparentBox.rotation.y = 0.25*Math.PI;
		}

		link3d = createLink3D (geometry, color);
		transparentBox.add( link3d );

		links.push(transparentBox);
	};

	var createLink3D = function (geometry, color) {
		var material = new THREE.MeshLambertMaterial({
			color: color
		});

		var Link3D = new THREE.Mesh( geometry, material );
		return Link3D;
	};

	var createTransparentBox = function () {
		var material = new THREE.MeshLambertMaterial( );
		material.transparent = true;
		material.opacity = 0;

		var box = new THREE.Mesh( Geometries.boxGeometry(), material );
		return box;
	};

	this.linksAppear = function (duration) {
		for (var i = 0; i < links.length; i++) {
			var object = links[i];
			new TWEEN.Tween( object.position )
				.to( { x: object.position.x, y: object.position.y, z: 0 }, duration*4)
				.easing(TWEEN.Easing.Cubic.Out)
				.delay(duration * 3)
				.start();

			new TWEEN.Tween( object.rotation )
				.to( { x: Math.PI, y: 0, z: 0 }, duration*4)
				.easing(TWEEN.Easing.Cubic.Out)
				.delay(duration * 3)
				.start();
		}
	};

	var scene = sceneOrigin;
	var links = [];
	this.showLinks = false;
	this.links_container = new THREE.Group();

	this.links_container.position.x = 0;
	this.links_container.position.y = -800;
	this.links_container.position.z = 0;
	scene.add(this.links_container);
}
