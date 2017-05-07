<?php
 function download_file($file){
include ('../connection.php');
session_start();
$user_check=$_SESSION['login_user'];

$sql = "SELECT * FROM formtable WHERE name={$file} ";
$result = mysql_query($sql,$conn) or die("<b>Error:</b> Problem on Retrieving File<br/>" . mysql_error());
$row = mysql_fetch_array($result);

  //Gather relevent info about file
  $len = $row['size'];
  $name = $row['name'];
  $ctype=$row['type'];

  //Begin writing headers
  header("Pragma: public");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, 
  post-check=0, pre-check=0");
  header("Cache-Control: public");
  header("Content-Description: File Transfer");

  //Use the switch-generated Content-Type
  header("Content-Type: $ctype");

  //Force the download
  $header="Content-Disposition:attachment;filename=".$name;
  header($header );
  header("Content-Transfer-Encoding: binary");
  header("Content-Length: ".$len);
  @readfile($file);
	echo "<script type=\"text/javascript\">\n"; 
	echo "window.location.href = './form.php';\n"; 
	echo "</script>\n";
 }
 
 //Function call
 $file =$_REQUEST['file'];
 download_file($file);

 ?>
