<?php
session_start();
$_SESSION['check']=false;
// including DB file
include_once 'DbConfiguration.php';



//receive input characters

$firstName = htmlspecialchars($_REQUEST['firstName']);
$firstName = stripslashes($firstName);
    $lastName = htmlspecialchars($_REQUEST['lastName']);
    $lastName = stripslashes($lastName);
    $email = $_REQUEST['email'];
    $userpassword = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $userType = "user";


    // validation begins
if(empty($firstName) || empty($lastName) || empty($email) || empty($userpassword) || empty($confirmPassword)){
    $_SESSION['error'] = "Fields cannot be empty.";
    header("Location: Register.php");
    exit();
} else if(!($userpassword == $confirmPassword)){
    $_SESSION['firstName']=$firstName;
    $_SESSION['lastName']=$lastName;
    $_SESSION['email']=$email;
    $_SESSION['errorPassword'] = "Password doesn't match with confirm password.";
    $_SESSION['check']=true;
    header("Location: Register.php");
    exit();
} else if(strlen($userpassword) < 8){
    $_SESSION['firstName']=$firstName;
    $_SESSION['lastName']=$lastName;
    $_SESSION['email']=$email;
    $_SESSION['errorPassword'] = "Password should have a minimum of 8 characters.";
    $_SESSION['check']=true;
    header("Location: Register.php");
    exit();
} else if(!preg_match("/^[a-zA-Z ]*$/",$firstName)){
    $_SESSION['firstName']=$firstName;
    $_SESSION['lastName']=$lastName;
    $_SESSION['email']=$email;
    $_SESSION['check']=true;
    $_SESSION['errorFirstName'] = "Please enter valid characters.";
    header("Location: Register.php");
    exit();
} else if(!preg_match("/^[a-zA-Z ]*$/",$lastName)){
    $_SESSION['firstName']=$firstName;
    $_SESSION['lastName']=$lastName;
    $_SESSION['email']=$email;
    $_SESSION['check']=true;
    $_SESSION['errorLastName'] = "Please enter valid characters.";
    header("Location: Register.php");
    exit();
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['firstName']=$firstName;
    $_SESSION['lastName']=$lastName;
    $_SESSION['email']=$email;
    $_SESSION['check']=true;
    $_SESSION['errorEmail'] = "Please enter a valid email.";
    header("Location: Register.php");
    exit();
} else {

    try {
// password encryption
        $userpassword = password_hash($userpassword, PASSWORD_BCRYPT);

        //$sql = "CREATE TABLE Register (firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL, userpassword VARCHAR(20) NOT NULL, address VARCHAR(50), pincode VARCHAR(50))";
        $stmt = $conn->prepare("INSERT INTO kunal.registeruser (firstname, lastname, email, userpassword, usertype) VALUES (:firstName, :lastName, :email, :userpassword, :usertype)");
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':userpassword', $userpassword);
        $stmt->bindParam(':usertype',$userType);

        $stmt->execute();


ini_set('max_execution_time', 300);

require ("PHPMailer-master/src/PHPMailer.php");
require ("PHPMailer-master/src/SMTP.php");
require ("PHPMailer-master/src/Exception.php");

$msg = "Hi,
       Thanks for registering! Keep checking your email for offers on tickets. Enjoy the services of PLEXTRA.";


$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->IsHTML(true);
$mail->SMTPDebug = 0;

$mail->Username = "plextraticketing@gmail.com";
$mail->Password = "plextra@1234";
$mail->SetFrom("plextraticketing@gmail.com");
$mail->AddAddress($email);

$mail->Subject = "Registered with PLEXTRA";
$mail->Body= $msg;


?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLEXTRA - Your personal event manager</title>


</head>
<body>
<header id="header" class="transparent-navbar">
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
                <li><a href="#home">Home</a></li>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="Register.php">Sign Up &nbsp;</a></li>
                <li><a href="Login.php"><?php if(isset($_SESSION['user_session'])){ echo "Logout"; } else { echo "Login"; } ?></a></li>
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

        <br/><br/><br/><br/><br/><br/><?php

        echo "<center><div class='success'><p><strong>Success,</strong>Your are Registered successfully! An Email notification has been sent.</p></div></center>";
if (!$mail->Send()) {
    $error = "Mailer Error: " . $mail->ErrorInfo;
    echo '<p id="para">'.$error.'</p>';
}
else {
    echo '<center><div class=\'success\'><p id="para">Message sent!</p></div></center>';
}

    }
    // catch block
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}
?>
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
</body>
</html>
