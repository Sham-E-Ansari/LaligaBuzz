<?php
	include 'config.php';
	if(isset($_GET['player'])){
		$p_name = $_GET['player'];
		if($p_name == "Cristiano Ronaldo")
		{
			$logo_path= "images/ronaldo.jpg";
			$nat = "SELECT player.nationality FROM player WHERE player.player_name= 'Cristiano Ronaldo' ";
			$height = "SELECT player.height FROM player WHERE player.player_name= 'Cristiano Ronaldo' ";
			$pos = "SELECT player.player_position FROM player WHERE player.player_name= 'Cristiano Ronaldo' ";
			$p_team = "SELECT team.team_name from team INNER JOIN player on player.team_id = team.team_id WHERE player.player_name = 'Cristiano Ronaldo' ";
			$p_stat = "SELECT player_stats.p_season , player_stats.apps , player_stats.goals , player_stats.assists, player_stats.yellow_card, player_stats.red_card , player_stats.own_goals FROM player_stats INNER JOIN player ON player.player_id = player_stats.player_id WHERE player.player_name = 'Cristiano Ronaldo' ";
		}
		else if($p_name == "Lionel Messi")
		{
			$logo_path= "images/messi.PNG";
			$nat = "SELECT player.nationality FROM player WHERE player.player_name= 'Lionel Messi' ";
			$height = "SELECT player.height FROM player WHERE player.player_name= 'Lionel Messi' ";
			$pos = "SELECT player.player_position FROM player WHERE player.player_name= 'Lionel Messi' ";
			$p_team = "SELECT team.team_name from team INNER JOIN player on player.team_id = team.team_id WHERE player.player_name = 'Lionel Messi' ";
			$p_stat = "SELECT player_stats.p_season , player_stats.apps , player_stats.goals , player_stats.assists, player_stats.yellow_card, player_stats.red_card , player_stats.own_goals FROM player_stats INNER JOIN player ON player.player_id = player_stats.player_id WHERE player.player_name = 'Lionel Messi' ";
		}
		else {
			$nat = "SELECT player.nationality FROM player WHERE player.player_name= 'Lionel Messi' ";
			$height = "SELECT player.height FROM player WHERE player.player_name= 'Lionel Messi' ";
			$pos = "SELECT player.player_position FROM player WHERE player.player_name= 'Lionel Messi' ";
			$p_team = "SELECT team.team_name from team INNER JOIN player on player.team_id = team.team_id WHERE player.player_name = 'Lionel Messi' ";
			$p_stat = "SELECT player_stats.p_season , player_stats.apps , player_stats.goals , player_stats.assists, player_stats.yellow_card, player_stats.red_card , player_stats.own_goals FROM player_stats INNER JOIN player ON player.player_id = player_stats.player_id WHERE player.player_name = 'Lionel Messi' ";

		}
		
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cristiano Ronaldo</title>
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
	<?php
	echo '<img src="' . $logo_path .'" alt="Logo" width="200px" height="238px" class="float-img" title = "' . $p_name . '">' ;?>

<div class= "textDetails">
	<p><b>Name: </b><?php echo $p_name; ?></p>
	<p><b>Nationality: </b>
		<?php
			$query_result = mysqli_query($conn,$nat) or die(mysql_error());
			if(mysqli_num_rows($query_result) > 0)
			{ 					
				$row = mysqli_fetch_array($query_result);
				?>
				<?php echo $row['nationality']; ?>
					
				<?php
			}
		?>
	</p>
	<p><b>Height: </b>
		<?php
			$query_result = mysqli_query($conn,$height) or die(mysql_error());
			if(mysqli_num_rows($query_result) > 0)
			{ 					
				$row = mysqli_fetch_array($query_result);
				?>
				<?php echo $row['height']; ?>
					
				<?php
			}
		?>
	
	</p>
	<p><b>Current Club: </b>
			<?php
			$query_result = mysqli_query($conn,$p_team) or die(mysql_error());
			if(mysqli_num_rows($query_result) > 0)
			{ 					
				$row = mysqli_fetch_array($query_result);
				?>
				<?php echo $row['team_name']; ?>
					
				<?php
			}
		?>
	</p>
	<p><b>Positions: </b>
			<?php
			$query_result = mysqli_query($conn,$pos) or die(mysql_error());
			if(mysqli_num_rows($query_result) > 0)
			{ 					
				$row = mysqli_fetch_array($query_result);
				?>
				<?php echo $row['player_position']; ?>
					
				<?php
			}
		?>
	</p>
</div>
</br>

<table>
  <tr>
    <th>Season</th>
    <th>Appearances</th>
    <th>Goals</th>
	<th>Assists</th>
	<th>Yellow</th>
	<th>Red</th>
	<th>Own Goals</th>
  </tr>
	
		<?php 
				$query_result = mysqli_query($conn,$p_stat) or die(mysql_error());
				if(mysqli_num_rows($query_result) > 0)
				{
					while ($row = mysqli_fetch_array($query_result))
					{?>
						
						<tr>
							<td><?php echo $row['p_season']; ?></td>
							<td><?php echo $row['apps']; ?></td>
							<td><?php echo $row['goals']; ?></td>
							<td><?php echo $row['assists']; ?></td>
							<td><?php echo $row['yellow_card']; ?></td>
							<td><?php echo $row['red_card']; ?></td>
							<td><?php echo $row['own_goals']; ?></td>
						</tr>
					<?php }
				}
			?> 
  
 
</table>

<footer>
	Copyright | LaLigaBuzz | 2016-2017
</footer>

</body>
</html>
<?php
	include 'close.php';
?>