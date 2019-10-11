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
  <div class="container">
      <h2>Skills</h2>

      <form action="softwareupdate.php" method="post" name="resume" style="border:1px solid #ccc">


    <label><b>Software</b></label>
    <input type="text" name="software">
    <button type="submit">Update</button>
  </form>

    <br>
      <form action="languagepdate.php" method="post" name="resume" style="border:1px solid #ccc">


    <label><b>Languages</b></label>
    <input type="text" name="lang">
    <button type="submit">Update</button>
  </form>

    <br>
        <form action="osupdate.php" method="post" name="resume" style="border:1px solid #ccc">

    <label><b>Operating System</b></label>
    <input type="text" name="os">
    <button type="submit">Update</button>
  </form>
      <br>
    </div>
</body>
</html>