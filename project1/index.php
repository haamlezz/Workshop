

<?php
	session_start();
	include 'session.php';
	check_login();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome to Lunla shop</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<p>
			<a href="logout.php">ອອກຈາກລະບົບ</a>
		</p>
		<h1>Welcome to Lunla Shop</h1>
		<p>We sell everything that fits your needs</p>
	</body>
</html>
