<?php 
include("config.php");
include("admin_function.php");

if(isset($_POST["q"])&&$_POST["q"]!="")
{
	$key=$_POST["q"];
	 $sql="SELECT * FROM blood_donor WHERE  BLOOD LIKE '%".$key."%'AND STATUS=0 AND BODY_WEIGHT>0";
	load_donor($sql,$con);
	
}
else if($_POST["q"]=="")
{
	$sql="Select * from blood_donor";
				load_donor($sql,$con);
}

?>


