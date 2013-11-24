	<script src="/_assets/js/vendor/adactio/progresponsive/progresponsive.js"></script>
	<script src="/_assets/js/vendor/nathanford/data-href/data-href.js"></script>
	<script src="/_assets/js/vendor/leaverou/prismjs/prism.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/shoestring.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.dollar.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.dom.replaceWith.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.ajax.ajax.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.ajax.get.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.dom.get.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.data.data.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.dom.attr.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.dom.is.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.dom.not.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.dom.removeAttr.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.events.bind.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.events.trigger.js"></script>
	<script src="/_assets/js/vendor/filamentgroup/shoestring/extensions/shoestring.events.triggerHandler.js"></script>
	<script>jQuery = shoestring;</script>
	<script src="/_assets/js/vendor/filamentgroup/ajaxinclude/ajaxinclude.js"></script>
	<script>
		$("a[data-interaction]").bind( "click", function(e) {
			e.preventDefault();
			$(this).removeAttr("data-interaction").ajaxInclude();
		});

		// Corner reveal
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
	</script>
</body>
</html>