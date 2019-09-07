// JavaScript Document
var projectInfo = [
  {
    'title': '< Brickbreaker />',
    'date': '(Summer 2019)',
    'team': 'NA',
    'url': 'https://docs.google.com/presentation/d/1NREzjMMfoUxXnf0WPVCPT0yQKXatl2C-zhoD26zsw2U/edit#slide=id.g5f670d5e7a_2_0',
    'summary': 'A workshop used to introduce HTML and CSS to students by allowing them to customize the game and its targets. Used at Hacker Fund supported events.',
    'role': 'Mentor',
    'skills': 'HTML, CSS, Javascript',
    'image': 'hackerfund_brickbreaker.png',
    'video': 'hackerfund_brickbreaker.mp4'
  },

  {
    'title': 'Cubism.js',
    'date': '(Spring 2018 - Present)',
    'team': 'NA',
    'url': 'http://smgoodrich.com/cubes/',
    'summary': 'An easy to use, open source javascript library. Use it to create full-screen, 3D scrolling websites, composed entirely of cubes! (Improved version of earlier project)',
    'role': 'NA',
    'skills': 'Javascript, Three.js',
    'image': 'cubism.png',
    'video': 'cubism.mp4'
  },

  {
    'title': 'Cryptocurrency Bot',
    'date': '(Summer 2017 - Present)',
    'team': 'NA',
    'url': 'https://github.com/smgood/cryptobot',
    'summary': 'A python script that compares cryptocurrency prices across multiple exchanges and performs an arbitrage on profitable opportunities.',
    'role': 'NA',
    'skills': 'Python, Design Patterns',
    'image': 'crypto.jpg',
    'video': 'crypto.mp4'
  },

  {
    'title': 'IllusionGenerator',
    'date': '(Spring 2016 - Present)',
    'team': 'NA',
    'url': 'NA',
    'summary': 'A project that utilizes perspective and linear algebra to develop optical illusions. Using vector images, a python script creates 3D printable objects in Maya. Viewers will experience the image morphing optical illusion as they move around the object.',
    'role': 'NA',
    'skills': 'Python, Maya',
    'image': 'illusionRotations.jpg',
    'video': 'illusionGenerator.mp4'
  },

  {
    'title': 'Milk Face',
    'date': '(Spring 2017 - Summer 2017)',
    'team': 'Kyle Goodrich',
    'url': 'http://www.milkface.store',
    'summary': 'A website to promote 3D printed vinyl toys.',
    'role': 'Web Developer',
    'skills': 'Javascript, Three.js',
    'image': 'milkFace.png',
    'video': 'milkFace.mp4'
  },

  {
    'title': 'Text 2 Scene',
    'date': '(Spring 2016)',
    'team': 'Eric Wang',
    'url': 'NA',
    'summary': 'A hackathon project that uses a syntax net to translate basic instructions entered online into a Unity3D scene. To support collaboration, an EC2 instance replicates the scene across all computers with the project open. It is intended to introduce kids to game design and computer science that may not have coding experience.',
    'role': 'NA',
    'skills': 'Unity, Parsey McParceface, Amazon EC2',
    'image': 'textToScene.jpg',
    'video': 'text2Scene.mp4'
  },

  {
    'title': 'Hacker Fund Calculator',
    'date': '(Spring 2016)',
    'team': 'NA',
    'url': 'http://smgoodrich.com/hackerfund_calculator/',
    'summary': 'A calculator used at Hacker Fund in a workshop to introduce programming to K-12 students. Students are tought how to code the functions controlling the basic operations and then are given to freedom to program their own buttons.',
    'role': 'NA',
    'skills': 'HTML, CSS, Javascript, Tridiv',
    'image': 'calculator.png',
    'video': 'calculator.mp4'
  },

  {
    'title': 'NFL Hackathon',
    'date': '(Winter 2016)',
    'team': 'NA',
    'url': 'http://nflhackathon.com/',
    'summary': 'A project that allows users to analyze how a play in football would have unfolded had the tail back chosen a different direction to run. An interface allows the user to choose the direction they would like the tail back to run. Real in-game tracking data is used to determine the position of each player at the moment the ball is handed off.',
    'role': 'NA',
    'skills': 'Unity, C#, JSON',
    'image': 'nflPresentation.jpg',
    'video': 'nflHackathon.mp4'
  },

  {
    'title': 'Hacker Fund Workshop',
    'date': '(Fall 2015)',
    'team': 'NA',
    'url': 'https://docs.google.com/presentation/d/1errIElZ9SlvuZMdW2JHd-GYsu9V7a5SjsXafSUZDUpk/edit?usp=sharing',
    'summary': 'An Angry Birds workshop run at Hacker Fund hackathons to introduce programming, game design, and Unity3D to high school students. Students are able to drag and drop GameObjects to design their own levels.',
    'role': 'NA',
    'skills': 'Unity, C#',
    'image': 'hackerfund.png',
    'video': 'AngryBirdsClone.mp4'
  },

  {
    'title': '3d Banner Ads',
    'date': '(Summer 2015)',
    'team': 'NA',
    'url': 'http://www.smgoodrich.com/cube_ads/',
    'summary': 'A prototype for fun and interactive banner ads. Potential clients have many options to customize the banner including the ability to upload images, select from various animations, and determine the banner size. Depending on which is chosen, the animation will activate either as the user scrolls down or when the user hovers over the banner.',
    'role': 'NA',
    'skills': 'HTML, CSS, Javascript',
    'image': 'cubeAds.png',
    'video': 'cubeAds.mp4'
  },

  {
    'title': 'Personal Logo',
    'date': '(Summer 2015)',
    'team': 'NA',
    'url': 'http://www.smgoodrich.com/S/',
    'summary': 'A WebGL experiment that forms the letter S. Each of the points in the scene moves in a random direction bounded by sin and quadratic equations.',
    'role': 'NA',
    'skills': 'WebGL, Three.js',
    'image': 'logoS.png',
    'video': '3dLetterS.mp4'
  },

  {
    'title': 'DrumCircle',
    'date': '(Winter 2015)',
    'team': 'Samuel Oliver, Russell Trupiano, Maxwell Yinger',
    'url': 'http://smgoodrich.com/DrumCircle/',
    'summary': 'Drum Circle attempts to create an improved conceptual model over current digital audio workstations by offering an intuitive yet simple solution for creating quick drum loops in real time. Drum Circle takes advantage of virtual reality with Oculus Rift, which allows users to take advantage of 360 degrees of space around them and natural hand gestures via the Myo armband.',
    'role': 'Handle instrument state with the Myo; Create an intuitive and fluid user experience',
    'skills': 'Unity, C#, Oculus Rift, Myo Armband, User Interface Development',
    'image': 'DrumCircle.png',
    'video': 'DrumCircle.mp4'
  },

  {
    'title': 'SmartArt',
    'date': '(Winter 2015)',
    'team': 'NA',
    'url': 'http://www.smgoodrich.com/SmartArt/',
    'summary': 'A project to assist visitors while viewing art shows. It has an intuitive user interface allowing art curators to easily upload the information they would like to share. It simplifies the task of displaying the information to the visitor and adds novelty to the service by implementing art recognition technology.',
    'role': 'NA',
    'skills': 'Computer Vision, HTML, CSS, Javascript',
    'image': 'SmartArtScreenShot.jpg',
    'video': 'SmartArt.mp4'
  },

  {
    'title': 'Burst',
    'date': '(Fall 2014)',
    'team': 'Jonah Scheinerman, Yu-Chen Lee',
    'url': 'http://www.smgoodrich.com/Burst/',
    'summary': 'A 1st person puzzle game. As a construction worker in the future, you must use the original beam spawning game mechanic to create bridges, to block lasers, to hide from enemies, and much more!',
    'role': 'Creation of enemies, and level design',
    'skills': 'Unity, C#, Game Design',
    'image': 'burst.png',
    'video': 'Burst.mp4'
  },

  {
    'title': 'Deprecated Personal Website',
    'date': '(Fall 2014)',
    'team': 'NA',
    'url': 'http://www.smgoodrich.com/circle',
    'summary': 'A website to share my portfolio, resume, and interests. I used canvas and SVG objects in order to experiment developing a circle based website.',
    'role': 'NA',
    'skills': 'HTML, CSS, Javascript, PHP, AJAX, Wordpress, Canvas, SVG',
    'image': 'circle.png',
    'video': 'circle.mp4'
  },

  {
    'title': 'Mary Sue Coalman',
    'date': '(Summer 2013)',
    'team': 'NA',
    'url': 'http://smgoodrich.com/coalman/raisingEYEBROWS.html',
    'summary': 'An interactive artwork that challenges the assumption University of Michigan is sustainable',
    'role': 'NA',
    'skills': 'HTML, CSS, Javascript, Graphic design',
    'image': 'coalman.png',
    'video': 'Coalman.mp4'
  }
];

/*
  {
    "title": "Mobile Game",
    "date": "(Winter 2014)",
    "team": "NA",
    "url": "http://www.smgoodrich.com/javascript_games/brickbreaker.html",
    "summary": "A basic javascript game that explores use of acceleramter, physics, spin, and other game mechanics. Play on smart phone.",
    "role": "NA",
    "skills": "Mobile Web, Javascript, Accelerameter",
    "image": "brickbreaker.png",
    "video": "Brickbreaker.mp4"
  },

  {
    "title": "MarketU",
    "date": "(Winter 2015)",
    "team": "Nathan Riley, Xiaoshi Wang",
    "url": "NA",
    "summary": "MarketU is a cross platform app to serve as a marketplace tailored to the needs of Michigan students. It guarantees security to customers by requiring all transactions take place between users who have provided authenticated University of Michigan addresses.",
    "role": "Develop MySQL database, PHP processes and assets",
    "skills": "PHP, MySQL, AWS, Graphic Design",
    "image": "marketU.png",
    "video": "MarketU.mp4"
  },

  {
    "title": "Command Game",
    "date": "(Winter 2014)",
    "team": "NA",
    "url": "http://www.smgoodrich.com/javascript_games/theGame.html",
    "summary": "Experimental mobile game that requires user to rotate phone as directed. Inspiration from childrens games such as Bop It and Brain Warp. Play on smart phone.",
    "role": "NA",
    "skills": "Mobile Web, Javascript, Accelerameter",
    "image": "command.png",
    "video": "CommndGame.mp4"
  },

  {
    "title": "Woven CMS",
    "date": "(Summer 2014)",
    "team": "Eric Armas",
    "url": "NA",
    "summary": "CMS for online publishing company Woven Digital. The CMS was customized in order to streamline the company’s marketing campaigns. Relevant information was displayed depending on the phase of the campaign and department of the particular user.",
    "role": "Fullstack Web Development",
    "skills": "HTML, CSS, Javascript, PHP, MySQL, Wordpress",
    "image": "woven.png",
    "video": "Woven.mp4"
  },

  {
    "title": "3d web prototype",
    "date": "(Summer 2014)",
    "team": "NA",
    "url": "http://www.smgoodrich.com/circle/3d.html",
    "summary": "Recreation of personal website in 3d to explore three.JS and WebGl",
    "role": "NA",
    "skills": "WebGL",
    "image": "personal3D.png",
    "video": "3dwebsite.mp4"
  },

  {
    "title": "Groom",
    "date": "(Fall 2013)",
    "team": "Sita Syal, Leonard Carrier, Adetunji Dahunsi",
    "url": "http://www.smgoodrich.com/groom",
    "summary": "User Interface for sustainable design project to optimize lawn qulaity while minimizing environmental impact involved in lawncare.",
    "role": "Perform sustainability evaluation and develop interface for demo",
    "skills": "Sustainable design, Mobile Web, Graphic design",
    "image": "groomPoster.jpg",
    "video": "Groom.mp4"
  },

  {
    "title": "City Paper Box",
    "date": "(Summer 2013)",
    "team": "NA",
    "url": "http://citypaperbox.com/",
    "summary": "Website for small business to promote its products and services",
    "role": "NA",
    "skills": "HTML, CSS, Javascript",
    "image": "cityPaperBox.png",
    "video": "CityPaperBox.mp4"
  },

  {
    "title": "Artwork",
    "date": "(2010 - 2013)",
    "team": "NA",
    "url": "NA",
    "summary": "Various digital artwork I have created for student organizations or during leisure time",
    "role": "NA",
    "skills": "Photoshop, Graphic design",
    "image": "rooster.png",
    "video": "artwork.mp4"
  }
*/
