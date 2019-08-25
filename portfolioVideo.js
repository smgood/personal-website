// JavaScript Document
class PortfolioVideo {
  constructor(projectInfo, projectNumber, loadedCallback, errorCallback){
    this.loadedCallback = loadedCallback;
    this.errorCallback = errorCallback;

    this.loadingManager = this.loadingManager.bind(this);
    this.errorManager = this.errorManager.bind(this);

    this.mesh = this.createMesh(projectInfo, projectNumber);
  }

  createMesh(projectInfo, projectNumber){
    let video = this.createVideo('textures/' + projectInfo.video);
    let texture = new THREE.VideoTexture(video);
    texture.minFilter = THREE.LinearFilter;
    texture.magFilter = THREE.LinearFilter;
    texture.format = THREE.RGBFormat;

    let xsize = 500;
    let ysize = 500;

    let parameters = {
      color: 0xAAAAAA,
      map: texture,
      vertexColors: THREE.FaceColors
    };

    let geometry = new THREE.BoxGeometry(xsize, ysize, xsize/12);
    geometry.faces[10].color.setHex(0x4C4C4C);
    geometry.faces[11].color.setHex(0x4C4C4C);

    this.changeUvs(geometry);

    let material = new THREE.MeshLambertMaterial(parameters);
    let mesh = new THREE.Mesh(geometry, material);
    mesh.position.set(0, (-640 * (projectNumber%2)) + 320, 0);

    let phi = (Math.floor(projectNumber/2) * Math.PI/4);
    mesh.rotation.y = (phi);
    mesh.targetX = 800 * Math.sin(phi);
    mesh.targetZ = 800 * Math.cos(phi);

    mesh.visible = false;
    mesh.scale.x = mesh.scale.y = mesh.scale.z = 1;

    mesh.video = video;
    mesh.info = projectInfo;

    return mesh;
  }

  createVideo(videoURL){
    let video = document.createElement('video');
    let source = document.createElement('source');
    video.appendChild(source);

    let agent = navigator.userAgent;
    let isIphone = ((agent.indexOf('iPhone') != -1) || (agent.indexOf('iPod') != -1)) ;
    if(isIphone){
      video.autoplay=true;
      video.onloadstart = function(){
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

    source.type = 'video/mp4';
    source.src = videoURL;

    video.addEventListener('loadeddata', this.loadingManager);
    video.addEventListener('error', this.errorManager);

    return video;
  }

  loadingManager(){
    this.loadedCallback();
  }

  errorManager(){
    this.errorCallback();
  }

  changeUvs(geometry){
    let faceVertexUvs = geometry.faceVertexUvs[0];

    for (let i = 0; i < faceVertexUvs.length; i++){
      //front
      let unitx = 12/14;
      let unity = 12/14;
      let offsetx = 1/14;
      let offsety = 1/14;

      //right
      if (i === 0 || i === 1){
        unitx = 1/14;
        offsetx = 13/14;
      }
      //left
      else if (i === 2 || i === 3){
        unitx = 1/14;
        offsetx = 0;
      }
      //top
      else if (i === 4 || i === 5){
        unity = 1/14;
        offsety = 13/14;
      }
      //bottom
      else if (i === 6 || i === 7){
        unity = 1/14;
        offsety = 0;
      }
      //back
      else if (i === 10 || i === 11){
        unitx = -12/14;
        offsetx = 13/14;
      }

      let uvs = faceVertexUvs[i];

      for (let j = 0; j < uvs.length; j++){
        let uv = uvs[j];
        uv.x = (uv.x * unitx) + offsetx;
        uv.y = (uv.y * unity) + offsety;
      }
    }
  }

  reset(){
    this.mesh.position.setX(0);
    this.mesh.position.setZ(0);
    this.mesh.visible = false;
  }

  show(delay, duration) {
    new TWEEN.Tween(this.mesh.position)
      .to({x: this.mesh.targetX, z: this.mesh.targetZ }, duration)
      .easing(TWEEN.Easing.Elastic.Out)
      .delay(delay)
      .start();
  }

  hide(duration){
    new TWEEN.Tween(this.mesh.position)
      .to({x: 0, z: 0}, duration)
      .easing(TWEEN.Easing.Elastic.Out)
      .delay(0)
      .start();
  }

  setVisibility(setting){
    this.mesh.visible = setting;
  }
}
