(function() {
  'use strict';

  var $ = document.querySelector.bind(document);
  var menuToggleEl = $('[href="#navigation"]');
  var navigationDrawerID = 'navigation__drawer';
  var navigationDrawerEl = $('#navigation__drawer');

  var toggleMenu = function (state) {
    menuToggleEl.setAttribute('aria-expanded', state);
    document.body.setAttribute('data-menu-expanded', state);
    navigationDrawerEl.setAttribute('aria-hidden', !state);
  };

  if (menuToggleEl) {
    // Setup menu button
    menuToggleEl.setAttribute('role', 'button');
    menuToggleEl.setAttribute('aria-controls', navigationDrawerID);
    menuToggleEl.setAttribute('aria-expanded', false);

    // Setup navigation drawer
    navigationDrawerEl.setAttribute('aria-hidden', true);

    // Toggle menu expanded/collapsed
    menuToggleEl.addEventListener('click', function (e) {
      var state = menuToggleEl.getAttribute('aria-expanded') === 'false' ? true : false;

      toggleMenu(state);

      e.preventDefault();
    });

    // Close menu if escape key is pressed
    window.addEventListener('keyup', function (e) {
      if (e.keyCode == 27) {
        toggleMenu(false);
      }
    });
  }
}());
