// Vue Dependancies

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'

import { Form, HasError, AlertError } from 'vform'

import '@pencilpix/vue2-clock-picker/dist/vue2-clock-picker.min.css';

import Swal from 'sweetalert2';

import Datepicker from 'vuejs-datepicker';
Vue.component('datepicker', Datepicker);

import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
window.Form = Form;

import vSelect from 'vue-select'
Vue.component('v-select', vSelect)

const VueClockPickerPlugin = require('@pencilpix/vue2-clock-picker/dist/vue2-clock-picker.plugin.js')
Vue.use(VueClockPickerPlugin)

Vue.use(VueAxios, axios)
Vue.use(VueRouter)

window.Swal = Swal;
window.Toast = Toast;

window.Fire = new Vue;
window.P = new Vue;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

Vue.filter('round', function (value, decimals) {
    if (!value) {
        value = 0;
    }

    if (!decimals) {
        decimals = 0;
    }

    value = Math.round(value * Math.pow(10, decimals)) / Math.pow(10, decimals);
    return value;
});

import SweetModal from 'sweet-modal-vue/src/plugin.js'
Vue.use(SweetModal)

// Components

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Vue Router

let routes = [

    { path: '/attendance', component: require('./components/Attendance.vue').default },

    { path: '/attendance-pdf', component: require('./components/AttendancePdf.vue').default },
]

const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue({
    el: '#app',
    router
});