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
    <div class="square" id="zero"><a href="player2.php?player=1&choice1=0">0</a></div>
    <div class="square" id="three"><a href="player2.php?player=1&choice1=3">3</a></div>
    <div class="square" id="six"><a href="player2.php?player=1&choice1=6">6</a></div>
  </div>
  <div class="column">
    <div class="square" id="one"><a href="player2.php?player=1&choice1=1">1</a></div>
    <div class="square" id="four"><a href="player2.php?player=1&choice1=4">4</a></div>
    <div class="square" id="seven"><a href="player2.php?player=1&choice1=7">7</a></div>
  </div>
  <div class="column">
    <div class="square" id="two"><a href="player2.php?player=1&choice1=2">2</a></div>
    <div class="square" id="five"><a href="player2.php?player=1&choice1=5">5</a></div>
    <div class="square" id="eight"><a href="player2.php?player=1&choice1=8">8</a></div>
  </div>
</div>

<p>Available Moves:<?php print_r($moves);?><p>

<p>Full array:<?php print_r($_GET); ?></p>
<p>Player1<?php print_r($player1);?></p>
<p>Player One<?php print_r($_GET["player1"]);?></p>

<p>Player2<?php print_r($player2);?></p>
<p>Player Two<?php print_r($_GET["player2"]);?></p>



</body>
</html>
