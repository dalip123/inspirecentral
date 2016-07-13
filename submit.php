
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Database Insertion</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Image</a></li>
        <li><a href="#">Music</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">


  <div class="row content">
    <div class="col-sm-2 sidenav">
      <h4>Latest</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Friends</a></li>
        <li><a href="#section3">Family</a></li>
        <li><a href="#section3">Photos</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
      <div class="jumbotron">
	   <?php
       ini_set('display_errors','1');
$hostname="localhost";
$username="root";
$password="";
$db="dalip1";
$email=$_POST['email'];
echo "$email<br>";

 
 $conn=mysqli_connect($hostname,$username,$password,$db);
 if($conn)
	 echo "connected <br>";
 else
	 echo "sorry not connected<br>";
 $query=mysqli_query($conn,"Insert into user_dalip1 values('".$email."')");

if($query)
	echo "data inserted <br>";
else
	echo "not inserted <br>";
      $mail=mysqli_query($conn,"Select  mail from user_dalip1");
  echo "<h3>User records</h3><br>";
     
  while($row=mysqli_fetch_assoc($mail))
 {
  printf ("%s",$row["mail"]);
 echo "<br>";
 }   

?>
	  </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <div class="col-sm-8">
  </div>
  <div class="col-sm-4">
  <form class="form-inline" role="form" method="post" action="submit.php">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</footer>

</body>
</html>
