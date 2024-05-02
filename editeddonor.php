<?php 
include("config.php"); 
//include("functions.php"); 

error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("head.php");?>
</head>
<body>

<?php
include("top_nav.php");
?>
    <div class="container" style='margin-top:70px;'>
        <div class="row">
            <div class="col-md-12">
                <h3 class=" text-primary">
					<i class='fa fa-users'></i> New Donor Registration
                </h3><hr>
						
        
       
    </div>    <?php
									include 'config.php';
										$NAME = $_POST["NAME"];
                                                                                $FATHER_NAME = $_POST["FATHER_NAME"];       
										$GENDER = $_POST["GENDER"]; 
                                                                             $DOB = $_POST["DOB"];   
                                                                               $BLOOD = $_POST["BLOOD"];    
 										$BODY_WEIGHT = $_POST["BODY_WEIGHT"];   
                                                                                 $EMAIL= $_POST["EMAIL"];  
                                                                                 $COUNTRY = $_POST["COUNTRY"];    
                                                                                 $STATE = $_POST["STATE"];   
                                                                                $CITY= $_POST["CITY"];   
                                                                                    $AREA = $_POST["AREA"];   
                                                                                $ADDRESS = $_POST["ADDRESS"];   
                                                                            $PINCODE = $_POST["PINCODE"];   
                                                                                 $CONTACT_1 = $_POST["CONTACT_1"];   
                                                                                     $CONTACT_2 = $_POST["CONTACT_2"];   
                                                                                      $LAST_D_DATE = $_POST["LAST_D_DATE"];   
$qry = "update blood_donor set NAME='$NAME', FATHER_NAME='$FATHER_NAME',GENDER='$GENDER', DOB='$DOB', BLOOD='$BLOOD', BODY_WEIGHT='$BODY_WEIGHT',EMAIL='$EMAIL', COUNTRY='$COUNTRY', STATE='$STATE',CITY='$CITY',AREA=' $AREA',ADDRESS='$ADDRESS',PINCODE='$PINCODE',CONTACT_1='$CONTACT_1',CONTACT_2='$CONTACT_2',LAST_D_DATE='$LAST_D_DATE' where DONOR_ID='$DONOR_ID'";
										$result = mysqli_query($con,$qry); //query executes
                                                                                
										if(!$result){
											echo"ERROR". mysqli_error();
										}else {
											echo"SUCCESSFULLY UPDATED";
											// header ("Location:editblood.php");
										}
								?>


 <?php include("footer.php"); ?>
 
 
</body>
</html>