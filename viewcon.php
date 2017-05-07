<?php

include ('../connection.php');
session_start();
$user_check=$_SESSION['login_user'];

if(isset($_GET['id'])) {
	$idd=$_GET['id'];
$sql = "SELECT * FROM formtable WHERE id={$idd} ";
$result = mysql_query($sql,$conn) or die("<b>Error:</b> Problem on Retrieving File<br/>" . mysql_error());
$row = mysql_fetch_array($result);
header("Content-type: " . $row["type"]);
echo $row["content"];
}


?>