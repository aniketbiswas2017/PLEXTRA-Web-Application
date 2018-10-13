<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sports - Find all your favorite Sports near you</title>
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
                <li><a href="MovieListing.php">Movies</a></li>
                <li><a href="EventsListing.php">Events</a></li>
                <li><a href="#home">Sports</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="Register.php">Sign Up</a></li>
            </ul>
        </nav>
    </div>
</header>

<div id="home">
    <div class="section-bg" style="background-image:url(./img/Fifa.jpg)" data-stellar-background-ratio="0.5"></div>
    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="home-content"><br><br><br><br><br><br><br>
                        <h1 align="right">Enjoy all sports events near you</h1>
                        <li><form>

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
                <h4 class="title"><span>&nbsp;&nbsp;Now</span> <span>Playing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>&nbsp;&nbsp;&nbsp;&nbsp; Coming</span> <span>Soon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>&nbsp;Featured</span> <span>Sports</span></h4>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
                    <div class="speaker-img">
                        <img src="./img/sports1.jpg" alt="">
                    </div>
                    <div class="speaker-body">
                        <div class="speaker-social">
                            <?php
                            // Set session variables
                            $led = "Sports Fest";
                            $place= "Halifax Commons";
                            $date = "31 August 2018";
                            echo "<a href=Sportsbook.php?led=" . urlencode($led) . "&place=" . urlencode($place). "&date=" . urlencode($date),">View</a>";
                            ?>

                        </div>
                        <div class="speaker-content">
                            <h2>Sports Fest</h2>
                            <span>Halifax Commons</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4 col-sm-6">
                <div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
                    <div class="speaker-img">
                        <img src="./img/Athletic.jpg" alt="">
                    </div>
                    <div class="speaker-body">
                        <div class="speaker-social">
                            <?php
                            // Set session variables
                            $led = "Athletic Event";
                            $place= "Halifax Commons";
                            $date = "28 August 2018";
                            echo "<a href=Sportsbook.php?led=" . urlencode($led) . "&place=" . urlencode($place). "&date=" . urlencode($date),">View</a>";
                            ?>
                        </div>
                        <div class="speaker-content">
                            <h2>Athletic Event</h2>
                            <span>Halifax Commons</span>
                        </div>
                    </div>
                </div>
                <form action="/movieconnect.php" method="get">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" formaction="/movieconnect.php">Sports NEAR YOU</button>
                </form>

            </div>
            <div class="col-md-4 col-sm-6">
                <div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
                    <div class="speaker-img">
                        <img src="./img/ufc.jpg" alt="">
                    </div>
                    <div class="speaker-body">
                        <div class="speaker-social">
                            <?php
                            // Set session variables
                            $led = "UFC Fight Night";
                            $place= "Exclusive";
                            $date = "28 August 2018";
                            echo "<a href=Sportsbook.php?led=" . urlencode($led) . "&place=" . urlencode($place). "&date=" . urlencode($date),">View</a>";
                            ?>
                        </div>
                        <div class="speaker-content">
                            <h2>UFC Fight Night</h2>
                            <span>Exclusive</span>
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
                    <a class="logo" href="index.html">
                        <img class="logo-img" src="./img/logo1.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-md-push-4">
                <div class="contact-social">
                    <a href="feedback.html">Feedback&nbsp;&nbsp;</a>
                    <a href="contactus.php">Contact Us&nbsp;&nbsp;</a>
                </div>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <span class="copyright"></span>
            </div>
        </div>
    </div>
</footer>
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
	<script src="js/jquery.countTo.js"></script>
	<script src="js/main.js"></script>
</body>
</html>