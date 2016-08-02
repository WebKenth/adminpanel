

var Vue = require('vue');
Vue.use(require('vue-resource'));

import FileBrowser from './components/FileBrowser.vue';

new Vue({
    el: 'body',
    components: { FileBrowser }
});

var swal = require('sweetalert');
