// JavaScript Document
class Link{
  constructor(geometry, color, x, y, z, url) {
    this.mesh = this.createIcon(geometry, color, x, y, z, url);
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

    return transparentBox;
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

  enterAnimation(duration, delay) {
    new TWEEN.Tween( this.mesh.position )
      .to( { x: this.mesh.position.x, y: this.mesh.position.y, z: 0 }, duration)
      .easing(TWEEN.Easing.Cubic.Out)
      .delay(delay)
      .start();

    new TWEEN.Tween( this.mesh.rotation )
      .to( { x: Math.PI, y: 0, z: 0 }, duration)
      .easing(TWEEN.Easing.Cubic.Out)
      .delay(delay)
      .start();
  }
}
