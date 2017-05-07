<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="removeAdmin.php">Admin Cancellation</a>
            </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="#" onclick="history.go(-2)" >Back</a>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Remove Admin</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
	<?php
		if(isset($_POST['remove1'])){
	$query=mysql_query("DELETE FROM capeplacementcell.hodtable WHERE admintable.Adminid='{$_POST['id']}'",$conn);
	$rows =mysql_affected_rows();
	if($rows>0){
		echo "Deletion Successfull";
	}
	else{
		echo "Deletion Failed";
	}
	}
	if(isset($_POST['remove2'])){
	$query=mysql_query("DELETE FROM capeplacementcell.admintable WHERE admintable.Adminemail='{$_POST['mail']}'",$conn);
	$rows =mysql_affected_rows();
	if($rows>0){
		echo "Deletion Successfull";
	}
	else{
		echo "Deletion Failed";
	}
	}
echo "				<div class=\"row\">\n"; 
echo "                    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-3 form-box\">\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "\n"; 
echo "                    		    <h4>Enter Admin ID:</h4>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-about-yourself\">dmin ID</label>\n"; 
echo "                                    <input type=\"text\" name=\"id\" placeholder=\"Admin ID\" \n"; 
echo "                                    	                 class=\"f1-about-yourself form-control\" id=\"id\"></input>\n"; 
echo "                                </div>\n";
echo "                            </fieldset>\n"; 
echo "\n";
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"remove1\" value=\"Remove\" class=\"btn btn-next\"></input>\n";  
echo "                                </div>\n"; 
echo "                            </fieldset>\n"; 
echo "\n"; 
echo "                    		    <h5>Enter Admin Email:</h5>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-about-yourself\">Admin EMAIL</label>\n"; 
echo "                                    <input type=\"text\" name=\"mail\" placeholder=\"Email Address\" \n"; 
echo "                                    	                 class=\"f1-about-yourself form-control\" id=\"mail\"></input>\n"; 
echo "                                </div>\n";
echo "                            </fieldset>\n"; 
echo "\n";
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"remove2\" value=\"Remove\" class=\"btn btn-next\"></input>\n";  
echo "                                </div>\n"; 
echo "                            </fieldset>\n"; 
echo "\n";
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