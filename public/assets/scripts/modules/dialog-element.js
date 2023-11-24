export class DialogElement extends HTMLElement {
  connectedCallback() {
    this.isDialog = this instanceof HTMLDialogElement;

    if (!this.isDialog) {
      const dialog = document.createElement('dialog');

      for (const attribute of this.attributes) {
        dialog.setAttribute(attribute.name, attribute.value);
      }

      dialog.insertAdjacentHTML('afterbegin', this.innerHTML);
      this.outerHTML = dialog.outerHTML;
    }
  };
}
