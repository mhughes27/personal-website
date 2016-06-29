<?php include("tttlogic.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>TIC TAC TOE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<H1>Player 2: Choose a Spot</H1>

<div class="container">
  <div class="column">
    <span class="square" id="one"><a href="player1.php?choice2=1&player=2">1</a></span>
    <span class="square" id="four"><a href="player1.php?choice2=4&player=2">4</a></span>
    <span class="square" id="seven"><a href="player1.php?choice2=7&player=2">7</a></span>
  </div>
  <div class="column">
    <span class="square" id="two"><a href="player1.php?choice2=2&player=2">2</a></span>
    <span class="square" id="five"><a href="player1.php?choice2=5&player=2">5</a></span>
    <span class="square" id="eight"><a href="player1.php?choice2=8&player=2">8</a></span>
  </div>
  <div class="column">
    <span class="square" id="three"><a href="player1.php?choice2=3&player=2">3</a></span>
    <span class="square" id="six"><a href="player1.php?choice2=6&player=2">6</a></span>
    <span class="square" id="nine"><a href="player1.php?choice2=9&player=2">9</a></span>
  </div>
</div>

<p><?php print_r($_GET); ?></p>
<p><?php print_r($player1);?></p>
<p><?php print_r($_GET["player1"]);?></p>

<p><?php print_r($player2);?></p>
<p><?php print_r($_GET["player2"]);?></p>

</body>
</html>
