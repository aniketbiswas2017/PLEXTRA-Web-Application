<?php
session_start();
$_SESSION['check']=false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLEXTRA - Your personal event manager</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">

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
                <li><a href="#">Events</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="Register.php">Sign Up &nbsp;</a></li>
                <li><a href="Login.php"><?php if(isset($_SESSION['user_session'])){ echo "Logout"; } else { echo "Login"; } ?></a></li>
                <li><a href="#"> <span id="city"></a></li>
            </ul>
        </nav>
    </div>
</header>

<div id="homeContactUs">
    <div style="background-image:url(./img/contactus.jpg); height: 27em" data-stellar-background-ratio="0.5"></div>
    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="col-md-6 hoverEffect">
        <div class="topnav">
            <a class="active" href="SupportTicket.php">Raise a Support Ticket</a>
        </div></div>
    <div class="col-md-6 hoverEffect">
        <div class="topnav">
            <a href="Contact.php">Contact Us</a>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container">
        <div class="container" style="display: inline-block; text-align: center; background-color: #f3f3f3">
            <div class="col-md-6">
                <p><span class="glyphicon glyphicon-earphone"></span> &nbsp; &nbsp; &nbsp; &nbsp;Phone Number</p>
            </div>
            <div class="col-md-6" style="text-align: left">
                <a href="tel:902-412-9698">
                    902-412-9698
                </a>
            </div>
        </div>
        <div class="container" style="display: inline-block; text-align: center; background-color: #f3f3f3">
            <div class="col-md-6">
                <p> <span class="glyphicon glyphicon-envelope"></span>&nbsp; &nbsp; &nbsp; &nbsp; Email</p>
            </div>
            <div class="col-md-6" style="text-align: left">
                <a href="mailto:plextraticketing@gmail.com" target="_blank">plextra@gmail.com</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>