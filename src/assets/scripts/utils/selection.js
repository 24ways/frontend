'use strict';

(function (root, factory) {
  if (typeof module === 'object' && module.exports) {
    module.exports = factory();
  } else {
    root.selection = factory();
  }
}(this, function () {
  function $$(selector, context) {
    return Array.prototype.slice.call((context || document).querySelectorAll(selector));
  }

  function $(selector, context) {
    return (context || document).querySelector(selector);
  }

  return {
    $$: $$,
    $: $
  };
}));
