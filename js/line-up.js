/* Cache selecttor */
function selectorCache() {
    // Usage $( '#element' ) becomes
    // var selectors = new selectorCache();
    // selectors.get( '#element' );

    var collection = {};

    function getFromCache(selector) {
        if (undefined === collection[selector]) {
            collection[selector] = $(selector);
        }

        return collection[selector];
    }

    return {
        get: getFromCache
    };
}



$(document).ready(function () {

    // function while scroll to the element then animate them
    ;
    (function () {
        var $animation_elements = $('.animation-element');
        var $window = $(window);

        function checkIfInView() {
            var windowHeight = $window.height();
            var windowTopPosition = $window.scrollTop();
            var windowBottomPosition = (windowTopPosition + windowHeight);
 
            $.each($animation_elements, function () {
                var $element = $(this);
                var elementHeight = $element.outerHeight();
                var elementTopPosition = $element.offset().top;
                var elementBottomPosition = (elementTopPosition + elementHeight);

                //check to see if this current container is within viewport
                if ((elementBottomPosition >= windowTopPosition) &&
                    (elementTopPosition <= windowBottomPosition)) { 
					$element.addClass('animated  in-view'); 
                } else {
				 	$element.removeClass('animated in-view'); 
                }
            });
        }

        $window.on('scroll resize', checkIfInView);
        $window.trigger('scroll');

    })();

    // this function for click more detail then scroll to next section
 
    ;
    (function () {
        var buttonNext = document.getElementById('next_button');
        
        if(!buttonNext) return;

        function scrollTo(to, callback, duration) {
            // easing functions http://goo.gl/5HLl8
            Math.easeInOutQuad = function (t, b, c, d) {
                t /= d / 2;
                if (t < 1) {
                    return c / 2 * t * t + b
                }
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            };

            Math.easeInCubic = function (t, b, c, d) {
                var tc = (t /= d) * t * t;
                return b + c * (tc);
            };

            Math.inOutQuintic = function (t, b, c, d) {
                var ts = (t /= d) * t,
                    tc = ts * t;
                return b + c * (6 * tc * ts + -15 * ts * ts + 10 * tc);
            };

            // requestAnimationFrame for Smart Animating http://goo.gl/sx5sts
            var requestAnimFrame = (function () {
                return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (callback) {
                    window.setTimeout(callback, 1000 / 60);
                };
            })();
            // because it's so fucking difficult to detect the scrolling element, just move them all
            function move(amount) {
                document.documentElement.scrollTop = amount;
                document.body.parentNode.scrollTop = amount;
                document.body.scrollTop = amount;
            }

            function position() {
                return document.documentElement.scrollTop || document.body.parentNode.scrollTop || document.body.scrollTop;
            }
            var start = position(),
                change = to - start,
                currentTime = 0,
                increment = 20;
            duration = (typeof (duration) === 'undefined') ? 500 : duration;
            var animateScroll = function () {
                // increment the time
                currentTime += increment;
                // find the value with the quadratic in-out easing function
                var val = Math.inOutQuintic(currentTime, start, change, duration);
                // move the document.body
                move(val);
                // do the animation unless its over
                if (currentTime < duration) {
                    requestAnimFrame(animateScroll);
                } else {
                    if (callback && typeof (callback) === 'function') {
                        // the animation is done so lets callback
                        callback();
                    }
                }
            };
            animateScroll();
        }
        
        buttonNext.addEventListener('click', function (e) {
            e.preventDefault();

            let self = this;

            while (!self.classList.contains('line-up-intro')) {
                self = self.parentElement;
            }

            let topNextElement = self.nextElementSibling.offsetTop;
            scrollTo(topNextElement, false, 1000);
        });
    })();
	 
});