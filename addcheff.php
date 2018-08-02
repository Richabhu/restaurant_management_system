<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>

<html>
<head>
<br><br>
	<title>ADD CHEFF</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color:grey">
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/oo.jpeg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	<center>
	<h1 style="color:black;"><b>ADD CHEFF</b></h1>
	
	<br><br><br><br><br><br>
	<form action="addcheff.php" method="post">
	<label><b>Cheff Name</b></label>
	<input name="name" type="text" placeholder="Cheff Name" required /><br><br>
	<label><b>Cheff No</b></label>
	<input type="text" name="no" placeholder="Cheff number" required /><br><br>
	<label><b>Cheff specialization</b></label>
    <input type="text" name="spec" placeholder="Cheff specialization" required /><br><br>
	<label><b>Cheff salary</b></label>
    <input type="text" name="salary" placeholder="Cheff salary" required /><br><br>
	
	
    <input name="submit" type="submit" value="ADD"/>	<br><br>
	
	<a href="ahome.php"><input type="button" value="back to home" id="button"/></a><br><br>
	
	
	</center>
	</form>
	
	<?php
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$no=$_POST['no'];
			$spec=$_POST['spec'];
			$salary=$_POST['salary'];
		
			
				$query="select * from cheff where cheff_id='$no'";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("Cheff have already been added!!")</script>';
					
				}
				else
				{
					$query="insert into cheff values('$name',$no,'$spec',$salary)";
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