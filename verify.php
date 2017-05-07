<?php require('header.php'); 
	$db = mysql_select_db("capeplacementcell", $conn);
	if(isset($_POST['submit'])) {
	// builds the query
    $query = "SELECT DISTINCT s.regid AS regid,fname,Sem,GPA,Eligibility FROM capeplacementcell.studtable s LEFT JOIN capeplacementcell.marktable m ON s.regid=m.regid WHERE s.Dept='{$_POST['Dept']}'";
    // define the list of fields
	if(isset($_POST['fname'])||isset($_POST['Sem'])||isset($_POST['Eligibility'])) {
    $fields = array('fname', 'Sem', 'Eligibility');
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
	if(isset($_POST['regid'])){
		$query .=" AND s.regid='{$_POST['regid']}' ";
	}
	}
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="teacherpanel.php">Home</a>
            </li>
            <li>
                <a href="sverify.php">Search</a>
            </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="sverify.php" >Back</a>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
	<?php
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Search Results</h2>\n"; 
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
        <th>Name</th>
        <th>Sem</th>
		<th>GPA</th>
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
		echo "<tr>";
		echo "<td>".$row['regid']."</td>";
        echo "<td class='center'>".$row['fname']."</td>";
        echo "<td class='center'>".$row['Sem']."</td>";
        echo "<td class='center'>".$row['GPA']."</td>";
		echo "<td class='center'>".$row['Eligibility']."</td>";
		echo "<td class='center'>".$row['Verified']."</td>";
		echo "<td class=\"center\">\n";  
		echo "            <a class=\"btn btn-success\" href=\"views.php?id='{$row['regid']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>\n"; 
		echo "                View\n"; 
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