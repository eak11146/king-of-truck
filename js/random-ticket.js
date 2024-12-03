 function randomString() {
		var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
		var string_length = 10;
		var randomstring = '';
		for (var i=0; i<string_length; i++) {
			var rnum = Math.floor(Math.random() * chars.length);
			randomstring += chars.substring(rnum,rnum+1);
		}
			var ele =  document.getElementById("randomfield");  
			ele.value = randomstring;
	}
	
	 function CreateTicket() {
	  var frm = $( "form" ).serialize();
	 
				$.ajax({
					url: "save_ticket.php",
				 	data: frm,//'hidemail='+$("#hidemail").val()+'&hideact='+$("#hideactive").val(),
					type: "POST",
					success:function(data){	 
						$("#ticket-info").html(data);
						// getTicket();
					},
					error:function (){}
				});
		 
		}
	 
 // var pgurl = window.location.href.substr(window.location.href.lastIndexOf("=")+1);
  //alert(pgurl);
	  function getTicket(agr) {
			 var agr;
			//  alert(agr);
			var dat  = 'datg='+ agr ;
				$.ajax({
					url: "get_ticket.php",
				 	data: dat,//'hidemail='+$("#hidemail").val()+'&hideact='+$("#hideactive").val(),
					type: "GET",
					success:function(data){	 
						$(".log").html(data);
					},
					error:function (){}
				});
		 
		}
		/*
		 $( document ).ajaxStart(function() {
		  $( ".log" ).text( "Triggered ajaxStart handler." );
		});
		$( document ).ajaxStop(function() {
		  $( ".log" ).hide();
		});*/
		function disbut (){
			
		}
 