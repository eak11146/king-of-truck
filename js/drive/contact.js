    
	function validate() {
		var valid = true;	
		 
		if(!$("#type").val()){  
			$("#type").css('outline',' 2px solid #ffcc99');
			$("#type").focus();
			 valid = false;
			 
		}else{
			$("#type").css('outline','none');
		}
		 if(!$("#sel").val()){ 
			$("#sel").css('outline',' 2px solid #ffcc99');
			$("#sel").focus();
		 	valid = false;
		 }else{
			 $("#sel").css('outline','none');
		 }
		 
		if(!$("#title").val()) { 
			 $("#title").css('background-color','#fce7d2');
			valid = false;
		}else{
			$("#title").css('background-color','#FFF');
		}
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
		  
		return valid;
	}

  

	 function sendContact() {
		var valid;	
		valid = validate();
		 alert(valid);
		if(valid) { 
		 var str = $( "#form" ).serialize(); 
		jQuery.ajax({
		url: "save-contact.php",
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
		 
	 
		 // console.log(num1);
	 
  
	 }); // ready 