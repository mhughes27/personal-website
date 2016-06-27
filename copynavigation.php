<head>
	
	<title>Navigation</title>
	<link rel="stylesheet" type="text/class" href="styles.css">
</head>


<body>
<nav>
<div id="navigation">
	<ul>
		<li>Pages</li>
			<ul>
				<li<?php if ($thisPage=="home") echo "id=\"currentpage\""; ?>> <a href="index.php">Home</a></li>
				
				<li<?php if ($thisPage=="goals") echo "id=\"currentpage\""; ?>> <a href="Personal Goals.php">Goals</a></li>
				
				<li<?php if ($thisPage=="bucket") echo "id=\"currentpage\""; ?>> <a href="Bucket List.php">My Bucket List</a></li>

			</ul>

		<li>Articles</li>
			<ul>
				<li<?php if ($thisPage=="ai") echo "id=\"currentpage\""; ?>> <a href="AI article.php">The Future of Artificial Intelligence</a></li>
				<li<?php if ($thisPage=="theweb") echo "id=\"currentpage\""; ?>> <a href="The Web.php">The Web</a></li>
				<li<?php if ($thisPage=="paths") echo "id=\"currentpage\""; ?>> <a href="paths.php">Calling Paths</a></li>
				<li<?php if ($thisPage=="htmlparts") echo "id=\"currentpage\""; ?>> <a href="htmlParts.php">Parts of an HTML Document</a></li>
			</ul>
		<li>Projects</li>
			<ul>
				<li><a href="RPS/index.php">Rock, Paper, Scissors</a></li>
				<li><a href="TTT/index.php">TIC TAC TOE</a></li>
			</ul>
	</ul>
	<a href="index.php?theme=alternate"><img src="egg.png" style="width: 70px; height: 70px" alt="Switch Colors Scheme"></a>

</div>
</nav>
</body>
</html>

