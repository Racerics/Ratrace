<?php
session_start(); // Starting Session
$error='Error'; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['id']) || empty($_POST['pswd'])) {
$error = "Registration id or Password is invalid";

}
else
{
// Define $id and $pswd
$id=$_POST['id'];
$pswd=$_POST['pswd'];
// Establishing Connection with Server by passing name,id and pswd as a parameter
include ("connection.php");
// To protect MySQL injection for Security purpose
$id = stripslashes($id);
$pswd = stripslashes($pswd);
$id = mysql_real_escape_string($id);
$pswd = mysql_real_escape_string($pswd);
// Selecting Database
$db = mysql_select_db("capeplacementcell", $conn);
// SQL query to fetch information of registerd users and finds user match.
$query1 = mysql_query("SELECT * FROM capeplacementcell.hodtable WHERE hodpswd='{$pswd}' AND hodid={$id};", $conn);
$rows1 = mysql_num_rows($query1);

if($rows1>0){
$_SESSION['login_user']=$id;
if($query1){
	$r1=mysql_fetch_array($query1);
	extract($r1);
}
$_SESSION['dptmt']= $r1['Dept'];// Initializing Session
$_SESSION['id']=1;
header("location: ./Teacherpanel/teacherpanel.php"); // Redirecting To Other Page
}
 else {
$error = "Registration Id or Password is invalid";
header("location: ./loginteach.php");
}
echo mysql_error($conn);
mysql_close($conn); // Closing Connection
}
}
?>