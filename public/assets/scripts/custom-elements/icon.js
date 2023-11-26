import { css, LitElement, html } from 'lit';

export class IconElement extends LitElement {
  constructor () {
    super();
    this.name = '';
    this.url = this.url || '/assets/vectors/icons.svg';
  };

  static properties = {
    name: {
      type: String,
    },
    url: {
      type: String,
      attribute: 'src'
    },
  };

  static styles = css`
    :host {
      block-size: 1em;
      box-sizing: content-box;
      display: inline-block;
      fill: currentcolor;
      inline-size: 1em;
    }

    svg {
      block-size: 100%;
      display: block;
      inline-size: 100%;
    }`;

  render() {
    return html`
      <svg part="svg" width="1em" height="1em" aria-hidden="true">
        <use part="use" href="${this.url}#${this.name}"></use>
      </svg>
    `;
  };
}
