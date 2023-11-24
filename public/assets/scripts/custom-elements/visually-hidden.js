import { css, LitElement, html } from 'lit';

export class VisuallyHiddenElement extends LitElement {
  static styles = css`
    :host(:not(:focus-within)) {
      block-size: 1px;
      border: none;
      clip: rect(0 0 0 0);
      clip-path: inset(50%);
      inline-size: 1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      white-space: nowrap;
    }`;

  render() {
    return html`<slot></slot>`;
  };
}
