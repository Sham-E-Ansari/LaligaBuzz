<?php 
	include 'config.php';
	
	if(isset($_POST['uname']))
	{
		$uname = $_POST['uname'];
	}
	if(isset($_POST['pass']))
	{
		$pass = $_POST['pass'];
	}
?>

<html>
	<head>
		<title>Admin Page</title>
	</head>
	
	<body>
		Schedules:
		<form action="process.php" method="post">
			Match ID: <input type="text" name="match_id"><br>
			Time Slot ID: <input type="text" name="time_slot_id"><br>
			Play Date: <input type="text" name="play_date"><br>
			<input type="submit" value="Insert">
		</form>
		
		<br>
		<br>
		
	</body>
</html>


<?php
	include 'close.php';
?>

