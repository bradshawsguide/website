import { css, LitElement, html } from 'lit';
import { IconElement } from './icon.js';
import { VisuallyHiddenElement } from './visually-hidden.js';

export class ToggleElement extends LitElement {
  constructor () {
    super();
    this.action = 'auto';
    this.target = this.closest('dialog')?.id;
    this.label = 'Toggle';
  };

  static dependencies = {
    'b-icon': IconElement,
    'b-visually-hidden': VisuallyHiddenElement
  };

  static properties = {
    action: {
      type: String,
    },
    target: {
      type: String
    },
    icon: {
      type: String
    },
    label: {
      type: String
    },
  };

  static styles = css`
    :host button {
      background: none;
      color: inherit;
      border: 0;
      display: flex;
    }

    :host button:focus-visible {
      outline: var(--focus-outline-size) solid var(--focus-outline-color);
      outline-offset: var(--focus-outline-offset);
    }`;

  #toggle() {
    const dialog = document.querySelector(`#${this.target}`);

    if (!dialog) {
      return;
    }

    switch (true) {
      case this.action === 'close': {
        dialog.close();
        break;
      }
      case this.action === 'show': {
        dialog.show();
        break;
      }
      case this.action === 'showModal': {
        dialog.showModal();
        break;
      }
      default: {
        dialog.open ? dialog.close() : dialog.show();
      }
    }
  }

  render() {
    const icon = this.icon && html`<b-icon part="icon" name=${this.icon}></b-icon>`;

    return html`
      <button part="button" @click="${this.#toggle}">
        ${icon}
        <b-visually-hidden part="label">${this.label}</b-visually-hidden>
      </button>
    `;
  };
}
