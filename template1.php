<?php
session_start();
include("connect.php");
$x=$_SESSION['tuser'];
echo $_SESSION['tuser'];
$sql="SELECT * FROM template1 where Username='$x'";
$query=mysqli_query($con,$sql) or die("not executed");

$row=mysqli_fetch_assoc($query) or die("error");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Resume</title>
</head>
<body>
	
	<center>
		<h5><?php echo $row['Name']; ?></h5>
		<h5>Phone:<?php echo $row['Phone']; ?></h5>
		<h5>Email: <?php echo $row['Email']; ?></h5>
		<h5><?php echo $row['Linkedin']; ?></h5>
	</center>
	<br>
	<table border="1" width="1600" bgcolor="lightblue">
		<tr><td>Profile</td></tr>
	</table>
	<p><?php echo $row['About']; ?></p>
<br>

<table border="1" width="1600" bgcolor="lightblue">
		<tr><td>Academic background</td></tr>
	</table>
	<br>

	<table border="1">
		<tr>
			<td>Year(s)</td>
			<td>Qualification</td>
			<td>Board/University</td>
			<td>College/Institute/University</td>
			<td>Percentage/CGPA</td>
		</tr>
		<tr>
			<td><?php echo $row['Passingyear']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
			<td><?php echo $row['Board']; ?></td>
			<td><?php echo $row['College']; ?></td>
			<td><?php echo $row['Percentage']; ?></td>
		</tr>

		<tr>
			<td><?php echo $row['Passingyear']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
			<td><?php echo $row['Board']; ?></td>
			<td><?php echo $row['College']; ?></td>
			<td><?php echo $row['Percentage']; ?></td>
		</tr>
		<tr>
			<td><?php echo $row['Passingyear']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
			<td><?php echo $row['Board']; ?></td>
			<td><?php echo $row['College']; ?></td>
			<td><?php echo $row['Percentage']; ?></td>
		</tr>
	</table>
	<br>
	<table border="1" width="1600" bgcolor="lightblue">
		<tr><td>Trainings and Projects Undertaken</tr>
	</table>
	<br>
	<p><b>Institution:</b> <?php echo $row['Institute']; ?><br> 				
	<b>Duration:</b> <?php echo $row['Duration']; ?><br>	
	<b>Project Title:</b><?php echo $row['Title']; ?><br> 
	<b>Mentor:</b><?php echo $row['Mentor']; ?><br>
	<b>Description:</b>	<?php echo $row['Description']; ?>
</p>
<br>

<p><b>Institution:</b>	<?php echo $row['Institute']; ?><br>				
<b>Duration:</b> <?php echo $row['Duration']; ?><br>	
<b>Project Title:</b><?php echo $row['Title']; ?><br>
<b>Mentor:</b>	<?php echo $row['Mentor']; ?><br>
<b>Description:</b>	<?php echo $row['Description']; ?></p>



	<table border="1" width="1600" bgcolor="lightblue">
		<tr><td>Skills</tr>
	</table>
	<p><ul>
	<li><b>Software		:</b><?php echo $row['Software']; ?></li> 
	<li><b>Languages		:</b> <?php echo $row['Language']; ?></li>
	<li><b>Operating Systems	:</b> <?php echo $row['Operating']; ?></li>
</ul></p>

<table border="1" width="1600" bgcolor="lightblue">
		<tr><td>Awards and Certifications</tr>
	</table>

	<p><?php echo $row['Awards']; ?>
	</p>





</body>
</html>