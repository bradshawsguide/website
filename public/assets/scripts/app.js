import '../styles/app.css';

import { DialogElement } from './modules/dialog-element';
import { DialogToggleElement } from './modules/dialog-toggle-element';
import geo from './modules/geo';

customElements.define('b-dialog', DialogElement);
customElements.define('b-dialog-toggle', DialogToggleElement);

geo();
