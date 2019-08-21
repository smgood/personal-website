// JavaScript Document
class portfolioVideos {
  constructor(scene, loadingFinished){
    this.scene = scene;
    this.loadingFinished = loadingFinished;
    this.loadingCallback = this.loadingCallback.bind(this);
    this.errorCallback = this.errorCallback.bind(this);

  	this.meshes = [];
  	this.portfolioInvisible = true;

  	this.loadedVideos = 0;
  	this.totalVideos = projectInfo.length;

  	this.portfolioContainer = new THREE.Group();
  	this.portfolioContainer.position.set(0, 1050, 0);
  	this.scene.add(this.portfolioContainer);

    for (let i = 0; i < this.totalVideos; i++ ){
      let portfolioVideo = new PortfolioVideo(projectInfo[i], i, this.loadingCallback, this.errorCallback);
  		this.meshes.push(portfolioVideo.mesh);
  		this.portfolioContainer.add(portfolioVideo.mesh);
  	}
  }

  portfolioAppear(duration){
    this.portfolioInvisible = false;
    for(let i = 0; i < this.meshes.length; i++){
      let object = this.meshes[i];
      let objectDelay = duration * Math.floor((15-i)/2);
      this.delayShow(object, objectDelay);
      new TWEEN.Tween(object.position)
        .to({x: object.targetX, z: object.targetZ }, duration*4)
        .easing(TWEEN.Easing.Elastic.Out)
        .delay(objectDelay)
        .start();
    }
  }

  hidePortfolio(duration){
    for (let i = 0; i < this.meshes.length; i++){
      let object = this.meshes[i];
      new TWEEN.Tween(object.position)
        .to({x: 0, z: 0}, duration*40)
        .easing(TWEEN.Easing.Elastic.Out)
        .delay(0)
        .start();
    }
  }

  resetPortfolio(){
    TWEEN.removeAll();
    for (let i = 0; i < this.meshes.length; i++){
      let object = this.meshes[i];
      object.position.setX(0);
      object.position.setZ(0);
      object.visible = false;
    }
    this.portfolioInvisible = true;
  }

  delayShow(object, duration){
    window.setTimeout(function (){
      if (!this.portfolioInvisible){
        object.visible = true;
      }
    }, duration);
  }

  loadingCallback(){
    this.loadedVideos++;
    if (this.loadedVideos === this.totalVideos){
      $('#continue').html('Scroll &#9661 Down');
      this.loadingFinished.execute();
    } else {
      $('#continue').html(Math.round(this.loadedVideos/this.totalVideos * 100) + '% Ready');
    }
  }

  errorCallback(){
    $('#continue').html('Video failed to load</br>Please refresh site');
  }
}
