<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="addCompanies.php">Company Registration</a>
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
        <h2><i class="glyphicon glyphicon-user"></i>Add Company</h2>

        <div class="box-icon">
           
        </div>
    </div>
    <div class="box-content">
	<?php
		if(isset($_POST['register'])){
$mail=$_POST['f1-email'];
$num=$_POST['f1-password'];
$name=$_POST['f1-first-name'];
$id=$_POST['code'];
$dat=$_POST['cdate'];
$note=$_POST['newnot'];

$db = mysql_select_db("capeplacementcell", $conn);

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("INSERT INTO capeplacementcell.companytable(`ccode`, `cname`, `dob`, `cmob`, `cmail`, `cinf`) VALUES ('{$id}','{$name}','{$dat}','{$num}','{$mail}','{$note}');", $conn);
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
echo "                    		    <h4>COMPANY DETAILS</h4>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"f1-first-name\">Company name</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-first-name\" placeholder=\"Company name...\" class=\"f1-first-name form-control\" id=\"f1-first-name\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"dept\">Company Code</label>\n";  
echo "                                 <input type=\"text\" name=\"code\" placeholder=\"Company Code...\" class=\"code form-control\" id=\"code\">\n";   
echo "                                </div>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-about-yourself\">DoB</label>\n"; 
echo "                                    <input type=\"date\" name=\"cdate\" placeholder=\"Placement Date\" \n"; 
echo "                                    	                 class=\"f1-about-yourself form-control\" id=\"cdate\"></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-email\"> Company Email</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-email\" placeholder=\"Company Email\" class=\"f1-email form-control\" id=\"f1-email\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-password\">Company No:</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-password\" placeholder=\"Company No:\" class=\"f1-password form-control\" id=\"f1-password\">\n"; 
echo "                                </div>\n";                                
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-about-yourself\">Company Information</label>\n"; 
echo "                                    <textarea style=\"width:770px; height:220px;\" name=\"newnot\" placeholder=\"Company Information\" \n"; 
echo "                                    	                 class=\"f1-about-yourself form-control\" id=\"newnot\"></textarea>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"register\" value=\"Register\" class=\"btn btn-next\"></input>\n";  
echo "                                </div>\n"; 
echo "                            </fieldset>\n"; 
echo "\n"; 
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