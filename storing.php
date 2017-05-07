<?php
session_start(); // Starting Session
$error='Error'; // Variable To Store Error Message

// Define variables
$mail=$_POST['login_id'];
$pswd=$_POST['password'];
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$sex=$_POST['sex'];
$dob=$_POST['date_of_birth'];
$contact_no=$_POST['contact_no'];
$line1=$_POST['line1'];
$line2=$_POST['line2'];
$country=$_POST['country'];
$state=$_POST['state'];
$district=$_POST['district'];
$city=$_POST['city'];
$postoffice=$_POST['postoffice'];
$pincode=$_POST['pincode'];
$rid=$_POST['rid'];
$sem=$_POST['sem'];
$branch=$_POST['stream'];

// Establishing Connection with Server by passing name,id and pswd as a parameter
include ("connection.php");

// Selecting Database
$db = mysql_select_db("capeplacementcell", $conn);

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("INSERT INTO capeplacementcell.studtable(`regid`, `fname`, `mname`, `lname`, `gender`, `DoB`, `Dept`, `email`, `Mob`, `studpswd`) VALUES ('$rid','$first_name','$middle_name','$last_name','$sex','$dob','$branch','$mail','$contact_no','$pswd');", $conn);
$query1 = mysql_query("INSERT INTO capeplacementcell.studaddress(`regid`, `line1`, `line2`, `post`, `city`, `dist`, `state`, `country`, `pin`) VALUES ('$rid','$line1','$line2','$postoffice','$city','$district','$state','$country','$pincode');", $conn);
$rows =mysql_affected_rows();

if($rows>0){
$_SESSION['login_user']=$rid; // Initializing Session
header("location: ./Studentpanel/studentpanel.php"); // Redirecting To Other Page
}
 else {
$error = "Registration Failed";
}
echo mysql_error($conn);
mysql_close($conn); // Closing Connection
?>