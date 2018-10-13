
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./scripts');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//app
Vue.component('navbar', require('./components/app/navbar.vue'));
Vue.component('footerMain', require('./components/app/footerMain.vue'));
Vue.component('scrollEventListener', require('./components/app/scrollEventListener.vue'));

//Home
Vue.component('carousel', require('./components/home/carousel.vue'));
Vue.component('saleHome', require('./components/home/saleHome.vue'));
Vue.component('advertisementsHome', require('./components/home/advertisementsHome.vue'));
Vue.component('carsHome', require('./components/home/carsHome.vue'));
Vue.component('comparisionHome', require('./components/home/comparisionHome.vue'));

//Announcements
Vue.component('announcements', require('./components/announcements/announcements.vue'));
Vue.component('announcement', require('./components/announcements/announcement.vue'));

//Cars
Vue.component('cars', require('./components/cars/cars.vue'));
Vue.component('car', require('./components/cars/car.vue'));

//comparision
Vue.component('comparision', require('./components/comparision/comparision.vue'));



const app = new Vue({
    el: '#app'
});
