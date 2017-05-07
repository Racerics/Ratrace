<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="delcrecords.php">Delete Company Records</a>
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
        <h2><i class="glyphicon glyphicon-user"></i>Delete Records</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
	<?php

	if(isset($_POST['del'])){
$mail=$_POST['f1-first-name'];
echo $mail;
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("DELETE FROM capeplacementcell.companytable WHERE ccode={$mail} ", $conn);
$query1 = mysql_query("DELETE FROM capeplacementcell.msgtable WHERE ccode={$mail} ", $conn);
$query2 = mysql_query("DELETE FROM capeplacementcell.appliedtable WHERE ccode={$mail} ", $conn);
$rows =mysql_affected_rows();

if($rows>0){
	echo "Record Deletion Successfull";
}
else{
	echo "Deletion Failed";
}
	}
echo "				<div class=\"row\">\n"; 
echo "                    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-3 form-box\">\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "\n"; 
echo "                    		    <h3>Delete Company Records of:</h3>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"f1-first-name\">Enter Company Code:</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-first-name\" placeholder=\"Enter Company Code\" class=\"f1-first-name form-control\" id=\"f1-first-name\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"del\" value=\"Delete\" class=\"btn btn-next\"></input>\n";  
echo "                                </div>\n";
echo "                            </fieldset>\n"; 
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