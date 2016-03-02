




<?php
	//create_table
	$con = mysqli_connect('localhost','root', '')
	or die('Error Connection');

	mysqli_query($con,'CREATE DATABASE workshop');

	mysqli_select_db($con, 'workshop');

	$sql = "CREATE TABLE users(
					username VARCHAR(30) PRIMARY KEY,
					password VARCHAR(100),
					firstname VARCHAR(10),
					lastname VARCHAR(10));
					)";
 ?>
