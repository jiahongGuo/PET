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
	    
$("#k_search").click(function(event){
         event.preventDefault();
    	var s_keyword= $('#search').val();
    
        if(s_keyword !=""){ 
            $.ajax({url:"action.php", method : "POST", data : {search_keyword:1,search_key:s_keyword}, success : function(result6){
              $("#pet_info").html(result6);
             
            
          }
        })
        }
	})
  $("body").on("click",".add_pet",function(event){
    	event.preventDefault();
        var pro_id = $(this).attr('pid');
         $.ajax({url:"action.php", method : "POST", data : {add_pet:1,ProId:pro_id}, success : function(data){
         alert(data);
     }
    })
           
    })
    
 $("#cart_container").click(function(event){
        event.preventDefault();
         $.ajax({url:"action.php", method : "POST", data : {get_cart_product:1}, success : function(data){
         $("#cart_product").html(data);
     }
    })
            
  })	
	$("body").on("keyup",".qty",function(){ 
     alert(0);
    var pid =$(this).attr("pid");
    var qty = $("#qty_"+pid).val();
    var qty = $("#price_"+pid).val();
     var total = qty*price;
     alert(total);
 
})
})