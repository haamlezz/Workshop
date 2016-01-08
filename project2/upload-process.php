<?php
    $dir = 'photo/';
    $file_name = basename($_FILES['file']['name']);
    $target = 'photo/'.$file_name;
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
      echo " upload complete";
      echo '<img src="'.$target.'" width="400">';
    }else{
      echo "Error";
    }
?>
