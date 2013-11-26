	<script src="/_assets/js/vendor/zepto/zepto.js"></script>
	<script>jQuery = Zepto;</script>
	<script src="/_assets/js/vendor/adactio/progresponsive/progresponsive.js"></script>
	<script src="/_assets/js/vendor/nathanford/data-href/data-href.js"></script>
	<script src="/_assets/js/vendor/leaverou/prismjs/prism.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/ajaxinclude/ajaxinclude.js"></script>
	<script>
		// Comment AJAX Include
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
	</script>
</body>
</html>