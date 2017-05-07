<?php require('header.php'); 
	$db = mysql_select_db("capeplacementcell", $conn);
	if(isset($_POST['submit'])) {
	// builds the query
    $query = "SELECT DISTINCT s.regid AS regid,fname,s.Dept AS Dept,email,Mob,Sem,Eligibility FROM capeplacementcell.studtable s LEFT JOIN capeplacementcell.marktable m ON s.regid=m.regid WHERE s.Dept='{$_POST['Dept']}'";
    // define the list of fields
	if(isset($_POST['regid'])){
		$query .=" AND s.regid LIKE '%" . mysql_real_escape_string($_POST['regid']) . "%' ";
	}
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
	}
echo "    <div>\n"; 
echo "        <ul class=\"breadcrumb\">\n"; 
echo "            <li>\n"; 
echo "                <a href=\"teacherpanel.php\">Home</a>\n"; 
echo "            </li>\n"; 
echo "            <li>\n"; 
echo "                <a href=\"search.php\">Search</a>\n"; 
echo "            </li>\n";
echo "\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "				<a href=\"search.php\" >Back</a>\n";
echo "        </ul>\n"; 
echo "    </div>\n"; 
echo "\n"; 
echo "    <div class=\"row\">\n"; 
echo "    <div class=\"box col-md-12\">\n"; 
echo "    <div class=\"box-inner\">\n"; 
echo "    <div class=\"box-header well\" data-original-title=\"\">\n";
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Search Results</h2>\n"; 
		echo "\n";
echo "        <div class=\"box-icon\">\n"; 
echo "            \n"; 
echo "        </div>\n"; 
echo "    </div>\n"; 
echo "    <div class=\"box-content\">\n"; 
echo "    <table class=\"table table-striped table-bordered bootstrap-datatable datatable responsive\">\n"; 
echo "    <thead>\n"; 
echo "    <tr>\n"; 
echo "        \n"; 
echo "		<th>Reg ID</th>\n"; 
echo "        <th>Name</th>\n"; 
echo "		<th>Department</th>\n"; 
echo "        <th>Sem</th>\n"; 
echo "        <th>Email</th>\n"; 
echo "		<th>Mob</th>\n"; 
echo "		<th>Eligibility</th>\n"; 
echo "        <th>Actions</th>\n"; 
echo "    </tr>\n"; 
echo "    </thead>\n"; 
echo "    <tbody>\n";
    $result=mysql_query($query,$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}  
    
	while($row = mysql_fetch_array($result))
{		
		extract($row);
		echo "<tr>\n";
		echo "<td>".$row['regid']."</td>\n";
        echo "<td class='center'>".$row['fname']."</td>\n";
		echo "<td class='center'>".$row['Dept']."</td>\n";
		echo "<td class='center'>".$row['Sem']."</td>\n";		
        echo "<td class='center'>".$row['email']."</td>\n";
        echo "<td class='center'>".$row['Mob']."</td>\n";
		echo "<td class='center'>".$row['Eligibility']."</td>\n";
		echo "<td class=\"center\">\n";  
		echo "            <a class=\"btn btn-success\" href=\"views.php?id='{$row['regid']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>\n"; 
		echo "                View\n"; 
		echo "            </a>\n"; 
		echo "            <a class=\"btn btn-info\" href=\"editmark.php?uid='{$row['regid']}'&sem='{$row['Sem']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-edit icon-white\"></i>\n"; 
		echo "                Edit\n"; 
		echo "            </a>\n";
		echo "        </td>\n";
		 echo "</tr>\n";

		}
		mysql_free_result($result);
echo "    </tbody>\n"; 
echo "    </table>\n"; 
echo "    </div>\n"; 
echo "    </div>\n"; 
echo "\n"; 
echo "		<SCRIPT LANGUAGE=\"JavaScript\"> \n"; 
echo "	if (window.print) {\n"; 
echo "	document.write('<form><input type=\"button\" name=\"print\" value=\"Print\" onClick=\"window.print()\"></form>');\n"; 
echo "	}\n"; 
echo "	</script>\n"; 
echo "    </div>\n"; 
echo "    <!--/span-->\n"; 
echo "\n"; 
echo "    </div><!--/row-->\n"; 
echo "\n"; 
echo "\n";
?>
<?php require('footer.php'); ?>