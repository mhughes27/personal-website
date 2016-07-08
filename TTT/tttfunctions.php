<?php
  
function whosTurn($eCount){
  if ($eCount % 2 == 1){
    return "X";
  }
  elseif($eCount % 2 == 0){
    return "O";
  }
}

function gameboard($board, $position, $turn){
    
  if ($board[$position]=="X"){
    echo "X";
  }
  elseif ($board[$position]=="O"){
    echo "O";
  }
  elseif ($board[$position]=="E"){
    $board[$position]=$turn;
    echo "<a href=ttt.php?board=" . $board . ">_</a>";
  }
}
?>




<!-- Check winner-->
<?php
function winner($board, $eCount){
  if (($board[0]=="X" && $board[1]=="X" && $board[2]=="X")||
    ($board[3]=="X" && $board[4]=="X" && $board[5]=="X")||
    ($board[6]=="X" && $board[7]=="X" && $board[8]=="X")||
    ($board[0]=="X" && $board[3]=="X" && $board[6]=="X")||
    ($board[1]=="X" && $board[4]=="X" && $board[7]=="X")||
    ($board[2]=="X" && $board[5]=="X" && $board[8]=="X")||
    ($board[0]=="X" && $board[4]=="X" && $board[8]=="X")||
    ($board[2]=="X" && $board[4]=="X" && $board[6]=="X")){
       return "X";
  }
  elseif (($board[0]=="O" && $board[1]=="O" && $board[2]=="O")||
      ($board[3]=="O" && $board[4]=="O" && $board[5]=="O")||
      ($board[6]=="O" && $board[7]=="O" && $board[8]=="O")||
      ($board[0]=="O" && $board[3]=="O" && $board[6]=="O")||
      ($board[1]=="O" && $board[4]=="O" && $board[7]=="O")||
      ($board[2]=="O" && $board[5]=="O" && $board[8]=="O")||
      ($board[0]=="O" && $board[4]=="O" && $board[8]=="O")||
      ($board[2]=="O" && $board[4]=="O" && $board[6]=="O")){
    return "O";
  }
  elseif ($eCount==0){
    return "DRAW";
  }
  else{
    return "none";
  }
}
?>



<?php
function playAgain($winner){
if ($winner == "X"||$winner == "O"||$winner=="DRAW") {
  return "PLAY AGAIN";
}
}
?>

<?php 
function xtally($winner, $xwins){
  if ($winner == "X"){
    return $xwins + 1;
  }
}
?>

<?php 
function otally($winner, $owins){
  if ($winner == "O"){
    return $owins + 1;
  }
}
?>

<?php 
function drawtally($winner, $draws){
  if ($winner == "DRAW"){
    return $draws + 1;
  }
}
?>



