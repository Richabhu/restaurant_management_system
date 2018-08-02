<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>

<html>
<head>
<br><br>
	<title>view</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color:black">
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/hh.jpeg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	<center>
	<h1 style="color:white;"><b>VIEW EMPLOYEE DETAILS</b></h1><br><br>
	<h3 style="color:white;"><b>WAITER</b></h3>
	
	</center>
	<table class="table table-responsive" border="2" style="border-color:black; background-color:white">
	<tr>
		<th>slno</th>
		<th>name</th>
		<th>waiter_id</th>
	
		<th>salary</th>
		</tr>
		
		<?php
		$query="select * from waiter";
		$res=$con->query($query);
		$i=1;
		while($row=$res->fetch_assoc())
		{
			$name=$row['waiter_name'];
			$no=$row['waiter_id'];
			//$spec=$row['specialization'];
			$salary=$row['salary'];
			
			echo '<tr>
			<td>'.$i.'</td>
			<td>'.$name.'</td>
			<td>'.$no.'</td>
			
			<td>'.$salary.'</td>
			</tr>'; $i++;
		}
		?>
	
	
	</div>
	<a href="ahome.php"><input type="button" value="back" id="button"/></a>
	<a href="index.php"><input type="button" value="log out" id="button"/></a><br><br>
</body>
</html>

