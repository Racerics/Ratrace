<?php require('header.php'); 

$userid=$_GET['id'];
$squery1=mysql_query("SELECT * FROM capeplacementcell.companytable WHERE companytable.ccode={$userid} ",$conn);
$sresult1=mysql_fetch_array($squery1);
		extract($sresult1);
		
// builds the query
$query = "SELECT DISTINCT s.regid AS regid, s.fname AS fname,`Dept`,email FROM capeplacementcell.studtable s LEFT JOIN capeplacementcell.appliedtable a ON s.regid=a.regid WHERE ccode={$userid} ";

?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="viewCompanies.php">View Companies</a>
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
	<?php
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i> {$sresult1['cname']} Applied Students :</h2>\n"; 
		echo "\n";
	?>
        <div class="box-icon">
          
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        
		<th>Reg ID</th>
        <th>Student Name</th>
        <th>Department</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
<?php
    $result=mysql_query($query,$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}
	while($row = mysql_fetch_array($result))
{		
		extract($row);  
		echo "<tr>";
        echo "<td class='center'>".$row['regid']."</td>";
		echo "<td class='center'>".$row['fname']."</td>";
		echo "<td class='center'>".$row['Dept']."</td>";
		echo "<td class='center'>".$row['email']."</td>";
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