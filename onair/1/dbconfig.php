<?php
	$host = "localhost";
	//ໂຮສຂອງຖານຂໍ້ມູນ ປົກກະຕິຈະເປັນ localhost
	
	$user = "root";
	//ຊື່ບັນຊີຜູ້ໃຊ້ຂອງຖານຂໍ້ມູນ ໃນນີ້ເຮົາໃຊ້ root
	
	$password = "";
	//ລະຫັດຜ່ານຂອງບັນຊີຜູ້ໃຊ້ຖານຂໍ້ມູນ ໃນນີ້ແມ່ນບໍ່ໄດ້ຕັ້ງ
	
	$con = mysqli_connect($host, $user, $password) or die("Error Connection");
	//ກຳນົດຈຸດເຊື່ອມຕໍ່ໄວ້ໃນໂຕປ່ຽນ $con
	
	$db = mysqli_select_db($con,"onair") or die("Error Database");
	//ເລືອກຖານຂໍ້ມູນທີ່ມີຊື່ວ່າ onair
?>