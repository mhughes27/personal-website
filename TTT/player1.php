<?php include("tttlogic.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>TIC TAC TOE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<H1>Player 1: Choose a Spot</H1>

<div class="container">
  <div class="column">
    <span class="square" id="one"><a href="player2.php?choice1=1&player=1">1</a></span>
    <span class="square" id="four"><a href="player2.php?choice1=4&player=1">4</a></span>
    <span class="square" id="seven"><a href="player2.php?choice1=7&player=1">7</a></span>
  </div>
  <div class="column">
    <span class="square" id="two"><a href="player2.php?choice1=2&player=1">2</a></span>
    <span class="square" id="five"><a href="player2.php?choice1=5&player=1">5</a></span>
    <span class="square" id="eight"><a href="player2.php?choice1=8&player=1">8</a></span>
  </div>
  <div class="column">
    <span class="square" id="three"><a href="player2.php?choice1=3&player=1">3</a></span>
    <span class="square" id="six"><a href="player2.php?choice1=6&player=1">6</a></span>
    <span class="square" id="nine"><a href="player2.php?choices1=9&player=1">9</a></span>
  </div>
</div>

<p><?php print_r($_GET); ?></p>
<p><?php print_r($player1);?></p>
<p><?php print_r($_GET["player1"]);?></p>

<p><?php print_r($player2);?></p>
<p><?php print_r($_GET["player2"]);?></p>




</body>
</html>
