// JavaScript Document
class ScrollManager {
  getHeightOffset() {
    let node = document.getElementById("fullpage");
    return -1 * node.getBoundingClientRect().top; //real offset top
  }
}
