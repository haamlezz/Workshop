<?php include 'dbconfig.php';?>

<html>
<head>
<meta charset="utf-8">
<title>post</title>
</head>
<body>
<h1>Welcome to Post.com</h1>

<p><a href="post.php">Add Post</a></p>

<?php
$qry = "SELECT * FROM post";

$result = mysqli_query($con,$qry);

if(mysqli_num_rows($result) == 0){
	echo "<p>No Post</p>";
}else{
	echo '<table width="100%" border="1" cellpadding="3">';
	echo '<tr>';
	echo '	<th>Post ID</th>
			<th>Title</th>
			<th>Date/Time</th>';
	echo '</tr>';
	
	while($data = mysqli_fetch_array($result)){
		echo '<tr>';
			
		echo '<td>'.$data['post_id'].'</td>';
		echo '<td><a href="view.php?postid='.$data['post_id'].'">'.$data['title'].'</a></td>';
		echo '<td>'.$data['date'].'</td>';
		
		echo '</tr>';
	}
	
	echo '</table>';
}
?>
</body>
</html>