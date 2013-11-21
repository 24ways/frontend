    <script src="/_assets/js/vendor/adactio/progresponsive/progresponsive.js"></script>
    <script src="/_assets/js/vendor/nathanford/data-href/data-href.js"></script>
    <script src="/_assets/js/vendor/leaverou/prismjs/prism.js"></script>

    <script src="/_assets/js/vendor/filamentgroup/shoestring/shoestring.js"></script>
    <script>jQuery = shoestring;</script>
    <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->
    <script src="/_assets/js/vendor/filamentgroup/ajaxinclude/ajaxinclude.js"></script>
    <script>
        $("a[data-replace]").bind( "click", function(e) {
            e.preventDefault();
            $(this).removeAttr("data-interaction").ajaxInclude();
        });
    </script>
</body>
</html>