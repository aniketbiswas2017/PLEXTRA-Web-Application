<?php
session_start();
$_SESSION['check']=false;
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movies - Find all your favorite movies near you</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<script src="/js/wow.js"></script>

</head>
<body>
	<header id="header" class="transparent-navbar">
		<div class="container">		
			<div class="navbar-header">
				<div class="navbar-brand">
					<a class="logo" href="index.php">
						<img class="logo-img" src="./img/plextra4.png" alt="logo">
						<img class="logo-alt-img" src="./img/plextra3.png" alt="logo">
					</a>
				</div>
				<button class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>				
			</div>		
			<nav id="nav">
				<ul class="main-nav nav navbar-nav navbar-right">					
					<li><a href="index.php">Home</a></li>
					<li><a href="#home">Movies</a></li>
				    <li><a href="events.php">Events</a></li>
					<li><a href="sports.php">Sports</a></li>
					<li><a href="Login.php"><?php if(isset($_SESSION['user_session'])){ echo "Logout"; } else { echo "Login"; } ?></a></li>
					<li><a href="Register.php">Sign Up</a></li>
				</ul>
			</nav>			
		</div>		
	</header>

	<div id="home">
		<div class="section-bg" style="background-image:url(./img/avengers.jpg)" data-stellar-background-ratio="0.5"></div>
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="home-content"><br><br><br><br><br><br><br><br><br><br><br><br>
                        <h1>The latest movies near you</h1>
                        <h4 class="lead">Book your tickets on the go, only with a couple of clicks.</h4>
                        <li><form action="searchFunction.php" method="post" class="form-horizontal">
                                <input id= "myInput" type="text" name="searchParam" placeholder="Search for movie, event and sports information">&nbsp;&nbsp;&nbsp;
                                <input type="submit" class="btn btn-danger btn-lg" value = "Go"/>
                            </form></li><br><br>
                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="speakers" class="section">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<h4 class="title"><span>&nbsp;&nbsp;Now</span> <span>Showing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>&nbsp;&nbsp;&nbsp;&nbsp; Coming</span> <span>Soon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>&nbsp;Featured</span> <span>Movies</span></h4>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
						<div class="speaker-img">
							<img src="./img/movie1.jpg" alt="">
						</div>
						<div class="speaker-body">
							<div class="speaker-social">
								<a href="moviebook.php"><i class=""></i>View</a>
							</div>
							<div class="speaker-content">
								<h2>ELYSIUM</h2>
								<span>Cineplex Cinemas Parklane</span>
							</div>						
						</div>
					</div>
					
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
						<div class="speaker-img">
							<img src="./img/movie2.jpg" alt="">
						</div>
						<div class="speaker-body">
							<div class="speaker-social">
								<a href="moviebook.php"><i class=""></i>View</a>
							</div>
							<div class="speaker-content">
								<h2>RITES OF SPRING</h2>
								<span>Coming Next Week</span>
							</div>
						</div>
					</div>
					                <a href="listings.php" class="btn btn-primary btn-lg btn-block">Movies Near You</a>

			</div>

				

				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
						<div class="speaker-img">
							<img src="./img/movie3.jpg" alt="">
						</div>
						<div class="speaker-body">
							<div class="speaker-social">
							<a href="#"><i class=""></i>View</a>
							</div>
							<div class="speaker-content">
								<h2><u>LA</u> BOLDUC</h2>
								<span>Selected Theatres</span>
							</div>
						</div>
					</div>
					
				</div>				
			</div>
		</div>
	</div>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-push-4">
					<div class="footer-brand">
						<a class="logo" href="index.php">
							<img class="logo-img" src="./img/logo1.png" alt="logo">
						</a>
					</div>
				</div>
				<div class="col-md-4 col-md-push-4">
					<div class="contact-social">
						<a href="feedback.php">Feedback&nbsp;&nbsp;</a>
						<a href="contactus.php">Contact Us&nbsp;&nbsp;</a>
					</div>
				</div>
				<div class="col-md-4 col-md-pull-8">
					<span class="copyright">
Copyright &copy; 2018. All rights reserved </span><br>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/main.js"></script>
</body>
</html>