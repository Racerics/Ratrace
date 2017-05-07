<?php require('header.php'); 
$read[]=null;
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="studentpanel.php">Home</a>
            </li>
            <li>
                <a href="editAddress.php">Edit Address</a>
            </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="edit.php" >Back</a>
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
	$fields = array('line1', 'line2', 'post', 'city', 'dist', 'state', 'country', 'pin');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {

		mysql_query("UPDATE capeplacementcell.studaddress SET $field='{$_POST[$field]}' WHERE studaddress.regid={$user_check}",$conn);
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
$read=mysql_query("SELECT * FROM capeplacementcell.studaddress WHERE studaddress.regid={$user_check}",$conn);
$read2=mysql_fetch_array($read);
echo "                    		    <h4>EDIT ADDRESS</h4>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"line1\">Line 1</label>\n"; 
echo "									<input type=\"text\" name=\line1\" placeholder=\"Line1\" \n"; 
echo "                                    	                 class=\"line1 form-control\" id=\"line1\" value=\"{$read2['line1']}\" ></input>\n";	
echo "                                </div>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"line2\">Line 2</label>\n"; 
echo "									<input type=\"text\" name=\"line2\" placeholder=\"Line 2\" \n"; 
echo "                                    	                 class=\"line2 form-control\" id=\"line2\" value=\"{$read2['line2']}\" ></input>\n";	
echo "                                </div>\n";
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"post\">Post Office</label>\n"; 
echo "									<input type=\"text\" name=\"post\" placeholder=\"Post Officce\" \n"; 
echo "                                    	                 class=\"post form-control\" id=\"post\" value=\"{$read2['post']}\" ></input>\n";	
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"city\">City</label>\n"; 
echo "                                    <input type=\"text\" name=\"city\" placeholder=\"City\" \n"; 
echo "                                    	                 class=\"city form-control\" id=\"city\" value=\"{$read2['city']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"district\">District</label>\n"; 
echo "                                    <input type=\"text\" name=\"dist\" placeholder=\"District\" \n"; 
echo "                                    	                 class=\"district form-control\" id=\"dist\" value=\"{$read2['dist']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"state\">State</label>\n"; 
echo "                                    <input type=\"text\" name=\"state\" placeholder=\"State\" \n"; 
echo "                                    	                 class=\"state form-control\" id=\"state\" value=\"{$read2['state']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"country\">Country</label>\n"; 
echo "                                    <input type=\"text\" name=\"country\" placeholder=\"Country\" \n"; 
echo "                                    	                 class=\"country form-control\" id=\"country\" value=\"{$read2['country']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"pin\">Pin Code</label>\n"; 
echo "                                    <input type=\"text\" name=\"pin\" placeholder=\"Pin Code\" \n"; 
echo "                                    	                 class=\"pin form-control\" id=\"pin\" value=\"{$read2['pin']}\" ></input>\n"; 
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