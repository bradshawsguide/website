export default function (opts) {
  // Options
  const toggleButton = opts.toggleWith;
  const dismissButton = opts.dismissWith;
  const modal = opts.modal || false;

  // Set up
  const targetName = toggleButton.getAttribute('aria-controls');
  const target = document.getElementById(targetName);

  function toggleContainer(state) {
    if (state === 'true') { // Show search
      target.setAttribute('aria-hidden', false);
      target.hidden = false;

      if (modal === true) {
        document.body.dataset.modal = true;
      }
    } else { // Hide search
      target.setAttribute('aria-hidden', true);
      target.hidden = true;

      if (modal === true) {
        document.body.dataset.modal = false;
      }
    }

    console.log(state);

    // …and only then update the attribute for `aria-expanded`
    toggleButton.setAttribute('aria-expanded', state);
  }

  // Toggle drawer on clicking button
  toggleButton.addEventListener('click', e => {
    const state = toggleButton.getAttribute('aria-expanded') === 'false' ? 'true' : 'false';
    toggleContainer(state);
    e.preventDefault();
  });

  // Close menu if escape key is pressed
  window.addEventListener('keyup', e => {
    if (e.keyCode === 27) {
      toggleContainer(false);
    }
  });

  // Close menu if backdrop (area outside menu) is clicked
  // backdropEl.addEventListener('click', e => {
  //   const state = toggleSearch.getAttribute('aria-expanded') === 'false' ? 'true' : 'false';
  //   toggleSearch(state);
  //   e.preventDefault();
  // });

  dismissButton.onclick = function () {
    toggleContainer(false);
  };
}
