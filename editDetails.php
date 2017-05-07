<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="editDetails.php">Edit Details</a>
            </li>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
				<a href="adminpanel.php" >Back</a>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Edit Details</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
	<?php
	
	
	if(isset($_POST['submit'])){
	$fields = array('Adminid', 'Adminname', 'Adminemail', 'Adminmob');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {

		mysql_query("UPDATE capeplacementcell.admintable SET $field='{$_POST[$field]}' WHERE admintable.Adminid={$user_check}",$conn);
	$rows =mysql_affected_rows();
		}
	}
	if($rows>0){
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
$read=mysql_query("SELECT * FROM capeplacementcell.admintable WHERE admintable.Adminid={$user_check}",$conn);
$read2=mysql_fetch_array($read);
echo "                    		    <h4>EDIT DETAILS</h4>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"id\">Contact No:</label>\n"; 
echo "                                    <input type=\"text\" name=\"Adminid\" placeholder=\"Admin ID\" \n"; 
echo "                                    	                 class=\"id form-control\" id=\"id\" value=\"{$read2['Adminid']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"fname\">First Name</label>\n"; 
echo "									<input type=\"text\" name=\"Adminname\" placeholder=\"First Name\" \n"; 
echo "                                    	                 class=\"fname form-control\" id=\"fname\" value=\"{$read2['Adminname']}\" ></input>\n";	
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"email\">Email Address</label>\n"; 
echo "                                    <input type=\"text\" name=\"Adminemail\" placeholder=\"Email Address\" \n"; 
echo "                                    	                 class=\"email form-control\" id=\"email\" value=\"{$read2['Adminemail']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"Mob\">Contact No:</label>\n"; 
echo "                                    <input type=\"text\" name=\"Adminmob\" placeholder=\"Contact No:\" \n"; 
echo "                                    	                 class=\"Mob form-control\" id=\"Mob\" value=\"{$read2['Adminmob']}\" ></input>\n"; 
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