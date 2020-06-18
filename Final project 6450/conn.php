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
  <h3 class="margin">Sign Up</h3>
 <div class="container">
    
       <form class="form-horizontal" action="form_submit.php" method="post">
       <div class="form-group">
           <label class="control-label col-md-2" for="Fname">First name!</label>
           <div class="col-sm-8">
           <input type="text" class="form-control" id="Fname" placeholder="Enter first name" name="Fname" required>
            </div>
           </div>
              <div class="form-group">
           <label class="control-label col-md-2" for="Lname">Last name!</label>
          <div class="col-sm-8">
           <input type="text" class="form-control" id="Lname" placeholder="Enter last name" name="Lname" required>
           </div>
           </div>  
          <div class="form-group">
           <label class="control-label col-md-2" for="email">Email</label>
            <div class="col-sm-8">  
           <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
           </div>
           </div>  
            <div class="form-group">
           <label  class="control-label col-md-2" for="Password">Password</label>
            <div class="col-sm-8">    
           <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
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

   
