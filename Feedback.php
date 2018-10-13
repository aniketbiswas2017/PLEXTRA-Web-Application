<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plextra - Feedback</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <script src="/js/wow.js"></script>
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

<br><br>


<?php
$email = "";
$emailErr = "";
$seat=$_POST['seat'];
$payment=$_POST['payment'];
$rating = $_POST['rating'];
$feedback = $_POST['feedback'];
$booking = $_POST['booking'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";

    } else {
        $email = test_input($_POST["email"]);

        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";

        }
    }

    if (($emailErr == ""))
    {
        $servername = "db.cs.dal.ca";
        $username = "sampath";
        $password = "B00769290";

        try
        {
            $conn = new PDO("mysql:host=$servername;dbname=sampath; port=3306", $username, $password); // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("INSERT INTO Feedback (email, seat, payment, rating, booking, feedback) VALUES (:email, :seat, :payment, :rating, :booking, :feedback)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':seat', $seat);
            $stmt->bindParam(':payment',$payment );
            $stmt->bindParam(':rating', $rating);
            $stmt->bindParam(':booking', $booking);
            $stmt->bindParam(':feedback', $feedback);
            $stmt->execute();

            echo "<script type='text/javascript'> 
            alert('Thank you for your feedback!');      
            </script>";

        } catch(PDOException $e)
        {
           echo $e;

        }



    }
    else
    {

    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>

<form class="container align-content-center align-self-center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
        <h3>Feedback form</h3>
        <hr>

        <label><b>Email*</b></label><br>
        <input class="input-class" type="text" name="email" value = "<?php echo $email ?>" ><br>
        <span class="error"><?php echo $emailErr;?></span>
        <br>

        <label><b>Could you book the seat of your choice?</b></label><br>
        <input  type="radio" name="seat" value="Yes"> Yes <br>
        <input type="radio" name="seat" value="No, the page showed errors"> No, the page showed errors <br>
        <br>


        <label><b>How did you find the Payment Method?</b></label><br>
        <input type="radio" name="payment" value="Yes"> Yes <br>
        <input type="radio" name="payment" value="Could do with more options"> Could do with more options <br>
        <br>

        <label><b>How did you find booking of tickets on the website?</b></label><br>
        <input type="radio" name="booking" value="Yes"> Simple <br>
        <input type="radio" name="booking" value="Could do with more options"> Complicated <br>
        <br>

        <label><b>How would you rate Plextra?</b></label><br>
        <input type="radio" name="rating" value="5"> ***** <br>
        <input type="radio" name="rating" value="4"> **** <br>
        <input type="radio" name="rating" value="3"> *** <br>
        <input type="radio" name="rating" value="2"> ** <br>
        <input type="radio" name="rating" value="1"> * <br>
        <br>

        <label><b>Is there anything else you would like to tell us?</b></label><br>
        <textarea placeholder="Message" rows="4" cols="50" name="feedback" value = "<?php echo $feedback ?>" ></textarea>
        <br>

        <button class="btn btn-danger btn-group-toggle" type="submit" name="submit" value="Submit">Submit</button>

    </div>
</form>
</body>