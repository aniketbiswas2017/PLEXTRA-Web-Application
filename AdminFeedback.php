<?php
session_start();
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
                <a class="logo" href="index.html">
                    <img class="logo-img" src="./img/plextra4.png" alt="logo">
                    <img class="logo-alt-img" src="./img/plextra3.png" alt="logo">
                </a>
            </div>
            <button class="navbar-toggle">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </div>
</header>

<h2>Feedbacks from Users</h2>

    <?php

        $servername = "localhost";
        $username = "root";
        $password = "root";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=kunal; port=3306", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT email, seat, payment, rating, booking, feedback FROM kunal.Feedback");
            $stmt->execute();

            while($result = $stmt->fetch())
            {
                    echo " <div>
                    <div ><b>Email : </b> $result[0]</div>
                       </div>
                    <div >
        <div><b>Could you book the seat of your choice? : </b> $result[1]</div>
    </div>
    <div>
        <div><b>How did you find the Payment Method? : </b>$result[2]</div>
    </div>
    <div >
        <div> <b> How did you find booking of tickets on the website? : </b> $result[3] </div>
    </div>
   <div >
        <div> <b> How would you rate Plextra? : </b> $result[4] </div>
    </div>
    <div>
        <div> <b>Is there anything else you would like to tell us?: </b> $result[5]</div>
    </div>
    <br>
    _____________________________________________________________________________________
                        <br><br>";



            }

        }
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
        }
        $conn = null;





    ?>


</form>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>