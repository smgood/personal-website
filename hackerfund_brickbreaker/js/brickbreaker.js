// html objects
let paddle, ball, targets, screen;

// other variables
let screenWidth, screenHeight;
let isGameActive, previousTimestamp, ballVelocity, points;

window.onload = function(){
  init();
}

function init() {
  paddle = document.getElementById("paddle");
  ball = document.getElementById("ball");
  targets = document.getElementsByClassName("target");

  screen = document.getElementById("screen");
  screenWidth = screen.offsetWidth;
  screenHeight = screen.offsetHeight;

  resetGame();
  window.addEventListener('keydown', controlPaddle);
  window.addEventListener("mousemove", movePaddle);
  window.addEventListener('click', startGame);
}

function controlPaddle(event) {
  switch (event.code) {
    case "Space":
      startGame();
      break;
    default:
      break;
  }
}

function movePaddle(event) {
  let mousePosition = event.x - screen.offsetLeft - paddle.offsetWidth/2;
  if (mousePosition < 0) {
    paddle.style.left = "0px";
  } else if (mousePosition > screenWidth - paddle.offsetWidth) {
    paddle.style.left = screenWidth - paddle.offsetWidth + "px";
  } else {
    paddle.style.left = mousePosition + "px";
  }

  if (!isGameActive) {
    moveBallWithPaddle();
  }
}

function moveBallWithPaddle() {
  ball.style.left = paddle.offsetLeft + (paddle.offsetWidth - ball.offsetWidth)/2 + "px";
  ball.style.top = paddle.offsetTop - ball.offsetHeight + "px";
}

function startGame() {
  if (!isGameActive){
    launchBall();
  }
}

function resetGame() {
  points = 0;
  isGameActive = false;
  previousTimestamp = null;
  moveBallWithPaddle();

  for (let i = 0; i < targets.length; i++) {
    targets[i].style.visibility = "visible";
  }
}

function launchBall() {
  isGameActive = true;
  ballVelocity = {
    "x": ballSpeed / Math.sqrt(2),
    "y": ballSpeed / Math.sqrt(2)
  };
  window.requestAnimationFrame(moveBall);
}

function moveBall(timestamp) {
  let deltaTime = previousTimestamp
      ? timestamp - previousTimestamp
      : 0;
  previousTimestamp = timestamp;

  for (let i = 0; i < targets.length; i++) {
    if (isVisible(targets[i]) && isCollision(targets[i])) {
      if (collisionDirection(targets[i]) === "vertical") {
        ballVelocity.y *= -1;
      } else {
        ballVelocity.x *= -1;
      }

      targets[i].style.visibility = "hidden";
      points++;
    }
  }

  if (isCollision(paddle)) {
    let distance = (paddle.offsetLeft + paddle.offsetWidth) - (ball.offsetLeft + ball.offsetWidth/2);
    let relDistance = (-2 * distance / paddle.offsetWidth) + 1;

    ballVelocity.x = relDistance * ballSpeed / Math.sqrt(2);
    ballVelocity.y = Math.sqrt(Math.pow(ballSpeed, 2) - Math.pow(ballVelocity.x, 2));
  }

  if (ball.offsetTop < 0) {
    ballVelocity.y *= -1;
  }

  if (
    ball.offsetLeft < 0 ||
    ball.offsetLeft + ball.offsetWidth > screenWidth
  ){
    ballVelocity.x *= -1;
  }

  if (
    ball.offsetTop + ball.offsetHeight > screenHeight ||
    points >= targets.length
  ) {
    resetGame();
  } else {
    ball.style.left = ball.offsetLeft + (ballVelocity.x * deltaTime / 10.0) + "px";
    ball.style.top = ball.offsetTop - (ballVelocity.y * deltaTime / 10.0) + "px";
    window.requestAnimationFrame(moveBall);
  }
}

function isVisible(object) {
  return object.style.visibility !== "hidden";
}

function isCollision(object) {
  return (
    ball.offsetLeft + ball.offsetWidth/2 > object.offsetLeft &&
    ball.offsetLeft + ball.offsetWidth/2 < object.offsetLeft + object.offsetWidth &&
    ball.offsetTop + ball.offsetHeight > object.offsetTop &&
    ball.offsetTop < object.offsetTop + object.offsetHeight
  );
}

function collisionDirection(object) {
  if (
    ball.offsetTop + ball.offsetHeight/2 < object.offsetTop ||
    ball.offsetTop + ball.offsetHeight/2 > object.offsetTop + object.offsetHeight
  ) {
    return "vertical";
  } else {
    return "horizontal";
  }
}
