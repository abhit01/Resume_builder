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
    
    <br>
<div class="container">
    <form action="collegeupdate2.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>College/Institute/University</b></label>
    <input type="text" name="college">
    <button type="submit">Update</button>
  </form>

  <br>

      <form action="majorupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Major</b></label>
    <input type="text" name="major">
    <button type="submit">Update</button>
  </form>


  <br>

    <form action="minorupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Minor</b></label>
    <input type="text" name="minor">
    <button type="submit">Update</button>
  </form>

  <br>


    <form action="yearupdate2.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Year Of Passing</b></label>
    <input type="Date" name="year">
    <button type="submit">Update</button>
  </form>

    <br>

    <form action="experience.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Experience(Years)</b></label>
    <input type="text" name="experience">
    <button type="submit">Update</button>
  </form>

  <br>

     <form action="position.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Position</b></label>
    <input type="text" name="position">
    <button type="submit">Update</button>
  </form>

  <br>

  <form action="companyupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Company</b></label>
    <input type="text" name="company">
    <button type="submit">Update</button>
  </form>

  <br>

  <form action="description.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Description</b></label>
    <input type="text" name="description">
    <button type="submit">Update</button>
  </form>
  
