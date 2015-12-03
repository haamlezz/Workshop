<?php
	include 'dbconfig.php';
	
	$title = $_POST['title'];
	$body = $_POST['body'];
	$body = nl2br($body);
	
	$qry = "INSERT INTO post VALUE ('', '$title', '$body', CURRENT_TIMESTAMP)";
	
	if(mysqli_query($con,$qry)){
		echo "<p>Add OK</p>";
		echo '<a href="index.php">Back</a>';	
	}else{
		echo "<p>Add not OK</p>";
	}
	
?>