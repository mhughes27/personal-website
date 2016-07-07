<?php
$player1 = "X";
$player2 = "O";

$currentboard = implode($_GET);

$links1 = array(0=>"&0=X",1=>"&1=X",2=>"&2=X",3=>"&3=X",4=>"&4=X",5=>"&5=X",6=>"&6=X",7=>"&7=X",8=>"&8=X");

$links2 = array(0=>"&0=O",1=>"&1=O",2=>"&2=O",3=>"&3=O",4=>"&4=O",5=>"&5=O",6=>"&6=O",7=>"&7=O",8=>"&8=O");


<?php 
function gameboard($_GET){
	if(($_GET[0]=='X')||($_GET[0]=='O')){
	}	
	else{
		echo "?".$_SERVER['QUERY_STRING']; echo $links[0];
	}
} 
?>




if (end($_GET)=="X"){
	$links = $links2;
}
elseif (end($_GET)=="O") {
	$links=$links1;
}
else{
	$links=$links1;
}

$xwin=array(
		array(0=>"X",1=>"X",2=>"X"),
		array(3=>"X",4=>"X",5=>"X"),
		array(6=>"X",7=>"X",8=>"X"),
		array(0=>"X",3=>"X",6=>"X"),
		array(1=>"X",4=>"X",7=>"X"),
		array(2=>"X",5=>"X",8=>"X"),
		array(0=>"X",4=>"X",8=>"X"),
		array(2=>"X",4=>"X",6=>"X"),	
	);

$owin=array(
		array(0=>"O",1=>"O",2=>"O"),
		array(3=>"O",4=>"O",5=>"O"),
		array(6=>"O",7=>"O",8=>"O"),
		array(0=>"O",3=>"O",6=>"O"),
		array(1=>"O",4=>"O",7=>"O"),
		array(2=>"O",5=>"O",8=>"O"),
		array(0=>"O",4=>"O",8=>"O"),
		array(2=>"O",4=>"O",6=>"O"),	
	);

function winnercheck($GET, $xwin, $owin){
	$GET=$G_GET;
	$winner="";
	foreach ($xwin as $winningarray){
		if (array_intersect_assoc($GET, $winningarray) == $winningarray){
			if ($winner === ""){
				$winner = "Player 1 Wins";
			}		
		}
	}
	foreach($owin as $winningarray){
		if (array_intersect_assoc($GET, $winningarray) == $winningarray){
			if ($winner === ""){
				$winner = "Player 2 Wins";
			}		
		}
	}
	return $winner;
}


?>

