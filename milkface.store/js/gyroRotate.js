function gyroRotate (object) {

	var milkface = object;
	var $this = this;

	this.play = function () {
		window.addEventListener("deviceorientation", handleOrientation, true);

		// if(window.DeviceOrientationEvent) {
		// 	alert("aldsjf")
		// 	document.addEventListener('deviceorientation', rotateGyro, false);
		// }

		//if(window.DeviceOrientationEvent) {
			//window.addEventListener('deviceorientation', function(event) {
			// 		var alpha    = event.alpha;
			//  		var beta     = event.beta;
			//  		var gamma    = event.gamma;

	 		// Apply the transform to the image
      	//	var rotation = "rotate3d(0,1,0, "+ gamma*Math.cos(beta*Math.PI/180) +"deg) rotate3d(-1,0,0, "+ (beta + 90)+"deg)";

			// 		milkface.style.webkitTransform = rotation;
      // 		milkface.style.MozTransform = rotation;
      // 		milkface.style.transform = rotation;
		//	}
		//}

	}


	function handleOrientation(event) {
  		var absolute = event.absolute;
  		var alpha    = event.alpha;
  		var beta     = event.beta;
  		var gamma    = event.gamma;

		milkface.rotateX(beta)
	//	milkface.rotateX()
		//milkface.rotateX()


		// milkface.setRotationFromEuler (
		// 	new THREE.Euler(
		// 		0, //1 * (-beta + 90) * (Math.PI/180),
		// 		1 * gamma*Math.cos(beta*Math.PI/180) * (Math.PI/180),
		// 		0
		// 	)
		// );
		//
		//
		// var rotation = "rotate3d(0,1,0, "+ gamma*Math.cos(beta*Math.PI/180) +"deg) rotate3d(-1,0,0, "+ (beta + 90)+"deg)";

	}

	this.stop = function () {
		//document.removeEventListener('deviceorientation', rotateGyro, false);
	}

	function rotateGyro (event) {
		alert("hi");

		var alpha    = event.alpha;
		var beta     = event.beta;
		var gamma    = event.gamma;

		 // Apply the transform to the image
		var rotation = "rotate3d(0,1,0, "+ gamma*Math.cos(beta*Math.PI/180) +"deg) rotate3d(-1,0,0, "+ (beta + 90)+"deg)";

		object.style.webkitTransform = rotation;
		object.style.MozTransform = rotation;
		object.style.transform = rotation;
		}
}
