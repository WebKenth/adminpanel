

var Vue = require('vue');
Vue.use(require('vue-resource'));

import FileBrowser from './components/FileBrowser.vue';
import FileBrowserTrashcan from './components/FileBrowserTrashcan.vue';

new Vue({
    el: 'body',
    components: { FileBrowser,  FileBrowserTrashcan }
});

var swal = require('sweetalert');
