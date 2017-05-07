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
echo "    <div>\n"; 
echo "        <ul class=\"breadcrumb\">\n"; 
echo "            <li>\n"; 
echo "                <a href=\"teacherpanel.php\">Home</a>\n"; 
echo "            </li>\n"; 
echo "            <li>\n"; 
echo "                <a href=\"searchdept.php\">Sem. Search</a>\n"; 
echo "            </li>\n";
echo "\n"; 
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
		$res=mysql_query("SELECT * FROM capeplacementcell.hodtable WHERE hodtable.hodid='{$user_check}';",$conn);
		$branch=mysql_fetch_array($res);
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>{$branch['Dept']} Search</h2>\n"; 
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
echo "		<th>RegID</th>\n"; 
echo "        <th>Sub1</th>\n"; 
echo "        <th>Sub2</th>\n"; 
echo "        <th>Sub3</th>\n"; 
echo "		<th>Sub4</th>\n"; 
echo "        <th>Sub5</th>\n"; 
echo "        <th>Sub6</th>\n"; 
echo "        <th> Lab1 </th>\n"; 
echo "		<th> Lab2 </th>\n"; 
echo "        <th>GPA </th>\n"; 
echo "        <th>Eligibility</th>\n";
echo "        <th>Verified</th>\n"; 
echo "        <th>Actions</th>\n"; 
echo "    </tr>\n"; 
echo "    </thead>\n";
echo " <tbody>\n";
    $result=mysql_query("SELECT DISTINCT s.regid AS regid,Sem,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,L1,L2,GPA,Eligibility,verified FROM capeplacementcell.studtable s LEFT JOIN capeplacementcell.marktable m ON s.regid=m.regid WHERE s.Dept='{$_POST['Dept']}' AND Sem='{$_POST['Sem']}';",$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}
	while($row = mysql_fetch_array($result))
{		
		extract($row);  
		echo "<tr>";
		echo "<td>".$row['regid']."</td>";
        echo "<td class='center'>".$row['Sub1']."</td>";
		echo "<td class='center'>".$row['Sub2']."</td>";
        echo "<td class='center'>".$row['Sub3']."</td>";
        echo "<td class='center'>".$row['Sub4']."</td>";
        echo "<td class='center'>".$row['Sub5']."</td>";
		echo "<td class='center'>".$row['Sub6']."</td>";
		echo "<td class='center'>".$row['L1']."</td>";
        echo "<td class='center'>".$row['L2']."</td>";
        echo "<td class='center'>".$row['GPA']."</td>";
        echo "<td class='center'>".$row['Eligibility']."</td>";
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
echo "\n";
?>
<?php require('footer.php'); ?>