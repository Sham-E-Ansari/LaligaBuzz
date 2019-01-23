<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>About US | LaLigaBuzz</title>
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
		<li><a class="active" href="about_us.php">About Us</a></li>
		
	</ul>
</br>

<div class="dv">
    <h2 style="text-align: center">La Liga</h2>
    <p>The Primera División, commonly known as La Liga and as La Liga Santander for sponsorship reasons with Santander,
	is the top professional association football division of the Spanish football league system.</p>
	</br>
	</br>
	<p style="text-align: center"><b>CEO: </b>Javier Gómez (2013–)</p>
	<p style="text-align: center"><b>Number of teams: </b>20 (from 1997–98)</p>
	<p style="text-align: center"><b>Most championships: </b>Real Madrid (33 titles)</p>
	<p style="text-align: center"><b>Current champion: </b>Real Madrid C.F. (33rd title)</p>
	<p style="text-align: center"><b>Headquarters: </b>Madrid, Spain</p>
</div>

</br>
</br>

<table>
  <tr>
    <th style="background-color: gray">About Us</th>
  </tr>
  <tr>
    <td style="background-color: LightGray"><p><b>Address: </b>Dhaka, Bangladesh</p></td>
  </tr>
  <tr>
    <td style="background-color: LightGray"><p><b>Phone: </b>8801xxxxxxxxx</p></td>
  </tr>
  <tr>
    <td style="background-color: LightGray"><p><b>Email: </b>xxx@gmail.com</p></td>
  </tr>
  <tr>
    <td style="background-color: LightGray"><p><b>Subscribe: </b>link</p></td>
  </tr>
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