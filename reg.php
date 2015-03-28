<?php 
// Authors: Frank Landry, Kyle Justice, Wellington Newton, David Conde
// Version: 1.0
// Date: 03/15/2015
// Connect to the database
mysql_connect("localhost", "root", "") or die(mysql_error()); 
// Select the appropriate database
mysql_select_db("deployauthentication") or die(mysql_error()); 
//This code runs if the form has been submitted
if (isset($_POST['submit'])) { 
//This makes sure they did not leave any fields blank
if (!$_POST['Fname']|!$_POST['Lname']|!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) 
{
		echo'<link rel="stylesheet" type="text/css" href="homeCSS.css"/>';
		include 'header.php'; 
		echo'<div class="row container">
		<!-- CONTAINER START -->
				<div class="content">
				<!-- BODY START -->
				<center>
				<FIELDSET>
					<LEGEND>
						<div id="logtitle" >
						Missing?</div>
					</LEGEND>
		<p>You have entered the wrong password, Click here to try again: <a href=\'reg.php\'/a>Register</p>
			</FIELDSET><br/><br/><br/><br/><br/>';
		include 'footer.php';
	// Throw an error, not needed anymore
	die('');
}
// Check to see if the username is in use using a little php magic
if (!get_magic_quotes_gpc()) 
{
	// Add slashes for backwards checking
	$_POST['username'] = addslashes($_POST['username']);
}
// Set up the username and a query to select it from the database
$usercheck = $_POST['username'];
$check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'") 
or die(mysql_error());
// Capture the number of rows returned
$check2 = mysql_num_rows($check);
// If the name exists it gives an error
if ($check2 != 0){
		echo'<link rel="stylesheet" type="text/css" href="homeCSS.css"/>';
		include 'header.php'; 
		echo'<div class="row container">
		<!-- CONTAINER START -->
				<div class="content">
				<!-- BODY START -->
				<center>
				<FIELDSET>
					<LEGEND>
						<div id="logtitle" >
						Already in use</div>
					</LEGEND>
		<p>The username you have entered is already in use. Click here to try again: <a href=\'reg.php\'/a>Register</p>
			</FIELDSET><br/><br/><br/><br/><br/>';
		include 'footer.php';
	// Throw an error, no text needed
	die('');
}
// This makes sure both passwords entered match
if ($_POST['pass'] != $_POST['pass2']){
		echo'<link rel="stylesheet" type="text/css" href="homeCSS.css"/>';
		include 'header.php'; 
		echo'
		<div id="line" onmousedown="event.preventDefault()" ></div>
		<div class="row container">
		<!-- CONTAINER START -->
				<div class="content">
				<!-- BODY START -->
				<center>
				<FIELDSET>
					<LEGEND>
						<div id="misPas">
						Mismatched Passwords
						</div>
					</LEGEND>
					<br/><br/>
					<p>Your passwords did not match. Click here to try again: <a href=\'reg.php\'/a>Register
					</p>
				</FIELDSET>
				<br/><br/><br/><br/><br/>
				<br/><br/><br/><br/><br/>
				<br/><br/><br/>		
		<!-- BODY ENDS -->
		</div>
		<!-- CONTENTS END -->
		</div>
		<link rel="stylesheet" type="text/css" href="footerCSS.css"/>
		<img class="zindex" src="footer.png">
		<!-- FOOTER -->';
		// Set up the footer 
		include 'footer.php';
		// Throw an error, not needed anymore
		die(' ');
}
// Here we encrypt the password and add slashes if needed
$_POST['pass'] = SHA1($_POST['pass']);
if (!get_magic_quotes_gpc()) 
{
	$_POST['pass'] = addslashes($_POST['pass']);
	$_POST['username'] = addslashes($_POST['username']);
}
// Now we insert the values into the database
$insert = "INSERT INTO users (Fname, Lname, username, pass, Date)
VALUES ('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['username']."', '".$_POST['pass']."',NOW())";
$add_member = mysql_query($insert);
?>
<!-- Set up the web page and css -->
<link rel="stylesheet" type="text/css" href="homeCSS.css"/>
<!-- Set up the header -->
<?php include 'header.php'; ?>
<!-- Set up the divisions -->
<div class="row container">
<!-- CONTAINER START -->
        <div class="content">
		<!-- BODY START -->
		<center>
		<FIELDSET>
			<LEGEND>
				<div id="logtitle" >
				Registered
				</div>
			</LEGEND>
			<p>Thank you, you have registered - you may now <a href= 'login.php' /a>login.
			</p>
		</FIELDSET>
		</center>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<!-- BODY ENDS -->
        </div>
<!-- CONTENTS END -->
<!-- Set up the footer -->
<?php include 'footer.php'; ?>
</div>
<?php 
} 
else 
{ 
?>
<!-- Set up the web page -->
<!DOCTYPE html>
<html lang="en">
<!-- Set up the css -->
<link rel="stylesheet" href="homeCSS.css">
<!-- Set up the header -->
<?php include 'header.php'; ?>
<!-- Set up the divisions -->
<div id="line" onmousedown="event.preventDefault()" >
</div>
	<div class="row container">
		<center>
		<FIELDSET>
			<LEGEND>
				<div id="logtitle" >
				Registration
				</div>
			</LEGEND>
			<br />
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<table border="0">
			<tr>
			<td>First Name:
			</td>
			<td>
			<input type="text" name="Fname" required maxlength="10">
			</td>
			</tr>
			<tr>
			<td>Last Name:
			</td>
			<td>
			<input type="text" name="Lname" required maxlength="10">
			</td>
			</tr>
			<tr>
			<td>Username:
			</td>
			<td>
			<input type="text" name="username" required maxlength="60">
			</td>
			</tr>
			<tr>
			<td>Password:
			</td>
			<td>
			<input type="password" name="pass" required maxlength="10">
			</td>
			</tr>
			<tr>
			<td>Confirm Password:
			</td>
			<td>
			<input type="password" name="pass2" required maxlength="10">
			</td>
			</tr>
			<tr>
			<th colspan=2><br />
			<input type="submit" name="submit" required value="Register">
			</th>
			</tr> 
			</table>
			</form>
			</link>
		</fieldset>
		<!-- CONTENTS END -->
	</div>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />	
</html>
<!-- Set up the footer -->
<link rel="stylesheet" type="text/css" href="footerCSS.css"/>
<img class="zindex" src="footer.png">
<!-- FOOTER -->
<?php include 'footer.php'; ?>	
</html>
<?php
}
?>
