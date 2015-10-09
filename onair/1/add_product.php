<?php
	include ('dbconfig.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP ON AIR #1</title>
	</head>
	<body>
		<h1>PHP+MySQL ON AIR #1</h1>
		<h2>Add Product</h2>
		
		<form method="post">
		
		<p>Product: <input type="text" name="pro_name"></p>
		<p>Price: <input type="text" name="pro_price"></p>
		<p>Category: 
			<select name="cat_id">
				<option value="1">Food</option>
				<option value="2">Drink</option>
				<option value="3">Snack</option>
			</select>
		
		</p>
		<p><input type="submit"></p>
		
		</form>
		
<?php
	if($_POST){
		$pro_name = $_POST['pro_name'];
		$pro_price = $_POST['pro_price'];
		$cat_id = $_POST['cat_id'];
		
		$qry = "INSERT INTO products VALUES(
				'',
				'$pro_name',
				$pro_price,
				$cat_id
				)";
		if(mysqli_query($con, $qry)){
			echo "<p>Product Inserted</p>";
		}else{
			echo "<p>Product Not Inserted</p>";
			echo mysqli_error($con);
		}
	}
?>
		
	</body>
</html>