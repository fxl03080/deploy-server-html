<?php 
// Authors: David Conde, Wellington Newton, Kyle Justice, Frank Landry
// Version: 1.0
// Date: 03/01/2015

// Keep track of sessions
session_start(); 
?>

<!-- Set up the web page -->
<html lang="en"> 
<title> Vermont Tech | Software Downloads </title>
<!-- Set up the css -->
<link rel="stylesheet" type="text/css" href="contactCSS.css"/>
<!-- Reuse header and navigation elements -->
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<!-- Set up the divisions -->
<div class="container">
<!-- CONTAINER START -->
	<div class="content">
	<!-- BODY START -->
	<center>
		<div id="title1" onmousedown="event.preventDefault()" oncontextmenu="return false;">
			Send us a Message
		</div>
	<!-- Form for gathering user feedback and exectuting the proper script -->
	<form action="formprocessor.php" method="post">
	<font size="2" face="arial" color="#181818">
	<!-- Set up a table / form for input -->
	<table border="0">
		<tr>
		<td align="right" class"myLable">Regarding:</td>
		<td>
			<select name="Regarding" style="height:28px;">
			<option value="" selected="selected">Please Select A Topic</option>
			<option value="1">Feedback</option>
			<option value="2">Unable to download</option>
			<option value="3" >Unable to Login</option>
			<option value="4">General Info</option>
			<option value="5 Service">Other</option>
			</select>
		</td>
		</tr>
		<tr>
		<td align="right" class"myLable"><font color=#FF0F0F>*</font> Name:
		</td>
		<td>
			<input type="text" name="Name" size="20" maxlength="20" />
		</td>
		</tr>
		<tr>
		<td align="right" class"myLable"><font color=#FF0F0F>*</font> Email:
		</td>
		<td>
			<input type="text" name="Email" size="20" maxlength="34" />
		</td>
		</tr>
		<tr>
		<td align="right" valign="top" class"myLable">Comments:
		</td>
		<td>
		<textarea name="Comments" rows="4" cols="32"></textarea>
		</td>
		</tr>
		<tr>
		<td>&nbsp;</font>
		</td>
		<td>
		<img  style="padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px;" src="captcha.php"/>
		</td>
		</tr>
		<tr>
		<td align="right" valign="top" class"myLable" >&nbsp; &nbsp; &nbsp;
		</td>
		<td>
		<font style="color:#FF3A3A;font-weight:bold;font-size:13px;">Type what you see:</font>
		</td>
		</tr>
		<tr>
		<td>
		</td>
		<td>
		<input type="text" name="verify" size="25"  />
		</td>
		</tr>
		<tr>
		<td>&nbsp;
		</td>
		<td style="padding-top:10px;"><input type="submit" value="SEND MESSAGE" class="button"/>
		</td>
		</tr>
	</table>
	</form>
	<!-- End the table and form -->
	</center>
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

