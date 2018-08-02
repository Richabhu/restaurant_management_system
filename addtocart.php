<?php
	require 'dbconfig/config.php';
	session_start();
?>
<!DOCTYPE HTML>

<html>
<head>
<br><br>
	<title>cart</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color:white">
	<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/kk.jpeg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div class="container">
	<center>
	<h1><b>SELECTED FOOD ITEMS</b></h1><br><br>
	
	
	</center>
	
	<table class="table table-responsive" border="2" style="border-color:black; background-color:white">
	<tr>
		<th>slno</th>
		<th>name</th>
		<th>food_id</th>
		<th>cost</th>
		
		</tr>
		<?php
	$a=$_SESSION['food_id'];
	$sqll="select * from food where food_id='$a'";
	$res=$con->query($sqll);
	
		
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
	
	</table>
	
	
	<a href="customer.php"><input type="button" value="back" id="button"/></a>
	<a href="index.php"><input type="button" value="log out" id="button"/></a><br><br>
	
	<form method="post" >
	<center>
	<h3> Quantity</h3>
	<hr>
	<input type="text"  name="qty" placeholder="Quantity?"/><br><br>
	<input name="submit" type="submit" value="add"/></a><br><br>
	
	</center>
	<?php
	if(isset($_POST['submit']))
	{
	$qty=$_POST['qty'];
	//$tp=$qty*$cost;
	$sqlle="insert into cart values($no,'$name',$qty,calc($cost,$qty))";
	$res=$con->query($sqlle);
	
		echo"<script type='text/javascript'>
		alert('Sucessfully Added Items!!');
		</script>";
	}
	
	?>
	<h3>confirm your order?</h3>
	<a href="finalorder.php"><input type="button" value="YES" id="button"/></a><br><br>
	<a href="login.php"><input type="button" value="NO" id="button"/></a><br><br>
	
	</div>
</body>
</html>

