<?php
$player1 = "X";
$player2 = "O";

$currentboard = implode($_GET);

$x = array(0=>"&0=X",1=>"&1=X",2=>"&2=X",3=>"&3=X",4=>"&4=X",5=>"&5=X",6=>"&6=X",7=>"&7=X",8=>"&8=X");

$o = array(0=>"&0=O",1=>"&1=O",2=>"&2=O",3=>"&3=O",4=>"&4=O",5=>"&5=O",6=>"&6=O",7=>"&7=O",8=>"&8=O");


if (end($_GET)=="X"){
	$move = $o;
}
elseif (end($_GET)=="O") {
	$move=$x;
}
else{
	$move=$x;
}


?>

