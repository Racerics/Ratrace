<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="adminpanel.php">Home</a>
        </li>
        <li>
            <a href="viewf.php">Forms</a>
        </li>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="adminpanel.php" >Back</a>
    </ul>
</div>

<?php
if(isset($_POST['formfile'])){
	$fid=$_POST['formid'];
	$fileName = $_FILES['formf']['name'];
$tmpName  = $_FILES['formf']['tmp_name'];
$fileSize = $_FILES['formf']['size'];
$fileType = $_FILES['formf']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
$query = "INSERT INTO capeplacementcell.formtable (id, name, size, type, content ) VALUES ('$fid', '{$fileName}', '$fileSize', '$fileType', '$content')";
$result=mysql_query($query,$conn);	
if($result){
echo "Form uploaded Successfully";	
}
else{
	echo "Upload failed";
}
}

?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Add Form</h2>

            </div>
            <div class="box-content">
			<div class="row">
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-4 col-lg-offset-1 form-box"> 
                    	<form role="form" action="" method="post" class="f1" enctype="multipart/form-data">
                			<div class="form-group">
                  			    <label class="sr-only" for="f1-first-name">Fom ID</label> 
                                    <input type="text" name="formid" placeholder="Form ID" class="f1-first-name form-control" id="f1-first-name"> 
                              </div>
							  
                    <div class="form-group">
                        <label for="File Upload">Upload Form</label>
                        <input type="file" name="formf" id="InputFile">
                    </div>
                    <button type="submit" name="formfile" class="btn btn-default">Submit</button>
                </form>

            </div>
			</div>
			</div>
    </div>
    <!--/span-->

</div><!--/row-->
</div>

<?php require('footer.php'); ?>

