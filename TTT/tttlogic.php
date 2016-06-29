<!-- array of player1 moves not currently working -->
<?php
$player1 = array();
array_push($player1, $_GET["choice1"]);
?>

<!-- array of player2 moves  not currently working -->
<?php
$player2 = array();
array_push($player2, $_GET["choice2"]);
?>

<!-- available moves -->

<?php 
$moves = array(0, 1, 2, 3, 4, 5, 6, 7, 8);
		unset($moves[$_GET["move"]]);
			print_r($moves); 
?>




// <!-- Function to see if player 1 wins -->
<php?
function checkif1wins(){
	
	if (array_intersect($player1, array(0, 1, 2)) == array(0, 1, 2)){
		return "Player 1 Wins";
	}

	elseif (array_intersect($player1, array(3, 4, 5)) == array(3, 4, 5)){
		return "Player 1 Wins";
	}

	elseif (array_intersect($player1, array(6, 7, 8)) == array(6, 7, 8)){
		return "Player 1 Wins";
	}

	elseif (array_intersect($player1, array(0, 3, 6,)) == array(0, 3, 6)){
		return "Player 1 Wins";
	}

	elseif (array_intersect($player1, array(1, 4, 7)) == array(1, 4, 7)){
		return "Player 1 Wins";
	}

	elseif (array_intersect($player1, array(2, 5, 8)) == array(2, 5, 8)){
		return "Player 1 Wins";
	}
	
	elseif (array_intersect($player1, array(0, 4, 8)) == array(0, 4, 8)){
		return "Player 1 Wins";
	}
	
	elseif (array_intersect($player1, array(2, 4, 6)) == array(2, 4, 6)){
		return "Player 1 Wins";
	}

	else{
		return "Player 2's Turn";
	}
}
?>


<php?
function checkif2wins(){
	
	if (array_intersect($player1, array(0, 1, 2)) == array(0, 1, 2)){
		return "Player 2 Wins";
	}

	elseif (array_intersect($player1, array(3, 4, 5)) == array(3, 4, 5)){
		return "Player 2 Wins";
	}

	elseif (array_intersect($player1, array(6, 7, 8)) == array(6, 7, 8)){
		return "Player 2 Wins";
	}

	elseif (array_intersect($player1, array(0, 3, 6,)) == array(0, 3, 6)){
		return "Player 2 Wins";
	}

	elseif (array_intersect($player1, array(1, 4, 7)) == array(1, 4, 7)){
		return "Player 2 Wins";
	}

	elseif (array_intersect($player1, array(2, 5, 8)) == array(2, 5, 8)){
		return "Player 2 Wins";
	}
	
	elseif (array_intersect($player1, array(0, 4, 8)) == array(0, 4, 8)){
		return "Player 2 Wins";
	}
	
	elseif (array_intersect($player1, array(2, 4, 6)) == array(2, 4, 6)){
		return "Player 2 Wins";
	}

	else{
		return "Player 1's Turn";
	}
}
?>
