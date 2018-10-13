<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sports - Find all your favorite sports near you</title>
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
                <li><a href="SportsListing.php">Sports</a></li>
                <li><a href="blog.html">Login &nbsp; <span style="color: #dd0a37;">Sign Up</span></a></li>
            </ul>
        </nav>
    </div>
</header>

<div id="home">
    <div class="section-bg" style="background-image:url(./img/Fifa.jpg)" data-stellar-background-ratio="0.2"></div>
    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="home-content"> <h1> <?php
                            // Set session variables
                            $led = $_GET['led'];
                            $_SESSION["sports"] = $led;
                            echo $led;
                            ?></h1>
                        <h4  class="lead"><?php
                            // Set session variables
                            $place = $_GET['place'];
                            echo $place;
                            ?></h4>
                        <h4  class="lead"><?php
                            // Set session variables
                            $date = $_GET['date'];
                            echo $date;
                            ?></h4>
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
                <h3 class="title" align="left"><span style="color: #dd0a37;">&nbsp;&nbsp;<?php
                        // Set session variable

                        echo $led;
                        ?></span></h3>
                <h4  class="lead"><?php
                    // Set session variables
                    $date = $_GET['date'];
                    echo $date;
                    ?></h4>
                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
            </div>


        </div>
        <div class="cta-content text-center">
            <br><a href="TicketBookingSports.php" class="main-btn" >Book Ticket</a>

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
	<script src="js/main.js"></script>
</body>
</html>