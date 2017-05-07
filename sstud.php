<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="sstud.php">Student Search</a>
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
        <h2><i class="glyphicon glyphicon-user"></i>Details:Search</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
    <table class="table table-bordered bootstrap-datatable responsive">
        <form method="post" action="appStud.php">
            <tr>
                <td>Company Code:</td>
                <td><input type="text" name="ccode" /></td>
            </tr>
			<tr>
                <td>Company Name:</td>
                <td><select type="text" class="form-control" placeholder="Select Company" name="cname" id="cname" value="" >
															<option value="">Select Company</option>
<?php
$q=mysql_query("SELECT cname FROM capeplacementcell.companytable WHERE 1",$conn);
$result=mysql_fetch_array($q);
	echo "														<option value=\"{$result['cname']}\">{$result['cname']}</option>\n"; ?>
														</select></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Search" /></td>
            </tr>
        </form>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->


<?php
 require('footer.php');
 ?>