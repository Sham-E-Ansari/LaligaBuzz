<?php
	include 'config.php';
	if(isset($_GET['match_id']))
	{
		$id = $_GET['match_id'];
		
	}
	$home_team  = "SELECT team.team_name FROM team INNER JOIN matchplay ON team.team_id = matchplay.home_team_id
	WHERE matchplay.match_id = $id ";
	$away_team = "SELECT team.team_name FROM team INNER JOIN matchplay ON team.team_id = matchplay.away_team_id
	WHERE matchplay.match_id = $id ";
	$home_team_goal = "SELECT home_goals FROM match_details WHERE match_details.match_id = $id ";
	$away_team_goal = "SELECT away_goals FROM match_details WHERE match_details.match_id = $id ";
	$home_pos = "SELECT home_pos FROM match_details WHERE match_details.match_id = $id ";
	$away_pos = "SELECT away_pos FROM match_details WHERE match_details.match_id = $id ";
	$home_fouls = "SELECT home_fouls FROM match_details WHERE match_details.match_id = $id ";
	$away_fouls = "SELECT away_fouls FROM match_details WHERE match_details.match_id = $id ";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Match Details | LaLigaBuzz</title>
	<link rel="stylesheet" href="styles/myStyle.css">
	
	
	<style>
	body {
		background-image: url("images/bbg.png");
	
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
		<li><a href="fixtures.php">Fixtures</a></li>
		<li><a href="point_table.php">Point Table</a></li>
		<li><a href="about_us.php">About Us</a></li>
	</ul>
	
	</br>
	
	
	
	</br>
	<table>
		
	
		<tr>
			<th colspan="3">Match Details</th>
		</tr>
		<tr>
			<td>                     </td>	
			<td>
				<?php
					$query_result = mysqli_query($conn,$home_team) or die(mysql_error());
					if(mysqli_num_rows($query_result) > 0)
					{ 					
						$row = mysqli_fetch_array($query_result);
						?>
						<?php echo $row['team_name']; ?>
							
						<?php
					}
				?>
			</td>
			<td>
				<?php
					$query_result = mysqli_query($conn,$away_team) or die(mysql_error());
					if(mysqli_num_rows($query_result) > 0)
					{ 					
						$row = mysqli_fetch_array($query_result);
						?>
						<?php echo $row['team_name']; ?>
							
						<?php
					}
				?>
			</td>
			
		</tr>
		<tr>
			<td>Goals</td>	
			<td>
				<?php
					$query_result = mysqli_query($conn,$home_team_goal) or die(mysql_error());
					if(mysqli_num_rows($query_result) > 0)
					{ 					
						$row = mysqli_fetch_array($query_result);
						?>
						<?php echo $row['home_goals']; ?>
							
						<?php
					}
				?>
			</td>
			<td>
				<?php
					$query_result = mysqli_query($conn,$away_team_goal) or die(mysql_error());
					if(mysqli_num_rows($query_result) > 0)
					{ 					
						$row = mysqli_fetch_array($query_result);
						?>
						<?php echo $row['away_goals']; ?>
							
						<?php
					}
				?>
			</td>
			
		</tr>
		<tr>
			<td>Possession</td>	
			<td>
				<?php
					$query_result = mysqli_query($conn,$home_pos) or die(mysql_error());
					if(mysqli_num_rows($query_result) > 0)
					{ 					
						$row = mysqli_fetch_array($query_result);
						?>
						<?php echo $row['home_pos']; ?>
							
						<?php
					}
				?>
			</td>
			<td>
				<?php
					$query_result = mysqli_query($conn,$away_pos) or die(mysql_error());
					if(mysqli_num_rows($query_result) > 0)
					{ 					
						$row = mysqli_fetch_array($query_result);
						?>
						<?php echo $row['away_pos']; ?>
							
						<?php
					}
				?>
			</td>
			
		</tr>
		<td>Total Fouls</td>	
			<td>
				<?php
					$query_result = mysqli_query($conn,$home_fouls) or die(mysql_error());
					if(mysqli_num_rows($query_result) > 0)
					{ 					
						$row = mysqli_fetch_array($query_result);
						?>
						<?php echo $row['home_fouls']; ?>
							
						<?php
					}
				?>
			</td>
			<td>
				<?php
					$query_result = mysqli_query($conn,$away_fouls) or die(mysql_error());
					if(mysqli_num_rows($query_result) > 0)
					{ 					
						$row = mysqli_fetch_array($query_result);
						?>
						<?php echo $row['away_fouls']; ?>
							
						<?php
					}
				?>
			</td>
			
		</tr>
			
			  
	</table>

	
	<footer>
		Copyright | LaLigaBuzz | 2016-2017
	</footer>
	</body>
</html> 
<?php
	include 'close.php';
?>