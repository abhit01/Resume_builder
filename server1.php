<?php
$conn = mysqli_connect('localhost', 'root','' );
if(!$conn) {
    die('can not connect:'. mysqli_error());
}
else
{
	echo"Your data submitted successfully";
}
if(!mysqli_select_db($conn,'registration')) {
    die('cannot select db: '.mysqli_error());
}



$firstname = $_POST['name1'];
	$lastname = $_POST['name2'];
	$email = $_POST['email'];
	$username =  $_POST['username'];
	$password = $_POST['password'];
	$contact = $_POST['phone'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
$sn="localhost";
$un="root";
$ps="";
$db="registration";

$con=mysqli_connect($sn,$un,$ps,$db);
if(!$con)
{
	die("Failed to connect".mysqli_connect_error());
}

$sql="INSERT INTO users VALUES('$firstname','$lastname','$username','$password','$email','$contact','$gender','$address','$city','$state')";
$sql1="INSERT INTO login VALUES('$username','$password','user')";
$query=mysqli_query($con,$sql);
$query1=mysqli_query($con,$sql1);
if(!$query)
{
	die("Failed");
}
?>