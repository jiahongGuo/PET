<?php
session_start();
$_SESSION["uid"]="13";
include "db.php";
if(isset($_POST["category"])){
$cat_sql="SELECT * FROM categories ORDER BY cat_id";
$C_results= mysqli_query($connection,$cat_sql);
if(mysqli_num_rows($C_results) > 0){
      while($row = mysqli_fetch_array($C_results)){
      $cat_id = $row["cat_id"];
      $cat_title = $row["cat_title"];
      echo "<h4><a href='#' class='category' cid='$cat_id' >$cat_title</a></h4><br>";
     
  }   
  }
}



if(isset($_POST["pets"])){
    
$prod_sql="SELECT * FROM pets ORDER BY RAND() LIMIT 0,9";

$P_results= mysqli_query($connection,$prod_sql);
    
if(mysqli_num_rows($P_results) > 0){
    while($row = mysqli_fetch_array($P_results)){
       $pet_id = $row["pet_id"];
       $pet_cat = $row["pet_cat"];
       $pet_name = $row["pet_name"];
       $pet_age = $row["pet_age"];
       $pet_price = $row["pet_price"];
       $cat_img = $row["cat_img"];
      echo "
       
    
      <div class='col-md-4'>
                    <div class='panel panel-success'>
                      <div class='panel-heading description'>$pet_name $pet_age</div>
                        <div class='panel-body' style=' height: 250px; overflow: hidden;'><a href='#'  class='each_product' ><img src='$cat_img'  class='img-thumbnail'/></a></div>
                         <div class='panel-heading'>$$pet_price
                          <button style='float:right;'  class='btn btn-warning btn-xs add_pet' pid='$pet_id' id='$pet_id'>Add To Cart</button>
                        </div>
                    </div>    
            </div>
       
      ";
  }   
    
}
}


if(isset($_POST["categories"]) || isset($_POST["search_keyword"])){
    if(isset($_POST["categories"])){
        $cid = $_POST["cat_id"];
    // category ID for all option
       if($cid ==6 || isset($_POST["pets"])){        //select all products
       $sql="SELECT * FROM pets ORDER BY RAND() LIMIT 0,12";  
       }else{
     //select products based on specific category id
       $sql="SELECT * FROM pets WHERE pet_catn ='$cid'";
      }
      } else{
         if(isset($_POST["search_keyword"])){
          $search_wd = $_POST["search_key"];
          $sql="SELECT * FROM pets  WHERE Search LIKE '%$search_wd%'";
        }}
    
    
    $results= mysqli_query($connection,$sql);
    
  while($row = mysqli_fetch_array($results)){
   $pet_id = $row["pet_id"];
       $pet_cat = $row["pet_cat"];
       $pet_name = $row["pet_name"];
       $pet_age = $row["pet_age"];
       $pet_price = $row["pet_price"];
       $cat_img = $row["cat_img"];
		$pet_Search=$row["Search"];
         
 
         
             
      echo "

     
	   <div class='col-md-4' data-keywords='$pet_Search'>
                    <div class='panel panel-success'>
                      <div class='panel-heading description'>$pet_name $pet_age</div>
                        <div class='panel-body' style=' height: 250px; overflow: hidden;'><a href='#'  class='each_product' ><img src='$cat_img'  class='img-thumbnail'/></a></div>
                         <div class='panel-heading'>$$pet_price
                          <button style='float:right;'  class='btn btn-warning btn-xs add_pet' pid='$pet_id' id='$pet_id'>Add To Cart</button>
                        </div>
                    </div>    
            </div>
       
      ";
        }
}

if(isset($_POST["add_pet"])){  
    $p_id=$_POST["ProId"];
    $user_id=$_SESSION["uid"];
    $sql = "SELECT * FROM petcart WHERE pet_id ='$p_id' AND user_id='$user_id'";
    $results= mysqli_query($connection,$sql); 
    $count = mysqli_num_rows($results);
    if($count > 0){
        echo "Product added already ...";
    }else{
         $sql = "SELECT * FROM pets WHERE pet_id ='$p_id'";
         $results= mysqli_query($connection,$sql); 
         $row = mysqli_fetch_array($results);
         $id= $row["pet_id"];
         $name= $row["pet_name"];
         $price= $row["pet_price"];
         $image= $row["cat_img"];
         $qty = 1;
         $total_price = $price*$qty;
         $sql_insert = " INSERT INTO `petcart` (`id`, `qty`, `price`, `total_price`, `pet_id`, `pet_name`, `cat_img`, `user_id`) VALUES (NULL, '$qty', '$price', '$total_price', '$id', '$name', '$image', '$user_id')";
          if(mysqli_query($connection,$sql_insert)){
             echo "Product Added to cart.";
         }
    
    }
}
if(isset($_POST['get_cart_product']) || isset($_POST['checkout'])){  
    $user_id = $_SESSION["uid"];
    $sql = "SELECT * FROM petcart WHERE user_id ='$user_id'";
    $results= mysqli_query($connection,$sql); 
    $count = mysqli_num_rows($results);
    $all_total=0;
    if($count > 0){
          while($row = mysqli_fetch_array($results)){
       
		 $id= $row["id"];
         $name= $row["pet_name"];
      
         $price= $row["price"];
         $image= $row["cat_img"];
		 $totalpri=$row["total_price"];
		 $qty=$row["qty"];
         $total = 0;
           
            if(isset($_POST['get_cart_product'])){
            echo "
              <div class='row'>
				<div class='col-md-3'><img src='$image' class='img-thumbnail'/></div>
				<div class='col-md-3'>$name</div>
				<div class='col-md-3'>$price.00</div>
                <div class='col-md-3' id='$id'> <span class='glyphicon glyphicon-remove-circle delete' ></span></div>
             </div>
             
             "; 
                
           }else{
                 
                 $total =  $price;
                 $all_total = $all_total + $totalpri;
                echo"
                <div class='row'>
                     <div class='col-md-2'><a href='#'><span class='glyphicon glyphicon-remove-circle'></span></a></div>
                     <div class='col-md-2'><img src='$cat_img' class='img-thumbnail'/></div>
                     <div class='col-md-2'>$name</div>
                     <div class='col-md-2'><input type='text' class='form-control price' id='price_$pid' value='$$price.00'disabled></div>
                     <div class='col-md-2'><input type='text' class='form-control qty' id='qty_$pid' value='$qty'></div>
                     <div class='col-md-2'><input type='text' class='form-control total' id='total_$pid' value='$totalpri' disabled></div>
                </div>   ";
            }
            
         } echo "<div class='panel-footer'>Total: $$all_total</div>";
    }
}


?>