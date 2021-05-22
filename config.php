<?php
$servername = "localhost";
$username = "uygulama";
$password = "uygulama";
$dbname = "uygulama";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?> 