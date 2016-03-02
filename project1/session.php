


<?php
//session.php
function check_login(){
	if($_SESSION['login'] == ""){
		header("Location: login.php");
	}
}
