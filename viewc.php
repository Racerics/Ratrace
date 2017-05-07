<?php require('header.php'); 

$userid=$_GET['id'];
$query1=mysql_query("SELECT * FROM capeplacementcell.companytable WHERE companytable.ccode={$userid} ",$conn);
$result1=mysql_fetch_array($query1);
		extract($result1);
echo "    <div>\n"; 
echo "        <ul class=\"breadcrumb\">\n"; 
echo "            <li>\n"; 
echo "                <a href=\"studentpanel.php\">Home</a>\n"; 
echo "            </li>\n"; 
echo "            <li>\n"; 
echo "                <a href=\"#\">Company Details</a>\n"; 
echo "            </li>\n"; 
echo "			<li>\n"; 
echo "                <a href=\"#\">Company Code: {$result1['ccode']}</a>\n"; 
echo "            </li>\n";
echo "\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;\n"; 
echo "				<a href=\"viewCompanies.php\" >Back</a>\n";
echo "        </ul>\n"; 
echo "    </div>\n"; 
echo "\n"; 
echo "    <div class=\"row\">\n"; 
echo "    <div class=\"box col-md-12\">\n"; 
echo "			<h3>Company Details</h3>\n"; 
echo "			<div class=\"row\">\n"; 
echo "			<div class=\"col-md-12 col-lg-offset-0\">\n";
echo"				<div class=\"row\">\n";	
echo"				<div class=\"col-md-10\">\n";	
echo "				<label for=\"name\">Company Name : {$result1['cname']}</label>\n"; 
echo"				</div>\n";
echo"				</div>\n";
echo"				<div class=\"row\">\n";
echo"				<div class=\"col-md-10\">\n";
echo "				<label for=\"dob\">Placement Date : {$result1['dob']}</label>\n";
echo"				</div>\n"; 
echo"				</div>\n";
echo"				<div class=\"row\">\n";
echo"				<div class=\"col-md-10\">\n";
echo "				<label for=\"regid\">C Code : {$result1['ccode']}</label>\n";
echo"				</div>\n"; 
echo"				</div>\n";
echo"				<div class=\"row\">\n";
echo"				<div class=\"col-md-10\">\n";
echo "				<label for=\"email\">Email : {$result1['cmail']}</label>\n";
echo"				</div>\n"; 
echo"				</div>\n";
echo"				<div class=\"row\">\n";
echo"				<div class=\"col-md-10\">\n";
echo "				<label for=\"Mob\">Contact No : {$result1['cmob']}</label>\n";
echo"				</div>\n";
echo"				</div>\n"; 
echo "			</div>\n"; 
echo "			</div>\n"; 

echo "				<label for=\"address\">Company Details:</label>\n"; 
echo "			<div class=\"row\">\n"; 
echo "			<div class=\"col-md-8 col-lg-offset-2\">\n"; 
echo $result1['cinf'];
echo "			</div>\n"; 
echo "			</div>\n";

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