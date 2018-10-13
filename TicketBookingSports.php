<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plextra - Sports Booking</title>
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
                <li><a href="#">Events</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Login &nbsp; <span style="color: #dd0a37;">Sign Up</span></a></li>
            </ul>
        </nav>
    </div>
</header>

<br><br>


<form class="container align-content-center align-self-center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <div class="form-group">
        <label>Sports : </label>
        <?php
        // Echo session variables that were set on previous page
        echo $_SESSION["sports"] ;
        ?>
    </div>

    <div class="form-group">
        <div class="form-group">
            <label>Quantity : </label>
            <select>
                <option value="one">1</option>
                <option value="two">2</option>
                <option value="three">3</option>
                <option value="four">4</option>
                <option value="five">5</option>
                <option value="six">6</option>
                <option value="seven">7</option>
                <option value="eight">8</option>
            </select>
        </div>
    </div>

    <?php
        $servername = "db.cs.dal.ca";
        $username = "sampath";
        $password = "B00769290";
        $venue = "";
        $showtime = "";
        $showdate = $_POST["showdate"];

        try {
            $conn = new PDO("mysql:host=$servername;dbname=sampath; port=3306", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT venue, timing, sportdate FROM Sports WHERE sportsname='".$_SESSION["sports"]."';");
            $stmt->execute();

            while($result = $stmt->fetch())
            {
                echo "<div style='float: left; width: 300px;'><b>Venue : </b>    $result[0]  </div>
              <div style='float: left; width: 200px;'><b> Time : </b>   $result[1]</div>
              <div style='float: left; width: 200px;'><b> Date : </b>  $result[2]</div>
              <a class='btn btn-danger btn-group-toggle' href='TicketConfirmation.php'> Book Ticket</a>
                        <br><br>";

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

    } ?>



</form>

</body>
</html>