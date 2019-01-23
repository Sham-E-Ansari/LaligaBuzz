<?php
	include 'config.php';
	
?>
<html>
	<head>
		<title>Admin Login</title>
	</head>
	<body>
		<form action="admin.php" method="get">
			userName: <input type="text" name="uname">
			Password: <input type="text" name="pass">
			<input type="submit" value="submit">
		</form>
	</body>
</html>
<?php
	include 'close.php';
?>