<?php require('header.php'); 
		if(isset($_GET['did'])){
			$userid=$_GET['did'];
			$s=$_GET['sem'];
	$squery=mysql_query("DELETE FROM capeplacementcell.marktable WHERE marktable.regid={$userid} AND marktable.Sem={$s}",$conn);
	}
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="studentpanel.php">Home</a>
            </li>
            <li>
                <a href="marklist.php">Marklist</a>
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
<?php echo "       <h2><i class=\"glyphicon glyphicon-user\"></i>Marklist: $user_check</h2>\n"; ?>
		<div class="box-icon">
           
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable responsive">
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
    $result=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} ORDER BY marktable.Sem ASC ;",$conn);
	if($result ==FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}
	while($row = mysql_fetch_array($result))
{		
		extract($row);
	echo "<tr>";
        echo "<td>".$row['Sem']."</td>";
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
		}
   ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->


<?php require('footer.php'); ?>