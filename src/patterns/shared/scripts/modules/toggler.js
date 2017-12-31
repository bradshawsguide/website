export default function (opts) {
  function Dialog(dialogEl, inertEls) {
    this.dialogEl = dialogEl;
    this.inertEls = inertEls;
    this.focusedElBeforeOpen;

    const focusableEls = this.dialogEl.querySelectorAll('a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), [tabindex="0"]');
    this.focusableEls = Array.prototype.slice.call(focusableEls);

    this.firstFocusableEl = this.focusableEls[0];
    this.lastFocusableEl = this.focusableEls[this.focusableEls.length - 1];

    this.close();
  }

  // Dialog: Open
  Dialog.prototype.open = function () {
    const Dialog = this;
    const inertEls = Dialog.inertEls;

    this.dialogEl.hidden = false;
    this.dialogEl.removeAttribute('aria-hidden');

    this.focusedElBeforeOpen = document.activeElement;

    this.dialogEl.addEventListener('keydown', e => {
      Dialog._handleKeyDown(e);
    });

    this.firstFocusableEl.focus();

    document.body.style.overflow = 'hidden';

    for (let i = 0; i < inertEls.length; i++) {
      const inertEl = document.querySelector(inertEls[i]);
      inertEl.inert = true;
      inertEl.setAttribute('aria-hidden', true);
    }
  };

  // Dialog: Close
  Dialog.prototype.close = function () {
    const Dialog = this;
    const inertEls = Dialog.inertEls;

    this.dialogEl.hidden = true;
    this.dialogEl.setAttribute('aria-hidden', true);

    if (this.focusedElBeforeOpen) {
      this.focusedElBeforeOpen.focus();
    }

    document.body.removeAttribute('style');

    for (let i = 0; i < inertEls.length; i++) {
      const inertEl = document.querySelector(inertEls[i]);
      inertEl.inert = false;
      inertEl.removeAttribute('aria-hidden');
    }
  };

  // Dialog: Handle keypresses
  Dialog.prototype._handleKeyDown = function (e) {
    const Dialog = this;
    const KEY_TAB = 9;
    const KEY_ESC = 27;

    function handleBackwardTab() {
      if (document.activeElement === Dialog.firstFocusableEl) {
        e.preventDefault();
        Dialog.lastFocusableEl.focus();
      }
    }

    function handleForwardTab() {
      if (document.activeElement === Dialog.lastFocusableEl) {
        e.preventDefault();
        Dialog.firstFocusableEl.focus();
      }
    }

    switch (e.keyCode) {
      case KEY_TAB:
        if (Dialog.focusableEls.length === 1) {
          e.preventDefault();
          break;
        }
        if (e.shiftKey) {
          handleBackwardTab();
        } else {
          handleForwardTab();
        }
        break;
      case KEY_ESC:
        Dialog.close();
        break;
      default:
        break;
    }
  };

  // Dialog events
  Dialog.prototype.addEventListeners = function (openButton, closeButton) {
    const Dialog = this;
    const openButtonEl = document.querySelector(openButton);
    const closeButtonEl = document.querySelector(closeButton);

    openButtonEl.addEventListener('click', () => {
      Dialog.open();
      openButtonEl.setAttribute('aria-expanded', true);
    });

    closeButtonEl.addEventListener('click', () => {
      Dialog.close();
      openButtonEl.setAttribute('aria-expanded', false);
    });
  };

  // Options
  const openButton = opts.openWith;
  const dismissButton = opts.dismissWith;
  const inertEls = opts.inertEls;

  // Set up
  const $ = document.querySelector.bind(document);
  const targetName = $(openButton).getAttribute('aria-controls');
  const targetEl = document.getElementById(targetName);
  const myDialog = new Dialog(targetEl, inertEls);
  myDialog.addEventListeners(openButton, dismissButton);
}
