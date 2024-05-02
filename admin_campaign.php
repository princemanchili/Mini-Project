<?php
session_start();
include("config.php");
include("admin_function.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container" style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class="text-success"><i class="fa fa-users"></i> Campaign </h3><hr>    
		<div class="row">

		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
<?php
if(isset($_POST["submit"]))
{
$sql="INSERT INTO blood_campaigns (C_NAME, CO_B,  S_DOB,E_DOB, LOC, DES) VALUES 
 ('{$_POST["C_NAME"]}', '{$_POST["CO_B"]}', '{$_POST["S_DOB"]}', '{$_POST["E_DOB"]}', '{$_POST["LOC"]}','{$_POST["DES"]}');";
						if($con->query($sql))
							{
								echo '
								<div class="alert alert-success">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Success!</strong> New Campaign has added has added.
								</div>
								';
							}
					}

?>
			
			 
				<form method="post" action="admin_campaign.php" autocomplete="off" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label text-primary" for="C_NAME" >Campaign Name</label>
							<input type="text" placeholder="Full Name" id="C_NAME" name="C_NAME"  required class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary" for="CO_B">organised by </label>
							<input type="text" placeholder="OB" id="CO_B" name="CO_B" required class="form-control input-sm">
						</div>
						
						
						
						<div class="form-group">
							<label class="control-label text-primary" for="S_DOB">Start ofCampaign </label>
							<input type="text"  placeholder="YYYY/MM/DD" required id="S_DOB" name="S_DOB"  class="form-control input-sm DATES">
						</div>
<div class="form-group">
							<label class="control-label text-primary" for="E_DOB">End ofCampaign </label>
							<input type="text"  placeholder="YYYY/MM/DD" required id="E_DOB" name="E_DOB"  class="form-control input-sm DATES">
						</div>
<div class="form-group">
                                                <label>Location</label>
                                                <textarea class="form-control" rows="4" type="text" name="LOC" required></textarea>
                                            </div>
                                       

<div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="4" type="text" name="DES" required></textarea>
                                            </div>
                                       
                                    
                                
							<button class="btn btn-primary" type="submit" name="submit" >Add Campaign</button>
                
                                    </form>
		
			
			<div>
		</div>
		
		
	</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
 

	</body>
</html>