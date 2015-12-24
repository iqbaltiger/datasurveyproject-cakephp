 var baseurl = 'http://localhost/rikshaproject';
 $(document).ready(function () { 
 	
 	$('#UserIndexForm').submit(function()
		{ var formData = $(this).serialize(); var formUrl = $(this).attr('action'); $.ajax(
		{ 
		type: 'POST', 
		url: formUrl,
		 data: formData, 
		 success: function(data,textStatus,xhr)
		 { 
		 	$("#regi_form_error").html(data);
		 if(data=='index'){
			window.location = baseurl+'/pages/index';
		 }else if(data == 'view_full_paint'){
			window.location = baseurl+'/pages/index';
			}
		}
		});
		 return false; 
	}); 



 	$('#userlogin').submit(function()
		{ 
			var formData = $(this).serialize();
		 	var formUrl = $(this).attr('action');
		 	$.ajax({ 
				type: 'POST', 
				url: formUrl,
				 data: formData, 
				 success: function(data,textStatus,xhr)
				 {
				 	//$("#login_form_error").html(data);
				 
				 	if(data=='index'){
					window.location = baseurl+'/pages/index';
					}else if(data=='view_full_paint'){
						window.location = baseurl+'/pages/cart_checkout';
					}
					else if(data=='content_details' || data=='get_all_paint_by_artists' || data=='get_all_collections'){
						window.location = baseurl+'/pages/index';
					}
					
					else{
						//window.location = baseurl+'/pages/index';
						alert("Try with valid username and password");
					}
				}
		});
		
		 return false; 
	}); 




 	$('#productToBag').submit(function()
		{ 
			var formData = $(this).serialize();
		 	var formUrl = $(this).attr('action');	 	
		 	$.ajax({ 
				type: 'POST', 
				url: formUrl,
				 data: formData, 
				 success: function(data,textStatus,xhr)
				 {
					$("#no_of_item").html(data);					
					
			$.post(
		   		baseurl+'/pages/updated_cart/',function(data){
		  		$( "#headercart").html(data);
		  			display_cart();
		   		});															

				}
		});
				
		 return false; 
	}); 
	
	jQuery( ".top-link-cart" ).click(function() {
	        var attr = jQuery('#headercart').attr('class');
	        if(attr=='headercart active'){
	            jQuery('#headercart').attr('class','headercart');
	        }else{
	            jQuery('#headercart').attr('class','headercart active');
	        }
	});
	
	jQuery( ".top-link-cart-add" ).click(function() {
	        
	});	
	
});


function cart_close(){
	jQuery('#headercart').attr('class','headercart');
}
    
function deleteCartProduct(id) {
   $.post(
   		baseurl+'/pages/delete_product_from_cart/'+id,function(data){
   		//alert(data);
   		$( "#headercart").html( data );
   		
$.post(
   		baseurl+'/pages/updated_cart_itemo_no/',function(data){
  		$( "#no_of_item").html( data );
   		});   		
   		
   	});
}

	function changeProductQty(id,val){
		$.post( 
		baseurl+"/pages/changeProductQty", { value: val, id:id })
		.done(function( data ) {
		$('.block-cart').html(data);
		});
	}
	
function display_cart(){	var attr = jQuery('#headercart').attr('class');	jQuery('#headercart').attr('class','headercart active');}