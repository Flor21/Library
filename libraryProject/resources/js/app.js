/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import BootstrapVue from 'bootstrap-vue';
import Routes from '@/js/routes.js';
import Index from './Index';
//import StoreData from './store';
//import Vuex from 'vuex';

// Set Vue globally
window.Vue = require('vue');
Vue.use(BootstrapVue);
//Vue.use(Vuex);
// Load Index
Vue.component('index', Index);

/** Se va a utilizar para registrar nuestros propios componentes**/
Vue.component('front-page', require('./components/FrontPage.vue').default);
Vue.component('subjects', require('./components/Subjects.vue').default);
Vue.component('list-subjects', require('./components/ListSubjects.vue').default);
Vue.component('my-section', require('./components/MySection.vue').default);
Vue.component('my-subjects', require('./components/MySubjects.vue').default);
Vue.component('home', require('./components/Home.vue').default);



Vue.component('login', require('./components/Login.vue').default);
Vue.component('navegation-menu', require('./components/NavegationMenu.vue').default);

//const store = new Vuex.Store(StoreData);

const app = new Vue({
    el: '#app',
    router: Routes,
});
