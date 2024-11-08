import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import 'htmx.org';

import _hyperscript from 'hyperscript.org';
_hyperscript.browserInit();