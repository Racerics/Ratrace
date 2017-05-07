<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="teacherpanel.php">Home</a>
            </li>
            <li>
                <a href="editDetails.php">Edit Details</a>
            </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="teacherpanel.php" >Back</a>
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
	$fields = array('fname', 'lname', 'Dept', 'email', 'Mob');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {

		$query=mysql_query("UPDATE capeplacementcell.hodtable SET $field='{$_POST[$field]}' WHERE hodtable.hodid={$user_check}",$conn);
		}
	}
	if($query){
		echo "Submission Successfull";
	}
	else{
		echo "Submission Failed";
	}
	}
echo "				<div class=\"row\">\n"; 
echo "                    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-3 form-box\">\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "\n"; 
$read=mysql_query("SELECT * FROM capeplacementcell.hodtable WHERE hodtable.hodid={$user_check}",$conn);
$read2=mysql_fetch_array($read);
echo "                    		    <h4>ENTER DETAILS</h4>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"fname\">First Name</label>\n"; 
echo "									<input type=\"text\" name=\"fname\" placeholder=\"First Name\" \n"; 
echo "                                    	                 class=\"fname form-control\" value=\"{$read2['fname']}\" id=\"fname\"></input>\n";	
echo "                                </div>\n";
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"lname\">Last Name</label>\n"; 
echo "									<input type=\"text\" name=\"lname\" placeholder=\"Last Name\" \n"; 
echo "                                    	                 class=\"lname form-control\" value=\"{$read2['lname']}\" id=\"lname\"></input>\n";	
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"Dept\">Department</label>\n"; 
echo "                                    <input type=\"text\" name=\"Dept\" placeholder=\"Department\" \n"; 
echo "                                    	                 class=\"Dept form-control\" value=\"{$read2['Dept']}\" id=\"Dept\"></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"email\">Email Address</label>\n"; 
echo "                                    <input type=\"text\" name=\"email\" placeholder=\"Email Address\" \n"; 
echo "                                    	                 class=\"email form-control\" value=\"{$read2['email']}\" id=\"email\"></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"Mob\">Contact No:</label>\n"; 
echo "                                    <input type=\"text\" name=\"Mob\" placeholder=\"Contact No:\" \n"; 
echo "                                    	                 class=\"Mob form-control\" value=\"{$read2['Mob']}\" id=\"Mob\"></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"submit\" value=\"Edit\" class=\"btn btn-next\"></input>\n";  
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