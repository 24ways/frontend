
    <script src="/_assets/js/vendor/adactio/progresponsive/progresponsive.js"></script>
    <script src="/_assets/js/vendor/nathanford/data-href/data-href.js"></script>
    <script src="/_assets/js/vendor/nathanford/widowtamer/widowtamer.js"></script>
    <script src="/_assets/js/vendor/leaverou/prismjs/prism.js"></script>

    <script src="/_assets/js/vendor/filamentgroup/shoestring/shoestring.js"></script>
    <script>jQuery = shoestring;</script>
    <script src="/_assets/js/vendor/filamentgroup/ajaxinclude/ajaxinclude.js"></script>
    <script>
        $("[data-replace]").bind("click", function(e) {
            e.preventDefault();
            $(this)
                .not("[data-interacted]")
                .ajaxInclude()
                .attr("data-interacted", "true")
        });
    </script>
</body>
</html>