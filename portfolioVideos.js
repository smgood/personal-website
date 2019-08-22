// JavaScript Document
class PortfolioVideos {
  constructor(scene, loadingFinished){
    this.scene = scene;
    this.loadingFinished = loadingFinished;
    this.loadingCallback = this.loadingCallback.bind(this);
    this.errorCallback = this.errorCallback.bind(this);

    this.videos = [];
    this.portfolioInvisible = true;

    this.loadedVideos = 0;
    this.totalVideos = projectInfo.length;

    this.portfolioContainer = new THREE.Group();
    this.portfolioContainer.position.set(0, 1050, 0);
    this.scene.add(this.portfolioContainer);

    for (let i = 0; i < this.totalVideos; i++ ){
      let portfolioVideo = new PortfolioVideo(projectInfo[i], i, this.loadingCallback, this.errorCallback);
      this.videos.push(portfolioVideo);
      this.portfolioContainer.add(portfolioVideo.mesh);
    }
  }

  showPortfolio(duration){
    this.portfolioInvisible = false;
    for(let i = 0; i < this.videos.length; i++){
      let animationDelay = duration * Math.floor((15-i)/2);
      this.delayShow(this.videos[i], animationDelay);
      this.videos[i].show(animationDelay, 4 * duration);
    }
  }

  hidePortfolio(duration){
    for (let i = 0; i < this.videos.length; i++){
      this.videos[i].hide(duration);
    }
  }

  resetPortfolio(){
    this.portfolioInvisible = true;
    TWEEN.removeAll();
    for (let i = 0; i < this.videos.length; i++){
      this.videos[i].reset();
    }
  }

  delayShow(video, duration){
    window.setTimeout(function (){
      if (!this.portfolioInvisible){
        video.setVisibility(true);
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
