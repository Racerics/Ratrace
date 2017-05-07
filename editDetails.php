<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="studentpanel.php">Home</a>
            </li>
            <li>
                <a href="editDetails.php">Edit Details</a>
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
        <h2><i class="glyphicon glyphicon-user"></i>Details Submission</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
	<?php
	
	
	if(isset($_POST['submit'])){
	$fields = array('fname', 'mname', 'lname', 'DoB', 'dept', 'email', 'Mob');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {

		mysql_query("UPDATE capeplacementcell.studtable SET $field='{$_POST[$field]}' WHERE studtable.regid={$user_check}",$conn);
	$rows =mysql_affected_rows();
	if($rows>0){
		echo "Submission Successfull";
	}
	else{
		echo "Submission Failed";
	}
	}
	}
	}
echo "				<div class=\"row\">\n"; 
echo "                    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-3 form-box\">\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "\n"; 
$read=mysql_query("SELECT * FROM capeplacementcell.studtable WHERE studtable.regid={$user_check}",$conn);
$read2=mysql_fetch_array($read);
echo "                    		    <h4>EDIT DETAILS</h4>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"fname\">First Name</label>\n"; 
echo "									<input type=\"text\" name=\"fname\" placeholder=\"First Name\" \n"; 
echo "                                    	                 class=\"fname form-control\" id=\"fname\" value=\"{$read2['fname']}\" ></input>\n";	
echo "                                </div>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"mname\">Middle Name</label>\n"; 
echo "									<input type=\"text\" name=\"mname\" placeholder=\"Middle Name\" \n"; 
echo "                                    	                 class=\"mname form-control\" id=\"mname\" value=\"{$read2['mname']}\" ></input>\n";	
echo "                                </div>\n";
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"lname\">Last Name</label>\n"; 
echo "									<input type=\"text\" name=\"lname\" placeholder=\"Last Name\" \n"; 
echo "                                    	                 class=\"lname form-control\" id=\"lname\" value=\"{$read2['lname']}\" ></input>\n";	
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"DoB\">Date-of-Birth</label>\n"; 
echo "                                    <input type=\"date\" name=\"DoB\" placeholder=\"Date-of-Birth\" \n"; 
echo "                                    	                 class=\"DoB form-control\" id=\"DoB\" value=\"{$read2['DoB']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"Dept\">Department</label>\n"; 
echo "                                    <input type=\"text\" name=\"Dept\" placeholder=\"Department\" \n"; 
echo "                                    	                 class=\"Dept form-control\" id=\"Dept\" value=\"{$read2['Dept']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"email\">Email Address</label>\n"; 
echo "                                    <input type=\"text\" name=\"email\" placeholder=\"Email Address\" \n"; 
echo "                                    	                 class=\"email form-control\" id=\"email\" value=\"{$read2['email']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"Mob\">Contact No:</label>\n"; 
echo "                                    <input type=\"text\" name=\"Mob\" placeholder=\"Contact No:\" \n"; 
echo "                                    	                 class=\"Mob form-control\" id=\"Mob\" value=\"{$read2['Mob']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"submit\" value=\"Submit\" class=\"btn btn-next\"></input>\n";  
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