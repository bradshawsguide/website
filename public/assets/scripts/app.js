import '../styles/app.css';

import { DialogElement } from './custom-elements/dialog.js';
import { DialogToggleElement } from './custom-elements/dialog-toggle.js';
import geo from './modules/geo';

customElements.define('b-dialog', DialogElement);
customElements.define('b-dialog-toggle', DialogToggleElement);

geo();
