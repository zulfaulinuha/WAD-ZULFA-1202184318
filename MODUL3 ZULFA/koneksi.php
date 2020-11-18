<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = " wad_modul3_zulfa";

// Create connection
$conn = new mysql($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>