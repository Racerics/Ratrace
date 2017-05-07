<?php require('header.php'); 
		if(isset($_GET['did'])){
			$userid=$_GET['did'];
			$s=$_GET['sem'];
	$squery=mysql_query("DELETE FROM capeplacementcell.marktable WHERE marktable.regid={$userid} AND marktable.Sem={$s}",$conn);
	$result=$_GET['q'];
	}
	
		if(isset($_GET['vid'])){
			$userid=$_GET['vid'];
			$s=$_GET['sem'];
	$squery=mysql_query("UPDATE capeplacementcell.marktable SET marktable.verified='TRUE' WHERE marktable.regid={$userid} AND marktable.Sem={$s} ",$conn);
	$result=$_GET['q'];
	}
	if(isset($_POST['submit'])) {
	// builds the query
    $query = "SELECT DISTINCT s.regid AS regid,Sem,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,L1,L2,GPA,Eligibility,verified FROM capeplacementcell.studtable s LEFT JOIN capeplacementcell.marktable m ON s.regid=m.regid WHERE s.Dept='{$_POST['Dept']}'";
    // define the list of fields
	if(isset($_POST['fname'])||isset($_POST['Sem'])||isset($_POST['Eligibility'])) {
    $fields = array('fname', 'Sem', 'Eligibility');
    $conditions = array();
    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = " AND $field LIKE '%" . mysql_real_escape_string($_POST[$field]) . "%' ";
        }
    }
	// if there are conditions defined
    if(count($conditions) > 0) {
        // append the conditions
        $query .=" ". implode (" ", $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
	}
	}
		if(isset($_POST['regid'])){
		$query .=" AND s.regid LIKE '%" . mysql_real_escape_string($_POST['regid']) . "%' ";
	}
	}
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="teacherpanel.php">Home</a>
            </li>
            <li>
                <a href="search1.php">Marklist</a>
            </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="search1.php" >Back</a>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
	<?php
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Marklist:Results</h2>\n"; 
		echo "\n";
	?>
        <div class="box-icon">
          
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        
		<th>Semester</th>
        <th>Sub1</th>
        <th>Sub2</th>
        <th>Sub3</th>
		<th>Sub4</th>
        <th>Sub5</th>
        <th>Sub6</th>
        <th> Lab1 </th>
		<th> Lab2 </th>
        <th>GPA </th>
        <th>Eligibility</th>
		<th>Verified</th>
        <th>Actions</th>
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
		echo "<tr>\n";
		echo "<td>".$row['Sem']."</td>\n";
        echo "<td class='center'>".$row['Sub1']."</td>\n";
		echo "<td class='center'>".$row['Sub2']."</td>\n";
        echo "<td class='center'>".$row['Sub3']."</td>\n";
        echo "<td class='center'>".$row['Sub4']."</td>\n";
        echo "<td class='center'>".$row['Sub5']."</td>\n";
		echo "<td class='center'>".$row['Sub6']."</td>\n";
		echo "<td class='center'>".$row['L1']."</td>\n";
        echo "<td class='center'>".$row['L2']."</td>\n";
        echo "<td class='center'>".$row['GPA']."</td>\n";
        echo "<td class='center'>".$row['Eligibility']."</td>\n";
		echo "<td class='center'>".$row['verified']."</td>";
		echo "<td class=\"center\">\n"; 
		echo "            <a class=\"btn btn-success\" href=\"views.php?id='{$row['regid']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>\n"; 
		echo "                View\n"; 
		echo "            </a>\n"; 
		echo "            <a class=\"btn btn-info\" href=\"editmark.php?uid='{$row['regid']}'&sem='{$row['Sem']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-edit icon-white\"></i>\n"; 
		echo "                Edit\n"; 
		echo "            </a>\n"; 
		echo "            <a class=\"btn btn-danger\" href=\"?did='{$row['regid']}'&sem='{$row['Sem']}'&q={$result}\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-trash icon-white\"></i>\n"; 
		echo "                Delete\n"; 
		echo "            </a>\n";
		echo "            <a class=\"btn btn-success\" href=\"?vid='{$row['regid']}'&sem='{$row['Sem']}'&q={$result}\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>\n"; 
		echo "                Verify\n";
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