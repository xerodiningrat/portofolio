<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snake Game</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-color: #222;
}

.game-container {
  position: relative;
  width: 500px;
  height: 500px;
  background-color: white;
  border: 2px solid #ccc;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

.snake {
  position: absolute;
  width: 20px;
  height: 20px;
  background-color: #007bff;
  left: 0;
  top: 0;
}

.food {
  position: absolute;
  width: 20px;
  height: 20px;
  background-color: #00cc66;
}
#snake {
      position: absolute;
      width: 20px;
      height: 20px;
      background-color: #333;
    }

    #food {
      position: absolute;
      width: 20px;
      height: 20px;
      background-color: #f00;
    }
</style>
<body>
  <div class="game-container">
    <div class="snake" id="snake"></div>
    <div class="food" id="food"></div>
  </div>
  <script>
    const snake = document.getElementById('snake');
const food = document.getElementById('food');

let snakeX = 0;
let snakeY = 0;
let foodX = 0;
let foodY = 0;

function getRandomPosition() {
  return Math.floor(Math.random() * 15) * 20;
}

function updateSnakePosition() {
  snake.style.left = snakeX + 'px';
  snake.style.top = snakeY + 'px';
}

function updateFoodPosition() {
  foodX = getRandomPosition();
  foodY = getRandomPosition();
  food.style.left = foodX + 'px';
  food.style.top = foodY + 'px';
}

function checkCollision() {
  if (snakeX === foodX && snakeY === foodY) {
    updateFoodPosition();
  }
}

document.addEventListener('keydown', (event) => {
  if (event.key === 'ArrowRight') {
    snakeX += 20;
  } else if (event.key === 'ArrowLeft') {
    snakeX -= 20;
  } else if (event.key === 'ArrowDown') {
    snakeY += 20;
  } else if (event.key === 'ArrowUp') {
    snakeY -= 20;
  }

  updateSnakePosition();
  checkCollision();
});

updateFoodPosition();

  </script>
</body>
</html>
