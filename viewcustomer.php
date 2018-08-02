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
<body>
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/tt.jpeg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	<center>
	<h1>VIEW CUSTOMER DETAILS</h1><br><br>
	
	
	</center>
	<table class="table table-responsive" border="2" style="border-color:black; background-color:white">
	<tr>
		<th>slno</th>
		<th>username</th>
		<th>contact number</th>
		<th>address</th>
		</tr>
		
		<?php
		$query="select * from user";
		$res=$con->query($query);
		$i=1;
		while($row=$res->fetch_assoc())
		{
			$username=$row['username'];
			$number=$row['number'];
			$address=$row['address'];
			echo '<tr>
			<td>'.$i.'</td>
			<td>'.$username.'</td>
			<td>'.$number.'</td>
			<td>'.$address.'</td>
			</tr>'; $i++;
		}
		?>
	
	
	</div>
	<a href="aview.php"><input type="button" value="back" id="button"/></a>
	<a href="index.php"><input type="button" value="log out" id="button"/></a><br><br>
</body>
</html>

