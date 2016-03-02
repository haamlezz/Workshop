<?php
  $con = mysqli_connect('localhost','root','') or die("Error Connection");

  mysqli_select_db($con,'workshop');

  mysqli_set_charset($con,'utf8');
 ?>
