<?php $thisPage = "htmlparts"; ?>
<?php $title = "HTML Tags"; ?>


<?php include("topshell.php"); ?>
		<h1>Parts of an HTML Document</h1>

		<h4> &lthtml&gt Tag</h4>
			<p>There are three basic parts of an HTML document.  The &lthtml&gt tag signifies that the document will contain html code.  The entire document is contained between &lthtml&gt and &lt&#47html&gt</p>


		<h4>&lthead&gt  Tag</h4>
			<p>The next part of the document contains the &lthead&gt tag.  The &lthead&gt tag contains information about the page but does not display on a web browser page.  This section usually contains the &lttitle&gt tag which displays the name of the page on the menu tab of a web browser.  This section can also contains the &ltlink&gt tag which links to a .css file that can provide style and formatting for a web page.  The end of this section is closed with a &lt&#47head&gt tag.</p>

		<h4>&ltbody&gt Tag</h4>
			<p>The last section of a HTML document is the &ltbody&gt.  The content of the page is contained in this section.  There are many tags that can be used in this section.  &lth1&gt to &lth6&gt are headlines that decrease in font size from one to six.  The &ltp&gt is the start of a new paragraph.  Ordered lists can be created using &ltol&gt and unordered lists use &ltul&gt.  The elements within these lists are signified using &ltli&gt.  The &ltdiv&gt tag is used for a division in the document.  This is helpful when formatting and styling the page.  Tables can be created using &lttable&gt,  hyperlinks use &lta&gt tags, and images use &ltimg&gt.  There are countless other examples that can be viewed <a href="http://www.w3schools.com/tags/ref_byfunc.asp">here</a>.</p>
		</div>
	</div>

<?php include("bottomshell.php"); ?>
