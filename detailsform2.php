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
  <form action="temp2.php" method="post" name="resume" style="border:1px solid #ccc">
    <div class="container">
      
    <label><b>Name</b></label>
    <input type="text" name="name">

    <br>

    <label><b>Phone</b></label>
    <input type="number" name="phone">

    <br>

    <label><b>Email</b></label>
    <input type="text" name="email">

    <br>

    <label><b>Write About Yourself</b></label>
    <input type="text" name="about">

    <br>
    <br>

    <h2>Academic Background</h2>
    <br>

    <label><b>College/Institute/University</b></label>
    <input type="text" name="college">

    <br>

    <label><b>Year Of Passing</b></label>
    <input type="text" name="year">

    <br>

    <label><b>Major</b></label>
    <input type="text" name="major">

    <br>

    <label><b>Minor</b></label>
    <input type="text" name="minor">

    <br>

    <label><b>Experience(years)</b></label>
    <input type="text" name="exp">

    <br>

    <label><b>company</b></label>
    <input type="text" name="company">

    <br>

    <label><b>Position</b></label>
    <input type="text" name="position">

    <br>

    <label><b>Description</b></label>
    <input type="text" name="des">
    <br>
    <br>

      <h2>Skills</h2>

    <label><b>Software</b></label>
    <input type="text" name="software">

    <br>

    <label><b>Languages</b></label>
    <input type="text" name="lang">

    <br>

    <label><b>Operating System</b></label>
    <input type="text" name="os">
      <br>

    <label><b>Hobbies</b></label>
    <input type="text" name="hobbie">

    <br>
    <br>
    <br>

    <label><b>Reference</b></label>
    <input type="text" name="reference">


    </form>


      <br>
      <br>

            <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
   
    </form>

      <br>
      <br>

      <div> 
      <button type="submit" style="width: 47%; background-color: #4CAF50; color: white;padding: 10px 20px; margin: 8px 0; border: none; border-radius: 4px;cursor: pointer;">Next</button> 
      <button type="reset" style="width: 46%;
  background-color: #ff3333; color: white; padding: 10px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer;">Reset</button>
    </div> 

      <label><b></b></label>
  </div>
  </form>
</body>