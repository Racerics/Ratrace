<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="studentpanel.php">Student Dashboard</a>
        </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="#" onclick="history.go(-1)" >Back</a>
    </ul>
</div>
<div class=" row">
    <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="View and edit details" class="well top-block" href="editDetails.php">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Edit Details</div>
            <span class="notification green">1</span>
        </a>
    </div>

  <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Edit your address details" class="well top-block" href="editAddress.php">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Edit Address Details</div>
            <span class="notification green">2</span>
        </a>
    </div>
	

</div>

<?php require('footer.php'); ?>
