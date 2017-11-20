import FontFaceObserver from 'fontfaceobserver';

export default function () {
  const docEl = document.documentElement;

  // Setup
  const storageId = 'fonts-loaded';
  const classLoaded = 'fonts-loaded';
  const fonts = [
    (new FontFaceObserver('Source Sans Pro', {
      weight: 'normal',
      style: 'normal'
    })).load(),
    (new FontFaceObserver('Source Sans Pro', {
      weight: '700',
      style: 'normal'
    })).load(),
    (new FontFaceObserver('Source Serif Pro', {
      weight: 'normal',
      style: 'normal'
    })).load(),
    (new FontFaceObserver('Source Code Pro', {
      weight: 'normal',
      style: 'normal'
    })).load()
  ];

  // Events
  function eventFontsLoaded() {
    docEl.classList.add(classLoaded);
    sessionStorage[storageId] = true;
  }

  // Init
  function init() {
    Promise.all(fonts)
      .then(eventFontsLoaded)
      .catch(err => {
        console.log(err);
      });
  }

  init();
}
