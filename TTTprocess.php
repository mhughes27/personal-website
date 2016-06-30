<?php $thisPage = "tttprocess"; ?>
<?php $title = "TIC TAC TOE Process"; ?>

<?php include("topshell.php"); ?>

<h2>Designing TIC TAC TOE</h2>

<p>The rules of TIC TAC TOE are simple.  Two players take turns placing x’s and o’s respectively in a 3 X 3 grid until one player gets three in a row, or there are no more moves remaining.  Most of us have been playing the game since we were five years old.  Playing the game takes most less than a minute.</p>
<img src="gamePlayR.jpg">
<p>Designing and writing the code for the game takes considerable more time and effort.  As with any project, it is imperative to start with a solid plan.  For this project, the first issue is keeping track of whose turn it is to play.  The plan is to use query string parameters to toggle between Player 1 and Player 2.</p>
<p>Another challenge is to keep track of the remaining moves.  Every game starts with nine possible moves and decreases by one after each player completes a turn.  The plan is to use array(0, 1, 2, 3, 4, 5, 6, 7, 8)  and when a player makes a choice that number is removed from the array.  A player will not be able to chose a element to contained in the array.</p>
<p>The game board will need to update after a player has placed an x or an o.  I have not totally figured out how to accomplish this as of this writing.</p>
<p>Each player’s moves will need to be pushed into an array.  This will will be used after each turn to determine if there is a winner.  I will check to see if the intersection of a player’s array and a winning array is equal to the winning array.  There are eight winning arrays. </p>
<img src="pageViewsR.jpg">
<?php include("bottomshell.php"); ?>
