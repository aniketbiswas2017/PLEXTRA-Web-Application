<!DOCTYPE html>
<html>
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
					<li><a href="index.html">Home</a></li>
					<li><a href="#home">Movies</a></li>
				    <li><a href="#">Events</a></li>
					<li><a href="#">Sports</a></li>
					<li><a href="blog.html">Login &nbsp; <span style="color: #dd0a37;">Sign Up</span></a></li>
				</ul>
			</nav>			
		</div>		
	</header>
	
	<div id="home">
		<div class="section-bg" style="background-image:url(./img/feedback.jpg)" data-stellar-background-ratio="0.5"></div>
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="home-content"><br><br><br><br><br><br><br>
							<h1>List of all major movies near you</h1>
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
				<h4 class="title"><span>&nbsp;&nbsp;List of all movies near you</span></h4>
				</div>
<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>ID</th><th>Movie Name</th><th>Genre</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr class='clickable-row' data-href='moviebook.html'>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "aniket";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT mov_id, mov_title, genre FROM movies"); 
    $stmt->execute();
	
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 
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
						<a href="#">About Us</a>
					</div>
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
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/main.js"></script>
</body>
</html>