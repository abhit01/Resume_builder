<?php
session_start();
$x=$_SESSION['tuser'];
echo $_SESSION['tuser'];
include("connect.php");

$email=$_REQUEST['email'];

$sql="UPDATE template1 SET Email ='$email' WHERE Username='$x'";

$query=mysqli_query($con,$sql);
if(!$query)
{
	die("failed");
}

echo "Submitted Successfully";
?> 