(function(win, doc) {
    if (enhanced === false) return;

    var toggleClassName = function(element, toggleClass) {
        var reg = new RegExp('(\\s|^)' + toggleClass + '(\\s|$)');
        if (!element.className.match(reg)) {
            element.className += ' ' + toggleClass;
        } else {
            element.className = element.className.replace(reg, '');
        }
    };

    doc.querySelector('a[href="#menu"]').addEventListener('click', function(ev) {
        ev.preventDefault();
        toggleClassName(doc.body, 'has--active-menu');
    });
}(this, this.document));