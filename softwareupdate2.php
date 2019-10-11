<?php
session_start();
$x=$_SESSION['tuser'];
echo $_SESSION['tuser'];
include("connect.php");

$software=$_REQUEST['software'];

$sql="UPDATE template2 SET software ='$software' WHERE Username='$x'";

$query=mysqli_query($con,$sql);
if(!$query)
{
	die("failed");
}

echo "Submitted Successfully";
?> 