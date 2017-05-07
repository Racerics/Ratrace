<?php require('header.php'); 
		if(isset($_GET['did'])){
			$userid=$_GET['did'];
			$s=$_GET['sem'];
	$squery=mysql_query("DELETE FROM capeplacementcell.marktable WHERE marktable.regid={$userid} AND marktable.Sem={$s}",$conn);
	}
	
$userid=$_GET['id'];
$query1=mysql_query("SELECT * FROM capeplacementcell.studtable WHERE studtable.regid={$userid} ",$conn);
$query2=mysql_query("SELECT * FROM capeplacementcell.studaddress WHERE studaddress.regid={$userid} ",$conn);
$query3=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE marktable.regid={$userid} ",$conn);
$result1=mysql_fetch_array($query1);
		extract($result1);
echo "    <div>\n"; 
echo "        <ul class=\"breadcrumb\">\n"; 
echo "            <li>\n"; 
echo "                <a href=\"studentpanel.php\">Home</a>\n"; 
echo "            </li>\n"; 
echo "            <li>\n"; 
echo "                <a href=\"#\">Student Details</a>\n"; 
echo "            </li>\n"; 
echo "			<li>\n"; 
echo "                <a href=\"#\">Student: {$result1['regid']}</a>\n"; 
echo "            </li>\n";
echo "\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "				<a href=\"#\" onclick=\"history.go(-1)\" >Back</a>\n";
echo "        </ul>\n"; 
echo "    </div>\n"; 
echo "\n"; 
echo "    <div class=\"row\">\n"; 
echo "    <div class=\"box col-md-12\">\n"; 
echo "			<h11>Student Details</h11>\n"; 
echo "			<div class=\"row\">\n"; 
echo "			<div class=\"col-md-12 col-lg-offset-1\">\n";
echo"				<div class=\"row\">\n";	
echo"				<div class=\"col-md-10\">\n";	
echo "				<label for=\"name\">Name : {$result1['fname']}.{$result1['mname']}.{$result1['lname']}</label>\n"; 
echo"				</div>\n";
echo"				</div>\n";
echo"				<div class=\"row\">\n";
echo"				<div class=\"col-md-10\">\n";
echo "				<label for=\"sex\">Sex : {$result1['gender']}</label>\n"; 
echo"				</div>\n";
echo"				</div>\n";
echo"				<div class=\"row\">\n";
echo"				<div class=\"col-md-10\">\n";
echo "				<label for=\"dob\">DoB : {$result1['DoB']}</label>\n";
echo"				</div>\n"; 
echo"				</div>\n";
echo"				<div class=\"row\">\n";
echo"				<div class=\"col-md-10\">\n";
echo "				<label for=\"regid\">Reg ID : {$result1['regid']}</label>\n";
echo"				</div>\n"; 
echo"				</div>\n";
echo"				<div class=\"row\">\n";
echo"				<div class=\"col-md-10\">\n";
echo "				<label for=\"Dept\">Department : {$result1['Dept']}</label>\n";
echo"				</div>\n"; 
echo"				</div>\n";
echo"				<div class=\"row\">\n";
echo"				<div class=\"col-md-10\">\n";
echo "				<label for=\"email\">Email : {$result1['email']}</label>\n";
echo"				</div>\n"; 
echo"				</div>\n";
echo"				<div class=\"row\">\n";
echo"				<div class=\"col-md-10\">\n";
echo "				<label for=\"Mob\">Contact No : {$result1['Mob']}</label>\n";
echo"				</div>\n";
echo"				</div>\n"; 
echo "			</div>\n"; 
echo "			</div>\n"; 

echo "				<label for=\"address\">Student Address:</label>\n"; 
echo "			<div class=\"row\">\n"; 
echo "			<div class=\"col-md-10 col-lg-offset-1\">\n"; 
	$result2=mysql_fetch_array($query2);
	if($result2){
		extract($result2);
echo"				<div class=\"row\">\n";	
echo"				<div class=\"col-md-10\">\n";
echo $result2['line1'];
echo "			</div>\n";
echo "			</div>\n";
echo"\n";
echo"				<div class=\"row\">\n";	
echo"				<div class=\"col-md-10\">\n";
echo $result2['line2'];
echo "			</div>\n";
echo "			</div>\n";
echo"\n";
echo"				<div class=\"row\">\n";	
echo"				<div class=\"col-md-10\">\n";
echo $result2['post'];
echo "			</div>\n";
echo "			</div>\n";
echo"\n";
echo"				<div class=\"row\">\n";	
echo"				<div class=\"col-md-10\">\n";
echo $result2['city'];
echo "			</div>\n";
echo "			</div>\n";
echo"\n";
echo"				<div class=\"row\">\n";	
echo"				<div class=\"col-md-10\">\n";
echo $result2['dist'];
echo "			</div>\n";
echo "			</div>\n";
echo"\n";
echo"				<div class=\"row\">\n";	
echo"				<div class=\"col-md-10\">\n";
echo $result2['state'];
echo "			</div>\n";
echo "			</div>\n";
echo"\n";
echo"				<div class=\"row\">\n";	
echo"				<div class=\"col-md-10\">\n";
echo $result2['country'];
echo "			</div>\n";
echo "			</div>\n";
echo"				<div class=\"row\">\n";	
echo"				<div class=\"col-md-10\">\n";
echo $result2['pin'];
echo "			</div>\n";
echo "			</div>\n";
echo "			</div>\n";
echo "			</div>\n"; 
	}
	
echo "			<div class=\"row\">\n"; 
echo "			<div class=\"col-md-4 col-lg-offset-4\">\n";
		echo "            <a class=\"btn btn-info\" href=\"editallmarks.php?uid='{$userid}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-edit icon-white\"></i>\n"; 
		echo "                Enter Mrks\n"; 
		echo "            </a>\n"; 
echo "			</div>\n";
echo "			</div>\n";

	while($row=mysql_fetch_array($query3))
{	
echo "    <div class=\"box-inner\">\n";
echo "    <div class=\"box-header well\" data-original-title=\"Marks\">\n";
echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Sem:{$row['Sem']}</h2>\n"; 
echo "\n";
echo "        <div class=\"box-icon\">\n";           
echo "       </div>\n";
echo "   </div>\n";
echo "    <div class=\"box-content\">\n";	
echo "    <table class=\"table table-striped table-bordered bootstrap-datatable responsive\">\n"; 
echo "    <thead>\n"; 
echo "    <tr>\n"; 
echo "        \n"; 
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
echo "        <th>Actions</th>\n"; 
echo "    </tr>\n"; 
echo "    </thead>\n"; 
echo "    <tbody>\n";
extract($row);
echo "<tr>";
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
echo "<td class=\"center\">\n"; 
echo "            <a class=\"btn btn-info\" href=\"editmark.php?uid='{$row['regid']}'&sem='{$row['Sem']}'\">\n"; 
echo "                <i class=\"glyphicon glyphicon-edit icon-white\"></i>\n"; 
echo "                Edit\n"; 
echo "            </a>\n"; 
echo "            <a class=\"btn btn-danger\" href=\"?did='{$row['regid']}'&sem='{$row['Sem']}'\">\n"; 
echo "                <i class=\"glyphicon glyphicon-trash icon-white\"></i>\n"; 
echo "                Delete\n"; 
echo "            </a>\n";		
echo "        </td>\n";
echo "</tr>";
echo"    </tbody>\n";
echo"    </table>\n";
}
   ?>
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