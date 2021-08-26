<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>
	<link rel="icon" type="image/icon" href="Gallery/book_icon.ico">
</head>
<body>
	<h1>Sample</h1>
	<input type="text" name="text">
	<input type="submit" name="submit" value="login">
	<input type="reset" name="reset" value="delete">
	<?php 
		if(isset($_POST['submit'])){
			$var = $_POST['text'];
			echo "ohb noooo";
			echo $var;

		}
	?>
</body>
</html>