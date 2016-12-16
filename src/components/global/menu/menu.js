'use strict';

(function (root, factory) {
  if (typeof module === 'object' && module.exports) {
    module.exports = factory(require('../../src/assets/scripts/utils/selection').$);
    module.exports = factory(require('../../src/assets/scripts/utils/focusing').$);
  } else {
    root.menu = factory(root.selection.$, root.focusing);
  }
}(this, function ($, focusing) {
  const doc = this.document;
  const menuToggleEl = $('[href="#navigation"]');
  const menuButton = doc.createElement('button');
  const navigationDrawerEl = $('#navigation__drawer');
  const navigationDrawerID = navigationDrawerEl.id;
  const focusRegion = navigationDrawerEl;

  var previousFocusedElement;

  function handleKeypress(e) {
    focusing.bindKeypress(true, function () {
      handleRemoveFocus();
    }, focusRegion, e);
  }

  function handleMaintainFocus(e) {
    focusing.maintainFocus(true, focusRegion, e);
  }

  function handleSetFocus(e) {
    previousFocusedElement = focusing.safeActiveElement();
    focusing.setInitialFocus(focusRegion);
    doc.addEventListener('keydown', handleKeypress);
    doc.body.addEventListener('focus', handleMaintainFocus, true);
  }

  function handleRemoveFocus(e) {
    doc.removeEventListener('keydown', handleKeypress);
    doc.body.removeEventListener('focus', handleMaintainFocus, true);
    focusing.removeFocus(focusRegion);
    previousFocusedElement && previousFocusedElement.focus();
  }

  // Replace menu link with a `button`
  menuButton.classList = menuToggleEl.classList;
  menuButton.innerHTML = menuToggleEl.innerHTML;
  doc.body.replaceChild(menuButton, menuToggleEl);

  // Correct role for navigation drawer
  navigationDrawerEl.setAttribute('role', 'dialog');
  navigationDrawerEl.setAttribute('aria-labelledby', 'navigation__title');
  navigationDrawerEl.hidden = true;

  const toggleMenu = function (state) {
    menuButton.setAttribute('aria-expanded', state);
    doc.body.setAttribute('data-menu-expanded', state);
    navigationDrawerEl.setAttribute('aria-hidden', !state);

    if (state === 'true') {
      handleSetFocus();
      navigationDrawerEl.hidden = false;
    } else {
      handleRemoveFocus();
      navigationDrawerEl.hidden = true;
    }
  };

  if (menuToggleEl) {
    // Setup menu button ARIA attributes
    menuButton.setAttribute('aria-controls', navigationDrawerID);
    menuButton.setAttribute('aria-expanded', false);

    // Setup navigation drawer
    navigationDrawerEl.setAttribute('aria-hidden', true);

    // Toggle menu expanded/collapsed
    menuButton.addEventListener('click', (e) => {
      const state = menuButton.getAttribute('aria-expanded') === 'false' ? 'true' : 'false';

      toggleMenu(state);

      e.preventDefault();
    });

    // Close menu if escape key is pressed
    this.addEventListener('keyup', (e) => {
      if (e.keyCode === 27) {
        toggleMenu(false);
        handleRemoveFocus();
      }
    });
  }
}));
