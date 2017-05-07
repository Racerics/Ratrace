<?php require('header.php'); 
if(isset($_GET['did'])){
	$uid=$_GET['did'];
	
	$q11=mysql_query("SELECT * FROM capeplacementcell.studtable WHERE regid={$user_check}",$conn);
	$r11=mysql_fetch_array($q11);
	$q12=mysql_query("SELECT cname FROM capeplacementcell.companytable WHERE ccode={$uid}",$conn);
	$r12=mysql_fetch_array($q12);
	$q1=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='1' ",$conn);
	$r1=mysql_fetch_array($q1);	
	$q2=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='2' ",$conn);
	$r2=mysql_fetch_array($q2);	
	$q3=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='3' ",$conn);
	$r3=mysql_fetch_array($q3);	
	$q4=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='4' ",$conn);
	$r4=mysql_fetch_array($q4);	
	$q5=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='5' ",$conn);
	$r5=mysql_fetch_array($q5);	
	$q6=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='6' ",$conn);
	$r6=mysql_fetch_array($q6);	
	if(($r1['verified']=='TRUE')&&($r2['verified']=='TRUE')&&($r3['verified']=='TRUE')&&($r4['verified']=='TRUE')&&($r5['verified']=='TRUE')&&($r6['verified']=='TRUE')){
	$comp='TRUE';
	$r=$r11['fname'];
	$d=$r11['Dept'];
	$s=$r12['cname'];
	$u=$user_check;
	$que="INSERT INTO capeplacementcell.appliedtable (`regid`, `fname`, `department`, `ccode`, `cname`) VALUES ('$u', '$r', '$d', '$u', '$s') ";
	$quer1=mysql_query($que,$conn);
	if($quer1){
		echo "Submission Successfull";
	}
	else{
		echo "Submission Unsuccessfull";
	}
	}
	else{
		echo "You are not Eligible to Participate";
	}
}
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="studentpanel.php">Home</a>
            </li>
            <li>
                <a href="viewCompanies.php">Companies</a>
            </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="studentpanel.php" >Back</a>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
	<?php
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Company Records</h2>\n"; 
		echo "\n";
	?>
        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable responsive">
    <thead>
    <tr>
        
		<th>Comp: ID</th>
        <th>C-Name</th>
        <th>C-Date</th>
        <th>C-Email</th>
		<th>C-Contact</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
<?php
    $result=mysql_query("SELECT * FROM capeplacementcell.companytable WHERE 1;",$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}  
	while($row = mysql_fetch_array($result))
{		
		extract($row);
    echo "<tr>";
		echo "<td>".$row['ccode']."</td>";
        echo "<td class='center'>".$row['cname']."</td>";
		echo "<td class='center'>".$row['dob']."</td>";
        echo "<td class='center'>".$row['cmail']."</td>";
        echo "<td class='center'>".$row['cmob']."</td>";
		echo "<td class=\"center\">\n"; 
		echo "            <a class=\"btn btn-success\" href=\"viewc.php?id='{$row['ccode']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>\n"; 
		echo "                View\n"; 
		echo "            </a>\n"; 
		echo "            <a class=\"btn btn-info\" href=\"?did='{$row['ccode']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-edit icon-white\"></i>\n"; 
		echo "                Participate\n"; 
		echo "            </a>\n"; 
		echo "        </td>\n";
    echo "</tr>";
		}
		mysql_free_result($result);
   ?>
    </tbody>
    </table>
    </div>
    </div>
		<SCRIPT LANGUAGE="JavaScript"> 
	if (window.print) {
	document.write('<form><input type="button" name="print" value="Print" onClick="window.print()"></form>');
	}
	</script>
    </div>
    <!--/span-->

    </div><!--/row-->


<?php require('footer.php'); ?>