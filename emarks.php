<?php require('header.php'); 
$userid=$_GET['uid'];
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="teacherpanel.php">Home</a>
            </li>
            <li>
                <a href="#">Enter Marks</a>
            </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="#" onclick="history.go(-1);" >Back</a>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Mark Submission</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
	<?php

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
$de=mysql_query("SELECT Dept FROM capeplacementcell.studtable WHERE regid={$userid};",$conn);
$dep=mysql_fetch_array($de);
$d=$dep['Dept'];
// SQL query to fetch information of registerd users and finds user match.
	$inst="INSERT INTO capeplacementcell.marktable( `regid`, `Dept`, `Sem`, `Sub1`, `Sub2`, `Sub3`, `Sub4`, `Sub5`, `Sub6`, `L1`, `L2`, `GPA`, `Eligibility`) VALUES ({$userid},'$d','$sem','$one','$two','$three','$four','$five','$six','$lab1','$lab2','$gpa','$elig')";
$query=mysql_query($inst,$conn);
$rows =mysql_affected_rows();

if($rows>0){
	echo "Submission Successfull";
	echo "<script type=\"text/javascript\">\n"; 
	echo "window.location.href = './views.php?id='+$userid;\n"; 
	echo "</script>\n";
}
else{
	echo "Submission Failed.Marks ALREADY Entered";
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
echo "															<option value=\"\">Select Sem</option>\n"; 
echo "															<option value=\"1\">1</option>\n"; 
echo "															<option value=\"2\">2</option>\n"; 
echo "															<option value=\"3\">3</option>\n"; 
echo "															<option value=\"4\">4</option>\n"; 
echo "															<option value=\"5\">5</option>\n"; 
echo "															<option value=\"6\">6</option>\n"; 
echo "															<option value=\"7\">7</option>\n"; 
echo "															<option value=\"8\">8</option>\n"; 
echo "											</select>\n";
echo "                                </div>\n"; 
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"one\">Sub 1</label>\n"; 
echo "                                    <input type=\"text\" name=\"one\" placeholder=\"Sub 1\" \n"; 
echo "                                    	                 class=\"one form-control\" id=\"one\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"two\">Sub 2</label>\n"; 
echo "                                    <input type=\"text\" name=\"two\" placeholder=\"Sub 2\" \n"; 
echo "                                    	                 class=\"two form-control\" id=\"two\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"three\">Sub 3</label>\n"; 
echo "                                    <input type=\"text\" name=\"three\" placeholder=\"Sub 3\" \n"; 
echo "                                    	                 class=\"three form-control\" id=\"three\"  ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"four\">Sub 4</label>\n"; 
echo "                                    <input type=\"text\" name=\"four\" placeholder=\"Sub 4\" \n"; 
echo "                                    	                 class=\"four form-control\" id=\"four\"  ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"five\">Sub 5</label>\n"; 
echo "                                    <input type=\"text\" name=\"five\" placeholder=\"Sub 5\" \n"; 
echo "                                    	                 class=\"five form-control\" id=\"five\"  ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"one\">Sub 6</label>\n"; 
echo "                                    <input type=\"text\" name=\"six\" placeholder=\"Sub 6\" \n"; 
echo "                                    	                 class=\"six form-control\" id=\"six\"  ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"lab1\">Lab 1</label>\n"; 
echo "                                    <input type=\"text\" name=\"lab1\" placeholder=\"Lab 1\" \n"; 
echo "                                    	                 class=\"lab1 form-control\" id=\"lab1\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"lab2\">Lab 2</label>\n"; 
echo "                                    <input type=\"text\" name=\"lab2\" placeholder=\"Lab 2\" \n"; 
echo "                                    	                 class=\"lab2 form-control\" id=\"lab2\" ></input>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"submit\" value=\"Submit\" class=\"btn btn-next\"></input>\n";  
echo "                                </div>\n"; 
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