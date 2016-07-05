<?php
$board = array(E,E,E,E,E,E,E,E,E);
function gameboard($board, $postion){
	
	if ($board[$position]=="E"){
		echo '<a href="sandbox.php?board='.$board.'">_</a>';
	}
	elseif ($board[$position]=="X"){
		echo "X";
	}
	elseif ($board[$position]=="O") {
		echo "O";
	}
}

?>

