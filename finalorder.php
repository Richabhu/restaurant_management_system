<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>

<html>
<head>
<br><br>
	<title>bill</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color:#003300">
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/nnn.jpeg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	
	<center>
	<h1 style="color:white;font-size:60px"><b>BILL</b></h1><br><br>
	
	
	</center>
	<table class="table" border="4" style="border-color:black;font-weight:bold;font-size:25px">
	<tr>
		<th>slno</th>
		<th>food id</th>
		<th>food name</th>
		<th>quantity</th>
		<th>total cost</th>
		</tr>
		
		<?php
		$query="select * from cart";
		$res=$con->query($query);
		$i=1;
		while($row=$res->fetch_assoc())
		{
			$no=$row['food_id'];
			$name=$row['food_name'];
			$qty=$row['qty'];
			$cost=$row['cost'];
			
			echo '<tr>
			<td>'.$i.'</td>
			<td>'.$no.'</td>
			<td>'.$name.'</td>
			<td>'.$qty.'</td>
			<td>'.$cost.'</td>
			</tr>'; $i++;
		}
		?>
		</table>
		<center>
	<h1 style="color:black;font-size:35px"><b>TOTAL COST:</b></h1>
	<?php
		$qu="select sum(cost) from cart";
		$res=mysqli_query($con,$qu);
 while($row=mysqli_fetch_assoc($res))
 {
	 echo  "<b>"."<font size='100' , color='red'>".$row['sum(cost)']."</font>"."</b>";
 }
	?>

	
	<h2>THANK YOU!!</h2>
	<h2>visit again</h2>
	</center>
	</div>
	<a href="customer.php"><input type="button" value="back" id="button"/></a>
	<a href="index.php"><input type="button" value="log out" id="button"/></a><br><br>

	
</body>
</html>

