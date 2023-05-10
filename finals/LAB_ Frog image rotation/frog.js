const directions = {
  UP: "up",
  DOWN: "down",
  LEFT: "left",
  RIGHT: "right",
};

window.addEventListener("load", function () {
  const canvas = document.querySelector("canvas");

  // Draw 4 frogs facing different directions
  drawFrog(canvas, 50, 50, directions.UP);
  drawFrog(canvas, 180, 50, directions.DOWN);
  drawFrog(canvas, 50, 180, directions.LEFT);
  drawFrog(canvas, 180, 180, directions.RIGHT);
});

function drawFrog(canvas, x, y, direction = directions.UP) {
  const context = canvas.getContext("2d");
  const frogImg = document.querySelector("img");

  switch (direction) {
    case directions.DOWN:
      // TODO: Translate, rotate, and translate
      const downCenterX = x + frogImg.width / 2;
      const downCenterY = y + frogImg.height / 2;
      context.translate(downCenterX, downCenterY);
      context.rotate(Math.PI);
      context.translate(-downCenterX, -downCenterY);
      break;
    case directions.LEFT:
      // TODO: Translate, rotate, and translate
      const leftCenterX = x + frogImg.width / 2;
      const leftCenterY = y + frogImg.height / 2;
      context.translate(leftCenterX, leftCenterY);
      context.rotate(-Math.PI / 2);
      context.translate(-leftCenterX, -leftCenterY);
      break;
    case directions.RIGHT:
      // TODO: Translate, rotate, and translate
      const rightCenterX = x + frogImg.width / 2;
      const rightCenterY = y + frogImg.height / 2;
      context.translate(rightCenterX, rightCenterY);
      context.rotate(Math.PI / 2);
      context.translate(-rightCenterX, -rightCenterY);
      break;
  }

  context.drawImage(frogImg, x, y);

  // Necessary so next call to drawFrog isn't rotated or translated
  context.resetTransform(1, 0, 0, 1, 0, 0);
}
