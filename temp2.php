<?php

session_start();
$x=$_SESSION['tuser'];
include("connect.php");

$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$about=$_REQUEST['about'];
$year=$_REQUEST['year'];
$major=$_REQUEST['major'];
$minor=$_REQUEST['minor'];
$college=$_REQUEST['college'];
$company=$_REQUEST['company'];
$experience=$_REQUEST['exp'];
$position=$_REQUEST['position'];
$description=$_REQUEST['des'];
$software=$_REQUEST['software'];
$language=$_REQUEST['lang'];
$operating=$_REQUEST['os'];
$hobbie=$_REQUEST['hobbie'];
$reference=$_REQUEST['reference'];

$sql="INSERT INTO template2 VALUES('$name','$phone','$email','$about','$year','$major','$minor','$college','$company',$experience','$position',$description','$software','$language','$operating','$hobbie','$reference',$x')";

$query=mysqli_query($con,$sql);
if(!$query)
{
	die("failed");
}

echo "Submitted Successfully";
?>
