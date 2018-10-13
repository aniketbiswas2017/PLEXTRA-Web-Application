<?php
session_start();
include_once 'DbConfiguration.php';

$contactNumber = $_REQUEST['contactNumber'];
$subject = $_REQUEST['subject'];
$email = $_REQUEST['email'];
$query = $_REQUEST['query'];
$bookingId = $_REQUEST['bookingId'];
$description = $_REQUEST['description'];
$user_id = "1";

if(empty($contactNumber) || empty($subject) || empty($email) || empty($query) || empty($bookingId) || empty($description)){
    $_SESSION['error'] = "Fields cannot be empty.";
    header("Location: SupportTicket.php");
    exit();

} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

    $_SESSION['errorEmail'] = "Please enter a valid email.";
    header("Location: SupportTicket.php");
    exit();

} else if(preg_match("/^[a-zA-Z ]*$/",$contactNumber)){

        $_SESSION['errorContactNumber'] = "Please enter a valid phone number.";
        header("Location: SupportTicket.php");
        exit();

} else {

    try{

        $stmt = $conn->prepare("INSERT INTO SupportTickets (user_id, contactNumber, subject, email, query, bookingId, description) VALUES (:user_id, :contactNumber, :subject, :email, :query, :bookingId, :description)");

       // $stmt = $conn->prepare("INSERT INTO Register (firstname, lastname, email, userpassword, address, pincode) VALUES (:firstName, :lastName, :email, :userpassword, :address, :pinCode)");
        $stmt->bindParam(':user_id',$user_id);
        $stmt->bindParam(':contactNumber', $contactNumber);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':query', $query);
        $stmt->bindParam(':bookingId', $bookingId);
        $stmt->bindParam(':description', $description);
        $stmt->execute();


    }

// catch block
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

