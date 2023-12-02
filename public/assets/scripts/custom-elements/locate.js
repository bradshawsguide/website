import { css, LitElement, html } from "lit";
import { IconElement } from "./icon.js";
import { VisuallyHiddenElement } from "./visually-hidden.js";

export class LocateElement extends LitElement {
  constructor() {
    super();
    this.label = "Locate";
    this.error = false;
  }

  static dependencies = {
    "b-icon": IconElement,
    "b-visually-hidden": VisuallyHiddenElement,
  };

  static properties = {
    label: {
      type: String,
    },
    error: {
      type: Boolean,
      reflect: true,
    },
  };

  static styles = css`
    :host button {
      align-items: center;
      background: none;
      border: 0;
      color: inherit;
      display: flex;
    }

    :host button:focus-visible {
      outline: var(--focus-outline-size) solid var(--focus-outline-color);
      outline-offset: var(--focus-outline-offset);
    }
  `;

  #geoSuccess = (position) => {
    const lat = position.coords.latitude.toFixed(4);
    const lng = position.coords.longitude.toFixed(4);

    window.location.href = "/search?g=" + lat + "," + lng;
  };

  #geoError = () => {
    this.error = true;
  };

  #locate() {
    navigator.geolocation.getCurrentPosition(this.#geoSuccess, this.#geoError, {
      maximumAge: 30_000,
      timeout: 27_000,
    });
  }

  render() {
    return html`
      <button part="button" @click="${this.#locate}">
        <b-icon part="icon" name="locate"></b-icon>
        <b-visually-hidden part="label">${this.label}</b-visually-hidden>
      </button>
    `;
  }
}
