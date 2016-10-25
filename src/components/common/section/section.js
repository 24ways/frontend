//
// TODO: Refactor
// Can this functionality be achieved without a jQuery/ajaxInclude dependancy?
//

(function() {
  'use strict';

  if (enhanced === false) return;

  var $ = document.querySelector.bind(document);
  var $$ = document.querySelectorAll.bind(document);
  var opts = {
    continueClass: 'c-continue--ajax',
    loadingClass: 'c-section--loading',
    interactionLink: 'a[data-interaction]'
  };

  // $(opts.interactionLink).classList.add(opts.continueClass);
  //
  // $(opts.interactionLink).addEventListener('click', function(e) {
  //   $('#comments').classList.add(opts.loadingClass);
  //   $(this).removeAttr('data-interaction').ajaxInclude();
  //   e.preventDefault();
  // });
}());
