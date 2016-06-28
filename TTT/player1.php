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
    <span class="square" id="one"><a href="player2.php?choice1=1.php">1</a></span>
    <span class="square" id="four"><a href="player2.php?choice1=4">4</a></span>
    <span class="square" id="seven"><a href="player2.php?choice1=7">7</a></span>
  </div>
  <div class="column">
    <span class="square" id="two"><a href="player2.php?choice1=2">2</a></span>
    <span class="square" id="five"><a href="player2.php?choice1=5">5</a></span>
    <span class="square" id="eight"><a href="player2.php?choice1=8">8</a></span>
  </div>
  <div class="column">
    <span class="square" id="three"><a href="player2.php?choice1=3">3</a></span>
    <span class="square" id="six"><a href="player2.php?choice1=6">6</a></span>
    <span class="square" id="nine"><a href="player2.php?choices1=9">9</a></span>
  </div>
</div>

<p><?php print_r($_GET); ?></p>

</body>
</html>
