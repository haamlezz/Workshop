<?php
//ການເຊື່ອມຕໍ່
$con = mysqli_connect("localhost","root","") or die("Error");

//ເລືອກຖານຂໍ້ມູນ
$db = mysqli_select_db($con,"laotop") or die("Error Database");

//ຕັ້ງຄ່າໂຕອັກສອນເປັນ utf8
mysqli_set_charset($con,"utf8");
?>

