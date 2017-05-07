<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="teacherpanel.php">Home</a>
            </li>
            <li>
                <a href="messages.php">Message</a>
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
$mail=$_POST['rname'];
$rid2=$_POST['rid'];
$new=$_POST['newnot'];
$id=$user_check;
$check="Teacher";
$d=$user_dept;
$dat=date("Y-m-d H:i:s");
// SQL query to fetch information of registerd users and finds user match.
	$q3="INSERT INTO capeplacementcell.mtable ( `datem`, `sender`, `receiverid`, `receiver`, `dept`, `content`) VALUES ('$dat','$check','$rid2','$mail','$d','$new')";
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
echo "                    			    <label class=\"sr-only\" for=\"rname\">To</label>\n"; 
echo "                                    <input type=\"text\" name=\"rname\" placeholder=\"Name\" class=\"nnumber form-control\" id=\"rname\">\n"; 
echo "                                </div>\n"; 
echo "                    			<div class=\"form-group\">\n"; 
echo "                    			    <label class=\"sr-only\" for=\"rname\">Reg ID</label>\n"; 
echo "                                    <input type=\"text\" name=\"rid\" placeholder=\"Reg ID\" class=\"nnumber form-control\" id=\"rname\">\n"; 
echo "                                </div>\n";                                
echo "                                <div class=\"form-group\">\n"; 
echo "                                    <label class=\"sr-only\" for=\"f1-about-yourself\">New Message</label>\n"; 
echo "                                    <textarea style=\"width:770px; height:220px;\" name=\"newnot\" placeholder=\"New Message\" \n"; 
echo "                                    	                 class=\"f1-about-yourself form-control\" id=\"newnot\"></textarea>\n"; 
echo "                                </div>\n";
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