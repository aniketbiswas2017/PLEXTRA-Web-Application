<?php
session_start();
?>
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
                <li><a href="Login.php"><?php if(isset($_SESSION['user_session'])){ echo "Logout"; } else { echo "Login"; } ?></a></li>
                <li><a href="#"> <span id="city"></a></li>
            </ul>
        </nav>
    </div>
</header>
<?php
$movieName = $_GET['movie'];
$searchParam = $_GET['movie'];
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
                        <img width="320" height="365" src="<?php echo "".$movieInfo->Poster; ?>"/>
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

                        <br><a class="main-btn" href="Booking.php">Book Ticket</a>


                </div>
            </div>
            <br/><br/>
        </div>
    </div>

<?php $_SESSION["MovieName"] = $movieInfo->Title; }

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


