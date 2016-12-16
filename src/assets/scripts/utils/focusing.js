'use strict';

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
  '[tabindex]:not([tabindex^="-"])',
];

(function (root, factory) {
  if (typeof module === 'object' && module.exports) {
    module.exports = factory(require('../../src/assets/scripts/utils/selection').$$);
  } else {
    root.focusing = factory(root.selection.$$);
  }
}(this, function($$) {
  function getFocusableChildren(node) {
    return $$(focusableElements.join(','), node).filter(function(child) {
      return !!(child.offsetWidth || child.offsetHeight || child.getClientRects().length);
    });
  }

  function createFirstFocusableChild(node) {
    var newDiv = document.createElement('div');
    newDiv.setAttribute('tabindex', '0');
    newDiv.style.cssText = 'outline:none;';
    var firstChild = node.firstChild;
    node.insertBefore(newDiv, firstChild);
    return newDiv;
  }

  function getCurrentFocusable(node, event) {
    let focusableChildren = getFocusableChildren(node);
    let focusableElement;

    if (focusableChildren.length) {
      var focusedItemIndex = focusableChildren.indexOf(safeActiveElement());
      if (event.shiftKey && focusedItemIndex === 0) {
        focusableElement = focusableChildren[focusableChildren.length - 1];
      } else if (!event.shiftKey && focusedItemIndex === focusableChildren.length - 1) {
        focusableElement = focusableChildren[0];
      }
    }
    return focusableElement;
  }

  function trapTabKey(node, event) {
    let focusableElement = getCurrentFocusable(node, event);
    if (focusableElement) {
      focusableElement.focus();
      event.preventDefault();
    }
  }

  function safeActiveElement() {
    try {
      return document.activeElement;
    } catch (err) {}
  }

  function bindKeypress(isShown, onExit, node, event) {
    if (isShown && event.which === 27) {
      event.preventDefault();
      onExit();
    }

    if (isShown && event.which === 9) {
      trapTabKey(node, event);
    }
  }

  function setInitialFocus(node) {
    var firstFocusableChild = getFocusableChildren(node)[0] || createFirstFocusableChild(node);
    if (firstFocusableChild) firstFocusableChild.focus();
  }

  function removeFocus(node) {
    var focusableChildren = getFocusableChildren(node);
    if (focusableChildren.length) {
      var focusedItemIndex = focusableChildren.indexOf(safeActiveElement());
      if (focusedItemIndex != -1) focusableChildren[focusedItemIndex].blur();
    }
  }

  function maintainFocus(isShown, node, event) {
    if (isShown && !node.contains(event.target)) {
      setInitialFocus(node);
    }
  }

  return {
    safeActiveElement: safeActiveElement,
    bindKeypress: bindKeypress,
    setInitialFocus: setInitialFocus,
    removeFocus: removeFocus,
    maintainFocus: maintainFocus
  };
}));
