<?php
	include 'function.php';
	check_login();
?>
<?php
    include 'dbconfig.php';
    $username = filter_input(INPUT_POST, "username");
    $password = md5(filter_input(INPUT_POST, "password"));
    $password = password_hash($password, PASSWORD_DEFAULT);
    //echo $username . $password;

    $result = mysqli_query($con, "INSERT INTO users VALUES('$username', '$password', '', '',1)");

    if($result){
      header('Location: add-user.php?error=0');
    }else{
      header('Location: add-user.php?error=1');
    }
?>
