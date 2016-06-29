<?php 
$moves = array(0, 1, 2, 3, 4, 5, 6, 7, 8);
		unset($moves[$_GET["move"]]);
			print_r($moves); 
?>


<p>Function:<?php remainingOutcomes($_GET["move"]);?></p>



<?php 
	function remainingMoves(){
$moves = array(0, 1, 2, 3, 4, 5, 6, 7, 8);
		unset($moves[$_GET["move"]]);
		return $moves;
}
?>


<p>Function:<?php remainingOutcomes();?></p>
