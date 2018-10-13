<?php

$name =$_POST['name'];
$name = stripslashes($name);
$name = trim($name);
$name = htmlspecialchars($name);

$message=$_POST['message'];
$message= stripslashes($message);
$message= trim($message);
$message= htmlspecialchars($message);



if(!empty($name)|| !empty($email)||!empty($message))
{
$servername = "db.cs.dal.ca";
$username = "lekhala";
$password = "B00775670";
$dbname = "lekhala";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed. " . $conn->connect_error);
}

else {
  $INSERT = "INSERT into a5_users(Name,Message) values(?,?)";
  //prepare
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param('ss',$name,$message);
  $stmt->execute();

echo "<script>  if(confirm('Successfully Commented!')) {window.location.assign('reviews.php');} else{window.location.assign('reviews.php'); }</script>";

$stmt->close();
$conn->close();
}

}




  ?>
  


