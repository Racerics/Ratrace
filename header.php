<?php include ('../connection.php'); 
session_start();
$user_check=$_SESSION['login_user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HERJS Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Student Dashboard">
    <meta name="author" content="HERJS">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="HERJS Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>HERJS</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <?php
					$que11=mysql_query("SELECT fname FROM capeplacementcell.studtable WHERE studtable.regid={$user_check} ",$conn);
					$res11=mysql_fetch_array($que11);
echo "<i class=\"glyphicon glyphicon-user\"></i><span class=\"hidden-md hidden-xs\"> Hi, {$res11['fname']}</span>\n";
?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="studentpanel.php">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
               <ul class="dropdown-menu" id="themes">
                   <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
			   </ul>
            </div>
            <!-- theme selector ends -->
        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="studentpanel.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span>Messages</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="newmsg.php">New Mail</a></li>
								<li><a href="messages.php">Inbox</a></li>
								<li><a href="sentmail.php">Sent Mail</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="form.php"><i class="glyphicon glyphicon-list-alt"></i><span> Forms</span></a>
                        </li>
						<li><a class="ajax-link" href="viewCompanies.php"><i class="glyphicon glyphicon-list-alt"></i><span> Companies</span></a>
                        </li>
                        <li><a class="ajax-link" href="notify.php"><i class="glyphicon glyphicon-font"></i><span> Notification</span></a>
                        </li>
                        <li><a class="ajax-link" href="marklist.php"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Search Marklists</span></a></li>
                        <li><a class="ajax-link" href="calendar.php"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                        </li>
						<li><a class="ajax-link" href="edit.php"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Edit Details</span></a></li>
                      </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php } ?>
