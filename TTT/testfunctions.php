<?php
$board = array("","","","","","","","","",);
function gameboard($board, $postion){
	
	if ($board[$position]==""){
		echo '<a href="sandbox.php">#</a>';
	}
	elseif ($board[$position]=="X"){
		echo "X";
	}
	elseif ($board[$position]=="O") {
		echo "O";
	}
}

?>

