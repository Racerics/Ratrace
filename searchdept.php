<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="searchdept.php">Dept. Search</a>
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
        <h2><i class="glyphicon glyphicon-user"></i>Department:Search</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
    <table class="table bootstrap-datatable responsive">
        <form method="post" action="department.php">
            <tr>
                <td>Department</td>
                <td><select type="text" class="form-control" placeholder="Provide your Branch" name="Dept" id="Dept" value="" required="">
															<option value="">Select Branch</option>
															<option value="Civil Engineering">Civil Engineering</option>
															<option value="Computer Science and Engineering">Computer Science and Engineering</option>
															<option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
															<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
															<option value="Applied Science Engineering">Applied Science Engineering</option>
														</select></td>
            </tr>
			<tr>
                <td>Sem:</td>
                <td><select type="text" class="form-control" placeholder="Sem" name="Sem" id="Sem" value="" required="">
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