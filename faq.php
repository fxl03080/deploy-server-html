<?php
// Authors: David Conde, Wellington Newton, Kyle Justice, Frank Landry
// Version: 1.0
// Date: 02/20/2015
// Start session
session_start();
?>
<!-- Set up the web page -->
<html lang="en"> 
<title> Vermont Tech | Software Downloads </title>
<!-- Set up the css -->
<link rel="stylesheet" type="text/css" href="contactCSS.css"/>
<!-- Set up the header and navigation -->
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<!-- Set up the divisions -->
<div class="container">
<!-- CONTAINER START -->
	<div class="content">
		<!-- BODY START -->
		<center>
			<div id="title1" onmousedown="event.preventDefault()" oncontextmenu="return false;">
				FAQs - Free Downloads
			</div>
		</center>
		<!-- Set up the headers as questions and p tags as answers -->
		<h4 style="padding-top: 12px;"> How can I download software for a class?</h4>
		<p style="padding: 0; margin: 0; display: inline;">First you select course, then you would be giving the list of all the software(s) available for that course provided by your instructor</p>
		<br />
		<br />
		<br />
		<h4>What if the software I need is not availible?</h4>
		<p style="padding: 0; margin: 0; display: inline;">Contact your professor and let him know of this problem</p>
		<br />
		<br />
		<br />
		<h4>Are there limits on how many times I can download each software?</h4>
		<p style="padding: 0; margin: 0; display: inline;">No, there are no limits, you can download each product as many time as you need to</p>
		<br />
		<br />
		<br />
		<h4>Any charges for software I download from here?</h4>
		<p style="padding: 0; margin: 0; display: inline;">No, all software are free, they are all open source</p>
		<br />
		<br />
		<br />
		<br />
		<br />
		<!-- BODY ENDS -->
	</div>
	<!-- CONTENTS END -->
</div>
<!-- Set up the footer -->
<img class="zindex" src="footer.png">
<!-- FOOTER -->
	<?php include 'footer.php'; ?>	
</html>

