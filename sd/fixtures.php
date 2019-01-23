<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fixtures | LaligaBuzz</title>
	<link rel="stylesheet" href="styles/myStyle.css">
	<style>
		body {
			background-image: url("images/bbg.png");	
		}
		
		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			-webkit-animation-name: fadeIn; /* Fade in the background */
			-webkit-animation-duration: 0.4s;
			animation-name: fadeIn;
			animation-duration: 0.4s
		}

		/* Modal Content */
		.modal-content {
			position: fixed;
			bottom: 50;
			margin-left: 400px;
			max-width: 600px;
			background-color: #fefefe;
			width: 100%;
			-webkit-animation-name: slideIn;
			-webkit-animation-duration: 0.4s;
			animation-name: slideIn;
			animation-duration: 0.4s
			
		}

		/* The Close Button */
		.close {
			color: white;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		.modal-header {
			padding: 2px 16px;
			background-color: #5cb85c;
			color: white;
		}

		.modal-body {padding: 2px 16px;}

		

		/* Add Animation */
		@-webkit-keyframes slideIn {
			from {bottom: -300px; opacity: 0} 
			to {bottom: 0; opacity: 1}
		}

		@keyframes slideIn {
			from {bottom: -300px; opacity: 0}
			to {bottom: 0; opacity: 1}
		}

		@-webkit-keyframes fadeIn {
			from {opacity: 0} 
			to {opacity: 1}
		}

		@keyframes fadeIn {
			from {opacity: 0} 
			to {opacity: 1}
		}
		
		button[type=submit] {
		display: inline-block;
		color: Black;
		background-color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		min-width: 165px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}
	button[type=submit]:hover {
		background-color: DeepSkyBlue;
	}
		
	</style>
</head>
<body>
	<header>
		<img src="images/la_liga.png" alt="Logo" width="80px" height="80px" class="float-img2" title = "LaLigaBuzz">
		<h1>LaLigaBuzz</h1>
	</header>
<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="laliga_news.php">Liga News</a></li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">LigaBBVA Teams</a>
				<div class="dropdown-content">
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Alaves">Alaves</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Atletic Bilbao">Atletic Bilbao</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Atletico Madrid">Atletico Madrid</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Atletic Bilbao">Atletic Bilbao</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Barcelona">Barcelona</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Celta Vigo">Celta Vigo</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Deportivo La Coruna">Deportivo La Coruna</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Eibar">Eibar</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Espanyol">Espanyol</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Granada">Granada</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Las Palmas">Las Palmas</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Leganes">Leganes</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Malaga">Malaga</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Osasuna">Osasuna</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Real Betis">Real Betis</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Real_Madrid">Real Madrid</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Real Sociedad">Real Sociedad</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Sevilla">Sevilla</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Sporting Gijon">Sporting Gijon</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Valencia">Valencia</button>					
					</form>
					<form action="team_info.php" method="get">
						<button type="submit" name="team" value= "Villarreal">Villarreal</button>					
					</form>
					
					
					
				</div>
		</li>
		<li><a class="active" href="fixtures.php">Fixtures</a></li>
		<li><a href="point_table.php">Point Table</a></li>
		<li><a href="about_us.php">About Us</a></li>
		
	</ul>

</br>

		<table>

		  <tr>
			<th colspan="5">Upcoming Match</th>
		  </tr>
		  
		  <tr>
			<td style="text-align: center"><span style="font-weight:bold">Date</span></td>
			<td style="text-align: center"><span style="font-weight:bold">Home</span></td>
			<td style="text-align: center"><span style="font-weight:bold">Away</span></td>
			<td style="text-align: center"><span style="font-weight:bold">Time</span></td>
			<td style="text-align: center"><span style="font-weight:bold">Venue</span></td>
		  </tr>
			<?php 
				$sql = "SELECT schedules.play_date , homeTeam.team_name as Home, AwayTeam.team_name as Away , 
				time_slot.start_time , matchplay.stadium_name FROM schedules INNER JOIN 
				time_slot ON schedules.time_slot_id = time_slot.time_slot_id INNER join 
				matchplay ON schedules.match_id = matchplay.match_id INNER JOIN team as homeTeam 
				on matchplay.home_team_id = homeTeam.team_id INNER JOIN 
				team as AwayTeam on matchplay.away_team_id = AwayTeam.team_id 
				ORDER BY schedules.play_date  LIMIT 7,14";
				$query_result = mysqli_query($conn,$sql) or die(mysql_error());
				if(mysqli_num_rows($query_result) > 0)
				{
					while ($row = mysqli_fetch_array($query_result))
					{?>
						
						<tr>
							<td><?php echo $row['play_date']; ?></td>
							<td><?php echo $row['Home']; ?></td>
							<td><?php echo $row['Away']; ?></td>
							<td><?php echo $row['start_time']; ?></td>
							<td><?php echo $row['stadium_name']; ?></td>
							
						</tr>
					<?php }
				}
			?> 
			  
</table>

</br>
</br>
</br>

			<table id= "prevMatch">

			  <tr>
				<th colspan="5">Previous Match Results</th>
			  </tr>
			  
			<tr>
				<td style="text-align: center"><span style="font-weight:bold">Date</span></td>
				<td style="text-align: center"><span style="font-weight:bold">Home</span></td>
				<td style="text-align: center"><span style="font-weight:bold">Away</span></td>
				<td style="text-align: center"><span style="font-weight:bold">Result</span></td>
				<td style="text-align: center"><span style="font-weight:bold">Show Details</span></td>
			</tr>
			<?php 
				$sql = "SELECT schedules.play_date , homeTeam.team_name as Home, 
				AwayTeam.team_name as Away, matchplay.score , matchplay.match_id FROM schedules INNER join matchplay
				ON schedules.match_id = matchplay.match_id INNER JOIN team as homeTeam on 
				matchplay.home_team_id = homeTeam.team_id INNER JOIN team as AwayTeam on 
				matchplay.away_team_id = AwayTeam.team_id ORDER BY `schedules`.`play_date` DESC LIMIT 7,14 ";
				$query_result = mysqli_query($conn,$sql) or die(mysql_error());
				if(mysqli_num_rows($query_result) > 0)
				{
					
					while ($row = mysqli_fetch_array($query_result))
					{?>
						
						<tr>
							<td><?php echo $row['play_date']; ?></td>
							<td><?php echo $row['Home']; ?></td>
							<td><?php echo $row['Away']; ?></td>
							<td><?php echo $row['score']; ?></td>
							<form action="match_details.php" method= "get">
							<td><?php 
								echo '<input type="hidden" name="match_id" value="' . $row['match_id'] .'">';
								echo '<input type="submit" value="Details">';
							?>
							</form>
							</td>
						</tr>
						
						
					<?php
					}
				}
			?>  
</table>

</br>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    
  </div>

</div>

<footer>
	Copyright | LaLigaBuzz | 2016-2017
</footer>

<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn1 = document.getElementById("1");
	

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn1.onclick = function() {
		modal.style.display = "block";
	}
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
	
	function goToNewPage(int id)
	{
		int match_id = id;
		
	}
	
</script>

</body>
</html>
<?php
	include 'close.php';
?>