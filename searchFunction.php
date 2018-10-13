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
                    <div class="home-content"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <h1>Find the latest events near you</h1>
                        <h4 class="lead">Book your tickets on the go, only with a couple of clicks.</h4>
                        <li><form action="searchFunction.php" method="post" class="form-horizontal">
                                <input id= "myInput" type="text" name="searchParam" data-wow-delay="0.8s" placeholder=" Search for movies, events and sports">
                                <input type="submit" class="btn btn-danger" value="Go"/>
                            </form></li><br><br>
                        <!-- <a href="moviebook.html" id = "myBtn" class="main-btn">Go</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$searchParam = $_REQUEST['searchParam'];
$searchParam = str_replace(' ', '+', $searchParam);
$strUrl = "http://www.omdbapi.com/?apikey=b485c4d4&t=";
$strUrl .= $searchParam;
$json=file_get_contents($strUrl);
$movieInfo=json_decode($json);

if($movieInfo->Response != "False"){
?>
<br/><br/>
<div class="container">
<h1 align="left"><?php echo "" . $movieInfo->Title; ?></h1>
                        <h4 align="left" class="lead"><?php echo "" . $movieInfo->Year ."‧" . $movieInfo->Genre; ?></h4>
                        <h4 align="left"><?php echo "" .  $movieInfo->Runtime; ?></h4>
</div>
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="contact">
                    <img width="358" height="310" src="<?php echo "".$movieInfo->Poster; ?>"/>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="contact">
                    <h3><?php echo "".$movieInfo->Language; ?> (IMDB rating: <?php echo "". $movieInfo->imdbRating; ?>)</h3><div class="letterCircle">R</div>
                    <br><p><?php echo "".$movieInfo->Plot; ?>
                    <li><b>Director:  </b><?php echo "".$movieInfo->Director; ?></li>
                    <li><b>Writer:  </b> <?php echo "".$movieInfo->Writer; ?>
                    <li><b>Stars:  </b><?php echo "". $movieInfo->Actors; ?><br/>
                </div>
            </div>
        </div>
        <br/><br/>
    </div>
</div>

<?php }

else {
    ?>
    <br/><br/>
<div class="container" style="text-align: center">
    <h2>Please enter a valid movie name!</h2>
</div>
<?php
} ?>
</body>
</html>


