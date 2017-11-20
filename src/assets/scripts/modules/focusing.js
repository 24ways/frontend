// Thanks to https://github.com/edenspiekermann/a11y-dialog for focus trapping

const focusableElements = [
  'a[href]',
  'area[href]',
  'input:not([disabled])',
  'select:not([disabled])',
  'textarea:not([disabled])',
  'button:not([disabled])',
  'iframe',
  'object',
  'embed',
  '[contenteditable]',
  '[tabindex]:not([tabindex^="-"])'
];

function toArray(collection) {
  return Array.prototype.slice.call(collection);
}

function $$(selector, context) {
  return toArray((context || document).querySelectorAll(selector));
}

function getFocusableChildren(node) {
  return $$(focusableElements.join(','), node).filter(child => {
    return Boolean(child.offsetWidth || child.offsetHeight || child.getClientRects().length);
  });
}

function createFirstFocusableChild(node) {
  const newDiv = document.createElement('div');
  newDiv.setAttribute('tabindex', '0');
  newDiv.style.cssText = 'outline:none;';
  const firstChild = node.firstChild;
  node.insertBefore(newDiv, firstChild);
  return newDiv;
}

function getCurrentFocusable(node, event) {
  const focusableChildren = getFocusableChildren(node);
  let focusableElement;

  if (focusableChildren.length > 0) {
    const focusedItemIndex = focusableChildren.indexOf(safeActiveElement());
    if (event.shiftKey && focusedItemIndex === 0) {
      focusableElement = focusableChildren[focusableChildren.length - 1];
    } else if (!event.shiftKey && focusedItemIndex === focusableChildren.length - 1) {
      focusableElement = focusableChildren[0];
    }
  }
  return focusableElement;
}

function trapTabKey(node, event) {
  const focusableElement = getCurrentFocusable(node, event);
  if (focusableElement) {
    focusableElement.focus();
    event.preventDefault();
  }
}

export function safeActiveElement() {
  try {
    return document.activeElement;
  } catch (err) {}
}

export function bindKeypress(isShown, onExit, node, event) {
  if (isShown && event.which === 27) {
    event.preventDefault();
    onExit();
  }

  if (isShown && event.which === 9) {
    trapTabKey(node, event);
  }
}

export function setInitialFocus(node) {
  const firstFocusableChild = getFocusableChildren(node)[0] || createFirstFocusableChild(node);
  if (firstFocusableChild) {
    firstFocusableChild.focus();
  }
}

export function removeFocus(node) {
  const focusableChildren = getFocusableChildren(node);
  if (focusableChildren.length > 0) {
    const focusedItemIndex = focusableChildren.indexOf(safeActiveElement());
    if (focusedItemIndex !== -1) {
      focusableChildren[focusedItemIndex].blur();
    }
  }
}

export function maintainFocus(isShown, node, event) {
  if (isShown && !node.contains(event.target)) {
    setInitialFocus(node);
  }
}
