<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="#">Student Cancellation</a>
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
        <h2><i class="glyphicon glyphicon-user"></i>Remove Student</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
	<?php
	if(isset($_POST['remove'])){
	$query=mysql_query("DELETE FROM capeplacementcell.studtable WHERE regid='{$_POST['id']}'",$conn);
	$query1=mysql_query("DELETE FROM capeplacementcell.marktable WHERE regid='{$_POST['id']}'",$conn);
	$query2=mysql_query("DELETE FROM capeplacementcell.studaddress WHERE regid='{$_POST['id']}'",$conn);
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
echo "                    		    <h4>Enter Reg ID:</h4>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-about-yourself\">Registration ID</label>\n"; 
echo "                                    <input type=\"text\" name=\"id\" placeholder=\"Registration ID\" \n"; 
echo "                                    	                 class=\"f1-about-yourself form-control\" id=\"id\"></input>\n"; 
echo "                                </div>\n";
echo "                            </fieldset>\n"; 
echo "\n";
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"remove\" value=\"Remove\" class=\"btn btn-next\"></input>\n"; 
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