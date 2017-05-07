<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include ("connection.php");
// Selecting Database
$db = mysql_select_db("capeplacementcell", $conn);
session_start();// Starting Session
// Storing Session
echo $_SESSION['id'];
// SQL Query To Fetch Complete Information Of User
if(($_SESSION['id'])=='0'){	
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select Adminid from capeplacementcell.admintable where Adminid='{$user_check}';", $conn);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['Adminid'];
}
else if(($_SESSION['id'])=='1'){
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select hodid from capeplacementcell.hodtable where hodid='{$user_check}';", $conn);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['hodid'];
}
else if(($_SESSION['id'])=='2'){
$user_check=mysql_real_escape_string($_SESSION['login_user']);
$ses_sql=mysql_query("select regid from capeplacementcell.studtable where email='{$user_check}';", $conn);
$row = mysql_fetch_assoc($ses_sql);
$login_session=$row['regid'];
$_SESSION['login_user']=$row['regid'];
}
else{
echo "Session Invalid.Please RELOAD..";
}
if(!isset($login_session)){
mysql_close($conn); // Closing Connection
header('Location: ../ratrace.html'); // Redirecting To Home Page
}
?>