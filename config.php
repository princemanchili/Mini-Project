<?php 

$con=new mysqli("localhost:3307","root","","cherry");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>