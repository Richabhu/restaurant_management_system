<?php
	require 'dbconfig/config.php';
	session_start();
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
<body style="background-color:#990000">
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/qq.jpeg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	<center>
	<h1>VIEW FOOD ITEMS</h1><br><br>
	<h3>STARTER</h3>
	
	</center>
	<table class="table table-responsive" border="2" style="border-color:black; background-color:white">
	<tr>
		<th>slno</th>
		<th>name</th>
		<th name="san">food_id</th>
		<th>cost</th>
		<th>click to place order</th>
		</tr>
		
		<?php
		
		if(isset($_POST['san']))
		{
			$_SESSION['food_id']=$_POST['san'];
			header('Location: ./addtocart.php');
			
		}
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
			<td><form method="POST" action="starters.php"><button class="btn btn-info btn-xs" name="san" value="'.$no.'">buy</button></form></td>
			</tr>'; $i++;
		}
		?>
	
	
	</div>
	<a href="customer.php"><input type="button" value="back" id="button"/></a>
	<a href="index.php"><input type="button" value="log out" id="button"/></a><br><br>
</body>
</html>

