
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/**
 * Site Component
 */
Vue.component('header-component',  require('./components/HeaderComponent.vue'));
Vue.component('sidebar-component', require('./components/SidebarComponent.vue'))
Vue.component('footer-component',  require('./components/FooterComponent.vue'));

/**
 * Site Body
 */
Vue.component('home-component',    require('./components/HomeComponent.vue'));
Vue.component('service-component', require('./components/ServiceComponent.vue'));
Vue.component('tool-component',    require('./components/ToolComponent.vue'));

const app = new Vue({
    el: '#app'
});
