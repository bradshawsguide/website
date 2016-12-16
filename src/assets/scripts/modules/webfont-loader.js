import FontFaceObserver from 'fontfaceobserver';

export default function() {

  // Constants
  const docEl = document.documentElement;

  // Feature detect
  if (!('querySelector' in document) || !('addEventListener' in window) || !docEl.classList) return;

  // Setup
  const storageId = 'fonts-loaded';
  const classLoaded = 'has-fonts';
  const fonts = [
    (new FontFaceObserver('Linux Libertine', {
      weight: 'normal',
      style: 'normal'
    })).load(),
    (new FontFaceObserver('Linux Libertine', {
      weight: 'normal',
      style: 'italic'
    })).load(),
    (new FontFaceObserver('Kameron', {
      weight: 'bold',
      style: 'normal'
    })).load(),
    (new FontFaceObserver('League Gothic', {
      weight: 'bold',
      style: 'normal'
    })).load()
  ];

  // Events
  function eventFontsLoaded () {
    docEl.classList.add(classLoaded);
    sessionStorage[storageId] = true;
  }

  // Init
  function init () {
    Promise.all(fonts).then(eventFontsLoaded).catch(function(rejected){
      console.log(rejected);
    });;
  }

  init();
}
