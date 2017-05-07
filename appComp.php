<?php require('header.php'); 

	if(isset($_POST['submit'])) {
	// builds the query
    $query = "SELECT DISTINCT s.regid AS regid, s.fname AS fname,`Dept`, `ccode`, `cname` FROM capeplacementcell.studtable s LEFT JOIN capeplacementcell.appliedtable a ON s.regid=a.regid WHERE ";
    // define the list of fields
			if(isset($_POST['regid'])){
		$query .=" s.regid LIKE '%" . mysql_real_escape_string($_POST['regid']) . "%' ";
	}
			if(isset($_POST['fname'])){
		$query .=" AND s.fname LIKE '%" . mysql_real_escape_string($_POST['fname']) . "%' ";
	}
		$query .=" AND s.Dept LIKE '%" . mysql_real_escape_string($user_dept) . "%' ";
	$query .=" AND ccode IS NOT NULL";
	}
echo "    <div>\n"; 
echo "        <ul class=\"breadcrumb\">\n"; 
echo "            <li>\n"; 
echo "                <a href=\"teacherpanel.php\">Home</a>\n"; 
echo "            </li>\n"; 
echo "            <li>\n"; 
echo "                <a href=\"scomp.php\">Company Applied Search</a>\n"; 
echo "            </li>\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "				<a href=\"#\" onclick=\"history.go(-1)\" >Back</a>\n"; 
echo "        </ul>\n"; 
echo "    </div>\n"; 
echo "\n"; 
echo "    <div class=\"row\">\n"; 
echo "    <div class=\"box col-md-12\">\n"; 
echo "    <div class=\"box-inner\">\n"; 
echo "    <div class=\"box-header well\" data-original-title=\"\">\n";

        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>{$_POST['regid']} Applied Companies :</h2>\n"; 
		echo "\n";
echo "        <div class=\"box-icon\">\n"; 
echo "          \n"; 
echo "        </div>\n"; 
echo "    </div>\n"; 
echo "    <div class=\"box-content\">\n"; 
echo "    <table class=\"table table-striped table-bordered bootstrap-datatable datatable responsive\">\n"; 
echo "    <thead>\n"; 
echo "    <tr>\n"; 
echo "        \n"; 
echo "		<th>Company Code</th>\n"; 
echo "        <th>Company Name</th>\n"; 
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
		echo "<tr>";
        echo "<td class='center'>".$row['ccode']."</td>";
		echo "<td class='center'>".$row['cname']."</td>";
		echo "</tr>";

		}
		mysql_free_result($result);
echo "    </tbody>\n"; 
echo "    </table>\n"; 
echo "    </div>\n"; 
echo "    </div>\n"; 
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

 require('footer.php'); ?>