<?php include("tttfunctions.php"); ?>

<?php 
$board = $_GET["board"];
$eCount=substr_count($board,"E"); 
$turn= whosTurn($eCount); 
$winner = winner($board, $eCount);
$playAgain = playAgain($winner);

$xwins=0;
$xwins=xtally($winner, $xwins);
$owins=0;
$owins=otally($winner, $owins);
$draws=0;
$draws=drawtally($winner, $draws);

?>

<?php 
if($winner !=="none"){

$store = "gamehistory.txt";
$file_connection=fopen($store, 'a') or die("Error opening file!");

fwrite($file_connection, "\n");
fwrite($file_connection, $board);
fclose($file_connection);
}
?>




<!DOCTYPE html>
<html>
<head>
  <title>TIC TAC TOE</title>
  <link rel="stylesheet" type="text/css" href="layoutstyle.css">
</head>
<body>



<div class="top">
  <div class="top__arrow"><---</div>
  <div class="top__menu">MENU</div>
</div>
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
<div class="bottom">
  <div class="score">
    <div class="score__player">Player 1</div>
    <div class="score__numeral">0</div>
  </div>
  <div class="score">
    <div class="score__player">Player 2</div>
    <div class="score__numeral">0</div>
  </div>
  <div class="score">
    <div class="score__player">Draw</div>
    <div class="score__numeral">0</div>
  </div>
</div>


</body>
</html>
