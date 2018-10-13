<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/admin.css" />
  <title> Admin Sports Page</title>

</head>
<body background="img/final.jpg" onload="startTime()">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; PLEXTRA </span>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="admin.html">HOME</a>
  <a href="adminmovies.html">MOVIES</a>
  <a href="adminevents.html">EVENTS</a>
  <a href="adminsports.html">SPORTS</a>
  <a href="admintheatres.html">THEATRES</a>
  <a href="admindata.html">USER DATA</a>
  <a href="adminfeed.html">USER FEEDBACK</a>
</div>
<h2 align = "center">Add Theatre Details</h2>
<br>
<div class="container">
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"> Name:</label>
      <div class="col-sm-9">
        <input type="name" class="form-control" id="name" placeholder="Enter theatre name" name="name">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="name">Location:</label>
      <div class="col-sm-9">
        <input type="name" class="form-control" id="name" placeholder="Enter theatre location" name="location">
      </div>
    </div>

<br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
	</div>
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
