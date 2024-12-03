    
	function validate() {
		var valid = true;	
		 
		 
		 
		if(!$("#password").val()) { 
			 $("#password").css('background-color','#fce7d2');
			valid = false;
		}else{
			 $("#password").css('background-color','#FFF');
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
		  
		return valid;
	}

  

 function send() {
		 
			  
		var valid;	
		valid = validate();
		 
		if(valid) { 
		 var str = $( "#form" ).serialize(); 
		jQuery.ajax({
		url: "check-login.php",
		data:str, 
		type: "POST",	 
		success:function(data){
		 
		 $( '#status' ).html(data);
		//  var $toastContent = data;
		//  Materialize.toast( $toastContent , 2000,'',function(){ document.getElementById("form").reset(); }); 
			},
		error:function (){}
		});
		 
		}
	}
 
    $(document).ready(function() {
		 
	  
  
	 }); // ready 
	 
	 function Redirect(){
		window.location="manage.php";
	}
	function remove(){
		window.location="logout.php";
	}