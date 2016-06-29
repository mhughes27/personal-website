<?php
$player1 = array();
array_push($player1, $_GET["choice1"]);
?>

<?php
$player2 = array();
array_push($player2, $_GET["choice2"]);
?>



<!-- Check for a winner: win if either array conains
(1, 2, 3) (4, 5, 6) (7, 8, 9)
(1, 4, 7)  (2, 5, 8) (3, 6, 9)
(1, 5, 9) (3, 5, 7)-->
<!-- Function to see if player 1 wins -->
<php?
function checkif1wins(){
	
	if (array_intersect($player1, array(1, 2, 3)) == array(1, 2, 3)){
		return "Player 1 Wins";
	}

	elseif (array_intersect($player1, array(4, 5, 6)) == array(4, 5, 6)){
		return "Player 1 Wins";
	}

	elseif (array_intersect($player1, array(7, 8, 9)) == array(7, 8, 9)){
		return "Player 1 Wins";
	}

	elseif (array_intersect($player1, array(1, 4, 7)) == array(1, 4, 7)){
		return "Player 1 Wins";
	}

	elseif (array_intersect($player1, array(2, 5, 8)) == array(2, 5, 8)){
		return "Player 1 Wins";
	}
	
	elseif (array_intersect($player1, array(3, 6, 9)) == array(3, 6, 9)){
		return "Player 1 Wins";
	}
	
	elseif (array_intersect($player1, array(1, 5, 9)) == array(1, 5, 9)){
		return "Player 1 Wins";
	}
	
	elseif (array_intersect($player1, array(3, 5, 7)) == array(3, 5, 7)){
		return "Player 1 Wins";
	}

	else{
		return "Player 2's Turn";
	}
}
?>


<php?
function checkif2wins(){
	
	if (array_intersect($player2, array(1, 2, 3)) == array(1, 2, 3)){
		return "Player 2 Wins";
	}

	elseif (array_intersect($player2, array(4, 5, 6)) == array(4, 5, 6)){
		return "Player 2 Wins";
	}

	elseif (array_intersect($player2, array(7, 8, 9)) == array(7, 8, 9)){
		return "Player 2 Wins";
	}

	elseif (array_intersect($player2, array(1, 4, 7)) == array(1, 4, 7)){
		return "Player 2 Wins";
	}

	elseif (array_intersect($player2, array(2, 5, 8)) == array(2, 5, 8)){
		return "Player 2 Wins";
	}
	
	elseif (array_intersect($player2, array(3, 6, 9)) == array(3, 6, 9)){
		return "Player 2 Wins";
	}
	
	elseif (array_intersect($player2, array(1, 5, 9)) == array(1, 5, 9)){
		return "Player 2 Wins";
	}
	
	elseif (array_intersect($player2, array(3, 5, 7)) == array(3, 5, 7)){
		return "Player 2 Wins";
	}

	else{
		return "Player 1's Turn";
	}
}
?>
