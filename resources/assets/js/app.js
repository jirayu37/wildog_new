
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.axios=require('axios');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

Vue.component('user', require('./components/User.vue'));

Vue.component('customer', require('./components/Customer.vue'));

Vue.component('admin-des', require('./components/admin/deshboard.vue'));

Vue.component('admin-create', require('./components/admin/create.vue'));

Vue.component('admin-infor-edit', require('./components/admin/informations/infor_edit.vue'));


const app = new Vue({
    el: '#app'
});
