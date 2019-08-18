// JavaScript Document
// create 3D portfolio
function lib_3D_portfolio (sceneOrigin, loadingFinished) {
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

  var loadingCallback = function() {
    loaded_videos++;
		if (loaded_videos == total_videos) {
			$('#continue').html('Scroll &#9661 Down');
			loadingFinished.execute();
		} else {
			$('#continue').html(Math.round(loaded_videos/total_videos * 100) + '% Ready');
		}
  }

  var errorCallback = function() {
    $('#continue').html('Video failed to load</br>Please refresh site');
  }

	var scene = sceneOrigin;
	var meshes = [];
	var portfolio_invisible = true;

	var loaded_videos = 0;
	var total_videos = project_info.length;

	this.portfolio_container = new THREE.Group();
	this.portfolio_container.position.x = 0;
	this.portfolio_container.position.y = 1050;
	this.portfolio_container.position.z = 0;
	scene.add(this.portfolio_container);

  for ( var i = 0; i < project_info.length; i++ ) {
    let portfolioVideo = new PortfolioVideo(project_info[i], i, loadingCallback, errorCallback);
		meshes.push(portfolioVideo.mesh);
		this.portfolio_container.add(portfolioVideo.mesh);
	}
}
