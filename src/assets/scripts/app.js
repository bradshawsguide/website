var FontFaceObserver = require('fontfaceobserver');

(function (win, doc) {
  'use strict';

  if (document.documentElement.className.indexOf('fonts-loaded') > -1) {
    return;
  }

  var serif_regular = new FontFaceObserver('Linux Libertine', {
    weight: 'normal',
    style: 'normal'
  });

  var serif_italic = new FontFaceObserver('Linux Libertine', {
    weight: 'normal',
    style: 'italic'
  });

  var slab = new FontFaceObserver('Kameron', {
    weight: 'bold',
    style: 'normal'
  });

  var block = new FontFaceObserver('League Gothic', {
    weight: 'bold',
    style: 'normal'
  });

  Promise.all([
    serif_regular.load(),
    serif_italic.load(),
    slab.load(),
    block.load()
  ]).then(function () {
    document.documentElement.className += ' fonts-loaded';
    //window.enhance.cookie('fonts-loaded', !0, 7);
  });

}(this, this.document));

var Turbolinks = require("turbolinks")
Turbolinks.start()
