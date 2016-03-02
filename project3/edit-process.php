<?php
  include 'dbconfig.php';
  $proid = filter_input(INPUT_POST, 'proid');
  $proname = filter_input(INPUT_POST, 'proname');
  $proprice = filter_input(INPUT_POST, 'proprice');
  $quantity = filter_input(INPUT_POST, 'quantity');

  $sql = "UPDATE products SET proname = '$proname', proprice = $proprice, quantity = $quantity WHERE proid = $proid";

  $rs = mysqli_query($con, $sql);
  if($rs){
    echo "Update OK";
    echo '<p>
    <a href="product.php">Back</a>
    </p>';

  }else{
    echo mysqli_error($con);
  }
?>
