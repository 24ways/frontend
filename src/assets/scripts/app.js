// Load webfonts
(function (win, doc) {
  'use strict';

  // if (doc.documentElement.className.indexOf('fonts-loaded') > -1) {
  //   return;
  // }

  var serifRegular = new FontFaceObserver('Source Sans Pro', {
    weight: 'normal',
    style: 'normal'
  });

  var serifBold = new FontFaceObserver('Source Sans Pro', {
    weight: '700',
    style: 'normal'
  });

  var serifRegular = new FontFaceObserver('Source Serif Pro', {
    weight: 'normal',
    style: 'normal'
  });

  var serifItalic = new FontFaceObserver('Source Serif Pro', {
    weight: 'normal',
    style: 'italic'
  });

  var monospace = new FontFaceObserver('Source Code Pro', {
    weight: 'normal',
    style: 'normal'
  });

  Promise.all([serifRegular.load(), serifBold.load(), serifRegular.load(), serifItalic.load(), monospace.load()]).then(function () {
    doc.documentElement.className += ' fonts-loaded';
    //win.enhance.cookie('fonts-loaded', !0, 7);
  });

}(this, this.document));
