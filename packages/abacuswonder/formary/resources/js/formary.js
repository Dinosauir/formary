/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import {createApp} from 'vue';

import mitt from "mitt";

window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
try {
    require('bootstrap');
} catch (e) {
}


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

window.Vue = createApp({});
const emitter = mitt();
Vue.config.globalProperties.emitter = emitter;
require('./components/index');

Vue.mount('#app');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('navbar', require('./components/Navbar.vue').default);
// Vue.component('checkbox-input-icon', require('./components/icons/CheckboxIcon.vue').default);
// Vue.component('input-text-icon', require('./components/icons/InputTextIcon.vue').default);
// Vue.component('section-input', require('./components/SectionInput.vue').default);
// Vue.component('card', require('./components/Card.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */




