<?php require('header.php');
$userid=$_GET['uid'];
$usem=$_GET['sem'];
$query1=mysql_query("SELECT * FROM capeplacementcell.studtable WHERE studtable.regid={$userid} ",$conn);
$result1=mysql_fetch_array($query1);
		extract($result1);

echo "    <div>\n"; 
echo "        <ul class=\"breadcrumb\">\n"; 
echo "            <li>\n"; 
echo "                <a href=\"studentpanel.php\">Home</a>\n"; 
echo "            </li>\n"; 
echo "            <li>\n"; 
echo "                <a href=\"#\" onclick=\"history.go(-1)\" >Return</a>\n"; 
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
echo "        <h2><i class=\"glyphicon glyphicon-user\"></i>Student :{$result1['regid']} </h2>\n"; 
echo "\n"; 
echo "        <div class=\"box-icon\">\n"; 
echo "            \n"; 
echo "        </div>\n"; 
echo "    </div>\n"; 
echo "    <div class=\"box-content\">\n";

	$squery=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE marktable.regid={$userid} AND marktable.Sem={$usem}",$conn);
		$sresult=mysql_fetch_array($squery);
		if($sresult){
			extract($sresult);
		}
	if(isset($_POST['submit'])){
$sem=$_POST['sem'];
$one=$_POST['one'];
$two=$_POST['two'];
$three=$_POST['three'];
$four=$_POST['four'];
$five=$_POST['five'];
$six=$_POST['six'];
$lab1=$_POST['lab1'];
$lab2=$_POST['lab2'];
$gpa=($one+$two+$three+$four+$five+$six)/60;
if($gpa>4.0){
	$elig="PASS";
}
else{
	$elig="FAIL";
}
$v=FALSE;
$de=mysql_query("SELECT * FROM capeplacementcell.studtable WHERE regid={$userid};",$conn);
$dep=mysql_fetch_array($de);
// SQL query to fetch information of registerd users and finds user match.
	$inst="UPDATE capeplacementcell.marktable SET `regid`={$userid}, `Dept`='{$dep['Dept']}', `Sem`={$sem}, `Sub1`={$one}, `Sub2`={$two}, `Sub3`={$three}, `Sub4`={$four}, `Sub5`={$five}, `Sub6`={$six}, `L1`={$lab1}, `L2`={$lab2}, `GPA`={$gpa}, `Eligibility`='{$elig}', `verified`='{$v}' WHERE marktable.regid={$userid} ";
$query=mysql_query($inst,$conn);
$rows =mysql_affected_rows();

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
echo "                    		    <h4>ENTER MARKS</h4>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"sem\">Semester</label>\n"; 
echo "										<select type=\"text\" class=\"form-control\" placeholder=\"Enter Sem\" name=\"sem\" id=\"sem\" value=\"\" required=\"\">\n"; 
echo "															<option value=\"{$usem}\">{$usem}</option>\n";
echo "											</select>\n";
echo "                                </div>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"one\">Sub 1</label>\n"; 
echo "                                    <input type=\"text\" name=\"one\" placeholder=\"Sub 1\" \n"; 
echo "                                    	                 class=\"one form-control\" id=\"one\" value=\"{$sresult['Sub1']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"two\">Sub 2</label>\n"; 
echo "                                    <input type=\"text\" name=\"two\" placeholder=\"Sub 2\" \n"; 
echo "                                    	                 class=\"two form-control\" id=\"two\" value=\"{$sresult['Sub2']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"three\">Sub 3</label>\n"; 
echo "                                    <input type=\"text\" name=\"three\" placeholder=\"Sub 3\" \n"; 
echo "                                    	                 class=\"three form-control\" id=\"three\" value=\"{$sresult['Sub3']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"four\">Sub 4</label>\n"; 
echo "                                    <input type=\"text\" name=\"four\" placeholder=\"Sub 4\" \n"; 
echo "                                    	                 class=\"four form-control\" id=\"four\" value=\"{$sresult['Sub4']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"five\">Sub 5</label>\n"; 
echo "                                    <input type=\"text\" name=\"five\" placeholder=\"Sub 5\" \n"; 
echo "                                    	                 class=\"five form-control\" id=\"five\" value=\"{$sresult['Sub5']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"one\">Sub 6</label>\n"; 
echo "                                    <input type=\"text\" name=\"six\" placeholder=\"Sub 6\" \n"; 
echo "                                    	                 class=\"six form-control\" id=\"six\" value=\"{$sresult['Sub6']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"lab1\">Lab 1</label>\n"; 
echo "                                    <input type=\"text\" name=\"lab1\" placeholder=\"Lab 1\" \n"; 
echo "                                    	                 class=\"lab1 form-control\" id=\"lab1\" value=\"{$sresult['L1']}\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"lab2\">Lab 2</label>\n"; 
echo "                                    <input type=\"text\" name=\"lab2\" placeholder=\"Lab 2\" \n"; 
echo "                                    	                 class=\"lab2 form-control\" id=\"lab2\" value=\"{$sresult['L2']}\" ></input>\n"; 
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