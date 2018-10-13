<?php
session_start();
$showdate="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plextra - Booking</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <script src="/js/wow.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<header id="header">
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
                <li><a href="#">Sports</a></li>
                <li><a href="Login.php"><?php if(isset($_SESSION['user_session'])){ echo "Logout"; } else { echo "Login"; } ?></a></li>
            </ul>
        </nav>
    </div>
</header>
<br><br>
<form class="container align-content-center align-self-center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
        <label>Movie : </label>
        <?php
        // Echo session variables that were set on previous page
        echo $_SESSION["MovieName"] ;
        
        ?>
    </div>
    <div class="form-group">
        <label>Pick date</label><br>
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+14D" , dateFormat: 'yy-mm-dd'});
            } );
        </script>
        <input type="text" name="showdate" class="form-control" id="datepicker" value="<?php echo $showdate ?>">
    </div>
    <br>
    <button class='btn btn-danger btn-group-toggle'> View Ticket Availability</button>
    <br>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $servername = "db.cs.dal.ca";
        $username = "sampath";
        $password = "B00769290";
        $theatre = "";
        $showtime = "";
        $showdate = $_POST["showdate"];
        try {
            $conn = new PDO("mysql:host=$servername;dbname=sampath; port=3306", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT theatre, showtiming, showdate FROM sampath.Movies WHERE moviename='".$_SESSION["ELYSIUM"]."' AND showdate='$showdate';");
            $stmt->execute();
            while($result = $stmt->fetch())
            {
                echo "<div style='float: left; width: 300px;'><b>Theatre : </b>    $result[0]  </div>
              <div style='float: left; width: 200px;'><b> Showtiming : </b>   $result[1]</div>
              <div style='float: left; width: 200px;'><b> Showdate : </b>  $result[2]</div>
              <a class='btn btn-danger btn-group-toggle' href='SeatSelect.php'> Select Seat</a>
                        <br><br>";
                $_SESSION["Theatre"] =  $result[0] ;
                $_SESSION["Showdate"] = $result[2];
                $_SESSION["Showtiming"] = $result[1] ;
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
    ?>
</form>
</body>
</html>