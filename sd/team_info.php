<?php
	include 'config.php';
	
	if(isset($_GET['team']))
	{
		$name = $_GET['team'];
		if( $name == 'Real_Madrid'){
			
			$logo_path = "images/RealMadridLogo.png";
			
			$coach_sql = "SELECT coach_name from coach inner join team on coach.coach_id = team.coach_id
				where team.team_name= 'Real Madrid' ";
				
			$std_sql = "SELECT stadium.stadium_name from stadium INNER JOIN team ON
			team.stadium_name = stadium.stadium_name WHERE team.team_name = 'Real Madrid' ";
			
			$location = 'Madrid, Spain' ;
			
			$nick = 'Los Vikingos (The Vikings), Madrid Football Club, Los Blancos (The Whites), <br>
			Los Merengues (The Meringues)' ;
			
			$about = 'Real Madrid Club de Fútbol, commonly known as Real Madrid, or simply as Real, is a professional football club based
	in Madrid, Spain. Founded in 1902 as Madrid Football Club, the club has traditionally worn a white home kit since inception' ;
			
			$success_sql = 'SELECT team_stats.season , team_stats.position FROM team_stats WHERE team_id = 15 ORDER BY `team_stats`.`season` DESC';
			
			$def_sql = "SELECT player.player_name FROM player WHERE player.player_position = 'Defender' AND player.team_id = 15";
			
			$mid_sql = "SELECT player.player_name FROM player WHERE player.player_position = 'Midfielder' AND player.team_id = 15";
			
			$atk_sql = "SELECT player.player_name FROM player WHERE player.player_position = 'Forward' AND player.team_id = 15";
			
			$gk_sql = "SELECT player.player_name FROM player WHERE player.player_position = 'Goalkeeper' AND player.team_id = 15";
			
			$p_list = "select player_name from player where team_id = 15";
		}
		if( $name == 'Barcelona'){
			
			$logo_path = "images/Barcelona.png";
			
			$coach_sql = "SELECT coach_name from coach inner join team on coach.coach_id = team.coach_id
				where team.team_name= 'Barcelona' ";
				
			$std_sql = "SELECT stadium.stadium_name from stadium INNER JOIN team ON
			team.stadium_name = stadium.stadium_name WHERE team.team_name = 'Barcelona' ";
			
			$location = 'Barcelona, Spain' ;
			
			$nick = 'Barca, Els Blaugrana, Els Culers' ;
			
			$about = 'Futbol Club Barcelona, 
					commonly known as Barcelona and familiarly 
					as Barca, is a professional football club 
					based in Barcelona, Catalonia, Spain. Founded 
					in 1899 by a group of Swiss, English and Catalan 
					footballers led by Joan Gamper,
					the club has become a symbol of Catalan 
					culture and Catalanism, hence the motto "Mes que un club"' ;
			
			$success_sql = 'SELECT team_stats.season , team_stats.position FROM team_stats WHERE team_id = 4 ORDER BY `team_stats`.`season` DESC';
			
			$def_sql = "SELECT player.player_name FROM player WHERE player.player_position = 'Defender' AND player.team_id = 4";
			
			$mid_sql = "SELECT player.player_name FROM player WHERE player.player_position = 'Midfielder' AND player.team_id = 4";
			
			$atk_sql = "SELECT player.player_name FROM player WHERE player.player_position = 'Forward' AND player.team_id = 4";
			
			$gk_sql = "SELECT player.player_name FROM player WHERE player.player_position = 'Goalkeeper' AND player.team_id = 4";
			
			$p_list = "select player_name from player where team_id = 4";
		}
		
		
	}
	
	
	
?>

	
?>
<!DOCTYPE html>
<html>
<head>
	<?php
	echo '<title>' . $name .'</title>' ;?>
	
	<link rel="stylesheet" href="styles/myStyle.css">
	<style>
	body {
		background-image: url("images/bbg.png");
	}
	.teamTab{ 
  
		margin-left: 155px;
		font-family: arial, sans-serif;
		display: inline-block;
		border: 2px solid #000072; 
		-moz-border-radius: 20px;
		border-radius: 20px;
		border-spacing: 0; 
		
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
	echo '<img src="' . $logo_path .'" alt="Logo" width="200px" height="220px" class="float-img" title = "' . $name . '">' ;?>
	
	
	
<div class= "textDetails">
	<p><b>Arena/Stadium: </b>
		<?php			
			$query_result = mysqli_query($conn,$std_sql) or die(mysql_error());
			if(mysqli_num_rows($query_result) > 0)
			{ 					
				$row = mysqli_fetch_array($query_result);
				?>
				<?php echo $row['stadium_name']; ?>
					
				<?php
			}
		?>
	
	</p>
		<p><b>Manager: </b>
		<?php

			
			
			$query_result = mysqli_query($conn,$coach_sql) or die(mysql_error());
			if(mysqli_num_rows($query_result) > 0)
			{ 					
				$row = mysqli_fetch_array($query_result);
				?>
				<?php echo $row['coach_name']; ?>
					
				<?php
			}
		?>
		</p>
	<p><b>Location: </b><?php echo $location  ?></p>
	<p><b>Leagues: </b>UEFA Champions League, La Liga, Copa del Rey, UEFA Super Cup</p>
	<p><b>Nicknames: </b><?php echo $nick ?></p>
</div>
</br>
</br>
</br>

<table>
  <tr>
    <th>About Team</th>
  </tr>
  <tr>
    <td><p> <?php echo $about ?></p></td>
  </tr>
</table>

</br>
	
</br>



		<table>
			<th> Defender</th>
		  <?php 
				
				$query_result = mysqli_query($conn,$def_sql) or die(mysql_error());
				if(mysqli_num_rows($query_result) > 0)
				{
					while ($row = mysqli_fetch_array($query_result))
					{?>
						
						<tr>
							<td><?php echo $row['player_name']; ?></td>
						</tr>
					<?php }
				}
			?> 
		</table>
		</br>
		<table>
			<th> Midfielder</th>
		  <?php 
				
				$query_result = mysqli_query($conn,$mid_sql) or die(mysql_error());
				if(mysqli_num_rows($query_result) > 0)
				{
					while ($row = mysqli_fetch_array($query_result))
					{?>
						
						<tr>
							<td><?php echo $row['player_name']; ?></td>
						</tr>
					<?php }
				}
			?> 
		</table>
		</br>
		<table>
			<th> Forward</th>
		  <?php 
				
				$query_result = mysqli_query($conn,$atk_sql) or die(mysql_error());
				if(mysqli_num_rows($query_result) > 0)
				{
					while ($row = mysqli_fetch_array($query_result))
					{?>
						
						<tr>
							<td><?php echo $row['player_name']; ?></td>
						</tr>
					<?php }
				}
			?> 
		</table>
		</br>
		<table>
			<th> Goalkeeper</th>
		  <?php 
				
				$query_result = mysqli_query($conn,$gk_sql) or die(mysql_error());
				if(mysqli_num_rows($query_result) > 0)
				{
					while ($row = mysqli_fetch_array($query_result))
					{?>
						
						<tr>
							<td><?php echo $row['player_name']; ?></td>
						</tr>
					<?php }
				}
			?> 
		</table>
		</br>
		</br>

<table>
			<th colspan="2">Success in LaLiga</th>
		  <tr>
			<td style="text-align:center"><span style="font-weight:bold;">Season</span></td>
			<td style="text-align:center"><span style="font-weight:bold;">Position in LaLiga</span></td>
		  </tr
		  <?php 
				
				$query_result = mysqli_query($conn,$success_sql) or die(mysql_error());
				if(mysqli_num_rows($query_result) > 0)
				{
					while ($row = mysqli_fetch_array($query_result))
					{?>
						
						<tr>
							<td><?php echo $row['season']; ?></td>
							<td><?php echo $row['position']; ?></td>
							
							
						</tr>
					<?php }
				}
			?> 
		  
		
</table>

</br>
<?php
	
	$newresult = mysqli_query($conn,$p_list) or die(mysql_error());
?>
	<article style= "margin-left: 155px; border-left: none;">  
	
		<form method="get" action="player_info.php">
		<?php
			echo '<select id="player_details" name="player">';
			echo '<option>Select Player</option>';
			while ($row = mysqli_fetch_array($newresult)) {
			echo '<option value="' . $row['player_name'] .'">' . $row['player_name'] .'</option>';
			}
			echo '</select>';

		?>
		<br>
		<br>
		<button type= "submit" style="margin-left:400px;" > View</button>
		</form>
	</article>
	
	
	

<footer>
	Copyright | LaLigaBuzz | 2016-2017
</footer>

</body>
</html>
<?php
	include 'close.php';
?>