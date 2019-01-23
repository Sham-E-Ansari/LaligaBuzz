<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laliga News | LaLigaBuzz</title>
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
	.read-more-state {
	  display: none;
	}

	.read-more-target {
	  opacity: 0;
	  max-height: 0;
	  font-size: 0;
	  transition: .25s ease;
	}

	.read-more-state:checked ~ .read-more-wrap .read-more-target {
	  opacity: 1;
	  font-size: inherit;
	  max-height: 999em;
	}

	.read-more-state ~ .read-more-trigger:before {
	  content: 'Show more';
	}

	.read-more-state:checked ~ .read-more-trigger:before {
	  content: 'Show less';
	}

	.read-more-trigger {
	  cursor: pointer;
	  display: inline-block;
	  padding: 0 .5em;
	  color: #666;
	  font-size: .9em;
	  line-height: 2;
	  border: 1px solid #ddd;
	  border-radius: .25em;
	}
	
	.content {
		max-width:1024px;
		float: left;
		margin-left: 155px;
		margin-bottom:10px;
	}

	.news{
		background-color: white;
		width:1024px;
		max-height: 400px;
		margin-top:10px;
		float: left; 
		padding: 2%;
		border-radius: .5em;
		resize: both;
		overflow: auto;
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
		<li><a class="active" href="laliga_news.php">Liga News</a></li>
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
		<li><a href="point_table_test.php">Point Table</a></li>
		<li><a href="about_us.php">About Us</a></li>
		
	</ul>

	<div class="slideshow-container" style="margin-left:155px">
		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="newsImage/mr.jpg" style="width:100%;height: 410px;">
		  <div class="text">After another prolific season for both Cristiano Ronaldo and Lionel Messi, Goal looks at the top scorers in football's major competitions</div>
		</div>
		<div class="mySlides fade">
	    	<div class="numbertext">2 / 3</div>
			<img src="newsImage/mw.jpg" style="width:100%;height: 410px;">
			<div class="text">Barcelona superstar Lionel Messi married childhood sweetheart Antonella Roccuzzo at a star-studded ceremony on Friday.</div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
			<img src="newsImage/ru.jpg" style="width:100%;height: 410px;">
			<div class="text">Real Madrid unhappy over Ronaldo silence</div>
		</div>

		</div>
		<br>
		<div style="text-align:center">
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
		</div>
		
		
		
		
		<div class="content">
			<div class="news">
				  <input type="checkbox" class="read-more-state" id="post-1" />
				  
				  <h3 style="margin-left:0px; text-align:center;">Spain could join Copa America 2019 in tournament reshuffle.</h3>
				  <img src= "newsImage/copa.jpg" alt =""  style="height: 212px;width:300px;display:block; margin-left:auto; margin-right:auto;" />

				  <p class="read-more-wrap">A change in format will see the competition feature 16 clubs and from from odd-numbered years to <span class="read-more-target">match the European calendar
					On Wednesday Conmebol confirmed a change in the format of the Copa America. From 2019, the tournament will have 16 nations 
					with six guests invited to join the South America contingent of 10.
					Spain are likely to be one of the nations invited........From 2019, the tournament will have 16 nations 
					with six guests invited to join the South America contingent of 10.
					Spain are likely to be one of the nations invited.From 2019, the tournament will have 16 nations 
					with six guests invited to join the South America contingent of 10.
					Spain are likely to be one of the nations invited.From 2019, the tournament will have 16 nations 
					with six guests invited to join the South America contingent of 10.
					Spain are likely to be one of the nations invited.From 2019, the tournament will have 16 nations 
					with six guests invited to join the South America contingent of 10.
					Spain are likely to be one of the nations invited.From 2019, the tournament will have 16 nations 
					with six guests invited to join the South America contingent of 10.
					Spain are likely to be one of the nations invited.From 2019, the tournament will have 16 nations 
					with six guests invited to join the South America contingent of 10.
					Spain are likely to be one of the nations invited.From 2019, the tournament will have 16 nations 
					with six guests invited to join the South America contingent of 10.
					Spain are likely to be one of the nations invited.From 2019, the tournament will have 16 nations 
					with six guests invited to join the South America contingent of 10.
					Spain are likely to be one of the nations invited.From 2019, the tournament will have 16 nations 
					with six guests invited to join the South America contingent of 10.
					Spain are likely to be one of the nations invited.</span></p>

				  <label for="post-1" class="read-more-trigger"></label>
			</div>
			
			<div class="news">
				  <input type="checkbox" class="read-more-state" id="post-2" />
				  
				  <h3 style="margin-left:0px; text-align:center;">Gerard Deulofeu unlikely to have a future at Barcelona</h3>
				  <img src="newsImage/gerard.jpg" alt="" style="display:block; margin-left:auto; margin-right:auto;" />

				  <p class="read-more-wrap">Gerard Deulofeu has become one of the biggest football enigmas of recent years. <span class="read-more-target">On Friday, Barcelona 
				  activated a £10.4million clause in the winger’s Everton contract to bring him back to the Nou Camp. 
				  ,,,... On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp. On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp. On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp.On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp. On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp.On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp.On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp. On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp. On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp. On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp. On Friday, Barcelona activated a £10.4million clause in the winger’s Everton contract to bring
				  him back to the Nou Camp. </span></p>

				  <label for="post-2" class="read-more-trigger"></label>
			</div>
			
			<div class="news">
				  <input type="checkbox" class="read-more-state" id="post-3" />
				  
				  <h3 style="margin-left:0px; text-align:center;">Verratti to become Xavi/Iniesta’s heir at Barcelona</h3>
				  <img src="newsImage/verratti.jpg" alt="" style="display:block; margin-left:auto; margin-right:auto;" />

				  <p class="read-more-wrap">With Paris Saint-Germain’s Marco Verratti revealing his desire to leave the club this summer, while Barcelona <span class="read-more-target">have confirmed 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  ,,..,,interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  interest in the Italian midfielder, it seems the Catalans are finally replacing Xavi for a title tilt and shot at the Champions League next season. 
				  </span></p>

				  <label for="post-3" class="read-more-trigger"></label>
			</div>
			
			
		</div>
		
		
		<script src="myScriptNews.js"></script>
			
	</body>
</html> 
<?php
	include 'close.php';
?>