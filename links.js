// JavaScript Document
class Links{
  constructor(scene) {
    this.scene = scene;
    this.links = [];
    this.showLinks = false;

    this.linksContainer = new THREE.Group();
    this.linksContainer.position.set (0, -800, 0);
    this.scene.add(this.linksContainer);

    this.links.push(
      new Link(
        Geometries.facebookGeometry(),
        0x3B5998,
        -500,
        400,
        1000,
        'https://www.facebook.com/sean.m.goodrich'
      )
    );

    this.links.push(
      new Link(
        Geometries.linkedInGeometry(),
        0x007bb6,
        175,
        400,
        1000,
        'https://www.linkedin.com/in/smgoodrich'
      )
    );

    this.links.push(
        new Link(
        Geometries.githubGeometry(),
        0xffffff,
        -500,
        0,
        1000,
        'https://github.com/smgood'
      )
    );

    this.links.push(
      new Link(
        Geometries.spotifyGeometry(),
        0x1DB954,
        175,
        0,
        1000,
        'https://open.spotify.com/user/smgoodrich'
      )
    );

    this.links.push(
      new Link(
        Geometries.resumeGeometry(),
        0xbda27e,
        -500,
        -400,
        1000,
        './resume/resume_sean_goodrich.pdf'
      )
    );

    this.links.push(
      new Link(
        Geometries.emailGeometry(),
        0xff6666,
        175,
        -400,
        1000,
        'mailto:sean@smgoodrich.com'
      )
    );

    for (let i = 0; i < this.links.length; i++) {
      this.linksContainer.add(this.links[i].mesh);
    }
  }

  linksAppear(duration){
    for (var i = 0; i < this.links.length; i++) {
      this.links[i].enterAnimation(duration*4, duration*3);
    }
  }
}
