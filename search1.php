<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="teacherpanel.php">Home</a>
            </li>
            <li>
                <a href="search1.php">Marklist</a>
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
        <h2><i class="glyphicon glyphicon-user"></i>Marklist:Search</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
    <table class="table table-bordered bootstrap-datatable responsive">
        <form method="post" action="marklist.php">
            <tr>
                <td>Reg ID:</td>
                <td><input type="text" name="regid" /></td>
            </tr>
			<tr>
                <td>Name:</td>
                <td><input type="text" name="fname" /></td>
            </tr>
            
            <tr>
                <td>Sem:</td>
                <td><select type="text" class="form-control" placeholder="Sem" name="Sem" id="Sem" value="">
															<option value="">Select Sem</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>	
															<option value="8">8</option>															
														</select></td>
            </tr>
            <tr>
                <td>Dept:</td>
                <td><select type="text" class="form-control" placeholder="Provide your Branch" name="Dept" id="Dept" value="" required="">
<?php  echo"                                            <option value=\"{$user_dept}\">{$user_dept}</option>\n";?>
														</select></td>
            </tr>
                <td>Eligibility:</td>
                <td><select type="text" class="form-control" placeholder="Eligibility" name="Eligibility" id="Eligibility" value="">
															<option value="">Eligibility</option>
															<option value="PASS">PASS</option>
															<option value="FAIL">FAIL</option>															
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