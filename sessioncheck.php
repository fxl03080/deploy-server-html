<?php 
// Author: Frank Landry
// Version: 1.0
// Date: 02/15/2015
// Experimental
include 'header.php'; 
include 'nav.php';
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("deployauthentication") or die(mysql_error());
$username = $_COOKIE['ID_my_site'];
$pass = $_COOKIE['Key_my_site'];
$query = mysql_query("SELECT username FROM users WHERE username ='$username'");
session_start();
$row = mysql_fetch_assoc($query);
$name = $row['username'];     
$_SESSION['username'] = $name;
?>
