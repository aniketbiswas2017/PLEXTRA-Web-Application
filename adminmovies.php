<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/admin.css" />
  <title> Admin Movies Page</title>

</head>
<body background="img/final.jpg" onload="startTime()">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; PLEXTRA </span>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="admin.html">HOME</a>
  <a href="adminmovies.html">MOVIES</a>
  <a href="adminevents.html">EVENTS</a>
  <a href="adminsports.html">SPORTS</a>
    <a href="admindata.php">MANAGE USER PROFILES</a>
  <a href="adminfeedback.php">USER FEEDBACK</a>
</div>
<h2 align = "center">Enter Movie Details</h2>
<br>
<div class="container">
<form action="connect1.php" method="post">
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Movie Name:</label>
      <div class="col-sm-9">
        <input type="name" class="form-control" id="name" placeholder="Enter movie name" name="name">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="description">Description:</label>
      <div class="col-sm-9">
        <input type="description" class="form-control" id="description" placeholder="Enter movie description" name="des">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="genre">Show Date:</label>
      <div class="col-sm-9">
        <input class="form-control" type="date" value="2018-07-30" id="example-date-input" name="date">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="genre">Movie genre:</label>
      <div class="col-sm-9">
        <select class="form-control" id="exampleSelect1" name="genre">
      <option>Action</option>
      <option>Adventure</option>
      <option>Comedy</option>
      <option>Crime</option>
      <option>Drama</option>
	  <option>History</option>
	  <option>Horror</option>
	  <option>Musical</option>
	  <option>Fiction</option>
	  <option>War</option>
	  <option>Western</option>
    </select>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="description">Event time:</label>
      <div class="col-sm-9">
    <input class="form-control" type="time" value="13:45:00" id="example-time-input" name ="time">
  </div>
    </div>

	<div class="form-group" align="justify">
	<label class="control-label col-sm-2" for="genre">Select Theatres:</label>
   <div class="form-group">
      <div class="col-sm-9">
        <select class="form-control" id="exampleSelect1" name= "theater">
      <option>Cineplex Cinemas Park Lane</option>
      <option>KDP Kitchen Design Plus</option>
      <option>Scotiabank Theatre Halifax</option>
      <option>Cineplex Cinemas Dartmouth</option>
    </select>
      </div>
    </div>
<br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
	</div>
  </form>
  </form>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "265px";
    document.getElementById("main").style.marginLeft = "265px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

</script>
     
</body>
</html> 
