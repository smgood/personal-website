// JavaScript Document
class Geometries{
  static extrusionSettings = {
    amount: 125,
    bevelEnabled: true,
    bevelThickness: 0.5,
    bevelSize: 0.5,
    bevelSegments: 8,
    material: 0,
    extrudeMaterial: 1
  };

  static boxGeometry(){
    var Box = new THREE.Shape();
    Box.moveTo(200.0, 0.0);
    Box.lineTo(15.9, 0.0);
    Box.bezierCurveTo(7.1, 0.0, 0.0, 7.0, 0.0, 15.6);
    Box.lineTo(0.0, 200.5);
    Box.bezierCurveTo(0.0, 209.0, 7.1, 216.0, 15.9, 216.0);
    Box.lineTo(200.0, 216.0);
    Box.bezierCurveTo(208.8, 216.0, 216.0, 209.0, 216.0, 200.4);
    Box.lineTo(216.0, 15.6);
    Box.bezierCurveTo(216.0, 7.0, 208.8, 0.0, 200.0, 0.0);

    var box_geometry = new THREE.ExtrudeGeometry( Box, this.extrusionSettings );
    return box_geometry;
  };

  static linkedInGeometry(){
    var ctx_linkedIn = new THREE.Shape();

    // layer1/Compound Path/Path
    ctx_linkedIn.moveTo(200.0, 0.0);
    ctx_linkedIn.lineTo(15.9, 0.0);
    ctx_linkedIn.bezierCurveTo(7.1, 0.0, 0.0, 7.0, 0.0, 15.6);
    ctx_linkedIn.lineTo(0.0, 200.5);
    ctx_linkedIn.bezierCurveTo(0.0, 209.0, 7.1, 216.0, 15.9, 216.0);
    ctx_linkedIn.lineTo(200.0, 216.0);
    ctx_linkedIn.bezierCurveTo(208.8, 216.0, 216.0, 209.0, 216.0, 200.4);
    ctx_linkedIn.lineTo(216.0, 15.6);
    ctx_linkedIn.bezierCurveTo(216.0, 7.0, 208.8, 0.0, 200.0, 0.0);

    // bottom part of letter i
    var hole1 = new THREE.Path();
    hole1.moveTo(64.1, 184.1);
    hole1.lineTo(32.0, 184.1);
    hole1.lineTo(32.0, 81.0);
    hole1.lineTo(64.1, 81.0);
    hole1.lineTo(64.1, 184.1);
    ctx_linkedIn.holes.push( hole1 );

    // top part of letter i
    var hole2 = new THREE.Path();
    hole2.moveTo(48.0, 66.9);
    hole2.bezierCurveTo(37.7, 66.9, 29.4, 58.6, 29.4, 48.3);
    hole2.bezierCurveTo(29.5, 38.1, 37.8, 29.7, 48.0, 29.7);
    hole2.bezierCurveTo(58.2, 29.7, 66.6, 38.0, 66.6, 48.3);
    hole2.bezierCurveTo(66.6, 58.6, 58.3, 66.9, 48.0, 66.9);
    ctx_linkedIn.holes.push( hole2 );

    // letter n
    var hole3 = new THREE.Path();
    hole3.moveTo(184.0, 184.1);
    hole3.lineTo(152.0, 184.1);
    hole3.lineTo(152.0, 134.0);
    hole3.bezierCurveTo(152.0, 122.0, 151.8, 106.7, 135.3, 106.7);
    hole3.bezierCurveTo(118.6, 106.7, 116.1, 119.7, 116.1, 133.2);
    hole3.lineTo(116.1, 184.2);
    hole3.lineTo(84.1, 184.2);
    hole3.lineTo(84.1, 81.0);
    hole3.lineTo(84.2, 81.0);
    hole3.lineTo(114.9, 81.0);
    hole3.lineTo(114.9, 95.1);
    hole3.lineTo(115.3, 95.1);
    hole3.bezierCurveTo(119.6, 87.0, 130.0, 78.5, 145.6, 78.5);
    hole3.bezierCurveTo(178.0, 78.5, 184.0, 99.8, 184.0, 127.6);
    hole3.lineTo(184.0, 184.1);
    ctx_linkedIn.holes.push( hole3 );

    var linkedIn_geometry = new THREE.ExtrudeGeometry( ctx_linkedIn, this.extrusionSettings );
    return linkedIn_geometry;
  }

  static facebookGeometry(){
    var ctx_facebook = new THREE.Shape();

    ctx_facebook.moveTo(204.1, 0.0);
    ctx_facebook.lineTo(11.9, 0.0);
    ctx_facebook.bezierCurveTo(5.3, 0.0, 0.0, 5.3, 0.0, 11.9);
    ctx_facebook.lineTo(0.0, 204.1);
    ctx_facebook.bezierCurveTo(0.0, 210.7, 5.3, 216.0, 11.9, 216.0);
    ctx_facebook.lineTo(115.4, 216.0);
    ctx_facebook.lineTo(115.4, 132.4);
    ctx_facebook.lineTo(87.2, 132.4);
    ctx_facebook.lineTo(87.2, 99.8);
    ctx_facebook.lineTo(115.4, 99.8);
    ctx_facebook.lineTo(115.4, 75.7);
    ctx_facebook.bezierCurveTo(115.4, 47.8, 132.4, 32.6, 157.3, 32.6);
    ctx_facebook.bezierCurveTo(169.2, 32.6, 179.5, 33.5, 182.5, 33.9);
    ctx_facebook.lineTo(182.5, 63.1);
    ctx_facebook.lineTo(165.2, 63.1);
    ctx_facebook.bezierCurveTo(151.7, 63.1, 149.0, 69.5, 149.0, 78.9);
    ctx_facebook.lineTo(149.0, 99.8);
    ctx_facebook.lineTo(181.3, 99.8);
    ctx_facebook.lineTo(177.1, 132.4);
    ctx_facebook.lineTo(149.0, 132.4);
    ctx_facebook.lineTo(149.0, 216.0);
    ctx_facebook.lineTo(204.1, 216.0);
    ctx_facebook.bezierCurveTo(210.7, 216.0, 216.0, 210.7, 216.0, 204.1);
    ctx_facebook.lineTo(216.0, 11.9);
    ctx_facebook.bezierCurveTo(216.0, 5.3, 210.7, 0.0, 204.1, 0.0);

    var facebook_geometry = new THREE.ExtrudeGeometry( ctx_facebook, this.extrusionSettings );
    return facebook_geometry;
  }

  static spotifyGeometry(){
    var ctx_Spotify = new THREE.Shape();
    ctx_Spotify.moveTo(204.1, 0.0);
    ctx_Spotify.lineTo(11.9, 0.0);
    ctx_Spotify.bezierCurveTo(5.3, 0.0, 0.0, 5.3, 0.0, 11.9);
    ctx_Spotify.lineTo(0.0, 204.1);
    ctx_Spotify.bezierCurveTo(0.0, 210.7, 5.3, 216.0, 11.9, 216.0);
    ctx_Spotify.lineTo(204.1, 216.0);
    ctx_Spotify.bezierCurveTo(210.7, 216.0, 216.0, 210.7, 216.0, 204.1);
    ctx_Spotify.lineTo(216.0, 11.9);
    ctx_Spotify.bezierCurveTo(216.0, 5.3, 210.7, 0.0, 204.1, 0.0);
    ctx_Spotify.closePath();

    var ctx_Spotify_Circle = new THREE.Shape();
    ctx_Spotify_Circle.moveTo(108,200.42);
    ctx_Spotify_Circle.bezierCurveTo(60.27,200.42,21.58,159,21.58,108);
    ctx_Spotify_Circle.bezierCurveTo(21.58,57,60.27,15.58,108,15.58);
    ctx_Spotify_Circle.bezierCurveTo(155.73,15.58,194.42,57,194.42,108);
    ctx_Spotify_Circle.bezierCurveTo(194.42,159,155.73,200.42,108,200.42);
    ctx_Spotify_Circle.closePath();
    ctx_Spotify.holes.push( ctx_Spotify_Circle );

    var ctx_Spotify_A1 = new THREE.Shape();
    ctx_Spotify_A1.moveTo(145.85,141);
    ctx_Spotify_A1.bezierCurveTo(123.07,126.11,94.85,122.65,61.91,130.7);
    ctx_Spotify_A1.absarc(63.47100893338245,136.2548313304636,5.77,-1.8447489952541736,-3.3768893175196,1);
    ctx_Spotify_A1.absarc(63.167826187616896,136.662406718215,5.39,2.966752717583773,1.3572713973156674,1);
    ctx_Spotify_A1.bezierCurveTo(94.39,134.58,119.94,137.58,140.23000000000002,150.84);
    ctx_Spotify_A1.absarc(143.05576670440618,146.48670899981755,5.19,2.1465459543997927,0.4879795241934324,1);
    ctx_Spotify_A1.absarc(142.4358392024187,145.93391386713014,6,0.5209231140995654,-0.9654744397037816,1);
    ctx_Spotify_A1.closePath();

    var ctx_Spotify_A2 = new THREE.Shape();
    ctx_Spotify_A2.moveTo(156,113.81);
    ctx_Spotify_A2.bezierCurveTo(129.32,96.28,90.3,91.35,58.91,101.53);
    ctx_Spotify_A2.absarc(61.41230139291299,108.39837591713105,7.31,-1.920172880114071,-3.4374957768476135,1);
    ctx_Spotify_A2.absarc(60.90629002676113,108.93298976561228,6.68,2.9001811992650213,1.2786789615036163,1);
    ctx_Spotify_A2.bezierCurveTo(90.31,106.41,125.72,110.83,148.95,126.1);
    ctx_Spotify_A2.absarc(152.49872643670176,120.66615783469433,6.49,2.1493327736886156,0.49165626637311743,1);
    ctx_Spotify_A2.absarc(151.72802641303477,119.97443360514747,7.5,0.5244559903777892,-0.9647815026093431,1);
    ctx_Spotify_A2.closePath();

    var ctx_Spotify_A3 = new THREE.Shape();
    ctx_Spotify_A3.moveTo(54,70.28);
    ctx_Spotify_A3.absarc(56.99164927703476,78.51332463851739,8.76,-1.9193219804433563,-3.436568108734618,1);
    ctx_Spotify_A3.absarc(56.381198666125584,79.16040233428023,8,2.9018530265641376,1.2780318555187025,1);
    ctx_Spotify_A3.bezierCurveTo(85.28,78.19000000000001,131.23000000000002,79.82000000000001,159.09,97.51);
    ctx_Spotify_A3.absarc(163.25345088445115,90.92594526657298,7.79,2.134666174778947,0.4780898580608315,1);
    ctx_Spotify_A3.absarc(162.3138348585289,90.1190241096159,9,0.5096665579623544,-0.9769247394387391,1);
    ctx_Spotify_A3.bezierCurveTo(135.3,62.29,84.55,60.37,54,70.28);
    ctx_Spotify_A3.closePath();

    var Spotify_geometry = new THREE.ExtrudeGeometry( ctx_Spotify, this.extrusionSettings );

    var Spotify_A1_geometry = new THREE.ExtrudeGeometry( ctx_Spotify_A1, this.extrusionSettings );
    var Spotify_A2_geometry = new THREE.ExtrudeGeometry( ctx_Spotify_A2, this.extrusionSettings );
    var Spotify_A3_geometry = new THREE.ExtrudeGeometry( ctx_Spotify_A3, this.extrusionSettings );

    Spotify_geometry.merge( Spotify_A1_geometry );
    Spotify_geometry.merge( Spotify_A2_geometry );
    Spotify_geometry.merge( Spotify_A3_geometry );

    return Spotify_geometry;
  }

  static githubGeometry(){
    var ctx_github = new THREE.Shape();

    ctx_github.moveTo(204.1, 0.0);
    ctx_github.lineTo(11.9, 0.0);
    ctx_github.bezierCurveTo(5.3, 0.0, 0.0, 5.3, 0.0, 11.9);
    ctx_github.lineTo(0.0, 204.1);
    ctx_github.bezierCurveTo(0.0, 210.7, 5.3, 216.0, 11.9, 216.0);
    ctx_github.lineTo(71.8, 216.0);
    ctx_github.bezierCurveTo(75.6, 215.5, 77.1, 212.5, 77.1, 209.9);
    ctx_github.bezierCurveTo(77.1, 206.9, 77.0, 197.1, 76.9, 186.7);
    ctx_github.bezierCurveTo(42.3, 194.3, 35.0, 172.1, 35.0, 172.1);
    ctx_github.bezierCurveTo(29.4, 157.7, 21.2, 153.9, 21.2, 153.9);
    ctx_github.bezierCurveTo(9.9, 146.1, 22.1, 146.3, 22.1, 146.3);
    ctx_github.bezierCurveTo(34.6, 147.2, 41.1, 159.1, 41.1, 159.1);
    ctx_github.bezierCurveTo(52.2, 178.1, 70.2, 172.6, 77.3, 169.5);
    ctx_github.bezierCurveTo(78.4, 161.4, 81.7, 155.9, 85.2, 152.8);
    ctx_github.bezierCurveTo(57.6, 149.7, 28.6, 139.0, 28.6, 91.4);
    ctx_github.bezierCurveTo(28.6, 77.8, 33.4, 66.7, 41.4, 58.0);
    ctx_github.bezierCurveTo(40.1, 54.8, 35.8, 42.2, 42.6, 25.1);
    ctx_github.bezierCurveTo(42.6, 25.1, 53.0, 21.7, 76.8, 37.8);
    ctx_github.bezierCurveTo(86.7, 35.1, 97.3, 33.7, 107.9, 33.6);
    ctx_github.bezierCurveTo(118.5, 33.7, 129.2, 35.1, 139.1, 37.8);
    ctx_github.bezierCurveTo(162.8, 21.7, 173.3, 25.1, 173.3, 25.1);
    ctx_github.bezierCurveTo(180.0, 42.2, 175.8, 54.8, 174.5, 58.0);
    ctx_github.bezierCurveTo(182.5, 66.7, 187.3, 77.8, 187.3, 91.4);
    ctx_github.bezierCurveTo(187.3, 139.1, 158.2, 149.6, 130.5, 152.7);
    ctx_github.bezierCurveTo(135.0, 156.6, 138.9, 164.2, 138.9, 175.8);
    ctx_github.bezierCurveTo(138.9, 192.4, 138.8, 205.8, 138.8, 209.9);
    ctx_github.bezierCurveTo(138.8, 212.5, 140.2, 215.5, 144.0, 216.0);
    ctx_github.lineTo(204.1, 216.0);
    ctx_github.bezierCurveTo(210.7, 216.0, 216.0, 210.7, 216.0, 204.1);
    ctx_github.lineTo(216.0, 11.9);
    ctx_github.bezierCurveTo(216.0, 5.3, 210.7, 0.0, 204.1, 0.0);
    ctx_github.closePath();

    var github_geometry = new THREE.ExtrudeGeometry( ctx_github, this.extrusionSettings );
    return github_geometry;
  }

  static emailGeometry(){
    var ctx_email1 = new THREE.Shape();
    ctx_email1.moveTo(213.1, 211.9);
    ctx_email1.lineTo(146.0, 118.6);
    ctx_email1.lineTo(108.0, 147.0);
    ctx_email1.lineTo(70.0, 118.6);
    ctx_email1.lineTo(2.9, 211.9);
    ctx_email1.bezierCurveTo(5.1, 214.4, 8.3, 216.0, 11.9, 216.0);
    ctx_email1.lineTo(204.1, 216.0);
    ctx_email1.bezierCurveTo(207.7, 216.0, 210.9, 214.4, 213.1, 211.9);
    ctx_email1.closePath();

    var ctx_email2 = new THREE.Shape();
    ctx_email2.moveTo(0.0, 65.7);
    ctx_email2.lineTo(0.0, 183.7);
    ctx_email2.lineTo(54.8, 107.4);
    ctx_email2.lineTo(0.0, 65.7);
    ctx_email2.closePath();

    var ctx_email3 = new THREE.Shape();
    ctx_email3.moveTo(204.1, 0.0);
    ctx_email3.lineTo(11.9, 0.0);
    ctx_email3.bezierCurveTo(5.3, 0.0, 0.0, 5.3, 0.0, 11.9);
    ctx_email3.lineTo(0.0, 40.1);
    ctx_email3.lineTo(108.0, 121.4);
    ctx_email3.lineTo(216.0, 40.1);
    ctx_email3.lineTo(216.0, 11.9);
    ctx_email3.bezierCurveTo(216.0, 5.3, 210.7, 0.0, 204.1, 0.0);
    ctx_email3.closePath();

    var ctx_email4 = new THREE.Shape();
    ctx_email4.moveTo(216.0, 183.7);
    ctx_email4.lineTo(216.0, 65.7);
    ctx_email4.lineTo(161.2, 107.4);
    ctx_email4.lineTo(216.0, 183.7);
    ctx_email4.closePath();

    var geometry_email1 = new THREE.ExtrudeGeometry( ctx_email1, this.extrusionSettings );
    var geometry_email2 = new THREE.ExtrudeGeometry( ctx_email2, this.extrusionSettings );
    var geometry_email3 = new THREE.ExtrudeGeometry( ctx_email3, this.extrusionSettings );
    var geometry_email4 = new THREE.ExtrudeGeometry( ctx_email4, this.extrusionSettings );

    geometry_email1.merge( geometry_email2 );
    geometry_email1.merge( geometry_email3 );
    geometry_email1.merge( geometry_email4 );

    return geometry_email1;
  }

  static resumeGeometry(){
    var ctx_resume = new THREE.Shape();
    ctx_resume.moveTo(204.1, 0.0);
    ctx_resume.lineTo(11.9, 0.0);
    ctx_resume.bezierCurveTo(5.3, 0.0, 0.0, 5.3, 0.0, 11.9);
    ctx_resume.lineTo(0.0, 204.1);
    ctx_resume.bezierCurveTo(0.0, 210.7, 5.3, 216.0, 11.9, 216.0);
    ctx_resume.lineTo(24.2, 216.0);
    ctx_resume.lineTo(24.2, 51.6);
    ctx_resume.bezierCurveTo(24.2, 48.0, 28.9, 45.1, 34.7, 45.1);
    ctx_resume.lineTo(45.3, 45.1);
    ctx_resume.lineTo(45.3, 51.6);
    ctx_resume.lineTo(45.3, 216.0);
    ctx_resume.lineTo(170.8, 216.0);
    ctx_resume.lineTo(170.8, 51.4);
    ctx_resume.lineTo(170.8, 44.8);
    ctx_resume.lineTo(181.3, 44.8);
    ctx_resume.bezierCurveTo(187.2, 44.8, 191.9, 47.8, 191.9, 51.4);
    ctx_resume.lineTo(191.9, 216.0);
    ctx_resume.lineTo(204.1, 216.0);
    ctx_resume.bezierCurveTo(210.7, 216.0, 216.0, 210.7, 216.0, 204.1);
    ctx_resume.lineTo(216.0, 11.9);
    ctx_resume.bezierCurveTo(216.0, 5.3, 210.7, 0.0, 204.1, 0.0);
    ctx_resume.closePath();

    var resumeLine1 = new THREE.Shape();
    resumeLine1.moveTo(153.1, 190.8);
    resumeLine1.lineTo(63.8, 190.8);
    resumeLine1.lineTo(63.8, 172.1);
    resumeLine1.lineTo(153.1, 172.1);
    resumeLine1.lineTo(153.1, 190.8);
    resumeLine1.closePath();
    ctx_resume.holes.push( resumeLine1 );

    var resumeLine2 = new THREE.Shape();
    resumeLine2.moveTo(153.1, 152.2);
    resumeLine2.lineTo(63.8, 152.2);
    resumeLine2.lineTo(63.8, 133.4);
    resumeLine2.lineTo(153.1, 133.4);
    resumeLine2.lineTo(153.1, 152.2);
    resumeLine2.closePath();
    ctx_resume.holes.push( resumeLine2 );

    var resumeLine3 = new THREE.Shape();
    resumeLine3.moveTo(153.1, 114.7);
    resumeLine3.lineTo(63.8, 114.7);
    resumeLine3.lineTo(63.8, 95.9);
    resumeLine3.lineTo(153.1, 95.9);
    resumeLine3.lineTo(153.1, 114.7);
    resumeLine3.closePath();
    ctx_resume.holes.push( resumeLine3 );

    var resumeClipboard = new THREE.Shape();
    resumeClipboard.moveTo(160.4, 65.3);
    resumeClipboard.bezierCurveTo(160.4, 67.8, 158.3, 69.8, 155.9, 69.8);
    resumeClipboard.lineTo(59.9, 69.8);
    resumeClipboard.bezierCurveTo(57.4, 69.8, 55.4, 67.8, 55.4, 65.3);
    resumeClipboard.lineTo(55.4, 40.0);
    resumeClipboard.bezierCurveTo(55.4, 37.5, 57.4, 35.5, 59.9, 35.5);
    resumeClipboard.lineTo(73.4, 35.5);
    resumeClipboard.bezierCurveTo(73.4, 35.5, 73.3, 35.4, 73.3, 35.3);
    resumeClipboard.bezierCurveTo(73.3, 22.9, 88.7, 12.8, 107.6, 12.8);
    resumeClipboard.bezierCurveTo(126.5, 12.8, 141.9, 22.9, 141.9, 35.3);
    resumeClipboard.bezierCurveTo(141.9, 35.4, 141.9, 35.5, 141.9, 35.5);
    resumeClipboard.lineTo(155.9, 35.5);
    resumeClipboard.bezierCurveTo(158.3, 35.5, 160.4, 37.5, 160.4, 40.0);
    resumeClipboard.lineTo(160.4, 65.3);
    resumeClipboard.closePath();
    ctx_resume.holes.push( resumeClipboard );

    var ctx_resume_circle = new THREE.Shape();
    ctx_resume_circle.moveTo(99.9, 41.7);
    ctx_resume_circle.bezierCurveTo(99.9, 41.8, 99.9, 41.8, 100.0, 41.8);
    ctx_resume_circle.bezierCurveTo(100.1, 42.0, 100.3, 42.2, 100.5, 42.4);
    ctx_resume_circle.bezierCurveTo(100.6, 42.4, 100.7, 42.5, 100.7, 42.5);
    ctx_resume_circle.bezierCurveTo(100.9, 42.7, 101.1, 42.8, 101.3, 43.0);
    ctx_resume_circle.bezierCurveTo(101.4, 43.0, 101.5, 43.1, 101.6, 43.2);
    ctx_resume_circle.bezierCurveTo(101.7, 43.3, 101.9, 43.4, 102.1, 43.5);
    ctx_resume_circle.bezierCurveTo(102.2, 43.6, 102.3, 43.7, 102.5, 43.8);
    ctx_resume_circle.bezierCurveTo(102.6, 43.9, 102.8, 44.0, 103.0, 44.1);
    ctx_resume_circle.bezierCurveTo(103.1, 44.1, 103.3, 44.2, 103.4, 44.3);
    ctx_resume_circle.bezierCurveTo(103.6, 44.3, 103.7, 44.4, 103.9, 44.5);
    ctx_resume_circle.bezierCurveTo(104.1, 44.6, 104.3, 44.6, 104.4, 44.7);
    ctx_resume_circle.bezierCurveTo(104.6, 44.7, 104.7, 44.8, 104.9, 44.8);
    ctx_resume_circle.bezierCurveTo(105.1, 44.9, 105.3, 44.9, 105.5, 45.0);
    ctx_resume_circle.bezierCurveTo(105.6, 45.0, 105.8, 45.1, 105.9, 45.1);
    ctx_resume_circle.bezierCurveTo(106.2, 45.1, 106.4, 45.2, 106.6, 45.2);
    ctx_resume_circle.bezierCurveTo(106.8, 45.2, 106.9, 45.2, 107.0, 45.3);
    ctx_resume_circle.bezierCurveTo(107.4, 45.3, 107.8, 45.3, 108.1, 45.3);
    ctx_resume_circle.bezierCurveTo(108.5, 45.3, 108.9, 45.3, 109.3, 45.3);
    ctx_resume_circle.bezierCurveTo(109.4, 45.2, 109.5, 45.2, 109.6, 45.2);
    ctx_resume_circle.bezierCurveTo(109.9, 45.2, 110.1, 45.1, 110.3, 45.1);
    ctx_resume_circle.bezierCurveTo(110.5, 45.1, 110.6, 45.0, 110.8, 45.0);
    ctx_resume_circle.bezierCurveTo(111.0, 44.9, 111.2, 44.9, 111.4, 44.8);
    ctx_resume_circle.bezierCurveTo(111.5, 44.8, 111.7, 44.7, 111.8, 44.7);
    ctx_resume_circle.bezierCurveTo(112.0, 44.6, 112.2, 44.6, 112.4, 44.5);
    ctx_resume_circle.bezierCurveTo(112.5, 44.4, 112.7, 44.3, 112.9, 44.3);
    ctx_resume_circle.bezierCurveTo(113.0, 44.2, 113.2, 44.1, 113.3, 44.0);
    ctx_resume_circle.bezierCurveTo(113.5, 44.0, 113.7, 43.9, 113.8, 43.8);
    ctx_resume_circle.bezierCurveTo(114.0, 43.7, 114.1, 43.6, 114.2, 43.5);
    ctx_resume_circle.bezierCurveTo(114.4, 43.4, 114.6, 43.3, 114.7, 43.2);
    ctx_resume_circle.bezierCurveTo(114.8, 43.1, 114.9, 43.0, 115.1, 43.0);
    ctx_resume_circle.bezierCurveTo(115.2, 42.8, 115.4, 42.7, 115.6, 42.6);
    ctx_resume_circle.bezierCurveTo(115.6, 42.5, 115.7, 42.4, 115.8, 42.3);
    ctx_resume_circle.bezierCurveTo(116.0, 42.2, 116.2, 42.0, 116.3, 41.8);
    ctx_resume_circle.bezierCurveTo(116.4, 41.8, 116.4, 41.7, 116.5, 41.7);
    ctx_resume_circle.bezierCurveTo(118.0, 40.0, 119.1, 37.9, 119.4, 35.6);
    ctx_resume_circle.bezierCurveTo(119.5, 35.0, 119.5, 34.5, 119.5, 33.9);
    ctx_resume_circle.bezierCurveTo(119.5, 27.7, 114.4, 22.6, 108.1, 22.6);
    ctx_resume_circle.bezierCurveTo(101.9, 22.6, 96.8, 27.7, 96.8, 33.9);
    ctx_resume_circle.bezierCurveTo(96.8, 34.5, 96.8, 35.0, 96.9, 35.5);
    ctx_resume_circle.bezierCurveTo(97.2, 37.9, 98.3, 40.1, 99.9, 41.7);
    ctx_resume_circle.closePath();

    var resume_geometry = new THREE.ExtrudeGeometry( ctx_resume, this.extrusionSettings );
    var circle_geometry = new THREE.ExtrudeGeometry( ctx_resume_circle, this.extrusionSettings );
    resume_geometry.merge( circle_geometry );
    return resume_geometry;
  }
}
