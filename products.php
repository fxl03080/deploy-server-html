<?php
// Authors: Kyle Justice, Frank Landry, Davide Conde, Wellington Newton
// Version: 1.0
// Date 02/15/2015
// Start Session
session_start();
?>
<!-- Set up the web page -->
<html lang="en"> 
<title> Vermont Tech | Software Downloads </title>
<!-- Set up the css -->
<link rel="stylesheet" type="text/css" href="productCSS.css"/>
<!-- Set up the header and navigation -->
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<!-- Set up the divisions -->
<div class="row container">
<!-- CONTAINER START -->
        <div class="content">
		<!-- BODY START -->
		<center>
		<!-- Set up the products and their corresponding links -->
		<h2> Menu </h2>
		</center>
		<div id="note">
			Choose a link in the <i>console menu</i> to download the software needed.
		</div><br>
		<center>
		<table width=50%>
			<tr>
				<td> <form method="POST" action=''> <input type="submit" name="eclipse" value="Eclipse" class="button"></form> </td>
				<td> <form method="POST" action=''> <input type="submit" name="putty" value="Putty" class="button"></form> </td>
				<td> <form method="POST" action=''> <input type="submit" name="virtualBox" value="VirtualBox" class="button"></form> </td>
				<td> <form method="POST" action=''> <input type="submit" name="isoFiles" value=".iso Files" class="button"></form> </td>
			</tr>
			<tr>
				<td> <form method="POST" action=''> <input type="submit" name="sql" value="SQL" class="button"></form> </td>
				<td> <form method="POST" action=''> <input type="submit" name="wireshark" value="Wireshark" class="button"></form> </td>
				<td> <form method="POST" action=''> <input type="submit" name="cygwin" value="Cygwin" class="button"></form> </td>
				<td> <form method="POST" action=''> <input type="submit" name="packetTracer" value="Packet Tracer" class="button"></form> </td>
			</tr>
		</table>
		<br>
		<br>
		<?php
		// --------------------------- ***SOFTWARE INFORMATION*** ----------------------------
		// --------------------------- Eclipse INFO STORED HERE ------------------------
		//Create Array to Store Names of Software
		$eclipseNames = array("Eclipse.exe (Win 64-bit)", "Eclipse.dmg (Mac 64-bit)");
		//Create Array to Store Executable Link to Start Download
		$eclipseLinks = array("<a href='downloads/filetest.txt' download='testfile.txt'> download1</a>", "<a href='filepath'> download2</a>");
		//Create Array to Store Comments
		$eclipseComments = array("First Comment:  ", "Second Comment");
		//Create Array to Store MD5 Result
		//Create Array to Store Sha1
		// ---------------------------------------------------------------------------------
		// --------------------------- Putty INFO STORED HERE ------------------------
		//Create Array to Store Names of Software
		$puttyNames = array("putty.exe (Win 64-bit)", "putty.dmg (Mac 64-bit)");
		//Create Array to Store Executable Link to Start Download
		$puttyLinks = array("<a href='filepath'> download3</a>", "<a href='filepath'> download4</a>");
		//Create Array to Store Comments
		$puttyComments = array("First Comment", "Second Comment");
		//Create Array to Store MD5 Result
		//Create Array to Store Sha1
		// ---------------------------------------------------------------------------------
		// --------------------------- VirtualBox INFO STORED HERE ------------------------
		//Create Array to Store Names of Software
		$virtualBoxNames = array("VirtualBox4.exe (Win 64-bit)", "VirtualBox4.dmg (Mac 64-bit)");
		//Create Array to Store Executable Link to Start Download
		$virtualBoxLinks = array("<a href='filepath'> download5</a>", "<a href='filepath'> download6</a>");
		//Create Array to Store Comments
		$virtualBoxComments = array("First Comment", "Second Comment");
		//Create Array to Store MD5 Result
		//Create Array to Store Sha1
		// ---------------------------------------------------------------------------------
		// --------------------------- .iso Files INFO STORED HERE ------------------------
		//Create Array to Store Names of Software
		$isoFilesNames = array(".iso Files (Win 64-bit)", ".iso Files (Mac 64-bit)");
		//Create Array to Store Executable Link to Start Download
		$isoFilesLinks = array("<a href='filepath'> download7</a>", "<a href='filepath'> download8</a>");
		//Create Array to Store Comments
		$isoFilesComments = array("First Comment", "Second Comment");
		//Create Array to Store MD5 Result
		//Create Array to Store Sha1
		// ---------------------------------------------------------------------------------
		// --------------------------- SQL INFO STORED HERE ------------------------
		//Create Array to Store Names of Software
		$sqlNames = array("SQL.exe (Win 64-bit)", "SQL.dmg (Mac 64-bit)");
		//Create Array to Store Executable Link to Start Download
		$sqlLinks = array("<a href='filepath'> download9</a>", "<a href='filepath'> download10</a>");
		//Create Array to Store Comments
		$sqlComments = array("First Comment", "Second Comment");
		//Create Array to Store MD5 Result
		//Create Array to Store Sha1
		// ---------------------------------------------------------------------------------
		// --------------------------- Wireshark INFO STORED HERE ------------------------
		//Create Array to Store Names of Software
		$wiresharkNames = array("wireshark.exe (Win 64-bit)", "wireshark.dmg (Mac 64-bit)");
		//Create Array to Store Executable Link to Start Download
		$wiresharkLinks = array("<a href='filepath'> download11</a>", "<a href='filepath'> download12</a>");
		//Create Array to Store Comments
		$wiresharkComments = array("First Comment", "Second Comment");
		//Create Array to Store MD5 Result
		//Create Array to Store Sha1
		// ---------------------------------------------------------------------------------
		// --------------------------- Cygwin INFO STORED HERE ------------------------
		//Create Array to Store Names of Software
		$cygwinNames = array("cygwin.exe (Win 64-bit)", "cygwin.dmg (Mac 64-bit)");
		//Create Array to Store Executable Link to Start Download
		$cygwinLinks = array("<a href='filepath'> download13</a>", "<a href='filepath'> download14</a>");
		//Create Array to Store Comments
		$cygwinComments = array("First Comment", "Second Comment");
		//Create Array to Store MD5 Result
		//Create Array to Store Sha1
		// ---------------------------------------------------------------------------------
		// --------------------------- Packet Tracer INFO STORED HERE ------------------------
		//Create Array to Store Names of Software
		$packettracerNames = array("packettracer.exe (Win 64-bit)", "packettracer.dmg (Mac 64-bit)");
		//Create Array to Store Executable Link to Start Download
		$packettracerLinks = array("<a href='filepath'> download15</a>", "<a href='filepath'> download16</a>");
		//Create Array to Store Comments
		$packettracerComments = array("First Comment", "Second Comment");
		//Create Array to Store MD5 Result
		//Create Array to Store Sha1
		// ---------------------------------------------------------------------------------
		// --------------------------- CREATE TABLES ---------------------------------------
		$index = 0;
		if(isset($_POST['eclipse'])) {
			echo "<h3> Eclipse </h3>";
			echo "<table width=100%>";
			while ($index < count($eclipseNames)) {
			echo "<tr>";
				echo "<td> $eclipseNames[$index] </td>";
				echo "<td> $eclipseLinks[$index] </td>";
				echo "<td> $eclipseComments[$index] </td>";
			echo "</tr>";
			$index++;
			}
			echo "</table>";
		}
		if (isset($_POST['putty'])) {
			echo "<h3> Putty </h3>";
			echo "<table width=100%>";
			while ($index < count($puttyNames)) {
			echo "<tr>";
				echo "<td> $puttyNames[$index] </td>";
				echo "<td> $puttyLinks[$index] </td>";
				echo "<td> $puttyComments[$index] </td>";
			echo "</tr>";
			$index++;
			}
			echo "</table>";
		}
		if (isset($_POST['virtualBox'])) {
			echo "<h3> VirtualBox </h3>";
			echo "<table width=100%>";
			while ($index < count($virtualBoxNames)) {
			echo "<tr>";
				echo "<td> $virtualBoxNames[$index] </td>";
				echo "<td> $virtualBoxLinks[$index] </td>";
				echo "<td> $virtualBoxComments[$index] </td>";
			echo "</tr>";
			$index++;
			}
			echo "</table>";
		}
		if (isset($_POST['isoFiles'])) {
			echo "<h3>.iso Files </h3>";
			echo "<table width=100%>";
			while ($index < count($isoFilesNames)) {
			echo "<tr>";
				echo "<td> $isoFilesNames[$index] </td>";
				echo "<td> $isoFilesLinks[$index] </td>";
				echo "<td> $isoFilesComments[$index] </td>";
			echo "</tr>";
			$index++;
			}
			echo "</table>";
		}
		if (isset($_POST['sql'])) {
			echo "<h3> SQL </h3>";
			echo "<table width=100%>";
			while ($index < count($sqlNames)) {
			echo "<tr>";
				echo "<td> $sqlNames[$index] </td>";
				echo "<td> $sqlLinks[$index] </td>";
				echo "<td> $sqlComments[$index] </td>";
			echo "</tr>";
			$index++;
			}
			echo "</table>";
		}
		if (isset($_POST['wireshark'])) {
			echo "<h3> Wireshark </h3>";
			echo "<table width=100%>";
			while ($index < count($wiresharkNames)) {
			echo "<tr>";
				echo "<td> $wiresharkNames[$index] </td>";
				echo "<td> $wiresharkLinks[$index] </td>";
				echo "<td> $wiresharkComments[$index] </td>";
			echo "</tr>";
			$index++;
			}
			echo "</table>";
		}
		if (isset($_POST['cygwin'])) {
			echo "<h3> Cygwin </h3>";
			echo "<table width=100%>";
			while ($index < count($cygwinNames)) {
			echo "<tr>";
				echo "<td> $cygwinNames[$index] </td>";
				echo "<td> $cygwinLinks[$index] </td>";
				echo "<td> $cygwinComments[$index] </td>";
			echo "</tr>";
			$index++;
			}
			echo "</table>";
		}
		if (isset($_POST['packetTracer'])) {
			echo "<h3> Packet Tracer </h3>";
			echo "<table width=100%>";
			while ($index < count($packettracerNames)) {
			echo "<tr>";
				echo "<td> $packettracerNames[$index] </td>";
				echo "<td> $packettracerLinks[$index] </td>";
				echo "<td> $packettracerComments[$index] </td>";
			echo "</tr>";
			$index++;
			}
			echo "</table>";
		}
?>
		</center>
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
