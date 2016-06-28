<?php
$player2 = array();
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