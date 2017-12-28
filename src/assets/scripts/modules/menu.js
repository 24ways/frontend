import * as focusing from './focusing';
import inert from 'wicg-inert';

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
  drawerEl.setAttribute('role', 'dialog');
  drawerEl.setAttribute('aria-hidden', 'true');
  drawerEl.hidden = true;

  // Set up backdrop
  const backdropEl = document.createElement('div');
  document.body.appendChild(backdropEl);
  backdropEl.className = 'c-backdrop';
  backdropEl.setAttribute('tabindex', -1);

  // Set up body state
  document.body.setAttribute('data-menu-expanded', false);

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

  // Inertia
  function handleInert(state) {
    Array.from(document.body.children).forEach(child => {
      if (child !== menuEl) {
        child.inert = state;
        console.log(state);
      }
    });
  }

  function toggleMenu(state) {
    if (state === 'true') { // Open menu
      drawerEl.setAttribute('aria-hidden', false);
      drawerEl.hidden = false;
      handleSetFocus();
      handleInert(true);
    } else { // Close menu
      setTimeout(() => {
        // Leave time for animation to complete before changing state
        drawerEl.setAttribute('aria-hidden', true);
        drawerEl.hidden = true;
      }, 450);
      handleRemoveFocus();
      handleInert(false);
    }

    // …and only then update the attribute for `aria-expanded`
    buttonEl.setAttribute('aria-expanded', state);

    // …and update global value so other elements can query state
    document.body.setAttribute('data-menu-expanded', state);
  }

  if (buttonEl) {
    // Remove script and applied style that hides drawer during load
    drawerEl.style.display = '';
    document.querySelector('.c-menu__onload').remove();

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
