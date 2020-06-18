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
		  <li><a href="https://www.instagram.com/?hl=en">SHARE!</a></li>
		       <li><a href="#" id="cart_container" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart </a>
          
          	<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
								
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
          
          </li>
          <li><a href="conn.php">Register</a></li> 
          <li><a href="check.php">Login</a></li>
		 
          <?php if (isset($_GET["user"])) {
          echo '<li><a href="#">Welcome '.$_GET["user"].'</a></li>'; 
    
} ?>      
            <li style="width:300px;left:10px;top:10px;">
              <input type="text" class="form-control" id="search" name="search" placeholder="Serach"></li>
          <li style="left:2px;top:10px;"><a href="#" class="btn btn-outline-primary" id="k_search"><span class="glyphicon glyphicon-search"></span> Search 
        </a>  
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->


<!-- Second Container -->


<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Our lovely pets</h3><br>
  <div class="col">

    </div>
    <div class="col-md-3"> 
      <div id="cat_div"></div>
    </div>
    <div class="col-md-8"> 
        <div id="pet_info"></div>
     
    </div>
    
  </div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
</footer>

</body>
</html>