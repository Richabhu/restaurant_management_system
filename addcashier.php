<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>

<html>
<head>
<br><br>
	<title>ADD CASHIER</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color:grey">
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/ca.jpg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	<center>
	<h1>ADD CASHIER</h1>
	
	<br><br><br><br><br><br>
	<form action="addcashier.php" method="post">
	<label><b>cashier Name</b></label>
	<input name="name" type="text" placeholder="cashier Name" required /><br><br>
	<label><b>cashier No</b></label>
	<input type="text" name="no" placeholder="cashier number" required /><br><br>
	<label><b>salary</b></label>
    <input type="text" name="salary" placeholder="cashier salary" required /><br><br>
	
	
    <input name="submit" type="submit" value="ADD"/>	<br><br>
	
	<a href="ahome.php"><input type="button" value="back to home" id="button"/></a><br><br>
	
	
	</center>
	</form>
	
	<?php
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$no=$_POST['no'];
			
			$salary=$_POST['salary'];
		
			
				$query="select * from cashier where cashier_id='$no'";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("Cashier have already been added!!")</script>';
					
				}
				else
				{
					$query="insert into cashier values('$name',$no,$salary)";
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
	?>
	</div>
</body>
</html>