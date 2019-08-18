// JavaScript Document
class PortfolioVideo {
  constructor(project_info, project_number, loadedCallback, errorCallback) {
    this.loadedCallback = loadedCallback;
    this.errorCallback = errorCallback;

    this.loadingManager = this.loadingManager.bind(this);
    this.errorManager = this.errorManager.bind(this);

    this.mesh = this.createMesh(project_info, project_number);
  }

  createMesh(project_info, project_number) {
    var video = this.createVideo("textures/" + project_info.video);
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

    this.change_uvs( geometry, xsize, ysize );

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

    return mesh;
  }

  createVideo(videoURL) {
    var video = document.createElement('video');
    var source = document.createElement('source');
    video.appendChild(source);

    var agent = navigator.userAgent;
    var isIphone = ((agent.indexOf('iPhone') != -1) || (agent.indexOf('iPod') != -1)) ;
    if(isIphone) {
      video.autoplay=true;
      video.onloadstart = function() {
        video.pause();
      };
    } else {
      video.autoplay=false;
    }

    video.preload = 'auto';
    video.loop=true;
    video.muted=true;
    video.setAttribute('crossorigin', 'anonymous');
    $(video).attr('playsinline','');

    source.type = "video/mp4";
    source.src = videoURL;

    video.addEventListener("loadeddata", this.loadingManager);
    video.addEventListener("error", this.errorManager);

    return video;
  };

  loadingManager() {
    this.loadedCallback();
  }

  errorManager() {
    this.errorCallback();
  }

  change_uvs(geometry, width, height) {
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
}
