
<!DOCTYPE HTML>

<?php
include ('connection.php');
?>

<html lang="en">
<head>
<title>Student Login</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ratrace student login" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<script src="js/jquery.vide.min.js"></script>
	<!-- main -->
	<div data-vide-bg="video/Ipad">
		<div class="center-container">
			<!--header-->
			<div class="header-w3l">
				<h1><b><i>WELCOME</i></b></h1>
			</div>
			<!--//header-->
			<div class="main-content-agile">
				<div class="sub-main-w3">	
					<div class="wthree-pro">
						<h2>LOGIN</h2>
					</div>
					<form action="studentpass.php" method="post">
						<input placeholder="E-mail" name="idmail" class="user" type="email" required="">
						<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br><br>
						<input  placeholder="Password" name="pswd" class="pass" type="password" required="">
						<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
						<div class="sub-w3l">
							<h6><a href="#">Forgot Password?</a></h6>
							<div class="right-w3l">
								<input type="submit" name="submit" value="Login">
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--//main-->

			<!--footer-->
			<div class="footer">
				<p>&copy; 2017 RATRACE. All rights reserved | Design by <a href="#">HERJS</a></p>
			</div>
			<!--//footer-->
		</div>
	</div>

</body>
</html>