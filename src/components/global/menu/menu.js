(function() {
  'use strict';

  var $ = document.querySelector.bind(document);
  var menuToggleEl = $('[href="#navigation"]');
  var menuButton = document.createElement("button");
  var navigationDrawerID = 'navigation__drawer';
  var navigationDrawerEl = $('#navigation__drawer');

  // Replace menu link with a `button`
  menuButton.classList = menuToggleEl.classList;
  menuButton.innerHTML = menuToggleEl.innerHTML;
  document.body.replaceChild(menuButton, menuToggleEl)

  var toggleMenu = function (state) {
    menuButton.setAttribute('aria-expanded', state);
    document.body.setAttribute('data-menu-expanded', state);
    navigationDrawerEl.setAttribute('aria-hidden', !state);
  };

  if (menuToggleEl) {
    // Setup menu button ARIA attributes
    menuButton.setAttribute('aria-controls', navigationDrawerID);
    menuButton.setAttribute('aria-expanded', false);

    // Setup navigation drawer
    navigationDrawerEl.setAttribute('aria-hidden', true);

    // Toggle menu expanded/collapsed
    menuButton.addEventListener('click', function (e) {
      var state = menuButton.getAttribute('aria-expanded') === 'false' ? true : false;

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
