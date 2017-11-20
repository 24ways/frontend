import * as focusing from './focusing';

export default function () {
  const menuToggleEl = document.querySelector('[href="#navigation"]');
  const menuButton = document.createElement('button');
  const navigationDrawerEl = document.querySelector('#navigation__drawer');
  const navigationDrawerID = navigationDrawerEl.id;
  const focusRegion = navigationDrawerEl;

  let previousFocusedElement;

  function handleKeypress(e) {
    focusing.bindKeypress(true, () => {
      handleRemoveFocus();
    }, focusRegion, e);
  }

  function handleMaintainFocus(e) {
    focusing.maintainFocus(true, focusRegion, e);
  }

  function handleSetFocus() {
    previousFocusedElement = focusing.safeActiveElement();
    focusing.setInitialFocus(focusRegion);
    document.addEventListener('keydown', handleKeypress);
    document.body.addEventListener('focus', handleMaintainFocus, true);
  }

  function handleRemoveFocus() {
    document.removeEventListener('keydown', handleKeypress);
    document.body.removeEventListener('focus', handleMaintainFocus, true);
    focusing.removeFocus(focusRegion);
    previousFocusedElement.focus();
  }

  // Add backdrop
  const backdropEl = document.createElement('div');

  document.body.appendChild(backdropEl);
  backdropEl.className = 'c-backdrop';
  backdropEl.setAttribute('tabindex', -1);

  // Replace menu link with a `button`
  menuButton.classList = menuToggleEl.classList;
  menuButton.innerHTML = menuToggleEl.innerHTML;
  document.body.replaceChild(menuButton, menuToggleEl);

  // Correct role for navigation drawer
  navigationDrawerEl.setAttribute('role', 'dialog');
  navigationDrawerEl.setAttribute('aria-labelledby', 'navigation__title');
  navigationDrawerEl.hidden = true;

  const toggleMenu = function (state) {
    menuButton.setAttribute('aria-expanded', state);
    document.body.setAttribute('data-menu-expanded', state);
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
    menuButton.addEventListener('click', e => {
      const state = menuButton.getAttribute('aria-expanded') === 'false' ? 'true' : 'false';
      toggleMenu(state);
      e.preventDefault();
    });

    // Close menu if escape key is pressed
    window.addEventListener('keyup', e => {
      if (e.keyCode === 27) {
        toggleMenu(false);
        handleRemoveFocus();
      }
    });

    // Close menu if backdrop (area outside menu) is clicked
    backdropEl.addEventListener('click', e => {
      const state = menuButton.getAttribute('aria-expanded') === 'false' ? 'true' : 'false';
      toggleMenu(state);
      e.preventDefault();
    });
  }
}
