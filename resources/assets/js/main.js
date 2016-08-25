import Pages from './components/Pages.vue';
import Editor from './components/Editor.vue';
import FileBrowser from './components/FileBrowser.vue';
import FileBrowserTrashcan from './components/FileBrowserTrashcan.vue';

var Vue = require('vue');
Vue.use(require('vue-resource'));

Vue.component('editor', Editor);

new Vue({
    el: 'body',
    components: { FileBrowser,  FileBrowserTrashcan, Pages }
});

var swal = require('sweetalert');
