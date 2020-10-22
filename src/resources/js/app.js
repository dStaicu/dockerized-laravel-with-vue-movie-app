require('./bootstrap');

window.Vue = require('vue');

Vue.component('movies', require('./components/Movies.vue').default);

const app = new Vue({
	el: '#app'
});