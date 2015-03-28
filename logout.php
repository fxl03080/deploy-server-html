<?php 
// Authors: Wellington Newton, Kyle Justice, David Conde, Frank Landry
// Version: 1.0
// Date: 02/30/2015
// Start up the header and navigation, as well as the session
include 'header.php'; 
//include 'nav.php';
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("deployauthentication") or die(mysql_error());
$username = $_COOKIE['ID_my_site'];
$pass = $_COOKIE['Key_my_site'];
$query = mysql_query("SELECT username FROM users WHERE username ='$username'");
session_start();
$row = mysql_fetch_assoc($query);
$name = $row['username'];     
$_SESSION['username'] = $name;
// Check for active login

?>
<!-- Setup the webpage -->
<html lang="en"> 
<body>
<title> Vermont Tech | Software Downloads </title>
<!-- Set up the css -->
<link rel="stylesheet" type="text/css" href="contactCSS.css"/>
<!-- Set up the divisions -->
<div class="container">
<!-- CONTAINER START -->
	<div class="content">
	<!-- BODY START -->
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<!-- Let the users know that they have logged out -->
		<center>
		<?php echo 'Hi '.$_SESSION['username'].','?><p>You have sucessfully logged out of the site. Click here to login:</p>
		<input class="enter3" onclick="location.href='login.php'" type="submit" name="submit" value="Login" style="width:90px; height:33px;"></input>
		</center>
	<center>	
	<div id="title1" onmousedown="event.preventDefault()" oncontextmenu="return false;">
	</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<!-- BODY ENDS -->
	</div>
<!-- CONTENTS END -->
</div>
<!-- Set up the footer -->
<img class="zindex" src="footer.png">
<!-- FOOTER -->
<?php include 'footer.php'; ?>	
</body>
</html>

<?php 
$past = time() - 100; 
// This makes the time in the past to destroy the cookie 
setcookie('ID_my_site', $past); 
setcookie('Key_my_site', $past); 
session_destroy(); 
?>
