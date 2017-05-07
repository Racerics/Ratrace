<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="addTeacher.php">Admin Registration</a>
            </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="#" onclick="history.go(-1)" >Back</a>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Add Admin</h2>

        <div class="box-icon">
           
        </div>
    </div>
    <div class="box-content">
	<?php
		if(isset($_POST['register'])){
$mail=$_POST['f1-email'];
$pswd=$_POST['f1-repeat-password'];
$first_name=$_POST['f1-first-name'];
$hid=$_POST['aid'];
$branch=$_POST['mob'];

$db = mysql_select_db("capeplacementcell", $conn);

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("INSERT INTO capeplacementcell.admintable(`Adminid`, `Adminname`, `Adminpswd`, `Adminemail`, `Adminmob`) VALUES ('$hid','$first_name','$branch','$mail','$pswd');", $conn);
$rows =mysql_affected_rows();

if($rows>0){
	echo "Registration Successfull";
}
else{
	echo "Registration Failed";
}
	}
echo "				<div class=\"row\">\n"; 
echo "                    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-3 form-box\">\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "\n"; 
echo "                    		    <h4>PERSONEL DETAILS</h4>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"f1-first-name\">First name</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-first-name\" placeholder=\"First name...\" class=\"f1-first-name form-control\" id=\"f1-first-name\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"mob\">Mobile No:</label>\n";  
echo "                                    <input type=\"text\" name=\"mob\" placeholder=\"Contact No\" class=\"f1-first-name form-control\" id=\"mob\">\n";
echo "                                </div>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-about-yourself\">Admin ID</label>\n"; 
echo "                                    <input type=\"text\" name=\"aid\" placeholder=\"Admin ID\" \n"; 
echo "                                    	                 class=\"f1-about-yourself form-control\" id=\"aid\"></input>\n"; 
echo "                                </div>\n";
echo "\n"; 
echo "                                <h4>LOGIN DETAILS</h4>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-email\">Email</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-email\" placeholder=\"Email...\" class=\"f1-email form-control\" id=\"f1-email\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-password\">Password</label>\n"; 
echo "                                    <input type=\"password\" name=\"f1-password\" placeholder=\"Password...\" class=\"f1-password form-control\" id=\"f1-password\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-repeat-password\">Repeat password</label>\n"; 
echo "                                    <input type=\"password\" name=\"f1-repeat-password\" placeholder=\"Repeat password...\" \n"; 
echo "                                                        class=\"f1-repeat-password form-control\" id=\"f1-repeat-password\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"register\" value=\"Register\" class=\"btn btn-next\"></input>\n";  
echo "                                </div>\n";  
echo "                         \n"; 
echo "                    	</form>\n"; 
echo "                    </div>\n"; 
echo "                </div>\n"; 
echo "\n";
?>
	
	</div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->


<?php
 require('footer.php');
 ?>