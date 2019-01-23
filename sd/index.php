<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | LaLigaBuzz</title>
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
		<li><a class="active" href="index.php">Home</a></li>
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
	

	<div class="slideshow-container">
		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="images/img1.jpg" style="width:100%">
		  <div class="text">LaLiga Santander</div>
		</div>
		<div class="mySlides fade">
	    	<div class="numbertext">2 / 3</div>
			<img src="images/img2.jpg" style="width:100%; height:410px;">
			<div class="text">Champion 2016-2017</div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
			<img src="images/img3.jpg" style="width:100%">
			<div class="text">Champion 2015-2016</div>
		</div>

		</div>
		<br>

		<div style="text-align:center">
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
		</div>
		
		</br>
		
		<script src="myScript.js"></script>
		<div class="homes">
			<div>
				<nav>
					<form action="thank_you.php" method="post">
					<label for="lname">Your Name</label>
					<input type="text" id="yname" name="yourname" placeholder="Your name..">

					<label for="lname">Your Message</label>
					<input type="text" id="msg" name="message" placeholder="Your message..">

					<input type="submit" value="Submit">
					</form>
				</nav>
			</div>
			<article>
			
				<h2 style="text-align:center">Photo Gallery</h2>
				<h4 style="text-align:center">Click Photo To Open In Full Size</h4>

				<div class="row">
				  <div class="column">
					<img src="New Folder/84small.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
				  </div>
				  <div class="column">
					<img src="New Folder/85small.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
				  </div>
				  <div class="column">
					<img src="New Folder/86small.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
				  </div>
				  <div class="column">
					<img src="New Folder/87small.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
				  </div>
				</div>
				
				</br>
				  
				<div class="row">
				  <div class="column">
					<img src="New Folder/88small.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
				  </div>
				  <div class="column">
					<img src="New Folder/89small.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
				  </div>
				  <div class="column">
					<img src="New Folder/90small.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
				  </div>
				  <div class="column">
					<img src="New Folder/91small.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
				  </div>
				</div>

				<div id="myModal" class="modal">
				  <span class="close cursor" onclick="closeModal()">&times;</span>
				  <div class="modal-content">

					<div class="myGallerySlides">
					  <div class="numbertext">1 / 8</div>
					  <img src="New Folder/84.jpg" style="width:100%">
					</div>

					<div class="myGallerySlides">
					  <div class="numbertext">2 / 8</div>
					  <img src="New Folder/85.jpg" style="width:100%">
					</div>

					<div class="myGallerySlides">
					  <div class="numbertext">3 / 8</div>
					  <img src="New Folder/86.jpg" style="width:100%">
					</div>
					<div class="myGallerySlides">
					  <div class="numbertext">4 / 8</div>
					  <img src="New Folder/87.jpg" style="width:100%">
					</div>
					<div class="myGallerySlides">
					  <div class="numbertext">5 / 8</div>
					  <img src="New Folder/88.jpg" style="width:100%">
					</div>
					<div class="myGallerySlides">
					  <div class="numbertext">6 / 8</div>
					  <img src="New Folder/89.jpg" style="width:100%">
					</div>
					<div class="myGallerySlides">
					  <div class="numbertext">7 / 8</div>
					  <img src="New Folder/90.jpg" style="width:100%">
					</div>
					<div class="myGallerySlides">
					  <div class="numbertext">8 / 8</div>
					  <img src="New Folder/91.jpg" style="width:100%">
					</div>
					
					
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

					<div class="caption-container">
					  <p id="caption"></p>
					</div>


					<div class="column">
					  <img class="demo cursor" src="New Folder/84.jpg" style="width:100%" onclick="currentSlide(1)" alt="Real Madrid Vs Celta Vigo Match">
					</div>
					<div class="column">
					  <img class="demo cursor" src="New Folder/85.jpg" style="width:100%" onclick="currentSlide(2)" alt="Real Madrid Champion Of 2016-2017">
					</div>
					<div class="column">
					  <img class="demo cursor" src="New Folder/86.jpg" style="width:100%" onclick="currentSlide(3)" alt="Atletico Madrid Goal Celebration">
					</div>
					<div class="column">
					  <img class="demo cursor" src="New Folder/87.jpg" style="width:100%" onclick="currentSlide(4)" alt="Three Best Players of La Liga">
					</div>
					<div class="column">
					  <img class="demo cursor" src="New Folder/88.jpg" style="width:100%" onclick="currentSlide(5)" alt="Cristiano Ronaldo Goal Celebration">
					</div>
					<div class="column">
					  <img class="demo cursor" src="New Folder/89.jpg" style="width:100%" onclick="currentSlide(6)" alt="Cristiano Ronaldo Getting Red Card">
					</div>
					<div class="column">
					  <img class="demo cursor" src="New Folder/90.jpg" style="width:100%" onclick="currentSlide(7)" alt="Messi Suarez Neymar - MSN">
					</div>
					<div class="column">
					  <img class="demo cursor" src="New Folder/91.jpg" style="width:100%" onclick="currentSlide(8)" alt="Messi's Hattrick Celebration">
					</div>
				  </div>
				</div>
				
				</br>
				</br>
				
				<h2 style="text-align:center">Video Gallery</h2>
				<h4 style="text-align:center">View Full Size To Have Better Resolution</h4>
				
				<div class="row">
					<div class="column">
						<video width="100%" controls>
							<source src="video/Top 50 La Liga Goals 2016-17.mp4" type="video/mp4">
							Your browser does not support HTML5 video.
						</video>

						<p>
							Top 50 La Liga Goals 2016-17
							<a href="https://www.youtube.com/" target="_blank">YouTube</a>.
						</p>
					</div>
					
					<div class="column">
						<video width="100%" controls>
							<source src="video/Malaga vs Real Madrid Highlights.mp4" type="video/mp4">
							Your browser does not support HTML5 video.
						</video>

						<p>
							Malaga vs Real Madrid Highlights
							<a href="https://www.youtube.com/" target="_blank">YouTube</a>.
						</p>
					</div>
					
					<div class="column">
						<video width="100%" controls>
							<source src="video/Cristiano Ronaldos Most Amazing Goals in LaLiga.mp4" type="video/mp4">
							Your browser does not support HTML5 video.
						</video>

						<p>
							Cristiano Ronaldos Most Amazing Goals in LaLiga
							<a href="https://www.youtube.com/" target="_blank">YouTube</a>.
						</p>
					</div>
					
					<div class="column">
						<video width="100%" controls>
							<source src="video/Barcelona vs Eibar Highlights.mp4" type="video/mp4">
							Your browser does not support HTML5 video.
						</video>

						<p>
							Barcelona vs Eibar Highlights
							<a href="https://www.youtube.com/" target="_blank">YouTube</a>.
						</p>
					</div>
				</div>
				
				</br>
				</br>
				
				<div class="dv" style="margin-left: 0px">
				<h2 style="text-align:center">LaLiga Santander</h2>
				<p>The Primera División, commonly known as La Liga and as La Liga Santander for sponsorship reasons 
				with Santander, is the top professional association football division of the Spanish Football League 
				system. Administrated by the Liga de Fútbol Profesional(LFP), La Liga is contested by 20 teams, with 
				the three lowest-placed teams relegated to the Segunda División and replaced by the top two teams in 
				that division plus the winner of a play-off. </p>
				</div>
				
				<br>
				<br>

			</article>
		</div>
	<footer>
		Copyright | LaLigaBuzz | 2016-2017
	</footer>
	</body>
</html> 
<?php
	include 'close.php';
?>