/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import routes from  './routes';
const router = new VueRouter({
    //mode: 'history'
    routes
});

import HomeComponent from './components/manager/HomeComponent';
import LoginComponent from './components/manager/LoginComponent';

const app = new Vue({
    el: '#app',
    components: {HomeComponent},
    template: '<HomeComponent />',

    router,
});
