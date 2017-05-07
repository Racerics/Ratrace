
<!DOCTYPE html>

<?php
require ('connection.php');
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Admin Login</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate1.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style1.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
<div class="top">
			<h1 id="title" class="hidden"><span id="logo">WELCOME</span></h1>
		</div>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form action="adminpass.php" method="post">
			<label for="id">Admin Id</label>
			<br/>
			<input type="int" id="id" name="id">
			<br/>
			<label for="pswd">Password</label>
			<br/>
			<input type="password" id="pswd" name="pswd" >
			<br/>
			<button type="submit" name="submit" >Sign In</button>
			<br/>
			</form>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
	</div>
				
</body>
<footer>
<p>&copy; 2017 RATRACE. All rights reserved | Design by <a href="#">HERJS</a></p>
</footer>
<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#id').focus(function() {
		$('label[for="id"]').addClass('selected');
	});
	$('#id').blur(function() {
		$('label[for="id"]').removeClass('selected');
	});
	$('#pswd').focus(function() {
		$('label[for="pswd"]').addClass('selected');
	});
	$('#pswd').blur(function() {
		$('label[for="pswd"]').removeClass('selected');
	});
</script>

</html>