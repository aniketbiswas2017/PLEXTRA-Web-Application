<?php

$name =$_POST['name'];

$des =$_POST['des'];

$date =$_POST['date'];

$genre =$_POST['genre'];

$time=$_POST['time'];

$theater=$_POST['theater'];





if(!empty($name)||!empty($desc)|| !empty($date)||!empty($genre)||!empty($time)||!empty($theater))
{
$servername = "db.cs.dal.ca";
$username = "kunal";
$password = "B00780464";
$dbname = "kunal";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed. " . $conn->connect_error);
}

else {
  $INSERT = "INSERT into a7_users(name,des,date,genre,time,theater) values(?,?,?,?,?,?)";
  //prepare
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param('ssssss',$name,$des,$date,$genre,$time,$theater);
  $stmt->execute();
echo 'New record created successfully';

$stmt->close();
$conn->close();
}

}
else{
echo 'Please enter all fields';
#echo "<script> window.location.assign('signup.php'); </script>";
die();
}

  ?>
