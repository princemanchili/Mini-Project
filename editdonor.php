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
		<div class="row">
	
		<?php 
		if(isset($_GET["id"]))
		{
			$sql="SELECT * FROM blood_donor WHERE DONOR_ID=".$_GET["id"];
			$result=$con->query($sql);
			if($result->num_rows>0)
			{
				$row=$result->fetch_assoc();
				
		?>
						<form method="post" action="editeddonor.php" autocomplete="off" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label text-primary" for="NAME" >Name</label>
							<input type="text" placeholder="Full Name" id="NAME" name="NAME" value='<?php echo $row['NAME']; ?>' required class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary" for="FATHER_NAME">Father Name</label>
							<input type="text" placeholder="Father Name" id="FATHER_NAME" name="FATHER_NAME" value='<?php echo $row['FATHER_NAME']; ?>' required class="form-control input-sm">
						</div>
						
						<div class="form-group">
							<label class="control-label text-primary"  for="GENDER">Gender</label>
								<select id="gen" name="GENDER" value='<?php echo $row['GENDER']; ?>' required class="form-control input-sm">
									<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
						 
									
								</select>
						</div>
						
						<div class="form-group">
							<label class="control-label text-primary" for="DOB">D.O.B</label>
							<input type="text"  placeholder="YYYY/MM/DD" required id="DOB" name="DOB" value='<?php echo $row['DOB']; ?>' class="form-control input-sm DATES">
						</div>
						
						
						<div class="form-group">
							<label class="control-label text-primary" for="BLOOD" >Blood Group</label>
						<select id="blood" name="BLOOD" value='<?php echo $row['BLOOD']; ?>'required class="form-control input-sm">	
							<option value="">Select Blood</option>
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
							<option value="A2B">Bombay o+</option>
							<option value="A2B">Bombay o-</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label text-primary" for="BODY_WEIGHT" >Blood quantity</label>
							<input type="text" required placeholder="Blood in quantity"  name="BODY_WEIGHT" id="BODY_WEIGHT" value='<?php echo $row['BODY_WEIGHT']; ?>' class="form-control input-sm">
						</div>
						 <div class="form-group">
								<label class="control-label text-primary" for="EMAIL" >Email ID</label>
                                <input type="email"  required name="EMAIL" id="EMAIL" class="form-control" value='<?php echo $row['EMAIL']; ?>' placeholder="Email Address">
                          </div>
	
						  <div class="form-group">
								<label class="control-label text-primary" for="COUNTRY">Country</label>
                                <select name="COUNTRY" id="COUNTRY" required class="form-control" value='<?php echo $row['COUNTRY']; ?>'>
								<option value="">Select Country</option>
								<?php
									$sql="SELECT COUNTRY_ID,COUNTRY_NAME FROM country ORDER BY COUNTRY_NAME ASC";
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
											echo "<option value='{$row['COUNTRY_ID']}'>{$row['COUNTRY_NAME']}	</option>";
										}
									}
								?>
								</select>
                          </div>
						  
							<div class="form-group">
								<label class="control-label text-primary" for="STATE">State</label>
                                <select name="STATE" id="STATE" required class="form-control" value='<?php echo $row['STATE']; ?>'>
								<option value="">Select State</option>
								<?php
									$sql="SELECT STATE_ID,STATE_NAME FROM state ORDER BY STATE_NAME ASC";
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
											echo "<option value='{$row['STATE_ID']}'>{$row['STATE_NAME']}	</option>";
										}
									}
									
								?>
								</select>
                          </div>
						  

						  <div class="form-group">
								<label class="control-label text-primary" for="CITY" >City</label>
                                <select name="CITY" id="CITY" required class="form-control" value='<?php echo $row['CITY']; ?>'>
								<option value="">Select City</option>
								<?php
								
									$sql="SELECT CITY_NAME,CITY_ID FROM city ORDER BY CITY_NAME";
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
										echo "<option value='{$row['CITY_ID']}'>{$row['CITY_NAME']}	</option>";
										}
									}
									
								?>
								</select>

                          </div>
						  
						  <div class="form-group">
							<label class="control-label text-primary" for="AREA" >Area</label>
                                <input type="text" required name="AREA" id="AREA" class="form-control" placeholder="Insert Area" value='<?php echo $row['AREA']; ?>'>
                          </div>
						  
						   					  <div class="form-group">
								<label class="control-label text-primary" for="ADDRESS">Address</label>
                                <textarea required name="ADDRESS" id="ADDRESS" rows="5" style="resize:none;"class="form-control" placeholder="Full Address" value='<?php echo $row['ADDRESS']; ?>'></textarea>
                          </div>

						  <div class="form-group">
								<label class="control-label text-primary" for="PINCODE">Pincode</label>
                                <input type="text"  name="PINCODE" id="PINCODE" class="form-control" placeholder="Insert Pincode" value='<?php echo $row['PINCODE']; ?>'>
                          </div>
						  
						  
						   
						  
						  
						   <div class="form-group">
								<label class="control-label text-primary" for="CONTACT_1" >Contact-1</label>
                                <input type="text"  name="CONTACT_1" id="CONTACT_1" class="form-control" placeholder="Contact No-1" value='<?php echo $row['CONTACT_1']; ?>'>
                          </div>
						   <div class="form-group">
								<label class="control-label text-primary" for="CONTACT_2" >Contact-2</label>
                                <input type="text" required name="CONTACT_2" id="CONTACT_2" class="form-control" placeholder="Contact No-2" value='<?php echo $row['CONTACT_2']; ?>'>
                          </div>
						  
						<div class="form-group">
							<label class="control-label text-primary"  for="LAST_D_DATE">Last Blood Donoted Date</label>
							<input type="text"  name="LAST_D_DATE" value="0000/00/00"  id="LAST_D_DATE" placeholder="YYYY/MM/DD" value='<?php echo $row['LAST_D_DATE']; ?>' class="form-control input-sm DATES">
						</div>
					
						 
						
										
					
						 <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                
             <button type="submit"  class="btn btn-success">Make Changes</button>
 
						 </form>
<?php
						}
}

						?>
                                
                    
        
       
    </div>    

 <?php include("footer.php"); ?>
 
</body>
</html>