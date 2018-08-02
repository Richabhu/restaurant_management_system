<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>

<html>
<head>
<br><br>
	<title>REGISTER</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#5c6670">
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	
	<td valign="top" allign="left" background="img/fff.jpeg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	<center>
	<h1 style="color:white;"><b>REGISTER</b></h1>
	
	<br><br><br><br><br><br>
	<form action="register.php" method="post">
	<label><b>User Name</b></label>
	<input name="username" type="text" placeholder="username" required /><br><br>
	<label><b>password</b></label>
	<input type="password" name="password" placeholder="password" required /><br><br>
	<label><b>confirm password</b></label>
    <input type="password" name="cpassword" placeholder="confirm password" required /><br><br>
	<label><b>contact number</b></label>
    <input type="text" name="number" placeholder="contact number" required /><br><br>
	<label><b>address</b></label>
    <input type="text" name="address" placeholder="address" required /><br><br>
    <input name="submit" type="submit" value="sign up"/>	<br><br>
	
	<a href="login.php"><input type="button" value="back to login" id="button"/></a><br><br>
	
	
	</center>
	</form>
	
	<?php
		if(isset($_POST['submit']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			$number=$_POST['number'];
			$address=$_POST['address'];
			if($password==$cpassword)
			{
				$query="select * from user where username='$username'";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("user already exits")</script>';
					
				}
				else
				{
					$query="insert into user values('$username','$password',$number,'$address')";
					$query_run=mysqli_query($con,$query);
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("successful registration")</script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("error try again")</script>';
					}
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("password and confirm password should be same")</script>';
			}
		}
	?>
	</div>
</body>
</html>