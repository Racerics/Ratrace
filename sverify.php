<?php require('header.php'); ?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="adminpanel.php">Home</a>
            </li>
            <li>
                <a href="sverify.php">Student Search</a>
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
        <h2><i class="glyphicon glyphicon-user"></i>Verify</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
    <table class="table table-bordered bootstrap-datatable responsive">
        <form method="post" action="verify.php">
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
                <td><input type="int" name="Sem" /></td>
            </tr>
            <tr>
                <td>Dept:</td>
                <td><select type="text" class="form-control" placeholder="Provide your Branch" name="Dept" id="Dept" value="" >
															<option value="">Select Branch</option>
															<option value="Civil Engineering">Civil Engineering</option>
															<option value="Computer Science and Engineering">Computer Science and Engineering</option>
															<option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
															<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
															<option value="Applied Science Engineering">Applied Science Engineering</option>
														</select></td>
            </tr>
            <tr>
                <td>Eligibility:</td>
                <td><select type="text" class="form-control" placeholder="Eligibility" name="Eligibility" id="Eligibility" value="" required="">
															<option value=""></option>
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