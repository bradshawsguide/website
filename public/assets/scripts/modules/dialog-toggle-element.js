export class DialogToggleElement extends HTMLElement {
  connectedCallback() {
    this.action = this.getAttribute('action') || 'auto';
    this.target = this.getAttribute('target') || this.closest('dialog').id;
    this.dialog = document.querySelector(`#${this.target}`);
    this.hasButton = this.querySelector('button');

    if (!this.hasButton) {
      const button = document.createElement('button');

      button.insertAdjacentHTML('afterbegin', this.innerHTML);

      this.innerHTML = button.outerHTML;
      this.hidden = false;
    }

    if (!this.dialog || !this.target) {
      return;
    }

    this.addEventListener('click', () => {
      switch (true) {
        case this.action === 'close': {
          this.dialog.close();
          break;
        }
        case this.action === 'show': {
          this.dialog.show();
          break;
        }
        case this.action === 'showModal': {
          this.dialog.showModal();
          break;
        }
        default: {
          this.dialog.open ? this.dialog.close() : this.dialog.show();
        }
      }
    });
  };
}
