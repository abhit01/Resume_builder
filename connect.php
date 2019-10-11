<?php

$sn="localhost";
$un="root";
$ps="";
$db="registration";

$con=mysqli_connect($sn,$un,$ps,$db) or die("Not Connected");
if(!$con)
{
	die("Failed to connect".mysqli_connect_error());
}
else
{
	echo"Connected";
}
?>