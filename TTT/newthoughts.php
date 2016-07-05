<?php

$position= $_GET["position"];

$board = "0=E&1=E&2=E&3=E&4=E&5=E&6=E&7=E&8=E";

function history($board){
	
	echo $board;
}

?>


<?php

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



$position= $_GET["position"];
$action=$_GET["action"];
$board=array(E,E,E,E,E,E,E,E,E);


function gameboard($board, $postion){
	if ($board[$position]=="E"){
		echo ;
	}
	elseif ($board[$position]=="X"){
		echo "X";
	}
	elseif ($board[$position]=="O") {
		echo "O";
	}
}
