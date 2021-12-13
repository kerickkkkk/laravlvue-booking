
require('./bootstrap');


import VueRouter from 'vue-router';
import router from './routes';
import moment from 'moment';

import Index from './Index.vue';
import StarRating from './shared/components/StarRating.vue'
import Vue from 'vue';
window.Vue = require('vue').default;

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.use(VueRouter)
Vue.component('StarRating', StarRating);
Vue.filter('fromNow' , value => moment(value).fromNow() )
const app = new Vue({
    el: '#app',
    router,
    components:{
        Index
    } 
});
