<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>

<html>
<head>
<br><br>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #000066">
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	
	<td valign="top" allign="left" background="img/eee.jpg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	<center>
	<h1>LOGIN</h1>
	
	<br><br><br><br><br><br>
	<form action="login.php" method="post">
	<label><b>User Name</b></label>
	<input name="username" type="text" placeholder="username" required /><br><br>
	<label><b>password</b></label>
	<input type="password" name="password" placeholder="password" required /><br><br>
	
    <input name="login" type="submit" value="Login"/>	<br><br>
	
	<a href="register.php"><input type="button" value="Register" id="button"/></a><br><br>
	
	
	</center>
	</form>
	<?php
	
	
	$sqllll="delete from cart";
	$res=$con->query($sqllll);
	
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$query="select * from user where username='$username'and password='$password'";
			$query_run=mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$_SESSION['username']=$username;
				header('location:customer.php');
			}
			else if($username=='admin' && $password=='admin')
			{
				$_SESSION['username']=$username;
				header('location:ahome.php');
			}
			else
			{
				echo'<script type="text/javascript">alert("invalid")</script>';
			}
		}
		
		
	?>
	</div>
</body>
</html>