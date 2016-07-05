<?php include("testfunctions.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>TIC TAC TOE</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<H1>TIC TAC TOE</H1>

<div class="container">
  <div class="column">
    <div class="square"><?php gameboard(0,X);?>0</div>
    <div class="square"><?php gameboard(3,X);?>3</div>
    <div class="square"><?php gameboard(6,X);?>6</div>
  </div>
  <div class="column">
    <div class="square"><?php gameboard(1,X);?>1</div>
    <div class="square"><?php gameboard(4,X);?>4</div>
    <div class="square"><?php gameboard(7,X);?>7</div>
  </div>
  <div class="column">
    <div class="square"><?php gameboard(2,X);?>2</div>
    <div class="square"><?php gameboard(5,X);?>5</div>
    <div class="square"><?php gameboard(8,X);?>8</div>
  </div>
</div>
  


</body>
</html>
