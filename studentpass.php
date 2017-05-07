<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['idmail']) || empty($_POST['pswd'])) {
$error = "Registration id or Password is invalid";
}
else
{
// Define $id and $pswd
$idmail=$_POST['idmail'];
$pswd=$_POST['pswd'];
// Establishing Connection with Server by passing server_name, user_id and pswd as a parameter
include ('connection.php');
// To protect MySQL injection for Security purpose
$idmail = stripslashes($idmail);
$pswd = stripslashes($pswd);
$idmail = mysql_real_escape_string($idmail);
$pswd = mysql_real_escape_string($pswd);
// Selecting Database
$db = mysql_select_db("capeplacementcell", $conn);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("SELECT * FROM capeplacementcell.studtable WHERE studpswd='{$pswd}' AND email='{$idmail}';", $conn);
$row = mysql_num_rows($query);
$rows=mysql_fetch_array($query);
if ($row>0) {
$_SESSION['login_user']=$rows['regid']; // Initializing Session
$_SESSION['id']=2;
header("location: ./Studentpanel/studentpanel.php"); // Redirecting To Other Page
} else {
$error = "Registration Id or Password is invalid";
header("location: ./login2.php");
}
}
mysql_close($conn); // Closing Connection
}
?>