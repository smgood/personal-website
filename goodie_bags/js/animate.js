class Animate {
  constructor(svg) {
    this.paths = $(svg).children("path");

    let delayTime = Math.random() * 5000;

    let rgbStart = this.getRandomColor(null);
    let rgbEnd = this.getRandomColor(rgbStart);

    setTimeout(() => {
      requestAnimationFrame((timestamp) => {
        let startTime = timestamp;
        let endTime = this.getEndTime(startTime, rgbStart, rgbEnd);
        this.animateHelper(rgbStart, rgbEnd, startTime, endTime, timestamp);
      })
    }, delayTime);

    for (let i = 0; i < this.paths.length; i++) {
      this.paths[i].setAttribute('fill', this.rgbToString(rgbStart));
    }
  }

  animateHelper(rgbStart, rgbEnd, startTime, endTime, elapsedTime) {
    let percent = (elapsedTime - startTime) / (endTime - startTime);
    for (let i = 0; i < this.paths.length; i++) {
      this.paths[i].setAttribute('fill', this.rgbToString(this.rgbLerp(rgbStart, rgbEnd, percent)));
    }

    requestAnimationFrame((timestamp) => {
      if (timestamp > endTime) {
        let delayTime = Math.random() * 5000;

        rgbStart = rgbEnd;
        rgbEnd = this.getRandomColor(rgbStart);

        startTime = endTime + delayTime;
        endTime = this.getEndTime(startTime, rgbStart, rgbEnd);

        setTimeout((timestamp) => {
          this.animateHelper(rgbStart, rgbEnd, startTime, endTime, timestamp);
        }, delayTime);
      } else {
        this.animateHelper(rgbStart, rgbEnd, startTime, endTime, timestamp);
      }
    });
  }

  getEndTime (startTime, rgbStart, rgbEnd) {
    return startTime + (25 * Math.sqrt(
      Math.pow(rgbEnd[0] - rgbStart[0], 2) +
      Math.pow(rgbEnd[1] - rgbStart[1], 2) +
      Math.pow(rgbEnd[2] - rgbStart[2], 2)
    ));
  };

  getRandomColor (rgbCurrent) {
    let keys = Object.keys(colors);
    let rgbNew = null;
    while (!rgbNew || (rgbCurrent != null && this.rgbEqual(rgbCurrent, rgbNew))) {
      let randomKey = keys[Math.floor(Math.random() * keys.length)];
      rgbNew = colors[randomKey];
    }
    return rgbNew;
  };

  rgbEqual(rgb1, rgb2) {
    return (rgb1[0] === rgb2[0]) && (rgb1[1] === rgb2[1]) && (rgb1[2] === rgb2[2]);
  }

  rgbLerp(rgbStart, rgbEnd, percent){
    let diff = [
      rgbEnd[0] - rgbStart[0],
      rgbEnd[1] - rgbStart[1],
      rgbEnd[2] - rgbStart[2]
    ];

    return [
      rgbStart[0] + (diff[0] * percent),
      rgbStart[1] + (diff[1] * percent),
      rgbStart[2] + (diff[2] * percent),
    ];
  }

  rgbToString(rgb) {
    return "rgb(" + rgb[0] + "," + rgb[1] + "," + rgb[2] + ")";
  }
}
