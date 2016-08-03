import Pages from './components/Pages.vue';
import FileBrowser from './components/FileBrowser.vue';
import FileBrowserTrashcan from './components/FileBrowserTrashcan.vue';

var Vue = require('vue');
Vue.use(require('vue-resource'));

new Vue({
    el: 'body',
    components: { FileBrowser,  FileBrowserTrashcan, Pages }
});

var swal = require('sweetalert');
