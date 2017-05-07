<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="notify.php">Notifications</a>
            </li>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
				<a href="#" onclick="history.go(-1)" >Back</a>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>New Notification</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
	<?php
	if(isset($_POST['sent'])){
$date=$_POST['ndate'];
$num=$_POST['nnumber'];
$new=$_POST['newnot'];

$db = mysql_select_db("capeplacementcell", $conn);

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("INSERT INTO capeplacementcell.ntable(`ndate`, `nnumber`, `notification`) VALUES ('$date','$num','$new');", $conn);
$rows =mysql_affected_rows();

if($rows>0){
	echo "Notification Sent Successfull";
}
else{
	echo "Notification Failed";
}
	}
echo "				<div class=\"row\">\n"; 
echo "                    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-3 form-box\">\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "\n"; 
echo "                    		    <h4>ENTER NEW NOTIFICATION</h4>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"f1-first-name\">Notification Date</label>\n"; 
echo "                                    <input type=\"date\" name=\"ndate\" placeholder=\"Date\" class=\"f1-first-name form-control\" id=\"ndate\">\n"; 
echo "                                </div>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"nnumber\">Notification ID</label>\n"; 
echo "                                    <input type=\"text\" name=\"nnumber\" placeholder=\"Not. ID\" class=\"nnumber form-control\" id=\"nnumber\">\n"; 
echo "                                </div>\n";                                
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-about-yourself\">New Notification</label>\n"; 
echo "                                    <textarea style=\"width:770px; height:220px;\" name=\"newnot\" placeholder=\"New Notification\" \n"; 
echo "                                    	                 class=\"f1-about-yourself form-control\" id=\"newnot\"></textarea>\n"; 
echo "                                </div>\n";
echo "                            </fieldset>\n"; 
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"sent\" value=\"Sent\" class=\"btn btn-next\"></input>\n";  
echo "                                </div>\n"; 
echo "                            </fieldset>\n"; 
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