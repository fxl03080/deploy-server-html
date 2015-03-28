<?php
/*
CIS 4722 - Deploy Server Project
	Author: David Conde, Wellington Newton, Kyle Justice, Frank Landry
	Version: 1.0
	Last modified: 03/27/2015
	Date: 01/21/2015
*/
// Start a session
session_start();
// Error help
error_reporting(E_ERROR|E_WARNING);
// Connect to the Database
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("deployauthentication") or die(mysql_error());
// Check if there is a login cookie 
// If there is, it logs you in and directs you to the members page
if(isset($_COOKIE['ID_my_site']))
{
// Setup a username variable
$username = $_COOKIE['ID_my_site'];
// Password variable
$pass = $_COOKIE['Key_my_site'];
// Perform the correct query to isolate the user and give error for malfunction
$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
// Store the information in a variable
	while($info = mysql_fetch_array( $check )){
		if ($pass != $info['pass']){
			// Do nothing
		} else {
			// modify this by adding in members.php page to your web site 
			//header("Location: /SeniorProject/login.php");
		}
	}
}
// If the login form is submitted do this code
if (isset($_POST['submit'])){ 
	// Makes sure they filled it in 
	// also give them the webpage so it looks nice
	if(!$_POST['username'] | !$_POST['pass']) { 
		echo'<link rel="stylesheet" type="text/css" href="homeCSS.css"/>';
		include 'header.php
		<div id="line" onmousedown="event.preventDefault()" >
		</div>';
		echo'<div class="row container">
			<!-- CONTAINER START -->
				<div class="content">
				<!-- BODY START -->
				<center>
				<FIELDSET>
					<LEGEND>
						<div id="logtitle" >
						Missing Something
						</div>
					</LEGEND>
					<p>You did not fill in a required field.  Click here to try again: <a href=\'login.php\'/a>Login
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
		<!-- FOOTER -->		
		';
		// Set up the footer
		include 'footer.php';
		// Was an error message to display, not needed anymore
		die('');
	}
	// Checks the information against the database
	// Select the username where it matches what is submitted
	$check = mysql_query("SELECT * FROM users WHERE username ='".$_POST['username']."'")or die(mysql_error());
	// Get the number of rows returned
	$check2 = mysql_num_rows($check); 
	// If the check doesn't return anything, tell them that the user doesn't exist. 
	if ($check2 == 0){
		echo'<link rel="stylesheet" type="text/css" href="homeCSS.css"/>';
		// Set up the header
		include 'header.php'; 
		echo'<div id="line" onmousedown="event.preventDefault()" >
			 </div>
			<div class="row container">
				<!-- CONTAINER START -->
					<div class="content">
						<!-- BODY START -->
						 <center>
						 <FIELDSET>
						 <LEGEND>
						<div id="notReg" >
						Not Registered
						</div>
						</LEGEND>
						<br />
						<br />
						<p>That user does not exist in our database. <a href=reg.php>Click here to register</a>
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
			img class="zindex" src="footer.png">
			<!-- FOOTER -->	';
			// Set up the footer
			include 'footer.php';
		// Throw an error, not needed anymore
		die("");
	}
	// Store information for further use
	while($info = mysql_fetch_array( $check )){
		// Strip slashes is used to parse the information better
		$_POST['pass'] = stripslashes($_POST['pass']);
		$info['pass'] = stripslashes($info['pass']);
		// Encrypt the password
		$_POST['pass'] = SHA1($_POST['pass']);
		// Check to see if the password is correct
		// If the password is wrong, give an error
		if ($_POST['pass'] != $info['pass']){ 
			echo'<link rel="stylesheet" type="text/css" href="homeCSS.css"/>';
			// Set up a header 
			include 'header.php'; 
			echo'<div id="line" onmousedown="event.preventDefault()" >
			</div>
				<div class="row container">
					<!-- CONTAINER START -->
					<div class="content">
						<!-- BODY START -->
						<center>
						<FIELDSET>
						<LEGEND>
							 <div id="logtitle" >
							 Incorrect Password</div>
						</LEGEND>
						<p>You have entered the wrong password, Click here to try again: <a href=\'login.php\'/a>Login
						</p>
						</FIELDSET>
						<br/><br/><br/><br/><br/>
						<br/><br/><br/><br/><br/>
						<br/><br/>
						<br/><br/>
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
			die('');
		}
		// If passwords match, check the group id of the user to make sure they are administrators or not
		else {
			// User variable setup
			$checkuser = $_POST['username'];
			// Query to select users group id 
			$groupcheck = mysql_query("SELECT `Group`, `username` FROM `users` WHERE `username` = '$checkuser'"); 
			// Initialize another variable to hold the row information of the user in array form
			list($checker) = mysql_fetch_row($groupcheck);
			// Select the group element to isolate the number
			$checkthis = $checker['Group'];
			// Initalize a variable to see how many rows are returned 
			$count=mysql_num_rows($groupcheck);
			// If result matched $username and $password, table row must be 1 row
			if($count==1){
				// Start the session
				session_start();
				$_SESSION['loggedin'] = true;
				$username = $_POST['username'];
			}
			// if login is ok then we add a cookie
				// Strip slashes for better parsing
				$_POST['username'] = stripslashes($_POST['username']);
				// Capture the time information
				$hour = time() + 3600;
				// Set the cookies
				 
				setcookie('ID_my_site', $_POST['username'], $hour); 
				setcookie('Key_my_site', $_POST['pass'], $hour);
				setcookie('first_name', $checkuser, $hour);
				// Perform a permission check using the group id 
				// Compare the result of the group element to the string literal 1
				// because that is what MySQL returns apparently
				if ($checkthis == "1"){		
					// If its an administrator, redirect them to an administration page
					header('Location: upload.php');
				}
				// Otherwise treat them as a standard user and direct them to the home page
				else{
					// Redirect them to the home page 
					header("Location: home.php");
				}				
		}
	}	
} 
else {
	// If they are not logged in do nothing for them
}
 ?>
<!-- Set up the web page -->
 <html lang="en"> 
<title> Vermont Tech | Software Downloads </title>
<!-- Set up the css -->
<link rel="stylesheet" type="text/css" href="homeCSS.css"/>
<!-- Set up the header -->
<?php include 'header.php'; ?>
<!-- Set up the divisions -->
<div id="line" onmousedown="event.preventDefault()" ></div>
	<div class="row container">
	<!-- CONTAINER START -->
        <div class="content">
		<!-- BODY START -->
		<center>
		<!-- Set up a box for logging in a user -->
		<FIELDSET>
			<LEGEND>
				<div id="logtitle">
				Login
				</div>
			</LEGEND>
		<div id="note">
			Click the following link in case you forgot your password to login:
			<a href="mailto:FLandry@vtc.vsc.edu?Subject=Password%reset" target="_top">Email Administrator</a>
		</div>
		<br>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<font id="ask">
			Username:</font>
				<input class="box"  type="username" name="username" required size="16" maxlength="19" />
			<br />
			<br />
			<font id="ask">
			Password:&nbsp;</font>
				<input class="box" type="password" name="pass" required size="16" maxlength="19" />
			<br />
			<br />
			<input class="enter" type="submit" name="submit" value="ENTER" style="width:90px; height:33px;"></input>
			<input class="enter1" type=button href="reg.php" onClick="location.href='reg.php'" value="SIGN UP" style="width:90px; height:33px;"></input>
		</form>
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
</div>
<!-- Set up the footer -->
<link rel="stylesheet" type="text/css" href="footerCSS.css"/>
<img class="zindex" src="footer.png">
<!-- FOOTER -->
<?php include 'footer.php'; ?>	
</html>
