<?php
	include 'config.php';
?>
<html>
	<head>
		<title>Point Table | LaligaBuzz</title>
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
			<li><a class="active" href="point_table.php">Point Table</a></li>
			<li><a href="about_us.php">About Us</a></li>
			
		</ul>

	</br>

			<table>
				<tr>
					<th colspan="6">Point Table</th>
				</tr>
			<tr>
				<td style="text-align: center"><span style="font-weight:bold">Team Name</span></td>
				<td style="text-align: center"><span style="font-weight:bold">Match Played</span></td>
				<td style="text-align: center"><span style="font-weight:bold">Wins</span></td>
				<td style="text-align: center"><span style="font-weight:bold">Draws</span></td>
				<td style="text-align: center"><span style="font-weight:bold">Losses</span></td>
				<td style="text-align: center"><span style="font-weight:bold">points</span></td>
			</tr>
			<?php 
				$sql = "SELECT team.team_name , point_table.match_played, wins, draws , losses, points FROM point_table INNER JOIN 
				team on team.team_id = point_table.team_id ORDER BY point_table.points DESC";
				$pointTable_query_result = mysqli_query($conn,$sql) or die(mysql_error());
				if(mysqli_num_rows($pointTable_query_result) > 0)
				{
					while ($row = mysqli_fetch_array($pointTable_query_result))
					{?>
						
						<tr>
							<td><?php echo $row['team_name']; ?></td>
							<td><?php echo $row['match_played']; ?></td>
							<td><?php echo $row['wins']; ?></td>
							<td><?php echo $row['draws']; ?></td>
							<td><?php echo $row['losses']; ?></td>
							<td><?php echo $row['points']; ?></td>
						</tr>
					<?php }
				}
			?> 
			  
			</table>

	</br>

	<footer>
		Copyright | LaLigaBuzz | 2016-2017
	</footer>
	</body>
</html>
<?php
	include 'close.php';
?>
