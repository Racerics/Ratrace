<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Teacher Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Students Registered" class="well top-block" href="search.php">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Students</div>
			<?php
			$query=mysql_query("SELECT COUNT(DISTINCT regid) as result FROM capeplacementcell.studtable WHERE studtable.Dept='{$user_dept}' ;",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<div>".$data['result']."</div>";
			?>
            <span class="notification green">1</span>
        </a>
    </div>

    <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Companies Sponsored" class="well top-block" href="viewCompanies.php">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Companies</div>
            <?php
			$query=mysql_query("SELECT COUNT(DISTINCT ccode) as result FROM capeplacementcell.companytable;",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<div>".$data['result']."</div>";
			?>
            <span class="notification yellow">2</span>
        </a>
    </div>

    <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="New Notification" class="well top-block" href="notify.php">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Notifications</div>
            <?php
			$query=mysql_query("SELECT COUNT(DISTINCT notification) as result FROM capeplacementcell.ntable;",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<div>".$data['result']."</div>";
			?>
            <span class="notification red">3</span>
        </a>
    </div>
</div>

    <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Edit Marklists" class="well top-block" href="search1.php">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Marklists</div>
			<div> </div>
            <span class="notification green">4</span>
        </a>
    </div>
	
	    <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="View marklist semester-wise" class="well top-block" href="searchdept.php">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Semester</div>
			<div> </div>
            <span class="notification green">5</span>
        </a>
    </div>
	
	  <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Verify and print" class="well top-block" href="sverify.php">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Verification</div>
			<div> </div>
            <span class="notification green">6</span>
        </a>
    </div>
	
	<div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Companies Applied" class="well top-block" href="scomp.php">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Companies Applied</div>
            <span class="notification yellow">7</span>
        </a>
    </div>
	
	<div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Students Applied" class="well top-block" href="sstud.php">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Students Applied</div>
			<div> </div>
            <span class="notification blue">8</span>
        </a>
    </div>
	
	
		<div class="col-md-4 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Edit your details" class="well top-block" href="editDetails.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Edit Details</div>
				<div> </div>
				<span class="notification blue">9</span>
			</a>
		</div>
		
		<div class="col-md-4 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Delete all student records" class="well top-block" href="delrecords.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Delete Records</div>
				<div> </div>
				<span class="notification red">10</span>
			</a>
		</div>
		
		<div class="col-md-4 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Change your password" class="well top-block" href="changep.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Change Password</div>
				<div> </div>
				<span class="notification red">11</span>
			</a>
		</div>
		
	<div class="col-md-5 col-sm-3 col-xs-6">
	
	</div>
	
		<div class="col-md-4 col-sm-3 col-xs-6">
			<div class="box-inner">
				<div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i> Statistics</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="dashboard-list">
					<li>
                        <a href="#">
                            <i class="glyphicon glyphicon-comment"></i>
			<?php
			$query2=mysql_query("SELECT COUNT(DISTINCT datem) as result FROM capeplacementcell.mtable WHERE mtable.receiver='Teacher' AND mtable.dept='{$user_dept}' ;",$conn);
			$data2[]=null;
			if($query2){
			$data2=mysql_fetch_assoc($query2);
			}
			echo "<span class=\"yellow\">".$data2['result']."</span>";
			?>
							Inbox
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-arrow-up"></i>
			<?php
			$query=mysql_query("SELECT COUNT(DISTINCT regid) as result FROM capeplacementcell.studtable WHERE studtable.Dept='{$user_dept}' ;",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<span class=\"blue\">".$data['result']."</span>";
			?>
                            Total Registrations
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-arrow-down"></i>
			<?php
    $rt="SELECT COUNT(s.regid) as result FROM capeplacementcell.appliedtable WHERE appliedtable.department='{$user_dept}' ";
			$qt=mysql_query($rt,$conn);
			$data3['result']=0;
			if($qt){
			$data3=mysql_fetch_assoc($qt);
			}
			echo "<span class=\"green\">".$data3['result']."</span>";
			?>
                            Total Submitions
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-minus"></i>	
			<?php
    $r4="SELECT COUNT(s.regid) as result FROM capeplacementcell.studtable s LEFT JOIN capeplacementcell.marktable m ON s.regid=m.regid WHERE s.Dept='{$user_dept}' AND m.verified!='TRUE' ";
			$qr4=mysql_query($r4,$conn);
			$data4=mysql_fetch_assoc($qr4);
			echo "<span class=\"red\">".$data4['result']."</span>";
			?>
                            Marklist Not Verified
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	
		
    <!--/span-->
</div>

<?php require('footer.php'); ?>
