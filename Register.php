<?php
session_start();
if(!$_SESSION['check']) {
    $_SESSION['firstName'] = "";
    $_SESSION['lastName'] = "";
    $_SESSION['email'] = "";

} ?>
<html lang="en">
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLEXTRA - Your personal event manager</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/form.css" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />


</head>
<body onload="initialize()">
<header id="header" class="navbar">
    <div class="container" >
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
                <li><a href="Login.php">Login</a></li>
                <li><a href="#"> <span id="city"></a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container" style="background-image:url(./img/dunkirk.jpg)">
    <div class="row main">
        <div class="main-login main-center">
            <h2 style="color:white;">Sign up for Plextra</h2>
            <span class="error"><?php
                if (!empty($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                } ?></span>


            <form action="RegisterProcess.php" method="post">

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Your First Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="firstName" value="<?php echo $_SESSION['firstName']; ?>" id="name"  placeholder="Enter your Name" required
                            />
                            <span class="error"><?php
                                if (!empty($_SESSION['errorFirstName'])) {
                                    echo $_SESSION['errorFirstName'];
                                    unset($_SESSION['errorFirstName']);
                                    unset($_SESSION['firstName']);

                                }
                                ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Your Last Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="lastName" value="<?php echo $_SESSION['lastName']; ?>" id="name"  placeholder="Enter your Name" required
                            />
                            <span class="error"><?php
                                if (!empty($_SESSION['errorLastName'])) {
                                    echo $_SESSION['errorLastName'];
                                    unset($_SESSION['errorLastName']);
                                    unset($_SESSION['lastName']);

                                }
                                ?></span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>" id="email"  placeholder="Enter your Email" required
                            />
                            <span class="error"><?php
                                if (!empty($_SESSION['errorEmail'])) {
                                    echo $_SESSION['errorEmail'];
                                    unset($_SESSION['errorEmail']);
                                    unset($_SESSION['email']);

                                }
                                ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required
                            />
                            <span class="error"><?php
                                if (!empty($_SESSION['errorPassword'])) {
                                    echo $_SESSION['errorPassword'];
                                    unset($_SESSION['errorPassword']);

                                    // unset($_SESSION['errorPinCode']);
                                }
                                ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="confirmPassword" id="confirm"  placeholder="Confirm your Password" required
                            />
                            <span class="error"><?php
                                if (!empty($_SESSION['errorConfirmPassword'])) {
                                    echo $_SESSION['errorConfirmPassword'];
                                    unset($_SESSION['errorConfirmPassword']);

                                    //unset($_SESSION['errorPinCode']);
                                }
                                ?></span>
                        </div>
                    </div>
                </div>
<br>
                <div class="form-group ">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="reg_user">Register</button>
                </div>


            </form>
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
						<a href="feedback.php">Feedback&nbsp;&nbsp;</a>
						<a href="contactus.php">Contact Us&nbsp;&nbsp;</a>
					</div>
            </div>
            <div class="col-md-4 col-md-pull-8">
					<span class="copyright">
                        Copyright &copy; 2018.</script> All rights reserved </span><br>
                    </div>
                    </div>
                    </div>
                    </footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>