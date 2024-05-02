<?php
session_start();
include("config.php");
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
<div class="container"  style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-users"></i> Donor Details </h3><hr>    
		<div class="row"><?php 
$query=mysqli_query($con,""select * from blood_donor where id='$id'");
$row=mysqli_fetch_array($query);
?>

<form method="POST" action="edit.php?id=<?php echo $id;?>">
<div class="form-group">
							<label class="control-label text-primary" for="NAME" >Name</label>
							<input type="text" placeholder="Full Name" id="NAME" name="NAME"  required class="form-control input-sm" value='<?php echo $row['NAME'];?>'required>
						</div>

                                    <button type="submit" class="btn btn-success">Make Changes</button>
</form>
</body>
</html>