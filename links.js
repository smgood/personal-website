// JavaScript Document
// create 3D links shapes
class Links{
  constructor(scene) {
    this.scene = scene;
    this.links = [];
    this.showLinks = false;

    this.links_container = new THREE.Group();
    this.links_container.position.set (0, -800, 0);
    this.scene.add(this.links_container);

    this.createIcon(
      Geometries.facebookGeometry(),
      0x3B5998,
      -500,
      400,
      1000,
      'https://www.facebook.com/sean.m.goodrich'
    );

    this.createIcon(
      Geometries.linkedInGeometry(),
      0x007bb6,
      175,
      400,
      1000,
      'https://www.linkedin.com/in/smgoodrich'
    );

    this.createIcon(
      Geometries.githubGeometry(),
      0xffffff,
      -500,
      0,
      1000,
      'https://github.com/smgood'
    );

    this.createIcon(
      Geometries.spotifyGeometry(),
      0x1DB954,
      175,
      0,
      1000,
      'https://open.spotify.com/user/smgoodrich'
    );

    this.createIcon(
      Geometries.resumeGeometry(),
      0xbda27e,
      -500,
      -400,
      1000,
      './resume/resume_sean_goodrich.pdf'
    );

    this.createIcon(
      Geometries.emailGeometry(),
      0xff6666,
      175,
      -400,
      1000,
      'mailto:sean@smgoodrich.com'
    );
  }

  createIcon(geometry, color, x, y, z, url){
    var transparentBox = this.createTransparentBox ();
    transparentBox.add(this.createLogo(geometry, color));
    transparentBox.link = url;
    transparentBox.scale.x = transparentBox.scale.y = 1.5;
    transparentBox.position.set(x, y, z);
    transparentBox.rotation.x = Math.PI;
    if (x < 0){
      transparentBox.rotation.y = -0.25*Math.PI;
    } else {
      transparentBox.rotation.y = 0.25*Math.PI;
    }

    this.links_container.add( transparentBox );
    this.links.push(transparentBox);
  }

  createLogo(geometry, color){
    var material = new THREE.MeshLambertMaterial({color: color});
    return new THREE.Mesh(geometry, material);
  }

  createTransparentBox(){
    var material = new THREE.MeshLambertMaterial( );
    material.transparent = true;
    material.opacity = 0;
    return new THREE.Mesh( Geometries.boxGeometry(), material );
  }

  linksAppear(duration){
    for (var i = 0; i < this.links.length; i++) {
      var object = this.links[i];
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
  }
}
