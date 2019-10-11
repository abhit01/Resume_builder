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
  <form action="nameupdate.php" method="post" name="resume" style="border:1px solid #ccc">
    <div class="container">
      
    <label><b>Name</b></label>
    <input type="text" name="name">

    <br>
    <button type="submit">Update</button>
  </form>
    <br>

    <form action="phoneupdate.php" method="post" name="resume" style="border:1px solid #ccc">


    <label><b>Phone</b></label>
    <input type="number" name="phone">

    <br>
    <button type="submit">Update</button>
  </form>
    <br>

    <form action="emailupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Email</b></label>
    <input type="text" name="email">

    <br>
    <button type="submit">Update</button>
  </form>
    <br>

    <form action="profileupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Linked In profile</b></label>
    <input type="text" name="profile">

    <br>
    <button type="submit">Update</button>
  </form>
    <br>

    <form action="summaryupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Write About Yourself</b></label>
    <input type="text" name="about">

    </form>
    <button type="submit">Update</button>
    <br>
