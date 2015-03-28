<?php
// Authors: Kyle Justice, Frank Landry, David Conde, Wellington Newton
// Version: 1.0
// Date: 03/15/2015
// Start the session
session_start();
// Set up the target directories and files
$target_dir = "uploads/";
$target_file = $target_dir . basename(@$_FILES["fileToUpload"]["name"]);
// Status variable
$uploadOk = 1;
/* $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
Check if image file is a actual image or fake image
if(isset($_POST["submit"])){
     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
     if($check !== false) {
         echo "File is an image - " . $check["mime"] . ".";
         $uploadOk = 1;
     } else {
         echo "File is not an image.";
         $uploadOk = 0;
     }
} */

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if (@$_FILES["fileToUpload"]["size"] > 60000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
/* if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "exe" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
} */
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
} 
// if everything is ok, try to upload file
else{
    if (move_uploaded_file(@$_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
		echo "<script type='text/javascript'>alert('Sorry, there is no file uploaded.')</script>";
    }
}
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
<div class="row container">
<!-- CONTAINER START -->
        <div class="content">
		<!-- BODY START -->
		<center>
		<div id="title1" onmousedown="event.preventDefault()" oncontextmenu="return false;">
		Upload Software
		</div>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<center>
			<br />
			<br />
			<br />
			<!-- Select the file for uploading and upload it -->
			Select a file to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<br />
			<br />
			<input type="submit" value="Upload File" name="submit">
			</center>
		</form>
		</center>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
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
<img class="zindex" src="footer.png">
<!-- FOOTER -->
<?php include 'footer.php'; ?>	
</html>
