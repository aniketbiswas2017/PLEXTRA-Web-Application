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
<br/><br/><br/><br/><section>
<form action="SupportTicketValidation.php" method="post" class="form-horizontal">
    <div class="form-group">

        <label class="col-lg-3 control-label">Contact Number</label>
        <div class="col-lg-8">
                        <span class="error" style="color: #FF0000;"><?php
                            if (!empty($_SESSION['error'])) {
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            } ?></span>
            <span class="error" style="color: #FF0000;"><?php
                if (!empty($_SESSION['errorContactNumber'])) {
                    echo $_SESSION['errorContactNumber'];
                    unset($_SESSION['errorContactNumber']);
                    unset($_SESSION['errorContactNumber']);
                }
                ?></span>
            <input class="form-control" name="contactNumber" type="text"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Subject</label>
        <div class="col-lg-8">

            <input class="form-control" name="subject" type="text" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Requester</label>
        <div class="col-lg-8">

            <input class="form-control" placeholder="Email" name="email" type="text"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Query</label>
        <div class="col-md-8">
                        <span class="error" style="color: #FF0000;"><?php
                            if (!empty($_SESSION['errorEmail'])) {
                                echo $_SESSION['errorEmail'];
                                unset($_SESSION['errorEmail']);
                            }
                            ?></span>
            <input class="form-control" name="query" type="text"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Booking ID</label>
        <div class="col-md-8">

            <input class="form-control" name="bookingId" type="text"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Description</label>
        <div class="col-md-8">
            <input class="form-control" name="description" type="text"/>
        </div>
    </div><br/>
    <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-8">
            <input type="submit" class="btn btn-danger" value="Save Changes"/>
            <span></span>
            <input type="reset"  class="btn btn-default" value="Cancel"/>
        </div>
    </div>
</form></section>
</div></body>
</html>