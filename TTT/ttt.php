<?php include("tttfunctions.php"); ?>

<?php 
$board = $_GET["board"];
$eCount=substr_count($board,"E"); 
$turn= whosTurn($eCount); 
$winner = winner($board);
$playAgain = playAgain($winner);
?>

<!DOCTYPE html>
<html>
<head>
  <title>TIC TAC TOE</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1> <?php echo $turn; ?>'s Turn </h1>

<div class="container">
  <div class="column">
    <div class="square"> <?php gameboard($board, 0, $turn); ?> </div>
    <div class="square"> <?php gameboard($board, 3, $turn); ?> </div>
    <div class="square"> <?php gameboard($board, 6, $turn); ?> </div>
  </div>
  <div class="column">
    <div class="square"> <?php gameboard($board, 1, $turn); ?> </div>
    <div class="square"> <?php gameboard($board, 4, $turn); ?> </div>
    <div class="square"> <?php gameboard($board, 7, $turn); ?> </div>
  </div>
  <div class="column">
    <div class="square"> <?php gameboard($board, 2, $turn); ?> </div>
    <div class="square"> <?php gameboard($board, 5, $turn); ?> </div>
    <div class="square"> <?php gameboard($board, 8, $turn); ?> </div>
  </div>
</div>

<h1> The Winner is <?php echo $winner; ?> </h1>
<a href="ttt.php?board=EEEEEEEEE"><h1> <?php echo $playAgain; ?> </h1></a>
    
</body>
</html>
