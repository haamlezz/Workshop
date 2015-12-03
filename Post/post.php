<!doctype HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add New Post</title>
	</head>
	<body>
		<form action="post_process.php" method="post">
		<table>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Body</td>
				<td><textarea name="body"> </textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Add Post"></td>
			</tr>
		</table>
		</form>
	</body>
</html>