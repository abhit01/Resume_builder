<?php
session_start();
$x=$_SESSION['tuser'];
echo $_SESSION['tuser'];
include("connect.php");

$reference=$_REQUEST['reference'];

$sql="UPDATE template2 SET reference ='$reference' WHERE Username='$x'";

$query=mysqli_query($con,$sql);
if(!$query)
{
	die("failed");
}

echo "Submitted Successfully";
?> 