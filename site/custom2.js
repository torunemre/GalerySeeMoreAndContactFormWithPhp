 
 
   $(document).ready(function() {
	   
	    $(document).on("click",".show_more",function() {
			
			 var id =  $(this).attr("id");
			  
			   $(".show_more").hide();
			   $(".loading").show(); 
			   
			   $.ajax({
				  
                    url: "ajax.php",
                    data: {id:id},					
				    type: "post",
					success:function(e) {
						
						$("#menu_"+id).remove();
						$(".genel").append(e);
					}
				   
			   });
			
		});
	   
	   
   });