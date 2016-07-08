<?php include("newthoughts.php"); ?>

<?php 

$turn= whosTurn($eCount); 
$winner="none"; 

$board = $_GET["board"];
$eCount=substr_count($board,"E"); 



?>

<!DOCTYPE html>
<html>
<head>
	<title>TIC TAC TOE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

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

    
</body>
</html>
