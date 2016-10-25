(function() {
  'use strict';

  if (enhanced === false) return;

  var $ = document.querySelector.bind(document);
  var $$ = document.querySelectorAll.bind(document);
  var menuToggle = $('a[href="#menu"]');

  var toggleMenu = function (elem, on, off) {
    elem.setAttribute('data-menu', elem.getAttribute('data-menu') === on ? off : on);
  };

  if (menuToggle) {
    menuToggle.addEventListener('click', function(e) {
      toggleMenu(document.body, 'closed', 'open');
      e.preventDefault();
    });
  }
}());
