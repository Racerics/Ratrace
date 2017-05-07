<?php require('header.php'); 
		if(isset($_GET['did'])){
			$s=$_GET['did'];
	$squery=mysql_query("DELETE FROM capeplacementcell.ntable WHERE ntable.ndate={$s}",$conn);
	}
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="notify.php">Notifications</a>
            </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="adminpanel.php" >Back</a>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
	<?php
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Notification Records</h2>\n"; 
		echo "\n";
	?>
	<a class=\"btn btn-success\" href="newnoti.php"> <i class="glyphicon glyphicon-star"></i>New Notification 
			</a>
        <div class="box-icon">
          
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        
		<th>N-Date</th>
		<th>N-Number</th>
        <th>Notification</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
<?php
    $result=mysql_query("SELECT * FROM capeplacementcell.ntable ORDER BY ntable.ndate DESC;",$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}  
	while($row = mysql_fetch_array($result))
{		
		extract($row);
	echo "<tr>";
		echo "<td>".$row['ndate']."</td>";
		echo "<td>".$row['nnumber']."</td>";
        echo "<td class='center'>".$row['notification']."</td>";
		echo "<td class=\"center\">\n"; 
		echo "            <a class=\"btn btn-info\" href=\"editn.php?id='{$row['nnumber']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-edit icon-white\"></i>\n"; 
		echo "                Edit\n"; 
		echo "            </a>\n"; 
		echo "            <a class=\"btn btn-danger\" href=\"?did='{$row['ndate']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-trash icon-white\"></i>\n"; 
		echo "                Remove\n"; 
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
    </div>
    <!--/span-->

    </div><!--/row-->


<?php require('footer.php'); ?>