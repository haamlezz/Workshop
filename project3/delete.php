<?php

  include 'dbconfig.php';

  $proid = filter_input(INPUT_GET, 'proid');

  $sql = "DELETE FROM products WHERE proid = $proid";
  $rs = mysqli_query($con, $sql);
  if($rs){
    echo "<p>
    Delete OK
    </p>";
  }else{
    echo mysqli_error($con);
  }
 ?>
