 
    $(document).ready(function() {
		
	 	/*
            var owl = $('.owl-carousel');
			owl.owlCarousel({
				animateOut: 'slideOutDown',
				animateIn: 'flipInX',  
                items: 1, 
                stagePadding:0,
				loop: true,                 
				autoplay: true, 
                autoplayHoverPause: true,
				 
              })
			   $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
          */
	     
	 
		$('#banner').owlCarousel({ //.owl-carousel
			items:1,
			lazyLoad:true, 
			margin:10,
			loop:true, 
			autoplay: true, 
		});
		
		 
			$('#video').owlCarousel({ 
				loop:true,
				margin:20,
				canter:true,
				dot:true,
				nav: true, 
				navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"], 
				lazyLoad:true, 
				responsive:{
				0:{
					items:1,
					/* stagePadding: 60 */
				},
				600:{
					items:2,
					/* stagePadding: 100 */
				},
				960:{
					items:4,
					/* stagePadding: 200 */
				},
				1200:{
					items:4,
					 /* stagePadding: 250 */
				},
				1400:{
					items:4,
					 
				},
				1600:{
					items:5,
					/* stagePadding: 350 */
				},
				1800:{
					items:5,
					/* stagePadding: 400 */
					}
				},
			});
		 
			 
    }); // ready 
	 
		 
	 