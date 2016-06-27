<?php $thisPage = "paths"; ?>


<?php include("topshell.php"); ?>
		<h1>Calling Paths</h1>

		<h4> Links</h4>
		<p>Given the following file structure for:</p> 
		<p>personal_website/</p>
		<ul>
			<li>index.php</li>
			<li>goals.php</li>
			<li>navigation.php</li>
			<li>pets/</li>
				<ul>
					<li>fido.php</li>
					<li>cat.php</li>
				</ul>
			<li>articles/</li>
				<ul>
					<li>about_facebook.php</li>
					<li>how_the_web_works.php</li>
				</ul>
		</ul>

		<p>Here is how the links behave given the following scenarios linked from <strong>index.php</strong>:
		</p>

		<p><strong>&lta href=&quotgoals.php&quot&gtGoals&lt&#47a&gt</strong>
		The page displays properly.  This is the correct way to link pages in the same directory.  goals.php and index.php are equals in the file hierarchy structure.</p>

		<p><strong>&lta href=&quot&#47goals.php&quot&gtGoals&lt&#47a&gt</strong>
		This page does not display properly.  You get an error message saying that the requested URL cannot be found on the server.  This link would work if the goals.php file was downstream from the index.php file. </p>


		<p><strong>&lta href=&quot..&#47goals.php&quot&gtGoals&lt&#47a&gt</strong>
		This page does not display properly either.  You get the same error message saying that the requested URL cannot be found on the server.  This link would work if the goals.php file was upstream from the index.php file.
		</p>

		<p><strong>&lta href=&quothttp:&#47&#47localhost:8888&#47personal_website&#47goals.php&quot&gtGoals&lt&#47a&gt</strong>
		This page does display properly, but it would not be available to anyone not using your computer.  This provides the page using a local server.  You can use it to see if your website is looking and functioning the way it should, but others will not be able to see it even after you upload your files to the web using a FTP like FileZilla.
		</p>

		<p>Here is how the links behave given the following scenarios linked from <strong>pets&#47cat.php</strong>:
		</p>

		<p><strong>&lta href=&quotgoals.php&quot&gtGoals&lt&#47a&gt</strong>
		This page does not display properly.  Goals.php is located upstream from cats.php which is located in a folder named &quotpets&quot. 
		</p>

		<p><strong>&lta href=&quot&#47goals.php&quot&gtGoals&lt&#47a&gt</strong>
		This page does not display properly.  You get an error message saying that the requested URL cannot be found on the server.  This link would work if the goals.php file was downstream from the pets&#47cat.php file.  
		</p>

		<p><strong>&lta href=&quot..&#47goals.php&quot&gtGoals&lt&#47a&gt</strong>
		This page does display properly.  This is the ways to correctly link a page that is upstream from the one you are currently on.   
		</p>

		<p><strong>&lta href=&quothttp:&#47&#47localhost:8888&#47personal_website&#47goals.php&quot&gtGoals&lt&#47a&gt</strong>
		This page does display properly, but it would not be available to anyone not using your computer.  This provides the page using a local server.  You can use it to see if your website is looking and functioning the way it should, but others will not be able to see it even after you upload your files to the web using a FTP like FileZilla.
		</p>

		<h4>Includes</h4>
		<p>Here is how the include() would behave given the following scenarios linked from <strong>index.php</strong>:
		</p>

		<p><strong>&lt?php include(&quotnavigation.php&quot); ?&gt</strong>
		The navigation displays correctly.  index.php and navigation.php are in the same directory.  They are on the same level.
		</p>

		<p><strong>&lt?php include(&quot&#47navigation.php&quot); ?&gt</strong>
		The navigation does not display correctly.  This would work if navigation.php was downstream from index.php.  That how ever is not the case.
		</p>

		<p><strong>&lt?php include(&quot..&#47navigation.php&quot); ?&gt</strong>
		The navigation does not display correctly.  This would work if navigation.php was upstream from index.php
		</p>

		<p>Here is how the include() would behave given the following scenarios linked from <strong>articles&#47how_the_web_works.php</strong>:
		</p>

		<p><strong>&lt?php include(&quotnavigation.php&quot); ?&gt</strong>
		The navigation does not display correctly.  navigation.php and  articles&#47how_the_web_works.php are not on the same level.   how_the_web_works.php is located in a folder downstream from navigation.php 
		</p>

		<p><strong>&lt?php include(&quot&#47navigation.php&quot); ?&gt</strong>
		The navigation does not display correctly.  navigation.php is not downstream from articles&#47how_the_web_works.php.  </p>

		<p><strong>&lt?php include(&quot..&#47navigation.php&quot); ?&gt</strong>
		The navigation displays properly.  This is the correct way to include something that is upstream from where your current page is located.
		</p>
		</div>
	</div>
<?php include("bottomshell.php"); ?>