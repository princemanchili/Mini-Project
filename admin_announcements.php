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
			<h3 class="text-success"><i class="fa fa-users"></i> Announcements </h3><hr>    
		<div class="row">

		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
<?php
if(isset($_POST["submit"]))
{
$sql="INSERT INTO blood_announcements (A_NAME, O_B,  DOB, A_BLOOD, REQUIREMENTS,REMARK) VALUES 
 ('{$_POST["A_NAME"]}', '{$_POST["O_B"]}', '{$_POST["DOB"]}', '{$_POST["A_BLOOD"]}', '{$_POST["REQUIREMENTS"]}','{$_POST["REMARK"]}');";
						if($con->query($sql))
							{
								echo '
								<div class="alert alert-success">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Success!</strong> New announcement has added.
								</div>
								';
							}
					}

?>
			
			 
				<form method="post" action="admin_announcements.php" autocomplete="off" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label text-primary" for="A_NAME" >Announcement Name</label>
							<input type="text" placeholder="Full Name" id="A_NAME" name="A_NAME"  required class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary" for="O_B">organised by </label>
							<input type="text" placeholder="OB" id="O_B" name="O_B" required class="form-control input-sm">
						</div>
						
						
						
						<div class="form-group">
							<label class="control-label text-primary" for="DOB">Date of announcement </label>
							<input type="text"  placeholder="YYYY/MM/DD" required id="DOB" name="DOB"  class="form-control input-sm DATES">
						</div>

						<div class="form-group">
							<label class="control-label text-primary" for="A_BLOOD" >Blood needed (type)</label>
						<select id="blood" name="A_BLOOD" required class="form-control input-sm">	
							<option value="">example:A+</option>
							<option value="A+">A+</option>
							<option value="B+">B+</option>
							<option value="O+">O+</option>
							<option value="AB+">AB+</option>
							<option value="A1+">A1+</option>
							<option value="A2+">A2+</option>
							<option value="A1B+">A1B+</option>
							<option value="A2B+">A2B+</option>
							<option value="A-">A-</option>
							<option value="B-">B-</option>
							<option value="O-">O-</option>
							<option value="AB-">AB-</option>
							<option value="A1-">A1-</option>
							<option value="A2-">A2-</option>
							<option value="A1B">A1B-</option>
							<option value="A2B">A2B-</option>
					
							</select>
						</div>
<div class="form-group">
                                                <label>Requirements</label>
                                                <textarea class="form-control" rows="4" type="text" name="REQUIREMENTS" required></textarea>
                                            </div>
<div class="form-group">
                                                <label>Remarks</label>
                                                <textarea class="form-control" rows="4" type="text" name="REMARK" required></textarea>
                                            </div>
                                       
                                    
                                
							<button class="btn btn-primary" type="submit" name="submit" >Add Announcement</button>
                
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