<?php

session_start();
$x=$_SESSION['tuser'];
include("connect.php");

$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$profile=$_REQUEST['profile'];
$about=$_REQUEST['about'];
$qual=$_REQUEST['qual'];
$board=$_REQUEST['board'];
$college=$_REQUEST['college'];
$cgpa=$_REQUEST['percent'];
$year=$_REQUEST['year'];
$institute=$_REQUEST['inst'];
$duration=$_REQUEST['duration'];
$title=$_REQUEST['title'];
$mentor=$_REQUEST['mentor'];
$description=$_REQUEST['desc'];
$software=$_REQUEST['software'];
$language=$_REQUEST['lang'];
$operating=$_REQUEST['os'];
$awards=$_REQUEST['awards'];

$sql="INSERT INTO template1 VALUES('$name','$phone','$email','$profile','$about','$qual','$board','$college','$cgpa','$year','$institute','$duration','$title','$mentor','$description','$software','$language','$operating','$awards','$x')";

$query=mysqli_query($con,$sql);
if(!$query)
{
	die("failed");
}

echo "Submitted Successfully";
?>
