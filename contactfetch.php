<?php
include("connect.php");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$comments=$_REQUEST['comments'];

$sql="INSERT INTO contact VALUES('$name','$email','$comments')";
$query=mysqli_query($con,$sql);
if(!$query)
{
	die("Failed");
}
echo 'submitted successfully';
?>