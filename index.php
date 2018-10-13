<?php
session_start();
$_SESSION['check']=false;
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLEXTRA - Your personal event manager</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />

</head>
<body onload="initialize()">
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
                <li><a href="movies.php">Movies</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="sports.php">Sports</a></li>
                <li><a href="Register.php">Sign Up &nbsp;</a></li>
				<li><a href="Login.php"><?php if(isset($_SESSION['user_session'])){ echo "Logout"; } else { echo "Login"; } ?></a></li>
                <li><a href="#"> <span id="city"></a></li>
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
                        <h1>Find the latest events near you</h1>
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

<div id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h3 class="title"><span>About</span> <span style="color: #dd0a37;">PLEXTRA</span></h3>
            </div>
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="about-content">
                    <p> Choose from a whopping 300+ cinema screens across Canada and book as late as 30 minutes before showtime for those spur-of-the-moment plans.</p>
                </div>

                <div id="numbers">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="number">
                                <h3><span class="counter" data-from="0" data-to="500" data-speed="1500">0</span>+</h3>
                                <p>Hours</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="number">
                                <h3><span class="counter" data-from="0" data-to="250" data-speed="1500">0</span>+</h3>
                                <p>Venues</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="number">
                                <h3><span class="counter" data-from="0" data-to="8" data-speed="1500">0</span>+</h3>
                                <p>Provinces</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="number">
                                <h3><span class="counter" data-from="0" data-to="200" data-speed="1500">0</span>+</h3>
                                <p>Events</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="picture">
    <div class="container">
        <div class="row">
            <div id="galery-owl" class="owl-carousel owl-theme">
                <div class="galery-item">
                    <img src="./img/1.jpg" alt="">
                </div>
                <div class="galery-item">
                    <img src="./img/2.jpg" alt="">
                </div>
                <div class="galery-item">
                    <img src="./img/3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="video-cta" class="section">
		<div class="section-bg" style="background-image:url(./img/background02.jpg)" data-stellar-background-ratio="0.5"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="cta-content text-center">
						<iframe width="570" height="345" src="https://www.youtube.com/embed/6obKlKQhZs8">
						</iframe><br><br>
						<h4>From exhibitions to dance performances, stage shows, comedy shows, music concerts or workshops, you will get tickets online for events of all kinds at Plextra.</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

<div id="speakers" class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h4 class="title"><span>Featured</span><span style="color: #dd0a37;">Movies&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>Featured</span><span style="color: #dd0a37;">Events&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>Featured</span><span style="color: #dd0a37;">Sports</span>&nbsp;&nbsp;</h4>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
                    <div class="speaker-img">
                        <img src="./img/featured1.jpg" alt="">
                    </div>
                    <div class="speaker-body">
                        <div class="speaker-social">
                            <a href="#"><i class=""></i>View</a>
                        </div>
                        <div class="speaker-content">
                            <h2>Avengers: Infinity War</h2>
                            <span>Cineplex Cinemas Parklane</span>
                        </div>
                    </div>
                </div>
                <a href="movies.php" class="btn btn-primary btn-lg btn-block">More Movies</a>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
                    <div class="speaker-img">
                        <img src="./img/featured2.jpg" alt="">
                    </div>
                    <div class="speaker-body">
                        <div class="speaker-social">
                            <a href="#"><i class=""></i>View</a>
                        </div>
                        <div class="speaker-content">
                            <h2>Tristan Legg & The Mad Dogs</h2>
                            <span>The Old Triangle Irish Warehouse</span>
                        </div>
                    </div>
                </div>
                <a href="events.php" class="btn btn-primary btn-lg btn-block">More Events</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
                    <div class="speaker-img">
                        <img src="./img/featured3.jpg" alt="">
                    </div>
                    <div class="speaker-body">
                        <div class="speaker-social">
                            <a href="#"><i class=""></i>View</a>
                        </div>
                        <div class="speaker-content">
                            <h2>Scotia Speedworld CARSTAR Racing</h2>
                            <span>150, Sky Boulevard, Goffs</span>
                        </div>
                    </div>
                </div>
                <a href="sports.php" class="btn btn-primary btn-lg btn-block">More Sports</a>
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
                    <a href="Feedback.php">Feedback&nbsp;&nbsp;</a>
                    <a href="Contact.php">Contact Us&nbsp;&nbsp;</a>
                </div>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <span class="copyright"> Copyright &copy; 2018. All rights reserved </span><br>
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
<script src="js/loc.js"></script>
<script src="js/locity.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>