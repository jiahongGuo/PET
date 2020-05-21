<?php
session_start();
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
                          <button style='float:right;'  class='btn btn-warning btn-xs add_product' pid='pet_id' id='$pet_id'>Add To Cart</button>
                        </div>
                    </div>    
            </div>
       
      ";
  }   
    
}
}

if(isset($_POST["categories"])){
    if(isset($_POST["categories"])){
        $cid = $_POST["cat_id"];
    // category ID for all option
       if($cid ==6 || isset($_POST["pets"])){        //select all products
       $sql="SELECT * FROM pets ORDER BY RAND() LIMIT 0,12";  
       }else{
     //select products based on specific category id
       $sql="SELECT * FROM pets WHERE pet_catn ='$cid'";
      }
      
    
    $results= mysqli_query($connection,$sql);
      while($row = mysqli_fetch_array($results)){
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
                          <button style='float:right;'  class='btn btn-warning btn-xs add_product' pid='pet_id' id='$pet_id'>Add To Cart</button>
                        </div>
                    </div>    
            </div>
       
      ";
        }
}
}

?>