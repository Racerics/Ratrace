<?php require('header.php'); 
	$db = mysql_select_db("capeplacementcell", $conn);
	if(isset($_POST['submit'])) {
    // define the list of fields
	if(isset($_POST['regid'])||isset($_POST['fname'])||isset($_POST['Dept'])) {
    $fields = array('regid', 'fname', 'Dept');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" .'" mysql_real_escape_string($_POST[$field])"'. "%'";
        }
    }
	    // builds the query
    $query = "SELECT * FROM capeplacementcell.studtable";
    // if there are conditions defined
    if(count($conditions) > 0) {
        // append the conditions
        $query .= "WHERE " . implode (' OR ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
	}
	}
	if(isset($_POST['Sem'])||isset($_POST['Eligibility'])) {
    $fields = array('Sem', 'Eligibility');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" .'" mysql_real_escape_string($_POST[$field])"'. "%'";
        }
    }
    // builds the query
    $query = "SELECT * FROM capeplacementcell.marktable";
    // if there are conditions defined
    if(count($conditions) > 0) {
        // append the conditions
        $query .= "WHERE " . implode (' OR ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
    }
	}
    $data = mysql_query($query);
	$id=mysql_fetch_array($data);
	}
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="studentpanel.php">Home</a>
            </li>
            <li>
                <a href="search1.php">Search</a>
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
        <th>Email</th>
		<th>Mob</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
<?php
    $result=mysql_query("SELECT * FROM capeplacementcell.studtable WHERE regid={$id['regid']};",$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}  
	while($row = mysql_fetch_array($result))
{		
		extract($row);
    echo "<tr>";		
		echo "<td>".$row['regid']."</td>";
        echo "<td class='center'>".$row['fname']."</td>";
        echo "<td class='center'>".$row['email']."</td>";
        echo "<td class='center'>".$row['Mob']."</td>";
		echo "<td class=\"center\">\n"; 
		echo "            <a class=\"btn btn-success\" href=\"#\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>\n"; 
		echo "                View\n"; 
		echo "            </a>\n"; 
		echo "            <a class=\"btn btn-info\" href=\"#\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-edit icon-white\"></i>\n"; 
		echo "                Edit\n"; 
		echo "            </a>\n"; 
		echo "            <a class=\"btn btn-danger\" href=\"#\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-trash icon-white\"></i>\n"; 
		echo "                Delete\n"; 
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