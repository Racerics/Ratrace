<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="studentpanel.php">Home</a>
            </li>
            <li>
                <a href="changer.php">Change Reg ID</a>
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
        <h2><i class="glyphicon glyphicon-user"></i>Change Reg ID</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
	<?php
		if(isset($_POST['change'])){
	$query=mysql_query("UPDATE capeplacementcell.studtable SET regid='{$_POST['f1-repeat-password']}' WHERE studtable.regid={$user_check}",$conn);
	$query=mysql_query("UPDATE capeplacementcell.studaddress SET regid='{$_POST['f1-repeat-password']}' WHERE studaddress.regid={$user_check}",$conn);
	$query=mysql_query("UPDATE capeplacementcell.marktable SET regid='{$_POST['f1-repeat-password']}' WHERE marktable.regid={$user_check}",$conn);
	$query=mysql_query("UPDATE capeplacementcell.appliedtable SET regid='{$_POST['f1-repeat-password']}' WHERE appliedtable.regid={$user_check}",$conn);	
	$_SESSION['login_user']=$_POST['f1-repeat-password'];
	$rows =mysql_affected_rows();
	if($rows>0){
		echo "Reg ID Changed Successfull";
	}
	else{
		echo "Reg ID Change Failed";
	}
	}
echo "				<div class=\"row\">\n"; 
echo "                    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-3 form-box\">\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "\n"; 
echo "                    		    <h4>Change Reg ID</h4>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-password\">New Reg ID</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-password\" placeholder=\"Enter Reg ID\" class=\"f1-password form-control\" id=\"f1-password\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-repeat-password\">Confirm Reg ID</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-repeat-password\" placeholder=\"Confirm Reg ID\" \n"; 
echo "                                                        class=\"f1-repeat-password form-control\" id=\"f1-repeat-password\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"change\" value=\"Change\" class=\"btn btn-next\"></input>\n"; 
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