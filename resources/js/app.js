/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 

// import './bootstrap';


window.Vue = require('vue');
window.codemirror = require('codemirror');

import "codemirror/mode/htmlmixed/htmlmixed.js"
// import 'codemirror/mode/xml/xml.js'
// import 'codemirror/mode/javascript/javascript.js'
// import 'codemirror/mode/css/css.js'


import VueClipboard from 'vue-clipboard2'
import UniqueId from 'vue-unique-id';
import VueHtml2Canvas from 'vue-html2canvas';
require('babel-polyfill')

Vue.use(VueHtml2Canvas);
Vue.use(UniqueId);

Vue.use(VueClipboard)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('editor', require('./components/Editor.vue').default);
Vue.component('preview', require('./components/Preview.vue').default);
Vue.component('create-component', require('./components/Create-component.vue').default);
Vue.component('update-component', require('./components/Update-component.vue').default);
Vue.component('copy-button', require('./components/Copy-button.vue').default);
Vue.component('show-components', require('./components/Show-components.vue').default);
Vue.component('framework-selector', require('./components/Framework-selector.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});