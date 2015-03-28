<?php
// Authors: Kyle Justice, Wellington Newton, David Conde, Frank Landry
// Version: 1.0
// Date: 03/12/2015

// Start Session
session_start();
// Set up username and password variables
$username = @$_POST['username'];
$changedpassword = @$_POST['pass1'];
$confirmedpassword = @$_POST['pass2'];
// Set up the connection to the database
$conn = mysql_connect("localhost","root","");
// Select the database
mysql_select_db("deployauthentication",$conn);
// If it returns a row, store the information for later use
if(count($_POST)>0) {
	$result = mysql_query("SELECT * FROM users WHERE username ='" . $username . "'");
	$row=mysql_fetch_array($result);
}
// Check to see if the passwords match
// Also encrypts the password for the database.
if($changedpassword == $confirmedpassword) {
	mysql_query("UPDATE users SET pass='" . SHA1($changedpassword) . "' WHERE username='" . $username . "'");
	// echo  $message = "Password Changed"; 
	
} else {
	// In case the passwords dont match
	echo $message = "Passwords do not match.";
}

?>
<!-- Set up the web page -->
<html lang="en"> 
<title> Vermont Tech | Software Downloads </title>
<!-- Select the css to use -->
<link rel="stylesheet" type="text/css" href="homeCSS.css"/>
<!-- php statement to reuse a header that was previously created -->
<?php include 'header.php'; ?>
<div id="line" onmousedown="event.preventDefault()" ></div>
<!-- Start some of the divisions of the page to apply certain properties -->
<div class="row container">
<!-- CONTAINER START -->
        <div class="content">
		<!-- BODY START -->
		<center>
		<!-- Set up a box to contain the proper fields -->
		<FIELDSET>
			<LEGEND>
			<!-- Box title -->
				<div id="logtitle" >
				Change Password</div>
			</LEGEND>
		<div id="note">
			</div><br>
			<!-- Set up a form to take the user input and run the proper script -->
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<font id="ask">
			<!-- Ask for the username -->
			Username:      
			</font>
			<!-- Make the fields required by putting the required keyword in the tag -->
			<input class="box"  type="username" name="username" required style ="float:initial" size="16" maxlength="19"  />
			<br />
			<br />
			<font id="ask">
			Password:&nbsp;</font>
			<input class="box" type="password" name="pass1" required style ="float:initial" size="16" maxlength="19" />
			<br />
			<br />
			<font id="ask">
			Confirm:&nbsp;&nbsp;&nbsp;</font>
			<input class="box" type="password" name="pass2" required style ="float:initial" size="16" maxlength="19"  />
			<br />
			<br />
			<!-- Submit the results -->
			<input class="enter" type="submit" name="submit" value="ENTER" style="width:90px; height:33px;"></input>
		</form>
		</FIELDSET>
		<!-- Finish the box -->
		</center>
		<!-- Put some spacing in -->
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
