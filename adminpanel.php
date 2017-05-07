<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Admin Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Students Registered" class="well top-block" href="search.php">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Students</div>
			<?php
			$query=mysql_query("SELECT COUNT(DISTINCT regid) as result FROM capeplacementcell.studtable;",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<div>".$data['result']."</div>";
			?>
            <span class="notification blue">1</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Teachers Registered" class="well top-block" href="viewTeachers.php">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Co-Teachers</div>
            <?php
			$query=mysql_query("SELECT COUNT(DISTINCT hodid) as result FROM capeplacementcell.hodtable;",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<div>".$data['result']."</div>";
			?>
            <span class="notification blue">2</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Companies Registered" class="well top-block" href="viewCompanies.php">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Companies</div>
            <?php
			$query=mysql_query("SELECT COUNT(DISTINCT ccode) as result FROM capeplacementcell.companytable;",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<div>".$data['result']."</div>";
			?>
            <span class="notification yellow">3</span>
        </a>
    </div>
	
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="New Notifications" class="well top-block" href="notify.php">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Notifications</div>
            <?php
			$query=mysql_query("SELECT COUNT(DISTINCT notification) as result FROM capeplacementcell.ntable;",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<div>".$data['result']."</div>";
			?>
            <span class="notification red">4</span>
        </a>
    </div>
</div>
	    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="View marklist department-wise" class="well top-block" href="searchdept.php">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Department</div>
			<div> </div>
            <span class="notification green">5</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Edit Marklists" class="well top-block" href="search1.php">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Marklists</div>
			<div> </div>
            <span class="notification green">6</span>
        </a>
    </div>
		
		<div class="col-md-3 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Verify and print marks" class="well top-block" href="sverify.php">
				<i class="glyphicon glyphicon-star green"></i>

				<div>Verification</div>
				<div> </div>
				<span class="notification green">7</span>
			</a>
		</div>
		
	<div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Companies Applied" class="well top-block" href="scomp.php">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Companies Applied</div>
            <span class="notification yellow">8</span>
        </a>
    </div>
	
	<div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Students Applied" class="well top-block" href="sstud.php">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Students Applied</div>
			<div> </div>
            <span class="notification blue">9</span>
        </a>
    </div>
	
		<div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Register new Student" class="well top-block" href="addStudent.php">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Add Student</div>
			<div> </div>
            <span class="notification blue">10</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Register new Teacher" class="well top-block" href="addTeacher.php">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Add Teacher</div>
			<div> </div>
            <span class="notification green">11</span>
        </a>
    </div>
		
		<div class="col-md-3 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Remove Student" class="well top-block" href="removeStudent.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Remove Student</div>
				<div> </div>
				<span class="notification red">12</span>
			</a>
		</div>
		
	<div class="col-md-3 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Remove Teacher" class="well top-block" href="removeTeacher.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Remove Teacher</div>
				<div> </div>
				<span class="notification red">13</span>
			</a>
		</div>
		
	<div class="col-md-3 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Delete all company records" class="well top-block" href="delcrecords.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Delete Company</div>
				<div> </div>
				<span class="notification red">14</span>
			</a>
		</div>

		<div class="col-md-3 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Delete all student records" class="well top-block" href="delrecords.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Delete Records</div>
				<div> </div>
				<span class="notification red">15</span>
			</a>
		</div>
		
		<div class="col-md-3 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Change your password" class="well top-block" href="changep.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Change Password</div>
				<div> </div>
				<span class="notification red">16</span>
			</a>
		</div>
		
		<div class="col-md-3 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Create View Other Admins" class="well top-block" href="admin.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Other Admins</div>
				<div> </div>
				<span class="notification red">17</span>
			</a>
		</div>
		
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Edit your details" class="well top-block" href="editDetails.php">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Edit Details</div>
			<div> </div>
            <span class="notification green">18</span>
        </a>
    </div>
		
		<div class="col-md-5 col-sm-3 col-xs-6">
			
        </div>
	
		<div class="col-md-4 col-sm-3 col-xs-6">
			<div class="box-inner">
				<div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list"></i> Recent Statistics</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
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
                            <i class="glyphicon glyphicon-arrow-up"></i>
			<?php
    $r4="SELECT COUNT(s.regid) as result FROM capeplacementcell.studtable s LEFT JOIN capeplacementcell.marktable m ON s.regid=m.regid WHERE m.verified='TRUE' ";
			$qr4=mysql_query($r4,$conn);
			$ddata4['result']=0;
			if($qr4){
			$data4=mysql_fetch_assoc($qr4);
			}
			echo "<span class=\"blue\">".$data4['result']."</span>";
			?>
                            Marks Completely Verified
                        </a>
                    </li>
                    <li>
                        <a href="#">    
                        <i class="glyphicon glyphicon-arrow-down"></i>
			<?php
    $rt="SELECT COUNT(regid) as result FROM capeplacementcell.appliedtable WHERE 1 ";
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
						<i class="glyphicon glyphicon-comment"></i>		
			<?php
			$query2=mysql_query("SELECT COUNT(DISTINCT datem) as result FROM capeplacementcell.mtable WHERE mtable.receiver='Admin' ;",$conn);
			$data2[]=0;
			if($query2){
			$data2=mysql_fetch_assoc($query2);
			}
			echo "<span class=\"yellow\">".$data2['result']."</span>";
			?>
                            Student Requests
                        </a>
                    </li>
                    <li>
                        <a href="#">
						<i class="glyphicon glyphicon-comment"></i>	
			<?php
			$query5=mysql_query("SELECT COUNT(DISTINCT datem) as result FROM capeplacementcell.msgtable WHERE msgtable.id='{$user_check}' ;",$conn);
			$data5['result']=0;
			if($query5){
			$data5=mysql_fetch_assoc($query5);
			}
			echo "<span class=\"red\">".$data5['result']."</span>";
			?>
                            Company Mails
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	
		
    <!--/span-->
</div>

<?php require('footer.php'); ?>
