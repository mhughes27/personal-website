<?php include("tttfunctions.php") ?>


<?php
echo "\nTesting the whosTurn function.\n";
if (whosTurn(8) == "O") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";
?>
<?php
echo "\nTesting the whosTurn function.\n";
if (whosTurn(5) == "X") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";
?>

<?php
echo "\nTesting the winner function.\n";
$board="XOOOXEXEX";
$eCount=2;
if (winner($board, $eCount) == "X") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";
?>


<?php
echo "\nTesting the winner function.\n";
$board="XEOXOEOEX";
$eCount=3;
if (winner($board, $eCount) == "O") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";
?>

<?php
echo "\nTesting the winner function.\n";
$board="XXOOOXXOX";
$eCount=0;
if (winner($board, $eCount) == "DRAW") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";
?>