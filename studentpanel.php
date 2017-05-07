<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="studentpanel.php">Student Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="View marklist semester-wise" class="well top-block" href="marklist.php">
            <i class="glyphicon glyphicon-star green"></i>

            <div>View Marklists</div>
			<?php
			$query=mysql_query("SELECT COUNT(DISTINCT Sem) as result FROM capeplacementcell.marktable WHERE regid={$user_check};",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<div>".$data['result']."</div>";
			?>
            <span class="notification green">1</span>
        </a>
    </div>

    <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Apply for Companies" class="well top-block" href="viewCompanies.php">
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
        <a data-toggle="tooltip" title="Submit Marks" class="well top-block" href="subMarks.php">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Submit Marks</div>
			<div> </div>
            <span class="notification green">4</span>
        </a>
    </div>
	
	    <div class="col-md-4 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Edit your details" class="well top-block" href="edit.php">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Edit Details</div>
			<div> </div>
            <span class="notification green">5</span>
        </a>
    </div>
	
		<div class="col-md-4 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="View companies applied" class="well top-block" href="appComp.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Companies Applied</div>
				<div> </div>
				<span class="notification green">6</span>
			</a>
		</div>
	
	<div class="col-md-4 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Change your Reg ID" class="well top-block" href="changer.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Change Reg ID</div>
				<div> </div>
				<span class="notification red">7</span>
			</a>
		</div>
		
		<div class="col-md-4 col-sm-3 col-xs-6">
			<a data-toggle="tooltip" title="Change your password" class="well top-block" href="changep.php">
				<i class="glyphicon glyphicon-user blue"></i>

				<div>Change Password</div>
				<div> </div>
				<span class="notification red">8</span>
			</a>
		</div>
		
		<div class="col-md-4 col-sm-3 col-xs-6 col-lg-offset-7">
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
                            <i class="glyphicon glyphicon-arrow-down"></i>
			<?php
			$query=mysql_query("SELECT COUNT(DISTINCT Sem) as result FROM capeplacementcell.marktable WHERE marktable.regid='{$user_check}' ;",$conn);
			$data=mysql_fetch_assoc($query);
			echo "<span class=\"red\">".$data['result']."</span>";
			?>
                            Total Mark's list
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-plus"></i>
			<?php
			$query1=mysql_query("SELECT COUNT(DISTINCT Sem) as result FROM capeplacementcell.marktable WHERE marktable.regid='{$user_check}' AND marktable.verified='TRUE' ;",$conn);
			$data1=mysql_fetch_assoc($query1);
			echo "<span class=\"blue\">".$data1['result']."</span>";
			?>
                            Verified Marks
                        </a>
                    </li>
                    <li>
                        <a href="messages.php">
                            <i class="glyphicon glyphicon-comment"></i>		
			<?php
			$query2=mysql_query("SELECT COUNT(DISTINCT datem) as result FROM capeplacementcell.mtable WHERE mtable.receiverid='{$user_check}' ;",$conn);
			$data2[]=null;
			if($query2){
			$data2=mysql_fetch_assoc($query2);
			}
			echo "<span class=\"yellow\">".$data2['result']."</span>";
			?>
                            Inbox
                        </a>
                    </li>
<?php

	$q1=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='1' ",$conn);
	if($q1){
	$r1=mysql_fetch_array($q1);	
	}
	$q2=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='2' ",$conn);
	if($q2){
	$r2=mysql_fetch_array($q2);	
	}
	$q3=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='3' ",$conn);
	if($q3){
	$r3=mysql_fetch_array($q3);	
	}
	$q4=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='4' ",$conn);
	if($q4){
	$r4=mysql_fetch_array($q4);	
	}
	$q5=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='5' ",$conn);
	if($q5){
	$r5=mysql_fetch_array($q5);
	}
	$q6=mysql_query("SELECT * FROM capeplacementcell.marktable WHERE regid={$user_check} AND Sem ='6' ",$conn);
	if($q6){
	$r6=mysql_fetch_array($q6);	
	}
	if(($r1['verified']=='TRUE')&&($r2['verified']=='TRUE')&&($r3['verified']=='TRUE')&&($r4['verified']=='TRUE')&&($r5['verified']=='TRUE')&&($r6['verified']=='TRUE'))
		{

echo "                    <li>\n"; 
echo "                        <a href=\"#\">\n"; 
echo "                            <i class=\"glyphicon glyphicon-arrow-up\"></i>\n"; 
echo "                            Completly Verified\n"; 
echo "                        </a>\n"; 
echo "                    </li>\n";

echo "                    <li>\n"; 
echo "                        <a href=\"#\">\n"; 
echo "                            <i class=\"glyphicon glyphicon-arrow-down\"></i>\n"; 
			$query4=mysql_query("SELECT COUNT(DISTINCT regid) as result FROM capeplacementcell.appliedtable WHERE appliedtable.regid='{$user_check}' ;",$conn);
			$data4=mysql_fetch_assoc($query4);
			echo "<span class=\"blue\">".$data4['result']."</span>";
echo "                            Total Submissions\n"; 
echo "                        </a>\n"; 
echo "                    </li>\n";
		}
echo "                </ul>\n"; 
echo "            </div>\n"; 
echo "        </div>\n"; 
echo "    </div>\n"; 
echo "\n"; 
echo "</div>\n"; 
echo "\n";

 require('footer.php'); ?>
