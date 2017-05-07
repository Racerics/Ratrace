<?php require('header.php'); 

echo "    <div>\n"; 
echo "        <ul class=\"breadcrumb\">\n"; 
echo "            <li>\n"; 
echo "                <a href=\"studentpanel.php\">Home</a>\n"; 
echo "            </li>\n"; 
echo "            <li>\n"; 
echo "                <a href=\"form.php\">Forms</a>\n"; 
echo "            </li>\n"; 
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
        echo "<h2><i class=\"glyphicon glyphicon-user\"></i>Uploaded Forms</h2>\n"; 
		echo "\n";
echo "        <div class=\"box-icon\">\n"; 
echo "            \n"; 
echo "        </div>\n"; 
echo "    </div>\n"; 
echo "    <div class=\"box-content\">\n"; 
echo "    <table class=\"table table-striped table-bordered bootstrap-datatable responsive\">\n"; 
echo "    <thead>\n"; 
echo "    <tr>\n"; 
echo "        \n"; 
echo "		<th>Form ID</th>\n"; 
echo "        <th>Name</th>\n"; 
echo "        <th>Size</th>\n"; 
echo "        <th>Type</th>\n"; 
echo "        <th>Actions</th>\n"; 
echo "    </tr>\n"; 
echo "    </thead>\n"; 
echo "    <tbody>\n";
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
		echo "            <a class=\"btn btn-info\" href=\"viewcon.php?id='{$row['id']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>\n"; 
		echo "                View Content\n"; 
		echo "            </a>\n";  
		echo "            <a class=\"btn btn-success\" href=\"down.php?file='{$row['name']}'\">\n"; 
		echo "                <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>\n"; 
		echo "                Download\n"; 
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
 require('footer.php'); ?>