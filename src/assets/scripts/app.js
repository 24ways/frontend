(function (win, doc) {
  'use strict';

  // Check if `fonts-loaded` cookie has been set
  if (doc.documentElement.className.indexOf('fonts-loaded') > -1) {
    return;
  }

  /*! Cookie function: get, set, or forget a cookie.
   * [c]2014 @scottjehl, Filament Group, Inc.
   * Licensed MIT
   */
  var cookie = function (name, value, days) {
    // If value is undefined, get the cookie value
    if (value === undefined) {
      var cookiestring = "; " + doc.cookie;
      var cookies = cookiestring.split("; " + name + "=");
      if (cookies.length === 2) {
        return cookies.pop().split( ";" ).shift();
      }
      return null;
    }
    else {
      // if value is a false boolean, we'll treat that as a delete
      if (value === false) {
        days = -1;
      }
      var expires = "";
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + ( days * 24 * 60 * 60 * 1000 ));
        expires = "; expires=" + date.toGMTString();
      }
      doc.cookie = name + "=" + value + expires + "; path=/";
    }
  };

  win.cookie = cookie;

  // Load webfonts
  // Requires FontFaceObserver (included during build)
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

  var monospace = new FontFaceObserver('Source Code Pro', {
    weight: 'normal',
    style: 'normal'
  });

  Promise.all([
    serifRegular.load(),
    serifBold.load(),
    serifRegular.load(),
    monospace.load()
  ]).then(function () {
    doc.documentElement.className += ' fonts-loaded';
    // Set `fonts-loaded` cookie
    cookie('fonts-loaded', !0, 7);
  });

}(this, this.document));
