<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="message.php">Message</a>
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
        <h2><i class="glyphicon glyphicon-user"></i>New Message</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
	<?php
	if(isset($_POST['sent'])){
$email=$_POST['mail'];
$new=$_POST['newnot'];
$id=$user_check;
$q1=mysql_query("SELECT * FROM capeplacementcell.companytable WHERE companytable.cmail='{$email}' ",$conn);
if($q1){
$r1=mysql_fetch_assoc($q1);
extract ($r1);}
$q2=mysql_query("SELECT * FROM capeplacementcell.admintable WHERE admintable.Adminid={$id} ",$conn);
if($q2){
$r2=mysql_fetch_assoc($q2);
extract ($r2);}
$fname=$r2['Adminname'];
$name=$r1['cname'];
$code=$r1['ccode'];
$dat=date("Y-m-d");
// SQL query to fetch information of registerd users and finds user match.
	$q3="INSERT INTO capeplacementcell.msgtable ( `id`, `fname`, `mdate`, `cname`, `cmail`, `ccode`, `mailtext`) VALUES ('$id','$fname','$dat','$name','$email','$code','$new')";
$query = mysql_query($q3, $conn);
if($query){
	echo "Message Sent Successfull";
}
else{
	echo "Sent Failed";
}
	}
echo "				<div class=\"row\">\n"; 
echo "                    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-2 form-box\">\n"; 
echo "                    	<form role=\"form\" action=\"\" method=\"post\" class=\"f1\">\n"; 
echo "\n"; 
echo "                    		    <h4>ENTER NEW MAIL</h4>\n";
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"nnumber\">Email Address</label>\n"; 
echo "                                    <input type=\"text\" name=\"mail\" placeholder=\"Company Email\" class=\"nnumber form-control\" id=\"nnumber\">\n"; 
echo "                                </div>\n";                                
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-about-yourself\">New Message</label>\n"; 
echo "                                    <textarea style=\"width:770px; height:220px;\" name=\"newnot\" placeholder=\"New Message\" \n"; 
echo "                                    	                 class=\"f1-about-yourself form-control\" id=\"newnot\"></textarea>\n"; 
echo "                                </div>\n";
echo "                            </fieldset>\n"; 
echo "                                <div class=\"f1-buttons\">\n"; 
echo "                                    <input type=\"submit\" name=\"sent\" value=\"Sent\" class=\"btn btn-next\"></input>\n";  
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