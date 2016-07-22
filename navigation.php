

<nav>
<div class="navigation">
	
		<h4>Pages</h4>
			<ul class="unList navLinks">
				<li<?php if ($thisPage=="home") echo "id=\"currentpage\""; ?>> <a href="index.php">Home</a></li>
				
				<li<?php if ($thisPage=="goals") echo "id=\"currentpage\""; ?>> <a href="Personal Goals.php">Goals</a></li>
				
				<li<?php if ($thisPage=="bucket") echo "id=\"currentpage\""; ?>> <a href="Bucket List.php">My Bucket List</a></li>

			</ul>

		<h4>Articles</h4>
			<ul class="unList navLinks">
				<li<?php if ($thisPage=="ai") echo "id=\"currentpage\""; ?>> <a href="AI article.php">The Future of Artificial Intelligence</a></li>
				<li<?php if ($thisPage=="theweb") echo "id=\"currentpage\""; ?>> <a href="The Web.php">The Web</a></li>
				<li<?php if ($thisPage=="paths") echo "id=\"currentpage\""; ?>> <a href="paths.php">Calling Paths</a></li>
				<li<?php if ($thisPage=="htmlparts") echo "id=\"currentpage\""; ?>> <a href="htmlParts.php">Parts of an HTML Document</a></li>
				<li<?php if ($thisPage=="tttprocess") echo "id=\"currentpage\""; ?>> <a href="TTTprocess.php">Designing TIC TAC TOE</a></li>
				<li<?php if ($thisPage=="dictionary") echo "id=\"currentpage\""; ?>> <a href="dictionary.php">Personal Dictionary</a></li>

			</ul>
		<h4>Projects</h4>
			<ul class="unList">
				<li><a href="RPS/index.php">Rock, Paper, Scissors</a></li>
				<li><a href="TTT/ttt.php?board=EEEEEEEEE">TIC TAC TOE</a></li>
			</ul>
	
	<a href="index.php?theme=alternate"><img src="egg.png" style="width: 70px; height: 70px" alt="Switch Colors Scheme"></a>

</div>
</nav>

