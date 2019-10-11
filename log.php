<?php
session_start();
include("connect.php");

$a=$_REQUEST['uname'];
$b=$_REQUEST['pass'];


$res1="INSERT INTO loginstatus VALUES('$a','yes','')";
$res="SELECT * FROM login WHERE Username='$a' AND Password='$b'";
$res2="SELECT Status FROM loginstatus WHERE Username='$a'";
$query2=mysqli_query($con,$res2);
$abc=mysqli_fetch_assoc($query2);

$q=$abc['Status'];
if($q=='yes')
{
	echo 'Already logged in';
}

else
{

$query1=mysqli_query($con,$res1);
$query=mysqli_query($con,$res);

if(mysqli_num_rows($query)>0)
{ 	
	
echo "h";
	$_SESSION['tuser']=$a;
	echo $_SESSION['tuser'];
header("Location:company.php");

}

else
{
	echo"Please enter valid username";
}
}
?>