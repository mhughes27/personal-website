<?php
session_start();
?>

<?php include("vcompfunctions.php"); ?>






<?php 
$board = $_GET["board"];
$eCount=substr_count($board,"E"); 
$turn= whosTurn($eCount); 
$winner = winner($board, $eCount);
$playAgain = playAgain($winner);

$xwins=$_SESSION['xwin'];

$owins=$_SESSION['owin'];

$draws=$_SESSION['draws'];


?>

<?php 
if($winner !=="none"){

$store = "history.txt";
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
<a href="vcomp.php?board=EEEEEEEEE"><h1> <?php echo $playAgain; ?> </h1></a>

<div>    
<h1>X Tally: <?php echo $xwins; ?></h1>

<h1>Computer Tally: <?php echo $owins; ?></h1>

<h1>Draw Tally: <?php echo $draws; ?></h1>
</div>

</body>
</html>
