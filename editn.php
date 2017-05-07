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
				<a href="notify.php" >Back</a>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Edit Notification</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
	<?php
	$nid=$_GET['id'];
	
	if(isset($_POST['esent'])){
$db = mysql_select_db("capeplacementcell", $conn);
	$fields = array('ndate', 'nnumber', 'notification');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {

		mysql_query("UPDATE capeplacementcell.ntable SET $field='{$_POST[$field]}' WHERE ntable.nnumber={$nid}",$conn);
		}
	}
	$rows =mysql_affected_rows();
if($rows>0){
	
	echo "Notification Editted Successfull";
	
}
else{
	echo "Notification Failed";
}
	}
	
$q=mysql_query("SELECT * FROM capeplacementcell.ntable WHERE nnumber={$nid} ",$conn);
$r=mysql_fetch_array($q);

echo "				<div class=\"row\">\n"; 
echo "                    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-3 form-box\">\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "\n"; 
echo "                    		    <h4>ENTER NEW NOTIFICATION</h4>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"f1-first-name\">Notification Date</label>\n"; 
echo "                                    <input type=\"date\" name=\"ndate\" value=\"{$r['ndate']}\" placeholder=\"Date\" class=\"f1-first-name form-control\" id=\"ndate\">\n"; 
echo "                                </div>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"nnumber\">Notification ID</label>\n"; 
echo "                                    <input type=\"text\" name=\"nnumber\" value=\"{$r['nnumber']}\" placeholder=\"Not. ID\" class=\"nnumber form-control\" id=\"nnumber\">\n"; 
echo "                                </div>\n";                                
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-about-yourself\">New Notification</label>\n"; 
echo "                                    <textarea style=\"width:770px; height:220px;\" name=\"notification\" placeholder=\"New Notification\" \n"; 
echo "                                    	                 class=\"f1-about-yourself form-control\" id=\"newnot\">{$r['notification']}</textarea>\n"; 
echo "                                </div>\n";
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"esent\" value=\"Sent\" onClick=\"window.location.reload();\" class=\"btn btn-next\"></input>\n";  
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