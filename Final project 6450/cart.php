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
		 <li><a href="cart.php">My Shopping Cart</a></li>
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

 <div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-default">
           <div class="panel-heading">Cart Checkout</div>
            <div class="panel-body">
                <div class="row">
                     <div class="col-md-2">Delete</div>
                     <div class="col-md-2"></div>
                     <div class="col-md-2"></div>
                     <div class="col-md-2">Price</div>
                     <div class="col-md-2">Quantity</div>
                     <div class="col-md-2">Total</div>
                </div> 
                <div id="cart_display"> <br><br>
                
    <?php
	include "db.php"
    $uid = $_SESSION["uid"];
    $sql = "SELECT * FROM petcart WHERE user_id ='13'";
               
    $results= mysqli_query($connection,$sql); 
    $count = mysqli_num_rows($results);
     $all_total=0;
    if($count > 0){
          while($row = mysqli_fetch_array($results)){
            $id= $row["id"];
            $pid= $row["prod_id"];
            $title= $row["prod_title"];
            $price= $row["price"];
            $qty= $row["qty"]; 
            $total_price= $row["total_price"]; 
            $image= $row["prod_image"];
            $total = 0;
           
           // if(isset($_POST['get_cart_product'])){
            /* echo "
              <div class='row'>
				<div class='col-md-3'><img src='Images/$image' class='img-thumbnail'/></div>
				<div class='col-md-3'>$title</div>
				<div class='col-md-3'>$$price.00</div>
                <div class='col-md-3' id='$id'> <span class='glyphicon glyphicon-remove-circle delete' ></span></div>
             </div>
             
             "; 
                
           */ //}else{
                 
                 //$total =  $price*$qty;
                 $all_total = $all_total + $total_price;
                echo"
                <div class='row'>
                     <div class='col-md-2'><a href='#' class='delete_pro'   prod_id=$id><span class='glyphicon glyphicon-remove' ></span></a></div>
                     <div class='col-md-2'><img src='Images/$image' class='img-thumbnail'/></div>
                     <div class='col-md-2'>$title</div>
                     <div class='col-md-2'><input type='text' class='form-control price' id='price_$pid' value='$$price.00'disabled></div>
                     <div class='col-md-2'><input type='text' class='form-control qty' id='qty_$pid' value='$qty'></div>
                     <div class='col-md-2'><input type='text' class='form-control total' id='total_$pid' value='$$total_price' disabled></div>
                </div>  ";
            }
            
         } echo "<div class='panel-footer text-right'><strong> Total: $$all_total</strong></div>";
    


    ?>            
                
                </div>
               
            </div>
             <div class="panel-footer"></div>
          </div>
      
      </div>
     
     
  </div>  
 </div>    
  
   
</body>

</html>
?>