<?php
session_start();
$x=$_SESSION['tuser'];
echo $_SESSION['tuser'];
include("connect.php");

$inst=$_REQUEST['inst'];

$sql="UPDATE template1 SET Institute ='$inst' WHERE Username='$x'";

$query=mysqli_query($con,$sql);
if(!$query)
{
	die("failed");
}

echo "Submitted Successfully";
?> 