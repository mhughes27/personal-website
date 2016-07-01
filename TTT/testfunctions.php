<?php


$position= $_GET["position"];
$action=$_GET["action"];
$board=array(E,E,E,E,E,E,E,E,E);


function gameboard($board, $postion){
	if ($board[$position]=="E"){
		echo '<a href="sandbox.php?game='.$board.'&position=0&action=X">#</a>';
	}
	elseif ($board[$position]=="X"){
		echo "X";
	}
	elseif ($board[$position]=="O") {
		echo "O";
	}
}

?>

