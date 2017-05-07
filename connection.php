<?php
$servername = "localhost";
$username = "capeplacementcell";
$password = "1023242630";

// Create connection
$conn =@mysql_connect($servername, $username, $password);

// Create database connection
$db = mysql_select_db("capeplacementcell", $conn);

?>
