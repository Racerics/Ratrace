<?php require('header.php');
		if(isset($_GET['did'])){
			$userid=$_GET['did'];
			$s=$_GET['dat'];
	$squery=mysql_query("DELETE FROM capeplacementcell.mtable WHERE mtable.senderid={$userid} AND mtable.mdate={$s}",$conn);
	}
 ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="teacherpanel.php">Home</a>
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
		<th>ID</th>
		<th>Name</th>
        <th>Message</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
<?php
$check="Teacher";
$que="SELECT * FROM capeplacementcell.mtable WHERE mtable.receiver='{$check}' AND mtable.dept='{$user_dept}' ORDER BY mtable.datem DESC ";
    $result=mysql_query($que,$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}  
	while($row = mysql_fetch_array($result))
{		
		extract($row);
	 echo "<tr>";
		echo "<td>".$row['datem']."</td>";
		echo "<td>".$row['senderid']."</td>";
		echo "<td>".$row['sender']."</td>";
        echo "<td class='center'>".$row['content']."</td>";
		echo "<td class=\"center\">\n"; 
		echo "            <a class=\"btn btn-info\" href=\"viewm.php?did='{$row['receiverid']}'&dat='{$row['datem']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-trash icon-white\"></i>\n"; 
		echo "                View\n"; 
		echo "            </a>\n";
		echo "            <a class=\"btn btn-danger\" href=\"?did='{$row['receiverid']}'&dat='{$row['datem']}'\">\n"; 
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
    </div>
    <!--/span-->

    </div><!--/row-->


<?php require('footer.php'); ?>