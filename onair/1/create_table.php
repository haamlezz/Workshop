<?php
	$host = "localhost";
	//ໂຮສຂອງຖານຂໍ້ມູນ ປົກກະຕິຈະເປັນ localhost
	
	$user = "root";
	//ຊື່ບັນຊີຜູ້ໃຊ້ຂອງຖານຂໍ້ມູນ ໃນນີ້ເຮົາໃຊ້ root
	
	$password = "";
	//ລະຫັດຜ່ານຂອງບັນຊີຜູ້ໃຊ້ຖານຂໍ້ມູນ ໃນນີ້ແມ່ນບໍ່ໄດ້ຕັ້ງ
	
	$con = mysqli_connect($host, $user, $password) or die("Error Connection");
	//ກຳນົດຈຸດເຊື່ອມຕໍ່ໄວ້ໃນໂຕປ່ຽນ $con
	
	$qry = "CREATE DATABASE onair";
	mysqli_query($con, $qry);
	//ສ້າງຖານຂໍ້ມູນທີ່ຊື່ວ່າ onaire
	
	
	$db = mysqli_select_db($con,"onair") or die("Error Database");
	//ເລືອກຖານຂໍ້ມູນທີ່ມີຊື່ວ່າ onair
	
	$qry = "CREATE TABLE employees (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50)
			)";
	mysqli_query($con, $qry);
	//ສ້າງຕາຕະລາງຂໍ້ມູນທີ່ມີຊື່ວ່າ employees
	
	$qry = "CREATE TABLE products (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			pro_name VARCHAR(30) NOT NULL,
			pro_price INT(11) NOT NULL,
			cat_id INT(11)
			)";
	mysqli_query($con,$qry);
	//ສ້າງຕາຕະລາງຂໍ້ມູນທີ່ມີຊື່ວ່າ products
	
	$qry = "CREATE TABLE bills (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			bill_date TIMESTAMP,
			customer_id VARCHAR(10)
			)";
	mysqli_query($con, $qry);
	//ສ້າງຕາຕະລາງຂໍ້ມູນທີ່ມີຊື່ວ່າ bills
	
	$qry = "CREATE TABLE bill_details(
			id INT(11) UNSIGNED,
			product_id INT(11),
			quantity INT(11)
			)";
	mysqli_query($con, $qry);
	//ສ້າງຕາຕະລາງຂໍ້ມູນທີ່ມີຊື່ວ່າ bill_details
	
	$qry = "CREATE TABLE customers(
			customer_id VARCHAR(10) PRIMARY KEY,
			customer_name VARCHAR(30),
			customer_tel VARCHAR(30),
			customer_address VARCHAR(30),
			customer_email VARCHAR(50)
			)";
	mysqli_query($con, $qry);
	//ສ້າງຕາຕະລາງຂໍ້ມູນທີ່ມີຊື່ວ່າ customer
	
	echo "Please check your database";
	
?>