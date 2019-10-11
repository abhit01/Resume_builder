<?php
session_start();
$x=$_SESSION['tuser'];
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>

	<title>Almabay Resume Builder</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylemain.css">
</head>
<body>
  
<div class="container-fluid text-center bg-grey">
  <h2>CHOOSE YOUR TEMPLATE </h2>
  <h4>Here you go</h4><br>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
      
        <p><a href="template1.php"><strong>TEMPLATE 1</strong></a></p>
        </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        
        <p><strong> <a href="template2.php">TEMPLATE 2</a></strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        
        <p><a href="template3.php"><strong>TEMPLATE 3</strong></a></p>
      </div>
    </div>
</div>



 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="company.php">ALMABAY <b>RB</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://blog.almabay.com/">JOBS</a></li>
        <li><a href="https://www.almabay.com/jobs/search">BLOG</a></li>
        <li><a href="page2.php">BUILD RESUME</a></li>
        <li><a href="register.php">REGISTER</a></li>
        <li><a href="login.php">SIGN IN</a></li>
      </ul>
    </div>
  </div>
</nav> 

 <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="about" class="container-fluid">
<div id="services" class="container-fluid">
<div id="portfolio" class="container-fluid">
<div id="pricing" class="container-fluid">
<div id="contact" class="container-fluid"> 


</body>
</html>

