<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>

<html>
<head>
<br><br>
	<title>ADD FOOD ITEM</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color:grey">
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/cc.jpeg" style="background-repeat:no-repeat; height:700px;background-size:100% 100%;">
	<div>
	<center>
	<h1 style="color:black;font-size:60px"><b>ADD FOOD ITEM</b></h1>
	
	<br><br><br><br><br><br>
	<form action="addfood.php" method="post">
	<label><b>Item Name</b></label>
	<input name="name" type="text" placeholder="Item Name" required /><br><br>
	<label><b>Item No</b></label>
	<input type="text" name="no" placeholder="Item number" required /><br><br>
	<label><b>Cost</b></label>
    <input type="text" name="cost" placeholder="Item Cost" required /><br><br>
	<label><input type="radio" name="fd" value="starter">starter</label>
	<label><input type="radio" name="fd" value="main course">main course</label>
	<label><input type="radio" name="fd" value="dessert">dessert</label><br><br>
	
    <input name="submit" type="submit" value="ADD"/>	<br><br>
	
	<a href="ahome.php"><input type="button" value="back to home" id="button"/></a><br><br>
	
	
	</center>
	</form>
	
	<?php
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$no=$_POST['no'];
			$cost=$_POST['cost'];
			$fd=$_POST['fd'];
			
				$query="select * from food where food_id='$no'";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("food have already been entered...Try again!!!!")</script>';
					
				}
				else
				{
					$query="insert into food values('$name',$no,$cost,'$fd')";
					$query_run=mysqli_query($con,$query);
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("successful entered")</script>';
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