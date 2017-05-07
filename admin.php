<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Admin Dashboard</a>
        </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="#" onclick="history.go(-1)" >Back</a>
    </ul>
</div>
<div class=" row">

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Co-Admin Registered" class="well top-block" href="viewAdmins.php">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Co-Admins</div>
            <?php
			$query=mysql_query("SELECT COUNT(DISTINCT Adminid) as result FROM capeplacementcell.admintable;",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<div>".$data['result']."</div>";
			?>
            <span class="notification blue">1</span>
        </a>
    </div>

	<div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Add new Admin" class="well top-block" href="addAdmin.php">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Add Admin</div>
			<div> </div>
            <span class="notification green">2</span>
        </a>
    </div>
		
		<div class="col-md-3 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Remove Admin" class="well top-block" href="removeAdmin.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Remove Admin</div>
				<div> </div>
				<span class="notification red">3</span>
			</a>
		</div>
			
	<div class="col-md-4 col-sm-3 col-xs-6">

	</div>
	<div class="col-md-4 col-sm-3 col-xs-6">
	</div>
	
	<div class="col-md-4 col-sm-3 col-xs-6">
			
    </div>
	
		
    <!--/span-->
</div>

<?php require('footer.php'); ?>
