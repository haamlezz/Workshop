<?php

  //ກວດການລ໊ອກອິນ
  function check_login(){
    if($_SESSION['login'] == false || $_SESSION['sid'] != session_id()){
      header('location:login.php');
    }
  }

  //hash ລະຫັດຜ່ານ
  function do_hash($password){
    $pw_hash = password_hash($password,PASSWORD_DEFAULT);
    return $pw_hash;
  }



 ?>
