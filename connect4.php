<?php




$servername = "db.cs.dal.ca";
$username = "kunal";
$password = "B00780464";
$dbname = "kunal";



  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  echo "Connected";
  

  if ($conn->connect_error) {
      die("Connection failed. " . $conn->connect_error);
  }

  else {
$firstname =$_POST['firstname'];


$email =$_POST['email'];


 
 if($email!='')
 {

	 
	 $sql = "delete from kunal.registeruser where email = '$email'";

if ($conn->query($sql) === TRUE) {
    echo "Record Deleted successfully";
	echo "<script> window.location.assign('admindata.php'); </script>";
	

} else {
    echo "Error Deleting record: " . $conn->error;
	echo "<script> window.location.assign('admindata.php'); </script>";
}

$conn->close();

	 
  }
  else{
    echo "Please enter registered Email";
	echo "<script> window.location.assign('admindata.php'); </script>";

  }
}
   



?>
