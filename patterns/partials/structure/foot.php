    <script src="/_js/vendor/adactio/progresponsive/progresponsive.js"></script>
    <script src="/_js/vendor/nathanford/data-href/data-href.js"></script>
    <script src="/_js/vendor/leaverou/prismjs/prism.js"></script>

    <script src="/_js/vendor/filamentgroup/shoestring/shoestring.js"></script>
    <script>jQuery = shoestring;</script>
    <script src="/_js/vendor/filamentgroup/ajaxinclude/ajaxinclude.js"></script>
    <script>
        $("[data-replace]").bind("click", function(e) {
            e.preventDefault();
            $(this)
                .not("[data-interacted]")
                .ajaxInclude()
                .attr("data-interacted", "true")
        });
    </script>

    <!--script src="http://code.jquery.com/jquery-1.10.1.min.js"></script-->
    <!--script>
        $("[data-after]").ajaxInclude();
        $("a[data-interaction]").bind("click", function() {
            console.log('click');
            $(this).removeAttr("data-interaction").ajaxInclude({
                headerCallbacks: {
                    'X-AjaxInclude-Redirect': function(url) {
                        window.location.href = url;
                    }
                }
            });
            return false;
        });
    </script-->
</body>
</html>