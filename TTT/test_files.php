<?php include("tttlogic.php"); ?>

<?php
echo "\nTesting the intersection fuction.\n";
if (checkif1wins(array(1, 2, 5, 3),array(1, 2, 3)) == "Player 1 Wins") {
  echo "Success!";
}
else{
  echo "Failed!";
}