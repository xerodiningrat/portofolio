<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="beranda/css/game.css">
  <title>Number Guessing Game</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #222;
  }
  
  .container {
    text-align: center;
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }
  
  button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #0056b3;
  }
  
  p#message {
    margin-top: 10px;
    font-weight: bold;
  }
  
</style>
<body>
  <div class="container">
    <h1>Number Guessing Game</h1>
    <p>Guess a number between 1 and 100:</p>
    <input type="number" id="userGuess">
    <button id="checkButton">Check</button>
    <p id="message"></p>
  </div>
  <script >
    const randomNumber = Math.floor(Math.random() * 100) + 1;
const userGuessInput = document.getElementById('userGuess');
const checkButton = document.getElementById('checkButton');
const message = document.getElementById('message');

checkButton.addEventListener('click', function () {
  const userGuess = parseInt(userGuessInput.value);

  if (isNaN(userGuess) || userGuess < 1 || userGuess > 100) {
    message.textContent = 'Please enter a valid number between 1 and 100.';
  } else if (userGuess === randomNumber) {
    message.textContent = 'Congratulations! You guessed the correct number!';
  } else if (userGuess < randomNumber) {
    message.textContent = 'Try higher!';
  } else if (userGuess > randomNumber) {
    message.textContent = 'Try lower!';
  }
});
  </script>
</body>
</html>
