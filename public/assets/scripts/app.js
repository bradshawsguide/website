import '../styles/app.css';

import { DialogElement } from './custom-elements/dialog.js';
import { IconElement } from './custom-elements/icon.js';
import { LocateElement } from './custom-elements/locate.js';
import { ToggleElement } from './custom-elements/toggle.js';
import { VisuallyHiddenElement } from './custom-elements/visually-hidden.js';

customElements.define('b-dialog', DialogElement);
customElements.define('b-icon', IconElement);
customElements.define('b-locate', LocateElement);
customElements.define('b-toggle', ToggleElement);
customElements.define('b-visually-hidden', VisuallyHiddenElement);
