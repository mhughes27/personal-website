<?php newthoughts.php ?>

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
    <div class="square"><a href="sandbox2.php?0=X&1=E&2=E&3=E&4=E&5=E&6=E&7=E&8=E">_</a></div>
    <div class="square"><a href="sandbox2.php?0=E&1=E&2=E&3=X&4=E&5=E&6=E&7=E&8=E">_</a></div>
    <div class="square"><a href="sandbox2.php?0=E&1=E&2=E&3=E&4=E&5=E&6=X&7=E&8=E">_</a></div>
  </div>
  <div class="column">
    <div class="square"><a href="sandbox2.php?0=E&1=X&2=E&3=E&4=E&5=E&6=E&7=E&8=E">_</a></div>
    <div class="square"><a href="sandbox2.php?0=E&1=E&2=E&3=E&4=X&5=E&6=E&7=E&8=E">_</a></div>
    <div class="square"><a href="sandbox2.php?0=E&1=E&2=E&3=E&4=E&5=E&6=E&7=X&8=E">_</a></div>
  </div>
  <div class="column">
    <div class="square"><a href="sandbox2.php?0=E&1=E&2=X&3=E&4=E&5=E&6=E&7=E&8=E">_</a></div>
    <div class="square"><a href="sandbox2.php?0=E&1=E&2=E&3=E&4=E&5=X&6=E&7=E&8=E">_</a></div>
    <div class="square"><a href="sandbox2.php?0=E&1=E&2=E&3=E&4=E&5=E&6=E&7=E&8=X">_</a></div>
  </div>
</div>

<?php print_r($_GET);?>
  


</body>
</html>
