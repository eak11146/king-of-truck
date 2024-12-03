    
	function validate() {
		var valid = true; 
		 
		 
		if(!$("#frist_name").val()) { 
			 $("#frist_name").css('background-color','#fce7d2');
			valid = false;
		}else{
			 $("#frist_name").css('background-color','#FFF');
		}
		if(!$("#email").val()) { 
			//$("#email").focus();
			$("#email").css('background-color','#fce7d2');
			valid = false;
		}else{
			$("#email").css('background-color','#FFF');
		}
		 
		if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		 
			valid = false;
		} 
		
		if(!$("#tel").val()) { 
			 $("#tel").css('background-color','#fce7d2');
			valid = false;
		}else{
			$("#tel").css('background-color','#FFF');
		}
		  
		return valid;
	}

  

	 function senddrive() {
		var valid;	
		valid = validate();
		 // alert(valid);
		if(valid) { 
		 var str = $( "#form" ).serialize(); 
		jQuery.ajax({
		url: "save-drive.php",
		data:str, 
		type: "POST",	 
		success:function(data){
		 
		  var $toastContent = data;
		  Materialize.toast( $toastContent , 2000,'',function(){ document.getElementById("form").reset(); });
		 
			},
		error:function (){}
		});
		 
		}
	}

   
// 
    $(document).ready(function() {
		  var seat0 = $(".list-color").attr("data-seat"); 
		  var gseat0 = 'images/'+seat0;
		  $('#imgseat').attr('src',gseat0); 
		 
	 $('.modal').modal(); 
				$('.tooltipped').tooltip({delay: 50}); 
				$('.tooltipped').each(function(){
					$(this).click(function(){
						 
						 var ctext = $(this).attr("data-tooltip");
						 $("#tc").html( ctext ); 
						 var datalogo = $(this).parents(".list-color").attr("data-logo"); 
						 $("#logo-img").attr('src','images/'+datalogo);
						 var imgcar = $(this).attr("data-img");
						$('#imageid').attr('src','images/'+imgcar);
					 
						  var seat = $(this).parents(".list-color").attr("data-seat"); 
						// alert(seat);
						 if(seat!= null){
							 var gseat = 'images/'+seat;
							 $('#imgseat').attr('src',gseat); 
							 $('#imgseat').removeClass().addClass('fadeIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
								$(this).removeClass();
							});  
						 }
						/* if(seat == 1 ){   
							 
						 	$('#imgseat').attr('src','images/seats_cab-z.png'); 
							$('#imgseat').removeClass().addClass('fadeIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
								$(this).removeClass();
							});  
						 }else if(seat == 2){   
							 $('#imgseat').attr('src','images/seat-z-l.png');
							 $('#imgseat').removeClass().addClass('fadeIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
								$(this).removeClass();
							}); 
						 }*/
						 
					});
					
				});
				
				  
		 // console.log(num1);
	 
  
	 }); // ready 