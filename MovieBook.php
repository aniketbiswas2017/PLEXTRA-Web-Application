<?php
session_start();
?>
<!DOCTYPE html>
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
                <a class="logo" href="index.html">
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
                <li><a href="movies.html">Movies</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="sports.html">Sports</a></li>
                <li><a href="Register.php">Login &nbsp; <span style="color: #dd0a37;">Sign Up</span></a></li>
            </ul>
        </nav>
    </div>
</header>

<div id="home">
    <div class="section-bg" style="background-image:url(./img/elysium.jpg)" data-stellar-background-ratio="0.2"></div>
    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="home-content">
                        <?php
                        // Set session variables
                        $_SESSION["ELYSIUM"] = "ELYSIUM";
                        ?>
                        <h1 align="left">ELYSIUM</h1>
                        <h4 align="left" class="lead">2018 ‧ Drama / Science fiction</h4>
                        <h4 align="left"> 1h 49m</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h3 class="title" align="left"><span style="color: #dd0a37;">&nbsp;&nbsp;ELYSIUM</span></h3>
            </div>
            <div class="col-sm-4">
                <div class="contact">
                    <iframe width="358" height="310" src="https://www.youtube.com/embed/QILNSgou5BY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="contact">
                    <h3>English (IMDB rating: <span class="red-star">★★★★</span>)</h3><div class="letterCircle">R</div>
                    <br><p>In the year 2154, the very wealthy live on a man-made space station while the rest of the population resides on a ruined Earth. A man takes on a mission that could bring equality to the polarized worlds.
                    <li><b>Director:</b> Neill Blomkamp</li>
                    <li><b>Writer:</b> Neill Blomkamp</li>
                    <li><b>Stars:</b> Matt Damon, Jodie Foster</li>
                        <br><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>See full cast & crew »</b></a></p></br>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="contact">
                    <h3>Cast and Crew</h3>
                    <img src="./img/cast.png" alt="cast and crew" width="350" height="270">
                </div>
                <div class="cta-content text-center">
                    <br><a class="main-btn" href="Booking.php">Book Ticket</a>

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
                    <a class="logo" href="index.html">
                        <img class="logo-img" src="./img/logo1.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
            <div class="col-md-4 col-md-push-4">
                <div class="contact-social">
                    <a href="feedback.html">Feedback&nbsp;&nbsp;</a>
                    <a href="contactus.php">Contact Us&nbsp;&nbsp;</a>
                </div>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <span class="copyright"></span>
            </div>
Copyright &copy; 2018.</script> All rights reserved </span><br>
                        </div>
                        </div>
                        </div>
                        </footer>
                        <script src="js/jquery.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>