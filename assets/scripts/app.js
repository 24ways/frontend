(function () {
	'use strict';

	function createCommonjsModule(fn, basedir, module) {
		return module = {
		  path: basedir,
		  exports: {},
		  require: function (path, base) {
	      return commonjsRequire(path, (base === undefined || base === null) ? module.path : base);
	    }
		}, fn(module, module.exports), module.exports;
	}

	function commonjsRequire () {
		throw new Error('Dynamic requires are not currently supported by @rollup/plugin-commonjs');
	}

	var fontfaceobserver_standalone = createCommonjsModule(function (module) {
	/* Font Face Observer v2.1.0 - © Bram Stein. License: BSD-3-Clause */(function(){function l(a,b){document.addEventListener?a.addEventListener("scroll",b,!1):a.attachEvent("scroll",b);}function m(a){document.body?a():document.addEventListener?document.addEventListener("DOMContentLoaded",function c(){document.removeEventListener("DOMContentLoaded",c);a();}):document.attachEvent("onreadystatechange",function k(){if("interactive"==document.readyState||"complete"==document.readyState)document.detachEvent("onreadystatechange",k),a();});}function t(a){this.a=document.createElement("div");this.a.setAttribute("aria-hidden","true");this.a.appendChild(document.createTextNode(a));this.b=document.createElement("span");this.c=document.createElement("span");this.h=document.createElement("span");this.f=document.createElement("span");this.g=-1;this.b.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";this.c.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
	this.f.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";this.h.style.cssText="display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;";this.b.appendChild(this.h);this.c.appendChild(this.f);this.a.appendChild(this.b);this.a.appendChild(this.c);}
	function u(a,b){a.a.style.cssText="max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;white-space:nowrap;font-synthesis:none;font:"+b+";";}function z(a){var b=a.a.offsetWidth,c=b+100;a.f.style.width=c+"px";a.c.scrollLeft=c;a.b.scrollLeft=a.b.scrollWidth+100;return a.g!==b?(a.g=b,!0):!1}function A(a,b){function c(){var a=k;z(a)&&a.a.parentNode&&b(a.g);}var k=a;l(a.b,c);l(a.c,c);z(a);}function B(a,b){var c=b||{};this.family=a;this.style=c.style||"normal";this.weight=c.weight||"normal";this.stretch=c.stretch||"normal";}var C=null,D=null,E=null,F=null;function G(){if(null===D)if(J()&&/Apple/.test(window.navigator.vendor)){var a=/AppleWebKit\/([0-9]+)(?:\.([0-9]+))(?:\.([0-9]+))/.exec(window.navigator.userAgent);D=!!a&&603>parseInt(a[1],10);}else D=!1;return D}function J(){null===F&&(F=!!document.fonts);return F}
	function K(){if(null===E){var a=document.createElement("div");try{a.style.font="condensed 100px sans-serif";}catch(b){}E=""!==a.style.font;}return E}function L(a,b){return [a.style,a.weight,K()?a.stretch:"","100px",b].join(" ")}
	B.prototype.load=function(a,b){var c=this,k=a||"BESbswy",r=0,n=b||3E3,H=(new Date).getTime();return new Promise(function(a,b){if(J()&&!G()){var M=new Promise(function(a,b){function e(){(new Date).getTime()-H>=n?b(Error(""+n+"ms timeout exceeded")):document.fonts.load(L(c,'"'+c.family+'"'),k).then(function(c){1<=c.length?a():setTimeout(e,25);},b);}e();}),N=new Promise(function(a,c){r=setTimeout(function(){c(Error(""+n+"ms timeout exceeded"));},n);});Promise.race([N,M]).then(function(){clearTimeout(r);a(c);},
	b);}else m(function(){function v(){var b;if(b=-1!=f&&-1!=g||-1!=f&&-1!=h||-1!=g&&-1!=h)(b=f!=g&&f!=h&&g!=h)||(null===C&&(b=/AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent),C=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))),b=C&&(f==w&&g==w&&h==w||f==x&&g==x&&h==x||f==y&&g==y&&h==y)),b=!b;b&&(d.parentNode&&d.parentNode.removeChild(d),clearTimeout(r),a(c));}function I(){if((new Date).getTime()-H>=n)d.parentNode&&d.parentNode.removeChild(d),b(Error(""+
	n+"ms timeout exceeded"));else {var a=document.hidden;if(!0===a||void 0===a)f=e.a.offsetWidth,g=p.a.offsetWidth,h=q.a.offsetWidth,v();r=setTimeout(I,50);}}var e=new t(k),p=new t(k),q=new t(k),f=-1,g=-1,h=-1,w=-1,x=-1,y=-1,d=document.createElement("div");d.dir="ltr";u(e,L(c,"sans-serif"));u(p,L(c,"serif"));u(q,L(c,"monospace"));d.appendChild(e.a);d.appendChild(p.a);d.appendChild(q.a);document.body.appendChild(d);w=e.a.offsetWidth;x=p.a.offsetWidth;y=q.a.offsetWidth;I();A(e,function(a){f=a;v();});u(e,
	L(c,'"'+c.family+'",sans-serif'));A(p,function(a){g=a;v();});u(p,L(c,'"'+c.family+'",serif'));A(q,function(a){h=a;v();});u(q,L(c,'"'+c.family+'",monospace'));});})};module.exports=B;}());
	});

	function loadWebfonts() {
	  // Setup
	  const classLoaded = 'fonts-loaded';
	  const storageId = 'fonts-loaded';
	  const fonts = [
	    (new fontfaceobserver_standalone('Source Sans Pro', {
	      weight: 'normal',
	      style: 'normal'
	    })).load(),
	    (new fontfaceobserver_standalone('Source Sans Pro', {
	      weight: '700',
	      style: 'normal'
	    })).load(),
	    (new fontfaceobserver_standalone('Source Serif Pro', {
	      weight: 'normal',
	      style: 'normal'
	    })).load(),
	    (new fontfaceobserver_standalone('Source Code Pro', {
	      weight: 'normal',
	      style: 'normal'
	    })).load()
	  ];

	  // Events
	  function eventFontsLoaded() {
	    document.documentElement.classList.add(classLoaded);
	    sessionStorage[storageId] = true;
	  }

	  // Init
	  function init() {
	    Promise.all(fonts)
	      .then(eventFontsLoaded)
	      .catch(error => {
	        console.error(error);
	      });
	  }

	  init();
	}

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
	  firstChild.before(newDiv);
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

	function safeActiveElement() {
	  try {
	    return document.activeElement;
	  } catch {}
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
	  const firstFocusableChild = getFocusableChildren(node)[0] || createFirstFocusableChild(node);
	  if (firstFocusableChild) {
	    firstFocusableChild.focus();
	  }
	}

	function removeFocus(node) {
	  const focusableChildren = getFocusableChildren(node);
	  if (focusableChildren.length > 0) {
	    const focusedItemIndex = focusableChildren.indexOf(safeActiveElement());
	    if (focusedItemIndex !== -1) {
	      focusableChildren[focusedItemIndex].blur();
	    }
	  }
	}

	function maintainFocus(isShown, node, event) {
	  if (isShown && !node.contains(event.target)) {
	    setInitialFocus(node);
	  }
	}

	function menu() {
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
	    bindKeypress(true, () => {
	      handleRemoveFocus();
	    }, focusRegion, event_);
	  }

	  function handleMaintainFocus(event_) {
	    maintainFocus(true, focusRegion, event_);
	  }

	  function handleSetFocus() {
	    previousFocusedElement = safeActiveElement();
	    setInitialFocus(focusRegion);
	    document.addEventListener('keydown', handleKeypress);
	    document.body.addEventListener('focus', handleMaintainFocus, true);
	  }

	  function handleRemoveFocus() {
	    document.removeEventListener('keydown', handleKeypress);
	    document.body.removeEventListener('focus', handleMaintainFocus, true);
	    removeFocus(focusRegion);
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

	// Import modules

	// Run
	menu();
	loadWebfonts();

}());
//# sourceMappingURL=app.js.map
