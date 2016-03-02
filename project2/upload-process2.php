<?php
//ນັບຈຳນວນສະມາຊິກໃນ array name
  $num = count($_FILES['upload']['name']);
  //echo $num;

  for($i=0; $i<=$num-1;$i++){
    $file_name = $_FILES['upload']['name'][$i];

    $target = 'photo/'.$file_name;

    $tmp_name = $_FILES['upload']['tmp_name'][$i];

    $size = $_FILES['upload']['size'][$i];

    $type = $_FILES['upload']['type'][$i];

    if($size <= 1048576 && $type == 'image/jpeg' ):
      move_uploaded_file($tmp_name, $target);

      echo '<img src="' .$target. '" width="200"> <br>';
    endif;
  }


  echo '<pre>';
  print_r($_FILES);
  echo '</pre>';

 ?>
