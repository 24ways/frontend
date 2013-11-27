	<script src="/_assets/js/vendor/madrobby/zepto/zepto.js"></script>
	<script>jQuery = Zepto;</script>
	<script src="/_assets/js/vendor/adactio/progresponsive/progresponsive.js"></script>
	<script src="/_assets/js/vendor/nathanford/data-href/data-href.js"></script>
	<script src="/_assets/js/vendor/leaverou/prismjs/prism.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/ajaxinclude/ajaxinclude.js"></script>
	<script>
		// AJAX include comments
		$("a[data-interaction]").bind( "click", function(e) {
			e.preventDefault();
			$(this).removeAttr("data-interaction").ajaxInclude();
		});

		// Corner animation
		var cornerOver = function(){
			this.className = this.className.replace(' js-mouseout', '');
		};
		var cornerOut = function(){
			this.className += ' js-mouseout';
		};
		var corners = document.querySelectorAll('.summary-article');
		for (var i = corners.length - 1; i >= 0; i--) {
			corners[i].addEventListener('js-mouseover', cornerOver, false);
			corners[i].addEventListener('js-mouseout', cornerOut, false);
		};

		// Equal height grid cells
		// http://css-tricks.com/equal-height-blocks-in-rows/
		if (window.innerWidth > 640) {
			equalheight = function(container){
				var currentTallest = 0,
					currentRowStart = 0,
					rowDivs = new Array(),
					$el,
					topPosition = 0;

				$(container).each(function() {
					$el = $(this);
					$($el).height('auto')
					topPostion = $el.position().top;

					if (currentRowStart != topPostion) {
						for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
							rowDivs[currentDiv].height(currentTallest);
						}
						rowDivs.length = 0; // empty the array
						currentRowStart = topPostion;
						currentTallest = $el.height();
						rowDivs.push($el);
					} else {
						rowDivs.push($el);
						currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
					}
					for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
						rowDivs[currentDiv].height(currentTallest);
					}
				});
			}

			$(document).ready(function() {
				equalheight('.list_item .summary-article');
			});

			$(window).resize(function(){
				equalheight('.list_item .summary-article');
			});
		}

		// Show back to top link when we've scrolled down the page
		if (window.innerWidth > 504) {
			$('.navigation').append('<a class="nav nav-top" href="#top" data-icon="&#x2303;">Return to the top of this page</a>');
			$(function () {
				$(window).scroll(function () {
					if ($(this).scrollTop() > 400) {
						$('.nav-top').animate({ opacity: 1 }, 500, 'ease-in')
					} else {
						$('.nav-top').animate({ opacity: 0 }, 500, 'ease-out')
					}
				});

				// http://austinpray.com/blog/zepto-js-smooth-vertical-scrolling/
				function smoothScroll(el, to, duration) {
					if (duration < 0) {
						return;
					}
					var difference = to - $(window).scrollTop();
					var perTick = difference / duration * 10;
					this.scrollToTimerCache = setTimeout(function() {
						if (!isNaN(parseInt(perTick, 10))) {
							window.scrollTo(0, $(window).scrollTop() + perTick);
							smoothScroll(el, to, duration - 10);
						}
					}.bind(this), 10);
				}

				$('.nav-top').on('click', function(e) {
					e.preventDefault();
					smoothScroll($(window), $($(e.currentTarget).attr('href')).offset().top, 500);
				});
			});
		}
	</script>
</body>
</html>