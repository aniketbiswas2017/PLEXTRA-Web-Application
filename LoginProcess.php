<?php
// including DB file
include_once 'DbConfiguration.php';
session_start();

// receive and format input
$userName = trim($_REQUEST['userName']);
$userName = htmlentities($userName);
$userPassword = trim($_REQUEST['userPassword']);

// empty check validation
if(empty($userName) || empty($userPassword)) {
    $_SESSION['error'] = "Fields cannot be empty.";
    header("Location: Login.php");
    exit();
} else{

    try {

// database query execution
        $stmt = $conn->prepare("SELECT firstname, email, userpassword, usertype FROM RegisterUser WHERE email=:email");
        $stmt->execute(array(':email' => $userName));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($stmt->rowCount() > 0)
        {
            if(($row['email'] == $userName) && (password_verify($userPassword, $row['userpassword'])) && $row['usertype'] == "user") {
                $_SESSION['user_session'] = $row['firstname'];
                header("Location: index.php");
            } elseif (($row['email'] == $userName) && (password_verify($userPassword, $row['userpassword'])) && $row['usertype'] == "admin"){
                $_SESSION['user_session'] = $row['firstname'];
                header("Location: admin.html");
            }
            else{
                $_SESSION['error'] = "Please enter the correct credentials";
                header("Location: Login.php");
            }

        } else {
            $_SESSION['error'] = "Credentials not valid";
            header("Location: Login.php");
        }

        $conn = null;
    }
    // catch block
    catch(PDOException $e)
    {
        echo "failed: " . $e->getMessage();
        $conn = null;
    }
}