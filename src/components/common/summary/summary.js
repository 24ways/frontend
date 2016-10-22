(function() {
  'use strict';

  if (!document.querySelector || !window.addEventListener || !document.documentElement.classList) {
    return;
  }

  var $$ = document.querySelectorAll.bind(document);

  var cornerOver = function(){
    this.className = this.className.replace(' js-mouseout', '');
  };

  var cornerOut = function(){
    this.className += ' js-mouseout';
  };

  var corners = $$('.c-summary');

  for (var i = corners.length - 1; i >= 0; i--) {
    corners[i].addEventListener('js-mouseover', cornerOver, false);
    corners[i].addEventListener('js-mouseout', cornerOut, false);
  };
}());
