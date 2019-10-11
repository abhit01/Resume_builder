<?php
session_start();
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
	<div class="jumbotron text-center">
  		<h1>Resume Builder</h1>
  		<p>Your professional journey begins from here</p>
	
		<form class="form-inline" action="subscribe.php" method="post">
    		<div class="input-group">
      			<input type="email" class="form-control" name="subs" size="50" placeholder="Email Address" required>
      				<div class="input-group-btn">
        				<button type="submit" class="btn btn-danger">Subscribe</button>        				
      				</div>
    		</div>
  		</form>
  	</div>
  	
  	<div class="container-fluid">
  		 <div class="row">
    		<div class="col-sm-8">
  				<h2>About Our Resume Builder</h2>
  				<h4>Why choose Almabay's Resume Builder?</h4>
  				<p>Almabay's Resume can give you a perfect resume and help you get the job you want. Here’s why you can count on our resume builder to help you.</p>
  				<a href="page2.php"><button class="btn btn-default btn-lg">Build Resume</button></a>
  			</div>
    			<div class="col-sm-4">
      				<span class="glyphicon glyphicon-search logo"></span>
    			</div>
  		</div>
	</div>			
	

	<div class="container-fluid bg-grey">
		<div class="row">
    		<div class="col-sm-4">
      			<span class="glyphicon glyphicon-globe logo"></span>
    		</div>
    		<div class="col-sm-8">
				<h2>What is Almabay?</h2>
  				<h4><strong>MISSION:</strong> We work to maintain the eco-system of alumni of an institute as an asset.</h4>
  				<p><strong>VISION:</strong> AlmaBay works side by side with institute and alumni body to achieve desired goals in shortest time period. Our team of experts not just advises you but put strategy into action to engage maximum number of alumni. We are the only company that gives you back-end manpower support to increase the alumni registrations for the alumni body. We advise and implement launch of new alumni bodies. We help you plan and execute your first alumni meet. We will create, manage and update your alumni website and social network.
			</div>
  		</div>
	</div>


	<div class="container-fluid text-center">
  			<h2>SERVICES</h2>
  			<h4>What we offer</h4>
  			<br>
  		<div class="row">
    		<div class="col-sm-4">
      			<a href="login.php"><span class="glyphicon glyphicon-off logo-small"></span></a>
      				<h4>Resume Builder</h4>
      				<p>Create a professional Resume</p>
    		</div>
    	<div class="col-sm-4">
      		<a href="https://www.almabay.com/jobs/search"><span class="glyphicon glyphicon-heart logo-small"></span></a>
      		<h4>Browse Jobs</h4>
      		<p>Search all the jobs available</p>
    	</div>
    	<div class="col-sm-4">
      		<a href="https://www.almabay.com/shop"><span class="glyphicon glyphicon-lock logo-small"></span></a>
      		<h4>Alma Store</h4>
      		<p>But some cool stuffs</p>
    	</div>
    </div>
    		<br><br>
 			 <div class="row">
    			<div class="col-sm-4">
      				<a href="http://blog.almabay.com/"><span class="glyphicon glyphicon-leaf logo-small"></span></a>
      				<h4>Blog</h4>
      				<p>Get updated through our blogs</p>
    			</div>
    				<div class="col-sm-4">
      				<a href="https://www.almabay.com/mainsite"><span class="glyphicon glyphicon-certificate logo-small"></span></a>
      				<h4>Join Almabay</h4>
      				<p>Connect to eveolve</p>
    			</div>
    				<div class="col-sm-4">
      					<a href="https://www.almabay.com/advancesearch/directory/A"><span class="glyphicon glyphicon-wrench logo-small"></span></a>
      					<h4>Find Institute</h4>
      					<p>Find your institute through our institute finder</p>
    				</div>
  				</div>		
			</div>


<div class="container-fluid text-center bg-grey">
  <h2>STEPS TO CREATE YOUR RESUME</h2>
  <h4>Here you go</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="STEP 1">
        <p><strong>Choose your resume template</strong></p>
        <p>Our professional resume templates are designed strictly following all industry guidelines and best practices
		employers are looking for.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="STEP 2">
        <p><strong>Show what you're made of</strong></p>
        <p>Not finding the right words to showcase yourself? We´ve added examples and resume samples.As easy as a click.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="STEP 3">
        <p><strong>Download your resume</strong></p>
        <p>Start impressing employers. Download your awesome resume and land the job you are looking for, effortlessly.All the best from Almabay team.</p>
      </div>
    </div>
</div>

 <div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Punjab,India</p>
      <p><span class="glyphicon glyphicon-phone"></span>099155 18124</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <form action="contactfetch.php" method="post" name="contactfetch">
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
        </form>
      </div>
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

