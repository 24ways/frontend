sethrefs = function () {
    if (document.querySelectorAll) {
        var datahrefs = document.querySelectorAll('[data-href]'),
            dhcount = datahrefs.length;

        while (dhcount-- > 0) {
            var ele = datahrefs[dhcount],
                link = function (event) {
                    var target = event.target;

                    if (!event.target.href) window.location.href = this.getAttribute('data-href');
                };

            if(ele.addEventListener) ele.addEventListener('click', link, false);
                else ele.attachEvent('onclick', link);

            ele.style.cursor = 'pointer';
        }
    }
};

sethrefs();