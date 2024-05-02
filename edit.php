<?php
include("config.php");
$NAME=$_POST["NAME"];
$id=$_POST['id'];
$qry = "update blood_donor set NAME='$NAME' where id='$id'";
$result = mysqli_query($con,$qry); //query executes
										
if(!$result){
											
echo"ERROR". mysqli_error();
										
}else {
											
echo"SUCCESSFULLY UPDATED";
											
 header ('Location:admin_adonor.php');
									
	}
								
?>
