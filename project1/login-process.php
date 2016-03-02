<?php

	session_start();

	include 'dbconfig.php';
	if($_POST){
	//	$username = $_POST['username'];
	//	$password = $_POST['pw'];

	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

	$password = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_SPECIAL_CHARS);
	$password = md5($password);

		$sql = "SELECT * FROM users
						WHERE
						username = '$username'
						AND
						password = '$password'";

		echo $sql;

		$result = mysqli_query($con, $sql);

		if(mysqli_num_rows($result) == 1){

			$_SESSION['login'] = 'true';
			$_SESSION['username'] = $username;

			echo '<p>
				Successfully .<a href="index.php">Goto INDEX</a>
			</p>';
		}else{
			echo '<p>
				Failed. <a href="login.php">ກັບຄືນ</a>
			</p>';
		}
	}

 ?>
