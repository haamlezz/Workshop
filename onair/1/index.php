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
		<h2>Product List</h2>
<?php
	//Query string
	$qry = "SELECT * FROM products";
	
	//Query
	$result = mysqli_query($con,$qry);
	
	if(mysqli_num_rows($result) == 0){
		echo "<p>No Product list</p>";
	}else{
		echo "<ol>";
		while($row = mysqli_fetch_array($result)){
			echo "<li>";
			
			echo $row['pro_name'];
			
			echo "</li>";
		}
		echo "</ol>";
	}
	
?>
		

		
	</body>
</html>