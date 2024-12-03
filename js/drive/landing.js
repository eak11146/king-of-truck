 
    $(document).ready(function() {
 
	    
		
		
	 $('.owl-carousel').owlCarousel({
		center:true, 
		stagePadding: 300,
		loop:true, 
		dots: true,
		nav: true, 
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"], 
		items:1,
		lazyLoad: true,  
		responsive:{
        0:{
            items:1,
            stagePadding: 60
        },
        600:{
            items:1,
            stagePadding: 100
        },
        960:{
            items:1,
            stagePadding: 200
        },
        1200:{
            items:1,
            stagePadding: 250
        },
        1400:{
            items:1,
            stagePadding: 350
        },
        1600:{
            items:1,
            stagePadding: 350
        },
        1800:{
            items:1,
            stagePadding: 400
			}
		},
		 
		 
	});
		
		 
			 
			var owl = $('.owl-carousel'); 
			
			  
			
			 function setAnimation ( _elem, _InOut ) {
				// Store all animationend event name in a string.
				// cf animate.css documentation
				var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

				_elem.each ( function () {
				  var $elem = $(this);
				  var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

				  $elem.addClass($animationType).one(animationEndEvent, function () {
					$elem.removeClass($animationType); // remove animate.css Class at the end of the animations
				  });
				});
			  }

			// Fired before current slide change
			  owl.on('change.owl.carousel', function(event) {
				  var $currentItem = $('.owl-item', owl).eq(event.item.index);
				  var $elemsToanim = $currentItem.find("[data-animation-out]");
				  setAnimation ($elemsToanim, 'out');
			  $('.caption').fadeTo( "fast", 0 );
					 
						 
			  });

			// Fired after current slide has been changed
			  owl.on('changed.owl.carousel', function(event) {

				  var $currentItem = $('.owl-item', owl).eq(event.item.index);
				  var $elemsToanim = $currentItem.find("[data-animation-in]");
				  setAnimation ($elemsToanim, 'in');
				   $('.caption').fadeTo( "fast", 1 );
			  });
			
			$(".caption").bind("webkitAnimationEnd mozAnimationEnd animationEnd", function(){
				$(this).removeClass("animated")  
			})

			
			$(".caption").hover(function(){ 
				$(this).addClass("animated");        
			});
			
			
			$("#element").introLoader({

                    animation: {
                        name: 'counterLoader',
                        options: {
							 exitFx:'fadeOut',
						//	exitFx:'slideUp',
                            ease: "easeOutSine",
							style: 'dark',
                            animationTime: 3000, 
                        }
                    }

                });
			
			
    }); // ready 
	 
		 
		/* 
		
		$(".box").hover(function(){
		  $(this).addClass("animated");        
		});
		*/
	 