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
  <form action="qualupdate.php" method="post" name="resume" style="border:1px solid #ccc">
   <div class="container">

    <label><b>Qualification</b></label>
    <input type="text" name="qual">
    <button type="submit">Update</button>
  </form>


    <br>

    <form action="boardupdate.php" method="post" name="resume" style="border:1px solid #ccc">
      

    <label><b>Board/University</b></label>
    <input type="text" name="board">
    <button type="submit">Update</button>

  </form>

    
    <br>

    <form action="collegeupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>College/Institute/University</b></label>
    <input type="text" name="college">
    <button type="submit">Update</button>
  </form>

    <br>

    <form action="cgpaupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Percentage/CGPA</b></label>
    <input type="text" name="percent">
    <button type="submit">Update</button>
  </form>

    <br>

    <form action="yearupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Year Of Passing</b></label>
    <input type="text" name="year">
    <button type="submit">Update</button>
  </form>
  
