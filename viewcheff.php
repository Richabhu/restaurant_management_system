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
<body style="background-color:#9933ff">
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/tt.jpeg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	<center>
	<h1>VIEW employee details</h1><br><br>
	<h3>CHEFF</h3>
	
	
	<table class="table table-responsive" border="4" style="border-color:black; background-color:white">
	<tr>
		<th>slno</th>
		<th>name</th>
		<th>cheff_id</th>
		<th>specialization</th>
		<th>salary</th>
		</tr>
		
		<?php
		$query="select * from cheff";
		$res=$con->query($query);
		$i=1;
		while($row=$res->fetch_assoc())
		{
			$name=$row['cheff_name'];
			$no=$row['cheff_id'];
			$spec=$row['specialization'];
			$salary=$row['salary'];
			
			echo '<tr>
			<td>'.$i.'</td>
			<td>'.$name.'</td>
			<td>'.$no.'</td>
			<td>'.$spec.'</td>
			<td>'.$salary.'</td>
			</tr>'; $i++;
		}
		?>
	
	
	</div>
	</center>
	<a href="ahome.php"><input type="button" value="back" id="button"/></a>
	<a href="index.php"><input type="button" value="log out" id="button"/></a><br><br>
</body>
</html>

