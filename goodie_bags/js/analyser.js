class Analyser {
  constructor() {
    this.setUpStream()
  }

  async setUpStream() {
    const stream = await navigator.mediaDevices.getUserMedia(this.constraints);
    const audioContext = new AudioContext();
    const mediaStreamAudioSourceNode = audioContext.createMediaStreamSource(stream);

    this.analyserNode = audioContext.createAnalyser();
    mediaStreamAudioSourceNode.connect(this.analyserNode);
  }

  get constraints() {
    return {
      audio: true,
      video: false
    };
  }

  get getVolume() {
    if (!this.analyserNode) {
        return 0;
    }

    let dataArray = new Float32Array(this.analyserNode.fftSize);
    this.analyserNode.getFloatTimeDomainData(dataArray);

    let sumSquares = 0.0;
    for (const amplitude of dataArray) {
       sumSquares += Math.pow(amplitude, 2);
     }
    return Math.sqrt(sumSquares / dataArray.length);
  }
}
