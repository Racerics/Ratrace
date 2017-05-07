<?php require('header.php');
echo "    <div>\n"; 
echo "        <ul class=\"breadcrumb\">\n"; 
echo "            <li>\n"; 
echo "                <a href=\"adminpanel.php\">Home</a>\n"; 
echo "            </li>\n"; 
echo "            <li>\n"; 
echo "                <a href=\"delrecords.php\">Delete Records</a>\n"; 
echo "            </li>\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "				<a href=\"#\" onclick=\"history.go(-1)\" >Back</a>\n"; 
echo "        </ul>\n"; 
echo "    </div>\n"; 
echo "\n"; 
echo "    <div class=\"row\">\n"; 
echo "    <div class=\"box col-md-12\">\n"; 
echo "    <div class=\"box-inner\">\n"; 
echo "    <div class=\"box-header well\" data-original-title=\"\">\n"; 
echo "        <h2><i class=\"glyphicon glyphicon-user\"></i>Delete Records</h2>\n"; 
echo "\n"; 
echo "        <div class=\"box-icon\">\n"; 
echo "            \n"; 
echo "        </div>\n"; 
echo "    </div>\n"; 
echo "    <div class=\"box-content\">\n";
		if(isset($_POST['del1'])){
$mail=$_POST['f1-first-name'];
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("DELETE FROM capeplacementcell.studtable WHERE regid={$mail} ", $conn);
$query1 = mysql_query("DELETE FROM capeplacementcell.studtaddress WHERE regid={$mail} ", $conn);
$query2 = mysql_query("DELETE FROM capeplacementcell.marktable WHERE regid={$mail} ", $conn);
$query3 = mysql_query("DELETE FROM capeplacementcell.appliedtable WHERE regid={$mail} ", $conn);

if($query||$query1||$query2||$query3){
	echo "Record Deletion Successfull";
}
else{
	echo "Deletion Failed";
}
	}
	
	if(isset($_POST['del2'])){
$mail=$_POST['f1-first-name'];
$pswd=$_POST['f1-password'];

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("DELETE FROM capeplacementcell.studtable WHERE regid>={$mail} AND regid<={$pswd} ", $conn);
$query1 = mysql_query("DELETE FROM capeplacementcell.studaddress WHERE regid>={$mail} AND regid<={$pswd} ", $conn);
$query2 = mysql_query("DELETE FROM capeplacementcell.marktable WHERE regid>={$mail} AND regid<={$pswd} ", $conn);
$query3 = mysql_query("DELETE FROM capeplacementcell.appliedtable WHERE regid>={$mail} AND regid<={$pswd} ", $conn);

if($query||$query1||$query2||$query3){
	echo "Records Deletion Successfull";
}
else{
	echo "Deletion Failed";
}
	}
echo "				<div class=\"row\">\n"; 
echo "                    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-3 form-box\">\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "\n"; 
echo "                    		    <h3>Delete Record</h3>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"f1-first-name\">Enter Reg ID:</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-first-name\" placeholder=\"Enter Reg ID\" class=\"f1-first-name form-control\" id=\"f1-first-name\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"del1\" value=\"Delete\" class=\"btn btn-next\"></input>\n";  
echo "                                </div>\n";
echo "                    	</form>\n"; 
echo "\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "                                <h3>Delete Records </h3>\n"; 
echo "                                <h4>From</h4>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"f1-first-name\">Enter Reg ID:</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-first-name\" placeholder=\"Enter Reg ID\" class=\"f1-first-name form-control\" id=\"f1-first-name\">\n"; 
echo "                                </div>\n";  
echo "                                <h4>To</h4>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-password\">Enter Reg ID</label>\n"; 
echo "                                    <input type=\"text\" name=\"f1-password\" placeholder=\"Enter Reg ID\" class=\"f1-password form-control\" id=\"f1-password\">\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"del2\" value=\"Delete\" class=\"btn btn-next\"></input>\n";  
echo "                                </div>\n"; 
echo "                         \n"; 
echo "                    	</form>\n"; 
echo "                    </div>\n"; 
echo "                </div>\n"; 
echo "	\n"; 
echo "	</div>\n"; 
echo "    </div>\n"; 
echo "    </div>\n"; 
echo "    <!--/span-->\n"; 
echo "\n"; 
echo "    </div><!--/row-->\n"; 
echo "\n"; 
 require('footer.php');
 ?>