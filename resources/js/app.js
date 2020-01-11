// service worker stuff
if (!('serviceWorker' in navigator)) {
    console.log('service worker not supported');
} else {
    // register service worker
    navigator.serviceWorker.register(
        '/service-worker.js'
    )
    .then(function(registration){
        console.log(`SW Registered! Scope is: ${registration.scope}`);
    });
}

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

Vue.component('app', require('./components/App.vue').default);
Vue.component('header-settings', require('./components/HeaderSettings.vue').default);
Vue.component('unread-count', require('./components/UnreadCount.vue').default);
Vue.component('bottom-nav', require('./components/BottomNav.vue').default);
Vue.component('post-details', require('./components/PostDetails.vue').default);
Vue.component('post-list-item', require('./components/PostListItem.vue').default);
const app = new Vue({
    el: '#app'
});