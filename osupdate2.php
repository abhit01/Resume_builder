<?php
session_start();
$x=$_SESSION['tuser'];
echo $_SESSION['tuser'];
include("connect.php");

$os=$_REQUEST['os'];

$sql="UPDATE template2 SET os ='$os' WHERE Username='$x'";

$query=mysqli_query($con,$sql);
if(!$query)
{
	die("failed");
}

echo "Submitted Successfully";
?> 