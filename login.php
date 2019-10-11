<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="pf.jpg">
	<h1 align="center"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</strong></h1>
		<div><table border="1" align="center">
			<form name="form1" method="post" action="log.php">
				<tr><td><label>Username</label>
				<input type="text" name="uname" required="required"></td></tr>
				
				<tr><td><label>Password</label>
				<input type="password" name="pass" required="required"></td></tr>

				<tr><td><input type="submit" value="submit"> <input type="reset"></td></tr>

				<tr><td>Not yet a member? <a href="register.php">Sign up</a></td></tr>
			</form>
		</table></div>

</body>
</html>