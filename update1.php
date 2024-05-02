<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
 $id=$_POST["id"];
 $Wt=$_POST["BLOOD"];
 echo $sql="UPDATE blood_donor SET BODY_WEIGHT='{$Wt}' WHERE  DONOR_ID='{$id}'";
 $con->query($sql);
 header("location:admin_view_donor.php?id={$id}");
 
?>