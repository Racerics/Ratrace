<?php require('header.php'); 
		if(isset($_GET['did'])){
			$userid=$_GET['did'];
	$squery=mysql_query("DELETE FROM capeplacementcell.formtable WHERE formtable.id={$userid} ",$conn);
	}
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="viewf.php">Forms</a>
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
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Uploaded Forms</h2>\n"; 
		echo "\n";
	?>
        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable responsive">
    <thead>
    <tr>
        
		<th>Form ID</th>
        <th>Name</th>
        <th>Size</th>
        <th>Type</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
<?php
    $result=mysql_query("SELECT * FROM capeplacementcell.formtable WHERE 1;",$conn);
	if($result == FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}  
	while($row = mysql_fetch_array($result))
{		
		extract($row);
	    echo "<tr>";
		echo "<td>".$row['id']."</td>";
        echo "<td class='center'>".$row['name']."</td>";
		echo "<td class='center'>".$row['size']."</td>";
        echo "<td class='center'>".$row['type']."</td>";
		echo "<td class=\"center\">\n"; 
		echo "            <a class=\"btn btn-success\" href=\"viewcon.php?id='{$row['id']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>\n"; 
		echo "                View Content\n"; 
		echo "            </a>\n"; 
		echo "            <a class=\"btn btn-danger\" href=\"?did='{$row['id']}'\">\n"; 
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