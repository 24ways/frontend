import * as focusing from './focusing';

export function menu() {
  // Set timeout so that transitions don't run on page load
  const menuElement = document.querySelector('.c-menu');
  setTimeout(() => {
    menuElement.classList.remove('no-transition');
  }, 10);

  // Set up menu button
  // Mark drawer as being closed
  const buttonElement = document.querySelector('.c-menu__button');
  buttonElement.setAttribute('aria-expanded', false);

  // Set up menu drawer
  const drawerElement = document.querySelector('.c-menu__drawer');
  drawerElement.setAttribute('role', 'dialog');
  drawerElement.setAttribute('aria-hidden', 'true');
  drawerElement.hidden = true;

  // Set up backdrop
  const backdropElement = document.createElement('div');
  document.body.append(backdropElement);
  backdropElement.className = 'c-backdrop';
  backdropElement.setAttribute('tabindex', -1);

  // Set up body state
  document.body.dataset.menuExpanded = false;

  // Focusing
  const focusRegion = drawerElement;
  let previousFocusedElement;

  function handleKeypress(event_) {
    focusing.bindKeypress(true, () => {
      handleRemoveFocus();
    }, focusRegion, event_);
  }

  function handleMaintainFocus(event_) {
    focusing.maintainFocus(true, focusRegion, event_);
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
      if (child !== menuElement) {
        child.inert = state;
        console.log(state);
      }
    });
  }

  function toggleMenu(state) {
    if (state === 'true') { // Open menu
      drawerElement.setAttribute('aria-hidden', false);
      drawerElement.hidden = false;
      handleSetFocus();
      handleInert(true);
    } else { // Close menu
      setTimeout(() => {
        // Leave time for animation to complete before changing state
        drawerElement.setAttribute('aria-hidden', true);
        drawerElement.hidden = true;
      }, 450);
      handleRemoveFocus();
      handleInert(false);
    }

    // …and only then update the attribute for `aria-expanded`
    buttonElement.setAttribute('aria-expanded', state);

    // …and update global value so other elements can query state
    document.body.dataset.menuExpanded = state;
  }

  if (buttonElement) {
    // Remove script and applied style that hides drawer during load
    drawerElement.style.display = '';
    document.querySelector('.c-menu__onload').remove();

    // Toggle drawer on clicking button
    buttonElement.addEventListener('click', event_ => {
      const state = buttonElement.getAttribute('aria-expanded') === 'false' ? 'true' : 'false';
      toggleMenu(state);

      event_.preventDefault();
    });

    // Close menu if escape key is pressed
    window.addEventListener('keyup', event_ => {
      if (event_.key === 'Escape') {
        toggleMenu(false);
        handleRemoveFocus();
      }
    });

    // Close menu if backdrop (area outside menu) is clicked
    backdropElement.addEventListener('click', event_ => {
      const state = buttonElement.getAttribute('aria-expanded') === 'false' ? 'true' : 'false';
      toggleMenu(state);
      event_.preventDefault();
    });
  }
}
