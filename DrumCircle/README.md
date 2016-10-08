DrumCircleWeb
==============
Website for project description for EECS 493

## INSTALL STEPS:
0. install [node.js](https://nodejs.org/)
1. `git clone https://github.com/EECS493-OculusDrumkit/DrumCircleWeb.git`
2. `cd DrumCircleWeb`
3. `npm install` NOTE: If this fails try running with `sudo`
4. `bower install` To install bower components. If this fails run `sudo npm install -g bower`
5. `npm start` NOTE: If this fails run `sudo npm install -g grunt-cli`
6. Start up a python server so that livereload works. Python 2.7: `python -m SimpleHTTPServer`. Python 3.4: `python -m http.server`

Now any changes that you make to source files should be reflected immediately in the browser

Note: For this stack to respond properly, you will always need to run `npm start` when beginning a session. This compiles all source files to corresponding css and js files and ensures all references will be valid. This also enables livereload.
