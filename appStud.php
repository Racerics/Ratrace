<?php require('header.php'); 

	if(isset($_POST['submit'])) {
	// builds the query
    $query = "SELECT DISTINCT s.regid AS regid, s.fname AS fname,`Dept`,email,Mob FROM capeplacementcell.studtable s LEFT JOIN capeplacementcell.appliedtable a ON s.regid=a.regid WHERE s.Dept LIKE '%" . mysql_real_escape_string($user_dept) . "%' ";
    // define the list of fields
	if(isset($_POST['cname'])){
		$query .=" AND a.cname LIKE '%" . mysql_real_escape_string($_POST['cname']) . "%'";
	}
	if(isset($_POST['ccode'])) {
		$query .=" AND a.ccode LIKE '%" . mysql_real_escape_string($_POST['ccode']) . "%'";
	}
	}
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="teacherpanel.php">Home</a>
            </li>
            <li>
                <a href="sstud.php">Students Applied Search</a>
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
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>{$_POST['cname']} Applied Companies :</h2>\n"; 
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
		<th>Contact No:</th>
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
		echo "<td class='center'>".$row['Mob']."</td>";
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