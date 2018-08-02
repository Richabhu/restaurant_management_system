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
<body style="background-color:#4d3900">
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/qq.jpeg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	<center>
	<h1 style="color:black;"><b>VIEW FOOD ITEMS</b></h1><br><br><br>
	<h3 style="color:black;"><b>STARTERS</b></h3>
	
	</center>
	<table class="table table-responsive" border="2" style="border-color:black; background-color:white">
	<tr>
		<th>slno</th>
		<th>name</th>
		<th>food_id</th>
		<th>cost</th>
		</tr>
		
		<?php
		$query="select * from food where food_type='starter'";
		$res=$con->query($query);
		$i=1;
		while($row=$res->fetch_assoc())
		{
			$name=$row['food_name'];
			$no=$row['food_id'];
			$cost=$row['cost'];
			
			echo '<tr>
			<td>'.$i.'</td>
			<td>'.$name.'</td>
			<td>'.$no.'</td>
			<td>'.$cost.'</td>
			</tr>'; $i++;
		}
		?>
	
	
	</div>
	<a href="viewfood.php"><input type="button" value="back" id="button"/></a>
	<a href="index.php"><input type="button" value="log out" id="button"/></a><br><br>
</body>
</html>

