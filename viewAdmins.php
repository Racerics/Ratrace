<?php require('header.php'); 
		if(isset($_GET['did'])){
			$userid=$_GET['did'];
	$squery=mysql_query("DELETE FROM capeplacementcell.admintable WHERE admintable.Adminid={$userid} ",$conn);
	}
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="viewAdmins.php">Admins</a>
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
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Admin Records</h2>\n"; 
		echo "\n";
	?>
        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable responsive">
    <thead>
    <tr>
        
		<th>Reg ID</th>
        <th>Name</th>
        <th>Department</th>
        <th>Email</th>
		<th>Mob</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
<?php
    $result=mysql_query("SELECT * FROM capeplacementcell.admintable WHERE 1;",$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}  
	while($row = mysql_fetch_array($result))
{		
		extract($row);
	echo "<tr>";
		echo "<td>".$row['Adminid']."</td>";
        echo "<td class='center'>".$row['Adminname']."</td>";
		echo "<td class='center'>".$row['Adminpswd']."</td>";
        echo "<td class='center'>".$row['Adminemail']."</td>";
        echo "<td class='center'>".$row['Adminmob']."</td>";
		echo "<td class=\"center\">\n";
		echo "            <a class=\"btn btn-danger\" href=\"?did='{$row['Adminid']}'\">\n"; 
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
	<SCRIPT LANGUAGE="JavaScript"> 
	if (window.print) {
	document.write('<form><input type="button" name="print" value="Print" onClick="window.print()"></form>');
	}
	</script>
    </div>
    <!--/span-->

    </div><!--/row-->


<?php require('footer.php'); ?>