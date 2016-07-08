<?php
	
	// claculates the numner of e's


// determines the turn

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
			echo "<a href=indexnewthoughts.php?board=" . $board . ">#</a>";
		}
	}
?>

<!-- Check to see if X wins -->
<?php
	if (($board[0]=="X" && $board[1]=="X" && $board[2]=="X")||
		($board[3]=="X" && $board[4]=="X" && $board[5]=="X")||
		($board[6]=="X" && $board[7]=="X" && $board[8]=="X")||
		($board[0]=="X" && $board[3]=="X" && $board[6]=="X")||
		($board[1]=="X" && $board[4]=="X" && $board[7]=="X")||
		($board[2]=="X" && $board[5]=="X" && $board[8]=="X")||
		($board[0]=="X" && $board[4]=="X" && $board[8]=="X")||
		($board[2]=="X" && $board[4]=="X" && $board[6]=="X")){
			$winner = "X"; return "X Wins";
		}
?>

<!-- Check to see if O wins -->
<?php
	if (($board[0]=="O" && $board[1]=="O" && $board[2]=="O")||
		($board[3]=="O" && $board[4]=="O" && $board[5]=="O")||
		($board[6]=="O" && $board[7]=="O" && $board[8]=="O")||
		($board[0]=="O" && $board[3]=="O" && $board[6]=="O")||
		($board[1]=="O" && $board[4]=="O" && $board[7]=="O")||
		($board[2]=="O" && $board[5]=="O" && $board[8]=="O")||
		($board[0]=="O" && $board[4]=="O" && $board[8]=="O")||
		($board[2]=="O" && $board[4]=="O" && $board[6]=="O")){
			$winner = "O"; return "O Wins";
		}
?>
<?php 
	if($ecount ==0){
		$winner = D
	}
