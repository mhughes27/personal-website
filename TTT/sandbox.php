<?php include("testfunctions.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>TIC TAC TOE</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="container">
  <div class="column">
    <a href="<?php if(($_GET[0]=='X')||($_GET[0]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $move[0];}; ?>"><div class="square"><?php echo $_GET[0]; ?></div></a>
    <a href="<?php if(($_GET[3]=='X')||($_GET[3]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $move[3];}; ?>"><div class="square"><?php echo $_GET[3]; ?></div></a>
    <a href="<?php if(($_GET[6]=='X')||($_GET[6]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $move[6];}; ?>"><div class="square"><?php echo $_GET[6]; ?></div></a>
  </div>
  <div class="column">
    <a href="<?php if(($_GET[1]=='X')||($_GET[1]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $move[1];}; ?>"><div class="square"><?php echo $_GET[1]; ?></div></a>
    <a href="<?php if(($_GET[4]=='X')||($_GET[4]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $move[4];}; ?>"><div class="square"><?php echo $_GET[4]; ?></div></a>
    <a href="<?php if(($_GET[7]=='X')||($_GET[7]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $move[7];}; ?>"><div class="square"><?php echo $_GET[7]; ?></div></a>
  </div>
  <div class="column">
    <a href="<?php if(($_GET[2]=='X')||($_GET[2]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $move[2];}; ?>"><div class="square"><?php echo $_GET[2]; ?></div></a>
    <a href="<?php if(($_GET[5]=='X')||($_GET[5]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $move[5];}; ?>"><div class="square"><?php echo $_GET[5]; ?></div></a>
    <a href="<?php if(($_GET[8]=='X')||($_GET[8]=='O')){}else{echo "?".$_SERVER['QUERY_STRING']; echo $move[8];}; ?>"><div class="square"><?php echo $_GET[8]; ?></div></a>
  </div>
</div>
  




</body>
</html>
