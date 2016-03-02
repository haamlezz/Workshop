<?php

function check_auth(){
  if(session_id == $_SESSION['id'] && $_SESSION['login'] != 'true'){
    header('Location: login.php');
  }
}

?>
