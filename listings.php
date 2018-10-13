<?php
session_start();
include 'DbConfiguration.php';
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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<script src="js/list.js"></script>
<body onload="initialize()" background="img/register.jpg">
<header id="header" class="navbar" background-color="D5D5D5">
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
                <li><a href="login.php">Login</a></li>
                <li><a href="form.php">SIGN UP</a></li>
                <li><a href="#"> <span id="city"></a></li>
            </ul>
        </nav>
    </div>
</header>
<h1 align = "center"> Movies Near You </h1>
<div id="speakers" class="section">

        <div class="container">
            <div class="row">
        <?php
try {

// database query execution
$stmt = $conn->prepare("SELECT moviename FROM movies");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$i=0;
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    if($i==3){
        ?> </div></div><div class="container">
                    <div class="row"> <?php }
                        $searchParam = $row['moviename'];
                        $searchParam = str_replace(' ', '+', $searchParam);
                        $strUrl = "http://www.omdbapi.com/?apikey=b485c4d4&t=";
                        $strUrl .= $searchParam;
                        $json=file_get_contents($strUrl);
                        $movieInfo=json_decode($json);?>
                        <form action="MovieDisplay.php" method="get">
                <div class="col-md-4 col-sm-6">
                    <div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
                        <div class="speaker-img">
                            <img src="<?php echo "".$movieInfo->Poster; ?>" alt="">
                        </div>
                        <div class="speaker-body">
                            <div class="speaker-social">
                                <input type="hidden" name="movie" value="<?php echo $row['moviename']; ?>"/>
                                <button class="main-btn"><i class=""></i>View</button>
                            </div>
                            <div class="speaker-content">
                                <h2><?php echo $row['moviename']; ?></h2>
                                <span>Cineplex Cinemas Parklane</span>
                            </div>
                        </div>
                    </div>
                </div>
                        </form>
                <?php $i++; } ?>

                    </div>
        </div>
        <?php }
         catch(PDOException $e)
    {
        echo "failed: " . $e->getMessage();
        $conn = null;
    }

    ?>

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
					
				</div>
				<div class="col-md-4 col-md-pull-8">
					<span class="copyright">
Copyright &copy; 2018.</script> All rights reserved </span><br>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>