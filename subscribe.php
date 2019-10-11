<?php
include("connect.php");

$subscribe=$_REQUEST['subs'];

$sql="INSERT INTO subscribe VALUES('$subscribe')";
$query=mysqli_query($con,$sql);
if(!$query)
{
	die("Failed");
}
header("Location:company.php")
?>