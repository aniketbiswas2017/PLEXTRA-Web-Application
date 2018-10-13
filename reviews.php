<!DOCTYPE html>
<html lang ="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
  
    <title> Contact us</title>
   
    <link href="css/bootstrap_review.css" rel="stylesheet" />
    
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <link href="css/font-awesome-animation.css" rel="stylesheet" />
     
    <link href="css/prettyPhoto.css" rel="stylesheet" />
      
    <link href="css/style_review.css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
    
</head>
<body>

         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PLEXTRA</a>
				
            </div>
			
            <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="movies.php">MOVIES</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="login.php">LOGIN</a></li>
					<li id="Reviews"><a href="reviews.php">REVIEWS</a></li>
					<li id="contactus"><a href="contactus.php">CONTACT US</a></li>	
					<li id="profile"><a href="profile.php">UPDATE PROFILE</a></li>					
					
                </ul>
            </div>
           
        </div>
    </div>

    <div class="container"  >
        <div class="row top-pad">
            <div  class="col-md-12" >
                <h1 >Reviews</h1>          
                         
            </div>
          
        </div>
    </div>
     <section  id="contact-sec">
        <div class="container">
             
            <div class="row g-pad-bottom">
                <div class="col-md-6 ">
                    <h2>Comments</h2>
                 
               
                    <form action="reviewconnect.php" method="post">
					
					   <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <textarea name="name" id="name" required="required"  class="form-control" rows="1" placeholder="Name"></textarea>
                                </div>
                                
                            </div>
                        </div>
                 
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required"  class="form-control" rows="4" placeholder="Comment here"></textarea>
                                </div>
                                
                            </div>
                        </div>
						<br>
                     
						<br>
                      
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
				<div class="col-md-6">
		<br><br>





		
		
    </section>
	
<?php


$servername = "localhost";
$username = "root";
$password = "lekhala";
$dbname = "sys";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed. " . $conn->connect_error);
}

 #$SELECT = "SELECT * FROM a5_users";
  //prepare
#  $stmt = $conn->prepare($SELECT);
    $sql = "SELECT * FROM a5_users;";

    $result = mysqli_query($conn, $sql);


if ($result=mysqli_query($conn,$sql))
  {
	  echo "<font size='6' type='bold' >";
echo "<table>";


     echo' <html> <br><br><br> &nbsp &nbsp	 Comments<br></html> ';
	 
	 echo "</table>";
echo "</font>";

  while ($row=mysqli_fetch_row($result))
    {
   # printf ("%s (%s)\n",$row[0],$row[1]);
   
   
echo "<font size='4' >";
echo "<table>";
   
  echo' <html> <br><br></html>';
echo '<html> &nbsp &nbsp&nbsp &nbsp  <span> Name: </span> </html>';
echo $row[0]; 
echo' <html> <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span>Message :</span> </html>';
echo $row[1]; 
echo' <html> <br><br></html>';
echo "</table>";
echo "</font>";

	
    }
 
  mysqli_free_result($result);
}

mysqli_close($conn);



?>



   



   

  
    <div id="footer">
        2018 www.plextra.com | All Right Reserved  
         
    </div>
    
    <script src="plugins/jquery-1.10.2.js"></script>
   
    <script src="plugins/bootstrap.min.js"></script>  
     
    <script src="plugins/jquery.isotope.min.js"></script>
    
    <script src="plugins/jquery.prettyPhoto.js"></script>    
    
    <script src="js/custom.js"></script>
</body>
</html>
