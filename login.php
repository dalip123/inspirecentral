<!DOCTYPE html>
<html lang="en">
<head>
  <title>InspirationCentral.com</title>
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
    /*for division class*/
	.jumbotron{
    background-position: 0% 25%;
    background-size: cover;
    background-repeat: no-repeat;
    color: 15cbec;
    text-shadow: black 0.1em 0.1em 0.1em;
    }
	
	/*for carousal/
	.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      height: 60px;
	  width: 60px;
      margin: auto;
	  }
	
  </style>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>
<body style="background:url('img/green.jpg');background-attachment:fixed;">

 
 <div class="jumbotron"  style="background:url('img/sunsetbridge.jpg');margin-bottom:0px; margin-top:0px;position:center">
	  <h1 style="font-family:'Lobster';"> Developer Update </h1>
	  </div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="video.html">Video</a></li>
        <li><a href="quote.html">Quotes</a></li>
        <li><a href="music.html">Music</a></li>
		<li><a href="books.html">Books</a></li>
      </ul>
	  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">


  <div class="row content">
    <div class="col-sm-3 sidenav">
	  
	  <h3>Developer tools</h3><hr>
	  <hr>
	  <img src="http://www.symbols.com/gi.php?type=1&id=405" width="300" >
	</div>

    <div class="col-sm-9">
      <div class="jumbotron">
	   <p>
	    <h1>Authorization status</h1> 
		<?php
ini_set('display_errors','1');
$email= $_POST['email'];
$pass= $_POST['pass'];
if($email == "dalippublic@gmail.com" && $pass == "dalip")
 {
   echo "<h2>Authorisation Granted.<br>Mail for new content has been dispatched</h2>";
   echo "<script> location.replace(\"http://52.41.3.135/mail.php\");</script>";
 }
else
 {
   echo "<h2>Authorization Denied</h2><br><h3>Go back and enter details again</h3>";
 }


		?>
</div>
 
       </p> 		
	  </div>
	  
</div>

<footer class="container-fluid">
  <div class="col-sm-8">
  </div>
  <div class="col-sm-4">
  <form class="form-inline" role="form" method="post" action="submit.php">
    <div class="form-group">
	<hr>
      <label for="email">Developer Tools</label><br><hr>
  </form>
</div>
</footer>

</body>
</html>
