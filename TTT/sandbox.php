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
    <div class="square"><?php gameboard(X,0);?>0</div>
    <div class="square"><?php gameboard(X,3);?>3</div>
    <div class="square"><?php gameboard(X,6);?>6</div>
  </div>
  <div class="column">
    <div class="square"><?php gameboard(X,1);?>1</div>
    <div class="square"><?php gameboard(X,4);?>4</div>
    <div class="square"><?php gameboard(X,7);?>7</div>
  </div>
  <div class="column">
    <div class="square"><?php gameboard(X,2);?>2</div>
    <div class="square"><?php gameboard(X,5);?>5</div>
    <div class="square"><?php gameboard(X,8);?>8</div>
  </div>
</div>
  


</body>
</html>
