<?php 
session_start();
echo $_SESSION['tuser'];
?>
<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style> 
  
input[type=text], input[type=number], input[type=Email], input[type=Date]{ 
   
  padding: 10px 10px;
  margin: 3px 0;
  
} 

  
.container { 
    width: 500px; 
    clear: both;

} 
  
  
.clearfix::after { 
    content: ""; 
    clear: both; 
    display: table; 
} 

.container input {
  width: 100%;
  clear: both;

}  
  
@media screen and (max-width: 300px) { 
    .cancelbtn, .signupbtn { 
       width: 100%; 
    } 
} 
</style> 
</head>

<body>
  <center><h2>Enter Your Details</h2></center> <center> <a href="logout.php">LOGOUT</a></center>
  <form action="instituteupdate.php" method="post" name="resume" style="border:1px solid #ccc">
    <div class="container">

    <label><b>Institution</b></label>
    <input type="text" name="inst"> 
    <button type="submit">Update</button>
  </form>

    <br>

    <form action="durationupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Duration</b></label>
    <input type="text" name="duration"> 
    <button type="submit">Update</button>
  </form>

    <br>

    <form action="titleupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Project Title<b/></label>
    <input type="text" name="title">
    <button type="submit">Update</button>
  </form>

    <br>

    <form action="mentorupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Mentor</b></label>
    <input type="text" name="mentor"> 
    <button type="submit">Update</button>
  </form>

    <br>

    <form action="descupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Description</b></label>
    <input type="text" name="desc">
    <button type="submit">Update</button>
  </form>

