

<!DOCTYPE html>
<html>
<head>
	<title>Navigation</title>
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
		</ul>

	<li>My Profiles</li>
		<ul>
			<li><a href="https://twitter.com">Twitter</a></li>
			<li><a href="https://github.com/mhughes27">GitHub</a></li>
			<li><a href="https://www.linkedin.com/profile/guided?trk=uno-choose-ge-no-intent&dl=no">LinkedIn</a></li>
		</ul>
</ul>
</div>
</nav>
</body>
</html>

