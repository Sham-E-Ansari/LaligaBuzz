<?php 
	include 'config.php';
	
	if(isset($_POST['match_id']))
	{
		$match_id = $_POST['match_id'];
	}
	if(isset($_POST['time_slot_id']))
	{
		$time_slot_id = $_POST['time_slot_id'];
	}
	if(isset($_POST['play_date']))
	{
		$play_date = $_POST['play_date'];
	}
	
	$sql = "INSERT INTO `schedules`(`match_id`, `time_slot_id`, `play_date`) VALUES ('$match_id','$time_slot_id', '$play_date')";
	
	if ($conn->query($sql) === TRUE)
	{
		$last_id = $conn->insert_id;
		echo "Insert successful. Last inserted id " . $last_id;
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	include 'close.php';
?>