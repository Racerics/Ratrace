<?php require('header.php'); 
		if(isset($_GET['did'])){
			$userid=$_GET['did'];
	$squery=mysql_query("DELETE FROM capeplacementcell.companytable WHERE companytable.ccode={$userid} ",$conn);
	}
?>  
  <div>
        <ul class="breadcrumb">
            <li>
                <a href="teacherpanel.php">Home</a>
            </li>
            <li>
                <a href="viewCompanies.php">Companies</a>
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
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Company Records</h2>\n"; 
		echo "\n";
	?>
        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable responsive">
    <thead>
    <tr>
        
		<th>Comp: ID</th>
        <th>C-Name</th>
        <th>C-Date</th>
        <th>C-Email</th>
		<th>C-Contact</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
<?php
    $result=mysql_query("SELECT * FROM capeplacementcell.companytable WHERE 1;",$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}  
	while($row = mysql_fetch_array($result))
{		
		extract($row);
	echo "<tr>";
		echo "<td>".$row['ccode']."</td>";
        echo "<td class='center'>".$row['cname']."</td>";
		echo "<td class='center'>".$row['dob']."</td>";
        echo "<td class='center'>".$row['cmail']."</td>";
        echo "<td class='center'>".$row['cmob']."</td>";
		echo "<td class=\"center\">\n";
		echo "            <a class=\"btn btn-success\" href=\"viewc.php?id='{$row['ccode']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>\n"; 
		echo "                View\n"; 
		echo "            </a>\n"; 
		echo "            <a class=\"btn btn-info\" href=\"Subm.php?id='{$row['ccode']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-edit icon-white\"></i>\n"; 
		echo "                Submissions\n"; 
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