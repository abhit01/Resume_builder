<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
    function matchpass()
    {  
	var x=document.form.email.value;  
	var atposition=x.indexOf("@");  
	var dotposition=x.lastIndexOf(".");  
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  	alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  	return false;  
  	}  
}  
</script>
</head>
<body background="pf.jpg">
	<h1 align="center"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Register yourself</strong></h1>

	
		<div>	
		<table border=1 align="center">
		<form name="form" action="server1.php" method="post" onsubmit="return matchpass()">
			<tr><td><label>First name</label>
			<input type="text" name="name1"></td></tr>

			<tr><td><label>Last name</label>
			<input type="text" name="name2"></td></tr>

			<tr><td><label>Email</label>
			<input type="text" name="email" required="required"></td></tr>

			<tr><td><label>Username</label>
			<input type="text" name="username"></td></tr>

			<tr><td><label>Password</label>
			<input type="password" name="password"></td></tr>

			<tr><td><label>Contact</label>
			<input type="text" name="phone" required="required"></td></tr>

			<tr><td><label>Gender</label>
			<input type="radio" name="gender" value="Male" checked>Male
			<input type="radio" name="gender" value="Female">Female</td></tr>

			<tr><td><label>Address</label>
			<input type="text" name="address" id='add'></td></tr>

			<tr><td><label>City</label>
			<input type="text" name="city" required="required"></td></tr>

			<tr><td><label>State</label>
			<input type="text" name="state" required="required"></td></tr>

			<tr><td><input type="submit" value="submit"> <input type="reset"></td></tr>
		
  			<tr><td>Already a member? <a href="login.php">Sign in</a></td></tr>


		</form>	
	</table></div>

</body>
</html>