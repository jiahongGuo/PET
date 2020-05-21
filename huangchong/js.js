$(document).ready(function() {
    
    cat_div();
    pet_info();
    
function cat_div(){
      $.ajax({
        url:"action.php",
        method : "POST",
        data : {category:1},
        success : function(result){
          $("#cat_div").html(result); 
     }
    })   
  } 
function pet_info(){
     $.ajax({
       url:"action.php",
       method : "POST",
       data : {pets:1},
       success : function(result2){
          $("#pet_info").html(result2);     
     }
    })  
  } 
     $("body").on("click",".category",function(event){
    	event.preventDefault();
		var cid = $(this).attr('cid');
        $.ajax({url:"action.php", method : "POST", data : {categories:1,cat_id:cid}, success : function(result3){
          $("#pet_info").html(result3);
        
     }
    })
})
})