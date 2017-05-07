<?php require('header.php');
		if(isset($_GET['did'])){
			$userid=$_GET['did'];
			$s=$_GET['dat'];
	$squery=mysql_query("DELETE FROM capeplacementcell.msgtable WHERE msgtable.id={$userid} AND msgtable.mdate={$s}",$conn);
	}
 ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="newmsg.php">Message</a>
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
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Notification Records</h2>\n"; 
		echo "\n";
	?>
	<a class=\"btn btn-success\" href="newmsg.php"> <i class="glyphicon glyphicon-star"></i>New Message
			</a>
        <div class="box-icon">
          
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable responsive">
    <thead>
    <tr>
        
		<th>M-Date</th>
		<th>C-Number</th>
		<th>C-Name</th>
        <th>Message</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
<?php
    $result=mysql_query("SELECT * FROM capeplacementcell.msgtable ORDER BY msgtable.mdate DESC;",$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}  
	while($row = mysql_fetch_array($result))
{		
		extract($row);
	 echo "<tr>";
		echo "<td>".$row['mdate']."</td>";
		echo "<td>".$row['ccode']."</td>";
		echo "<td>".$row['cname']."</td>";
        echo "<td class='center'>".$row['mailtext']."</td>";
		echo "<td class=\"center\">\n"; 
		echo "            <a class=\"btn btn-danger\" href=\"viewm.php?did='{$row['id']}'&dat='{$row['mdate']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-trash icon-white\"></i>\n"; 
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
    </div>
    <!--/span-->

    </div><!--/row-->


<?php require('footer.php'); ?>