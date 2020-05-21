<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Pet shop </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="js.js"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Me</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
           <li><a href="index.php">Home</a></li> 
          <li><a href="conn.php">Register</a></li> 
          <li><a href="check.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-left">
  <h3>Login Form</h3>
 <div class="container">
   
       <form class="form-horizontal" action="login1.php" method="post">
           <div class="form-group">
            <label class="control-label col-md-2" for="Email">Email</label>
             <div class="col-sm-8">
               <input type="text" class="form-control" placeholder="Email" name="email" id="email" required>
              </div>
           </div>     
           
          <div class="form-group">
            <label class="control-label col-md-2" for="Email">Password</label>
             <div class="col-sm-8">
               <input type="password" class="form-control" placeholder="password" name="pswd" id="pswd" required>
              </div>
           </div> 
           
           <br>
           <button type="submit" class="btn btn-light btn1">Submit</button>
       </form>
    </div>
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
</footer>

</body>
</html>

   
