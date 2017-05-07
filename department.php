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
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="searchdept.php">Sem. Search</a>
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
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>{$_POST['Dept']} Search</h2>\n"; 
		echo "\n";
	?>
        <div class="box-icon">
          
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        
		<th>RegID</th>
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