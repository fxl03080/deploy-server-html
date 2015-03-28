<?php 
// Authors: Kyle Justice, Wellington Newton, David Conde, Frank Landry
// Version: 1.0
// Date: 02/20/215
// Start session
session_start();
?>
<!-- Set up the web page -->
<html lang="en"> 
<title> Vermont Tech | Software Downloads </title>
<!-- Select the css for use -->
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
		Welcome To Vermont Tech, Software Downloads
	</div>
	</center>
	<!-- Mission statement -->
	<h3 style="padding-top: 12px;">Mission</h3>
		<p style="padding: 0; margin: 0; display: inline;">
		The goal/purpose of this site is to provide an easy and 
		hassle free way for Vermont Technical College (VTC) students to 
		download software they would need for their course(s) on to their person computers.
		</p>
	<br />
	<br />
	<br />
	<h3>Software</h3>
	<p style="padding: 0; margin: 0; display: inline;">Here are some of the different software that students can download. All these softwares
		can be downloaded from our <a href= "product.php" target=_blank>product</a> page:
	</p>
	<br />
	<ul type="square" >
		<li><strong>Wireshark</strong>, is a free and open-source packet analyzer. It is used for network troubleshooting, 
			analysis, software and communications protocol development, and education. </li><br>
		<li><strong>Cygwin</strong>, is a Unix-like environment and command-line interface for Microsoft Window.</li>
		<br>
		<li><strong>Eclipse</strong> is a Java-based open source platform that allows a software developer to create a customized development environment (IDE) from plug-in components built by Eclipse members.</li>
	</ul>
	<br />
	<h3>Support</h3>
	<p  style="padding: 0; margin: 0; display: inline;">If for any reason you have any problem with this page, please feel free and contact <a href="mailto:FLandry@vtc.vsc.edu?Subject=PasswordReset" target="_top">Admin</a>,
		your feedbacks are important.
	</p>
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

