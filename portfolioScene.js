class portfolio_scene{
  var touchCount;
  var container;
  var camera, scene, renderer, mouse;
  var mouseX, mouseY;
  var windowHalfX, windowHalfY;
  var down_clicked;
  var start_position;
  var box_clicked;

  var current_mesh;
  var current_link;

  var actualRotation;
  var targetRotation;
  var targetRotationOnMouseDown;
  var mouseXOnMouseDown;

  constructor(scrollManager) {
    mouseX = 0;
    mouseY = 0;

    windowHalfX = window.innerWidth / 2;
    windowHalfY = window.innerHeight / 2;

    //preset to big number so raycast doesn't initialize video onload
    mouse = new THREE.Vector2(windowHalfX, windowHalfY);

    actualRotation = 0;
    targetRotation = 0;
    targetRotationOnMouseDown = 0;
    mouseXOnMouseDown = 0;

    box_clicked = false;

    touchCount = 0;

    scene = new THREE.Scene();

    portfolioClass = new PortfolioVideos(scene, loadFunctions);
    portfolioPopover = new lib_portfolio_popover();
    linksClass = new Links(scene);

    container = document.createElement('div');
    container.id = "container2";
    document.body.appendChild( container );

    camera = new THREE.PerspectiveCamera( 40, window.innerWidth / window.innerHeight, 1, 10000 );
    camera.position.z = 3000;
    camera.position.y = 2050*(1.5 - scrollManager.getHeightOffset()/window.innerHeight);
    camera.position.x = 0;

    var light = new THREE.DirectionalLight( 0xffffff, 0.8 );
    light.position.set(0.2, 0, 1 ).normalize();
    scene.add( light );

    var ambient = new THREE.AmbientLight(0x222222);
    scene.add( ambient );

    renderer = new THREE.WebGLRenderer( { alpha: true } );
    renderer.setSize( window.innerWidth, window.innerHeight);
    container.appendChild( renderer.domElement );

    var pointLight = new THREE.PointLight( 0xffffff, 0.3, 2500 );
    pointLight.position.set(-162.5, -800 , 0);
    scene.add( pointLight );

    renderer.autoClear = false;

    if (hasTouchEvents()) {
      document.addEventListener( 'touchstart', onDocumentTouchStart, false );
      document.addEventListener( 'touchmove', onDocumentTouchMove, false );
      document.addEventListener( 'touchstart', touchPortfolio, false );
      document.addEventListener( 'touchstart', touchIcon, { passive: false });
    } else {
      document.addEventListener( 'mousemove', onMouseMove, false );
      document.addEventListener( 'mousedown', onDocumentMouseDown, false );
      document.addEventListener( 'mousemove', mousePortfolio, false );
      document.addEventListener( 'mousemove', mouseIcon, false );
    }

    window.addEventListener('resize', onWindowResize, false );
    document.addEventListener('click', openLink, false );
    document.getElementById("close").addEventListener( 'click', closePortfolioInfo, false );

    renderer.setClearColor( 0x000000, 0 ); // the default
    animate();
  }

  openLink() {
    if (current_link != null){
      window.open(current_link.link, '_blank');
    }
  };

  closePortfolioInfo() {
    $("#opacity_page").fadeOut();
    $("#info_page").fadeOut();
    if (hasTouchEvents()){
      document.addEventListener( 'touchmove', onDocumentTouchMove, false );
    } else {
      document.addEventListener( 'mousedown', onDocumentMouseDown, false );
    }
  }

  onMouseMove( event ) {
    mouse.x = ( event.clientX / window.innerWidth ) * 2 - 1;
    mouse.y = - ( event.clientY / window.innerHeight ) * 2 + 1;
  }

  onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth, window.innerHeight);

    windowHalfX = window.innerWidth / 2;
    windowHalfY = window.innerHeight / 2;
    portfolioPopover.resize();
  }

  onDocumentMouseDown( event ) {
    event.preventDefault();

    document.addEventListener( 'mousemove', onDocumentMouseMove, false );
    document.addEventListener( 'mouseup', onDocumentMouseUp, false );
    document.addEventListener( 'mouseout', onDocumentMouseOut, false );

    mouseXOnMouseDown = event.clientX - windowHalfX;
    targetRotationOnMouseDown = targetRotation;

    if (current_mesh != null){
      box_clicked = true;
      down_clicked = current_mesh;
      start_position = mouseX;

      timeout = setInterval(function(e){
        if (current_mesh != down_clicked || Math.abs(start_position - mouseX) > 30){
          box_clicked = false;
          clearInterval(timeout);
        }
      }, 50);
    }
  }

  onDocumentMouseMove(event){
    mouseX = event.clientX - windowHalfX;
    targetRotation = targetRotationOnMouseDown + ( mouseX - mouseXOnMouseDown ) * 0.008;
  }

  onDocumentMouseUp(event){
    event.preventDefault();
    if (box_clicked == true){
      clearInterval(timeout);
      box_clicked = false;
      document.removeEventListener( 'mousedown', onDocumentMouseDown, false );

      clickVideo();
    }

    document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
    document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
    document.removeEventListener( 'mouseout', onDocumentMouseOut, false );
  }

  clickVideo() {
    // 1st number represents number of inputs
    var current_project = down_clicked.info;
    portfolioPopover.projectDescription(current_project);

    $("#photo").one("load", function(){
      portfolioPopover.resize();
      $("#opacity_page").fadeIn();
      $("#info_page").fadeIn();
    }).attr("src", "images/" + current_project.image);
  }

  onDocumentMouseOut(event){
    document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
    document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
    document.removeEventListener( 'mouseout', onDocumentMouseOut, false );
  }

  onDocumentTouchStart( event ) {
    if ( event.touches.length === 1 ) {
      mouseXOnMouseDown = event.touches[ 0 ].pageX - windowHalfX;
      targetRotationOnMouseDown = targetRotation;
    }
  }

  onDocumentTouchMove(event){
    if ( event.touches.length === 1 ) {
      event.preventDefault();
      mouseX = event.touches[ 0 ].pageX - windowHalfX;
      targetRotation = targetRotationOnMouseDown + ( mouseX - mouseXOnMouseDown ) * 0.008;
    }
  }

  animate() {
    camera.position.y = 2050*(1.5 - scrollManager.getHeightOffset()/window.innerHeight);
    requestAnimationFrame( animate );
    TWEEN.update();
    render();
  }

  render() {
    if (current_page == 2){
      actualRotation += ( targetRotation - actualRotation ) * 0.05;
      portfolioClass.portfolioContainer.rotation.y = actualRotation;
    } else{
      actualRotation = actualRotation%(2*Math.PI);
      if (Math.abs(actualRotation) > Math.PI) {
        actualRotation = actualRotation - (Math.sign(actualRotation) * 2 * Math.PI) ;
      }
      targetRotation = 0;
    }
    renderer.clear();
    renderer.render( scene, camera );
  }

  noHoverPortfolio(){
    document.body.style.cursor = "default";
    if (current_mesh != null){
      current_mesh.material.color.set( 0xAAAAAA );
      current_mesh.video.pause();
      current_mesh = null;
    }
  }

  noHoverLinks(){
    document.body.style.cursor = "default";
    if (current_link != null){
      current_link.rotation.y = 0;
      current_link.position.z = 0;
      current_link = null;
    }
  }

  showPortfolio() {
    portfolioClass.showPortfolio(250);
  }

  hidePortfolio() {
    portfolioClass.hidePortfolio(10000);
  }

  resetPortfolio() {
    portfolioClass.resetPortfolio()
  }

  linksAppear() {
    linksClass.linksAppear(250);
    window.setTimeout(function(){
      linksClass.showLinks = true
    }, 250 * 7);
  }

  hasTouchEvents () {
    return ('ontouchstart' in document.documentElement);
  }

  getTouchPosition(event) {
    return new THREE.Vector2(
      ( event.touches[ 0 ].pageX / window.innerWidth ) * 2 - 1,
      - ( event.touches[ 0 ].pageY / window.innerHeight ) * 2 + 1
    );
  }

  getTouchPositionOut(event) {
    return new THREE.Vector2(
      ( event.changedTouches[ 0 ].pageX / window.innerWidth ) * 2 - 1,
      - ( event.changedTouches[ 0 ].pageY / window.innerHeight ) * 2 + 1
    );
  }

  getRaycaster(coords) {
    let raycaster = new THREE.Raycaster();
    raycaster.setFromCamera(coords, camera)
    return raycaster;
  }

  mousePortfolio(event){
    if (current_page == 2 && !scrolling) {
      hoverPortfolio(event, getRaycaster(mouse));
    }
  }

  touchPortfolio(event){
    if (current_page == 2 && !scrolling && event.touches.length === 1 ) {
      hoverPortfolio(event, getRaycaster(getTouchPosition(event)));
      document.addEventListener( 'touchend', touchEndPortfolio, false );
      if (down_clicked != current_mesh) {
        touchCount = 0;
      }
      down_clicked = current_mesh;
      setTimeout(() => {
        if (touchCount > 0) {
          touchCount--;
        }
        document.removeEventListener( 'touchend', touchEndPortfolio, false );
      }, "1000");
    }
  }

  touchEndPortfolio(event) {
    touchCount++;

    var sameMesh = false;
    var intersects = getRaycaster(getTouchPositionOut(event)).intersectObjects(portfolioClass.portfolioContainer.children);
    if (intersects.length > 0 && $("#info_page").is(':hidden') && intersects[0].point.z > 0){
      if (intersects[0].object == down_clicked){
        sameMesh = true;
      }
    }

    if (!sameMesh) {
      document.removeEventListener( 'touchend', touchEndPortfolio, false );
      touchCount = 0;
    } else if (touchCount >= 2) {
      clickVideo();
      touchCount = 0;
      document.removeEventListener( 'touchend', touchEndPortfolio, false );
      document.removeEventListener( 'touchmove', onDocumentTouchMove, false );
    }
  }

  hoverPortfolio(event, raycaster) {
    var intersects = raycaster.intersectObjects(portfolioClass.portfolioContainer.children);

    if (intersects.length > 0 && $("#info_page").is(':hidden') && intersects[0].point.z > 0){
      document.body.style.cursor = "pointer";
      if (intersects[0].object != current_mesh){
        if (current_mesh != null){
          current_mesh.material.color.set( 0xAAAAAA );
          current_mesh.video.pause();
        }

        current_mesh = intersects[0].object;
        current_mesh.material.color.set( 0xffffff );
        current_mesh.video.play();
      }
    } else{
      noHoverPortfolio();
    }
  }

  touchIcon(event){
    if (current_page == 3 && !scrolling && event.touches.length === 1){
      hoverIcons(event, getRaycaster(getTouchPosition(event)))
    }
  }

  mouseIcon(event){
    if (current_page == 3 && !scrolling) {
      hoverIcons(event, getRaycaster(mouse));
    }
  }

  hoverIcons(event, raycaster){
    var intersects = raycaster.intersectObjects(linksClass.linksContainer.children);

    if (intersects.length > 0 && linksClass.showLinks == true){
      document.body.style.cursor = "pointer";
      if (intersects[0].object != current_link){
        event.preventDefault();

        if (current_link != null){
          current_link.rotation.y = 0;
          current_link.position.z = 0;
        }
        current_link = intersects[0].object;

        if (current_link.position.x < 0){
          current_link.rotation.y = Math.PI * 0.1;
          current_link.position.z = 100;
        } else{
          current_link.rotation.y = Math.PI * -0.1;
          current_link.position.z = 250;
        }
      }
    } else{
      noHoverLinks();
    }
  }
}
