<?php require('header.php'); 

	if(isset($_POST['submit'])) {
	// builds the query
    $query = "SELECT DISTINCT s.regid AS regid, s.fname AS fname,`Dept`,email FROM capeplacementcell.studtable s LEFT JOIN capeplacementcell.appliedtable a ON s.regid=a.regid WHERE ";
    // define the list of fields
	if(isset($_POST['ccode'])) {
    $fields = array('ccode');
    $conditions = array();
    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = " AND $field LIKE '%" . mysql_real_escape_string($_POST[$field]) . "%'";
        }
    }
	// if there are conditions defined
    if(count($conditions) > 0) {
        // append the conditions
        $query .=" ". implode (" ", $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
	}
	}
	}
	
$com=("SELECT * FROM capeplacementcell.companytable WHERE ccode={$_POST['ccode']} ",$conn);
$c=mysql_fetch_array($com);
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="teacherpanel.php">Home</a>
            </li>
            <li>
                <a href="viewCompanies.php">Students Applied Search</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
	<?php
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Applied Students :</h2>\n"; 
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