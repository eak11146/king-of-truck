(function($){
  $(function(){

    $('.button-collapse').sideNav({
		 menuWidth: 270, 
		 
	}); 
	 
    $('.parallax').parallax();
	 
	 

  }); // end of document ready
})(jQuery); // end of jQuery name space

  $(document).ready(function() {
		$('select').material_select(); 
		 
		$(".dropdown-button").dropdown({
			hover:true,
		});
         
			$('li .inner').slideUp();
			$('.toggle').click(function(e) {
				//$('.toggle').click(function(e) {
				e.preventDefault(); 
				var $this = $(this);
			 
				/*if ($this.next().hasClass('show')) {
					$this.next().removeClass('show');
					$this.next().slideUp(350);
				} else {
					$this.parent().parent().find('li .inner').removeClass('show');
					$this.parent().parent().find('li .inner').slideUp(350);
					$this.next().toggleClass('show');
					$this.next().slideToggle(350);
				}*/
				
				if (!$this.next().hasClass('show')) {
					
					$this.parent().parent().find('li .inner').removeClass('show');
					$this.parent().parent().find('li .inner').slideUp(350);
					$this.next().toggleClass('show');
					// $this.next().slideToggle(350);
					$this.next().slideDown( "slow" );
					
				} else {
					$this.next().removeClass('show');
					$this.next().slideUp(350);
				}
				
			});
			
		$("a#model").click(function(){
			 $( "#menu-truck" ).slideToggle( "slow", function() {
							// Animation complete.
					}); 
			  
		}); 
		 
		 $( "#menu-truck" ).mouseleave(function() {
		 
			  $(this).slideUp();
		 });
			
			
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			loop:false, 
			dots: true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		});
  });
   
   
  
  