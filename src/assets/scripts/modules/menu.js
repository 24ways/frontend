import * as focusing from './focusing';

export default function () {
  // Set timeout so that transitions don't run on page load
  const menuEl = document.querySelector('.c-menu');
  setTimeout(() => {
    menuEl.classList.remove('no-transition');
  }, 10);

  // Set up menu button
  // Mark drawer as being closed
  const buttonEl = document.querySelector('.c-menu__button');
  buttonEl.setAttribute('aria-expanded', false);

  // Set up menu drawer
  const drawerEl = document.querySelector('.c-menu__drawer');
  drawerEl.hidden = true;
  drawerEl.setAttribute('role', 'dialog');

  // Set up backdrop
  const backdropEl = document.createElement('div');
  document.body.appendChild(backdropEl);
  backdropEl.className = 'c-backdrop';
  backdropEl.setAttribute('tabindex', -1);

  // Focusing
  const focusRegion = drawerEl;
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

  function toggleMenu(state) {
    // Toggle state on elements to be hidden/shown…
    if (state === 'true') {
      drawerEl.setAttribute('aria-hidden', false);
      drawerEl.hidden = false;
      handleSetFocus();
    } else {
      setTimeout(() => {
        drawerEl.setAttribute('aria-hidden', false);
        drawerEl.hidden = true;
      }, 450);
      handleRemoveFocus();
    }

    // …and only then update the attribute for `aria-expanded`
    buttonEl.setAttribute('aria-expanded', state);

    // …and update global value so other elements can query state
    document.body.setAttribute('data-menu-expanded', state);
  }

  if (buttonEl) {
    // Toggle drawer on clicking button
    buttonEl.addEventListener('click', e => {
      const state = buttonEl.getAttribute('aria-expanded') === 'false' ? 'true' : 'false';
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
      const state = buttonEl.getAttribute('aria-expanded') === 'false' ? 'true' : 'false';
      toggleMenu(state);
      e.preventDefault();
    });
  }
}
