require('../css/app.sass');
require('../images/backgroundHome.jpeg');

import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

import Vue from 'vue';

import HomeFirstPart from '../components/HomeFirstPart.vue';

new Vue({
    el: '#app',
    components: {
        HomeFirstPart,
    }
});