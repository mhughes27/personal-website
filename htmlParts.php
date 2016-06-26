<?php $thisPage = "htmlparts"; ?>


<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/class" href="teststyle3.css">
	<title>HTML Tags</title>
</head>

<body class="pagecontainer">
		<div class="leftcolumn">	
			<div class="lefttop">
				<h2>Matt Hughes</h2>
				
					<a href="https://twitter.com/mjhughes27"><img src="twitter-bird.png" style="width: 70px; height: 70px" alt="Twitter"></a>
					<a href="https://github.com/mhughes27"><img src="github.png" style="width: 70px; height: 70px" alt="GitHub"></a>
					<a href="https://www.linkedin.com/profile/guided?trk=uno-choose-ge-no-intent&dl=no"><img src="linked.jpg" style="width: 70px; height: 70px" alt="LinkedIn"></a>
				
			</div>
			<div class="leftbottom">
				<?php include("navigation.php");?>
			</div>
		</div>
		<div class="rightcolumn">
			<div class="rightText">


<h1>Parts of an HTML Document</h1>

<h4> &lthtml&gt Tag</h4>
	<p>There are three basic parts of an HTML document.  The &lthtml&gt tag signifies that the document will contain html code.  The entire document is contained between &lthtml&gt and &lt&#47html&gt</p>


<h4>&lthead&gt  Tag</h4>
	<p>The next part of the document contains the &lthead&gt tag.  The &lthead&gt tag contains information about the page but does not display on a web browser page.  This section usually contains the &lttitle&gt tag which displays the name of the page on the menu tab of a web browser.  This section can also contains the &ltlink&gt tag which links to a .css file that can provide style and formatting for a web page.  The end of this section is closed with a &lt&#47head&gt tag.</p>

<h4>&ltbody&gt Tag</h4>
	<p>The last section of a HTML document is the &ltbody&gt.  The content of the page is contained in this section.  There are many tags that can be used in this section.  &lth1&gt to &lth6&gt are headlines that decrease in font size from one to six.  The &ltp&gt is the start of a new paragraph.  Ordered lists can be created using &ltol&gt and unordered lists use &ltul&gt.  The elements within these lists are signified using &ltli&gt.  The &ltdiv&gt tag is used for a division in the document.  This is helpful when formatting and styling the page.  Tables can be created using &lttable&gt,  hyperlinks use &lta&gt tags, and images use &ltimg&gt.  There are countless other examples that can be viewed <a href="http://www.w3schools.com/tags/ref_byfunc.asp">here</a>.</p>


</body>
</html>